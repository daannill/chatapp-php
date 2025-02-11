<?php

require_once __DIR__ . '/config/db_connection.php';
require_once __DIR__ . '/helpers/db_query.php';
require_once __DIR__ . '/helpers/utilities.php';

if(isset($_POST)) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $data = find($conn, 'users', ['password'], ['email' => $email]);
    
    if(count($data) > 0) {
        $data = decrypt($data[0]['password']);
        if($data === $password) {
            echo 'success';
            exit;
        }
    }

    echo 'gagal';
}