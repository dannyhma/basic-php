<?php

require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../BusinessLogic/RemoveTodoList.php";

function viewRemoveTodoList()
{
    echo "Menghapus todo" . PHP_EOL;

    $pilihan = input("Nomor (x untuk batal)");

    if ($pilihan == "x" || $pilihan == "enter" || empty($pilihan)) {
        echo "Batal menghapus todo ";
    } else {
        $success = removeTodoList($pilihan);

        if ($success) {
            echo "Sukses menghapus todo nomor $pilihan" . PHP_EOL;
        } else {
            echo "Gagal menghapus todo nomor $pilihan" . PHP_EOL;
        }
    }
}
