<?php

class submenuClass

{

function insertMenu($post)

	{
		
		//print_r($_POST);exit;
	global $callConfig;

	// $profilepic = $callConfig->freeimageUploadcomncode('profile','image',"../uploads/profile/","../uploads/profile/thumbs/",$post['hdn_image'],185,51); 

	$fieldnames=array('title'=>$post['title'],'description'=>mysql_real_escape_string($post['description']),'status'=>$post['status']);
	//print_r($fieldnames);exit;
	$res=$callConfig->insertRecord(TPREFIX.TBL_SUBMENU,$fieldnames); 

	if($res!="")

	{

		//sitesettingsClass::recentActivities('Admin User created successfully on >> '.DATE_TIME_FORMAT.'','g',$_SESSION['roletype']);

		$callConfig->headerRedirect("index.php?option=com_submenu &err=menu list created successfully");

	}

	else

	{

		//sitesettingsClass::recentActivities('Aboutus creation failed on >> '.DATE_TIME_FORMAT.'','e',$_SESSION['roletype']);

		$callConfig->headerRedirect("index.php?option=com_submenu &ferr=Menu list creation failed");

	}

	}
	
	
	function getAllmenu($sortfield,$order,$start,$limit)

  {

	global $callConfig;

	//if($sortfield!="" && $order!="") $order=$sortfield.' '.$order;
	$whr="status='active'";
	$query=$callConfig->selectQuery(TPREFIX.TBL_SUBMENU,'*',$whr,$order,$start,$limit);

	return $callConfig->getAllRows($query);

  }
  
  function getAllmenulist($sortfield,$order,$start,$limit)

  {

	global $callConfig;

	//if($sortfield!="" && $order!="") $order=$sortfield.' '.$order;
	$whr="status='active'";
	$query=$callConfig->selectQuery(TPREFIX.TBL_SUBMENU,'*',$whr,$order,$start,$limit);

	return $callConfig->getAllRows($query);

  }
  
  function getsubMenu($id)

  {

	global $callConfig;

	 $query=$callConfig->selectQuery(TPREFIX.TBL_SUBMENU,'*','id='.$id,'','','');

	return $callConfig->getRow($query);

  }
  
  
  function updateAboutus($post,$id)

	{

	global $callConfig;
	
	//print_r($post);exit;



	// $profilepic = $callConfig->freeimageUploadcomncode('profile','image',"../uploads/profile/","../uploads/profile/thumbs/",$post['hdn_image'],185,51); 

	

	$fieldnames=array('title'=>$post['title'],'description'=>mysql_real_escape_string($post['description']),'status'=>$post['status']);
	//print_r($fieldnames);exit;

	

				//$whr="id=".$post['id'];

	$res=$callConfig->updateRecord(TPREFIX.TBL_SUBMENU,$fieldnames,'id',$id);

          

	if($res==1)

	{

	//sitesettingsClass::recentActivities('Aboutus updated successfully on >> '.DATE_TIME_FORMAT.'','g',$_SESSION['roletype']);

		$callConfig->headerRedirect("index.php?option=com_submenu &err=Submenu updated successfully");

	}

	else

	{

		//sitesettingsClass::recentActivities('Aboutus updation failed on >> '.DATE_TIME_FORMAT.'','e',$_SESSION['roletype']);

		$callConfig->headerRedirect("index.php?option=com_submenu &ferr=Submenu updation failed");

	}

	} 
	
	function DeleteSubmenu($id)
	
	{
		global $callConfig;

		//$fieldnames=array('description'=>$post['description'],'status'=>$post['status']);
	
	
		$res=$callConfig->deleteRecord(TPREFIX.TBL_SUBMENU,'id',$id);
		
		if($res==1)

		{
	
			$callConfig->headerRedirect("index.php?option=com_submenu &err=Description deleted successfully");

		}

		else

		{

		//sitesettingsClass::recentActivities('Admin User updation failed on >> '.DATE_TIME_FORMAT.'','e',$_SESSION['roletype']);

			$callConfig->headerRedirect("index.php?option=com_submenu&ferr=Description deletion failed");
	
		}

	} 
	
	}
	
	?>