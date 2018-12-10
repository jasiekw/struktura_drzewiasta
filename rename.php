<?php

include('db_conn.php');

if((isset($_POST['category_name3']) && strlen($_POST['category_name3']) > 20 ))
{
	echo "Element maksymalnie może zawierać 20 znaków";
	exit;
}
if((isset($_POST['category_name3']) && strlen($_POST['category_name3']) < 1 ))
{
	echo "Element musi posiadac nazwę";
	exit;
}
if(($_POST['category3'])==0)
{
	echo "Zaznacz element";
	exit;
}


$data = array(
 ':new_name'  => $_POST['category_name3'],
 ':name' => $_POST['category3']
);

$query = "
 UPDATE drzewo SET name = (:new_name) WHERE id = (:name)
";

$statement = $db_obj->prepare($query);

if($statement->execute($data))
{
 echo 'Zmieniono nazwę';
}


?>