<?php
class User {

public $name;
public $age;

public function __construct($name, $age)
{
$this->name = $name;
$this->age  = $age;
}

public function echoAge()
{
echo $this->age;
}
}

$args  = ['Leonard', 21];
$bones = new User(...$args);
$bones->echoAge();
