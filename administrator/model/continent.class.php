<?php 
class continentClass
{

function insertContinent($post)

{


global $callConfig;


$fieldnames=array('title'=>$post['country_name'],'status'=>'active');
//print_r($fieldnames);exit;
$res=$callConfig->insertRecord(TPREFIX.TBL_CONTINENT,$fieldnames); 

if($res!='')

{

//sitesettingsClass::recentActivities('Admin User created successfully on >> '.DATE_TIME_FORMAT.'','g',$_SESSION['roletype']);

$callConfig->headerRedirect("index.php?option=com_continent&err= Record inserted successfully");

}

else

{

//sitesettingsClass::recentActivities('Aboutus creation failed on >> '.DATE_TIME_FORMAT.'','e',$_SESSION['roletype']);

$callConfig->headerRedirect("index.php?option=com_continent&ferr=Record insertion failed");

}

}


function getAllContinents($sortfield,$order,$start,$limit)

{

global $callConfig;

//if($sortfield!="" && $order!="") $order=$sortfield.' '.$order;
$whr="status='active'";
echo $query=$callConfig->selectQuery(TPREFIX.TBL_CONTINENT,'*','',$order,$start,$limit);

return $callConfig->getAllRows($query);

}


function updateContinent($post,$id)

{

global $callConfig;

//print_r($post);exit;


$fieldnames=array('title'=>$post['country_name'],'status'=>$post['status']);
//print_r($fieldnames);exit;



//$whr="id=".$post['id'];

$res=$callConfig->updateRecord(TPREFIX.TBL_CONTINENT,$fieldnames,'id',$id);



if($res==1)

{

//sitesettingsClass::recentActivities('Aboutus updated successfully on >> '.DATE_TIME_FORMAT.'','g',$_SESSION['roletype']);

$callConfig->headerRedirect("index.php?option=com_continent&err=Record updated successfully");

}

else

{

//sitesettingsClass::recentActivities('Aboutus updation failed on >> '.DATE_TIME_FORMAT.'','e',$_SESSION['roletype']);

$callConfig->headerRedirect("index.php?option=com_continent&ferr=Record updation failed");

}

} 

function DeleteContinent($id)

{
global $callConfig;

//$fieldnames=array('description'=>$post['description'],'status'=>$post['status']);


$res=$callConfig->deleteRecord(TPREFIX.TBL_CONTINENT,'id',$id);

if($res==1)

{

$callConfig->headerRedirect("index.php?option=com_continent&err=Record deleted successfully");

}

else

{

//sitesettingsClass::recentActivities('Admin User updation failed on >> '.DATE_TIME_FORMAT.'','e',$_SESSION['roletype']);

$callConfig->headerRedirect("index.php?option=com_continent&ferr=Record deletion failed");

}

} 


function getContinent($id)

{
global $callConfig;

$query=$callConfig->selectQuery(TPREFIX.TBL_CONTINENT,'*','id='.$id,'','','');

return $callConfig->getRow($query);

}
}
?>