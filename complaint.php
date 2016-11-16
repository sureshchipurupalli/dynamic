<?php 
include("includes/header.php");

if($_SESSION['id']==''){
	header("location:login.php");
}


if($_GET['id']==''&& $_SESSION['id']=='' ){
header("location:login.php?page=complaint");
}


$countrylist=$frontend_obj->getAllCountry();
$categorylist=$frontend_obj->getAllCategories();

include("includes/menu.php");

if($_POST['submit']=="SUBMIT")
{
//print_r($_POST);

$x=$frontend_obj->submitComplaint($_POST);

}


if($_POST['log']=="LOG COMPLAINT")
{
//print_r($_POST);

$x=$frontend_obj->LogComplaint($_POST);

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

		
		
<!----------------------------------->

<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false&libraries=places"></script>

<script type="text/javascript">

var directionsService = new google.maps.DirectionsService();
google.maps.event.addDomListener(window, 'load', function () {
    new google.maps.places.SearchBox(document.getElementById('location'));
    /*new google.maps.places.SearchBox(document.getElementById('pri_location'));*/
    directionsDisplay = new google.maps.DirectionsRenderer({ 'draggable': true });
});

</script>

<!-------------------------------------->

		
<?php /*<script type="text/javascript">
            
           
				
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
				
                jQuery("#description").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please enter the description"
                });
               
            });
           
			</script>*/?>
			
			<script>
			  function validate()
      {
      
         /*if( document.complaint.country.value == "" )
         {
            alert( "Please Select the Country" );
            document.complaint.country.focus() ;
            return false;
         }*/
		 
		 if(document.complaint.country.value==0)

	{ 

		alert("Please Select Country");

		document.complaint.country.value='';

		document.complaint.country.focus();

		return false;
		

	}
         
        
		 if(document.complaint.category.value==0)

	{ 

		alert("Please Select Category");

		document.complaint.category.value='';

		document.complaint.category.focus();

		return false;
		

	}
		 
		 if(document.complaint.department.value==0)

	{ 

		alert("Please Select Department");

		document.complaint.department.value='';

		document.complaint.department.focus();

		return false;
		

	}
         
        
		 if(document.complaint.subdepartment.value==0)

	{ 

		alert("Please Select Sub-department");

		document.complaint.subdepartment.value='';

		document.complaint.subdepartment.focus();

		return false;
		

	}
		 
		 if( document.complaint.Emp_id.value == 0 )
         {
            alert( "Please Enter the Employee Id" );
            document.complaint.Emp_id.focus() ;
            return false;
         }
		 
		 if( document.complaint.title.value == "" )
         {
            alert( "Please Enter the Title" );
            document.complaint.title.focus();
            return false;
         }
		 
		  if( document.complaint.description.value == 0 )
         {
            alert( "Please Enter the Description" );
            document.complaint.description.focus() ;
            return false;
         }
		 
		  if( document.complaint.image.value == "" )
         {
            alert( "Please Upload the Image" );
            document.complaint.image.focus();
            return false;
         }
		 
		  if( document.complaint.paid.value == "" )
         {
            alert( "Please Enter the Amount" );
            document.complaint.paid.focus();
            return false;
         }
		 
		  if( document.complaint.date.value == "" )
         {
            alert( "Please Enter the Date" );
            document.complaint.date.focus();
            return false;
         }
		 
	  }
         </script>
			
			<link href="http://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
      <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
      <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
			
			
			 <script>
         $(function() {
            $( "#fromdate" ).datepicker({ dateFormat: 'yy-mm-dd' });
         });
      </script>

<div class="inner-banner">
	<h2>SUBMIT COMPLAINT</h2>
    <p>For every case reported we will need to assign it</p>
</div>
<div style="background:url(images/banner-border_03.png) repeat-x; padding:4px 0px; margin-top:1px"></div>


<div class="complaint">

<form method="post" name="complaint" enctype="multipart/form-data"  onsubmit="return(validate());">
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

	<select class="country" id="country1" name="country">
    	<option value="0">Select County</option>
		<?php foreach($countrylist as $country){?>
		<option value="<?php echo $country->id;?>"><?php echo $country->country_name;?></option>
		<?php }?>
    </select>
	<!--<input type="text" class="paid" placeholder="Location (Country/City/Zip) / Name" name="country" id="location" />-->
	
    <select class="category" id="category1" name="category" onchange="getsubcategorys(this.value)">
    	<option value="0">Select Category</option>
		<?php foreach($categorylist as $category){ 
		if($category->id!=7){ ?>
		
		<option value="<?php echo $category->id;?>" <?php if($_GET['id']==$category->id) {?> selected="selected" <?php }?>><?php echo $category->name;?></option>
		<?php } } ?>
		
    </select>
	
	
  <select class="country" id="myDiv" name="department" onchange="subdepts(this.value)" >
	<option value="0">Select Department</option> 
  </select>
  
 
	<select class="country" id="data" name="subdepartment">
	<option value="0">Select Sub Department</option> 
  </select>
	 
	  <input type="text" class="paid" placeholder="Enter Employee Id" name="Emp_id">
 
  
  <input type="text" class="comp_title" placeholder="Enter The Title" name="title"  />
  
  
   <textarea class="description" placeholder="Description" id="description" name="description" ></textarea>
    <!--<input type="file" class="video" placeholder="Video or Photo Evidence" name="file" />-->
	
<?php if($_GET['id']!=''){?>
<img src="uploads/complaints/<?php echo $category->image; ?>" style="height:150px; width: 200px;" />
<input type="hidden" name="hdn_image" value="<?php echo  stripslashes($category->image);?>" /> 

<br/><br/>
<?php } ?>
<input type="file" name="image" value=""/>

<span style="color:#990000">(Please Upload Image/Video)</span>

<br /></br>
	
    <input type="text" class="paid" placeholder="Amount Paid" name="paid" />
    <!--<input type="text" class="stats" placeholder="Status" />-->
	 <input type="text" class="paid" placeholder="Enter Date" name="posteddate" id="fromdate" />
	<br />
	
	<div class="comsubmit" style="text-align:center">
	<?php if($_GET['id']!=''){ ?>
	<input type="submit" class="log" name="log" value="LOG COMPLAINT" />
	<?php }else { ?>
    <input type="submit" class="log" name="submit" value="SUBMIT" onclick="var q=confirm('Are You Want To Submit Complaint'); if(q){return true;}else{ return false;}" />
	<?php }?>
	</div>
   
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
	
	
	
	<script>
              function subdepts(subcategory)
				{
				//alert(subcategory);
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
document.getElementById("data").innerHTML=xmlhttp.responseText;
}
}
				xmlhttp.open("GET","getsubdepts.php?q="+subcategory,true);
				xmlhttp.send();
				}
    </script>



<?php include("includes/footer.php");?>






