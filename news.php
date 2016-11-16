<?php include("includes/header.php");
$newslist=$frontend_obj->getallnews();
//print_r($newslist);
$category=$frontend_obj->getAllCategorieslogo();

 include("includes/menu.php");
 
 
 
 ?>
 
 <script>
 function ClickEvent(){
    window.location.href='complaint.php?id=<?php echo $_GET['id'];?>';
}
 </script>
<!--<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
 <script type="text/javascript">
$(document).ready(function(){

    var maxLength = 15;
    $(".ctext").each(function(){
        var myStr = $(this).text();
        if($.trim(myStr).length > maxLength){
            var newStr = myStr.substring(0, maxLength);
            var removedStr = myStr.substring(maxLength, $.trim(myStr).length);
            $(this).empty().html(newStr);
            $(this).append(' <a href="https://www.google.com" class="read-more">read more...</a>');
            $(this).append('<span class="more-text">' + removedStr + '</span>');
        }
    });
    
});
</script>-->

<style type="text/css">
    .ctext .more-text{
        display: none;
    }
</style>
 
 

<div class="inner-banner">
	<h2>NEWS</h2>
    <?php 
$date = date('Y-m-d');
echo "To Date-".$date."</br>";
//$date = strtotime($date);
$beforedate= date("Y-m-d", strtotime("$date -7 day"));
echo "Before-".$beforedate;
	?>
    <!--<p>Check your raised complaint status/feedback</p>-->
</div>
<div style="background:url(images/banner-border_03.png) repeat-x; padding:4px 0px; margin-top:1px"></div>
<!--<form method="post">
                <a href="complaint.php"><input type="submit" class="add-comp" value="Add Complaint" /></a>
				</form>-->
				
				<!--<button class="add-comp" onclick="ClickEvent()">Add Complaint</button>-->
				<div class="clear_fix"></div>



<div class="vcomplaint">
	<?php $i=1;
	foreach($newslist as $news){ ?>
	<div class="mid_wrap">
    		<div class="complaint1">
            	<div class="comp">
            		<div class="comp-left">
					
                		<!--<p><img src="images/<?php //echo $category->image;?>" style="height:35px; width: 35px;margin: 7px 1em 0em 0;"/><span>complaint no # <?php echo $i;?></span></p>-->
                	</div>
                	
                    <div class="clear_fix"></div>
                </div>
                <div class="news-text">
                	<h2><?php echo $news->title;?></h2>
                    <p>Automatic Transmission  82,992 miles</p>
                   <!-- <p class="ctext"><?php //echo $news->description;?></p>-->
				   <?php 
					$string= $news->description;?>
					
					
						
				<p class="ctext"><?php echo substr($string,0,90);?>  <a href="readnews.php?id=<?php echo $news->id;?>">Read More</a></p>
                
                </div>
				
				
				
            </div>	
    </div>
	<?php $i++;	} ?>	
</div>










<?php include("includes/footer.php");?>