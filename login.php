<?php include 'inc/header.php'; ?>
<div class="main">
<h1>Online Exam System - User Login</h1>
	<div class="segment" style="margin-right:30px;">
		<img src="img/login.png"/>
	</div>
	<div class="segment">
	<form action="" method="post">
		<table class="tbl">    
			 <tr>
			   <td>Email</td>`
			   <td><input name="email" type="text" id="email"></td>
			 </tr>
			 <tr>
			   <td>Password </td>
			   <td><input name="password" type="password" id="password"></td>
			 </tr>
			 
			  <tr>
			  <td></td>
			   <td><input type="submit" name="login" id="loginsubmit" value="Login">
			   </td>
			 </tr>
       </table>
	   </form>
	   <p>New User ? <a href="register.php">Signup</a> Free</p>

	   <span class="empty" style="display: none;">Field must not be empty</span>
	   <span class="error" style="display: none;">email or password not matched</span>
	   <span class="disable" style="display: none;">This id is disabled</span>
	</div>


	
</div>
<?php include 'inc/footer.php'; ?>