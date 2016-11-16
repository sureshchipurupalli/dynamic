<?php

class pagesClass

{

 function insertAboutus($post)

	{
		
		//print_r($_POST);exit;
	global $callConfig;

	// $profilepic = $callConfig->freeimageUploadcomncode('profile','image',"../uploads/profile/","../uploads/profile/thumbs/",$post['hdn_image'],185,51); 

	$fieldnames=array('title'=>$post['title'],'description'=>$post['description'],'status'=>'active');
	 //print_r($fieldnames);exit;
	$res=$callConfig->insertRecord(TPREFIX.TBL_ABOUTUS,$fieldnames); 

	if($res!="")

	{

		//sitesettingsClass::recentActivities('Admin User created successfully on >> '.DATE_TIME_FORMAT.'','g',$_SESSION['roletype']);

		$callConfig->headerRedirect("index.php?option=com_aboutus&err= Aboutus created successfully");

	}

	else

	{

		//sitesettingsClass::recentActivities('Aboutus creation failed on >> '.DATE_TIME_FORMAT.'','e',$_SESSION['roletype']);

		$callConfig->headerRedirect("index.php?option=com_aboutus&ferr=User creation failed");

	}

	}
	
	
	function getAllaboutus($sortfield,$order,$start,$limit)

  {

	global $callConfig;

	//if($sortfield!="" && $order!="") $order=$sortfield.' '.$order;
	$whr="status='active'";
	$query=$callConfig->selectQuery(TPREFIX.ABOUTUS,'*',$whr,$order,$start,$limit);

	return $callConfig->getAllRows($query);

  }
  
  function getAboutus($id)

  {

	global $callConfig;

	 $query=$callConfig->selectQuery(TPREFIX.TBL_ABOUTUS,'*','id='.$id,'','','');

	return $callConfig->getRow($query);

  }
  
  
  function updateAboutus($post,$id)

	{

	global $callConfig;
	
	//print_r($post);exit;



	// $profilepic = $callConfig->freeimageUploadcomncode('profile','image',"../uploads/profile/","../uploads/profile/thumbs/",$post['hdn_image'],185,51); 

	

	$fieldnames=array('title'=>$post['title'],'description'=>$post['description'],'status'=>'active');
	//print_r($fieldnames);exit;

	

				//$whr="id=".$post['id'];

	$res=$callConfig->updateRecord(TPREFIX.TBL_ABOUTUS,$fieldnames,'id',$id);

          

	if($res==1)

	{

	//sitesettingsClass::recentActivities('Aboutus updated successfully on >> '.DATE_TIME_FORMAT.'','g',$_SESSION['roletype']);

		$callConfig->headerRedirect("index.php?option=com_aboutus&err=Aboutus updated successfully");

	}

	else

	{

		//sitesettingsClass::recentActivities('Aboutus updation failed on >> '.DATE_TIME_FORMAT.'','e',$_SESSION['roletype']);

		$callConfig->headerRedirect("index.php?option=com_aboutus&ferr=Aboutus updation failed");

	}

	} 
	
	function DeleteAboutus($id)
	
	{
		global $callConfig;

		//$fieldnames=array('description'=>$post['description'],'status'=>$post['status']);
	
	
		$res=$callConfig->deleteRecord(TPREFIX.TBL_ABOUTUS,'id',$id);
		
		if($res==1)

		{
	
			$callConfig->headerRedirect("index.php?option=com_aboutus&err=Description deleted successfully");

		}

		else

		{

		//sitesettingsClass::recentActivities('Admin User updation failed on >> '.DATE_TIME_FORMAT.'','e',$_SESSION['roletype']);

			$callConfig->headerRedirect("index.php?option=com_aboutus&ferr=Description deletion failed");
	
		}

	} 
	
	
	 function insertVideo($post)

	{
		
		//print_r($_POST);exit;
	global $callConfig;

	// $profilepic = $callConfig->freeimageUploadcomncode('profile','image',"../uploads/profile/","../uploads/profile/thumbs/",$post['hdn_image'],185,51); 

	
	$date=date_create($post['date']);
    $res=date_format($date,"Y-m-d");
	

	$fieldnames=array('video_name'=>$post['video'],'description'=>$post['description'],'status'=>'active','date_added'=>$res);
	$res=$callConfig->insertRecord(TPREFIX.TBL_VIDEOS,$fieldnames); 

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
	$whr="status='active'";

	$query=$callConfig->selectQuery(TPREFIX.TBL_VIDEOS,'*',$whr,'','','');

	return $callConfig->getAllRows($query);

  }
  
   function getVideodata($id)

  {

	global $callConfig;

	$query=$callConfig->selectQuery(TPREFIX.TBL_VIDEOS,'*','id='.$id,'','','');

	return $callConfig->getRow($query);

  }
  
  
  function updateVideo($post,$id)
	
	{
	
	//print_r($post);exit;
		global $callConfig;
		
		$date=date_create($post['date']);
		$res=date_format($date,"Y-m-d");

		$fieldnames=array('video_name'=>$post['video'],'description'=>$post['description'],'status'=>'active','date_added'=>$res);
	
	
		$res=$callConfig->updateRecord(TPREFIX.TBL_VIDEOS,$fieldnames,'id',$id);
		
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
	
	
		$res=$callConfig->deleteRecord(TPREFIX.TBL_VIDEOS,'id',$id);
		
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
	
	function insertPolicy($post)
	
	{
	
	global $callConfig;

	$fieldnames=array('policy_name'=>$post['policy'],'description'=>$post['description'],'status'=>'Active');

	$res=$callConfig->insertRecord(TPREFIX.TBL_POLICY,$fieldnames); 

	if($res!="")

	{

		$callConfig->headerRedirect("index.php?option=com_privacypolicy&err=policy inserted successfully");

	}

	else

	{

		$callConfig->headerRedirect("index.php?option=com_privacypolicy&ferr=policy insertion failed");

	}

	}

	
	
	 function updatePolicy($post,$id)

	{

	global $callConfig;
	
	//print_r($post);exit;



	// $profilepic = $callConfig->freeimageUploadcomncode('profile','image',"../uploads/profile/","../uploads/profile/thumbs/",$post['hdn_image'],185,51); 

	

	$fieldnames=array('policy_name'=>$post['policy'],'description'=>$post['description'],'status'=>'Active');
	//print_r($fieldnames);exit;

	

				//$whr="id=".$post['id'];

	$res=$callConfig->updateRecord(TPREFIX.TBL_POLICY,$fieldnames,'id',$id);

          

	if($res==1)

	{

	//sitesettingsClass::recentActivities('Aboutus updated successfully on >> '.DATE_TIME_FORMAT.'','g',$_SESSION['roletype']);

		$callConfig->headerRedirect("index.php?option=com_privacypolicy&err=Policy updated successfully");

	}

	else

	{

		//sitesettingsClass::recentActivities('Aboutus updation failed on >> '.DATE_TIME_FORMAT.'','e',$_SESSION['roletype']);

		$callConfig->headerRedirect("index.php?option=com_privacypolicy&ferr=Policy updation failed");

	}

	} 
	
	function getallpolicydata($sortfield,$order,$start,$limit)

  {

	global $callConfig;

	//if($sortfield!="" && $order!="") $order=$sortfield.' '.$order;
	$whr="status='active'";

	$query=$callConfig->selectQuery(TPREFIX.TBL_POLICY,'*',$whr,'','','');

	return $callConfig->getAllRows($query);

  }
	
	function getPolicydata($id)

  {

	global $callConfig;

	$query=$callConfig->selectQuery(TPREFIX.TBL_POLICY,'*','id='.$id,'','','');

	return $callConfig->getRow($query);

  }
  
	
	function DeletePolicy($id)
	
	{
		global $callConfig;

		//$fieldnames=array('description'=>$post['description'],'status'=>$post['status']);
	
	
		$res=$callConfig->deleteRecord(TPREFIX.TBL_POLICY,'id',$id);
		
		if($res==1)

		{
	
			$callConfig->headerRedirect("index.php?option=com_privacypolicy&err=Policy deleted successfully");

		}

		else

		{

		//sitesettingsClass::recentActivities('Admin User updation failed on >> '.DATE_TIME_FORMAT.'','e',$_SESSION['roletype']);

			$callConfig->headerRedirect("index.php?option=com_privacypolicy&ferr=Policy deletion failed");
	
		}

	} 
	
	
	
	function insertCondition($post)
	
	{
	
	global $callConfig;
	//print_r($post);exit;

	$fieldnames=array('title'=>$post['condition'],'description'=>$post['description'],'status'=>'Active');

	$res=$callConfig->insertRecord(TPREFIX.TBL_CONDITIONS,$fieldnames); 

	if($res!="")

	{

		$callConfig->headerRedirect("index.php?option=com_conditions&err=conditions inserted successfully");

	}

	else

	{

		$callConfig->headerRedirect("index.php?option=com_conditions&ferr=conditions insertion failed");

	}

	}

	
	function getallConditions($sortfield,$order,$start,$limit)

  {

	global $callConfig;

	//if($sortfield!="" && $order!="") $order=$sortfield.' '.$order;
	$whr="status='active'";

	$query=$callConfig->selectQuery(TPREFIX.TBL_CONDITIONS,'*',$whr,'','','');

	return $callConfig->getAllRows($query);

  }
	
	function getConditiondata($id)

  {

	global $callConfig;

	$query=$callConfig->selectQuery(TPREFIX.TBL_CONDITIONS,'*','id='.$id,'','','');

	return $callConfig->getRow($query);

  }
  
	
	function DeleteCondition($id)
	
	{
		global $callConfig;

		//$fieldnames=array('description'=>$post['description'],'status'=>$post['status']);
	
	
		$res=$callConfig->deleteRecord(TPREFIX.TBL_CONDITIONS,'id',$id);
		
		if($res==1)

		{
	
			$callConfig->headerRedirect("index.php?option=com_conditions&err=Condition deleted successfully");

		}

		else

		{

		//sitesettingsClass::recentActivities('Admin User updation failed on >> '.DATE_TIME_FORMAT.'','e',$_SESSION['roletype']);

			$callConfig->headerRedirect("index.php?option=com_conditions&ferr=Condition deletion failed");
	
		}

	} 
	
	function updateCondition($post,$id)
	
	{
	
	global $callConfig;
	//print_r($post);exit;

$fieldnames=array('title'=>$post['condition'],'description'=>$post['description'],'status'=>'Active');

	$res=$callConfig->updateRecord(TPREFIX.TBL_CONDITIONS,$fieldnames,'id',$id); 

	if($res!="")

	{

		$callConfig->headerRedirect("index.php?option=com_conditions&err=conditions updated successfully");

	}

	else

	{

		$callConfig->headerRedirect("index.php?option=com_conditions&ferr=conditions updation failed");

	}

	}

	
	function insertComplaint($post)
	
	{
	
	global $callConfig;
	//print_r($post);exit;
	
	$date=date_create($post['date']);
		$res=date_format($date,"Y-m-d");

	$fieldnames=array('complaint_title'=>$post['complaint'],'description'=>$post['description'],'status'=>'Open','date_added'=>$res);

	$res=$callConfig->insertRecord(TPREFIX.TBL_COMPLAINTS,$fieldnames); 

	if($res!="")

	{

		$callConfig->headerRedirect("index.php?option=com_complaints&err=complaint inserted successfully");

	}

	else

	{

		$callConfig->headerRedirect("index.php?option=com_complaints&ferr=complaint insertion failed");

	}

	}

	
	function getallComplaints($sortfield,$order,$start,$limit)

  {

	global $callConfig;

	//if($sortfield!="" && $order!="") $order=$sortfield.' '.$order;
	$whr="status='Open'";

	$query=$callConfig->selectQuery(TPREFIX.TBL_COMPLAINTS,'*',$whr,'','','');

	return $callConfig->getAllRows($query);

  }
	
	function getComplaintdata($id)

  {

	global $callConfig;

	$query=$callConfig->selectQuery(TPREFIX.TBL_COMPLAINTS,'*','id='.$id,'','','');

	return $callConfig->getRow($query);

  }
  
	
	function DeleteComplaint($id)
	
	{
		global $callConfig;

		//$fieldnames=array('description'=>$post['description'],'status'=>$post['status']);
	
	
		$res=$callConfig->deleteRecord(TPREFIX.TBL_COMPLAINTS,'id',$id);
		
		if($res==1)

		{
	
			$callConfig->headerRedirect("index.php?option=com_complaints&err=Complaint deleted successfully");

		}

		else

		{

		//sitesettingsClass::recentActivities('Admin User updation failed on >> '.DATE_TIME_FORMAT.'','e',$_SESSION['roletype']);

			$callConfig->headerRedirect("index.php?option=com_complaints&ferr=Complaint deletion failed");
	
		}

	} 
	
	function updateComplaint($post,$id)
	
	{
	
	global $callConfig;
	//print_r($post);exit;
	$date=date_create($post['date']);
		$res=date_format($date,"Y-m-d");

$fieldnames=array('complaint_title'=>$post['complaint'],'description'=>$post['description'],'status'=>'Open','date_added'=>$res);

	$res=$callConfig->updateRecord(TPREFIX.TBL_COMPLAINTS,$fieldnames,'id',$id); 

	if($res!="")

	{

		$callConfig->headerRedirect("index.php?option=com_complaints&err=complaint updated successfully");

	}

	else

	{

		$callConfig->headerRedirect("index.php?option=com_complaints&ferr=complaint updation failed");

	}

	}

}
?>