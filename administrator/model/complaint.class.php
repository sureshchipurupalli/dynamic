<?php

class complaintClass

{

function insertComplaint($post)
	
	{
	
	global $callConfig;
	//print_r($post);exit;
	$eventimage = $callConfig->freeimageUploadcomncode("complaint",'profile',"../uploads/complaints/","../uploads/complaints/thumbs/",$post['hdn_image'],'','');
	
	$date=date_create($post['date']);
		$res=date_format($date,"Y-m-d");

	$fieldnames=array('title'=>$post['title'],'description'=>$post['description'],'image'=>$eventimage,'country_id'=>$post['country'],'complaint_category'=>$post['category'],'department'=>$post['subcategory'],'subdept_id'=>$post['subdepartment'],'status'=>$post['status'],'date_added'=>$res);
	
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

	 $query=$callConfig->selectQuery(TPREFIX.TBL_COMPLAINTS,'*','','','','');

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
	
	$eventimage = $callConfig->freeimageUploadcomncode("complaint",'profile',"../uploads/complaints/","../uploads/complaints/thumbs/",$post['hdn_image'],'','');
	
	//echo $eventimage;exit;
	$fieldnames=array('title'=>$post['title'],'image'=>$eventimage,'country_id'=>$post['country'],'complaint_category'=>$post['category'],'department'=>$post['subcategory'],'subdept_id'=>$post['subdepartment'],'description'=>$post['description'],'status'=>$post['status'],'date_added'=>$res);

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
	
	function getCategories($id)

  {

	global $callConfig;

	//if($sortfield!="" && $order!="") $order=$sortfield.' '.$order;
	$whr="status='active' and id=".$id." ";

		 $query=$callConfig->selectQuery(TPREFIX.TBL_CATEGORY,'*',$whr,'','','');

	return $callConfig->getRow($query);

  }
  
  function getallCountriesbyid($id)

  {

	global $callConfig;

	//if($sortfield!="" && $order!="") $order=$sortfield.' '.$order;
	$whr="status='active' and id=".$id." ";

	$query=$callConfig->selectQuery(TPREFIX.TBL_COUNTRY,'*',$whr,'','','');

	return $callConfig->getRow($query);

  }
  
  
   function getallCountries()

  {

	global $callConfig;

	//if($sortfield!="" && $order!="") $order=$sortfield.' '.$order;
	$whr="status='active'  ";

	$query=$callConfig->selectQuery(TPREFIX.TBL_COUNTRY,'*',$whr,'','','');

	return $callConfig->getAllRows($query);

  }
  
  
  function getallCategories()

  {

	global $callConfig;

	//if($sortfield!="" && $order!="") $order=$sortfield.' '.$order;
	$whr="status='active'  ";

	$query=$callConfig->selectQuery(TPREFIX.TBL_CATEGORY,'*',$whr,'','','');

	return $callConfig->getAllRows($query);

  }
  
  function getdepartments($id)

  {

	global $callConfig;

	//if($sortfield!="" && $order!="") $order=$sortfield.' '.$order;
	$whr="status='active' and id=".$id." ";

		 $query=$callConfig->selectQuery(TPREFIX.TBL_DEPARTMENTS,'*',$whr,'','','');

	return $callConfig->getRow($query);

  }
  
  function getsubdepartments($id)

  {

	global $callConfig;

	//if($sortfield!="" && $order!="") $order=$sortfield.' '.$order;
	$whr="status='active' and id=".$id." ";

	$query=$callConfig->selectQuery(TPREFIX.TBL_SUBDEPARTMENTS,'*',$whr,'','','');

	return $callConfig->getRow($query);

  }
  
  
	
	}
	
	?>