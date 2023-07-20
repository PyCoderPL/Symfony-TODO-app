<?php

namespace App\Controller;

use App\Entity\Task;
use App\Entity\Todolist;
use App\Form\AddListType;
use App\Form\AddTaskType;
use App\Repository\TaskRepository;
use App\Repository\TodolistRepository;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Validator\Constraints\Date;

#[Route('/lists', name: 'show.')]
class MainController extends AbstractController
{
    #[Route('/createnewlist', name: 'create_new_list')]
    public function createNewList(Request $request, EntityManagerInterface $em)
    {
        $newList = new Todolist();
        $form = $this->createForm(AddListType::class, $newList);

        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $em->persist($newList);
            $em->flush();
            $this->addFlash('create_list_success', 'List was created!');
            return $this->redirect($this->generateURL('show.lists'));
        }
        return $this->render(view: 'todolist/createNewList.html.twig', parameters: [
            'form' => $form
        ]);
    }

    #[Route('/addnewtask/{listname}', name: 'add_new_task')]
    public function addNewTask($listname, Request $request, EntityManagerInterface $em)
    {
        $date = new DateTime();
        $date->format('Y-m-d H:i:s');

        $newTask = new Task();
        $newTask->setListname($listname)
            ->setDeadline($date)
            ->setFinished('0');

        $form = $this->createForm(AddTaskType::class, $newTask);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $em->persist($newTask);
            $em->flush();

            $this->addFlash('add_task_success', 'Task was created!');
            return $this->redirect($this->generateUrl('show.all_tasks', parameters: [
                'listname' => $listname
            ]));
        }

        return $this->render(view: 'todolist/addNewTask.html.twig', parameters: [
            'form' => $form,
            'listname' => $listname
        ]);
    }

    #[Route('/', name: 'lists')]
    public function showLists(TaskRepository $taskRepo, TodolistRepository $todolistRepo): Response
    {
        $lists = $todolistRepo->findAll();
        $taskstats = $taskRepo->getTaskCount();
        return $this->render(view: 'todolist/showLists.html.twig', parameters: [
            'lists' => $lists,
            'taskstats' => $taskstats
        ]);
    }

    #[Route('/{listname}', name: 'all_tasks')]
    public function showTasks($listname, TaskRepository $taskRepo): Response
    {
        $tasks = $taskRepo->findBy(array('listname' => $listname));
        return $this->render(view: 'todolist/showTasks.html.twig', parameters: [
            'tasks' => $tasks,
            'listname' => $listname
        ]);
    }

    #[Route('/{listname}/{id}', name: 'one_task')]
    public function showOneTask($id, TaskRepository $taskRepo): Response
    {
        $task = $taskRepo->find($id);
        return $this->render(view: 'todolist/showOneTask.html.twig', parameters: [
            'task' => $task
        ]);
    }
}
