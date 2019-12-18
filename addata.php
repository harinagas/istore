
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
        <link rel='stylesheet' href="addata.css" type='text/css'/>
		</head>
    <body>
		 <form id="form"  action="connection.php" method="post">
        
       
			        <h1>
                         iStore   
                        </h1>
                    <div class="sr">
											<h2>Add itemes</h3><br/>
											 <h3><input type=”text” name="in"  placeholder="items"/> </h3><br/>
											 <h3><input type=”text” name="d"  placeholder="item id"/> </h3><br/>
											 <h3><input type=”text” name="p"  placeholder="items price"/> </h3><br/>
											
											 <h3><input type=”text” name="q"  placeholder="no.of.item add"/> </h3><br/>
											<button id="r5" type="sumbit" name="bit" class="button1"  >add</button>
										
										
									</div>
			     </form>
				 <form id="m"  action="indexad.html" method="post">
				<button type="submit" class="button2" >main_menu</button>

			
			</form>
				 
		 </body>
</html>