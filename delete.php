
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
					if(isset($_POST['dp'])){
						$id = $_POST['dp'];
					}
					if(empty($id))
								{
									
																echo '<script type="text/javascript">alert("<<<<<<Enter Id>>>>>>");</script>';
																echo'<script> window.location="deldata.php"; </script> ';
								}
							
					else{
					
									$ql = "DELETE FROM insertdata WHERE id='".$id."' ";
									
									
											if($conn->query($ql))
											{
													
												
														echo '<script type="text/javascript">alert("<<<<<<DATA DELETED SUCCESSFULLY.....>>>>>> ");</script>';
														
																				echo'<script> window.location="deldata.php"; </script> ';
												
											}
											
											else{
												echo '<script type="text/javascript">alert("<<<<<<>>>>>>");</script>';
																				echo'<script> window.location="deldata.php"; </script> ';
											
												
											}
									
					}
					
		
	
		
	}

?>
<!doctype html>
<html>
    <head>
        <meta charater="uft-8">
        <title>display dat</title>
		 <link rel='stylesheet' href='' type='text/css'/>

		
		
    </head>
	
	
	<body>
		 <form id="form"  action="f1.php" method="post">
             <div>
				<button id="r5" type="sumbit" name="bit" class="button"  >back to main</button>
			</div>
		</form>
	</body>
</html>