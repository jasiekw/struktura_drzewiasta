<?php

include('db_conn.php');

if((isset($_POST['category_name']) && strlen($_POST['category_name']) > 20 ))
{
	echo "Element maksymalnie może zawierać 20 znaków";
	exit;
}
if((isset($_POST['category_name']) && strlen($_POST['category_name']) < 1 ))
{
	echo "Element musi posiadac nazwę";
	exit;
}
if(($_POST['parent_category'])==0)
{
	echo "Zaznacz rodzica";
	exit;
}



$data = array(
 ':name'  => $_POST['category_name'],
 ':parent_id' => $_POST['parent_category']
);

$query = "
 INSERT INTO drzewo (name, parent_id) VALUES (:name, :parent_id)
";

$statement = $db_obj->prepare($query);

if($statement->execute($data))
{
 echo 'Dodano element';
}


?>