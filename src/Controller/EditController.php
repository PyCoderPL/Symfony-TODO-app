<?php

namespace App\Controller;

use App\Form\AddListType;
use App\Form\AddTaskType;
use App\Repository\TaskRepository;
use App\Repository\TodolistRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

#[Route('/lists', name: 'app.')]
class EditController extends AbstractController
{
    // edit list
    #[Route('/edit/{listname}', name: 'edit_list')]
    public function editList(Request $request, $listname, TodolistRepository $todolistRepo, EntityManagerInterface $em)
    {

        $list = $todolistRepo->findOneBy(array('listname' => $listname));

        $form = $this->createForm(AddListType::class, $list);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($list);
            $em->flush();

            $this->addFlash('list_notice', 'List was edited!');
            return $this->redirect($this->generateUrl(route: 'app.lists'));
        }
        return $this->render(
            view: 'edit/editList.html.twig', parameters: [
            'listname' => $listname,
            'form' => $form
            ]
        );
    }

    // edit task
    #[Route('/edit/{listname}/{id}', name: 'edit_task')]
    public function editTask(Request $request, $listname, $id, TaskRepository $taskRepo, EntityManagerInterface $em)
    {

        $task = $taskRepo->findOneBy(array('id' => $id));

        $form = $this->createForm(AddTaskType::class, $task);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($task);
            $em->flush();

            $this->addFlash('task_notice', 'Task was edited!');
            return $this->redirect(
                $this->generateUrl(
                    route: 'app.all_tasks', parameters: [
                    'listname' => $listname
                    ]
                )
            );
        }
        return $this->render(
            view: 'edit/editTask.html.twig', parameters: [
            'listname' => $listname,
            'form' => $form
            ]
        );
    }

    #[Route('/change/{id}/{finished}', name: 'finished')]
    public function setFinished($id, $finished, TaskRepository $taskRepo, TodolistRepository $todolistRepo, EntityManagerInterface $em)
    {
        $task = $taskRepo->findOneBy(array('id' => $id));
        $task->setFinished($finished);

        $listname = $task->getList()->getListname();

        $em->persist($task);
        $em->flush();

        if ($finished == 1) {
            $this->addFlash('task_notice', 'Task is finished!');
        } elseif ($finished == 0) {
            $this->addFlash('task_notice', 'Task was activated!');
        }

        return $this->redirect(
            $this->generateUrl(
                'app.all_tasks', parameters: [
                'listname' => $listname
                ]
            )
        );
    }
}
