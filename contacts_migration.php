<?php 

require_once 'db_connection.php';

$dropContactsTable = 'DROP TABLE IF EXISTS contacts';
$connection->exec($dropContactsTable);

$createContactsTable = 'CREATE TABLE IF NOT EXISTS contacts (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	first_name varchar(200) NOT NULL,
	last_name varchar(200) NOT NULL,
	phone_number INT NOT NULL,
	company varchar(200),
	email varchar(100),
	PRIMARY KEY (id)
)';

$connection->exec($createContactsTable);






?>