<?php
$tanya=readline("pilih yang mana(yes/no/maybe)");

if($tanya=="yes")
{
    echo "kamu memilih yes";
}elseif($tanya=="no")
{
    echo "kamu memilih no";
}
elseif($tanya=="maybe")
{
    echo "kamu memilih maybe";
}
else{
    echo "kamu tidak memilih pilihan yang tersedia!!!";
}
echo PHP_EOL;
$menu=readline("pilih angka 1-3 ?");

switch($menu)
{
    case 1:
        echo "anda memilih angka 1";
    break;
    case 2:
        echo "anda memilih angka 2";
    break;
    case 3:
        echo "anda memilih angka 3";
    break;
    default;
    echo "anda tidak memilih pilihan yang tersedia";
}