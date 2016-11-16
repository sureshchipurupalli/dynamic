<?php

class userClass

{
	
  
  
  function signupforupdates($post)
  
  {
		global $callConfig;
		$fields= array(
			'emailid'=>$_POST['email'],
			'status'=>'Active'
		);
//	print_r($fields);exit;
		$res=$callConfig->insertRecord(TPREFIX.TBL_SUBSCRIBERS,$fields);	
//		print_r($res);
		if($res!="")
			{
			header("location:header.php?msg=Successfully Signedup for Updates" );
			}				
		else
			{ 
			header("location:header.php?msg=Signup failed");
			}
	}

	
	


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
	$whr="roletype='admin'";
	$query=$callConfig->selectQuery(TPREFIX.TBL_USERS,'*',$whr,$order,$start,$limit);

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

  $where="user_name='".$_POST['username']."' and password='".$_POST['password']."' ";

	 $query=$callConfig->selectQuery(TPREFIX.TBL_USERS,'*',$where,'','','');

	$row=$callConfig->getRow($query);

	//print_r($row);exit;

	if($row->id!="")

	{

	$_SESSION['id']=$row->user_id;

	$_SESSION['username']=$row->username;

	$_SESSION['email']=$row->email;

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

	$fieldnames=array('firstname'=>$post['fname'],'lastname'=>$post['lname'],'user_name'=>$post['uname'],'email'=>$post['email'],'phone_number'=>$post['phone'],'password'=>$callConfig->passwordEncrypt($post['password']),'status'=>'active','roletype'=>'admin');
	 //print_r($fieldnames);exit;
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

	function updateAdminUser($post,$id)

	{

	global $callConfig;
	

	// $profilepic = $callConfig->freeimageUploadcomncode('profile','image',"../uploads/profile/","../uploads/profile/thumbs/",$post['hdn_image'],185,51); 

	

$fieldnames=array('firstname'=>$post['fname'],'lastname'=>$post['lname'],'user_name'=>$post['uname'],'password'=>$callConfig->passwordEncrypt($post['password']),'status'=>'active','roletype'=>'admin');
//print_r($fieldnames);exit;

	

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
  
  function insertRegUser($post)

	{
		
		//print_r($_POST);exit;
	global $callConfig;

	// $profilepic = $callConfig->freeimageUploadcomncode('profile','image',"../uploads/profile/","../uploads/profile/thumbs/",$post['hdn_image'],185,51); 

	$fieldnames=array('firstname'=>$post['fname'],'lastname'=>$post['lname'],'password'=>$callConfig->passwordEncrypt($post['password']),'phone_number'=>$post['phone'],'status'=>'active');
	 //print_r($fieldnames);exit;
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

	

	$fieldnames=array('firstname'=>$post['fname'],'lastname'=>$post['lname'],'password'=>$callConfig->passwordEncrypt($post['password']),'phone_number'=>$post['phone'],'status'=>'active');
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
	
	function checklogin($post)
	  {
		 
		 global $callConfig;
		// print_r($post); exit;
		 
         $username = $_POST['email'];
         $password = $_POST['pswrd'];
		//exit;
		 if ($post['remember'] == 'on') 
			{ //echo 'cameee'; exit;
			/*
			* Set Cookie from here for one hour
			* */
			setcookie("loginname", $username, time()+(60*60*1));
			setcookie("pswrd", $password, time()+(60*60*1));  /* expire in 1 hour */
			}
			//echo 'eee'; exit;
		
		 $password=$callConfig->passwordEncrypt($password);
		 
		 if(!empty($username) && !empty($password))
		 {
			
			 $whr="email='".$username."'  and password='".$password."' ";
			 
			 
	 $query=$callConfig->selectQuery(TPREFIX.TBL_REGUSERS,'*',$whr,'','','');
			 
			 $res=$callConfig->getRow($query);
			 
		 }
		 
		 
		
		if($res!="")
		{
						
  		     $_SESSION['id'] = $res->id;
			 $_SESSION['email'] = $res->email;
 			 $_SESSION['fname'] = $res->firstname;
			 $_SESSION['username'] = $res->username;
			// $_SESSION['usertype'] = $res->usertype;
			
			
			
				

				header("location:index.php?msg=LogIn Successfull");
			//header("Location:".$_SERVER['HTTP_REFERER']."?msg=LogIn Successfull");
		//	header( "refresh:5;url=index.php?err=LogIn Successfull" );
			}  


		} 
		
	
		  
	 function checkloginid($post,$get)
	  {
		 
		 global $callConfig;
		// print_r($post); exit;
		 
         $username = $_POST['email'];
         $password = $_POST['pswrd'];
		//exit;
		 if ($post['remember'] == 'on') 
			{ //echo 'cameee'; exit;
			/*
			* Set Cookie from here for one hour
			* */
			setcookie("loginname", $username, time()+(60*60*1));
			setcookie("pswrd", $password, time()+(60*60*1));  /* expire in 1 hour */
			}
			//echo 'eee'; exit;
		
		 $password=$callConfig->passwordEncrypt($password);
		 
		 if(!empty($username) && !empty($password))
		 {
			
			 $whr="email='".$username."'  and password='".$password."' ";
			 
			 
	 $query=$callConfig->selectQuery(TPREFIX.TBL_REGUSERS,'*',$whr,'','','');
			 
			 $res=$callConfig->getRow($query);
			 
		 }
		 
		 
		
		if($res!="")
		{
						
  		     $_SESSION['id'] = $res->id;
			 $_SESSION['email'] = $res->email;
 			 $_SESSION['fname'] = $res->firstname;
			 $_SESSION['username'] = $res->username;
			// $_SESSION['usertype'] = $res->usertype;
			
			
			if($get['page']=='complaint'){
				header("location:complaint.php?msg=LogIn Successfull");
			}else{

				header("location:index.php?msg=LogIn Successfull");
		
			}  


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

  

  function insertSubscriber($post)

	{
		
		//print_r($_POST);exit;
	global $callConfig;

	// $profilepic = $callConfig->freeimageUploadcomncode('profile','image',"../uploads/profile/","../uploads/profile/thumbs/",$post['hdn_image'],185,51); 
	$email=$post['email'];
	$fieldnames=array('email'=>$email,'status'=>'active');
	 //print_r($fieldnames);exit;
	 if(($email)!=''){
	echo $res=$callConfig->insertRecord(TPREFIX.TBL_SUBSCRIBERS,$fieldnames);
	}
	if($res!="")

	{

	//	sitesettingsClass::recentActivities('Admin User created successfully on >> '.DATE_TIME_FORMAT.'','g',$_SESSION['roletype']);

			header("location:".SITEURL."/index.php?msg='Record Added successfully'" );
	}

	else

	{

		//sitesettingsClass::recentActivities('Admin User creation failed on >> '.DATE_TIME_FORMAT.'','e',$_SESSION['roletype']);

			header("location:".SITEURL."/index.php?msg='Failed'" );
	}

	}
	
	function ResetPassword($post)

	{
		
		//print_r($_POST);exit;
	global $callConfig;
	$post_email = $_POST['email'];
	$whr= "email='".$post_email."'";
	//echo $whr; exit;
	$query=$callConfig->selectQuery(TPREFIX.TBL_REGUSERS,'*',$whr,$order,$start,$limit);
	//echo $query; exit;
	$forgot_id = $callConfig->getRow($query);

	$password1=$callConfig->passwordEncrypt($_POST['password']);
	$fieldnames=array('password'=>$password1,'status'=>'active');
	$res=$callConfig->updateRecord(TPREFIX.TBL_REGUSERS,$fieldnames,'id',$_SESSION['id']);
//echo $res; exit;
	if($res!="")

	{

	//	sitesettingsClass::recentActivities('Admin User created successfully on >> '.DATE_TIME_FORMAT.'','g',$_SESSION['roletype']);

			header("location:".SITEURL."/index.php?msg='Password Changed Successfully'" );
	}

	else

	{

		//sitesettingsClass::recentActivities('Admin User creation failed on >> '.DATE_TIME_FORMAT.'','e',$_SESSION['roletype']);

			header("location:".SITEURL."/index.php?msg='Failed'" );
	}

	}
	
	function contactus($post){

	

  //	print_r($_POST);exit;

	

	global $callConfig;

	

	//$queryman=$callConfig->selectQuery(TPREFIX.TBL_SITESETTINGS,'*','','','','');

	//$sitedata=$callConfig->getRow($queryman);

	//echo $sitedata->website_email;

	//exit;

	

	

	$AdminEmail="jamadagni18@gmail.com";//$sitedata->website_email;

	$subject ="Contact Us";

	

	$message="Dear sir, Please go through my details
					<table>
					<tr>
					<td  colspan='2' align='left' valign='top'>Dear ".ucwords(Admin)."</td>
					</td>
					</tr>
					
					<tr>

					<td  colspan='2' align='left' valign='top'>Name: ".$_POST['name']."</td>

					</tr>

					<tr>

					<td  colspan='2' align='left' valign='top'>Email: ".$_POST['email']."</td>

					</tr>

					<tr>

					<td  colspan='2' align='left' valign='top'>Message: ".$_POST['description']."</td>

					</tr>";

					
	

			$headers  = 'MIME-Version: 1.0' . "\r\n";

			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

			$headers .= 'From:Dynamic_database <support@dynamic_database.com>' . "\r\n";

			//echo $message; //exit;

			

			 $adminMailSucess = mail($AdminEmail, $subject, $message, $headers,'-f jamadagni18@gmail.com');

			 

			 

	$UserEmail=$_POST['email'];

	$subject ="Contact Us";

	

	$message1="<table>
	<tr>
	<td>Thank u ".$_POST["name"]." Our admin team  will contact you as soon</td>
	
	<tr>
	<td>
	<br><br>
	Sincerely <br >

	Dynamic  Database<br > <br >
	</td>
	</tr>
	</table/>";

			$headers  = 'MIME-Version: 1.0' . "\r\n";

			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

			$headers .= 'From:Dynamic database <support@dynamic_database.com>' . "\r\n";

			//echo $message1; exit;

			

			 $userMailSucess = mail($UserEmail, $subject, $message1, $headers,'-f jamadagni18@gmail.com');

			 

			 

			 

			

			//if(mail($sitedate->website_email,"updates",$message,$headers))

			if($adminMailSucess or $userMailSucess)

			{

				header("Location:index.php?msg=Contacted Successfully");

			}else{

				header("Location:index.php?msg=Contact Failed");

			}

	

	

	}



	function forgotpassword($post)
	{
	
	global $callConfig;
	//print_r($post); //exit;
	
	 $where="email='".$_POST['email']."' and status='Active'";
	  $query=$callConfig->selectQuery(TPREFIX.TBL_REGUSERS,'*',$where,'id DESC','','');  
	 $row=$callConfig->getRow($query);
	// print_r($row);
	// echo $row->id; exit;
	
	 if($row->id!='') {
		 
		
		//print_r($_POST);exit;
					$to=$post['email'];
					$subject = "Dynamic Database | Forgot Password";
				    $message="<table cellspacing='0' cellpadding='5'  align='center' width='100%' border='0' style='border:1px solid #CCCCCC; border-collapse:collapse; 	font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px;'>
			  <tr>
			  <td colspan='2' align='left' valign='top' style='background-color:#230b03'><img src='".SITEURL."/images/about_10.png' width='180' height='55'/></td>
		
			  </tr>

<tr>
			  <td colspan='2' align='left' valign='top' >Dear ".$row->firstname." , Your Login Credentials are as follows....</td>
		
			  </tr>

 
						<tr>
						  <td width='15%' height='23' align='left' valign='middle'><strong> Email:</strong></td>
						  <td width='32%' height='23' align='left' valign='middle'>".$post['email']."</td>
						</tr>
						
						<tr>
						  <td width='15%' height='23' align='left' valign='middle'><strong> Password:</strong></td>
						  <td width='32%' height='23' align='left' valign='middle'>".$callConfig->passwordDecrypt($row->password)."</td>
						</tr>
						
												
						  </table></td>
					  
				  </tr>
				  <tr>
					<td valign='top' colspan='2' align='left'>&nbsp;</td>
				  </tr>
				  <tr>
					<td valign='top' colspan='2' align='left'>&nbsp;</td>
				  </tr>
				 
				  <tr>
					<td valign='top' colspan='2' align='left'>Thank You<br />
					</tr>
					<tr>
					<td valign='top' colspan='2' align='left'> Dynamic Database</td>
				  </tr>
				</table>";
				
					echo $message; 
					
						$headers  = 'MIME-Version: 1.0' . "\r\n";
						$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
					   $headers.= 'From:Dynamic Database <info@dynamic.com>' . "\r\n";
						
					if(mail($to, $subject, $message, $headers)){
						
						$callConfig->headerRedirect("login.php?msg=email");
					
                    
                 }
                  					
						
					} else {
						
						$callConfig->headerRedirect("login.php?msg=fail");
						
						
						
				
						
				 	}

}
					
					
function donatenowwithpayapl($post)
 
 {
 
    global $callConfig;
	$amt=$_POST['donate_amount'];
	
	if($_SESSION['CART_TEMP_RANDOM'] == "") 
{
	$_SESSION['CART_TEMP_RANDOM'] = rand(10, 10).sha1(crypt(time())).time();
}
if($amt=='others'){
	$amt=$_POST['donate_amount20'];
}
	$_SESSION['price'] = $amt;
	$_SESSION['username'] = $_POST['username'];
	$_SESSION['email'] = $_POST['email'];
	
		$fields= array(
		    'temprandid'=>$_SESSION['CART_TEMP_RANDOM'],
			'username'=>$_SESSION['username'],
			'email'=>$_SESSION['email'],
			'address'=>$_POST['address'],
			'zipcode'=>$_POST['zipcode'],
			'city'=>$_POST['city'],		
			'country'=>$_POST['country'],	
			'amount'=>$_SESSION['price'],									
			'status'=>'Active',
			'payment_status'=>'Inactive',
		);
print_r($fields);exit;
		$res=$callConfig->insertRecord(TPREFIX.TBL_ORDERS,$fields);	
		//print_r($res);exit;
		if($res!="")
			{
			header("location:paypal.php");
			}				
		else
			{ 
			header("location:index.php");
			}
 
 
 }
	
	
	
	
		 
		 
	
	
	
		   	
		 
	   
	
	
	

}

?>