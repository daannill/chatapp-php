<?php

function find(mysqli $conn, string $tableName, array $fields = ['*'], array $keys = [], string $logic = 'and') {
    $fields = implode(', ', $fields);
    
    $column = [];
    $values = [];
    
    foreach($keys as $k => $value) {
        $column[] = "$k = ?";
        $values[] = $value;
    }
    
    $conditions = implode(" $logic ", $column);

    $stmt = $conn->prepare("SELECT $fields FROM $tableName WHERE $conditions");

    $types = str_repeat("s", count($values));
    $stmt->bind_param($types, ...$values);

    $stmt->execute();

    $result = $stmt->get_result();
    
    $data = $result->fetch_all(MYSQLI_ASSOC);

    $stmt->close();

    return $data;
}