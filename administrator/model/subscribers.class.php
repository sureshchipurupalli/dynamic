<?php 
class subscriberClass
{

function insertSubscriber($post)

{


global $callConfig;


$fieldnames=array(
'username'=>$post['username'],
'email'=>$post['email'],
'status'=>$post['status']
);
//print_r($fieldnames);exit;
$res=$callConfig->insertRecord(TPREFIX.TBL_SUBSCRIBERS,$fieldnames); 

if($res!='')

{

//sitesettingsClass::recentActivities('Admin User created successfully on >> '.DATE_TIME_FORMAT.'','g',$_SESSION['roletype']);

$callConfig->headerRedirect("index.php?option=com_subscribers&err= Subscribe created successfully");

}

else

{

//sitesettingsClass::recentActivities('Aboutus creation failed on >> '.DATE_TIME_FORMAT.'','e',$_SESSION['roletype']);

$callConfig->headerRedirect("index.php?option=com_subscribers&ferr=Subscribe creation failed");

}

}


function getAllSubscribers($sortfield,$order,$start,$limit)

{

global $callConfig;

//if($sortfield!="" && $order!="") $order=$sortfield.' '.$order;
$whr="status='active'";
$query=$callConfig->selectQuery(TPREFIX.TBL_SUBSCRIBERS,'*','',$order,$start,$limit);

return $callConfig->getAllRows($query);

}


function updateSubscriber($post,$id)

{

global $callConfig;

//print_r($post);exit;


$fieldnames=array(
'username'=>$post['username'],
'email'=>$post['email'],
'status'=>$post['status']
);
//print_r($fieldnames);exit;



//$whr="id=".$post['id'];

$res=$callConfig->updateRecord(TPREFIX.TBL_SUBSCRIBERS,$fieldnames,'id',$id);



if($res==1)

{

//sitesettingsClass::recentActivities('Aboutus updated successfully on >> '.DATE_TIME_FORMAT.'','g',$_SESSION['roletype']);

$callConfig->headerRedirect("index.php?option=com_subscribers&err=Subscribe updated successfully");

}

else

{

//sitesettingsClass::recentActivities('Aboutus updation failed on >> '.DATE_TIME_FORMAT.'','e',$_SESSION['roletype']);

$callConfig->headerRedirect("index.php?option=com_subscribers&ferr=Subscribe updation failed");

}

} 

function DeleteSubscribe($id)

{
global $callConfig;

//$fieldnames=array('description'=>$post['description'],'status'=>$post['status']);


$res=$callConfig->deleteRecord(TPREFIX.TBL_SUBSCRIBERS,'id',$id);

if($res==1)

{

$callConfig->headerRedirect("index.php?option=com_subscribers&err=Subscribe deleted successfully");

}

else

{

//sitesettingsClass::recentActivities('Admin User updation failed on >> '.DATE_TIME_FORMAT.'','e',$_SESSION['roletype']);

$callConfig->headerRedirect("index.php?option=com_subscribers&ferr=Subscribe deletion failed");

}

} 


function getSubscribers($id)

{

global $callConfig;

$query=$callConfig->selectQuery(TPREFIX.TBL_SUBSCRIBERS,'*','id='.$id,'','','');

return $callConfig->getRow($query);

}
}
?>