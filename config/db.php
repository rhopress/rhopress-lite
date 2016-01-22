<?php

$host = require(__DIR__ . '/db/mysql/host.php');
$dbname = require(__DIR__ . '/db/mysql/dbname.php');
$username = require(__DIR__ . '/db/mysql/username.php');
$password = require(__DIR__ . '/db/mysql/password.php');
$charset = require(__DIR__ . '/db/mysql/charset.php');
$tablePrefix = require(__DIR__ . '/db/mysql/tablePrefix.php');

return [
    'class' => 'yii\db\Connection',
    'dsn' => "mysql:host=$host;dbname=$dbname",
    'username' => $username,
    'password' => $password,
    'charset' => $charset,
    'tablePrefix' => $tablePrefix,
];
