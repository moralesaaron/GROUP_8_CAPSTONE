<?php

require 'config.php';
require 'functions.php';
require 'Database.php';
require 'Controller.php';
require 'Model.php';
require 'App.php';
require 'Flash.php';
require_once __DIR__ . '/../helpers/email_helper.php';
require_once __DIR__ . '/../helpers/form_helper.php';

spl_autoload_register(function($class_name) {
    require '../app/models/'.$class_name . '.php';
});
