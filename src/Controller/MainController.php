<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/', name: 'show.')]
class MainController extends AbstractController
{
    #[Route('/lists', name: 'lists')]
    public function showLists(): Response
    {
        return $this->render(view: 'todolist/showLists.html.twig');
    }
    #[Route('/tasks', name: 'all_tasks')]
    public function showAllTasks(): Response
    {
        return $this->render(view: 'todolist/showAllTasks.html.twig');
    }
    #[Route('/tasks/{id}', name: 'one_task')]
    public function showOneTask($id): Response
    {
        return $this->render(view: 'todolist/showOneTask.html.twig', parameters: [
            'id' => $id
        ]);
    }
}
