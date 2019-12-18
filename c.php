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
	
		if(isset($_POST['it'])){
			
					
					
					 $upname = $_POST['inp'];
					 $upid = $_POST['dp'];
	
					$upprice = $_POST['pp'];
					$upquantity = $_POST['qp'];
	
					if(empty($upid) || empty($upname) || empty($upprice) || empty($upquantity))
								{
									
																echo '<script type="text/javascript">alert("<<<<<<You did not fill out the required fields>>>>>>");</script>';
																echo'<script> window.location="udata.php"; </script> ';
								}
							
							
					else{		
							$ql = "UPDATE insertdata SET iname='$upname',price='$upprice ',quantity='$upquantity' WHERE id='".$upid."' ";
							if($conn->query($ql))
							{
								
												echo '<script type="text/javascript">alert("<<<<<<data update successfully.....>>>>>>");</script>';
																		echo'<script> window.location="udata.php"; </script> ';
										
											
							}
							else{
									echo '<script type="text/javascript">alert("<<<<<<ID ALREADY EXIST..........>>>>>>");</script>';
																		echo'<script> window.location="udata.php"; </script> ';
										
							}
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