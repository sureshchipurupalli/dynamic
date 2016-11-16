<?php 
class footerClass
{

function insertTabs($post)

{


global $callConfig;


$fieldnames=array('title'=>$post['tab'],'status'=>'active');
//print_r($fieldnames);exit;
$res=$callConfig->insertRecord(TPREFIX.TBL_FOOTERTABS,$fieldnames); 
$sql=mysql_query("insert into tb_footertabs(cat_id)select * id from tb_category where title='banner_name'");
//$getlanguagefrom = mysql_query("select * from tb_language where title like '%".$lfrom."%'");
		//$getlanguagefrom_res = mysql_fetch_array($getlanguagefrom);

if($res!='')

{

//sitesettingsClass::recentActivities('Admin User created successfully on >> '.DATE_TIME_FORMAT.'','g',$_SESSION['roletype']);

$callConfig->headerRedirect("index.php?option=com_footertabs&err= Record inserted successfully");

}

else

{

//sitesettingsClass::recentActivities('Aboutus creation failed on >> '.DATE_TIME_FORMAT.'','e',$_SESSION['roletype']);

$callConfig->headerRedirect("index.php?option=com_footertabs&ferr=Record insertion failed");

}

}


function getAlltabs($sortfield,$order,$start,$limit)

{

global $callConfig;

//if($sortfield!="" && $order!="") $order=$sortfield.' '.$order;
$whr="status='active'";
$query=$callConfig->selectQuery(TPREFIX.TBL_FOOTERTABS,'*',$whr,$order,$start,$limit);

return $callConfig->getAllRows($query);

}


function updateTab($post,$id)

{

global $callConfig;

//print_r($post);exit;


$fieldnames=array('title'=>$post['tab'],'status'=>'active');
//print_r($fieldnames);exit;



//$whr="id=".$post['id'];

$res=$callConfig->updateRecord(TPREFIX.TBL_FOOTERTABS,$fieldnames,'id',$id);



if($res==1)

{

//sitesettingsClass::recentActivities('Aboutus updated successfully on >> '.DATE_TIME_FORMAT.'','g',$_SESSION['roletype']);

$callConfig->headerRedirect("index.php?option=com_footertabs&err=Record updated successfully");

}

else

{

//sitesettingsClass::recentActivities('Aboutus updation failed on >> '.DATE_TIME_FORMAT.'','e',$_SESSION['roletype']);

$callConfig->headerRedirect("index.php?option=com_footertabs&ferr=Record updation failed");

}

} 

function DeleteTab($id)

{
global $callConfig;

//$fieldnames=array('description'=>$post['description'],'status'=>$post['status']);


$res=$callConfig->deleteRecord(TPREFIX.TBL_FOOTERTABS,'id',$id);

if($res==1)

{

$callConfig->headerRedirect("index.php?option=com_footertabs&err=Rccord deleted successfully");

}

else

{

//sitesettingsClass::recentActivities('Admin User updation failed on >> '.DATE_TIME_FORMAT.'','e',$_SESSION['roletype']);

$callConfig->headerRedirect("index.php?option=com_footertabs&ferr=Record deletion failed");

}

} 


function getTab($id)

{

global $callConfig;

$query=$callConfig->selectQuery(TPREFIX.TBL_FOOTERTABS,'*','id='.$id,'','','');

return $callConfig->getRow($query);

}
}
?>