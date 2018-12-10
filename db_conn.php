<?php

$dsn = "mysql:host=localhost;dbname=drzewo";
$uzytkownik = "admin";
$haslo = "Struktura_drzewiasta";

try {

$db_obj = new PDO ($dsn,$uzytkownik, $haslo);

}
catch (PDOException $e){
	echo "Błąd podczas otwierania połączenia: ". $e->getMessage();
	exit;
}

?>
