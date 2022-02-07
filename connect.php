<?php

$dbhost ='localhost';
$dbuser ='root';
$dbpass ='';
$dbname ='db_scandiweb';

$con = new mysqli($dbhost,$dbuser,$dbpass,$dbname);

if($con->connect_error){
    die('Connetion Failed:'.$con->connection_error);
}
else{
    "koneksi berhasil";
}
?>