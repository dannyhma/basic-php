<?php

require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();

// $sql = <<<SQL
//     INSERT INTO customers(id, name, email)
//     VALUES (1, 'Danny Himawan', 'dannyhimawan@gmail.com')
// SQL;

// $sql = <<<SQL
//     INSERT INTO admin(username, password)
//     VALUES ('admin', 'admin')
// SQL;

$connection->exec($sql);

$connection = null;