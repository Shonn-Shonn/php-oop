<?php 


//inheritance
class CoffeeMaker
{
    public function __construct()
    {
        
    }

    public function brew()
    {
        var_dump('Brewing the coffeee');
    }
}

class SpecialCoffeeMaker extends CoffeeMaker
{
    public function brewLatte()
    {
        var_dump('Brewing the latte');
    }
}

(new CoffeeMaker())->brew();

(new SpecialCoffeeMaker())->brew();

(new SpecialCoffeeMaker())->brewLatte();

