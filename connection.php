<?php
    // buat koneksi dengan database mysql
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "db_assetsurat";

    $link = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

    //periksa koneksi, tampilkan pesan kesalahan jika gagal
    if(!$link){
    die ("Koneksi dengan database gagal: ".mysql_connect_errno()." - ".mysqli_connect_error());
    }
?>