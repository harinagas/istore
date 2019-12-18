
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
			 <form id="my"  action="c.php" method="post">
        
					<div class="iup">
                                <img src="iup.png" class="avatar3">
                                <h3>update itemes</h3>
                                <label  for=”r1″ id=”ln”>:item name :</label>
                                    <input type=”text” name="inp" id=”t1″/><br/>
                                
                                <label  for=”r2″ id=”ln”>:item idnumber :</label>
                                    <input type=”text” name="dp" id=”t2″/><br/>
                                    <label  for=”r3″ id="ln">:item price :</label>
                                    <input type=”text” name="pp" id=”t3″/><br/>
                                    <label  for=”r4″ id=”ln”>:no.of.item update :</label>
                                    <input type=”text” name="qp" id=”t4″/><br/>
                                    <button id="r10" type="sumbit" class="button2" name="it">update</button>
                                
                                
                           </div>
		
			     </form>
				 
			<form id="m"  action="indexad.html" method="post">
				<button type="submit" class="button2" >main menu</button>

			
			</form>
		 </body>
</html>