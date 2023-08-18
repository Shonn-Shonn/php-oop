<?php 

abstract class Animal{
    //child classes must implement this 
    abstract function prey();

    public function run()
    {
        echo 'I am running';
    }
}

class Dog extends Animal{
    public function prey()
    {
        echo "I killed the cat!";
    }
}

class Cat extends Animal{
    public function prey()
    {
        echo "I killed the rat !";
    }
}

$dog = new Dog();
$cat = new Cat();

$dog->prey();
$cat->prey();

$dog->run();
$cat->run();