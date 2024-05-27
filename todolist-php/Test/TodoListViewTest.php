<?php

require_once __DIR__ . "/../Entity/TodoList.php";
require_once __DIR__ . "/../Repository/TodoRepository.php";
require_once __DIR__ . "/../Service/TodoListService.php";
require_once __DIR__ . "/../View/TodoListView.php";
require_once  __DIR__ . "/../Helper/inputHelper.php";

use \Entity\TodoList;
use \Repository\TodoListRepositoryImpl;
use \Service\TodoListServiceImpl;
use \View\TodoListView;

function testViewShowTodolist(): void
{

  $todoListRepository = new TodoListRepositoryImpl();
  $todoListService = new TodoListServiceImpl($todoListRepository);
  $todoListView = new TodoListView($todoListService);

  $todoListService->addTodoList("Belajar PHP");
  $todoListService->addTodoList("Belajar PHP OOP");
  $todoListService->addTodoList("Belajar PHP Database");

  $todoListView->showTodoList();
}

function testViewAddTodolist(): void
{

  $todoListRepository = new TodoListRepositoryImpl();
  $todoListService = new TodoListServiceImpl($todoListRepository);
  $todoListView = new TodoListView($todoListService);

  $todoListService->addTodoList("Belajar PHP");
  $todoListService->addTodoList("Belajar PHP OOP");
  $todoListService->addTodoList("Belajar PHP Database");

  $todoListService->showTodoList();
  $todoListView->addTodoList();
  $todoListService->showTodoList();
  $todoListView->addTodoList();
  $todoListService->showTodoList();
}

function testViewRemoveTodolist(): void
{

  $todoListRepository = new TodoListRepositoryImpl();
  $todoListService = new TodoListServiceImpl($todoListRepository);
  $todoListView = new TodoListView($todoListService);

  $todoListService->addTodoList("Belajar PHP");
  $todoListService->addTodoList("Belajar PHP OOP");
  $todoListService->addTodoList("Belajar PHP Database");

  $todoListService->showTodoList();
  $todoListView->removeTodosList();
  $todoListService->showTodoList();
  $todoListView->removeTodosList();
  $todoListService->showTodoList();
}

testViewRemoveTodolist();