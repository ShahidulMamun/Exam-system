<?php include 'inc/header.php'; ?>

<?php 

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

  


</style>
<div class="main">
    <h1>All Questions and Answers <?php echo $total ?></h1>
   <div class="viewsresult">

   
    <table class="resulttable">
        

         <?php

           $getallquestion =$exm->getQuesbyOrder();
            if($getallquestion) {
              while ($result = $getallquestion->fetch_assoc()){?>
              <tr><td><?php echo $result['quesno']?></td><td><?php echo $result['ques']?></td></tr>
              <?php
               $quesno=$result['quesno'];
               $answer =$exm->getAns($quesno);
              if($answer) {
              while ($result = $answer->fetch_assoc()){
                
             ?>

             
              <tr><td></td><td>

                <?php
                 if ($result['rightans']=='1') {
                    echo "<span class='success'>"."✔ ".$result['ans']."<span>";
                    
                 }else{

                  echo "<span class='error'>"."✖ ".$result['ans']."<span>";
                 }
               ?>
                  

                </td></tr>

            <?php }?>
            <?php }?>
             
    
    <?php }?>
    <?php }?>


      
    </table>
     <a href="starttest.php">Start Again</a>
   </div>

 </div>

<?php include 'inc/footer.php'; ?>