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
	<body>
	<form id="m"  action="stull.php" method="post">
				<button type="submit" >Login</button>

				
	</form>
	<form id="form"  action="bill.php" method="post">
	<center>
	<table border=1 width=70%>
		<caption>
			<font color='blue' size='8'> iStore</font>
			
		</caption>
		
			
		<div class="coloum">
				<tr>
				<th colspan="3"><h2> SELECT YOUR PRODUCT</h2></th>
				</tr>
				<tr>
								
								
								<th><font color='blue' size='3'>select_product</font></th>
								<th><font color='blue' size='3'>Product</font></th>
								<th><font color='blue' size='3'>Quantity</font></th>
								
								
				</tr>	
			
			<div class"coloum">
				
					
							
							
				
			</div>
			<?php
					while($row = $re->fetch_assoc())
																{
			?>
											<tr>
												<th><input type="checkbox"   name="check_list[]" value="<?php echo $row['id']; ?>"></th>
													<th><font color='red' size='3'><?php echo $row['iname']; ?></font></th><th><input type="number" name="qua"  id="myCheck"  placeholder="quant(1t05)" align"center" style="width: 100px;height:30px; float: cover; "></th>
											</tr>
													
		<?php
			}    
		?>
			<tr>
		<th colspan="2"><input type="submit" name="submit" value="Submit"></th>	 
		<th><input type=reset></th>
		
		</tr>
	</table>
	         </center>
			 </form>
	</body>
</html>