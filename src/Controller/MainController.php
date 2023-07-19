<?php

namespace App\Controller;

use App\Entity\Task;
use App\Repository\TaskRepository;
use App\Repository\TodolistRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\ORM\EntityManagerInterface;

#[Route('/lists', name: 'show.')]
class MainController extends AbstractController
{
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
    public function showAllTasks($listname, TaskRepository $taskRepo): Response
    {
        $tasks = $taskRepo->findBy(array('listname' => $listname));
        return $this->render(view: 'todolist/showAllTasks.html.twig', parameters: [
            'tasks' => $tasks
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
