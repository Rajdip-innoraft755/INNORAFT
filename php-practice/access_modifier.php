<?php
class Fruit {
  public $name;
  public $color;
  public $weight;

  
  protected function set_color($n) { // a protected function
    $this->color = $n;
  }
  private function set_weight($n) { // a private function
    $this->weight = $n;
  }
  function set_name($n) {  // a public function (default)
    $this->name = $n;
    $this->set_color('yellow');
    $this->set_weight(10);
    echo "$this->name" . "\n" ."$this->color" ."\n" ."$this->weight" ."\n";
  }
}

class Childclass extends Fruit{
    function __construct(){
        $this->set_color('red');
        echo $this->color ."\n";
        $this->set_weight(10);
        echo $this->weight ."\n";
    }
    
}

$mango = new Fruit();
$mango->set_name('Mango'); // OK
$apple=new Childclass();

?>