<?php

$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'chatapp';

$conn = mysqli_connect($hostname, $username, $password, $database);

if(!$conn) {
    echo 'Error Database';
}