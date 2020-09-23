<?php
// buat function ask name
// parameternya $nama
// tampilannya adalah "nama kamu adalah $nama"

function askName($name)
{
    $format_name=ucwords(strtolower($name));
    echo "namamu adalah $format_name";
}
askName("AhMaD DhAnI SAPUTRO\n");

