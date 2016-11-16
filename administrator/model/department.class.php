<?php 
class departmentClass
{

function insertDepartment($post)

{


global $callConfig;


$fieldnames=array('cat_id'=>$post['category'],'department_name'=>$post['department_name'],'status'=>$post['status']);
//print_r($fieldnames);exit;
$res=$callConfig->insertRecord(TPREFIX.TBL_DEPARTMENTS,$fieldnames); 

if($res!='')

{

//sitesettingsClass::recentActivities('Admin User created successfully on >> '.DATE_TIME_FORMAT.'','g',$_SESSION['roletype']);

$callConfig->headerRedirect("index.php?option=com_departments&err= Record inserted successfully");

}

else

{

//sitesettingsClass::recentActivities('Aboutus creation failed on >> '.DATE_TIME_FORMAT.'','e',$_SESSION['roletype']);

$callConfig->headerRedirect("index.php?option=com_departments&ferr=Record insertion failed");

}

}


function getAlldepartments($sortfield,$order,$start,$limit)

{

global $callConfig;

//if($sortfield!="" && $order!="") $order=$sortfield.' '.$order;
$whr="status='active'";
$query=$callConfig->selectQuery(TPREFIX.TBL_DEPARTMENTS,'*',$whr,$order,$start,$limit);

return $callConfig->getAllRows($query);

}


function updateCountry($post,$id)

{

global $callConfig;

//print_r($post);exit;


$fieldnames=array('cat_id'=>$post['category'],'department_name'=>$post['department_name'],'status'=>$post['status']);
//print_r($fieldnames);exit;



//$whr="id=".$post['id'];

$res=$callConfig->updateRecord(TPREFIX.TBL_DEPARTMENTS,$fieldnames,'id',$id);



if($res==1)

{

//sitesettingsClass::recentActivities('Aboutus updated successfully on >> '.DATE_TIME_FORMAT.'','g',$_SESSION['roletype']);

$callConfig->headerRedirect("index.php?option=com_departments&err=Record updated successfully");

}

else

{

//sitesettingsClass::recentActivities('Aboutus updation failed on >> '.DATE_TIME_FORMAT.'','e',$_SESSION['roletype']);

$callConfig->headerRedirect("index.php?option=com_departments&ferr=Record updation failed");

}

} 

function DeleteCountry($id)

{
global $callConfig;

//$fieldnames=array('description'=>$post['description'],'status'=>$post['status']);


$res=$callConfig->deleteRecord(TPREFIX.TBL_DEPARTMENTS,'id',$id);

if($res==1)

{

$callConfig->headerRedirect("index.php?option=com_departments&err=Rccord deleted successfully");

}

else

{

//sitesettingsClass::recentActivities('Admin User updation failed on >> '.DATE_TIME_FORMAT.'','e',$_SESSION['roletype']);

$callConfig->headerRedirect("index.php?option=com_departments&ferr=Record deletion failed");

}

} 


function getDepartment($id)

{

global $callConfig;

$query=$callConfig->selectQuery(TPREFIX.TBL_DEPARTMENTS,'*','id='.$id,'','','');

return $callConfig->getRow($query);

}

function getallCategories()

  {

	global $callConfig;

	//if($sortfield!="" && $order!="") $order=$sortfield.' '.$order;
	$whr="status='active'  ";

	$query=$callConfig->selectQuery(TPREFIX.TBL_CATEGORY,'*',$whr,'','','');

	return $callConfig->getAllRows($query);

  }
  
  function getallCategoriesbyid($id)

  {

	global $callConfig;

	//if($sortfield!="" && $order!="") $order=$sortfield.' '.$order;
	$whr="status='active' and id=".$id." ";

	$query=$callConfig->selectQuery(TPREFIX.TBL_CATEGORY,'*',$whr,'','','');

	return $callConfig->getRow($query);

  }

}
?>