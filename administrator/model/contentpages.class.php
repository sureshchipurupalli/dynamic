<?php

class contentClass

{

function insertContent($post)
	
	{
	
	global $callConfig;
	//print_r($post);exit;
	
	$date=date_create($post['date']);
		$res=date_format($date,"Y-m-d");

$fieldnames=array('title'=>$post['title'],'description'=>$post['description'],'status'=>$post['status']);
	//print_r($fieldnames);exit;
	$res=$callConfig->insertRecord(TPREFIX.TBL_CONTENTPAGES,$fieldnames); 

	if($res!="")

	{

		$callConfig->headerRedirect("index.php?option=com_contentpages&err=content inserted successfully");

	}

	else

	{

		$callConfig->headerRedirect("index.php?option=com_contentpages&ferr=content insertion failed");

	}

	}

	
	function getallContent($sortfield,$order,$start,$limit)

  {

	global $callConfig;

	//if($sortfield!="" && $order!="") $order=$sortfield.' '.$order;
	$whr="status='active'";

	 $query=$callConfig->selectQuery(TPREFIX.TBL_CONTENTPAGES,'*',$whr,'','','');

	return $callConfig->getAllRows($query);

  }
	
	function getContentdata($id)

  {

	global $callConfig;

	$query=$callConfig->selectQuery(TPREFIX.TBL_CONTENTPAGES,'*','id='.$id,'','','');

	return $callConfig->getRow($query);

  }
  
	
	function DeleteContent($id)
	
	{
		global $callConfig;

		//$fieldnames=array('description'=>$post['description'],'status'=>$post['status']);
	
	
		$res=$callConfig->deleteRecord(TPREFIX.TBL_CONTENTPAGES,'id',$id);
		
		if($res==1)

		{
	
			$callConfig->headerRedirect("index.php?option=com_contentpages&err=Complaint deleted successfully");

		}

		else

		{

		//sitesettingsClass::recentActivities('Admin User updation failed on >> '.DATE_TIME_FORMAT.'','e',$_SESSION['roletype']);

			$callConfig->headerRedirect("index.php?option=com_contentpages&ferr=Complaint deletion failed");
	
		}

	} 
	
	function updateContent($post,$id)
	
	{
	
	global $callConfig;
	//print_r($post);exit;
	$date=date_create($post['date']);
		$res=date_format($date,"Y-m-d");

$fieldnames=array('title'=>$post['title'],'description'=>stripslashes($post['description']),'status'=>$post['status']);
//print_r($fieldnames);exit;
	echo $res=$callConfig->updateRecord(TPREFIX.TBL_CONTENTPAGES,$fieldnames,'id',$id);
	
	if($res!="")

	{

		$callConfig->headerRedirect("index.php?option=com_contentpages&err=content updated successfully");

	}

	else

	{

		$callConfig->headerRedirect("index.php?option=com_contentpages&ferr=content updation failed");

	}

	}
	
	
	}
	
	?>