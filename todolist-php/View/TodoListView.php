<?php

namespace View {

    use Service\TodoListService;
    use Helper\InputHelper;

    class TodoListView
    {

        private TodoListService $todoListService;

        public function __construct(TodoListService $todoListService)
        {
            $this->todoListService = $todoListService;
        }

        function showTodoList(): void
        {
            while (true) {
                $this->todoListService->showTodoList();

                echo "MENU" . PHP_EOL;
                echo "1. Tambah Todo" . PHP_EOL;
                echo "2. Hapus Todo" . PHP_EOL;
                echo "x. Keluar" . PHP_EOL;

                $pilihan = InputHelper::input("Pilihan");

                if ($pilihan == "1") {
                    $this->addTodoList();
                } else if ($pilihan == "2") {
                    $this->removeTodosList();
                } else if ($pilihan == "x") {
                    break;
                } else {
                    echo "Pilhan tidak dimengerti" . PHP_EOL;
                }
            }
        }

        function addTodoList(): void
        {
            echo "Menambah Todo" . PHP_EOL;

            $todo = InputHelper::input("Todo (x untuk batal)");

            if ($todo == "x") {
                echo "Batal menambah todo";
            } else {
                $this->todoListService->addTodoList($todo);
            }
        }

        function removeTodosList(): void
        {
            echo "Menghapus todo" . PHP_EOL;

            $pilihan = InputHelper::input("Nomor (x untuk batal)");

            if ($pilihan == "x" || $pilihan == "enter" || empty($pilihan)) {
                echo "Batal menghapus todo ";
            } else {
                $this->todoListService->removeTodoList($pilihan);
            }
        }
    }
}