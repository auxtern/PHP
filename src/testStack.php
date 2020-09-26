<?php
require_once("../lib/Stack.php");

$newLine = "<br>";

// Buat Stack
$s1 = new Stack();

// Tambahkan tumpukan
$s1->push(1);
$s1->push(2);
$s1->push(3);
$s1->push(4);
$s1->push(5);

// Periksa Stack apakah kosong
if($s1->isEmpty()){
    echo "Stack kosong!";
}else{
    echo "Stack tidak kosong!";
}
echo $newLine;

// Menampilkan semua isi tumpukan
while(!$s1->isEmpty()){
    print($s1->pop());
    print(" ");
}


