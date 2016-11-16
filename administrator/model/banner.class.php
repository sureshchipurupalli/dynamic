<?php 
class bannerClass
{

function insertBanner($post)

{


global $callConfig;

//$bannerpic = $callConfig->freeimageUploadcomncode('profile','image',"/uploads/profile/","/uploads/profile/thumbs/",$post['profile'],'185','51'); 


$eventimage = $callConfig->freeimageUploadcomncode("banners",'profile',"../uploads/banners/","../uploads/banners/thumbs/",$post['hdn_image'],'','');

if(isset($_FILES['profile']))
{
	$file_name = $_FILES['profile']['name'];
	$file_size =$_FILES['profile']['size'];
	$file_tmp =$_FILES['profile']['tmp_name'];
	$file_type=$_FILES['profile']['type'];

}      
$extensions = array("jpeg","jpg","png");      

$file_ext=explode('.',$_FILES['image']['name'])	;
$file_ext=end($file_ext);     
$file_ext=strtolower(end(explode('.',$_FILES['profile']['name'])));  
$upload=move_uploaded_file($file_tmp,"uploads/homeimg/thumbs/".$file_name);       

$fieldnames=array('banner_name'=>$post['banner'],'description'=>$post['description'],'image_name'=> $eventimage,'status'=>$post['status']);
//print_r($fieldnames);exit;
$res=$callConfig->insertRecord(TPREFIX.TBL_BANNERS,$fieldnames); 

if($res!='')

{

//sitesettingsClass::recentActivities('Admin User created successfully on >> '.DATE_TIME_FORMAT.'','g',$_SESSION['roletype']);

$callConfig->headerRedirect("index.php?option=com_banners&err= Banner created successfully");

}

else

{

//sitesettingsClass::recentActivities('Aboutus creation failed on >> '.DATE_TIME_FORMAT.'','e',$_SESSION['roletype']);

$callConfig->headerRedirect("index.php?option=com_banners&ferr=Banner creation failed");

}

}


function getAllBanners($sortfield,$order,$start,$limit)

{

global $callConfig;

//if($sortfield!="" && $order!="") $order=$sortfield.' '.$order;
$whr="status='active'";
$query=$callConfig->selectQuery(TPREFIX.TBL_BANNERS,'*','',$order,$start,$limit);

return $callConfig->getAllRows($query);

}


function updateBanner($post,$id)

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

$fieldnames=array('banner_name'=>$post['banner'],'description'=>$post['description'],'image_name'=>$eventimage,'status'=>$post['status']);
//print_r($fieldnames);exit;



//$whr="id=".$post['id'];

$res=$callConfig->updateRecord(TPREFIX.TBL_BANNERS,$fieldnames,'id',$id);



if($res==1)

{

//sitesettingsClass::recentActivities('Aboutus updated successfully on >> '.DATE_TIME_FORMAT.'','g',$_SESSION['roletype']);

$callConfig->headerRedirect("index.php?option=com_banners&err=Banner updated successfully");

}

else

{

//sitesettingsClass::recentActivities('Aboutus updation failed on >> '.DATE_TIME_FORMAT.'','e',$_SESSION['roletype']);

$callConfig->headerRedirect("index.php?option=com_banners&ferr=Banner updation failed");

}

} 

function DeleteBanner($id)

{
global $callConfig;

//$fieldnames=array('description'=>$post['description'],'status'=>$post['status']);


$res=$callConfig->deleteRecord(TPREFIX.TBL_BANNERS,'id',$id);

if($res==1)

{

$callConfig->headerRedirect("index.php?option=com_banners&err=Banner deleted successfully");

}

else

{

//sitesettingsClass::recentActivities('Admin User updation failed on >> '.DATE_TIME_FORMAT.'','e',$_SESSION['roletype']);

$callConfig->headerRedirect("index.php?option=com_banners&ferr=Banner deletion failed");

}

} 


function getBanners($id)

{

global $callConfig;

$query=$callConfig->selectQuery(TPREFIX.TBL_BANNERS,'*','id='.$id,'','','');

return $callConfig->getRow($query);

}
}
?>