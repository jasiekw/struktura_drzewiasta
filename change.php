<?php

include('db_conn.php');

if(($_POST['category4'])==0)
{
	echo "Zaznacz element";
	exit;
}
if(($_POST['category5'])==0)
{
	echo "Zaznacz nowego rodzica";
	exit;
}


$data = array(
 ':id'  => $_POST['category4'],
 ':new_parent' => $_POST['category5']
);

$query = "
 UPDATE drzewo SET parent_id = (:new_parent) WHERE id = (:id)
";

$statement = $db_obj->prepare($query);

if($statement->execute($data))
{
 echo 'Zmieniono rodzica';
}


?>