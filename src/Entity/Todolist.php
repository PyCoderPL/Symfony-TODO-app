<?php

namespace App\Entity;

use App\Repository\ToDoListRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ToDoListRepository::class)]
class Todolist
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $listname = null;

    #[ORM\Column(length: 100)]
    private ?string $description = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getListname(): ?string
    {
        return $this->listname;
    }

    public function setListname(string $listname): static
    {
        $this->listname = $listname;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }
}
