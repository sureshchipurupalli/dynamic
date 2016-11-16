<?php 

class newsClass
{
function insertNews($post)

	{
		
		//print_r($_POST);exit;
	global $callConfig;

	// $profilepic = $callConfig->freeimageUploadcomncode('profile','image',"../uploads/profile/","../uploads/profile/thumbs/",$post['hdn_image'],185,51); 

	$fieldnames=array('title'=>$post['news'],'description'=>$post['description'],'status'=>'active');
	 //print_r($fieldnames);exit;
	$res=$callConfig->insertRecord(TPREFIX.TBL_NEWS,$fieldnames); 

	if($res!="")

	{

		//sitesettingsClass::recentActivities('Admin User created successfully on >> '.DATE_TIME_FORMAT.'','g',$_SESSION['roletype']);

		$callConfig->headerRedirect("index.php?option=com_news&err= News inserted successfully");

	}

	else

	{

		//sitesettingsClass::recentActivities('Aboutus creation failed on >> '.DATE_TIME_FORMAT.'','e',$_SESSION['roletype']);

		$callConfig->headerRedirect("index.php?option=com_news&ferr=News insertion failed");

	}

	}
	
	
	function getAllnews($sortfield,$order,$start,$limit)

  {

	global $callConfig;

	//if($sortfield!="" && $order!="") $order=$sortfield.' '.$order;
	$whr="status='active'";
	 $query=$callConfig->selectQuery(TPREFIX.TBL_NEWS,'*',$whr,$order,$start,$limit);

	return $callConfig->getAllRows($query);

  }
  
  
  function updateNews($post,$id)

	{

	global $callConfig;
	
	//print_r($post);exit;



	// $profilepic = $callConfig->freeimageUploadcomncode('profile','image',"../uploads/profile/","../uploads/profile/thumbs/",$post['hdn_image'],185,51); 

	

	$fieldnames=array('title'=>$post['news'],'description'=>$post['description'],'status'=>'active');
	//print_r($fieldnames);exit;

	

				//$whr="id=".$post['id'];

	$res=$callConfig->updateRecord(TPREFIX.TBL_NEWS,$fieldnames,'id',$id);

          

	if($res==1)

	{

	//sitesettingsClass::recentActivities('Aboutus updated successfully on >> '.DATE_TIME_FORMAT.'','g',$_SESSION['roletype']);

		$callConfig->headerRedirect("index.php?option=com_news&err=News updated successfully");

	}

	else

	{

		//sitesettingsClass::recentActivities('Aboutus updation failed on >> '.DATE_TIME_FORMAT.'','e',$_SESSION['roletype']);

		$callConfig->headerRedirect("index.php?option=com_news&ferr=News updation failed");

	}

	} 
	
	function DeleteNews($id)
	
	{
		global $callConfig;

		//$fieldnames=array('description'=>$post['description'],'status'=>$post['status']);
	
	
		$res=$callConfig->deleteRecord(TPREFIX.TBL_NEWS,'id',$id);
		
		if($res==1)

		{
	
			$callConfig->headerRedirect("index.php?option=com_news&err=News deleted successfully");

		}

		else

		{

		//sitesettingsClass::recentActivities('Admin User updation failed on >> '.DATE_TIME_FORMAT.'','e',$_SESSION['roletype']);

			$callConfig->headerRedirect("index.php?option=com_news&ferr=News deletion failed");
	
		}

	} 
	
	
	 function getNewsdata($id)

  {

	global $callConfig;

	 $query=$callConfig->selectQuery(TPREFIX.TBL_NEWS,'*','id='.$id,'','','');

	return $callConfig->getRow($query);

  }
	}
	?>