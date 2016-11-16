<?php

class sitesettingsClass

{

 function recentActivities($matter,$type,$admintype)

 {

 	global $callConfig;

	$fieldnames=array('matter'=>$matter,'date_time'=>STR_TO_TIME,'type'=>$type,'admintype'=>$admintype);

	//print_r($fieldnames); exit;

	$res=$callConfig->insertRecord(TPREFIX.TBL_RECENTACTIVITIES,$fieldnames);

	$query=$callConfig->selectQuery(TPREFIX.TBL_RECENTACTIVITIES,'id','','id desc','25','100000000');

	$res=$callConfig->getAllRows($query);

	foreach($res as $r)

	{

	 $callConfig->deleteRecord(TPREFIX.TBL_RECENTACTIVITIES,'id',$r->id);

	}

 }

 function gettenrecentActivitiesList($limit)

 {

 	global $callConfig;

	$query=$callConfig->selectQuery(TPREFIX.TBL_RECENTACTIVITIES,'*','','id DESC','',$limit);

	return $callConfig->getAllRows($query);

 }

 function lastlogin()

 {

	global $callConfig;

	$query="UPDATE ".TPREFIX.TBL_ADMIN." SET lastlogin='".strtotime(date("Y-m-d H:i:s"))."' where user_id='".$_SESSION['userid']."'";

	$callConfig->executeQuery($query);

 }

  function sitesettings($post)

  {
	  //print_r($post);exit;

	global $callConfig; 

    //$logobanner = $callConfig->freeimageUploadcomncode('site_image','logo',"../uploads/sitesettings/","../uploads/sitesettings/thumbs/",$post['profile'],185,51); 
	$eventimage = $callConfig->freeimageUploadcomncode("logo",'profile',"../uploads/sitesettings/","../uploads/sitesettings/thumbs/",$post['hdn_image'],'','');
	
	
	
	
if(isset($_FILES['profile']))
{
	$file_name = $_FILES['profile']['name'];
	$file_size =$_FILES['profile']['size'];
	$file_tmp =$_FILES['profile']['tmp_name'];
	$file_type=$_FILES['profile']['type'];

}      
$extensions = array("jpeg","jpg","png");      

$file_ext=explode('.',$_FILES['image']['name'])	;
$file_ext=end($file_ext);     
$file_ext=strtolower(end(explode('.',$_FILES['profile']['name'])));  
//$upload=move_uploaded_file($file_tmp,"uploads/sitesettings/".$file_name);

	 //$logobannerfront = $callConfig->freeimageUploadcomncode('logo','front_logo',"../uploads/sitesettings/","../uploads/sitesettings/thumbs/",$post['hdn_image'],185,51);

	//echo $eventimage; exit;

	$fieldnames=array('title'=>mysql_real_escape_string($post['title']),
	'site_image'=>$eventimage,
	'address'=>$post['address'],
	'fax'=>$post['fax'],
	'footer_txt'=>mysql_real_escape_string($post['footer_txt']),
	'mail_fromname'=>$post['mail_fromname'],
	'mail_frommail'=>$post['mail_frommail'],
	'contactusmail'=>$post['contactusmail'],
	'phone'=>$post['phone'],
	'facebook_link'=>$post['facebook_link'],
	'twitter_link'=>$post['twitter_link'],
	'linkedin'=>$post['linkedin'],
	'youtube'=>$post['youtube'],
	'googleplus'=>$post['googleplus']);

 // print_r($fieldnames); exit;
 //echo $file_name ;exit;
	//var_dump($_FILES); exit;;
	  $res=$callConfig->updateRecord(TPREFIX.TBL_SITESETTINGS,$fieldnames); //exit;

	if($res!='')

	{

		sitesettingsClass::recentActivities('Site settings updated successfully on >> '.DATE_TIME_FORMAT.'','g');

		$callConfig->headerRedirect("index.php?option=com_sitesettings&err=Site settings updated successfully");

	}

	else

	{

		sitesettingsClass::recentActivities('Site settings updation failed on >> '.DATE_TIME_FORMAT.'','e');

		$callConfig->headerRedirect("index.php?option=com_sitesettings&ferr=Site settings updation failed");

	}

  }

  function getsitesettings()

  {

	global $callConfig;

	$query=$callConfig->selectQuery(TPREFIX.TBL_SITESETTINGS,'*','','','','');
	 


	return $callConfig->getRow($query);
	
	//echo($query);

  }

   function getTotalDatabaseTables()

  {

	global $callConfig;

	$query="SHOW TABLES";

	return $callConfig->getAllRows($query);

  }

  function updatejobdisplay_days()

  {

	  global $callConfig;

	  $fields=array('no_days'=>$_POST['no_days']);

	  $res=$callConfig->updateRecord(TPREFIX.TBL_SITESETTINGS,$fields,'','');

	  if($res>0)

	  {

		  $q="select * from tb_sitesettings where id=1";

		  $rr=$callConfig->getRow($q);

		  $no_days=$rr->no_days;

		  $q12="select * from tb_jobs";

		  $res12=$callConfig->getAllRows($q12);

		  foreach($res12 as $r1)

		  {

			  $date=$r1->startdate;

			  $stadate=date("Y-m-d",strtotime($date));

			  $exdate=date('Y-m-d', strtotime($stadate . " +".$no_days." days"));

			  $fields=array('expiry_date'=>$exdate);

			  $res=$callConfig->updateRecord(TPREFIX.TBL_JOBS,$fields,'id',$r1->id);	

		  }

		  $callConfig->headerRedirect("index.php?option=com_add_jobdisplaydays&ferr=Displaying no. of days updation success");

	  }

	  else

	  {

		  $callConfig->headerRedirect("index.php?option=com_add_jobdisplaydays&ferr=Displaying no. of days updation fail");

	  }



  }

  

  

}

?>