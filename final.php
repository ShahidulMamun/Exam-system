<?php include 'inc/header.php'; ?>
<?php
  //Session::checkSession();
  if (isset($_GET['q'])) {
    $next = $_GET['q'];
  	$com =  $next-1;
  }
?>
<div class="main">
<h1>Your Exam is completed!</h1>
    <div class="segment" style="margin-right:30px;">
    	<p class="success">You have completed <?php echo $com ?> questions</p>
		    Congrats! your score is <b>
			<?php if(isset($_SESSION['score']))
			 echo $_SESSION['score'];
			 unset( $_SESSION['score']);
			 ?></b>!
	</div>
	<div class="segment">
	<ul>
		<li><a href="viewans.php">View answer</a></li>
		<li><a href="starttest.php">Start Again</a></li>
	</ul>
	</div>
	
</div>
<?php include 'inc/footer.php'; ?>
