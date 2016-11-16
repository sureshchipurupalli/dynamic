<?php include("includes/header.php") ;
include ('popup.php');
$data=$frontend_obj->getaboutus();
include("includes/menu.php");

if($_POST['submit']=='Post Video'){
$insertionuser=$frontend_obj->insertvideofrontend($_POST);
}

$categorylist=$frontend_obj->getAllCategories();
$countrylist=$frontend_obj->getAllCountry();
$getcategories = $frontend_obj->getcategoriesforsearch();

if($_GET['catid']!=""){
$getallvideolist=$frontend_obj->getallvideoswithcat($_GET['catid']);
} else {
$getallvideolist=$frontend_obj->getallvideos($_GET['cid']);
}


$cid=$_GET['cid'];
if($cid!=""){
    $where[] = " `country_id` = ".mysql_real_escape_string($cid)."";
}

$catid=$_GET['catid'];
if($catid!=""){
    $where[] = " `category_id` = ".mysql_real_escape_string($catid)."";
}
$where_clause = implode(' AND ', $where);
  $res = "SELECT * FROM tb_videosdisplay WHERE ".$where_clause." ORDER BY id ASC";
      $result = mysql_query($res);
      //$catcompliants=mysql_fetch_object($result);
  

 ?><!--menu-->

 
 
<?php if($_GET['msg']=='Video Posted Successfully'){ ?>
   <script>
	jQuery(document).ready(function($){
	//alert('jhhh');
	
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
        	<?php  if($_GET['msg']=='Video Posted Successfully'){?>
            	<a href="video.php"><img src="<?php echo SITEURL?>/images/close.png"/></a>
        	<?php }?>
        </div>
        <div class="clear_fix"></div>
        <div class="container-fluid full_wrap">
<?php if($_GET['msg']=='Video Posted Successfully'){?> 
   <h4>Video Posted Successfully</h4>
<div style="margin-top:20px; height:30px;"><a href="<?php echo SITEURL?>/video.php" class="popup_ok">OK</a></div>
<?php }?>
   </div></div></div>
    <?php }?>
<!----- pop up code -->


<script>
function myFunction() {
    alert("Please Login into your account");
}
</script>




<script>
function getcountry(ss){
	//alert(ss);
	$id=ss;
	//alert($id)
	window.location.href="<?php echo SITEURL?>/video.php?cid="+$id+"";
}
</script>



<div class="inner-banner">
	<h2>Videos</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque fermentum sodales</p>
</div>
<div style="background:url(images/banner-border_03.png) repeat-x; padding:4px 0px; margin-top:1px"></div>


<script type="text/javascript">
function getcategories(cat){
var cid= '<?php echo $_GET['cid'];?>';
var catid= '<?php echo $_GET['catid'];?>';
	if(cid!=''){
window.location.href='video.php?cid='+cid+'&catid='+cat;
	}

}
</script>

 <form method="post" style="display:inline-block;width:75%;" class="vid">
 <div class="video_search" >


 <?php if($_GET['cid']!=''){ ?>
 	<select class="categoryvideo" id="categorysearch" name="category" onchange="getcategories(this.value);">	
	<option>Select Category</option>
	<?php foreach($getcategories as $category){ ?>
	
	<option value="<?php echo $category->id;?>" ><?php echo $category->name;?></option>
	<?php } ?>
	
	
	</select>
 <? } ?>
 
 
 
  <script type="text/javascript">

                for(var i=0;i<document.getElementById('categorysearch').length;i++)

                {

						if(document.getElementById('categorysearch').options[i].value=="<?php echo $_GET['catid']; ?>")

						{

						document.getElementById('categorysearch').options[i].selected=true

						}

                }			

                </script>

 
 
 
	<select class="category2" id="category1" name="country" onchange="getcountry(this.value);">	
	<option value="0">Select County</option>
	<?php foreach($countrylist as $country){ ?>
	
	<option value="<?php echo $country->id;?>" ><?php echo $country->country_name;?></option>
	<?php } ?>
	
	
	</select>
    
     <script type="text/javascript">

                for(var i=0;i<document.getElementById('category1').length;i++)

                {

						if(document.getElementById('category1').options[i].value=="<?php echo $_GET['cid']; ?>")

						{

						document.getElementById('category1').options[i].selected=true

						}

                }			

                </script>
    
    
    
    
    
    
    
	</div>
	</form>
	 
     
     
     
	 </div>

<?php if($_SESSION['id']!=''){?>
<label class="btn add-comp" for="modal-0" style="cursor:pointer;" >Add Videos</label>
<?php } else{?>
<label class="btn add-comp"  style="cursor:pointer;" onClick="myFunction()">Add Videos</label>
<?php } ?>

				<div class="clear_fix"></div>
				
				
<div class="about-text">
	<div class="mid_wrap">
	<!--<p><?php //echo $data->description;?></p>-->
	
	<ul class="courses-list">
    
    <?php 
	if(count($getallvideolist)>0){
	foreach($getallvideolist as $getlistview){ ?>
    
    <li>
     <div class="retreatimg">
	 
		<?php 
		
		/*if($getlistview->video=='')
		{ ?>
		<img src="images/novideo.jpg" alt="">	
		<?php } */ 
		$ee = explode('.',$getlistview->video);
		if($ee[1]=='mp4'){ ?>
		<video width="100%"  controls="controls" >
		<source src="uploads/videos/<?php echo $getlistview->video; ?>" type="video/mp4">
		<object data="" width="100%" height="200">
		<embed width="100%" height="200" src="uploads/videos/<?php echo $getlistview->video; ?>">
		</object>
		</video>
		<?php } else { ?>
		<!--<img src="uploads/videos/thumbs/<?php //echo $getlistview->video; ?>" alt="">-->
		<img src="images/novideo.jpg" alt="">	
		<?php } ?>
	 
	 </div>
     <div class="dicription-wrap1">
     <h3><?php echo $getlistview->video_name; ?></h3>
     
     <p><?php echo $getlistview->description; ?></p>
   
     </div>
    </li>
    
	<?php }
	} else {
	?>
   <h2 style="text-align:center; padding-top:75px;padding-bottom:50px;">No Videos</h2>
	<?php } ?>
    <div class="clear_fix"></div>
   </ul>
	
    	
    </div>
</div>


 <?php include("includes/footer.php");?>



<input class="modal-state" id="modal-0" type="checkbox" />
<div class="modal" style="z-index:999;">
  <label class="modal__bg" for="modal-0"></label>
  <div class="modal__inner" style="height:80%;width:50%;">
    <label class="modal__close" for="modal-0"></label>
    <h2 style="color:#4a2e88;">Post Your Videos Here</h2>
<form  name="form1" method="post" enctype="multipart/form-data">   
<div class="full_wrapper formwrap">
<div class="site_container1">

 <div style="margin-top:15px;"><strong>County</strong>: 
	<select class="category" id="country" name="country" >	
	<option value="0">Select County</option>
	<?php foreach($countrylist as $country){ ?>
	
	<option value="<?php echo $country->id;?>" ><?php echo $country->country_name;?></option>
	<?php } ?>
	
	
	</select>
	 
	 </div>

	 
 <div style="margin-top:15px;"><strong>Category</strong>: 
	<select class="category" id="category1" name="category" onchange="getsubcategorys(this.value);">	
	<option value="0">Select Category</option>
	<?php foreach($categorylist as $category){ ?>
	
	<option value="<?php echo $category->id;?>" ><?php echo $category->name;?></option>
	<?php } ?>
	
	
	</select>
	 
	 </div>
	 



       <div style="margin-top:15px;"><strong>Department</strong>:
	   <select class="category" id="myDiv" name="department" >	
									<option value="0">Select Department</option>
									
                 
                  
				</select>
    </select>
	 
	 </div>
	 
	 <div style="margin-top:15px;"><strong>Employee Id</strong>:  
<!--<input type="email" name="email" id="remail" placeholder="Enter Mail Here..." value="<?php //echo $_SESSION['email']; ?>"  readonly >-->
 <input type="text" name="vtitle"  id="empid" placeholder="Enter Employee Id" />	
									
</div>

<div style="margin-top:7px;"><b>Video Title</b>: 
 <input type="text" name="vtitle"  id="vtitle" placeholder="Enter Title"   />
</div>


<div style="margin-top:18px;"><b>Upload Your Video</b>: 
<input type="file" name="image" id="fileToUpload" style="margin-left:-15px;"></div>

<div style="margin-top:7px;"><b>Description</b>: 
<textarea name="description"  id="des" placeholder="Description"></textarea>
</div>
<br/>
<input type="submit"  name="submit"  value="Post Video" style="background-color:#99a609;"/> 

	 
 </div>
</div>
   </form>
  </div>
</div>

<script>
              function getsubcategorys(category)
				{
				//alert(category);
				var xmlhttp;
				if (window.XMLHttpRequest)
					{// code for IE7+, Firefox, Chrome, Opera, Safari
					xmlhttp=new XMLHttpRequest();
					}
				else
					{// code for IE6, IE5
					xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
					}
				xmlhttp.onreadystatechange=function()
{
if (xmlhttp.readyState==4 && xmlhttp.status==200)
{
//alert(xmlhttp.responseText);
document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
}
}
				xmlhttp.open("GET","newcatajax1.php?q="+category,true);
				xmlhttp.send();
				}
    </script>
	
	<!--validations-->
    
<script src="js/jquery-1.9.1.min.js"></script>
<script src="plugins/jquery-form-validate/javascripts/jquery.validate.js" type="text/javascript"></script>
<script src="plugins/jquery-form-validate/javascripts/jquery.validation.functions.js" type="text/javascript"></script> 



 <script type="text/javascript">
           
           
			jQuery(function(){
			
			 
						jQuery("#country").validate({
						expression: "if (VAL) return true; else return false;",
						message: "Please Select Country"
						});
			
			
						jQuery("#category1").validate({
						expression: "if (VAL) return true; else return false;",
						message: "Please Select Category"
						});
			
						jQuery("#empid").validate({
						expression: "if (VAL) return true; else return false;",
						message: "Please Select Employee Id"
						});
			
						jQuery("#myDiv").validate({
						expression: "if (VAL) return true; else return false;",
						message: "Please Select Department"
						});
			
						jQuery("#vtitle").validate({
						expression: "if (VAL) return true; else return false;",
						message: "Please Select Video Title "
						});
			
			
						jQuery("#fileToUpload").validate({
						expression: "if (VAL) return true; else return false;",
						message: "Please Upload Video"
						});
			
						jQuery("#des").validate({
						expression: "if (VAL) return true; else return false;",
						message: "Please Fill The Description"
						});
			
						
						
			
		});
           
   </script>
<link rel="stylesheet" type="text/css" href="plugins/jquery-form-validate/stylesheets/jquery.validate.css" />
