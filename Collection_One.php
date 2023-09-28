<?php 


class Collection_One
{
    public $items = [];

    public function __construct(array $items)
    {
        $this->items = $items;
    }

    function Column(){
        $rec = array_column($this->items, 'shop_name', 'year');
        return $rec;
    }
     
}


class One{
    public $shop_name;
    public $year; 

    public function __construct($shop_name, $year)
    {
        $this->shop_name = $shop_name;
        $this->year = $year;
    }
}

$objs = new Collection_One([new One('BimBam',2002),new One('KFC',2010),new One('Lotteria',2001)]);

print_r($objs->Column());