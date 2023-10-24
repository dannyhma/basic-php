<?php

require_once __DIR__ . "/../Entity/TodoList.php";
require_once __DIR__ . "/../Repository/TodoRepository.php";
require_once __DIR__ . "/../Service/TodoListService.php";

use Service\TodoListServiceImpl;
use Repository\TodoListRepositoryImpl;

function testShowTodoList(): void
{
    $todoListRepository = new TodoListRepositoryImpl();
    $todoListRepository->todolist[1] = "Belajar PHP";
    $todoListRepository->todolist[2] = "Belajar PHP OOP";
    $todoListRepository->todolist[3] = "Belajar PHP Database";

    $todoListService = new TodoListServiceImpl($todoListRepository);

    $todoListService->showTodoList();
}

testShowTodoList();
