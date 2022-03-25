<!DOCTYPE html>
<html>
<body>

<?php
class Fruit {
  public $name;
  public $age;
  public $collage;
  function __construct($name, $age, $collage) {
    $this->name = $name; 
    $this->age = $age; 
    $this->collage = $collage; 
  }
  function get_name() {
  echo "Name : \n";
    return $this->name;
  }
  function get_age() {
  echo "Age : \n";
    return $this->age;
  }
   function get_collage() {
  echo "Collage : \n";
    return $this->collage;
  }
}

$apple = new Fruit("sahil", "21","Marwadi University");
echo $apple->get_name();
echo "<br>";
echo $apple->get_age();
echo "<br>";
echo $apple->get_collage();
?>
 
</body>
</html>
