<?php
include "koneksi.php";
$query = "SELECT * FROM users";
$result = $mysqli->query($query);
$username = "admin"; 
if ($result->num_rows <= 0) {
    $nama_lengkap = "Administrator";
    $password = md5('123');
    $level = "admin";
    $query = "INSERT INTO users (username, nama_lengkap, password, level) VALUES('$username', '$nama_lengkap', '$password', '$level')";
    $mysqli->query($query);
    header("location:index.php");
    }else{
    header('location:index.php');
}