<?php
//Get Heroku ClearDB connection information
// $cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = "us-cdbr-east-06.cleardb.net";
$cleardb_username = "b12268d76103a6";
$cleardb_password = "277366dc";
$cleardb_db = "heroku_92fcee9e14c8d1e";
$active_group = 'default';
$query_builder = TRUE;
// Connect to DB
$conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);

?>

