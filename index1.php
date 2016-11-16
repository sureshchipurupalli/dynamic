<?php 
include("includes/header.php");
include ('popup.php');
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
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<script>
function showChoice(str,sel2) {
if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
} else { 
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else {
        // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET","getresult.php?q="+str+"&q2="+sel2,true);
    xmlhttp.send();
}
}

$(document).ready(function()
{
    $('.location').change(function()
    {
        var sel1=$('#select1').val();
        var sel2=$('#select2').val();
		alert(sel1);
        showChoice(sel1,sel2);

    })

});

</script>
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
	 background-color:#030;
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
	 background-color:#030;
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
    
    
    

    
    
    
    
    <?php if($_GET['msg']=='Registered successfully'){ ?>
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
	 background-color:#030;
	 font-size:16px;
	 color:#fff; 
}

</style>
<a id="myUrl2" href="#back"></a>
<div style="display:none;" class="feedbackthanks">
       <div id="back" align="center">
       <div style="float:right; cursor:pointer;">
        	<?php if($_GET['msg']=='Registered successfully'){?>
            	<a href="<?php echo SITEURL."/index.php"?>"><img src="<?php echo SITEURL?>/images/close.png"/></a>
        	<?php }?>
        </div>
        <div class="clear_fix"></div>
        <div class="container-fluid full_wrap" style="height:110px;">
<?php if($_GET['msg']=='Registered successfully'){?>
   <h4>Registered successfully</h4>
<div style="margin-top:20px; height:30px;"><a href="<?php echo SITEURL."/index.php"?>" class="popup_ok">OK</a></div>
	<?php }?>
    </div></div></div>
    <?php }?>

<!---------------popup------------------>



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
	<?php //print_r($categorydetails);exit;?>
    	<ul>
			<?php foreach($categorydetails as $category){ ?>
        	<li>
			
			
            	<!--<img src="images/case_03.png" />-->
				<a href="dashboard.php?id=<?php echo $category->id;?>"><img src="administrator/uploads/homeimg/<?php echo $category->image;?>"></a>
                <h3><?php echo $category->name;?></h3>
                <h2><span id="txtHint">216 CASES</span></h2>
				
                <p><?php echo $category->description2;?></p>
                <!--<p><?php //echo $category->description2;?></p>-->
				<p><select class="location" id="select1" name="category">
				
						<option value='0'>Enter location 1 </option>
						<?php 
						$locationdetails=$frontend_obj->getlocations($category->id);
						//print_r($locationdetails);
						foreach($locationdetails as $location){?>
						<option><?php echo $location->location1;?></option>
						<?php }?>
						
						</select> <select class="location" id="select2" name="category">
						<option value='0'>Enter location 2 </option>
						<?php foreach($locationdetails as $location){?>
						<option><?php echo $location->location2;?></option>
							<?php }?>
						</select></p>
						
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


