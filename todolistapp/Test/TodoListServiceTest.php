<?php

require_once __DIR__ . "/../Entity/TodoList.php";
require_once __DIR__ . "/../Repository/TodoRepository.php";
require_once __DIR__ . "/../Service/TodoListService.php";

use Entity\TodoList;
use Service\TodoListServiceImpl;
use Repository\TodoListRepositoryImpl;

function testShowTodoList(): void
{
    $todoListRepository = new TodoListRepositoryImpl();
    $todoListRepository->todolist[1] = new TodoList("Belajar PHP");
    $todoListRepository->todolist[2] = new TodoList("Belajar PHP OOP");
    $todoListRepository->todolist[3] = new TodoList("Belajar PHP Database");

    $todoListService = new TodoListServiceImpl($todoListRepository);

    $todoListService->showTodoList();
}

function testAddTodoList(): void
{
    $todoListRepository = new TodoListRepositoryImpl();

    $todoListService = new TodoListServiceImpl($todoListRepository);
    $todoListService->addTodoList("Belajar PHP");
    $todoListService->addTodoList("Belajar PHP OOP");
    $todoListService->addTodoList("Belajar PHP Database");

    $todoListService->showTodoList();
}

function testRemoveTodoList(): void
{
    $todoListRepository = new TodoListRepositoryImpl();

    $todoListService = new TodoListServiceImpl($todoListRepository);
    $todoListService->addTodoList("Belajar PHP");
    $todoListService->addTodoList("Belajar PHP OOP");
    $todoListService->addTodoList("Belajar PHP Database");

    $todoListService->showTodoList();

    $todoListService->removeTodoList(1);
    $todoListService->showTodoList();
}

testRemoveTodoList();
