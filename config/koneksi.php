<?php
$conn = mysqli_connect('localhost','root','','bd_inventory_reza');

if(!$conn){
    die("Koneksi gagal".mysqli_connect_error());
}