<?php

include('db_conn.php');

$query = "SELECT * FROM drzewo ORDER BY name ASC";

$statement = $db_obj->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

 $output = '<option value="0"> - </option>';

foreach($result as $row)
{
 $output .= '<option value="'.$row["id"].'">'.$row["name"].'</option>';
}

echo $output;

?>
