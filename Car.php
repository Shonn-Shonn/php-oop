<?php 


class User 
{
    private $name;
    private $age;
    private $email;

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function setAge($age)
    {
        $this->age = $age;
        return $this;
    }

    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    public function getInfo()
    {
        return "Name: {$this->name}, Age: {$this->age}, Email: {$this->email}";
    }
}

$user = new User();
$userInfo = $user->setName("John")->setAge(30)->setEmail("john@example.com")->getInfo();
echo $userInfo;