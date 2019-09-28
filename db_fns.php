<?php
function db_connect()
{
    $host = 'localhost';
    $user = 'root';
    $pswd = '0000';
    $db = 'mobiapp';

    $connection = mysql_connect($host, $user, $pswd);
    mysql_query("SET NAMES 'utf8';");
    mysql_query("SET CHARACTER SET 'utf8';");
    mysql_query("SET SESSION collation_connection = 'utf8_general_ci';");

    if (!connection || !mysql_select_db($db, $connection))
    {
        return false;
    }
    return $connection;
}
?>