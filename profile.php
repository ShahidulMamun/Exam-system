<?php include 'inc/header.php'; ?>
<?php $userid = Session::get("userid");
?>
<style>
  .profile{
    color: #666;
    margin: 10px auto 25px;
    text-align: center;
    width: 620px;
    border: 2px solid #999;
   padding: 43px 0px 50px 11px;

  }

</style>
<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
     $updateUser = $usr->updateUserData($userid, $_POST);
      
    }
?>
<?php 
 $getData = $usr->getUserData($userid);
 
 if ($getData) {
      while ($result = $getData->fetch_assoc()) {
       
 
?>

<div class="main">

<h1>Profile</h1>
  
  <div class="profile">
    <?php 
 if (isset($updateUser)) {
   echo $updateUser;
  header("Refresh:3;profile.php");
 }
?>
  <form action="" method="post">
    <table class="tbl">    
       <tr>
         <td>Name:</td>
         <td><input name="name" type="text" value="<?php echo $result['name'];?>"></td>
       </tr>
       <tr>
         <td>Username</td>
         <td><input name="username" type="text" value="<?php echo $result['username'];?>"></td>
       </tr>
       <tr>
         <td>Email</td>
         <td><input name="email" type="email" id="email" value="<?php echo $result['email'];?>"></td>
       </tr>
       
        <tr>
        <td></td>
         <td><input type="submit" name="login" value="Update">
         </td>
       </tr>
       </table>
     </form>
    
<?php }?>
<?php }?>
     <span class="empty" style="display: none;">Field must not be empty</span>
     <span class="error" style="display: none;">email or password not matched</span>
     <span class="disable" style="display: none;">This id is disabled</span>
  </div>


  
</div>
<?php include 'inc/footer.php'; ?>