<?php

namespace App\Form;

use App\Entity\Task;
use App\Entity\Todolist;
use App\Repository\TaskRepository;
use App\Repository\TodolistRepository;
use Doctrine\ORM\Mapping\Entity;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AddTaskType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add(
                'list', EntityType::class, options: [
                'class' => Todolist::class,
                'attr' => [
                    'class' => 'form-control',
                ],
                'label' => 'List name',
                'placeholder' => 'choose list'

                ]
            )
            ->add(
                'task', TextType::class, options: [
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'add new task name'
                ],
                'label' => 'Task name'
                ]
            )
            ->add(
                'category', TextType::class, options: [
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'add category task'
                ],
                'label' => 'Category'
                ]
            )
            ->add(
                'description', TextareaType::class, options: [
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'describe your task shortly'
                ],
                'label' => 'Description'
                ]
            )
            ->add(
                'deadline', DateType::class, options: [
                'attr' => [
                    'class' => '',
                    'value' => ''
                ],
                'label' => 'Deadline'
                ]
            )
            ->add(
                'save', SubmitType::class, options: [
                'attr' => [
                    'class' => 'btn btn-success btn-sm mt-3 mb-3'
                ]
                ]
            );
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults(
            [
            'data_class' => Task::class,
            ]
        );
    }
}
