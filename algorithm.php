<?php
#插入排序

function insert_sort($arr)
{
    for($i=1; $i < count($arr); $i = $i + 1)
    {
        $key = $arr[$i];
        $j = $i - 1;
        while($j >= 0 && $key < $arr[$j])
        {
            $arr[$j + 1] = $arr[$j];
            $j = $j - 1;
        }
        $arr[$j + 1] = $key;
    }
    return $arr;
}


$i = 0;

$arr = [];
while($i < 10)
{
    $arr[$i] = rand(0, 20);
    $i = $i + 1;
}
print_r($arr);
$arr_r = insert_sort($arr);
print_r($arr_r);