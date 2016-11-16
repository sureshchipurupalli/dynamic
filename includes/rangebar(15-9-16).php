<div class="container">

<div class="barChart">


        <div class="barChart__row" data-value="<?php echo $roadcount;?>">
		
            <span class="barChart__value"><?php echo $roadcount;?></span>
		
           <a href="rankinner.php?id=1&msg=roads">
         <span class="barChart__bar"><span class="barChart__barFill"></span></span></a>
        </div>
		
			<div class="barChart__row" data-value="<?php echo $officecount;?>">
         
            <span class="barChart__value"><?php echo $officecount;?></span>
			<a href="rankinner.php?id=2&msg=govt offices">
            <span class="barChart__bar"><span class="barChart__barFill"></span></span></a>
			
			</div>
			
        <div class="barChart__row" data-value="<?php echo $companiescount;?>">
        
            <span class="barChart__value"><?php echo $companiescount;?></span>
			<a href="rankinner.php?id=3&msg=Private Companies">
            <span class="barChart__bar"><span class="barChart__barFill"></span></span></a>
        </div>
		
        <div class="barChart__row" data-value="<?php echo $policecount;?>">
      
            <span class="barChart__value"><?php echo $policecount;?></span>
				<a href="rankinner.php?id=4&msg=Police Stations">
            <span class="barChart__bar"><span class="barChart__barFill"></span></span></a>
        </div>
		
        <div class="barChart__row" data-value="<?php echo $newscount;?>">
      
            <span class="barChart__value"><?php echo $newscount;?></span>
				<a href="rankinner.php?id=6&msg=News">
            <span class="barChart__bar"><span class="barChart__barFill"></span></span></a>
        </div>
		
        <div class="barChart__row" data-value="<?php echo $fraudcount;?>">
      
            <span class="barChart__value"><?php echo $fraudcount;?></span>
			<a href="rankinner.php?id=5&msg=Fraud">
            <span class="barChart__bar"><span class="barChart__barFill"></span></span></a>
        </div>
    </div>
<script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="js/jquery.barChart.js"></script>
<script>
 jQuery('.barChart').barChart({easing: 'easeOutQuart'});
</script>
</div>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
