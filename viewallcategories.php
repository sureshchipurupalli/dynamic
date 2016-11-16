<?php include("includes/header.php");
$categorydetails=$frontend_obj->getAllCategories();
include("includes/menu.php");
include ('popup.php');
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

<!----------------popup--------------------->
<?php if($_GET['msg']=='LogIn Successfull'){ ?>
   <script>
	jQuery(document).ready(function($){
	// alert('jhhh');
	
		$("#myUrl2").fancybox({
			closeClick: false,
			closeBtn: false,
			width: '300px',
			height: 'auto', 
			autoSize: false,
			fitToView : false,
			padding: 10,
			margin: 0
		});
		$('a#myUrl2').trigger('click');
	});
</script>
   
<style>
.popup_ok{
	padding:8px 40px;
	 background-color:#7AD32B;
	 font-size:16px;
	 color:#fff; 
}
</style>
<a id="myUrl2" href="#back"></a>
<div style="display:none;" class="feedbackthanks">
       <div id="back" align="center">
       <div style="float:right; cursor:pointer;">
        	<?php  if($_GET['msg']=='LogIn Successfull'){?>
            	<a href="<?php echo SITEURL."/index.php"?>"><img src="<?php echo SITEURL?>/images/close.png"/></a>
        	<?php }?>
        </div>
        <div class="clear_fix"></div>
        <div class="container-fluid full_wrap">
<?php if($_GET['msg']=='LogIn Successfull'){?> 
   <h4>Login Successfull</h4>
<div style="margin-top:20px; height:30px;"><a href="<?php echo SITEURL."/index.php"?>" class="popup_ok">OK</a></div>
<?php }?>
   </div></div></div>
    <?php }?>
<!----- pop up code -->



  <?php if($_GET['msg']=='logout success'){ ?>
   <script>
   
	jQuery(document).ready(function($){
		$("#myUrl2").fancybox({
			closeClick: false,
			closeBtn: false,
			width: '300px',
			height: 'auto', 
			autoSize: false,
			fitToView : false,
			padding: 10,
			margin: 0
		});
		$('a#myUrl2').trigger('click');
	});
</script>
   
<style>
.popup_ok{
	padding:8px 40px;
	 background-color:#7AD32B;
	 font-size:16px;
	 color:#fff; 
}

</style>
<a id="myUrl2" href="#back"></a>
<div style="display:none;" class="feedbackthanks">
       <div id="back" align="center">
       <div style="float:right; cursor:pointer;">
        	<?php if($_GET['msg']=='logout success'){?>
            	<a href="<?php echo SITEURL."/index.php"?>"><img src="<?php echo SITEURL?>/images/close.png"/></a>
        	<?php }?>
        </div>
        <div class="clear_fix"></div>
        <div class="container-fluid full_wrap" style="height:110px;">
<?php if($_GET['msg']=='logout success'){?>
   <h4>Logged Out successfully</h4>
<div style="margin-top:20px; height:30px;"><a href="<?php echo SITEURL."/index.php"?>" class="popup_ok">OK</a></div>
	<?php }?>
    </div></div></div>
    <?php }?>
    
    
    

    
    
    
    
    <?php if($_GET['msg']=='Record Added successfully'){ ?>
   <script>
	jQuery(document).ready(function($){
		$("#myUrl2").fancybox({
			closeClick: false,
			closeBtn: false,
			width: '300px',
			height: 'auto', 
			autoSize: false,
			fitToView : false,
			padding: 10,
			margin: 0
		});
		$('a#myUrl2').trigger('click');
	});
</script>
   
<style>
.popup_ok{
	padding:8px 40px;
	 background-color:#7AD32B;
	 font-size:16px;
	 color:#fff; 
}

</style>
<a id="myUrl2" href="#back"></a>
<div style="display:none;" class="feedbackthanks">
       <div id="back" align="center">
       <div style="float:right; cursor:pointer;">
        	<?php if($_GET['msg']=='Record Added successfully'){?>
            	<a href="<?php echo SITEURL."/index.php"?>"><img src="<?php echo SITEURL?>/images/close.png"/></a>
        	<?php }?>
        </div>
        <div class="clear_fix"></div>
        <div class="container-fluid full_wrap" style="height:110px;">
<?php if($_GET['msg']=='Record Added successfully'){?>
   <h4>Registered successfully</h4>
<div style="margin-top:20px; height:30px;"><a href="<?php echo SITEURL."/index.php"?>" class="popup_ok">OK</a></div>
	<?php }?>
    </div></div></div>
    <?php }?>

<!---------------popup------------------>



<link rel="stylesheet" href="css/demo1.css">
<link rel="stylesheet" href="css/responsiveslides.css">
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
	  
	  $("#slider4").responsiveSlides({
        
        pager: false,
        nav: true,
        speed: 500,
        namespace: "callbacks",
        before: function () {
          $('.events').append("<li>before event fired.</li>");
        },
        after: function () {
          $('.events').append("<li>after event fired.</li>");
        }
      });

     
    });
  </script>

 <!-- <style type="text/css">
  
  .quotedtxt{
  margin:auto;
  width:55%;
  }
</style>-->

<!--  POP UP STYLES -->


<style>
/* [Object] Modal
 * =============================== */
.modal {
  opacity: 0;
  visibility: hidden;
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  text-align: left;
  background: rgba(0,0,0, .9);
  transition: opacity .25s ease;
 }

.modal__bg {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  cursor: pointer;
}

.modal-state {
  display: none;
}

.modal-state:checked + .modal {
  opacity: 1;
  visibility: visible;
}

.modal-state:checked + .modal .modal__inner {
  top: 0;
  /*height:75%;*/
   
}

.modal__inner {
  transition: top .25s ease;
  position: absolute;
  top: -20%;
  right: 0;
  bottom: 0;
  left: 0;
  width: 30%;
  margin: auto;
  overflow: auto;
  background: #fff;
  border-radius: 5px;
  padding: 1em 2em;
  height: 50%;
}

.modal__close {
  position: absolute;
  right: 1em;
  top: 1em;
  width: 1.1em;
  height: 1.1em;
  cursor: pointer;
}

.modal__close:after,
.modal__close:before {
  content: '';
  position: absolute;
  width: 2px;
  height: 1.5em;
  background: #ccc;
  display: block;
  transform: rotate(45deg);
  left: 50%;
  margin: -3px 0 0 -1px;
  top: 0;
}

.modal__close:hover:after,
.modal__close:hover:before {
  background: #aaa;
}

.modal__close:before {
  transform: rotate(-45deg);
}

@media screen and (max-width: 768px) {
	
  .modal__inner {
    width: 90%;
    height: 90%;
    box-sizing: border-box;
  }
}


/* Other
 * =============================== */
.btn--blue:hover,
.btn--blue:focus {
  background: #3498db;
}

.btn--blue:active {
  background: #2980b9;
}

p img {
  max-width: 200px;
  height: auto;
  float: left;
  margin: 0 1em 1em 0;
}

.dropdown{
	border:none;
 appearance:none;
 -moz-appearance:none;
 -webkit-appearance:none;
 background: url("images/select-arrow_03.png") right center no-repeat;
 width:49%;
 height:38px;
 border:1px solid #d9d9d9; 
 padding-left:15px;
 font-family: 'Open Sans', sans-serif;
 font-size:12px;
 color:#666666 !important; 
 margin: 28px 0px 12px 99px;
  align:center;
 }
 
 h1{
	font-family: 'Open Sans', sans-serif;
	text-align:center;
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




  <!--<div id="wrapper">
     
    <ul class="rslides" id="slider4">
    <?php //foreach($bannerdetails as $banners){ ?>
   <li><img src="uploads/banners/<?php //echo $banners->image_name;?>" alt="" ></li>
   <?php //}?>
    </ul>

 </div>
  <div class="clear_fix"></div>-->
  <?php //echo $_SESSION['fname'];?>
 



<div style="background:url(images/banner-border_03.png) repeat-x; padding:4px 0px; margin-top:-4px"></div>

<div class="case">
	<div class="mid_wrap">
    	<ul>
			<?php foreach($categorydetails as $category){ ?>
        	<li>
			<?php $resultcount=$frontend_obj->getcomplaintcount($category->id);
			//print_r($resultcount);
			?>			
			<?php 
			$subcatlimit=$frontend_obj->getallsubcat($category->id);
			$subcat=$frontend_obj->getallsubcatlimit($category->id);
		//print_r($subcat);
		
		$sp  = "select sum(price) as sumprice from tb_complaints where complaint_category='".$category->id."'";
		$res = mysql_query($sp);
		$fetch = mysql_fetch_object($res);
			?>
            	<!--<img src="images/case_03.png" />-->
		<!--<a href="#"><label for="modal-en<?php echo $category->id;?>"><img src="administrator/uploads/homeimg/<?php echo $category->image;?>"></label></a>-->
		
		
		
		<a href="dashboard6.php?cid=<?php echo $category->id; ?>"><img src="uploads/homeimg/<?php echo $category->image;?>"></a>
		<h3><?php echo $category->name;?></h3>
		
        
        
        <h2><?php if($category->id!=7) { ?><?php echo $resultcount;?> CASES<?php }?></h2>
		
		
		<?php 
		if(count($subcat>0)){
		foreach($subcat as $listdetails){ ?>
		<a href="dashboard6.php?cid=<?php echo $category->id; ?>&sid=<?php echo $listdetails->id; ?>&subcat=<?php echo $listdetails->department_name; ?>"><p><?php echo ucfirst($listdetails->department_name);?></p></a>
		<?php } 
		} else { ?> 
		<p>--- </p>
		<?php }	?>
		
		
			<?php if(count($subcatlimit)>3){ ?> <a href="dashboard6.php?cid=<?php echo $category->id;?>"><p style="color:33A3D7;"> View More</p></a> <?php } ?>
		
		
		
		
		<?php if($category->id == '7'){?>
		
		<?php /*?><?php 
		if(count($subcatlimit>0)){
		foreach($subcatlimit as $subcat7){ ?>
		<a href="dashboard1.php?cid=<?php echo $category->id; ?>&sid=<?php echo $subcat7->id; ?>&subcat=<?php echo $subcat7->department_name; ?>"><p><?php echo ucfirst($subcat7->department_name);?></p></a>
		<?php } 
		} else { ?> 
		<p>--- </p>
		<?php }	?><?php */?>
		
		
		<?php if($category->id!=7) { ?><img src="uploads/homeimg/<?php echo $category->image1;?>"><?php }?>
		
		<?php }else {?>
		
			
			
			<!--<p><?php echo $category->description2;?></p>
		<p class="last"><?php echo $category->description3;?></p>
		-->
		<img src="uploads/homeimg/<?php echo $category->image1;?>">
		<h4>$<?php echo $fetch->sumprice;?></h4>
		<span class="span"> 18% of this week</span>
		
			
		<?php }?>
			
		
				
            </li>
			
		
	<?php } ?>
				
            
            
             
		


</div>
</div>
                
			
            


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

<?php /*<div class="latest">
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
  		 <?php
		 		  $string=$getrows['description'];
   				$trimstring= substr($string, 0, 200).'...';
 		  ?>
    		 <p>"<?php echo $trimstring; ?>"</p>
	
	
     
     
    </div>
	          <div class="clear_fix"></div>
				
				<!--</blockquote>-->
				</li>
                
                
                
                
                
		<?php } ?>  
		
		</ul>
		
    </div>
</div>*/?>


<?php   $tt="select * from tb_complaints ";
$ee=mysql_query($tt);
 $dd=mysql_num_rows($ee);



  $tt1="select * from tb_complaints where status='Closed' ";
$ee1=mysql_query($tt1);
 $dd1=mysql_num_rows($ee1);


  $tt2="select * from tb_complaints where status='Open' ";
$ee2=mysql_query($tt2);
 $dd2=mysql_num_rows($ee2);

?>


<?php /*<div class="tickets">
	<div class="mid_wrap">
    	<div class="count">
        	<ul>
            	<li>
                	<p class="numb"><?=$dd;?></p>
                    <img src="images/border-count_14.png" />
                    <p class="posted">Posted Cases</p>
                    <p class="year">2016</p>
                </li>
                <li>
                	<p class="numb">50</p>
                    <img src="images/border-count_14.png" />
                    <p class="posted">Countries</p>
                    <p class="year">2016</p>
                </li>
                <li>
                	<p class="numb"><?=$dd2;?></p>
                    <img src="images/border-count_14.png" />
                    <p class="posted">Open Tickets</p>
                    <p class="year">2016</p>
                </li>
                <li>
                	<p class="numb"><?=$dd1;?></p>
                    <img src="images/border-count_14.png" />
                    <p class="posted">Closed Tickets</p>
                    <p class="year">2016</p>
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
        <input type="email" name="email" class="subs" placeholder="Enter your Email" required="required"/>
        <?php if($_GET['msg']=='fail'){?>
		<div style="font-size:12px;color:red;font-family:Arial, Helvetica, sans-serif; margin:5px 0 0 20px ;">Email id already exist</div>
	<?php }?>
        <input type="submit"  name="submit" class="scribe" value="Subscribe"/>
		</form>
    </div>
</div>*/?>


<?php include("includes/footer.php");?>


