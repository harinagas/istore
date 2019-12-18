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
						
						
						if(isset($_POST['mail'])){
							$email = $_POST['mail'];
							
						}
						if(isset($_POST['psw'])){
							$pass = $_POST['psw'];
						}
						if(isset($_POST['Submit'])){
							
						
						}
						if(empty($pass) ||empty($email))
						{
							
														echo '<script type="text/javascript">alert("<<<<<<You did not fill out the required fields>>>>>>");</script>';
														echo'<script> window.location="stull.php"; </script> ';
						}
						else{
									$ql = "SELECT `name`, `id`, `email`, `pass`, `repass` FROM `stureg` WHERE email='".$email."'";
									$re=$conn->query($ql);
													while($row = $re->fetch_assoc())
														{	
															
															if($pass!=$row['pass']){
																echo '<script type="text/javascript">alert("....Password Mismatch....");</script>';
																echo'<script> window.location="stull.php"; </script> ';
															}
															
															
															
															else if($pass==$row['pass']){
																echo'<script> window.location="st.php"; </script> ';
															}
															else{
																echo '<script type="text/javascript">alert("....No Record (create an account)....");</script>';
																echo'<script> window.location="stull.php"; </script> ';
															}
															
																
																	
																
								
														}
						}
					}

?>


<html>
	<head>
	<meta charater="uft-8">
        <title>student login</title>
		 <link rel='stylesheet' href='dent.css' type='text/css'/>

	</head>
	<body>
			<img src="n.png" alt="Girl in a jacket" style="width:300px;height:100px; margin-top:100px;margin-left:550px;">
			<h1>NO Recored</h1>
			<form id="m"  action="reg.php" method="post">
				<button type="submit" class="button2" >Create an new account..Click here</button>
			</form>
	</body>
</html>
			 
