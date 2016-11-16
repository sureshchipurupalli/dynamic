<div class="menu">
	<div class="mid_wrap">
    	<div class="menu-left">
        	<div class="nav">
            	<div class="menu_trigger"><!--menu_trigger-->
        			<img src="images/nav_icon.png" alt="">
        		</div><!--menu_trigger-->
            	<ul>
                	<li class="submenu1"><a href="index.php">HOME</a></li>
            		<li class="submenu2"><a href="#">ABOUT US<span><img src="images/down-arrow_03.png"></span></a>
             			<ul>
                            <li><a href="description.php">Description</a></li>
                            <li><a href="appform.php">Common Application Form</a></li>
                            <li><a href="certification.php">Self Certification</a></li>
                            <li><a href="panchayat.php">Grama Panchayat NOC</a></li>
                            
              			</ul>
           			</li>
		<li class="submenu3"><a href="#" >WHAT WE DO</a></li>			
        <li class="submenu4"><a href="#" ><label for="modal-en">REPORTS AND DATA</label></a></li>
        <li class="submenu5"><a href="complaint.php">SUBMIT COMPLAINT</a></li>
        <li class="submenu6"><a href="#">DONATE</a></li>
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
                	<li class="submenu9"><a href="video.php">VIDEO</a></li>
            		<div class="clear_fix"></div>
            	</ul>
        	</div>
        </div>
        <div class="menu-right">
        	<input type="text" class="ser-text" placeholder="Search..." /> <button class="search"></button>
        </div>
        <div class="clear_fix"></div>
		
		
  
		
		
		
    </div>
</div>


<input class="modal-state" id="modal-en" type="checkbox" />
<div class="modal" style="z-index:11;">
  <label class="modal__bg" for="modal-en"></label>
  <div class="modal__inner" style="height:40%;">
    <label class="modal__close" for="modal-en"></label>
   
<form  name="form1" method="post" enctype="multipart/form-data">   
<h1>Select A Category</h1>
<select class="dropdown" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
	<option value='0'>Select a category</option>
	<option value='viewcomplaints.php?id=1&msg=roads'>Roads</option>
	<option value='viewcomplaints.php?id=2&msg=govt offices'>Govt Offices</option>
	<option value='viewcomplaints.php?id=5&msg=Fraud'>Fraud</option>
	<option value='viewcomplaints.php?id=6&msg=News'>News</option>
	<option value='viewcomplaints.php?id=3&msg=Private Companies'>private companies</option>
	<option value='viewcomplaints.php?id=4&msg=Police Stations'>Police Stations</option>
	<!--<option value='viewcomplaints.php?id=7&Get Legal Expert'>Get Legal Expert</option>-->
<select>
</form>
</div>
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

<!-- -->
<!--<link rel="stylesheet" href="css/modal.css">
 <script src="js/modal.js" charset="utf-8"></script>
    <script src="js/app.js" charset="utf-8"></script>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">-->