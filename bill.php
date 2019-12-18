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
			}
?>	


<html>
	<body>
	<form id="m"  action="stull.php" method="post">
				<button type="submit" >Login out</button>

				
	</form>
	<center>
	<table border=1 width=70%>
		<caption>
			<font color='blue' size='8'> INVOICE</font>
			
		</caption>
		<div class="coloum">
				<tr>
				<th colspan="5"><h2> BILL</h2></th>
				</tr>
				<tr>
								
								<th>Description</th>
								<th>Rate</th>
								<th>Qty</th>
								<th>Amount</th>
								
				</tr>	
			
			<div class"coloum">
				
					
							
							
				
			</div>
			<?php
											
						if(isset($_POST['submit'])){//to run PHP script on submit
										$total=0; 
										
												
													
													
													
													if(!empty($_POST['check_list'])){
														
													// Loop to store and display values of individual checked checkbox.
													
													foreach($_POST['check_list'] as $value){
													
													$ql = "SELECT `iname`, `id`, `price` FROM `insertdata` WHERE id='".$value."'";
														$ch=$_POST['check_list'];
														
														$re=$conn->query($ql);
																$ff=$_POST['qua'];
																echo"$ff";
																while($row = $re->fetch_assoc())
																{
																					
																					$ff=$_POST['qua'];
																							echo"$ff";	
																						
																							
																						if($value==$row['id']){
																							
																							$name=$row['iname'];
																							$ii=$row['id'];
																							$rate=$row['price'];
																							$amt=$rate*$ff;
																							
																																	
																						}
																
																 
						
			?>
											<tr>
												<th><font color='blue' size='6'> <?php  echo "$name"; ?></font></th>
						<th><font color='blue' size='6'><?php echo "$rate";?></font></th>
						<th><font color='blue' size='6'><?php echo "$ff"; ?></font></th>
						<th><font color='blue' size='6'><?php echo "$amt"; ?></font></th>
										</tr>
													
		<?php
																			}
							$total+=$amt;
						
							}
							}
						
			}
		     
		?>
			<tr>
		<th colspan="3"><h2>total</h2></th>	 
		<th><font color='blue' size='6'><?php echo "$total"; ?></font></th>	 
		</tr>
	</table>
	</center>
	</body>
</html>