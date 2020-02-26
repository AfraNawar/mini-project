<?php

?>

<!DOCTYPE html>
 	
 	<head>
	        <title> Registration </title>
	</head>
			 
	<body>
		<form action="registration.php" method="post">
			 
			<center>
			
		
		<fieldset>
			<legend><strong>Registration</strong></legend>

			 <table border="0">
			 		
			 			<tr>
			 				<td>
			 					Id<br>
			 					<input type="text" name="id" value="">
			 				</td>
			 			</tr>

			 			<tr>
			 				<td>
			 					Password<br>
			 					<input type="password" name="password" value="">
			 				</td>
			 			</tr>
			 			<tr>
			 				<td>
			 					Confirm Password<br>
			 					<input type="password" name="cpassword" value="">
			 				</td>
			 			</tr>
			 			<tr>
			 				<td>
			 					Name:<br>
			 					<input type="text" name="name" value="">
			 				</td>
							</tr>
							<tr>
								<td>
								User Type<br>
							
							<input type="radio" name="user type" value=""/>User
							<input type="radio" name="user type" value="">Admin
							</td>
			 			</tr>
			 				
			 					<tr>	
			 					
			 				<input type="submit" name="submit" value="Sign Up">		
			 				<a href="profile.html">Sign In</a>
							</tr>
			 					
			 				
			 </table>
			 </fieldset>
			 </body>
			 </html>

