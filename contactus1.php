<?php 
include("includes/header.php");
include ('popup.php');

$countrylist=$frontend_obj->getAllCountry();
$categorylist=$frontend_obj->getAllCategories();

include("includes/menu.php");

if($_POST['submit']=="SUBMIT")
{
//print_r($_POST);

$x=$user_obj->contactus($_POST);

}



$x="SELECT * from tb_complaints WHERE id=".$_GET['id']."";
$res_complaints=mysql_query($x);

?>
<script src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript">
  jQuery.noConflict();
  </script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<script src="plugins/jquery-form-validate/javascripts/jquery.validate.js" type="text/javascript"></script>
<script src="plugins/jquery-form-validate/javascripts/jquery.validation.functions.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="plugins/jquery-form-validate/stylesheets/jquery.validate.css" />
        <link rel="stylesheet" type="text/css" href="plugins/jquery-form-validate/stylesheets/style.css" />

<script type="text/javascript">
            /* <![CDATA[ */
           
				
				  jQuery(function(){
               
                jQuery("#country").validate({
                   expression: "if (VAL != '0') return true; else return false;",
                    message: "Please make a selection"
                });
				
				  jQuery("#category").validate({
                    expression: "if (VAL != '0') return true; else return false;",
                    message: "Please make a selection"
                });
				
				  jQuery("#email").validate({
				   expression: "if (VAL) return true; else return false;",
                    message: "Email should not be empty"
                });
				
                jQuery("#descriptionn").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please enter the description"
                });
               
            });
            /* ]]> */
			</script>
			
			
	
			
			
			
			
			
			

<div class="inner-banner">
	<h2>CONTACT US</h2>
  
</div>
<div style="background:url(images/banner-border_03.png) repeat-x; padding:4px 0px; margin-top:1px"></div>


<div class="complaint">

<form method="post" name="" enctype="multipart/form-data">
<div class="message">
<?php
if($_GET['err']!='')
{ ?>
<span><img src="images/tick.png">  Complaint Registered successfully!</span>
<?php } 
if($_GET['ferr']!='')
{ ?>
<span id="error"><img src="images/error5.png">  Complaint Registration failed!</span>
<?php } ?>
</div>

	
	
   
	
	
 
  
 
	 <input type="text" class="email" placeholder="Enter Name" name="name" required="required"/>
 
  
  <input type="text" class="email" placeholder="Enter Email" name="email" required="required"/><br><br>
  
  
   <textarea class="description1" placeholder="Description" id="description" name="description" required="required"></textarea>
    <!--<input type="file" class="video" placeholder="Video or Photo Evidence" name="file" />-->
	

	
	

    <input type="submit" class="contactsubmit" name="submit" value="SUBMIT" />
	
   
	</form>
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



<?php include("includes/footer.php");?>










