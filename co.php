<?php

	require 'c.php'
	$query = "SELECT * FROM `insertdata`"
	if($is_query_run = mysqli_query($query))
	{
		echo "q e";
	}
	else
	{
		echo "not";
	}

?>