<?php

// Buat Array
$animals = ["Burung", "Kucing", "Nyamuk", "Singa"];

// Show Array Index
echo "<b>Show Array Index</b>" . "<br>";
echo $animals[1] . "<br>";
echo $animals[3] . "<br>";
echo "<br>";

echo "<b>Show Foreach Array Index</b>" . "<br>";
foreach ($animals as $animal) {
    echo $animal . "<br>";
}

// Show Array Asosiatif
echo "<br>" . "<b>Show Array Asosiatif</b>" . "<br>";
$mahasiswa = ['nama' => 'Nizhan', 'jurusan' => 'TI', 'semester' => 2];
echo $mahasiswa['jurusan'] .  "<br>";

echo "<br>";
echo "<b>Show Foreach Array Asosiatif</b>" . "<br>";
foreach ($mahasiswa as $key => $value) {
    echo "Key: " . $key . " Value : " . $value . "<br>";
}


// Show Array Multidimensi
echo "<br>" . "<b>Show Array Multidimensi</b>" . "<br>";
$dosen = [
    ["Pak Rojul", "Web"],
    ["Pak Reza", "DDP"],
    ["Pak Lukman", "OS"]
];

echo $dosen[0][0];