<?php

class aboutPanchayat

{

function insertPanchayat($post)

	{
		
		//print_r($_POST);exit;
	global $callConfig;

	// $profilepic = $callConfig->freeimageUploadcomncode('profile','image',"../uploads/profile/","../uploads/profile/thumbs/",$post['hdn_image'],185,51); 

	$fieldnames=array('title'=>$post['title'],'description'=>$post['description'],'status'=>'active');
	 //print_r($fieldnames);exit;
	$res=$callConfig->insertRecord(TPREFIX.TBL_PANCHAYAT,$fieldnames); 

	if($res!="")

	{

		//sitesettingsClass::recentActivities('Admin User created successfully on >> '.DATE_TIME_FORMAT.'','g',$_SESSION['roletype']);

		$callConfig->headerRedirect("index.php?option=com_panchayat&err= Aboutus created successfully");

	}

	else

	{

		//sitesettingsClass::recentActivities('Aboutus creation failed on >> '.DATE_TIME_FORMAT.'','e',$_SESSION['roletype']);

		$callConfig->headerRedirect("index.php?option=com_panchayat&ferr=User creation failed");

	}

	}
	
	
	function getAllPanchayat($sortfield,$order,$start,$limit)

  {

	global $callConfig;

	//if($sortfield!="" && $order!="") $order=$sortfield.' '.$order;
	$whr="status='active'";
	$query=$callConfig->selectQuery(TPREFIX.TBL_PANCHAYAT,'*',$whr,$order,$start,$limit);

	return $callConfig->getAllRows($query);

  }
  
  function getPanchayat($id)

  {

	global $callConfig;

	 $query=$callConfig->selectQuery(TPREFIX.TBL_PANCHAYAT,'*','id='.$id,'','','');

	return $callConfig->getRow($query);

  }
  
  
  function updatePanchayat($post,$id)

	{

	global $callConfig;
	
	//print_r($post);exit;



	// $profilepic = $callConfig->freeimageUploadcomncode('profile','image',"../uploads/profile/","../uploads/profile/thumbs/",$post['hdn_image'],185,51); 

	

	$fieldnames=array('title'=>$post['title'],'description'=>$post['description'],'status'=>'active');
	//print_r($fieldnames);exit;

	

				//$whr="id=".$post['id'];

	$res=$callConfig->updateRecord(TPREFIX.TBL_PANCHAYAT,$fieldnames,'id',$id);

          

	if($res==1)

	{

	//sitesettingsClass::recentActivities('Aboutus updated successfully on >> '.DATE_TIME_FORMAT.'','g',$_SESSION['roletype']);

		$callConfig->headerRedirect("index.php?option=com_panchayat&err=Aboutus updated successfully");

	}

	else

	{

		//sitesettingsClass::recentActivities('Aboutus updation failed on >> '.DATE_TIME_FORMAT.'','e',$_SESSION['roletype']);

		$callConfig->headerRedirect("index.php?option=com_panchayat&ferr=Aboutus updation failed");

	}

	} 
	
	function DeletePanchayat($id)
	
	{
		global $callConfig;

		//$fieldnames=array('description'=>$post['description'],'status'=>$post['status']);
	
	
		$res=$callConfig->deleteRecord(TPREFIX.TBL_PANCHAYAT,'id',$id);
		
		if($res==1)

		{
	
			$callConfig->headerRedirect("index.php?option=com_panchayat&err=Description deleted successfully");

		}

		else

		{

		//sitesettingsClass::recentActivities('Admin User updation failed on >> '.DATE_TIME_FORMAT.'','e',$_SESSION['roletype']);

			$callConfig->headerRedirect("index.php?option=com_panchayat&ferr=Description deletion failed");
	
		}

	} 
	
	}
	
	?>