<?php

namespace Repository {

    use Entity\TodoList;

    interface TodoListRepository
    {
        function save(TodoList $todolist): void;

        function remove(int $number): bool;

        function findAll(): array;
    }

    class TodoListRepositoryImpl implements TodoListRepository
    {
        private array $todolist = array();

        function save(TodoList $todolist): void
        {
        }

        function remove(int $number): bool
        {
            return 0;
        }

        function findAll(): array
        {
            return $this->todolist;
        }
    }
}
