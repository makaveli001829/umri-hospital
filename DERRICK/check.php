<?php
							include('connect.php');
							
							if(isset($_POST['go']))
							{
							
							$username=$_POST['username'];
							$password=$_POST['password'];
							
								
								$result = mysql_query("SELECT * FROM admin  WHERE username = 	'$username' AND password = '$password'") or die(mysql_error());
							
								$row = mysql_fetch_array($result);
								$numberOfRows = mysql_num_rows($result);				
																	
																
																if ($numberOfRows == 0) 
																	{
																		echo " <br><center><font color= 'red' size='3'>Please fill up the fields correctly</center></font>";
																	} 
																else if ($numberOfRows > 0)
																	{
																	session_start();
																	$_SESSION['id'] = $row['user_id'];
																header("location:dashboard.php");
																
															}	
							
							}
							?>
	