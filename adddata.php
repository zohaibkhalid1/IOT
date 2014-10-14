<?php  include("connection.php");   ?>

<?php

$value = $_REQUEST['value'];
//$id = $_REQUEST[''];
$date = date('Y-m-d');

	$query = "INSERT into sensors set value='".$value."',date='".$date."'";
	

	
if (mysql_query($query))
{
echo "200";
}
else
{
echo "Error inserting record: " . mysql_error();
}
