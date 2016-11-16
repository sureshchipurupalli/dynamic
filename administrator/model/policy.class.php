<?php

class policyClass

{

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

}	
	
	?>