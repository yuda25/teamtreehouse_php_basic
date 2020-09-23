<?php

// buat fuction celcius to fahrenheit
//rumus (nilai celcius * 9/5) +32
// parameter function int celcius
// invoke function celcius to fahrenheit(12); //print 53.6

function celciusToFahrenheit($celcius)
{
    $conversi=($celcius*9/5)+32;

    echo "$celcius celcius = $conversi fahrenheit";
}
celciusToFahrenheit(80);