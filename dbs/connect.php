<?php

//For deployment version on Heroku to connect database

// $cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
// $cleardb_server = $cleardb_url["host"];
// $cleardb_username = $cleardb_url["user"];
// $cleardb_password = $cleardb_url["pass"];
// $cleardb_db = substr($cleardb_url["path"],1);
// $active_group = 'default';
// $query_builder = TRUE;
// // Connect to DB
// $connect = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);

// For Localhost

$host="localhost";
$user="root";
$password="";
$dbname="ssvgi_ceh";
$connect=mysqli_connect($host,$user,$password,$dbname);

?>