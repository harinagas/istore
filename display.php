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
<!doctype html>
<html>
    <head>
        <meta charater="uft-8">
        <title>display dat</title>
		 <link rel='stylesheet' href='adminp.css' type='text/css'/>

		
		
    </head>
	
	
	<body>
		
			<table id="my"  style="border-collapse: collapse;width: 10%; 
tr:nth-child(even) {background-color: #f2f2f2;}"  onclick="delete.php" method="post" >
				<div class="coloum">
				<tr>
				<th colspan="4"><h2> admindata</h2></th>
				</tr>
				<tr>
					<th>Item name</th>
					<th>Iteam id</th>
					<th>Iteam price</th>
					<th>no.of.added</th>
					<th>delete</th>
					
				</tr>	
				<div class"coloum">
				<?php
							while($row = $re->fetch_assoc())
							{
				?>
							<tr>	
								
								<td><?php echo $row['iname']; ?></td>
								<td><?php echo $row['id']; ?></td>
								<td><?php echo $row['price']; ?></td>
								<td><?php echo $row['quantity']; ?></td>
								
							<tr>
				<?php
							}
				?>
			</div>
		</table>
		     
			 
			 
			 
			 
			 
			 <form id="form"  action="connection.php" method="post">
        
       
			<div class="fp">
                    <h1>
                            
                        </h1>
                    <h2>
                    
									<div class="aa">
											<img src="iadd.png" class="avatar1">      
										<h3>Add itemes</h3>
										<label  for=”r1″ id=”ln”>:item name :</label>
											<input type=”text” name="in" id=”r1″/><br/>
										
										<label  for=”r2″ id=”ln”>:item idnumber :</label>
											<input type="text" name="d" id=”r2/br/>
											<label  for=”r3″ id=”ln”>:item price :</label>
											<input type=”text” name="p" id=”r3″/><br/>
											<label  for=”r4″ id=”ln”>:no.of.item add :</label>
											<input type=”text” name="q" id=”r4″/><br/>
											<button id="r5" type="sumbit" name="bit" class="button"  >add</button>
										
										
									</div>
			     </form>
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
				 <form id="my"  action="delete.php" method="post">
					
						<div class="del">
                           <h4>delete itemes</h4>
								<label  for=”r2″ id=”ln”>:item idnumber :</label>
                                    <input type=”text” name="dp" id=”t2″/><br/>
									<button id="e5" type="sumbit" class="button1" name="t" >delete</button>
                            
                            
                        </div>
				</form>
        
				 
				
		</form>
	
	</body>
</html>