<?php

function apply_rule($field, $data, $rule, $param) { 
    switch($rule) {
        case 'required':
            return empty($data) ? ucfirst($field) . " is required" : false;
        case 'min':
            return strlen($data) < $param ? ucfirst($field) . " must be at least $param character long" : false;
        case 'max':
            return strlen($data) > $param ? ucfirst($field) . " must be no more than $param character long" : false;
        case 'image':
            return validate_image($data) ?? false;
        default:
            return false;
    }
}

function validate(array $data, array $rules) {
    $errors = [];

    $sanitizeData = sanitizeData($data);

    if(checkDiffArr($data, $rules)) {
        $errors['error'] = "Array must be same";
    }

    asort($data);
    asort($rules);

    foreach($rules as $field => $rule) {
        $explode_rule = explode('|', $rule['rules'] . '|');

        foreach($explode_rule as $erule) {
            [$erule, $param] = explode(':', $erule . ':');

            $error = apply_rule($rule['name'] ?? $field, $sanitizeData[$field], $erule, $param);

            if($error) {
                $errors[$field] = $error;
                break;
            }

            $errors[$field] = '';
        }
    }

    return ['errors' => $errors, 'sanitizeData' => $sanitizeData];
}