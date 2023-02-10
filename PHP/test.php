<?php

/**
 * PHP
 */
// CÂU 1:
$product = [
    'p1' => [
        'name' => 'shirt',
        'price' => 2
    ],
    'p2' => [
        'name' => 'watch',
        'price' => 2.99
    ],
    'p3' => [
        'name' => 'phone',
        'price' => 5.99
    ],
    'p4' => [
        'name' => 'book',
        'price' => 1.5
    ]
];

function maxMin($arr)
{
    $subArr = [];
    foreach ($arr as  $item) {
        $subArr[] = $item['price'];
    }
    $result = "Max = " . max($subArr) . ", min = " . min($subArr);
    return $result;
}


//CÂU 2
function addDay($day, $date_input)
{
    $date = strtotime("+$day day", strtotime($date_input));
    $result = date('d-m-Y H:i:s', $date);
    return $result;
}


function minusDay($day, $date_input)
{
    $date = strtotime("-$day day", strtotime($date_input));
    $result = date('d-m-Y H:i:s', $date);
    return $result;
}



//CÂU 3:
function compare($date_input1, $date_input2)
{
    $first_arg =  strtotime($date_input1);
    $second_arg = strtotime($date_input2);

    if ($first_arg > $second_arg) {
        $day = floor(($first_arg - $second_arg) / (60 * 60 * 24));
        $result = "The bigger day is " . date('d-m-Y', $first_arg) . " and bigger than $day day";
    } else if ($first_arg < $second_arg) {
        $day = floor(($second_arg - $first_arg) / (60 * 60 * 24));
        $result = "The bigger day is " . date('d-m-Y', $second_arg) . " and bigger than $day day";
    }

    return $result;
}


//CÂU 4:


//CÂU 5:
$file_path = "./csv.csv";
if (file_exists($file_path)) {
    $file = fopen($file_path, "r");
    $csv = fgetcsv($file, null, ';');
    print_r($csv);
    while (!feof($file)) {
    }
}
