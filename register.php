<?php include 'inc/header.php'; ?>
<div class="main">
<h1>Online Exam System - User Registration</h1>
	<div class="segment" style="margin-right:30px;">
		<img src="img/regi.png"/>
	</div>
	<div class="segment">
	<form action="" method="POST">
		<table>
		<tr>
           <td>Name</td>
           <td><input type="text" name="name" id="name" placeholder="Name..."></td>
         </tr>
		<tr>
           <td>Username</td>
           <td><input name="username" type="text" id="username" placeholder="Username..."></td>
         </tr>
          <tr>
           <td>E-mail</td>
           <td><input name="email" type="email" id="email" placeholder="Enter a valid email" ></td>
         </tr>
         <tr>
           <td>Password</td>
           <td><input type="password" name="password" id="password" placeholder="Password"></td>
         </tr>
         
        
         <tr>
           <td></td>
           <td><input type="submit" id="regsubmit" value="Signup">
           </td>
         </tr>
       </table>
	   </form>
	   <p>Already Registered ? <a href="Login.php">Login</a> Here</p>
     <span id="state"></span>
	</div>


	
</div>
<?php include 'inc/footer.php'; ?>