<?php

require_once __DIR__ . '/config/db_connection.php';
require_once __DIR__ . '/helpers/validate.php';
require_once __DIR__ . '/helpers/utilities.php';
require_once __DIR__ . '/helpers/image_move_upload.php';
require_once __DIR__ . '/helpers/image_validate.php';

if(isset($_POST)) {
    $rules = [
        'fname' => ['name' => 'Front Name', 'rules' => 'required'],
        'lname' => ['name' => 'Last Name', 'rules' => 'required'],
        'email' => ['rules' => 'required'],
        'password' => ['rules' => 'required|min:6'],
        'image' => ['rules' => 'image']
    ];

    $format_data = formatData([$_POST, $_FILES]);
    $data = validate($format_data, $rules);

    if(checkError($data['errors'])) {
        $safeData = $data['sanitizeData'];
        $user_id = generateID();
        $image_name = renameImg($safeData['image'], $user_id);
        $status = 0;
        $password = encrypt($safeData['password']);

        $query = "INSERT INTO `users`(`user_id`, `fname`, `lname`, `email`, `password`, `image`, `status`) 
        VALUES (?,?,?,?,?,?,?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param('ssssssi', $user_id, $safeData['fname'], $safeData['lname'], $safeData['email'], $password, $image_name, $status);

        if($stmt->execute()) {
            if(! imageMove($safeData['image'], $image_name)) {
                echo json_encode(['error-txt' => 'Upload Image Error']);
                exit;
            } else {
                echo json_encode(['success' => 'Berhasil Membuat Akun']);
                exit;
            }
        } else {
            echo json_encode(['error-txt' => "Data Failed to Save"]);
            exit;
        }
    }

    echo json_encode($data);
}
