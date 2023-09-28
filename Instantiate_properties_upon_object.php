<?php 

class Instantiate_properties_upon_object
{
  public $first_property;
  public $connecting_type;

  function __construct($first_property,$connecting_type) {
    $this->first_property = $first_property;
    $this->connecting_type = $connecting_type;
  }

  function __destruct()
  {
    echo "The property name is {$this->first_property}{$this->connecting_type}";
  }
  function get_name() {
    return $this->first_property;

  }
}

$objOne = new Instantiate_properties_upon_object('Creation','Db_connection');
echo $objOne->get_name();

