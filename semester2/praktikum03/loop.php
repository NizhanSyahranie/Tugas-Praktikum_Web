<?php

for ($i = 1; $i <= 10; $i++) {
    echo $i . "<br>";
}


echo "<h3>Looping Pertama</h3>";
for ($i = 2; $i <= 20; $i += 2) {
    echo $i . "- I Love PHP <br>";
}

echo "<h3>Looping Kedua</h3>";
for ($i = 20; $i >= 2; $i -= 2) {
    echo $i . "- I Love PHP <br>";
}

echo "<br>";
$buah = ["apel", "mangga", "pisang", "jeruk"];
foreach ($buah as $b) {
    echo $b . "<br>";
}


