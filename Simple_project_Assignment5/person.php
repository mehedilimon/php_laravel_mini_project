<?php
class Person {
  private $name;
  private $email;

  public function setName($name) {
    $this->name = $name;
  }

  public function setEmail($email) {
    $this->email = $email;
  }

  public function getName() {
    return $this->name;
  }

  public function getEmail() {
    return $this->email;
  }
}

$person = new Person();

if (isset($_POST['name'])) {
  $person->setName($_POST['name']);
}
if (isset($_POST['email'])) {
  $person->setEmail($_POST['email']);
}
echo "Name: " . $person->getName() . "<br>";
echo "Email: " . $person->getEmail() . "<br>";
?>