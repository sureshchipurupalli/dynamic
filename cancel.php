<?php 
include 'includes/inner_header.php'; 
  if($_SESSION['frontUserId']=='') {
  header('Location:index.php');
 } 
?>

<div class="full_wrapper">
 <div class="site_container">
    <div class="content_wrap">
      <h1> Your Trascation was cancelled</h1>
    
       <div style="font-weight:bold; min-height:300px; text-align:center; margin:55px; font-size:24px;">
       Please Try Again...!
       
       <br/>
       Thank you ,
       <br/>
       Eyaab.com.au
      </div>
    
    </div><!--content_wrap-->
 </div><!--site_container-->
</div><!--full_wrapper-->
<div class="clear_fix"></div>

 <?php include 'includes/footer.php'; ?>


