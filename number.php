<?php 

$number=1; //integer

$float=1.2; //float

$int_float=(int)$float; //Integer

$str_float=(string)$float; //string

$str_boolean=(bool)$float; //Boolean

var_dump($str_boolean);

function kali(int $satu,$dua):int
{
    return $satu*$dua;
}

/**
 * operator
 * subtract(-)
 * addition(+)
 * multiply(*)
 * divide(/)
 * modulus(%)
 * increment(++)
 * decrement(--)
 */

 echo 4/2; //2
 echo PHP_EOL;
 echo 4%2; //0

 $angka=1; //1
 $angka++; //2
 $angka--; //1
 $angka+=9; //10
 $angka.=7;

echo PHP_EOL;
echo $angka;

echo PHP_EOL;



?>