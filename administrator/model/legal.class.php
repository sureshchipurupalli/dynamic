<?php

class legalClass

{

function insertContent($post)
	
	{
	
	global $callConfig;
	//print_r($post);exit;
	
	$date=date_create($post['date']);
		$res=date_format($date,"Y-m-d");

$fieldnames=array('sid'=>$post['subcategory'],'name'=>$post['lname'],'address'=>$post['address'],'cases_handled'=>$post['cases'],'status'=>$post['status']);
	//print_r($fieldnames);exit;
	$res=$callConfig->insertRecord(TPREFIX.TBL_LEGAL,$fieldnames); 

	if($res!="")

	{

		$callConfig->headerRedirect("index.php?option=com_legal&err=content inserted successfully");

	}

	else

	{

		$callConfig->headerRedirect("index.php?option=com_legal&ferr=content insertion failed");

	}

	}

	
	function getallContent($sortfield,$order,$start,$limit)

  {

	global $callConfig;

	//if($sortfield!="" && $order!="") $order=$sortfield.' '.$order;
	$whr="status='active'";

	 $query=$callConfig->selectQuery(TPREFIX.TBL_LEGAL,'*',$whr,'','','');

	return $callConfig->getAllRows($query);

  }
  
  function getalldepartments($id)

  {

	global $callConfig;

	//if($sortfield!="" && $order!="") $order=$sortfield.' '.$order;
	$whr="status='active' and id=".$id." ";

	$query=$callConfig->selectQuery(TPREFIX.TBL_DEPARTMENTS,'*',$whr,'','','');

	return $callConfig->getRow($query);

  }
	
	function getContentdata($id)

  {

	global $callConfig;

	$query=$callConfig->selectQuery(TPREFIX.TBL_LEGAL,'*','id='.$id,'','','');

	return $callConfig->getRow($query);

  }
  
  
  function getsubcategories($id)

  {

	global $callConfig;

	$query=$callConfig->selectQuery(TPREFIX.TBL_DEPARTMENTS,'*','cat_id='.$id,'','','');

	return $callConfig->getAllRows($query);

  }
  
	
	function DeleteContent($id)
	
	{
		global $callConfig;

		//$fieldnames=array('description'=>$post['description'],'status'=>$post['status']);
	
	
		$res=$callConfig->deleteRecord(TPREFIX.TBL_LEGAL,'id',$id);
		
		if($res==1)

		{
	
			$callConfig->headerRedirect("index.php?option=com_legal&err=Complaint deleted successfully");

		}

		else

		{

		//sitesettingsClass::recentActivities('Admin User updation failed on >> '.DATE_TIME_FORMAT.'','e',$_SESSION['roletype']);

			$callConfig->headerRedirect("index.php?option=com_legal&ferr=Complaint deletion failed");
	
		}

	} 
	
	function updateContent($post,$id)
	
	{
	
	global $callConfig;
	//print_r($post);exit;
	$date=date_create($post['date']);
		$res=date_format($date,"Y-m-d");

$fieldnames=array('sid'=>$post['subcategory'],'name'=>$post['lname'],'address'=>$post['address'],'cases_handled'=>$post['cases'],'status'=>$post['status']);
//print_r($fieldnames);exit;
	 $res=$callConfig->updateRecord(TPREFIX.TBL_LEGAL,$fieldnames,'id',$id);
	
	if($res!="")

	{

		$callConfig->headerRedirect("index.php?option=com_legal&err=content updated successfully");

	}

	else

	{

		$callConfig->headerRedirect("index.php?option=com_legal&ferr=content updation failed");

	}

	}
	
	
	}
	
	?>