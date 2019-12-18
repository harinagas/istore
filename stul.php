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
							
							
						
						$ql = "SELECT `name`, `id`, `email`, `pass`, `repass` FROM `stureg` WHERE email='".$email."'";
							$re=$conn->query($ql);
											while($row = $re->fetch_assoc())
												{
													if($pass==$row['pass']){
														echo '<script type="text/javascript">alert("....Password Mismatch....");</script>';
													}
																						
														
						}
					}

?>
<html>
	<head>
	<meta charater="uft-8">
        <title>student login</title>
		 <link rel='stylesheet' href='stuf.css' type='text/css'/>

	</head>
	<body>
			<h1>f</h1>
			
			 <form id="or"  action="st.php" method="post">
				 Email:<br>
				<input type="email" name="mail"><br>
				 password:<br>
				  <input type="password" name="psw"><br>
				  <input type="submit" value="Submit" name="Submit">
				</form>
	</body>
</html>