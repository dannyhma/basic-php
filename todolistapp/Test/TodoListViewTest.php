<?php

require_once "../Entity/TodoList.php";
require_once "../Repository/TodoRepository.php";
require_once "../Service/TodoListService.php";
require_once "../View/TodoListView.php";
require_once "../Helper/inputHelper.php";

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