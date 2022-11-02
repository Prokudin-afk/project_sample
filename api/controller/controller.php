<?php
require_once(dirname(__FILE__) . '/../class/User.php');

$models['User'] = new User;

$action = $_POST['action'];
$class = $models[$_POST['model']];
print_r(json_encode($class->$action($_POST['params'])));