<?php

class aboutDescription

{

function insertDescription($post)

	{
		
		//print_r($_POST);exit;
	global $callConfig;

	// $profilepic = $callConfig->freeimageUploadcomncode('profile','image',"../uploads/profile/","../uploads/profile/thumbs/",$post['hdn_image'],185,51); 

	$fieldnames=array('title'=>$post['title'],'description'=>$post['description'],'status'=>'active');
	 //print_r($fieldnames);exit;
	$res=$callConfig->insertRecord(TPREFIX.TBL_DESCRIPTION,$fieldnames); 

	if($res!="")

	{

		//sitesettingsClass::recentActivities('Admin User created successfully on >> '.DATE_TIME_FORMAT.'','g',$_SESSION['roletype']);

		$callConfig->headerRedirect("index.php?option=com_description&err= Aboutus created successfully");

	}

	else

	{

		//sitesettingsClass::recentActivities('Aboutus creation failed on >> '.DATE_TIME_FORMAT.'','e',$_SESSION['roletype']);

		$callConfig->headerRedirect("index.php?option=com_description&ferr=User creation failed");

	}

	}
	
	
	function getAlldescription($sortfield,$order,$start,$limit)

  {

	global $callConfig;

	//if($sortfield!="" && $order!="") $order=$sortfield.' '.$order;
	$whr="status='active'";
	$query=$callConfig->selectQuery(TPREFIX.TBL_DESCRIPTION,'*',$whr,$order,$start,$limit);

	return $callConfig->getAllRows($query);

  }
  
  function getDescription($id)

  {

	global $callConfig;

	 $query=$callConfig->selectQuery(TPREFIX.TBL_DESCRIPTION,'*','id='.$id,'','','');

	return $callConfig->getRow($query);

  }
  
  
  function updateDescription($post,$id)

	{

	global $callConfig;
	
	//print_r($post);exit;



	// $profilepic = $callConfig->freeimageUploadcomncode('profile','image',"../uploads/profile/","../uploads/profile/thumbs/",$post['hdn_image'],185,51); 

	

	$fieldnames=array('title'=>$post['title'],'description'=>$post['description'],'status'=>'active');
	//print_r($fieldnames);exit;

	

				//$whr="id=".$post['id'];

	$res=$callConfig->updateRecord(TPREFIX.TBL_DESCRIPTION,$fieldnames,'id',$id);

          

	if($res==1)

	{

	//sitesettingsClass::recentActivities('Aboutus updated successfully on >> '.DATE_TIME_FORMAT.'','g',$_SESSION['roletype']);

		$callConfig->headerRedirect("index.php?option=com_description&err=Aboutus updated successfully");

	}

	else

	{

		//sitesettingsClass::recentActivities('Aboutus updation failed on >> '.DATE_TIME_FORMAT.'','e',$_SESSION['roletype']);

		$callConfig->headerRedirect("index.php?option=com_description&ferr=Aboutus updation failed");

	}

	} 
	
	function DeleteDescription($id)
	
	{
		global $callConfig;

		//$fieldnames=array('description'=>$post['description'],'status'=>$post['status']);
	
	
		$res=$callConfig->deleteRecord(TPREFIX.TBL_DESCRIPTION,'id',$id);
		
		if($res==1)

		{
	
			$callConfig->headerRedirect("index.php?option=com_description&err=Description deleted successfully");

		}

		else

		{

		//sitesettingsClass::recentActivities('Admin User updation failed on >> '.DATE_TIME_FORMAT.'','e',$_SESSION['roletype']);

			$callConfig->headerRedirect("index.php?option=com_description&ferr=Description deletion failed");
	
		}

	} 
	
	}
	
	?>