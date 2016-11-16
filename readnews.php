<?php include("includes/header.php");
$newslist=$frontend_obj->getnews($_GET['id']);
$category=$frontend_obj->getAllCategorieslogo();

 include("includes/menu.php");
 
 
 
 ?>
 
 <script>
 function ClickEvent(){
    window.location.href='complaint.php?id=<?php echo $_GET['id'];?>';
}
 </script>
 
 

<div class="inner-banner">
	<h2>NEWS</h2>
    <!--<p>Check your raised complaint status/feedback</p>-->
</div>
<div style="background:url(images/banner-border_03.png) repeat-x; padding:4px 0px; margin-top:1px"></div>
<!--<form method="post">
                <a href="complaint.php"><input type="submit" class="add-comp" value="Add Complaint" /></a>
				</form>-->
				
				<!--<button class="add-comp" onclick="ClickEvent()">Add Complaint</button>-->
				<div class="clear_fix"></div>



<div class="vcomplaint">
	
	<div class="mid_wrap">
    		<div class="complaint1">
            	<div class="comp">
            		<div class="comp-left">
					
                		<!--<p><img src="images/<?php //echo $category->image;?>" style="height:35px; width: 35px;margin: 7px 1em 0em 0;"/><span>complaint no # <?php echo $i;?></span></p>-->
                	</div>
                	
                    <div class="clear_fix"></div>
                </div>
                <div class="news-text">
                	<h2><?php echo $newslist->title;?></h2>
                    <p>Automatic Transmission  82,992 miles</p>
                    <p class="ctext"><?php echo $newslist->description;?></p>
                  
                </div>
				
			
				<!--<form method="post">
                <input type="submit" class="add-comp" value="Add Complaint" /> 
				</form>-->
			
            </div>	
    </div>
	
</div>










<?php include("includes/footer.php");?>