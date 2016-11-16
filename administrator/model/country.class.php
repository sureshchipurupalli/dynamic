<?php 
class countryClass
{

function insertCountry($post)

{


global $callConfig;


$fieldnames=array('country_name'=>$post['country_name'],'status'=>'active');
//print_r($fieldnames);exit;
$res=$callConfig->insertRecord(TPREFIX.TBL_COUNTRY,$fieldnames); 

if($res!='')

{

//sitesettingsClass::recentActivities('Admin User created successfully on >> '.DATE_TIME_FORMAT.'','g',$_SESSION['roletype']);

$callConfig->headerRedirect("index.php?option=com_country&err= Record inserted successfully");

}

else

{

//sitesettingsClass::recentActivities('Aboutus creation failed on >> '.DATE_TIME_FORMAT.'','e',$_SESSION['roletype']);

$callConfig->headerRedirect("index.php?option=com_country&ferr=Record insertion failed");

}

}


function getAllCountries($sortfield,$order,$start,$limit)

{

global $callConfig;

//if($sortfield!="" && $order!="") $order=$sortfield.' '.$order;
$whr="status='active'";
$query=$callConfig->selectQuery(TPREFIX.TBL_COUNTRY,'*',$whr,$order,$start,$limit);

return $callConfig->getAllRows($query);

}


function updateCountry($post,$id)

{

global $callConfig;

//print_r($post);exit;


$fieldnames=array('country_name'=>$post['country_name'],'status'=>'active');
//print_r($fieldnames);exit;



//$whr="id=".$post['id'];

$res=$callConfig->updateRecord(TPREFIX.TBL_COUNTRY,$fieldnames,'id',$id);



if($res==1)

{

//sitesettingsClass::recentActivities('Aboutus updated successfully on >> '.DATE_TIME_FORMAT.'','g',$_SESSION['roletype']);

$callConfig->headerRedirect("index.php?option=com_country&err=Record updated successfully");

}

else

{

//sitesettingsClass::recentActivities('Aboutus updation failed on >> '.DATE_TIME_FORMAT.'','e',$_SESSION['roletype']);

$callConfig->headerRedirect("index.php?option=com_country&ferr=Record updation failed");

}

} 

function DeleteCountry($id)

{
global $callConfig;

//$fieldnames=array('description'=>$post['description'],'status'=>$post['status']);


$res=$callConfig->deleteRecord(TPREFIX.TBL_COUNTRY,'id',$id);

if($res==1)

{

$callConfig->headerRedirect("index.php?option=com_country&err=Rccord deleted successfully");

}

else

{

//sitesettingsClass::recentActivities('Admin User updation failed on >> '.DATE_TIME_FORMAT.'','e',$_SESSION['roletype']);

$callConfig->headerRedirect("index.php?option=com_country&ferr=Record deletion failed");

}

} 


function getCountry($id)

{

global $callConfig;

$query=$callConfig->selectQuery(TPREFIX.TBL_COUNTRY,'*','id='.$id,'','','');

return $callConfig->getRow($query);

}
}
?>