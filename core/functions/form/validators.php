<?php

function validate_fields_match($filtered_input, &$form, $params)
{
    $match = true;

    foreach ($params as $field_id) {
        $ref_value = $ref_value ?? $filtered_input[$field_id];
        if ($ref_value != $filtered_input[$field_id]) {
            $match = false;
            break;
        }
    }

    if (!$match) {
        $form['fields'][$field_id]['error'] = 'Fields do not match!';
        return false;
    }

    return true;
}

function validate_not_empty($field_value, &$field)
{
    if (strlen($field_value) == 0) {
        $field['error'] = 'Field cannot be empty!';
    } else {
        return true;
    }
}

function validate_not_exceed_sm($field_value, &$field)
{
    if (strlen($field_value) > 40) {
        $field['error'] = 'Field cannot exceed 40 characters!';
    } else {
        return true;
    }
}

function validate_not_exceed_xl($field_value, &$field)
{
    if (strlen($field_value) > 500) {
        $field['error'] = 'Field cannot exceed 500 characters!';
    } else {
        return true;
    }
}

function validate_is_alphabetic($field_value, &$field)
{
    if (preg_match("/[0-9]+$/", $field_value)) {
        $field['error'] = 'Only alphabetic characters are allowed!';
    } else {
        return true;
    }
}

function validate_is_email($field_value, &$field)
{
    if (preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^", $field_value)) {
        return true;
    } else {
        $field['error'] = 'Wrong email format!';
    }
}
