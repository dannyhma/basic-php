<?php

use Model\Comment;
use Repository\CommentRepositoryImpl;

require_once __DIR__ . "/GetConnection.php";
require_once __DIR__ . '/Model/Comment.php';
require_once __DIR__ . '/Repository/CommentRepository.php';

$connection = getConnection();
$repository = new CommentRepositoryImpl($connection);

// $comment = new Comment(email: "dannyhimawan@gmail.com", comment: "Hi");
// $newComment = $repository->insert($comment);
// var_dump($newComment->getId());

// $comment = $repository->findById(32)
// var_dump($comment);

// $comments = $repository->findAll()
// var_dump($comments);

$connection = null;