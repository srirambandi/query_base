<?php
session_start();
   define('host', 'localhost:3306');
   define('user', 'root');
   define('password', 'hydra_1x');
   define('database', 'test');
   $host        = "host=127.0.0.1";
   $port        = "port=2357";
   $dbname      = "dbname=ldap";
   $credentials = "user=postgres password=snowkid_1x";
   $db = pg_connect( "$host $port $dbname $credentials" );
   if(!$db){
      echo "Error : Unable to open database\n";
   }
// checks if any user is logged in
function loggedin() {
  // echo $_SESSION['userid'];
  return isset($_SESSION['userid']);
}

// connects to the database
function connectdb() {
   define('host', 'localhost:3306');
   define('user', 'root');
   define('password', 'hydra_1x');
   define('database', 'test');
   $host = host;
   $user = user;
   $password = password;
   $database = database;
   $db = new mysqli(host,user,password,database);
   // // die(DB_DATABASE);
   if (mysqli_connect_error()) {
     die('Connect Error ('.mysqli_connect_errno().') '.mysqli_connect_error());
   }
}

// converts text to an uniform only '\n' newline break
function treat($text) {
	$s1 = str_replace("\n\r", "\n", $text);
	return str_replace("\r", "", $s1);
}
?>
