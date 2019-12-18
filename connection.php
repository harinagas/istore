<?php

	$host = "localhost";
    $dbUsername = "root";
    $dbPassword  = "";
    $dbname = "itechstore";
    $conn = new mysqli($host,$dbUsername,$dbPassword,$dbname);
	if($conn->connect_errno)
	{
		echo $con->connect_error;
	}
	else
	{
		
		if(isset($_POST['bit'])){
			
					
					if(isset($_POST['in'])){
						$iname = $_POST['in'];
					}
					if(isset($_POST['d'])){
						$id = $_POST['d'];
					}
					if(isset($_POST['p'])){
						$price = $_POST['p'];
					}
					if(isset($_POST['q'])){
						$quantity = $_POST['q'];
					}
					
							if(empty($id) || empty($iname) || empty($price) || empty($quantity))
								{
									
																echo '<script type="text/javascript">alert("<<<<<<You did not fill out the required fields>>>>>>");</script>';
																echo'<script> window.location="addata.php"; </script> ';
								}
							else{
									$ql = "INSERT INTO insertdata(iname, id, price, quantity) VALUES ('$iname','$id','$price','$quantity')";
									if($conn->query($ql))
									{
										
										echo '<script type="text/javascript">alert("<<<<<<data added successfully.....>>>>>>");</script>';
																echo'<script> window.location="addata.php"; </script> ';
								
									}
									else{
									
										echo '<script type="text/javascript">alert("<<<<<<ID ALREADY EXIST..........>>>>>>");</script>';
																echo'<script> window.location="addata.php"; </script> ';
								
									}
							}
			}
			
	}

?>





			 