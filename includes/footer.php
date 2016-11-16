<?php 
$footertabs=$frontend_obj->getAllfootertabs();
?>

<div class="quick">
	<div class="mid_wrap">
    	<div class="f-link">   
        	<ul>
			
            	
              <li><a href="dashboard6.php?cid=2">Govt Offices</a></li>
                <li><a href="dashboard6.php?cid=3">Private Companies</a></li>
                <li><a href="dashboard6.php?cid=4">Police Station</a></li>
                <li><a href="news.php">News</a></li>
                <li><a href="dashboard6.php?cid=7">Get Legal Expert</a></li>
				
                 <div class="clear_fix"></div>
            </ul>
        </div>
    </div>
</div>



<div class="social-blog">
	<div class="mid_wrap">
    	<a href="https://accounts.google.com"><img src="images/work_10.png" /></a>
        <a href="https://www.facebook.com/" target="_blank"><img src="images/work_12.png" /></a>
        <a href="https://twitter.com/" target="_blank"><img src="images/work_14.png" /></a>
        <a href="https://plus.google.com/"><img src="images/work_16.png" /></a>
        <a href="https://www.linkedin.com/" target="_blank"><img src="images/work_18.png" /></a>
        <a href="https://www.youtube.com/" target="_blank"><img src="images/work_20.png" /></a>
        <a href="https://www.instagram.com/"  target="_blank"><img src="images/work_22.png" /></a>
        <a href="https://vimeo.com/"><img src="images/work_24.png" /></a>
        <a href="https://www.pinterest.com/" target="_blank"><img src="images/work_26.png" /></a>
        <a href="http://www.stumbleupon.com/"><img src="images/work_28.png" /></a>
        <a href="http://digg.com/"><img src="images/work_30.png" /></a>
        <a href="https://www.reddit.com/"  target="_blank"><img src="images/work_32.png" /></a>
		 <a href="#"  target="_blank"><label for="modal-55" style="cursor:pointer;" ><img src="images/dd50.jpg" style="height:57px" /></label></a>
        
    </div>
</div>


<div class="account">
	<div class="mid_wrap">
    	<h2>SHARE IT OR SELL IT, GET PAID ANYWAY</h2>
        <p>Buy and sell the world’s most valuable commodity - information</p>
		<?php if ($_SESSION['id']=='') { ?>
        <input type="submit" class="add" value="Create an Account" onclick="location.href='registration.php'"/><br />
		
        <input type="submit" class="signin" value="Signin with us" onclick="location.href='login.php'"/>
        <?php } ?>
		
    </div>
</div>



<div class="footer">
	<div class="mid_wrap">
    	<p> <a href="index.php">Home</a>  |  <a href="description.php?id=5">About Us</a>  |  <a href="#">How It Works</a>  |  <a href="video.php">Videos</a>  |  <a href="rank.php">Reports Ranking</a> | <a href="#"><label for="modal-55" style="cursor:pointer;" >Donate</label></a>  | <a href="contactus1.php"> Contact us</a></p>
	<div class="copy">
    	<p>© 2016 Dynamic Database. All Rights Reserved | <a href="contentpages.php?id=2">Privacy Policy</a> | <a href="contentpages.php?id=3">Terms and Conditions</a></p>
    </div>

    </div>
</div>


<?php 

$countrylist=$frontend_obj->getAllCountry();

?>

<input class="modal-state" id="modal-55" type="checkbox" />
<div class="modal" style="z-index:999; overflow:hidden;" >
  <label class="modal__bg" for="modal-0"></label>
  <div class="modal__inner55" >
    <label class="modal__close" for="modal-55"></label>
    <h2>DONATION AMOUNT</h2>
<form  name="form1" method="post" enctype="multipart/form-data">   
<div class="full_wrapper formwrap55">

<h3>YOUR DETAILS</h3>
 
	
<div style="margin-top:7px;">
 <input type="text" name="vtitle"   placeholder="Enter Full Name" required="required"   />
</div>

<div style="margin-top:7px;">
 <input type="text" name="email"   placeholder="Enter Email" required="required"   />
</div>

<div style="margin-top:7px;">
<input type="text" name="address"   placeholder="Enter Address" required="required" style="width:49%"   />
<input type="text" name="zipcode"   placeholder="Enter Zipcode" required="required" style="width:50%"   />
</div>

<div style="margin-top:7px;">
<input type="text" name="city"   placeholder="Enter City" required="required"  style="width:49%"  />
<select class="category" id="category1" name="country" onchange="nag(this.value);" style="width:50%"  >	
	<option value="0">Select County</option>
	<?php foreach($countrylist as $country){ ?>
	
	<option value="<?php echo $country->id;?>" ><?php echo $country->country_name;?></option>
	<?php } ?>
	
	
	</select>
</div>

<div style="margin-top:7px;">
<span>$</span>
<input type="text" name="amount"   placeholder="Enter Amount" required="required" style="width:49%"   />

</div>

<span id="paypal55">Or pay via paypal</span><img src='images/paypal.png' style="height:30;width:60">


<br/>
<input type="submit"  name="submit"  value="Donate"/>

	 
 </div>
</div>
   </form>
  </div>


</body>
</html>