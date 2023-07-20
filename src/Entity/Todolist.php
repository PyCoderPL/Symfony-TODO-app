<?php

namespace App\Entity;

use App\Repository\TodolistRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TodolistRepository::class)]
class Todolist
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $listname = null;

    #[ORM\Column(length: 100)]
    private ?string $aboutlist = null;

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

    public function getAboutlist(): ?string
    {
        return $this->aboutlist;
    }

    public function setAboutlist(string $aboutlist): static
    {
        $this->aboutlist = $aboutlist;

        return $this;
    }
}
