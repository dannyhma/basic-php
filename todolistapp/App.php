<?php

require_once __DIR__ . "/Entity/TodoList.php";
require_once __DIR__ . "/Helper/inputHelper.php";
require_once __DIR__ . "/Repository/TodoRepository.php";
require_once __DIR__ . "/Service/TodoListService.php";
require_once __DIR__ . "/View/TodoListView.php";

use Repository\TodoListRepositoryImpl;
use Service\TodoListServiceImpl;
use View\TodoListView;

echo "App TodoList" . PHP_EOL;

$todoListRepository = new TodoListRepositoryImpl();
$todoListService = new TodoListServiceImpl($todoListRepository);
$todoListView = new TodoListView($todoListService);

$todoListView->showTodoList();