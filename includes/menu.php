<?php 

if($_SESSION['price']==''){
echo 'Hi';
}
if($_POST['submit']=='Donate'){
//print_r($_POST);exit;
$paypal = $user_obj->donatenowwithpayapl($_POST);

}

if($_POST['cat_submit']=="Submit"){

} ?>

<script>
function myFunction()
{
	var id = document.getElementById("select_names").value;
	alert(id);
}
</script>
	


<style>
.modal__inner55 label{
/*display: block;*/
    font-size: 15px;
    font-weight: normal;
    background: #3b7840;
    color: #fff;
    padding: 10px;
    text-align: center;
    text-shadow: 1px 1px 1px rgba(0,0,0,0.4);
    border-radius: 5px;
    cursor: pointer;
    -webkit-transition: all 0.1s ease-out;
    transition: all 0.1s ease-out;
}

#others{
	font-size: 15px;
    line-height: 1;
    border: 2px solid #3b7840;
    padding: 0.55em 0.55em 0.55em 0.8em;
    color: #3b7840;
    border-radius: 5px;
	
}

.modal__inner55 .doante_amt input[type=radio] {
    opacity: 0;
    position: absolute;
    top: 0;
    left: 0;
	width: auto;
    margin-right: 0.3em;
}

.modal__inner55 .doante_amt :checked+label {
    background: #e9bd1d;
    color: #171303;
    text-shadow: none;
}
	</style>


<!--<link rel="stylesheet" type="text/css" href="css/demo.css"/>-->
<link rel="stylesheet" type="text/css" href="css/easydropdown.css"/>
<script src="js/jquery.easydropdown.js"></script>
<div class="menu">
	<div class="mid_wrap">
    	<div class="menu-left">
        	<div class="nav">
            	<div class="menu_trigger"><!--menu_trigger-->
        			<img src="images/nav_icon.png" alt="">
        		</div><!--menu_trigger-->
            	<?php $tt="select * from tb_submenu where status='active'";
				//$rr=mysql_query($tt);
				$ee=$callConfig->getALLRows($tt);
				//print_r($ee);
				
				
		$whatdetails=$frontend_obj->GetAllWhatwedo();
		$involvedetails=$frontend_obj->GetAllinvolved();
				
				?>
                
                <ul>
                	<li class="submenu1"><a href="index.php">HOME</a></li>
            		<li class="submenu2"><a href="#">ABOUT US<span><img src="images/down-arrow_03.png"></span></a>
             			<ul>
                  <?php foreach($ee as $ee1 ){?>      
                         <li><a href="description.php?id=<?php echo $ee1->id;?>"><?php echo $ee1->title;?></a></li>
                           <?php /*?> <li><a href="description.php">Description</a></li>
                            <li><a href="appform.php">Common Application Form</a></li>
                            <li><a href="certification.php">Self Certification</a></li>
                            <li><a href="panchayat.php">Grama Panchayat NOC</a></li><?php */?>
                            <?php }?>
              			</ul>
           			</li>
	<!--	<li class="submenu3"><a href="contentpages.php?id=1" >WHAT WE DO</a></li>	-->
			<li class="submenu3"><a href="#">WHAT WE DO<span><img src="images/down-arrow_03.png"></span></a>
			<ul>
			<?php foreach ($whatdetails as $what){ ?>
			<li><a href="whatwedo.php?id=<?php echo $what->id;?>"><?php echo $what->title;?></a></li>
			<?php } ?>
				<!--<li><a href="#">How to get involved</a></li>
                <li><a href="#">Report Corruption</a></li>
                <li><a href="#">Stay Informed</a></li>
				<li><a href="#">Unmask the Corrupt compaign</a></li>
				<li><a href="#">Competitions</a></li>-->
				
			</ul>	
		</li>
        <li class="submenu4"><a href="#" ><label for="modal-en">REPORTS AND DATA</label></a></li>
        <li class="submenu5"> <?php /*?> <?php if($_SESSION['id']!==''){?>
        <a href="complaint.php">SUBMIT COMPLAINT</a>
        <?php }else {?> 
         <a href="login.php?msg=Login to submit complaint">SUBMIT COMPLAINT</a>
         <?php } ?></li><?php */?> <a href="complaint.php">SUBMIT COMPLAINT</a>
       <li class="submenu6"><a href="#">GET INVOLVED<span><img src="images/down-arrow_03.png"></span></a>
			<ul>
			<?php foreach ($involvedetails as $involve){ ?>
			<li><a href="getinvolved.php?id=<?php echo $involve->id;?>"><?php echo $involve->title;?></a></li>
		
				<!--<li><a href="#">How to get involved</a></li>
                <li><a href="#">Report Corruption</a></li>
                <li><a href="#">Stay Informed</a></li>
				<li><a href="#">Unmask the Corrupt compaign</a></li>
				<li><a href="#">Competitions</a></li>
				<li><a href="#">Anti-Corruption Award</a></li>
				<li><a href="#">More ways to join us</a></li>-->
			<?php } ?>
				<li><a href="#"><label for="modal-55" style="cursor:pointer;" >Donate now</label></a></li>
			</ul>	
		</li>
        <li class="submenu7"><a href="news.php">NEWS<!--<span><img src="images/down-arrow_03.png" /></span>--></a></li>
       <!--<li class="submenu6"><a href="#">WHAT WE DO<!--<span><img src="images/down-arrow_03.png" /></span>--></a>
                		<!--<ul>
                            <li><a href="#">Description</a></li>
                            <li><a href="#">Common Application Form</a></li>
                            <li><a href="#">Self Certification</a></li>
                            <li><a href="#">Grama Panchayat NOC</a></li>
                    	</ul>	
                	</li>-->
            		<li class="submenu8"><a href="rank.php">RANKING</a></li>
                	<li class="submenu9"><a href="video.php">VIDEOS</a></li>
            		<div class="clear_fix"></div>
            	</ul>
        	</div>
        </div>
		
<script type="text/javascript" src="js/script1.js"></script>

<?php if(isset($_POST['mainsearch'])){
//print_r($_POST);exit;

header("location:".SITEURL."/viewcomplaints.php?title=".$_POST['keyword']." " );

/* $sql="SELECT `title` FROM `tb_complaints` WHERE `title` LIKE '%".$_POST['keyword']."%' LIMIT 0 , 30";
$qq = mysql_query($sql);
$fetch = mysql_fetch_array($qq);*/

}

?>




		
        <div class="menu-right">
	 <form name="searchtype" id="searchtype" method="post">	
		
		<input type="text" placeholder="Search..." id="search_id" class="ser-text" name="keyword"/>
		<input type="submit" value="" name="mainsearch" id="search" class="search"/>
		
		<!--<input type="text" placeholder="Search..." id="search_id" onkeyup="autocomplet()" name="keyword" value="<?php if($_GET['keyword']!=''){echo $_GET['keyword']; } ?>" onchange="return searhkeyword(this.value);" class="ser-text"/>
                <ul id="search_list_id"></ul>
   				<input type="submit" value="" name="mainsearch" id="search" class="search"/>-->
		</form>
        	<!--<input type="text" class="ser-text" placeholder="Search..." /> <button class="search"></button>-->
        </div>
		
        <div class="clear_fix"></div>
		
    </div>
</div>


<input class="modal-state" id="modal-en" type="checkbox" />
<div class="modal" style="z-index:11;">
  <label class="modal__bg" for="modal-en"></label>
  <div class="modal__inner" style="height:50%;">
    <label class="modal__close" for="modal-en"></label>
   
<form  name="form1" method="post" enctype="multipart/form-data" onsubmit="myFunction()">   
<h1>Select A Category</h1>
<?php /*?><select class="dropdown2" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
	<option value='0'>Select A Category</option>
	<option value='viewcomplaints.php?id=1&msg=roads'>Roads</option>
	<option value='viewcomplaints.php?id=2&msg=govt offices'>Govt Offices</option>
	<option value='viewcomplaints.php?id=3&msg=Private Companies'>Private Companies</option>
	<option value='viewcomplaints.php?id=4&msg=Police Stations'>Police Stations</option>

	
	<option value='viewcomplaints.php?id=5&msg=Fraud'>Fraud</option>
	<option value='viewcomplaints.php?id=6&msg=News'>News</option>
	
	<!--<option value='viewcomplaints.php?id=7&Get Legal Expert'>Get Legal Expert</option>-->
<select><?php */?>

<select class="dropdown2" name="select_names" id="select_names">

	<option value="0" >Select A Category</option>
    <?php $categorylist=$frontend_obj->getAllCategories();
	
	
	foreach($categorylist as $categories){
		if($categories->id!=7){
			?>
    
	
    <option value="<?php echo $categories->id;?>&<?php echo $categories->name;?>" ><?php echo $categories->name;?></option>
    <?php } }?>
	
</select>

<input type="text" class="cat_dates" placeholder="Enter From Date"  name="fromdate" id="fromdate"  /><br />

	<input type="text" class="cat_dates" placeholder="Enter To Date"   name="todate" id="todate" ><br />
    
    <input type="submit"  name="cat_submit"  value="Submit" />
</form>
</div>
</div>


<?php 

$countrylist=$frontend_obj->getAllCountry();

?>

<input class="modal-state" id="modal-55" type="checkbox" />
<div class="modal" style="z-index:999; overflow:hidden;" >
  <label class="modal__bg" for="modal-0"></label>
  <div class="modal__inner55">
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

<div  class="donate_amt" style="margin-top:7px;margin-bottom:10px">
<p>Select An Amount</p>
<input type="radio" id="donate-amount-1" name="donate_amount" class="donate_amount" value="$1000">
<label for="donate-amount-1" data-amount="25" >$1000</label>
<input type="radio" id="donate-amount-2" name="donate_amount" class="donate_amount" value="$2000">
<label for="donate-amount-2" data-amount="25" >$2000</label>
<input type="radio" id="donate-amount-3" name="donate_amount" class="donate_amount" value="$2500">
<label for="donate-amount-3" data-amount="25" >$2500</label>
<input type="radio" id="donate-amount-4" name="donate_amount" class="donate_amount" value="$3000">
<label for="donate-amount-4" data-amount="25" >$3000</label>
<input type="radio" id="others22" name="donate_amount" class="donate_amount"  value="others">
<label for="others22" id= "others">Others</label>

<div id="amt_details" style="display:none">
<span>$</span>
<input type="text" name="donate_amount20"   placeholder="Enter Amount" style="width:47.2%;margin-top:30px" />
</div>

</div>

<!----payment method---->
<div  style="margin-top:7px;">

 <h5>Please Select Any one Payment Method to proceed</h5><br />
        	<ul class="paymentcardslis">
                              <li>
                             
                               
                                <div class="carvalue radio_btn">  
                                <span ><input type="radio" name="pay" id="card_n" value="card_n"  class="paymentradio" onclick="card_1()" autofocus/></span>  Credit Card
                                 <span><a href="#"><img src="images/paymentcards_03.png" alt="" /></a> <a href="#"><img src="images/paymentcards_05.png" alt="" /></a> <a href="#"><img src="images/paymentcards_07.png" alt="" /></a> <a href="#"><img src="images/paymentcards_09.png" alt="" /></a></span>
                                </div>
                                <div id="card_1" style="display:none;">
                               
                               <ul class="nameanadrenewlis" style="" >
                              
                                    <li>
                                    <div class="typflef">
                                    Credit Card Type
                                    <font color="#e20808">*</font>
                                   <select name="card_type" id="card_type" style="width:30%;margin-left:35px;">
                                <option value="0"> Select Card Type </option>
                                 <option value="American Express">American Express</option>
                                 <option value="VISA">Visa</option>
                                 <option value="MasterCard">Master Card</option>
                                 <option value="Discover">Discover</option>
                                 </select>
                                    </div>
                                    <div class="typfright">
                                   Credit Card Number
                                    <font color="#e20808"> *</font>
                                    <input type="text" name="card_num" pattern="[0-9]*" id="card_num"  style="width:70%;margin-left:14px;" />
                                    </div>
                                    <div class="clear_fix"></div>
                                    </li>
                                    
                                     <li>
                                    <div class="typflef">
                                    Expire Month 
                                    <font color="#e20808">*</font>
                                   <select name="card_month" id="card_month" style="width:30%;margin-left:56px;">
                                <option value="0"> Select Month </option>
                                 <option value="01">January</option>
                                 <option value="02">February</option>
                                 <option value="03">March</option>
                                 <option value="04">April</option>
                                 <option value="05">May</option>
                                 <option value="06">June</option>
                                 <option value="07">July</option>
                                 <option value="08">August</option>
                                 <option value="09">September</option>
                                 <option value="10">October</option>
                                 <option value="11">November</option>
                                 <option value="12">December</option>
                                 </select>
                                    </div>
                                    <div class="typfright">
                                  Expire Year
                                    <font color="#e20808">*</font>
                                   <select name="card_year" id="card_year" style="width:30%;margin-left:70px;">
                                <option value="0"> Select Year </option>
                                <?php for($i=2015;$i<=2030;$i++){ ?>
                                <option value="<?php echo $i;  ?>"><?php echo $i;  ?></option>
                                 <?php  } ?>
                                 <!-- <option value="15">2015</option>
                                 <option value="16">2016</option>
                                 <option value="17">2017</option>
                                 <option value="18">2018</option>-->
                                 </select>
                                    </div>
                                    <div class="clear_fix"></div>
                                    </li>
                                    
                                     <li>
                                    <div class="typflef">
                                    CVV
                                    <font color="#e20808">*</font>
                                   <input type="text" name="card_cvv" pattern="[0-9]*" id="card_cvv" style="width:30%;margin-left:112px;"  />
                                     
                                    </div>
                                    <div class="typfright">
                               
                                    
                                    </div>
                                    <div class="clear_fix"></div>
                                    </li>
                                    
                               </ul>
                               
                               
                               </div>
                               <div class="clear_fix"></div>
                              </li>
                              <br />
                              
                              <li>
                                <div class="carvalue">  
                                 <input type="radio" class="paymentradio" name="pay" id="pay" value="pay_p" onclick="paid1()" />
                                PayPal   <a href="#"> What is PayPal? </a>
                                </div>
                               <div class="clear_fix"></div>
                               <div id="paid" style="display:none;">
                               <p style=" margin-left:20px; font-weight:bold;"> You Will be Redirected to Paypal</p>
                               </div>
                              </li>
                  </ul>

</div>
<!---end of payment------->




<br/>

<input type="submit"  name="submit"  value="Donate" onClick="return ValidateForm(this.form);"/>


	 
 </div>
</div>
   </form>
  </div>


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

.modal__inner55 {
  transition: top .25s ease;
  position: absolute;
  top: -20%;
  right: 0;
  bottom: 0;
  left: 0;
  width: 30%;
  margin: auto;
  overflow:hidden;
  background: #fff;
 
  padding: 1em 2em;
  height: 70%;
  width:55%;
  overflow:scroll;
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

.dropdown2{
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

	 
<script LANGUAGE="JavaScript">
function ValidateForm(form){
	
ErrorText= "";
if ( ( form.pay[0].checked == false ) && ( form.pay[1].checked == false ) ) 
{
alert ( "Please choose Payment Type" ); 
//document.payment.pay[0].focus();
document.getElementById('card_n').focus();  
return false;
}



}
</script>

<script type="text/javascript">
 function paid1()
{
document.getElementById("paid").style.display="block";
document.getElementById("card_1").style.display="None";
document.getElementById("purch").style.display="None";
document.getElementById("laat").style.display="None";
}
 
 
 function card_1()
{ //alert('fgx');
document.getElementById("card_1").style.display="block";
document.getElementById("paid").style.display="None";
document.getElementById("purch").style.display="None";
document.getElementById("laat").style.display="None";
}

function others()
{
document.getElementById("amt_details").style.display="block";

}

function hide_amt()
{
	
	
    if (document.getElementByClassName('donate_amount').checked) {
        document.getElementById('amt_details').style.display = 'None';
    }
   

}



</script>

<script>
$("input[name='donate_amount']").click(function () {
    $('#amt_details').css('display', ($(this).val() === 'others') ? 'block':'none');
});
</script>
	 

<!-- -->
<!--<link rel="stylesheet" href="css/modal.css">
 <script src="js/modal.js" charset="utf-8"></script>
    <script src="js/app.js" charset="utf-8"></script>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">-->