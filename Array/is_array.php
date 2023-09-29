<?php

$arr = array('Carbon','Oxygen');

echo is_array($arr) ? 'Array' : 'not an Array';
echo "\n";

$a_sen = 'a sentence';

echo is_array($a_sen) ? 'Array' : 'not an Array';

function accessible($value) {
    echo is_array($value) || ($value instanceof ArrayAccess);
}


function add(&$array, $key, $value) {
    $keys = explode('.', $key);
    while (count($keys) > 1) {
        $key = array_shift($keys);
        if (!isset($array[$key]) || !is_array($array[$key])) {
            $array[$key] = [];
        }
        $array = &$array[$key];
    }
    $array[array_shift($keys)] = $value;
}

$data = ['user' => ['name' => 'John']];
add($data, 'user.age', 30);

print_r($data);
