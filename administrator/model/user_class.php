<?php

class userClass

{



  function getCountAllTablesDataCount($tablename,$fieldname,$where)

  {

	global $callConfig;

	if($where!="")

	$whr=$where;

	$query=$callConfig->selectQuery($tablename,$fieldname,$whr,'','','');

	return $callConfig->getCount($query);

  }

/* function getAllAdminUsersList($usertype,$sortfield,$order,$start,$limit)

  {

	global $callConfig;

	if($sortfield!="" && $order!="") $order=$sortfield.' '.$order;

	if($usertype=="senior")

	$whr=" roletype='senior'"; 	

	if($usertype=="level2")

	$whr=" roletype='".$usertype."'";

	$query=$callConfig->selectQuery(TPREFIX.TBL_ADMIN,'*',$whr,$order,$start,$limit);

	return $callConfig->getAllRows($query);

  } */

 function getAllUsersList($sortfield,$order,$start,$limit)

  {

	global $callConfig;

	//if($sortfield!="" && $order!="") $order=$sortfield.' '.$order;
	//$whr="roletype='admin'";
	$query=$callConfig->selectQuery(TPREFIX.TBL_USERS,'*','',$order,$start,$limit);

	return $callConfig->getAllRows($query);

  }

  function getadminData($id)

  { 

	global $callConfig;

	 $query=$callConfig->selectQuery(TPREFIX.TBL_USERS,'*','id='.$id,'','','');

	 return $callConfig->getRow($query);

  } 
  

  function getAllAdminUsersListCount($usertype)

  {

	global $callConfig;

	if($usertype=="senior")

	$whr=" roletype='senior'"; 	

	if($usertype=="level2")

	$whr=" roletype='".$usertype."'";	

	$query=$callConfig->selectQuery(TPREFIX.TBL_ADMIN,'user_id',$whr,'','','');

	 return $callConfig->getCount($query);

  } 

	 function checkMemberLogin()

    {

    global $callConfig;
	$username=$_POST['username'];
	$password=$callConfig->passwordEncrypt($_POST['password']);
	 if(!empty($username) && !empty($password))
	 {

  $where="user_name='".$username."' and password='".$password."' ";

	 $query=$callConfig->selectQuery(TPREFIX.TBL_USERS,'*',$where,'','','');

	$row=$callConfig->getRow($query);
	}

	//print_r($row);exit;

	if($row->id!="")

	{

	$_SESSION['id']=$row->id;
	
	$_SESSION['firstname']=$row->firstname;
	
	$_SESSION['profile']=$row->profile_image;

	$_SESSION['username']=$row->username;

	$_SESSION['admin_email']=$row->email;

	$_SESSION['lastlogin']=$row->lastlogin;

 	$_SESSION['roletype']=$row->roletype;

	$_SESSION['adminmemberjoinedon']=$row->createdon;

	//sitesettingsClass::recentActivities($_SESSION['us_name'].' >> login sucessfully on >> '.DATE_TIME_FORMAT.'','g',$_SESSION['roletype']);

	

	if($_POST['redirect']=="article"){

 		header("location:index.php?option=com_articles");

		exit;

	}

	if($_SESSION['roletype']=="Head Quarters"){

		header("location:index.php?option=com_dashboard");

		exit;

	} 

	else if($_SESSION['roletype']=="National"){

		header("location:index.php?option=com_dashboard");

		exit;

	}

	else if($_SESSION['roletype']=="State"){

		header("location:index.php?option=com_dashboard");

		exit;

	}

	else if($_SESSION['roletype']=="City"){

		header("location:index.php?option=com_dashboard");

		exit;

	}

	 else {

		header("location:index.php?option=com_dashboard");

		

	}

	}

	else

	{

	header("location:index.php?ferr=Login failed, please check the login details");

	
	}

 } 

	 function userAuthentication()

	{

		if($_SESSION['admin_id']!="")

		{

		    if($_SESSION['roletype']=="Head Quarters")

			header("location:index.php?option=com_dashboard");

			else

			header("location:index.php?option=com_dashboard");

		}

	}

	function insertAdminUser($post)

	{
		
		//print_r($_POST);exit;
	global $callConfig;

	// $profilepic = $callConfig->freeimageUploadcomncode('profile','image',"../uploads/profile/","../uploads/profile/thumbs/",$post['hdn_image'],185,51); 
	
	
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
$upload=move_uploaded_file($file_tmp,"uploads/users/".$file_name);


	$fieldnames=array(
	'firstname'=>$post['fname'],
	'user_name'=>$post['uname'],
	'profile_image'=>$file_name,
	'email'=>$post['email'],
	'phone_number'=>$post['phone'],
	'password'=>$callConfig->passwordEncrypt($post['password']),
	'status'=>'active',
	'roletype'=>$post['roletype']
	);
	 //print_r($fieldnames);exit;
	// print_r($file_name); exit;
	$res=$callConfig->insertRecord(TPREFIX.TBL_USERS,$fieldnames); 

	if($res!="")

	{

	//	sitesettingsClass::recentActivities('Admin User created successfully on >> '.DATE_TIME_FORMAT.'','g',$_SESSION['roletype']);

		$callConfig->headerRedirect("index.php?option=com_adminlist&err=Admin User created successfully");

	}

	else

	{

		//sitesettingsClass::recentActivities('Admin User creation failed on >> '.DATE_TIME_FORMAT.'','e',$_SESSION['roletype']);

		$callConfig->headerRedirect("index.php?option=com_adminlist&ferr=Admin User creation failed");

	}

	}

	function updateEmployee($post,$id)

	{

	global $callConfig;



	// $profilepic = $callConfig->freeimageUploadcomncode('profile','image',"../uploads/profile/","../uploads/profile/thumbs/",$post['hdn_image'],185,51); 

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
$upload=move_uploaded_file($file_tmp,"uploads/users/".$file_name);



$fieldnames=array(
	'firstname'=>$post['fname'],
	'user_name'=>$post['uname'],
	'profile_image'=>$file_name,
	'email'=>$post['email'],
	'phone_number'=>$post['phone'],
	'password'=>$callConfig->passwordEncrypt($post['password']),
	'status'=>'active',
	'roletype'=>$post['roletype']
	);
//print_r($fieldnames);exit;
//echo $file_name;exit;

	

				//$whr="id=".$post['id'];

  $res=$callConfig->updateRecord(TPREFIX.TBL_USERS,$fieldnames,'id',$id);

           // $result=$callConfig->getRow($query); 

		//	if($profilepic!=$result->image){

    // $callConfig->imageCommonUnlink("../uploads/profile/","../uploads/profile/thumbs/",$result->image); 

		//	}

	//$res=$callConfig->updateRecord(TPREFIX.TBL_ADMIN,$fieldnames,'user_id',$post['hdn_id']);

	if($res==1)

	{

		//sitesettingsClass::recentActivities('Admin User updated successfully on >> '.DATE_TIME_FORMAT.'','g',$_SESSION['roletype']);

		$callConfig->headerRedirect("index.php?option=com_adminlist&err=Admin User updated successfully");

	}

	else

	{

		//sitesettingsClass::recentActivities('Admin User updation failed on >> '.DATE_TIME_FORMAT.'','e',$_SESSION['roletype']);

		$callConfig->headerRedirect("index.php?option=com_adminlist&ferr=Admin User updation failed");

	}

	} 

	function adminuserDelete($id)

	{

	global $callConfig;

	$res=$callConfig->deleteRecord(TPREFIX.TBL_USERS,'id',$id);

	if($res==1)

	{

	/* 	$whr="id=".$id;

    $query=$callConfig->selectQuery(TPREFIX.TBL_ADMIN,'*',$whr,'','','');

            $result=$callConfig->getRow($query); 

			

     $callConfig->imageCommonUnlink("../uploads/profile/","../uploads/profile/thumbs/",$result->image); 
 */
		



	//	sitesettingsClass::recentActivities('Admin User deleted successfully on >> '.DATE_TIME_FORMAT.'','e',$_SESSION['roletype']);

		$callConfig->headerRedirect("index.php?option=com_adminlist&err=Admin User deleted successfully");

	}

	else

	{

	//	sitesettingsClass::recentActivities('Admin User deletion failed on >> '.DATE_TIME_FORMAT.'','e',$_SESSION['roletype']);

		$callConfig->headerRedirect("index.php?option=com_adminlist&ferr=Admin User deletion failed");

	}

	}

  function getAdminUserData($id)

  {

	global $callConfig;

	$query=$callConfig->selectQuery(TPREFIX.TBL_ADMIN,'*','user_id='.$id,'','','');

	return $callConfig->getRow($query);

  }
  
  function updateAdminpassword1($post)

  {

	global $callConfig;
	$email= $_POST['email'];
	$password=$_POST['password'];
	$fieldnames=array('password'=>$callConfig->passwordEncrypt($post['password']));
	//print_r($fieldnames);exit;
	$whr="email=".$email;
	$res=$callConfig->updateRecord(TPREFIX.TBL_USERS,$fieldnames,'email',$email);

	if($res!=''){
	
	$callConfig->headerRedirect("index.php?option=com_login&ferr=Password changed successfully#close");
	
	}

  
  else{
  
  $callConfig->headerRedirect("index.php?option=com_login&err=Password updation failed#close");
  
  }
  }
  
  
  function resetAdminpassword($post)

	{
		
		//print_r($_POST);exit;
	global $callConfig;
	$post_email = $_POST['email'];
	$whr= "email='".$post_email."'";
	//echo $whr; exit;
	$query=$callConfig->selectQuery(TPREFIX.TBL_USERS,'*',$whr,$order,$start,$limit);
	//echo $query; exit;
	$forgot_id = $callConfig->getRow($query);

	$password1=$callConfig->passwordEncrypt($_POST['password']);
	$fieldnames=array('password'=>$password1,'status'=>'active');
	$res=$callConfig->updateRecord(TPREFIX.TBL_USERS,$fieldnames,'id',$forgot_id->id);
//echo $res; exit;
	if($res!="")

	{

	//	sitesettingsClass::recentActivities('Admin User created successfully on >> '.DATE_TIME_FORMAT.'','g',$_SESSION['roletype']);

			$callConfig->headerRedirect("index.php?option=com_login&ferr=Password changed successfully");
	}

	else

	{

		//sitesettingsClass::recentActivities('Admin User creation failed on >> '.DATE_TIME_FORMAT.'','e',$_SESSION['roletype']);

		  $callConfig->headerRedirect("index.php?option=com_login&err=Password updation failed");
	}

	}
	
  
  function insertRegUser($post)

	{
		
		//print_r($_POST);exit;
	global $callConfig;

	// $profilepic = $callConfig->freeimageUploadcomncode('profile','image',"../uploads/profile/","../uploads/profile/thumbs/",$post['hdn_image'],185,51); 
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
$upload=move_uploaded_file($file_tmp,"../uploads/users/".$file_name);       
	
	
	
	$fieldnames=array('firstname'=>$post['fname'],'lastname'=>$post['lname'],'password'=>$callConfig->passwordEncrypt($post['password']),'phone_number'=>$post['phone'],'profile_image'=>$file_name,'status'=>'active');
	// print_r($fieldnames);exit;
	$res=$callConfig->insertRecord(TPREFIX.TBL_REGUSERS,$fieldnames); 

	if($res!="")

	{

		//sitesettingsClass::recentActivities('Admin User created successfully on >> '.DATE_TIME_FORMAT.'','g',$_SESSION['roletype']);

		$callConfig->headerRedirect("index.php?option=com_regusers&err= User created successfully");

	}

	else

	{

		sitesettingsClass::recentActivities('Admin User creation failed on >> '.DATE_TIME_FORMAT.'','e',$_SESSION['roletype']);

		$callConfig->headerRedirect("index.php?option=com_regusers&ferr=User creation failed");

	}

	}
	
	 function updateRegUser($post,$id)

	{

	global $callConfig;
	
	//print_r($post);exit;



	// $profilepic = $callConfig->freeimageUploadcomncode('profile','image',"../uploads/profile/","../uploads/profile/thumbs/",$post['hdn_image'],185,51); 
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
$upload=move_uploaded_file($file_tmp,"../uploads/users/".$file_name);       
	
	

	$fieldnames=array('firstname'=>$post['fname'],'lastname'=>$post['lname'],'password'=>$callConfig->passwordEncrypt($post['password']),'phone_number'=>$post['phone'],'profile_image'=>$file_name,'status'=>'active');
	//print_r($fieldnames);exit;

	

				//$whr="id=".$post['id'];

	$res=$callConfig->updateRecord(TPREFIX.TBL_REGUSERS,$fieldnames,'id',$id);

          

	if($res==1)

	{

	//sitesettingsClass::recentActivities('Aboutus updated successfully on >> '.DATE_TIME_FORMAT.'','g',$_SESSION['roletype']);

		$callConfig->headerRedirect("index.php?option=com_regusers&err=User updated successfully");

	}

	else

	{

		//sitesettingsClass::recentActivities('Aboutus updation failed on >> '.DATE_TIME_FORMAT.'','e',$_SESSION['roletype']);

		$callConfig->headerRedirect("index.php?option=com_regusers&ferr=Users updation failed");

	}

	} 
  
  function getAllRegusers($sortfield,$order,$start,$limit)

  {

	global $callConfig;

	//if($sortfield!="" && $order!="") $order=$sortfield.' '.$order;
	$whr="status='active'";
	$query=$callConfig->selectQuery(TPREFIX.TBL_REGUSERS,'*',$whr,$order,$start,$limit);

	return $callConfig->getAllRows($query);

  }
  
   function getReguser($id)

  {

	global $callConfig;

	 $query=$callConfig->selectQuery(TPREFIX.TBL_REGUSERS,'*','id='.$id,'','','');

	return $callConfig->getRow($query);

  }
  
  
  function DeleteReguser($id)

	{

	global $callConfig;

	$res=$callConfig->deleteRecord(TPREFIX.TBL_REGUSERS,'id',$id);

	if($res==1)

	{

	/* 	$whr="id=".$id;

    $query=$callConfig->selectQuery(TPREFIX.TBL_ADMIN,'*',$whr,'','','');

            $result=$callConfig->getRow($query); 

			

     $callConfig->imageCommonUnlink("../uploads/profile/","../uploads/profile/thumbs/",$result->image); 
 */
		



	//	sitesettingsClass::recentActivities(' User deleted successfully on >> '.DATE_TIME_FORMAT.'','e',$_SESSION['roletype']);

		$callConfig->headerRedirect("index.php?option=com_regusers&err= User deleted successfully");

	}

	else

	{

	//	sitesettingsClass::recentActivities(' User deletion failed on >> '.DATE_TIME_FORMAT.'','e',$_SESSION['roletype']);

		$callConfig->headerRedirect("index.php?option=com_regusers&ferr=User deletion failed");

	}

	}

  

  function getNewLetterSubscribers()

  {

	  global $callConfig;

	  $query=$callConfig->selectQuery(TPREFIX.TBL_NEWSLETTER_SUBSCRIBER,'*','','','','');

	  return $callConfig->getAllRows($query);

  }

 function deletesubscribers($id)

  {

	global $callConfig;

	$res=$callConfig->deleteRecord(TPREFIX.TBL_NEWSLETTER_SUBSCRIBER,'id',$id);

	if($res==1)

	{

		sitesettingsClass::recentActivities('Job deleted successfully on >> '.DATE_TIME_FORMAT.'','e',$_SESSION['roletype']);

		$callConfig->headerRedirect("index.php?option=subscribe&msg=Subscribers deleted successfully");

	}

	else

	{

		sitesettingsClass::recentActivities('Job deletion failed on >> '.DATE_TIME_FORMAT.'','e',$_SESSION['roletype']);

		$callConfig->headerRedirect("index.php?option=subscribe&msg=Subscribers deletion failed");

	}



  }

   function regupdatestatus($get){

		

		global $callConfig;

		

		if($get['st']=="Active")

		

		$statusbe='Inactive';

		

		else

		

		$statusbe='Active';

		

		$fieldnames=array('status'=>$statusbe);

		

		$res=$callConfig->updateRecord(TPREFIX.TBL_REGISTERATION,$fieldnames,'id',$get['id']);

		

		if($res==1)

		

		{

		

		sitesettingsClass::recentActivities('User Status changed successfully on '.DATE_TIME_FORMAT.'','g',$_SESSION['roletype']);

		

		$callConfig->headerRedirect("index.php?option=com_regusers&err=User Status changed successfully");

		

		}

		

		else

		

		{

		

		sitesettingsClass::recentActivities('User Status changing failed on  '.DATE_TIME_FORMAT.'','e',$_SESSION['roletype']);

		

		$callConfig->headerRedirect("index.php?option=com_regusers&ferr=User Status changing failed");

		

		}

		

		}



  function getRegusers()

  {

	  global $callConfig;

	  $query=$callConfig->selectQuery(TPREFIX.TBL_REGISTERATION,'*','','id DESC','','');

	  return $callConfig->getAllRows($query);

  }

  
  
 
  function adminchangepwd()

  {

	 global $callConfig;

		$fields=array('password'=>$callConfig->passwordEncrypt($_POST['password']));

		$res=$callConfig->updateRecord(TPREFIX.TBL_ADMIN,$fields,'user_id',$_SESSION['admin_id']);

		if($res>0)

		{

			$callConfig->headerRedirect("index.php?option=com_adminlist&err=Password changed successfully");

		}

		else

		{

			$callConfig->headerRedirect("index.php?option=com_adminlist&err=Password changing failed");

		}

		

   }

   

   

   function getAllCountriesList() /*----------Get All Countries-----------*/

		{

			//echo $where;die;
            
			global $callConfig;

			$query=$callConfig->selectQuery(TPREFIX.TBL_COUNTRIES,'*',$where,$order,$start,$limit);
			return $callConfig->getAllRows($query);

		}

		function getAllStatesList($id)   /*----------Get All States-----------*/

		{
		     // echo $id; exit;
	        global $callConfig;
	        $whr='country_id="'.$id.'" and  status="Active"';
	
           $query=$callConfig->selectQuery(TPREFIX.TBL_STATE,'*',$whr,'','','');
	        return $callConfig->getAllRows($query);	
		
	     }

		function getAllCitiesList()   /*----------Get All Cities-----------*/

		{

			global $callConfig;

			$query=$callConfig->selectQuery(TPREFIX.TBL_CITIES,'*',$whr,$order,$start,$limit);

			return $callConfig->getAllRows($query);

		}

		

		

		 function getStateList($whr)

  {

	  global $callConfig;



	 $query=$callConfig->selectQuery(TPREFIX.TBL_STATES,'*',$whr,'','','');



	return $callConfig->getAllRows($query);



  	

  }

		

		

	function getAllAdminUsersList($usertype,$sortfield,$order,$start,$limit)

  {

  	//echo $usertype;

	global $callConfig;

	if($sortfield!="" && $order!="") $order=$sortfield.' '.$order;

	if($usertype=="National")

	$whr="roletype='".$usertype."' and status='Active'"; 	

	if($usertype=="State")

	$whr="roletype='".$usertype."' and status='Active'";

	if($usertype=="City")

	$whr="roletype='".$usertype."' and status='Active'";

	$query=$callConfig->selectQuery(TPREFIX.TBL_ADMIN,'*',$whr,$order,$start,$limit);

	return $callConfig->getAllRows($query);

  } 

  

  

   function getStateListid($id)

  {

	  global $callConfig;



	 $query=$callConfig->selectQuery(TPREFIX.TBL_STATES,'*','c_id='.$id,'','','');



	return $callConfig->getAllRows($query);



  	

  }

  

   function getCityList($whr)

  {

	  global $callConfig;



	 $query=$callConfig->selectQuery(TPREFIX.TBL_CITIES,'*',$whr,'','','');



	return $callConfig->getAllRows($query);



  	

  }

  

  function getCountryData($id)

  {

	  

	global $callConfig;

	 $query=$callConfig->selectQuery(TPREFIX.TBL_COUNTRIES,'*','id='.$id,'','','');		

	return $callConfig->getRow($query); 

	  	  

  }

  function getcountryname($id)

  {

	 //echo $id;

	global $callConfig;

	$query=$callConfig->selectQuery(TPREFIX.TBL_COUNTRIES,'*','id='.$id,'','','');		

	return $callConfig->getRow($query);   

	  	  

  }

  

  

  function getStateData($id)

  {

	  

	global $callConfig;

	$query=$callConfig->selectQuery(TPREFIX.TBL_STATES,'*','id='.$id,'','','');		

	return $callConfig->getRow($query); 

	  	  

  }

   function getCityData($id)

  {

	  

	global $callConfig;

	$query=$callConfig->selectQuery(TPREFIX.TBL_CITIES,'*','id='.$id,'','','');		

	return $callConfig->getRow($query); 

	  	  

  }

  

  

   

}

?>