<?php
//defined('myeshop') or die('Доступ запрещён!');

try {
//PDO
    define("DB_HOST", "mysql:host=" . localhost . ";dbname=" . magazine . "");
    define("DB_USER", "root");
    define("DB_PASS", "");
    $link= new PDO(DB_HOST, DB_USER, DB_PASS);
    $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $link->exec("set names utf8");
    }

// Вывод ошибки при неудачном подключении к базе данных
catch (PDOException $e) {

    die("Не подключиться к базе данных". $e->getMessage());

}

/*
$db_host		= 'localhost';
$db_user		= 'root';
$db_pass		= '';
$db_database	= 'magazine';

$link = mysql_connect($db_host,$db_user,$db_pass);

mysql_select_db($db_database,$link) or die("Нет соединения с БД ".mysql_error());
mysql_query("SET names utf-8");

 */
?>