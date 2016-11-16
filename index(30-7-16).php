<?php include("includes/header.php");
$categorydetails=$frontend_obj->getAllCategory();
include("includes/menu.php");
if($_POST['submit']=='Subscribe'){
	$subscribe=$user_obj->insertSubscriber($_POST);
	}
	$banners=$frontend_obj->getBanner();getBanner
?>
<div class="banner">
	<!--<img src="images/banner.png" />-->
	<img src="administrator/uploads/homeimg/<?php echo $banners->image_name;?>">
</div>
<div style="background:url(images/banner-border_03.png) repeat-x; padding:4px 0px; margin-top:1px"></div>
<div class="case">
	<div class="mid_wrap">
    	<ul>
			<?php foreach($categorydetails as $category){ ?>
        	<li>
			
            	<!--<img src="images/case_03.png" />-->
				<img src="administrator/uploads/homeimg/<?php echo $category->image;?>">
                <h3><?php echo $category->name;?></h3>
                <h2>216 CASE</h2>
                <p><?php echo $category->description1;?></p>
                <p><?php echo $category->description2;?></p>
                <p class="last"><?php echo $category->description3;?></p>
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
        <p>It's Krpano visual editor and I don't have to play with coding. I just upload my panorama and make settings. It saves a lot of time and it's easy for people who are not easy with coding. Sharing is also pretty simple.</p>
        <h6>EMAD-UD-DIN BUTT</h6>
        <img src="images/slider_07.png" />
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
        <input type="text" name="email" class="subs" placeholder="Enter your Email"/><input type="submit"  name="submit" class="scribe" value="Subscribe"/>
		</form>
    </div>
</div>


<?php include("includes/footer.php");?>