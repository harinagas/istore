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
        <title>display dat</title>
		 <link rel='stylesheet' href='stuf.css' type='text/css'/>

	</head>
	<body>
	<form id="form"  action="bill.php" method="post">
        
	<center>
		<table>
			<caption>
				<font color='blue' size='15'>Select_Your_Product</font>
			</caption>
		
			<tr>
			<tr>
								
								
								<th>select_product</th>
								<th>product</th>
								<th>enter_quantity</th>
								
			</tr>	
			<?php
							
							while($row = $re->fetch_assoc())
							{
								
				?>
								<tr>
								
								<th><td><input type="checkbox"   name="check_list[]" value="<?php echo $row['id']; ?>"></th>
								<th><font color='white' size='3'><?php echo $row['iname']; ?></font></th><br/><th><input type="text" name="qua"  id="myCheck"  placeholder="quant(1t05)" align"center" style="width: 100px;height:30px; float: cover; "></th>
								<br/>
								</td>
								</tr>
				<?php
							
							}
				?>
			</tr>
				<td><input type="submit" name="submit" value="Submit"></td>
				<td><input type=reset></td>
			</tr>
			</table>
		<center>
	</form>
	</body>
</html>