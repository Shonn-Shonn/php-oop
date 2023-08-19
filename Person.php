<?php 

class Person{
    private $name;
    protected $age;

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getAge(){
        return $this->age;
    }

    public function setAge($age){
        if($age >= 0){
            $this->age = $age;
        }
    }
}

$person = new Person();
$person->setName('John');
$person->setAge(25);

echo "Name: ". $person->getName();
echo "Age: ". $person->getAge();