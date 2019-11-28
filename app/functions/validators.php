<?php

function validate_login($filtered_input, &$form)
{
    $login_success = \App\App::$session->login(
        $filtered_input['email'],
        $filtered_input['password']
    );

    if (!$login_success) {
        $form['fields']['password']['error'] = 'Login details are incorrect!';
        $form['fields']['password']['value'] = '';
        return false;
    }

    return true;
}

function validate_email($field_value, &$field)
{
    $modelUser = new \App\Users\Model();
    $users = $modelUser->get(['email' => $field_value]);
    if ($users) {
        $field['error'] = 'Username with this email already exists!';
        return false;
    } else {
        return true;
    }
}

function validate_is_registered($field_value, &$field)
{
    $modelUser = new \App\Users\Model();
    $users = $modelUser->get(['email' => $field_value]);
    if ($users) {
        return true;
    } else {
        $field['error'] = 'This email is not registered!';

        return false;
    }

}