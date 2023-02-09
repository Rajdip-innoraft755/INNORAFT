<?php
class Fruit {
  public $name;
  public $color;
  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }
  public function intro() {
    echo "The fruit is {$this->name} and the color is {$this->color}.";
  }
}

class Strawberry extends Fruit {
  public $weight;
  public function __construct($name,$color,$weight) {
    parent ::__construct($name,$color);
    //parent class constructor is called by this way otherwise you have to override the constructor
    $this->weight = $weight;
  }
  public function intro() {
    echo "The fruit is {$this->name}, the color is {$this->color}, and the weight is {$this->weight} gram." ."\n";
    echo "calling parent intro. \n";
    parent::intro();
  }
}

$strawberry = new Strawberry("Strawberry", "red", 50);
$strawberry->intro();
?>