<?php

class Person{
    private $name;
    private $surname;
    private $age;
    const AGE = 50;

    public function __construct($name, $surname, $age=20)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;
    }

    public function getName() {
        return $this->name;
    }

    public function getSurname () {
        return $this->surname;
    }
    public function getAge () {
return self:: AGE;

    }
public function setAge () {
$this->age++;
return $this->age;
}
}

