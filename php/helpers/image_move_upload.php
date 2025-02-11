<?php

function imageMove(array $file, string $image_name, string $path = __DIR__.'/../../img/') {
    if(move_uploaded_file($file['tmp_name'], $path . $image_name)){
        return true;
    } else {
        return false;
    };
}