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
							echo"$pass";
							
						}
						if(isset($_POST['Submit'])){
							
						
						}
						$l = "SELECT * from stureg";
						$re=$conn->query($l);
					}

?>
<html>
	<head>
	<meta charater="uft-8">
        <title>student login</title>
		 <link rel='stylesheet' href='stull.css' type='text/css'/>

	</head>
	<body>
			<h1>iStore</h1>
			 
			 <form id="or"  action="dent.php" method="post">
				<div class="st"> 
				<h2>Login</h2>
				<h3><input type="email" name="mail" placeholder="UserEmail"></h3><br>
				
				  <h3><input type="password" name="psw" placeholder="password"></h3><br>
				  <h3><input type="submit" value="Submit" class="button1" name="Submit"></h3>
				  </div>
				</form>
				
					
				<form id="m"  action="reg.php" method="post">
				<button type="submit" class="button2" >sign???</button>

			
			</form>
	</body>
</html>