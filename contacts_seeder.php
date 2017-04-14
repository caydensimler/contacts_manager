<?php  

require_once 'db_connection.php';

$clearTable = 'TRUNCATE contacts';
$connection->exec($clearTable);

$fillerContacts = [
	[
		'first_name' => 'Cayden',
		'last_name' => 'Simler',
		'phone_number' => 8087290331,
		'company' => '',
		'email' => 'cayden.simler@hotmail.com'
	],
	[
		'first_name' => 'Wes',
		'last_name' => 'Simler',
		'phone_number' => 8085514048,
		'company' => 'Las Palapas',
		'email' => ''
	]
];

$statement = $connection->prepare('INSERT INTO contacts (first_name, last_name, phone_number, company, email) VALUES (:first_name, :last_name, :phone_number, :company, :email)');


foreach ($fillerContacts as $contact) {

	$statement->bindValue(':first_name', $contact['first_name'], PDO::PARAM_STR);
	$statement->bindValue(':last_name', $contact['last_name'], PDO::PARAM_STR);
	$statement->bindValue(':phone_number', $contact['phone_number'], PDO::PARAM_INT);
	$statement->bindValue(':company', $contact['company'], PDO::PARAM_STR);
	$statement->bindValue(':email', $contact['email'], PDO::PARAM_STR);

	$statement->execute();

	echo "Inserted " . $contact['first_name'] . " " . $contact['last_name'] . " into the contacts table." . PHP_EOL;

}
?>