<?php include("includes/header.php");

$category=$frontend_obj->getAllCategorieslogo();
$countrylist=$frontend_obj->getAllCountry();
$categorylist=$frontend_obj->getAllCategories();
//print_r($_SESSION);
 include("includes/menu.php");
 
 if($_GET['id']!="" && $_GET['cont']==""){
 $complaintlist=$frontend_obj->getallcomplaints($_GET['id']);
 }
 else if($_GET['id']!="" && $_GET['cont']!='')
 {
	 $complaintlist=$frontend_obj->getallcomplaintsnew($_GET['cont']);
	 }
 
 else{
 $complaintlist=$frontend_obj->getrelatedcomplaints($_GET['title']);
 
 }
 
 
 ?>
 
 
 <script>
function getcountry(ss){
	//alert(ss);
	$contid=ss;
	var id=<?php echo $_GET['id'];?>;
	var msg ="<?php echo $_GET['msg'];?>";
	
	window.location.href="<?php echo SITEURL?>/viewcomplaints.php?id="+id+"&cont="+$contid+"&msg="+msg;
}
</script>

 
 <script>
 function ClickEvent(){
    window.location.href='complaint.php?id=<?php echo $_GET['id'];?>&msg=<?php echo $_GET['msg'];?>';
}
 </script>
 
 <link href="http://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
      <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
      <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
			
			
			 <script>
         $(function() {
            $( "#date" ).datepicker();
         });
      </script>

<div class="inner-banner">
	<h2><?php echo ucfirst($_GET['msg']);?> Complaints</h2>
    <p>Check your raised complaint status/feedback</p>
</div>


	
<div style="background:url(images/banner-border_03.png) repeat-x; padding:4px 0px; margin-top:1px"></div>
<button class="add-comp" onclick="ClickEvent()">ADD COMPLAINT</button>
				<div class="clear_fix"></div>




<select class="category1" id="categ" name="cont" onchange="getcountry(this.value);" style="margin-top:-29px;">	
	<option value="0">Select Country</option>
	<?php foreach($countrylist as $country){ ?>
	
	<option value="<?php echo $country->id;?>" ><?php echo $country->country_name;?></option>
	<?php } ?>
	
	
	</select>
    
     <script type="text/javascript">

                for(var i=0;i<document.getElementById('categ').length;i++)

                {

						if(document.getElementById('categ').options[i].value=="<?php echo $_GET['cont']; ?>")

						{

						document.getElementById('categ').options[i].selected=true

						}

                }			

                </script>



<div class="vcomplaint">
	
	
	<div class="mid_wrap">
	<?php if(count($complaintlist)>0){
	$i=1;
	foreach($complaintlist as $complaints){ 
	
	if($_GET['msg']!=""){
	$category=$frontend_obj->getCategorieslogo($complaints->complaint_category);
	
	$subcategory=$frontend_obj->getsubCategories($complaints->department);
	
	$country=$frontend_obj->getcountryforviewcomplaints($complaints->country_name);
	}
	
	
	
	if($_POST["submit"]=='Update'){
 $update=$frontend_obj->updateComplaint($_POST);
 //print_r($update);
 }
	
	?>
    		<div class="complaint1">
            	<div class="comp">
            		<div class="comp-left">
					
     <p><img src="uploads/homeimg/<?php echo $category->image;?>" style="height:35px; width: 35px;margin: 7px 1em 0em 0;"/><span>Complaint #<?php echo $i;?></span></p>
                	</div>
                	<div class="comp-right">
					<?php if($complaints->status=='Open'){?>
					<p>
					<!--<label for="modal-<?php //echo $complaints->id;?>" style="cursor:pointer;" >Edit</label>-->

						<?php if($_SESSION['id'] == $complaints->user_id) { ?>
					
					
					 
					<label for="modal-<?php echo $complaints->id;?>" style="cursor:pointer;" >Edit</label>| <?php echo $dateadded=date("F d, Y",strtotime($complaints->date_added));
						
					 
					 //echo $complaints->date_added;?><p>
                    
                    
					<?php }  } else { ?>
					<p class="closed" >Closed<p>
					<?php } ?>
					<!--<p><?php //echo $complaints->date_added;?></p>-->
                    </div>
                    <div class="clear_fix"></div>
                </div>
				<?php 
				$userdetails=$frontend_obj->getuserdetails($complaints->user_id);
				//print_r($userdetails);exit;
				?>							
                <div class="comp-text">
				
				<div class="comp_left">
				     <a href="innerpage.php?id=<?php echo $complaints->id;?>" style="text-decoration:none;color:#454545;"><h2>Title: <?php echo $complaints->title;?></h2></a>
					 <?php if($_GET['title']!=""){?>
					 <p class="ctext">Category: <?php echo $category->name;?></p>
					 <p class="ctext">Sub-Category: <?php echo $subcategory->department_name;?></p>
					 <p class="ctext">Location: <?php echo $country->country_name;?></p>
					 <?php } else {?>
					<p class="ctext">Location: <?php echo $complaints->country_name;?></p>
					<?php }?>
                    <p class="ctext">Description: <?php echo $complaints->description;?></p>
					<p>Posted By: <?php echo $userdetails->firstname.'***'; ?></p>
					   
                    <!--<p class="person">-Nunc accumsan at justo ut lacinia.</p>-->
					
				</div><!--comp_left-->
				

				<div>
                
                <!----------------------------------------------------->
	<?php
	$mm=mysql_query("select * from tb_complaints where id=".$complaints->id."");
	$mm_res=mysql_fetch_array($mm);
	?>
		
	
<input class="modal-state" id="modal-<?php echo $complaints->id;?>" type="checkbox" />
<div class="modal" style="z-index:999;">
  <label class="modal__bg" for="modal-<?php echo $complaints->id;?>"></label>
  <div class="modal__inner" style="height:80%;width:50%;">
    <label class="modal__close" for="modal-<?php echo $complaints->id;?>"></label>
    <h2 style="color:#33a3d7;">Edit Complaint</h2>
<form  name="form1" method="post" enctype="multipart/form-data">   
<div class="full_wrapper formwrap">
<div class="site_container1">
     <div style="margin-top:10px;"><input type="hidden" name="update_id" id="username" value="<?php echo $complaints->id;?>" readonly  /></div>
	 <?php //echo $complaints->id;?>
	  <div class="labels"><label>Country</label>: 
	<select class="category" id="country" name="country" >	
	<option value="">Select Country</option>
	<?php foreach($countrylist as $country){ ?>
	<option value="<?php echo $country->id;?>" ><?php echo $country->country_name;?></option>
	<?php } ?>	
	</select>
	

	 </div>
     
     <script type="text/javascript">

                for(var i=0;i<document.getElementById('country').length;i++)

                {

						if(document.getElementById('country').options[i].value=="<?php echo $country->id; ?>")

						{

						document.getElementById('country').options[i].selected=true

						}

                }			

                </script>
     
     
	 
	 <div class="labels"><label>Category</label>: 
	<select class="category" id="category" name="category" onchange="getsubcategorys(this.value)">	
	<option value="">Select Category</option>
	<?php foreach($categorylist as $category){ ?>
	<option value="<?php echo $category->id;?>"><?php echo $category->name;?></option>
	<?php } ?>	
	</select>
	

  <script type="text/javascript">

                for(var i=0;i<document.getElementById('category').length;i++)

                {

						if(document.getElementById('category').options[i].value=="<?php echo $category->id;?>")

						{

						document.getElementById('category').options[i].selected=true

						}

                }			

                </script>



	 </div>
	
	  <div  class="labels" id=""><label>Department</label>: 
      <select class="category" id="myDiv" name="department" onchange="getsubsubcategory(this.value);">	
									<option value="">Select Department</option>
									
                
                  
				</select>
   

	 
	 </div>
            
       
	 
	 <div class="labels" style="margin-top:10px;"><label>Employee Id</label>:  
<input type="text" name="emp_id" id="empid" placeholder="" value="<?php echo $mm_res['employee_id'];?>"   >

</div>

 <div class="labels" style="margin-top:10px;"><label>Title</label>:  
<input type="text" name="title" id="title" placeholder="" value="<?php echo $mm_res['title'];?>"   >

</div>



 <div class="labels" style="margin-top:10px;"><label>Amount</label>:  
<input type="text" name="amount" id="price" placeholder="" value="<?php echo $mm_res['price'];?>"   >

</div>

 <div class="labels" style="margin-top:10px;"><label>Date</label>:  
<input type="text" name="date" id="date" placeholder="" value="<?php echo $mm_res['date_added'];?>">

</div>

<div class="labels" style="margin-top:7px;"><label>Description</label>: 
<textarea name="description" id="des" required="required" placeholder="Description"><?php echo $mm_res['description'];?></textarea>
</div>
<input type="hidden" name="jama" value="<?php echo $complaints->id;?>"

<br/>
<input type="submit"  name="submit"  value="Update" /> 

	 
 </div>
</div>
   </form>
  </div>
</div>
	
	
	
	<!---------------------------------------------------->
                
                
                
                
                
                
                
                
				
				
				<a href="innerpage.php?id=<?php echo $complaints->id;?>" style="text-decoration:none;color:#454545;">
				<div class="comp_right">
				<!--<img src="images/case_11.png" alt="">-->
				<?php if($complaints->image!=''){
				$ee = explode('.',$complaints->image);
				
				
				if($ee[1]=='mp4'){ ?>
					<video width="100%" height="150" controls="controls" >
					<source src="uploads/complaints/<?php echo $complaints->image; ?>" type="video/mp4">
					<object data="" width="100%" height="150">
					<embed width="100%" height="150" src="uploads/complaints/<?php echo $complaints->image; ?>">
					</object>
					</video>

				
				<?php } else { ?>
				
				<img src="uploads/complaints/thumbs/<?php echo $complaints->image; ?>" alt="" width="80%" height="75%">
				
				<?php }

				}
				?>
				</div><!--comp_right--></a>
              
			<div class="clear_fix"></div>
            </div>	
    </div>
	<?php $i++;	} } else { ?>	
	
		<h3 style="padding-top:100px; padding-bottom:100px; text-align:center;">No Complaints Registered</h3>
	
	<?php } ?>
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





<div style="clear:both;"></div>


</div><!--end of comp--->
</div><!--------end of complaint1------>

<!--validations-->
    
<script src="js/jquery-1.9.1.min.js"></script>
<script src="plugins/jquery-form-validate/javascripts/jquery.validate.js" type="text/javascript"></script>
<script src="plugins/jquery-form-validate/javascripts/jquery.validation.functions.js" type="text/javascript"></script> 
<link rel="stylesheet" type="text/css" href="plugins/jquery-form-validate/stylesheets/jquery.validate.css" />



 <script type="text/javascript">
           
           
			jQuery(function(){
			
			 
						jQuery("#country").validate({
						expression: "if (VAL) return true; else return false;",
						message: "Please Select Country"
						});
			
			
						jQuery("#category").validate({
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
			
						jQuery("#title").validate({
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
						
						jQuery("#price").validate({
						expression: "if (VAL) return true; else return false;",
						message: "Please Enter the Price"
						});
						
						jQuery("#date").validate({
						expression: "if (VAL) return true; else return false;",
						message: "Please Enter the Date"
						});
			
						
						
			
		});
           
   </script>

	
	


<?php include("includes/footer.php");?>


 