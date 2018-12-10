<?php

include('db_conn.php');
include('functions.php');

$query = "SELECT * FROM drzewo";
$result = $db_obj-> query($query);

while($row = $result->fetch(PDO::FETCH_ASSOC))
{
 $info_dane["id"] = $row["id"];
 $info_dane["name"] = $row["name"];
 $info_dane["text"] = $row["name"];
 $info_dane["parent_id"] = $row["parent_id"];
 $dane[] = $info_dane;
}

//$dane = array_sort($dane,'name', SORT_ASC);

foreach($dane as $key => &$value)
 {
    $output[$value["id"]] = &$value;
 }
foreach($dane as $key => &$value)
 {
    if($value["parent_id"] && isset($output[$value["parent_id"]]))
	{
   		$output[$value["parent_id"]]["nodes"][] = &$value;
    }

 }
foreach($dane as $key => &$value)
 {
    if($value["parent_id"] && isset($output[$value["parent_id"]]))
 	{
		unset($dane[$key]);
    }
 }

 echo json_encode($dane);

?>
