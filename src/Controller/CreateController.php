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
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

#[Route('/lists', name: 'app.')]
class CreateController extends AbstractController
{
    //  create new list (empty)
    #[Route('/createnewlist', name: 'create_new_list')]
    public function createNewList(Request $request, EntityManagerInterface $em)
    {
        $newList = new Todolist();

        $form = $this->createForm(AddListType::class, $newList);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $em->persist($newList);
            $em->flush();

            $this->addFlash('list_notice', 'List was created!');
            return $this->redirect($this->generateURL('app.lists'));
        }
        return $this->render(
            view: 'create/createNewList.html.twig', parameters: [
            'form' => $form
            ]
        );
    }

    // create new task
    #[Route('/addnewtask/{listname}', name: 'add_new_task')]
    public function createNewTask(Request $request, EntityManagerInterface $em)
    {
        $listname = $request->get(key: 'listname');

        $newTask = new Task();
        $newTask->setDeadline(new DateTime(), 'Y-m-d H:i:s');
        $newTask->setFinished(0);

        $form = $this->createForm(AddTaskType::class, $newTask);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em->persist($newTask);
            $em->flush();

            $this->addFlash('task_notice', 'Task was created!');
            return $this->redirect(
                $this->generateUrl(
                    'app.all_tasks', parameters: [
                    'listname' => $listname
                    ]
                )
            );
        }

        return $this->render(
            view: 'create/addNewTask.html.twig', parameters: [
            'form' => $form,
            'listname' => $listname
            ]
        );
    }

    // remove one list (except tasks)
    #[Route('/removelist/{listname}', name: 'remove_list')]
    public function removeList(Todolist $todolist, TaskRepository $taskRepo, TodolistRepository $todolistRepo)
    {
        // // first, remove all tasks from list
        $tasks = $taskRepo->findBy(array('list' => $todolist->getId()));
        foreach ($tasks as $key => $val) {
            $taskRepo->remove($val, flush: true);
        };

        // next, remove empty  list
        $todolistRepo->remove($todolist, flush: true);
        $this->addFlash('list_notice', 'List was removed!');

        return $this->redirect($this->generateUrl('app.lists'));
    }

    // remove one task
    #[Route('/removetask/{id}', name: 'remove_task')]
    public function removeTask(Task $task, TaskRepository $taskRepo)
    {
        $taskRepo->remove($task, flush: true);

        $this->addFlash('task_notice', 'Task was removed!');

        return $this->redirect(
            $this->generateUrl(
                'app.all_tasks', parameters: [
                'listname' => $task->getList()
                ]
            )
        );
    }
}
