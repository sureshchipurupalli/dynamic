<?php include("includes/header.php");
$categorydetails=$frontend_obj->getAllCategory();
include("includes/menu.php");
if($_POST['submit']=='Subscribe'){
	$subscribe=$user_obj->insertSubscriber($_POST);
	}
	$bannerdetails=$frontend_obj->getallbanners();
	
	
	
if($_POST['submit']=='Submit'){

		$email = $_POST['email'];
	 	$query = mysql_query("SELECT email FROM tb_subscribers WHERE email='".$email."'");
		$row = mysql_fetch_array($query);
    	if($row['email']==$email){
			 echo "email already exists";
			header("Location:blog.php?msg=Signup failed");	
		}else{
   
		$signup=$user_obj->signupforupdates($_POST);
	}
}	
	
?>



<link rel="stylesheet" href="css/demo1.css">
  <script src="js/jquery.1.8.3 min.js"></script>
  <script src="js/responsiveslides.min.js"></script>
  <script>
    // You can also use "$(window).load(function() {"
    $(function () {

      // Slideshow 1
      $("#slider1").responsiveSlides({
        maxwidth: 1800,
        speed: 800
      });

     
    });
  </script>

  <style type="text/css">
  
  .quotedtxt{
  margin:auto;
  width:55%;
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


<script src="js/jquery.bxslider1.min.js" type="text/javascript"></script>
<link href="css/jquery.bxslider1.css" rel="stylesheet" type="text/css" />




  <div id="wrapper">
      <!-- Slideshow 1 -->
    <ul class="rslides" id="slider1">
    <?php foreach($bannerdetails as $banners)
		{ ?>
   <li><img src="administrator/uploads/homeimg/thumbs/<?php echo $banners->image_name;?>" alt="" style="height:320;width:2000"/></li>
   <?php }?>
    </ul>

 </div>
  <div class="clear_fix"></div>
  <?php echo $_SESSION['fname'];?>
 



<div style="background:url(images/banner-border_03.png) repeat-x; padding:4px 0px; margin-top:-4px"></div>

<div class="case">
	<div class="mid_wrap">
    	<ul>
			<?php foreach($categorydetails as $category){ ?>
        	<li>
			
            	<!--<img src="images/case_03.png" />-->
				<a href="#"><label for="modal-en<?php echo $category->id;?>"><img src="administrator/uploads/homeimg/<?php echo $category->image;?>"></label></a>
                <h3><?php echo $category->name;?></h3>
                <h2>216 CASES</h2>
                <p><?php echo $category->description1;?></p>
                <p><?php echo $category->description2;?></p>
                <p class="last"><?php echo $category->description3;?></p>
				<img src="administrator/uploads/homeimg/<?php echo $category->image1;?>">
				<h4>$6,175</h4>
				<span class="span"> 18% of this week</span>
				
            </li>
			<?php }?>
            


			<!-- <li>
            	<img src="images/case_05.png" />
                <h3>GOVT OFFICES</h3>
                <h2>216 CASE</h2>
                <p>Education</p>
                <p>Department of Defense</p>
                <p class="last">Land, Border Protection</p>
            </li>
       		<li>
            	<img src="images/case_07.png" />
                <h3>PRIVATE COMPANIES</h3>
                <h2>216 CASE</h2>
                <p>Gm</p>
                <p>Vodacom</p>
                <p class="last">Equity</p>
            </li>
            <li>
            	<img src="images/case_09.png" />
                <h3>POLICE STATIONS</h3>
                <h2>216 CASE</h2>
                <p>Central Police Station</p>
                <p>Industrial Area</p>
                <p class="last" >CID</p>
            </li>
            


            <li>
            	<img src="images/case_11.png" />
                <h3>NEWS</h3>
                <h2>216 CASE</h2>
                <p>Local News</p>
                <p class="last">International News</p>
                
            </li>
            <li>
            	<img src="images/case_13.png" />
                <h3>GET LEGAL EXPERT</h3>
                <h2>216 CASE</h2>
                <p>Pro-bono lawyer</p>
                
                <p class="last">Hire lawyer</p>
            </li>-->
            <div class="clear_fix"></div>
        </ul>
   	</div>
</div>

<div class="latest">
	<div class="mid_wrap">
    	<h2>LATEST NEWS</h2>
        <h5>More than a thousand business News are posted</h5>
        <img src="images/book_03.png" />
		
       <!-- <p>It's Krpano visual editor and I don't have to play with coding. I just upload my panorama and make settings. It saves a lot of time and it's easy for people who are not easy with coding. Sharing is also pretty simple.</p>
        <h6>EMAD-UD-DIN BUTT</h6>
        <img src="images/slider_07.png" />-->
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
     <p><?php echo($getrows['description']); ?></p>
     
     
    </div>
				
				<!--</blockquote>-->
				</li>
                
                
        <!-------------pop up code---------->        
                
            <input class="modal-state" id="modal-en<?php echo $category->id;?>" type="checkbox" />
<div class="modal" style="z-index:11;">
  <label class="modal__bg" for="modal-en<?php echo $category->id;?>"></label>
  <div class="modal__inner" style="height:40%;">
    <label class="modal__close" for="modal-en<?php echo $category->id;?>"></label>
    <?php echo $category->id;
	//print_r($subcat);?>
    
   
<form  name="form1" method="post" enctype="multipart/form-data">   
<h1>Select A Category</h1>

	<?php $subcat=$frontend_obj->getallsubcat($category->id);
	//print_r($subcat);
	?>
	
   
	
<select class="dropdown" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
	<option value='0'>Select a category</option>
	<?php foreach($subcat as $qq){ ?>
    <option value="dashboard.php?id=<?php echo $qq->id;?>"><?php echo $qq->department_name;?></option>
    <?php } ?>
		
<select>
</form>
</div>
</div>

<!------------------end of pop up----------------->
		<?php } ?>  
		
		</ul>
		
    </div>
</div>


<div class="tickets">
	<div class="mid_wrap">
    	<div class="count">
        	<ul>
            	<li>
                	<p class="numb">10000</p>
                    <img src="images/border-count_14.png" />
                    <p class="posted">Posted Cases</p>
                    <p class="year">2014</p>
                </li>
                <li>
                	<p class="numb">50</p>
                    <img src="images/border-count_14.png" />
                    <p class="posted">Countries</p>
                    <p class="year">2014</p>
                </li>
                <li>
                	<p class="numb">900</p>
                    <img src="images/border-count_14.png" />
                    <p class="posted">Open Tickets</p>
                    <p class="year">2014</p>
                </li>
                <li>
                	<p class="numb">650</p>
                    <img src="images/border-count_14.png" />
                    <p class="posted">Closed Tickets</p>
                    <p class="year">2014</p>
                </li>
                <div class="clear_fix"></div>
            </ul>
        </div>
    </div>
</div>



<div class="work">
	<div class="mid_wrap">
    	<h2>HOW IT WORKS</h2>
        <p>LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISCING ELIT. QUISQUE FERMENTUM SODALES</p>
        <div class="work-left">
        <h3><span><img src="images/work_03.png" /></span>Donec ut blandit nulla</h3>
        <h1>Mauris tellus velit, pretium nec</h1>
		
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque 
			fermentum sodales dolor imperdiet mollis. </p>
			
		<p>Donec ut blandit nulla, nec scelerisque ante. Mauris tellus velit, 
			pretium nec est a, finibus convallis nisi. Nam eget tortor nunc. Nunc 
			at lorem at augue mattis vehicula vitae vel dui.</p>
		<a>behaviour tags.</a>	
        </div>
        <div class="work-right">
        	<img src="images/work_05.png" />	
        </div>
        <div class="clear_fix"></div>
    </div>
</div>


<div class="informed">
	<div class="mid_wrap">
    	<h2>STAY INFORMED - JOIN THE COMMUNITY</h2>
        <p>Solar industry News, Videos, Community Discussions and Sharing</p>
		<form method="post">
        <input type="text" name="email" class="subs" placeholder="Enter your Email"/>
        <?php if($_GET['msg']=='fail'){?>
		<div style="font-size:12px;color:red;font-family:Arial, Helvetica, sans-serif; margin:5px 0 0 20px ;">Email id already exist</div>
	<?php }?>
        <input type="submit"  name="submit" class="scribe" value="Subscribe"/>
		</form>
    </div>
</div>


<?php include("includes/footer.php");?>


