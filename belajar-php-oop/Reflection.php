<?php

require_once "Exception/ValidationException.php";
require_once "Data/LoginRequest.php";
require_once "Helper/ValidationUtil.php";

$request = new LoginRequest();
$request->username = "Danny";
$request->password = "Rahasia";

// ValidationUtil::validate($request);

ValidationUtil::validateReflection($request);

class RegisterUserRequest
{
    public ?string $name;
    public ?string $address;
    public ?string $email;
}

$register = new RegisterUserRequest();
$register->name = "Danny";
$register->address = "Tulang Bawang";
$register->email = "dannyhimawan089@gmail.com";

ValidationUtil::validateReflection($register);
