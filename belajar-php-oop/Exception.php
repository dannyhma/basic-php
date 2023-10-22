<?php

require_once "Exception/ValidationException.php";
require_once "Data/LoginRequest.php";
require_once "Helper/Validation.php";

$loginRequest = new LoginRequest();
$loginRequest->username = "";
$loginRequest->password = "";

try {
    validateLoginRequest($loginRequest);
    echo "VALID" . PHP_EOL;
} catch (ValidationException | Exception $exception) {
    echo "Error : {$exception->getMessage()}" . PHP_EOL;

    var_dump($exception->getTrace());

    echo $exception->getTraceAsString() . PHP_EOL;
} finally {
    echo "ERROR ATAU TIDAK, AKAN DIEKSEKUSI" . PHP_EOL;
}
