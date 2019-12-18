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
						
						if(isset($_POST['uname'])){
							$name = $_POST['uname'];
							
						}
						
						if(isset($_POST['quantity'])){
							$id = $_POST['quantity'];
							
						}
						if(isset($_POST['mail'])){
							$email = $_POST['mail'];
							
						}
						if(isset($_POST['psw'])){
							$pass = $_POST['psw'];
							
						}
						if(isset($_POST['Rpsw'])){
							$repass = $_POST['Rpsw'];
							
						}
						$l = "SELECT * from stureg";
						$re=$conn->query($l);
						
						
					}

		         ?>
<!doctype html>
<html>
    <head>
        <meta charater="uft-8">
        <title>Student sign</title>
		 <link rel='stylesheet' href='reg.css' type='text/css'/>

		
		
    </head>
	
	
	<body>
		<h1>iStore
		<form id="m"  action="stull.php" method="post">
				<button type="submit"  class="button2">Login???</button>

				
			</form>
		</h1>
			 <form id="form"  action="restu.php" method="post">
					<div class="sr">		 
							 <h2>Registration</h2>
							 <h3><br>
							  <input type="text" name="uname" placeholder="Username"></h3><br>
							  <h3><br>
							<input type="number" name="quantity" placeholder="Roll Number" ></h3><br>
							<h3><br>
							<input type="email" name="mail" placeholder="Email"></h3><br>
							<h3><br>
							  <input type="password" name="psw" placeholder="Password"></h3><br>
							   <h3><br>
							  <input type="password" name="Rpsw" placeholder="ConformPassword"></h3><br>
							<button id="r5" type="sumbit" name="bit" class="button1"  >submit</button>
										
					</div>		
							
			</form>
			
			
			
			
			
        
	</body>