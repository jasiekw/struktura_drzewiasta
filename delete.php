<?php

include('db_conn.php');

$data = array(
 ':id' => $_POST['category2']
);

if(($_POST['category2']) == 0)
{
	echo "Zaznacz element";
	exit;
}

$query = "
 DELETE FROM drzewo WHERE id =(:id)";

$statement = $db_obj->prepare($query);

if($statement->execute($data))
{
 	echo 'Usunięto element';


	$q="
	 SELECT id FROM drzewo WHERE parent_id NOT IN (SELECT id FROM drzewo) AND parent_id != 0 ";

	$result = $db_obj->query($q);

	while ($odp = $result->fetch(PDO::FETCH_ASSOC))
	{

	$query = " 
	UPDATE drzewo SET parent_id = 1 WHERE id ='".$odp['id']."' " ;

	$db_obj->query($query);

	}


}

?>