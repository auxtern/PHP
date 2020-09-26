<?php
require_once("../lib/Queue.php");

$newLine = "<br>";

// Buat Queue
$q1 = new Queue();

// Tambahkan antrian
$q1->enqueue(1);
$q1->enqueue(2);
$q1->enqueue(3);
$q1->enqueue(4);
$q1->enqueue(5);

// Menampilkan semua isi antrian
while(!$q1->isEmpty()){
    print($q1->dequeue());
    print(" ");
}

$q1->enqueue(6);
$q1->enqueue(7);
$q1->enqueue(8);

print($q1->dequeue());
print(" ");
print($q1->dequeue());
print(" ");
print($q1->dequeue());
print(" ");

$q1->enqueue(9);

// Periksa Queue apakah kosong
if($q1->isEmpty()){
    echo "Queue kosong!";
}else{
    echo "Queue tidak kosong!";
}
echo $newLine;