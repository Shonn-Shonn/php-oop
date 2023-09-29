<?php 


class Collection_One
{
    public $items = [];

    public function __construct(array $items)
    {
        $this->items = $items;
    }

    public static function accessible($value)
    {
        return is_array($value) || $value instanceof ArrayAccess;
    }

    function Column(){
        $rec = array_column($this->items, 'shop_name', 'year');
        return $rec;
    }

    public static function add($array, $key, $value)
    {
        if (is_null(static::get($array, $key))) {
            static::set($array, $key, $value);
        }

        return $array;
    }

    public static function set(&$array, $key, $value)
    {
        $array[$key] = $value;
    }

    public static function get($array, $key, $default = null)
    {
        return isset($array[$key]) ? $array[$key] : $default;
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

//print_r($objs->Column());


$newArray = Collection_One::accessible([new One('Bim',23),new One('KF',235)]);

print_r($newArray);