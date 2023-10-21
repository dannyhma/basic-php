<?php

class Zero
{
    private array $properties = [];

    public function __get($name)
    {
        // echo "Access property $name" . PHP_EOL;
        // return "CONTOH";
        return $this->properties[$name];
    }

    public function __set($name, $value)
    {
        // echo "Set property $name with value $value" . PHP_EOL;
        $this->properties[$name] = $value;
    }

    public function __isset($name): bool
    {
        // echo "Isset $name" . PHP_EOL;
        // return false;
        return isset($this->properties[$name]);
    }

    public function __unset($name)
    {
        // echo "Unset $name" . PHP_EOL;
        // return false;
        unset($this->properties[$name]);
    }

    public function __call($name, $arguments)
    {
        $join = join(", ", $arguments);
        echo "Call function $name with arguments $join" . PHP_EOL;
    }

    public static function __callStatic($name, $arguments)
    {
        $join = join(", ", $arguments);
        echo "Call static function $name with arguments $join" . PHP_EOL;
    }
}

$zero = new Zero();
// echo $zero->firstName . PHP_EOL;
// isset($zero->firstName);
// unset($zero->firstName);
$zero->firstName = "Danny";
$zero->middleName = "D.";
$zero->lastName = "Himawan";

echo "First name : $zero->firstName" . PHP_EOL;
echo "Middle name : $zero->middleName" . PHP_EOL;
echo "Last name : $zero->lastName" . PHP_EOL;

$zero->sayHello("Danny", "Himawan");
Zero::sayHello("Danny", "Himawan");
