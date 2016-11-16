<style type="text/css">
blockquote
{
    clear: both;
    font-style: italic;
    margin-left: 10px;
    margin-right: 10px;
    padding: 10px 10px 0 50px;
    position: relative;
    quotes: none;
   /* background: url(https://dl.dropbox.com/u/96099766/RotatingTestimonial/open-quote.png) 0 0 no-repeat;*/
    border: 0px;
    font-size: 120%;
    line-height: 200%;
}
</style>

<script type="text/javascript">
         $(document).ready(function () {           
             $('.bxslider').bxSlider({
                 mode: 'horizontal',
                 slideMargin: 3,
                 auto:true
             });             
         });
</script>
    
<script src="jquery-1.8.2.min.js" type="text/javascript"></script>
<script src="jquery.bxslider1.min.js" type="text/javascript"></script>
<link href="jquery.bxslider.css" rel="stylesheet" type="text/css" />


<!--Testimonials Start-->
	<div style="width:100%;margin-left:4%;margin-right:20%;">
	<!--	<h3 style="font-style:oblique">&nbsp;</h3>-->
		<ul class="bxslider">
        
        <?php
$mm=mysql_query("select * from tb_news order by id ASC");
while($getrows=mysql_fetch_array($mm))
{

?>       
			<li>
             <h1><?php echo $getrows['title']; ?></h1>
				<!--<blockquote>-->
                <div class="quotedtxt" >
     <?php echo stripslashes($getrows['description']); ?>
     
     
    </div>
				
				<!--</blockquote>-->
				</li>
		<?php } ?>  
		
		</ul>
	</div>
	<!--Testimonials End-->

	