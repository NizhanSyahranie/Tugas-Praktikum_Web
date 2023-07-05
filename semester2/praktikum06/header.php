<?php
require_once('dbkoneksi.php');

$sel_pelanggan = $conn->query("SELECT * FROM pelanggan");
$rskartu_id = $conn->query("SELECT * FROM kartu");

if (isset($_GET['id'])) :
    $_id = $_GET['id'];
    $sql = "SELECT * FROM pelanggan WHERE id=?";
    $st = $conn->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();
endif;

if (isset($_GET['idedit'])) :
    //membuat kondisi untuk mengedit data pelanggan 
    if (!empty($_GET['idedit'])) :
        $edit = $_GET['idedit'];
        //untuk menampilkan data dengan perintah select
        $sql = "SELECT * FROM pelanggan WHERE id=?";
        $st = $conn->prepare($sql);
        //intruksi untuk menjalankan program 
        $st->execute([$edit]);
        //untuk menampilkan baris di setiap data 
        $row = $st->fetch();
    else :
        //untuk membuat data baru 
        $row = [];
    endif;
endif;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Pelanggan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container mt-5">