<?php

class subdepartsClass

{

function insertContent($post)
	
	{
	
	global $callConfig;
	//print_r($post);exit;
	
	$date=date_create($post['date']);
		$res=date_format($date,"Y-m-d");

$fieldnames=array('title'=>$post['title'],'c_id'=>$post['category'],'s_id'=>$post['subcategory'],'status'=>$post['status']);
	//print_r($fieldnames);exit;
	$res=$callConfig->insertRecord(TPREFIX.TBL_SUBDEPARTMENTS,$fieldnames); 

	if($res!="")

	{

		$callConfig->headerRedirect("index.php?option=com_subdepts&err=content inserted successfully");

	}

	else

	{

		$callConfig->headerRedirect("index.php?option=com_subdepts&ferr=content insertion failed");

	}

	}

	
	function getallContent($sortfield,$order,$start,$limit)

  {

	global $callConfig;

	//if($sortfield!="" && $order!="") $order=$sortfield.' '.$order;
	$whr="status='active'";

	 $query=$callConfig->selectQuery(TPREFIX.TBL_SUBDEPARTMENTS,'*',$whr,'','','');

	return $callConfig->getAllRows($query);

  }
	
	function getContentdata($id)

  {

	global $callConfig;

	$query=$callConfig->selectQuery(TPREFIX.TBL_SUBDEPARTMENTS,'*','id='.$id,'','','');

	return $callConfig->getRow($query);

  }
  
  function getCategorydata($id)

  {

	global $callConfig;

	//echo $query=$callConfig->selectQuery(TPREFIX.TBL_CATEGORY,'*','id='.$id,'','','');

	return $callConfig->getRow($query);

  }
  
	
	function DeleteContent($id)
	
	{
		global $callConfig;

		//$fieldnames=array('description'=>$post['description'],'status'=>$post['status']);
	
	
		$res=$callConfig->deleteRecord(TPREFIX.TBL_SUBDEPARTMENTS,'id',$id);
		
		if($res==1)

		{
	
			$callConfig->headerRedirect("index.php?option=com_subdepts&err=Complaint deleted successfully");

		}

		else

		{

		//sitesettingsClass::recentActivities('Admin User updation failed on >> '.DATE_TIME_FORMAT.'','e',$_SESSION['roletype']);

			$callConfig->headerRedirect("index.php?option=com_subdepts&ferr=Complaint deletion failed");
	
		}

	} 
	
	function updateContent($post,$id)
	
	{
	
	global $callConfig;
	//print_r($post);exit;
	$date=date_create($post['date']);
		$res=date_format($date,"Y-m-d");

$fieldnames=array('title'=>$post['title'],'c_id'=>$post['category'],'s_id'=>$post['subcategory'],'status'=>$post['status']);
//print_r($fieldnames);exit;
	//echo $res=$callConfig->updateRecord(TPREFIX.TBL_SUBDEPARTMENTS,$fieldnames,'id',$id);
	
	if($res!="")

	{

		$callConfig->headerRedirect("index.php?option=com_subdepts&err=content updated successfully");

	}

	else

	{

		$callConfig->headerRedirect("index.php?option=com_subdepts&ferr=content updation failed");

	}

	}
	
	function getdepartments($id)

  {

	global $callConfig;
	
	$whr="status='active' and id=".$id." ";

	$query=$callConfig->selectQuery(TPREFIX.TBL_DEPARTMENTS,'*',$whr,'','','');

	return $callConfig->getRow($query);

  }
  
  function getallcategories($id)

  {

	global $callConfig;

	$whr="status='active' and id=".$id." ";
	
	 $query=$callConfig->selectQuery(TPREFIX.TBL_CATEGORY,'*',$whr,'','','');

	return $callConfig->getRow($query);

  }
  
  
  function getcategories()

  {

	global $callConfig;

	$whr="status='active'  ";
	
	 $query=$callConfig->selectQuery(TPREFIX.TBL_CATEGORY,'*',$whr,'','','');

	return $callConfig->getAllRows($query);

  }
  
  
  
  
  
 
  
  
  
	
	}
	
	?>