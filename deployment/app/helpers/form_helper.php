<?php

function show_error($key, $errors)
{
    return isset($errors[$key]) ? '<small style="color:red;">' . $errors[$key] . '</small>' : '';
}

function set_value($key, $default = '')
{
    return $_POST[$key] ?? $default;
}

function set_select($key, $value, $current = null)
{
    $selected = $_POST[$key] ?? $current;
    return $selected == $value ? 'selected' : '';
}
