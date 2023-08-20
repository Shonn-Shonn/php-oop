<?php 

//encapsulation is like restruction of access

class Person 
{
    public $name; 

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function job()
    {
        return 'software developer';
    }

    public function favoriteTeam()
    {

    }

    private function thingsThatKeepUpAtNight()
    {
        return 'Keep it up!';
    }

}

$bob = new Person('Bob');

//var_dump($bob->thingsThatKeepUptNight());

$method = new \ReflectionMethod(Person::class, 'thingsThatKeepUpAtNight');
$method->setAccessible(true);

$person = new Person('Bob');

echo $method->invoke($person);

$person->name = 'Khin Khin';

echo $person->name;