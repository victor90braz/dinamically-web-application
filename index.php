<?php

include __DIR__ . "/router/router.php";


class Person {
  private $name;
  private $age;

  public function __construct($name, $age) {
      $this->name = $name;
      $this->age = $age;
  }

  public function getName() {
      return $this->name;
  }

  public function getAge() {
      return $this->age;
  }

  public function breathe() {
      return "{$this->name} is breathing...";
  }
}

// Create a Person object
$victor = new Person("Victor", 32);

// Get the person's age and breathing message
$age = $victor->getAge();
$breathingMessage = $victor->breathe();

// Display information about the person
echo "{$breathingMessage} Age: {$age}";





