<?php

function sanitizeData($array) {
    global $conn;

    return array_map(function($value) use ($conn) {
        if(is_array($value)) {
            return $value;
        }

        return mysqli_real_escape_string($conn, $value);
        
    }, $array);
}

function checkError(array $error) {
    foreach ($error as $e) {
        if(!empty($e)) {
            return false;
        }
    }

    return true;
}

function checkDiffArr(...$arrays) {
    $referenceKeys = array_keys($arrays[0]);
    $currentKeys = array_keys($arrays[1]);

    if($referenceKeys !== $currentKeys) {
        return true;
    }

    return false;
}

function formatData(array $values, int $dimention = 0) {
    $data = [];
    foreach($values as $key => $value) {
        if($dimention < 1 && is_array($value)) {
            $data += formatData($value, 1);
        } else {
            $data[$key] = $value;
        }
    }

    return $data;
}

function generateID(string $prefix = 'USR') {
    $id = $prefix . date('YmdHis') . rand(100, 999);
    return $id;
}

function renameImg(array $file, string $new_name) {
    $type = explode('.', $file['name']);
    return $new_name . '.' . end($type);
}

function encrypt(string $data) {
    $key = "secret";
    $method = "AES-256-CBC";
    $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length($method));
    $encrypted = openssl_encrypt($data, $method, $key, 0, $iv);
    return base64_encode($iv . $encrypted);
}


function decrypt(string $encryptedData) {
    $key = 'secret';
    $method = "AES-256-CBC";
    $data = base64_decode($encryptedData);

    $ivLength = openssl_cipher_iv_length($method);
    
    $iv = substr($data, 0, $ivLength);
    $ciphertext = substr($data, $ivLength);
    return openssl_decrypt($ciphertext, $method, $key, 0, $iv);
}

