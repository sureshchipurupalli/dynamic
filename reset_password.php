<?php 

?>
<!DOCTYPE html>
<!--[if IE 8]> <html class="lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <title>Remodal example</title>
  <meta name="description" content="Remodal example">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../dist/remodal.css">
  <link rel="stylesheet" href="../dist/remodal-default-theme.css">
  <style>
    .remodal-bg.with-red-theme.remodal-is-opening,
    .remodal-bg.with-red-theme.remodal-is-opened {
      filter: none;
    }

    .remodal-overlay.with-red-theme {
      background-color: #f44336;
    }

    .remodal.with-red-theme {
      background: #fff;
    }
  </style>
</head>
<body>
<div class="remodal-bg">
  <a href="#modal">Modal №1</a><br>
  <a href="#modal2">Modal №2</a>
  <br><br>

  
  <br>
</div>

<div class="remodal" data-remodal-id="modal" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
  <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
  <div>
    <h2 id="modal1Title">Remodal</h2>
    
	<div class="resetpassword">
	<form method="post">
	 <input type="password" class="password" id="password" name="password" placeholder="Password" /><br><br>
     <input type="password" class="c_password"  id="c_password" placeholder="Confirm Password" />
	
  <br>
  <button data-remodal-action="cancel" class="remodal-cancel">Cancel</button>
 <!-- <button data-remodal-action="confirm" class="remodal-confirm">OK</button>-->
  <input type="submit" data-remodal-action="close" name="submit" id="close" class="remodal-confirm" value="submit">
  </div>
  </div>
</div>

<div data-remodal-id="modal2" role="dialog" aria-labelledby="modal2Title" aria-describedby="modal2Desc">
  <div>
    <h2 id="modal2Title">Another one window</h2>
    <p id="modal2Desc">
      Hello!
    </p>
  </div>
  <br>
  <button data-remodal-action="confirm" class="remodal-confirm">Hello!</button>
  
</div>

<!-- You can define the global options -->
<script>
  // window.REMODAL_GLOBALS = {
  //   NAMESPACE: 'remodal',
  //   DEFAULTS: {
  //     hashTracking: true,
  //     closeOnConfirm: true,
  //     closeOnCancel: true,
  //     closeOnEscape: true,
  //     closeOnOutsideClick: true,
  //     modifier: ''
  //   }
  // };
</script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>window.$ || document.write('<script src="../libs/jquery/dist/jquery.min.js"><\/script>')</script>
<script src="../dist/remodal.js"></script>

<!-- Events -->
<script>
  $(document).on('opening', '.remodal', function () {
    console.log('opening');
  });

  $(document).on('opened', '.remodal', function () {
    console.log('opened');
  });

  $(document).on('closing', '.remodal', function (e) {
    console.log('closing' + (e.reason ? ', reason: ' + e.reason : ''));
  });

  $(document).on('closed', '.remodal', function (e) {
    console.log('closed' + (e.reason ? ', reason: ' + e.reason : ''));
  });

  $(document).on('confirmation', '.remodal', function () {
    console.log('confirmation');
  });

  $(document).on('cancellation', '.remodal', function () {
    console.log('cancellation');
  });

//  Usage:
//  $(function() {
//
//    // In this case the initialization function returns the already created instance
//    var inst = $('[data-remodal-id=modal]').remodal();
//
//    inst.open();
//    inst.close();
//    inst.getState();
//    inst.destroy();
//  });

  //  The second way to initialize:
 
</script>



</body>
</html>
