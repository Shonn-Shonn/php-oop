<?php
class Access_Modifiers {
  public $name;
  public $color;
  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color; 
  }
  protected function intro() {
    echo "The fruit is {$this->name} and the color is {$this->color}."; 
  }
}

class Strawberry extends Access_Modifiers {
  public function message() {
    echo "Am I a fruit or a berry? ";
  }
  
  public function intro()
  {
    echo "The fruit is {$this->name} and the colro is {$this->color}";
  }


}
$strawberry = new Strawberry("Strawberry", "red"); 
$strawberry->intro();
?>