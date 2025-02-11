<?php


function validate_image($file, $maxSize = 1024) {
    if (!$file || $file['error'] !== UPLOAD_ERR_OK) {
        return "Image is required.";
    }

    $validMimeTypes = ['image/jpeg', 'image/png'];
    $fileMimeType = mime_content_type($file['tmp_name']);
    $fileSizeKB = $file['size'] / 1024;

    if (!in_array($fileMimeType, $validMimeTypes)) {
        return "Image must be a JPEG or PNG.";
    }

    if ($maxSize && $fileSizeKB > $maxSize) {
        return "Image must not exceed $maxSize KB.";
    }

    return null;
}