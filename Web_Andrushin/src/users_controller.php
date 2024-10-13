<?php
require_once __DIR__ . '/../vendor/autoload.php';

if(isset($_POST['username']) && isset($_POST['password']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    echo $username . $password;
}