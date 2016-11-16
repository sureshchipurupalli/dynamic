<?php

class videoClass

{

function insertVideo($post)

	{
		
		//print_r($_POST);exit;
	global $callConfig;

	$video = $callConfig->freeimageUploadcomncode('video','video',"../uploads/videos/","../uploads/videos/thumbs/",$post['hdn_image'],185,51); 

	
	$date=date_create($post['date']);
    $res=date_format($date,"Y-m-d");
	

	$fieldnames=array('video_name'=>$post['video_name'],'video'=>$video,'description'=>$post['description'],'status'=>'active','date_added'=>$res);
	$res=$callConfig->insertRecord(TPREFIX.TBL_VIDEOSDISPLAY,$fieldnames); 

	if($res!="")

	{

		//sitesettingsClass::recentActivities('Admin User created successfully on >> '.DATE_TIME_FORMAT.'','g',$_SESSION['roletype']);

		$callConfig->headerRedirect("index.php?option=com_videos&err=Video inserted successfully");

	}

	else

	{

		//sitesettingsClass::recentActivities('Aboutus creation failed on >> '.DATE_TIME_FORMAT.'','e',$_SESSION['roletype']);

		$callConfig->headerRedirect("index.php?option=com_videos&ferr=Video insertion failed");

	}

	}
	
		
function getallvideodata($sortfield,$order,$start,$limit)

  {

	global $callConfig;

	//if($sortfield!="" && $order!="") $order=$sortfield.' '.$order;
	//$whr="status='active'";

	$query=$callConfig->selectQuery(TPREFIX.TBL_VIDEOSDISPLAY,'*','','','','');

	return $callConfig->getAllRows($query);

  }
  
   function getVideodata($id)

  {

	global $callConfig;

	$query=$callConfig->selectQuery(TPREFIX.TBL_VIDEOSDISPLAY,'*','id='.$id,'','','');

	return $callConfig->getRow($query);

  }
  
  
  function updateVideo($post,$id)
	
	{
	
	//print_r($post);exit;
		global $callConfig;
	
		$video = $callConfig->freeimageUploadcomncode('video','video',"../uploads/videos/","../uploads/videos/thumbs/",$post['hdn_image'],185,51); 

	
	$date=date_create($post['date']);
    $res=date_format($date,"Y-m-d");
	

	$fieldnames=array('video_name'=>$post['video_name'],'video'=>$video,'description'=>$post['description'],'status'=>'active','date_added'=>$res);
	
	
		$res=$callConfig->updateRecord(TPREFIX.TBL_VIDEOSDISPLAY,$fieldnames,'id',$id);
		
		if($res==1)

		{
	
			$callConfig->headerRedirect("index.php?option=com_videos&err=Video updated successfully");

		}

		else

		{

		//sitesettingsClass::recentActivities('Admin User updation failed on >> '.DATE_TIME_FORMAT.'','e',$_SESSION['roletype']);

			$callConfig->headerRedirect("index.php?option=com_videos&ferr=Video updation failed");
	
		}

	} 
	
	function DeleteVideo($id)
	
	{
		global $callConfig;

		//$fieldnames=array('description'=>$post['description'],'status'=>$post['status']);
	
	
		$res=$callConfig->deleteRecord(TPREFIX.TBL_VIDEOSDISPLAY,'id',$id);
		
		if($res==1)

		{
	
			$callConfig->headerRedirect("index.php?option=com_videos&err=Video deleted successfully");

		}

		else

		{

		//sitesettingsClass::recentActivities('Admin User updation failed on >> '.DATE_TIME_FORMAT.'','e',$_SESSION['roletype']);

			$callConfig->headerRedirect("index.php?option=com_videos&ferr=Video deletion failed");
	
		}

	} 
	
	function getallCategories()

  {

	global $callConfig;

	//if($sortfield!="" && $order!="") $order=$sortfield.' '.$order;
	$whr="status='active'  ";

 $query=$callConfig->selectQuery(TPREFIX.TBL_CATEGORY,'*',$whr,'','','');

	return $callConfig->getAllRows($query);

  }
  
  function getallCategoriesbyid($id)

  {

	global $callConfig;

	//if($sortfield!="" && $order!="") $order=$sortfield.' '.$order;
	$whr="status='active' and id=".$id."  ";

  $query=$callConfig->selectQuery(TPREFIX.TBL_CATEGORY,'*',$whr,'','','');

	return $callConfig->getRow($query);

  }
  
   function getallCountries()

  {

	global $callConfig;
	

	//if($sortfield!="" && $order!="") $order=$sortfield.' '.$order;
	$whr="status='Active'";

	 $query=$callConfig->selectQuery(TPREFIX.TBL_COUNTRY,'*',$whr,'','','');

	return $callConfig->getAllRows($query);

  }
  
 function getCountriesbyid($id)
 {

	global $callConfig;
	

	//if($sortfield!="" && $order!="") $order=$sortfield.' '.$order;
	$whr="status='active' and id=".$id."  ";


	 $query=$callConfig->selectQuery(TPREFIX.TBL_COUNTRY,'*',$whr,'','','');

	return $callConfig->getRow($query);

  }
  
  
  function getsubcatdetailsbyid($id)
 {

	global $callConfig;
	

	//if($sortfield!="" && $order!="") $order=$sortfield.' '.$order;
	$whr="status='active' and id=".$id."  ";


	 $query=$callConfig->selectQuery(TPREFIX.TBL_DEPARTMENTS,'*',$whr,'','','');

	return $callConfig->getRow($query);

  }
  
   function getsubdeptdetails($id)
 {

	global $callConfig;
	

	//if($sortfield!="" && $order!="") $order=$sortfield.' '.$order;
	$whr="status='active' and id=".$id."  ";


	 $query=$callConfig->selectQuery(TPREFIX.TBL_SUBDEPARTMENTS,'*',$whr,'','','');

	return $callConfig->getRow($query);

  }
  
 
  
  
	
	}
	
	?>