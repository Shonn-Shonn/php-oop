<?php 

abstract class Ab_Class
{

    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    abstract public function intro();
}

class Sub_Class extends Ab_Class{
    public function intro()
    {
        return "hello,guys! Nice to meet ya all.".$this->name;
    }
}

$cd = new Sub_Class('helo');


echo $cd->intro();