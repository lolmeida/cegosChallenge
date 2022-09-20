<?php


//$servername = "localhost";
$dbname = "cegos";
$username = "root";
$password = 'lounasval';

try {
$db_conn = new PDO('mysql:host=127.0.0.1;dbname='.$dbname.';charset=utf8',$username,$password);
//Set some db attributes.
$db_conn->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
$db_conn->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY,true);
$db_conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}


define('APP_NAME', 'CEGOS REST API CHALLENGE');

