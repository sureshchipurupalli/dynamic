<?php 
class getInvolvedClass
{


function insertGetinvolved($post)

	{
		
		//print_r($_POST);exit;
	global $callConfig;

	// $profilepic = $callConfig->freeimageUploadcomncode('profile','image',"../uploads/profile/","../uploads/profile/thumbs/",$post['hdn_image'],185,51); 

	$fieldnames=array('title'=>$post['title'],'description'=>addslashes($post['description']),'status'=>'active');
	 //print_r($fieldnames);exit;
	$res=$callConfig->insertRecord(TPREFIX.TBL_GETINVOLVED,$fieldnames); 

	if($res!="")

	{

		//sitesettingsClass::recentActivities('Admin User created successfully on >> '.DATE_TIME_FORMAT.'','g',$_SESSION['roletype']);

		$callConfig->headerRedirect("index.php?option=com_getinvolved&err=Content inserted successfully");

	}

	else

	{

		//sitesettingsClass::recentActivities('Aboutus creation failed on >> '.DATE_TIME_FORMAT.'','e',$_SESSION['roletype']);

		$callConfig->headerRedirect("index.php?option=com_getinvolved&ferr=User creation failed");

	}

	}
	


function getAllinvolved($sortfield,$order,$start,$limit)

{

global $callConfig;

//if($sortfield!="" && $order!="") $order=$sortfield.' '.$order;
$whr="status='active'";
$query=$callConfig->selectQuery(TPREFIX.TBL_GETINVOLVED,'*','',$order,$start,$limit);

return $callConfig->getAllRows($query);

}


function updateInvolved($post,$id)

{

global $callConfig;

//print_r($post);exit;



// $profilepic = $callConfig->freeimageUploadcomncode('profile','image',"../uploads/profile/","../uploads/profile/thumbs/",$post['hdn_image'],185,51); 

//$bannerpic = $callConfig->freeimageUploadcomncode('profile','image',"/uploads/profile/","/uploads/profile/thumbs/",$post['profile'],'185','51'); 

$eventimage = $callConfig->freeimageUploadcomncode("banners",'profile',"../uploads/banners/","../uploads/banners/thumbs/",$post['hdn_image'],'','');

if(isset($_FILES['profile'])){
$file_name = $_FILES['profile']['name'];
$file_size =$_FILES['profile']['size'];
$file_tmp =$_FILES['profile']['tmp_name'];
$file_type=$_FILES['profile']['type'];
}      

$extensions = array("jpeg","jpg","png");      

$file_ext=explode('.',$_FILES['image']['name'])	;
$file_ext=end($file_ext);     
$file_ext=strtolower(end(explode('.',$_FILES['profile']['name'])));  
$upload=move_uploaded_file($file_tmp,"uploads/homeimg/".$file_name);     

	$fieldnames=array('title'=>$post['title'],'description'=>addslashes($post['description']),'status'=>'active');
//print_r($fieldnames);exit;



//$whr="id=".$post['id'];

$res=$callConfig->updateRecord(TPREFIX.TBL_GETINVOLVED,$fieldnames,'id',$id);



if($res==1)

{

//sitesettingsClass::recentActivities('Aboutus updated successfully on >> '.DATE_TIME_FORMAT.'','g',$_SESSION['roletype']);

$callConfig->headerRedirect("index.php?option=com_getinvolved&err=Content updated successfully");

}

else

{

//sitesettingsClass::recentActivities('Aboutus updation failed on >> '.DATE_TIME_FORMAT.'','e',$_SESSION['roletype']);

$callConfig->headerRedirect("index.php?option=com_getinvolved&ferr=Content updation failed");

}

} 

function DeleteInvolved($id)

{
global $callConfig;

//$fieldnames=array('description'=>$post['description'],'status'=>$post['status']);


$res=$callConfig->deleteRecord(TPREFIX.TBL_GETINVOLVED,'id',$id);

if($res==1)

{

$callConfig->headerRedirect("index.php?option=com_getinvolved&err=Content deleted successfully");

}

else

{

//sitesettingsClass::recentActivities('Admin User updation failed on >> '.DATE_TIME_FORMAT.'','e',$_SESSION['roletype']);

$callConfig->headerRedirect("index.php?option=com_getinvolved&ferr=Content deletion failed");

}

} 


function getInvolved($id)

{

global $callConfig;

$query=$callConfig->selectQuery(TPREFIX.TBL_GETINVOLVED,'*','id='.$id,'','','');

return $callConfig->getRow($query);

}
}
?>