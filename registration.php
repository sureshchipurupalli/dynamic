<?php include("includes/header.php");
 include ('popup.php');

 if($_POST['submit']=='REGISTER')
{
		
	//$sign=$frontend_obj->signupdetails($_POST);		
		$sign=$frontend_obj->user_registration($_POST);			
		
}

include("includes/menu.php");
?>

<!----------popup--------------->

 <?php if($_GET['msg']=='Register Failed'){ ?>
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
        	<?php if($_GET['msg']=='Register Failed'){?>
            	<a href="<?php echo SITEURL."/registration.php"?>"><img src="<?php echo SITEURL?>/images/close.png"/></a>
            <?php }else{?>
            	<a href="<?php echo SITEURL."/registration.php"?>"><img src="<?php echo SITEURL?>/images/close.png"/></a>
        	<?php }?>
        </div>
        <div class="clear_fix"></div>
        <div class="container-fluid full_wrap">
<?php if($_GET['msg']=='Register Failed'){?>
   <h4>Please Enter Correct Email/Password</h4>
<div style="margin-top:20px; height:30px;"><a href="<?php echo SITEURL."/registration.php"?>" class="popup_ok">OK</a></div>
   <?php } ?> </div></div></div>
    <?php }?>
    
    
    
    <!----------popup----------->


<script src="js/jquery-1.9.1.min.js"></script>
<script src="plugins/jquery-form-validate/javascripts/jquery.validate.js" type="text/javascript"></script>
<script src="plugins/jquery-form-validate/javascripts/jquery.validation.functions.js" type="text/javascript"></script>

    <script type="text/javascript">
            /* <![CDATA[ */
            jQuery(function(){
                jQuery("#fname").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please enter the first name"
                });
				
				 jQuery("#lname").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please enter the last name"
                });
				
                jQuery("#phone").validate({
                    expression: "if (!isNaN(VAL) && VAL) return true; else return false;",
                    message: "Please enter the phone number"
                });
				
				jQuery("#address").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please enter the address"
                });
                jQuery("#ValidInteger").validate({
                    expression: "if (VAL.match(/^[0-9]*$/) && VAL) return true; else return false;",
                    message: "Please enter a valid integer"
                });
                jQuery("#Date").validate({
                    expression: "if (!isValidDate(parseInt(VAL.split('-')[2]), parseInt(VAL.split('-')[0]), parseInt(VAL.split('-')[1]))) return false; else return true;",
                    message: "Please enter a valid Date"
                });
                jQuery("#email").validate({
                    expression: "if (VAL.match(/^[^\\W][a-zA-Z0-9\\_\\-\\.]+([a-zA-Z0-9\\_\\-\\.]+)*\\@[a-zA-Z0-9_]+(\\.[a-zA-Z0-9_]+)*\\.[a-zA-Z]{2,4}$/)) return true; else return false;",
                    message: "Please enter a valid Email ID"
                });
                jQuery("#password").validate({
                    expression: "if ( VAL) return true; else return false;",
                    message: "Please enter the Password "
                });
				
				 jQuery("#password").validate({
                    expression: "if (VAL.length > 8 && VAL) return true; else return false;",
                    message: "Password is too short"
                });
                jQuery("#c_password").validate({
                    expression: "if ((VAL == jQuery('#password').val())) return true; else return false;",
                    message: "Confirm password field doesn't match the password field"
                });
                jQuery("#ValidSelection").validate({
                    expression: "if (VAL != '0') return true; else return false;",
                    message: "Please make a selection"
                });
                jQuery("#ValidMultiSelection").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please make a selection"
                });
                jQuery("#ValidRadio").validate({
                    expression: "if (isChecked(SelfID)) return true; else return false;",
                    message: "Please select a radio button"
                });
                jQuery("#ValidCheckbox").validate({
                    expression: "if (isChecked(SelfID)) return true; else return false;",
                    message: "Please check atleast one checkbox"
                });
				jQuery('.AdvancedForm').validated(function(){
					alert("Use this call to make AJAX submissions.");
				});
            });
            /* ]]> */
        </script>
		
		<script>
        	 function getvalue(ss){
           // alert(ss)
            if (ss.length == 0) 
			{ 
         	   document.getElementById("status1").innerHTML = "";
           		 return;
            } 
			else
			 {
          		  var xmlhttp = new XMLHttpRequest();
           		 xmlhttp.onreadystatechange = function()
				  {
          			  if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
					  {
          				  document.getElementById("status1").innerHTML = xmlhttp.responseText;
         			   }
           					//alert(xmlhttp.responseText);
          				  };
          					  xmlhttp.open('GET','checkmail.php?q='+ss,true);
            
        					    xmlhttp.send();
          			  }
            }
			
			
			function emailvalid(str)
		{
		    var xmlhttp=new XMLHttpRequest();
			xmlhttp.onreadystatechange=function() {
			if (xmlhttp.readyState==4 && xmlhttp.status==200) {
			//alert(xmlhttp.responseText);
			if(xmlhttp.responseText>=1)
			{
			
			document.getElementById("email").value="";
			document.getElementById("emailFailMsg").innerHTML= "Email already exists ";
			document.getElementById("emailFailMsg1").style.display="block";
			}
			else
			{
			
			document.getElementById("email").value=str;
			document.getElementById("emailFailMsg").innerHTML="";
			document.getElementById("emailFailMsg1").style.display="none";
			}
			}
			}
		//alert("working");
		   xmlhttp.open("GET","checkemail2.php?q="+str,true);
		///alert("working");
		   xmlhttp.send();
		
	  }
	 
			 </script>
			 
			 <script>
			 
			 $(document).ready(function(){
    $(".name").keypress(function(event){
        var inputValue = event.charCode;
        if(!(inputValue >= 65 && inputValue <= 120) && (inputValue != 32 && inputValue != 0)){
            event.preventDefault();
        }
    });
});



</script>
	
	<link rel="stylesheet" type="text/css" href="plugins/jquery-form-validate/stylesheets/jquery.validate.css" />
        <link rel="stylesheet" type="text/css" href="plugins/jquery-form-validate/stylesheets/style.css" />


<div class="inner-banner">
	<h2>CREATE AN ACCOUNT</h2>
    <p>Why Sign Up? It only takes a couple of minutes to create your free account.</p>
</div>
<div style="background:url(images/banner-border_03.png) repeat-x; padding:4px 0px; margin-top:1px"></div>
<div class="login-form">
<form method="post">
<?php echo $_SESSION['phone_number'];?>
	<div class="mid_wrap">
    	<div class="create-acc">
    		<input type="text" class="name" id="textbox" name="fname" placeholder="First Name" />
			<input type="text" class="name" id="textbox1" name="lname" placeholder="Last Name" />
            <input type="text" class="email1" id="email" name="email" placeholder="Email" onchange="return emailvalid(this.value);" />
			<div id="emailFailMsg" style="font-size:12px;color:red;"  ></div>
			
            <input type="text" class="phone" id="phone" name="phone" placeholder="Phone Number" />
			 <input type="text" class="phone" id="address" name="address" placeholder="Address" />
            <input type="password" class="password" id="password" name="password" placeholder="Password" />
            <input type="password" class="c_password"  id="c_password" placeholder="Confirm Password" />
            <input type="submit" class="log1" name="submit" value="REGISTER" />
            
        </div>
        
    </div>
	

	
	
	
	</form>
</div>

<?php include("includes/footer.php");?>
