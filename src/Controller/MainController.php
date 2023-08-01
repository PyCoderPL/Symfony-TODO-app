<?php

namespace App\Controller;

use App\Entity\Task;
use App\Repository\TaskRepository;
use App\Repository\TodolistRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/lists', name: 'app.')]
class MainController extends AbstractController
{
    // display lists (all)
    #[Route('/', name: 'lists')]
    public function showLists(TodolistRepository $todolistRepo): Response
    {
        // custom function
        $lists = $todolistRepo->getListInfo();
        return $this->render(
            view: 'main/showLists.html.twig', parameters: [
            'lists' => $lists
            ]
        );
    }

    // display all tasks (all tasks from selected list)
    #[Route('/{listname}', name: 'all_tasks')]
    public function showTasks($listname, TodolistRepository $todolistRepo, TaskRepository $taskRepo): Response
    {
        $list = $todolistRepo->findBy(array('listname' => $listname));
        $tasks = $taskRepo->findBy(array('list' => $list));

        return $this->render(
            view: 'main/showTasks.html.twig', parameters: [
            'list' => $list,
            'tasks' => $tasks
            ]
        );
    }

    // display one task
    #[Route('/{listname}/{id}', name: 'one_task')]
    public function showOneTask(Task $task, $listname): Response
    {
        return $this->render(
            view: 'main/showOneTask.html.twig', parameters: [
            'listname' => $listname,
            'task' => $task
            ]
        );
    }
}
