
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
        <title> adpage1</title>
        <link rel='stylesheet' href="fin.css" type='text/css'/>
		</head>
    <body>
		<h4>iStore</h4>
			<div class="table-users">
					<table  action="display.php" method="post"  >
					    <th colspan="4"><h3>admin_data</h3></th>	
						<tr >
							<th class="hii">Item_Name</th>
							<th class="hii">Iteam_Id</th>
							<th class="hii">Iteam_Price</th>
							<th class="hii">no.of.added</th>
							</tr>
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
				
				</table>	
			</div>	
			<form id="m"  action="indexad.html" method="post">
				<button type="submit" class="button2" >main menu</button>

			
			</form></body>
			</html>
				