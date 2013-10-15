<?php

require "DatabaseConnection.php";

$rows = DatabaseConnection::select("customer");

foreach ($rows as $row)
{
	echo "ID = " . $row["id"] . "<br />";
	echo "E-mail = " . $row["email"] . "<br />";
	echo "Password = " . $row["password"] . "<br />";
	echo "First Name = " . $row["first_name"] . "<br />";
	echo "Last Name = " . $row["last_name"] . "<br />";
}

?>