<?php include 'inc/header.php'; ?>

<?php 

if (isset($_GET['q'])) {
	$quesno=(int)$_GET['q'];
}else{
	header("location:exam.php");
}
$total    = $exm->getTotalRows();
$question = $exm->getQuesByquesno($quesno);

?>
<?php
   if($_SERVER['REQUEST_METHOD'] == 'POST'){

     $process = $pro->processData($_POST);
   }
?>
<style>
.test ul{
	padding-left: 25px
}
.test ul li{
	
	padding-left: 1px;
    color: gray;
    font-size: 17px;
   


}
.starttest{

	border: 1px solid #f3f3f3;
    margin: 0 auto;
    max-width: 600px;
    padding: 20px;
    text-align: center;
}
.starttest a{
	background: #035C86;
    text-align: center;
    text-align: center;
    text-decoration: none;
    color: #fff;
    padding: 4px;
    margin: 10px
    margin-top:20px;
}
.starttest a:hover{
	background: gray;
	color: black;
}
}
	


</style>
<div class="main">
   <form action="" method="post"> 
    <h1>Question <?php echo $question['quesno'] ?> of <?php echo $total ?></h1>
	<div class="test">

		
	  <ul>
	  	  <h4><strong><?php echo $question['quesno']?></strong> <?php echo $question['ques'] ?></h4>
	  	  <br>

	  	   <?php

	  	   $answer =$exm->getAns($quesno);
            if($answer) {
            	while ($result = $answer->fetch_assoc()){
            		
           ?>
	  	    <input type="radio" name="ans" value="<?php echo $result['id']?>"/><?php echo $result['ans']?><br>
	  	    
		<?php }?>
        <?php }?>
			
	  </ul>

	
   </div>
    <div class="starttest">
    	<input type="submit" name="submit" value=" Next "/>
    	<input type="hidden" name="quesno" value="<?php echo $quesno; ?>"/>
    </div>
  </form>
 </div>
 <h4 style="color: red">Don't Refresh the page during the test.</h4>
<?php include 'inc/footer.php'; ?>