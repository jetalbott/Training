<?php

require "DatabaseConnection.php";

$where = array('id' => 2);

$insert = array('email' => 'jsuter@gmail.com','password' => 'chespin','first_name' => 'Jordan','last_name' => 'Suter');

$rows = DatabaseConnection::insert("customer", $insert);

echo $rows

?>