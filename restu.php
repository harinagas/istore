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
						 
													
						if(empty($id) || empty($name) || empty($pass) || empty($repass) || empty($email))
						{
							
														echo '<script type="text/javascript">alert("<<<<<<You did not fill out the required fields>>>>>>");</script>';
														echo'<script> window.location="reg.php"; </script> ';
															
												
										
						}
						else{
											if($pass!=$repass){
												
														echo '<script type="text/javascript">alert("....Password Mismatch....");</script>';
														echo'<script> window.location="reg.php"; </script> ';
															
												}
												else{
													$sl="INSERT INTO stureg(name, id, email, pass, repass) VALUES ('$name','.$id.','$email','.$pass.','.$repass.')";
																
															if($conn->query($sl))
															{
																echo '<script type="text/javascript">alert(".....DATA ADDED SUCCESSFULLY.....");</script>';
																echo'<script> window.location="reg.php"; </script> ';
															}
															else{
																echo '<script type="text/javascript">alert("......DATA ALREADY EXIST..........");</script>';
																echo'<script> window.location="reg.php"; </script> ';
															}
												}
												
						
						}
				
						
					}

?>