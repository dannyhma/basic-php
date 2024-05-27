<?php

require_once "../View/ViewAddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Membuat TodoList");
addTodoList("Membuat Aplikasi Android");

viewAddTodoList();

showTodoList();
