<?php
DEFINE ('DB_USER', 'ahmed');
DEFINE ('DB_PASSWORD', '123');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'ahmed_13106');



	$db = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if (!$db){
    die("Database Connection Failed" . mysqli_error($db));
}


?>