<?php
$conn = mysqli_connect('localhost','root','','db_inventory_reza');

if(!$conn){
    die("Koneksi gagal".mysqli_connect_error());
}