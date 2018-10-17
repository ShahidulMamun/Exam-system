<?php include 'inc/header.php'; ?>

<?php 

 $question = $exm->getQuestion();
 $total    = $exm->getTotalRows();

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
    <h1>Multiple choice quiz to test your knowledge</h1>
	<div class="test">
		 <h3 style="text-align: center; background: gray; padding: 5px;">Instruction:</h3>
	
		
		
	
			<ul>
			 	<li>☞ Total Quez for you: <?php echo $total ?>. </li>
			 	<li>☞ Time alloted : <?php echo $total ?> minutes.</li>
			 	<li>☞ Each question carry 1 mark, no negative marks.</li>
			 	<li>☞ DO NOT refresh the page.</li>
		    </ul>
			
			
			
				

</div>
    <div class="starttest"> <a href="test.php?q=<?php echo $question['quesno'];?>">Start Quis</a></div>
	
 </div>
<?php include 'inc/footer.php'; ?>