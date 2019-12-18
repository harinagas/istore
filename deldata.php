
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
							$it = $_POST['bit'];
						}
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
						
						
						
						$l = "SELECT * from insertdata";
						$re=$conn->query($l);
					
						
						
					
					}

?>
<html>
    <head>
        <meta charater="uft-8">
        <title> adpage1</title>
        <link rel='stylesheet' href="fin.css" type='text/css'/>
		</head>
    <body>
		<h4>iStore</h4>
			 <form id="my"  action="delete.php" method="post">
					
						<div class="del">
                           <h4>delete itemes</h4>
								<label  for=”r2″ id=”ln”>:item idnumber :</label>
                                    <input type=”text” name="dp" id=”t2″/><br/>
									<button id="e5" type="sumbit" class="button" name="iit" >delete</button>
                            
                            
                        </div>
				</form>
					
				<form id="m"  action="indexad.html" method="post">
				<button type="submit" class="button2" >main menu</button>

			
			</form>
		 </body>
</html>