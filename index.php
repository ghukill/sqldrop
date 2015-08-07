<?php
/*
 * PHP SQLite3 - Open a database, create a table and insert rows
 */

//Open the database mydb
$db = new SQLite3('sqldrop.db');

//Create a basic users table
$db->exec('
	CREATE TABLE users (
		username varchar(255),
		password varchar (255)
	)');
echo "<p>Table created.</p>";

//Insert some rows
$db->exec('INSERT INTO users (username, password) VALUES ("admin","adminpass")');
echo "<p>Inserted row.";
$db->exec('INSERT INTO users (username, password) VALUES ("user","userpass")');
echo "<p>Inserted row.";

//drop the table
// $db->exec('DROP TABLE users');
?>