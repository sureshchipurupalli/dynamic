<?php

class conditionClass

{

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

	}
	
	?>