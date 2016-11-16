<?php 
class categoryClass
{

function insertCategory($post)

{


global $callConfig;

$bannerpic = $callConfig->freeimageUploadcomncode('category','image',"../uploads/homeimg/","../uploads/homeimg/thumbs/",$post['hdn_image'],'185','51'); 


$eventimage = $callConfig->freeimageUploadcomncode("currency",'currencyimage',"../uploads/homeimg/","../uploads/homeimg/thumbs/",$post['chdn_image'],'','');

$bannerimage = $callConfig->freeimageUploadcomncode("banner",'currencyimage',"../uploads/homeimg/","../uploads/homeimg/thumbs/",$post['chdn_image'],'','');

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
$upload=move_uploaded_file($file_tmp,"uploads/homeimg/".$file_name); 

if(isset($_FILES['profile1']))
{
	$file_name1 = $_FILES['profile1']['name'];
	$file_size1 =$_FILES['profile1']['size'];
	$file_tmp1 =$_FILES['profile1']['tmp_name'];
	$file_type1=$_FILES['profile1']['type'];

}      
$extensions = array("jpeg","jpg","png");      

$file_ext=explode('.',$_FILES['image']['name'])	;
$file_ext=end($file_ext);     
$file_ext=strtolower(end(explode('.',$_FILES['profile1']['name'])));  
$upload=move_uploaded_file($file_tmp,"uploads/homeimg/".$file_name1);       

$fieldnames=array('name'=>$post['banner'],'banner'=>$bannerimage,'description1'=>$post['description'],'image'=> $bannerpic,'image1'=> $eventimage,'status'=>$post['status']);
//print_r($fieldnames);exit;
$res=$callConfig->insertRecord(TPREFIX.TBL_CATEGORY,$fieldnames); 

if($res!='')

{

//sitesettingsClass::recentActivities('Admin User created successfully on >> '.DATE_TIME_FORMAT.'','g',$_SESSION['roletype']);

$callConfig->headerRedirect("index.php?option=com_category&err= Category created successfully");

}

else

{

//sitesettingsClass::recentActivities('Aboutus creation failed on >> '.DATE_TIME_FORMAT.'','e',$_SESSION['roletype']);

$callConfig->headerRedirect("index.php?option=com_category&ferr=Category creation failed");

}

}


function getAllCategory($sortfield,$order,$start,$limit)

{

global $callConfig;

//if($sortfield!="" && $order!="") $order=$sortfield.' '.$order;
$whr="status='active'";
$query=$callConfig->selectQuery(TPREFIX.TBL_CATEGORY,'*',$whr,$order,$start,$limit);

return $callConfig->getAllRows($query);

}


function updateCategory($post,$id)

{

global $callConfig;

//print_r($_FILES);exit;



// $profilepic = $callConfig->freeimageUploadcomncode('profile','image',"../uploads/profile/","../uploads/profile/thumbs/",$post['hdn_image'],185,51); 

$bannerpic = $callConfig->freeimageUploadcomncode('category','image',"../uploads/homeimg/","../uploads/homeimg/thumbs/",$post['hdn_image'],'185','51'); 


$eventimage = $callConfig->freeimageUploadcomncode("currency",'currencyimage',"../uploads/homeimg/","../uploads/homeimg/thumbs/",$post['chdn_image'],'','');

$bannerimage = $callConfig->freeimageUploadcomncode("banner",'bannerimage',"../uploads/homeimg/","../uploads/homeimg/thumbs/",$post['bhdn_image'],'','');

if(isset($_FILES['profile'])){
$file_name = $_FILES['profile']['name'];
$file_size =$_FILES['profile']['size'];
$file_tmp =$_FILES['profile']['tmp_name'];
$file_type=$_FILES['profile']['type'];
}      

$extensions = array("jpeg","jpg","png");      

$file_ext=explode('.',$_FILES['profile']['name'])	;
$file_ext=end($file_ext);     
$file_ext=strtolower(end(explode('.',$_FILES['profile']['name'])));  
$upload=move_uploaded_file($file_tmp,"uploads/homeimg/".$file_name);  

   

if(isset($_FILES['profile1'])){
$file_name1 = $_FILES['profile1']['name'];
$file_size1 = $_FILES['profile1']['size'];
$file_tmp1 =  $_FILES['profile1']['tmp_name'];
$file_type1=  $_FILES['profile1']['type'];
}      

$extensions = array("jpeg","jpg","png");      

$file_ext1=explode('.',$_FILES['profile1']['name'])	;
$file_ext1=end($file_ext1);     
$file_ext1=strtolower(end(explode('.',$_FILES['profile1']['name'])));  
$upload=move_uploaded_file($file_tmp1,"uploads/homeimg/".$file_name1);     

$fieldnames=array('name'=>$post['banner'],'banner'=>$bannerimage,'description1'=>$post['description'],'image'=>$bannerpic,'image1'=> $eventimage,'status'=>$post['status']);
//print_r($fieldnames);exit;



//$whr="id=".$post['id'];

$res=$callConfig->updateRecord(TPREFIX.TBL_CATEGORY,$fieldnames,'id',$id);



if($res==1)

{

//sitesettingsClass::recentActivities('Aboutus updated successfully on >> '.DATE_TIME_FORMAT.'','g',$_SESSION['roletype']);

$callConfig->headerRedirect("index.php?option=com_category&err=Banner updated successfully");

}

else

{

//sitesettingsClass::recentActivities('Aboutus updation failed on >> '.DATE_TIME_FORMAT.'','e',$_SESSION['roletype']);

$callConfig->headerRedirect("index.php?option=com_category&ferr=Banner updation failed");

}

} 

function DeleteCategory($id)

{
global $callConfig;

//$fieldnames=array('description'=>$post['description'],'status'=>$post['status']);


$res=$callConfig->deleteRecord(TPREFIX.TBL_CATEGORY,'id',$id);

if($res==1)

{

$callConfig->headerRedirect("index.php?option=com_category&err=Banner deleted successfully");

}

else

{

//sitesettingsClass::recentActivities('Admin User updation failed on >> '.DATE_TIME_FORMAT.'','e',$_SESSION['roletype']);

$callConfig->headerRedirect("index.php?option=com_category&ferr=Banner deletion failed");

}

} 


function getCategory($id)

{

global $callConfig;

$query=$callConfig->selectQuery(TPREFIX.TBL_CATEGORY,'*','id='.$id,'','','');

return $callConfig->getRow($query);

}
}
?>