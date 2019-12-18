<?php

	require 'c.php';
	$query = "SELECT * FROM `insertdata`";
	$qery = "SELECT * FROM `insertdata`";
	if($is_query_run = mysql_query($query))
	{
		echo "q e";
	}
	else
	{
		echo "not";
	}

?>