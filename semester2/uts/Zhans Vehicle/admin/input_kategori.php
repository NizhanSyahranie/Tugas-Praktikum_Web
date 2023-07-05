<?php
include_once("../koneksi.php");


if (isset($_POST['submit'])) {
    $nama_kg = $_POST['nama_kg'];

    $result = mysqli_query($mysqli, "INSERT INTO kategori(nama_kg) VALUES('$nama_kg')");


    echo '<script language="javascript">
                                alert ("Berhasil Input Data kategori");
                                window.location="user-list.php";
                                </script>';
} else {
    echo '<script language="javascript">
                                    alert ("Gagal");
                                    window.location="user-list.php"";
                                    </script>';
}

if (isset($_POST['update'])) {
    $id_kg = $_POST['id_kg'];

    $nama_kg = $_POST['nama_kg'];



    if (empty($nama_kg)) {
        echo ("<script LANGUAGE='JavaScript'>
    window.alert('Mohon Isi Semua');
    window.location.href='user-list.php';
    </script>");
    } else {
        // update user data
        $result = mysqli_query($mysqli, "UPDATE kategori SET nama_kg='$nama_kg' WHERE id=$id_kg");
        // Redirect to homepage to display updated user in list
        header("Location: user-list.php");
    }
}


// Get id from URL to delete that user
$id_kg = $_GET['id_kg'];

// Delete user row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM kategori WHERE id=$id_kg");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:user-list.php");
