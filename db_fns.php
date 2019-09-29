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

function db_result_to_array($result)
{
  $res_array = array();
  $count = 0;

  while ($row = mysql_fetch_array($result))
  {
    $res_array[$count] = $row;
    $count++;
  }
  return $res_array;
}

function get_courses()
{
  db_connect();

  $query = "SELECT * FROM courses ORDER BY course_id";

  $result = mysql_query($query) or trigger_error(mysql_error()." in ". $query);

  $result = db_result_to_array($result);

  return $result;
}
?>