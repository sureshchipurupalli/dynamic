<?php
class frontendClass
{ 

   function getBanner($id)
  {
	 
	 global $callConfig;
	 //$whr = "status='Active' and id=".$id."";
	 $whr = "status='Active' and id=16";
	 $query=$callConfig->selectQuery(TPREFIX.TBL_BANNERS,'*',$whr,'','','');
	return $callConfig->getRow($query);
	  
  }
function getsitesettings()
	 {
	 global $callConfig;
	 $query=$callConfig->selectQuery(TPREFIX.TBL_SITESETTINGS,'*','','','','');
	// echo $query; exit;
	 return $callConfig->getAllRows($query);
	 }
	 
 function getallworks()
  {
	 global $callConfig;
	  $whr = "status='Active'";
	 $query=$callConfig->selectQuery(TPREFIX.TBL_WORKS,'*',$whr,'id DESC','','');
	return $callConfig->getAllRows($query);
	  
  }

  function signupdetails($post)
  {
	//print_r($_POST);exit();
	 print'<pre>';
	 global $callConfig;
	 
		$password1=$callConfig->passwordEncrypt($_POST['password']);
		$password2=$callConfig->passwordEncrypt($_POST['confirm_password']);
		$username = $_POST['firstname'].' '.$_POST['lastname'];
		$fieldnames=array(
		'username'=>$username,
		'firstname'=>mysql_real_escape_string($_POST['fname']),
		'lastname'=>$post['lname'],
		'address'=>$post['address'],
		'email'=>$post['email'],
		'password'=>$password1,
		'phone_number'=>$post['phone'],		
		'status'=>'Active'
	 );
	//print_r($fieldnames); exit;
	
	$res=$callConfig->insertRecord(TPREFIX.TBL_REGUSERS,$fieldnames);
	//print_r($res);exit;
	
	
	/* $qry=mysql_query("select * from tb_mail_templates where id='2'")or(die(mysql_error()));
	$fet=mysql_fetch_object($qry);
	
	
	$msg=$fet->description;
	$head=$fet->title;
	$msg=str_replace("{member_name}",$_POST['firstname'].$_POST['lastname'],$msg);
	$msg=str_replace("{username}",$_POST['email'],$msg);
	$msg=str_replace("{password}",$_POST['password'],$msg);
	$msg=str_replace("{verify_link}",SITEURL."/index.php?apid=".$insert_id,$msg);
	
	$message=$head.$msg;
		//echo $message; exit;					
	//$subject="MAOZINHA | Obrigado por te registares";
	$subject=$fet->subject;
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= 'From:EYAAB <support@eyaab.com>' . "\r\n"; 
	//exit; */
		
	if($res!="")
		{
		
		header("location:".SITEURL."/login.php?msg='Record Added successfully'" );
		} 
				
	else
		{ 
			header("location:".SITEURL."/registration.php?msg='Failed'" );
		}
  }
	 
	 
	function updateuserdetails($post,$id)
  {
	//print_r($_POST);exit();
	 print'<pre>';
	 global $callConfig;
	 
		$password1=$callConfig->passwordEncrypt($_POST['password']);
		$password2=$callConfig->passwordEncrypt($_POST['confirm_password']);
		$username = $_POST['firstname'].' '.$_POST['lastname'];
		$fieldnames=array(
		'firstname'=>mysql_real_escape_string($_POST['fname']),
		'lastname'=>$post['lname'],
		'address'=>$post['address'],
		'email'=>$post['email'],
		
		'phone_number'=>$post['phone'],		
		'status'=>'Active'
	 );
	//print_r($fieldnames); exit;
	
	 $res=$callConfig->updateRecord(TPREFIX.TBL_REGUSERS,$fieldnames,'id',$id);
	//print_r($res);exit;
	
	
	/* $qry=mysql_query("select * from tb_mail_templates where id='2'")or(die(mysql_error()));
	$fet=mysql_fetch_object($qry);
	
	
	$msg=$fet->description;
	$head=$fet->title;
	$msg=str_replace("{member_name}",$_POST['firstname'].$_POST['lastname'],$msg);
	$msg=str_replace("{username}",$_POST['email'],$msg);
	$msg=str_replace("{password}",$_POST['password'],$msg);
	$msg=str_replace("{verify_link}",SITEURL."/index.php?apid=".$insert_id,$msg);
	
	$message=$head.$msg;
		//echo $message; exit;					
	//$subject="MAOZINHA | Obrigado por te registares";
	$subject=$fet->subject;
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= 'From:EYAAB <support@eyaab.com>' . "\r\n"; 
	//exit; */
		
	if($res!="")
		{
		
		header("location:".SITEURL."/index.php?msg='Profile updated successfully'" );
		} 
				
	else
		{ 
			header("location:".SITEURL."/profile.php?msg='Profile updatation Failed'" );
		}
  }
  
  

function getuserdetails(){
		
		global $callConfig;
		$whr= "id=".$_SESSION['id']."" ;
	 $query=$callConfig->selectQuery(TPREFIX.TBL_REGUSERS,'*',$whr,'','','');
	 return $callConfig->getRow($query);
	}  
	 
	 
	function getcategories(){
		
		global $callConfig;
	 $query=$callConfig->selectQuery(TPREFIX.TBL_CATEGORYPAGE,'*','','','','');
	 return $callConfig->getAllRows($query);
	}
	
	function getsubcategoriesofcategories($id){
		
		global $callConfig;
		$whr= "category=".$id." and status='Active'";
	 $query=$callConfig->selectQuery(TPREFIX.TBL_SUBCATEGORYPAGE,'*',$whr,'','','');
	 //print_r($query);exit;
	 return $callConfig->getAllRows($query);
	}
	
	function getcontent(){
		
		global $callConfig;
		$whr = "status='Active' and id='22'";
	 $query=$callConfig->selectQuery(TPREFIX.TBL_CONTENTPAGE,'*',$whr,'','','');
	 return $callConfig->getRow($query);
	}
	 
	
	function getcategoryid($cid){

		global $callConfig;
		$whr= "id=".$cid. " and status='Active'";
	 	$query=$callConfig->selectQuery(TPREFIX.TBL_CATEGORYPAGE,'*',$whr,'','','');
		//print_r($query);exit;
		return $callConfig->getRow($query);						

		
	}
	
	function getsubcategoryid($sid){

		global $callConfig;
		$whr= "id=".$sid. " and status='Active'";
	 	$query=$callConfig->selectQuery(TPREFIX.TBL_SUBCATEGORYPAGE,'*',$whr,'','','');
		//print_r($query);exit;
		return $callConfig->getRow($query);						

		
	}
	

	function getproductodcatsubcat($cid,$sid){
		
		
		global $callConfig;
		$whr= "category=".$cid." and subcategory=".$sid." and status='Active'";
	 	$query=$callConfig->selectQuery(TPREFIX.TBL_PRODUCT,'*',$whr,'','','');
		//print_r($query);exit;
		return $callConfig->getAllRows($query);					
		
	}
	
	
	function getproductodcatsubcatstartlimit($cid,$sid,$start,$limit){
		
		
		global $callConfig;
		$whr= "category=".$cid." and subcategory=".$sid." and status='Active'";
	 	$query=$callConfig->selectQuery(TPREFIX.TBL_PRODUCT,'*',$whr,'',$start,$limit);
		//print_r($query);exit;
		return $callConfig->getAllRows($query);					
		
	}
	
	
	function getproductid($pid){
		
		
		global $callConfig;
		$whr= "id=".$pid. " and status='Active'";
	 	$query=$callConfig->selectQuery(TPREFIX.TBL_PRODUCT,'*',$whr,'','','');
		//print_r($query);exit;
		return $callConfig->getAllRows($query);					
		
	}
	
	function getinfoid($pid){
		
		
		global $callConfig;
		$whr= "id=".$pid. " and status='Active'";
	 	$query=$callConfig->selectQuery(TPREFIX.TBL_PRODUCT,'*',$whr,'','','');
		//print_r($query);exit;
		return $callConfig->getRow($query);					
		
	}
	
	
	 function getwhychooseus()
  {
	 global $callConfig;
	  $whr = "status='Active'";
	 $query=$callConfig->selectQuery(TPREFIX.TBL_CHOOSE,'*',$whr,'id DESC','','');
	return $callConfig->getAllRows($query);
	  
  }
	
	
	
	
	 function getwhyfind()
  {
	 global $callConfig;
	  $whr = "status='Active'";
	 $query=$callConfig->selectQuery(TPREFIX.TBL_FIND,'*',$whr,'id DESC','','');
	return $callConfig->getAllRows($query);
	  
  }
	
	function getuseridofproduct($id){
		
		global $callConfig;
		$whr= "id=".$id." and status='Active'";
	 $query=$callConfig->selectQuery(TPREFIX.TBL_USERS,'*',$whr,'','','');
	 //print_r($query);exit;
	 return $callConfig->getAllRows($query);
	}
	
	
	function gettranslaytoruser(){
		
		global $callConfig;
		$whr= "usertype='translator' and status='Active'";
	 $query=$callConfig->selectQuery(TPREFIX.TBL_USERS,'*',$whr,'','','');
	 //print_r($query);exit;
	 return $callConfig->getAllRows($query);
	}
	
	
	
	function getaboutus(){
		
		global $callConfig;
		$whr= "id='4' and status='Active'";
	 $query=$callConfig->selectQuery(TPREFIX.TBL_ABOUTUS,'*',$whr,'','','');
	 //print_r($query);exit;
	 return $callConfig->getRow($query);
	}
	
	
	
	function gettranslaytoruserstartlimit($start,$limit){
		
		global $callConfig;
		$whr= "usertype='translator' and status='Active' order by id";
	 $query=$callConfig->selectQuery(TPREFIX.TBL_USERS,'*',$whr,'',$start,$limit);
	 //print_r($query);exit;
	 return $callConfig->getAllRows($query);
	}
	
	function gettranslaytoruserstartlimitsession($start,$limit){
		
		global $callConfig;
		$whr= "usertype='translator' and id!=".$_SESSION['user_id']." and status='Active' order by id";
	 $query=$callConfig->selectQuery(TPREFIX.TBL_USERS,'*',$whr,'',$start,$limit);
	 //print_r($query);exit;
	 return $callConfig->getAllRows($query);
	}
	
	
	
	function getinterpreteruserstartlimit($start,$limit){
		
		global $callConfig;
		$whr= "usertype='interpreter' and status='Active' order by id";
	 $query=$callConfig->selectQuery(TPREFIX.TBL_USERS,'*',$whr,'',$start,$limit);
	 //print_r($query);exit;
	 return $callConfig->getAllRows($query);
	}
	
	function getinterpreteruserstartlimitsession($start,$limit){
		
		global $callConfig;
		$whr= "usertype='interpreter' and id!=".$_SESSION['user_id']." and status='Active' order by id";
	$query=$callConfig->selectQuery(TPREFIX.TBL_USERS,'*',$whr,'',$start,$limit);
	 //print_r($query);exit;
	 return $callConfig->getAllRows($query);
	}
	
	
	 function getalltranslatorsdetails($order,$start,$limit)
	 {
	 //echo $id;
	 global $callConfig;
	$whr= "usertype='translator' and status='Active'";
	 $query=$callConfig->selectQuery(TPREFIX.TBL_USERS,'*',$whr,'',$start,$limit);
	 return $callConfig->getAllRows($query);
	 }
	 
	 
	
	function getalllanguages(){
		
		global $callConfig;
		$whr= "status='Active'";
	 $query=$callConfig->selectQuery(TPREFIX.TBL_LANGUAGE,'*',$whr,'','','');
	 //print_r($query);exit;
	 return $callConfig->getAllRows($query);
	}
	
	function getallcountries(){
		
		global $callConfig;
		$whr= "status='Active'";
	 $query=$callConfig->selectQuery(TPREFIX.TBL_COUNTRY,'*',$whr,'','','');
	 //print_r($query);exit;
	 return $callConfig->getAllRows($query);
	}
	
	function getallstates(){
		
		global $callConfig;
		$whr= "status='Active'";
	 $query=$callConfig->selectQuery(TPREFIX.TBL_STATE,'*',$whr,'','','');
	 //print_r($query);exit;
	 return $callConfig->getAllRows($query);
	}
	
	function getallcities(){
		
		global $callConfig;
		$whr= "status='Active'";
	 $query=$callConfig->selectQuery(TPREFIX.TBL_CITY,'*',$whr,'','','');
	 //print_r($query);exit;
	 return $callConfig->getAllRows($query);
	}
	
	function postclassified($post)
	  {
		 
		 global $callConfig;
	
				$qry="select max(product_id)as cnt from tb_classifieds";
				$m_qry=mysql_query($qry);
				$fetch=mysql_fetch_object($m_qry);
				if($fetch->cnt >0){
				$value=$fetch->cnt+1;	
				$unique_id="P000".$value;	
				}else{
				$value=1;
				$unique_id="P0001";	
				}
				
				
				 $_SESSION['CART_TEMP_RANDOM'] = rand(10, 10).sha1(crypt(time())).time();
				
				
				
				$titleslug=$callConfig->remove_special_symbols($post['title']);
				
$eventimage = $callConfig->freeimageUploadcomncode("product",'image',"uploads/product/","uploads/product/thumbs/",$post['hdn_image'],'401','235');
		
	
		//$eventvideo = $callConfig->freeimageUploadcomncode("product",'video',"uploads/product/","uploads/product/thumbs/",$post['hdn_video'],'401','235');

		 $expiry = date("Y-m-d H:i:s", strtotime( date( "Y-m-d H:i:s", strtotime( date("Y-m-d H:i:s") ) ) . "+1 month" ) );
				
				
				$fieldnames=array(
				'title'=>mysql_real_escape_string($post['title']),
				'product_id'=>$value,
				'category'=>$post['category'],
				'subcategory'=>$post['subcategory'],
				'video'=>$eventvideo,
				'image'=>$eventimage,
				'price'=>$post['price'],
				'unique_id'=>$unique_id,
				'user_id'=>$post['user'],
				'description'=>$post['description'],
				'title_slug'=>$titleslug,
				'location'=>$post['location'],
				'address'=>$post['address'],
				'email'=>$post['email'],
				'website'=>$post['website'],
				'rand_id'=>$_SESSION['CART_TEMP_RANDOM'],
				'posted_date'=>date("Y-m-d H:i:s"),
				'expired_date'=>$expiry,
				'status'=>Active,
				/*'orderno'=>'',
				'transactionid'=>'',
				'payment_status'=>Inactive,
				'payment_type'=>'',
				'payment_date'=>''*/
				);
				//print_r($fieldnames);exit;
			   $resp =$callConfig->insertRecord(TPREFIX.TBL_PRODUCT,$fieldnames);
			    $tc_id=mysql_insert_id();
				
			   if($resp!=""){
			   		$getcount = $post['imgcount1'];
		
					for($j=1;$j<=$getcount;$j++)
						{
					
					 $prod_image= $callConfig->freeimageUploadcomncode('product','upload'.$j,"uploads/product/","uploads/product/thumbs/",$_POST['hdnn_image'.$j],'449','227');
					
					
					if( $prod_image !="")
					{	
						$fieldnames=array(
						'c_id'=>$tc_id,
						'image'=>$prod_image
						//'imagename'=>$_POST['pro_name'.$j]=>$eveid,'img'
						);
						//print_r($fieldnames); //exit;
						 $res =$callConfig->insertRecord(TPREFIX.TBL_PRODUCT_IMAGE,$fieldnames);
						  // print_r($res);exit;
					
					}
					
				   }
				   
			  $quer ="select count(user_id) as cunt from tb_classifieds where user_id=".$_SESSION['user_id']." ";
			 $co_query= mysql_query($quer);
			 $count=mysql_fetch_object($co_query);
			 
		if( $count->cunt > 3){
		
			header("Location:".SITEURL."/payment.php?id=".$tc_id."&type=classified");
		}
		else{
	
		header("Location:".SITEURL."/thankyou.php?id=".$tc_id."&type=classified");
		}
	
			  
  	}

}

	function getproduct($id)

    {
	global $callConfig;
	$query=$callConfig->selectQuery(TPREFIX.TBL_PRODUCT,'*','id='.$id,'','','');
	return $callConfig->getRow($query);
    }
	
	function geteventimages($id)	
	{
	
		global $callConfig;
		$whr="c_id='".$id."'";
		 $query=$callConfig->selectQuery(TPREFIX.TBL_PRODUCT_IMAGE,'*',$whr,'','','');
		 //print_r($query);exit;
		 
	    return $callConfig->getAllRows($query);
	}
	
	
	function geteventDatacount($id)
  {
	global $callConfig;
   $query=$callConfig->selectQuery(TPREFIX.TBL_PRODUCT_IMAGE,'*','c_id='.$id,'','','');
	return $callConfig->getCount($query);
  }
	
	
	
	
	function postinsertion(){
	
	 global $callConfig;

		$createdOn= date("Y-m-d H:i:s");

	$fieldnames=array(
				
	 'clientid'=>$_SESSION['user_id'],
 	 'languagefrom'=>$_POST['langfrom'],
 	 'languageto'=>$_POST['langto'],
	 'country'=>$_POST['country'],
	 'jobtitle'=>mysql_real_escape_string($_POST['jobname']),
	 'price'=>mysql_real_escape_string($_POST['price']),	 
	 'jobdesc'=>mysql_real_escape_string($_POST['description']),
	 'invitedesc'=>mysql_real_escape_string($_POST['invitedesc']),
	 'timeline'=>mysql_real_escape_string($_POST['duration']),
	 'jobstatus'=>mysql_real_escape_string($_POST['jobstatus']),
	 'postedon'=>$createdOn,
	 'preview_status'=>'Unseen',
	 'status'=>'Active',
				);
				//print_r($fieldnames);
	
	$resp =$callConfig->insertRecord(TPREFIX.TBL_POSTJOB,$fieldnames);
	$i_id=mysql_insert_id();
	if($resp!=""){
	
	 $quer ="select count(clientid) as cunt from tb_postjob where clientid=".$_SESSION['user_id']." ";
			 $co_query= mysql_query($quer);
			 $count=mysql_fetch_object($co_query);
			 
		if( $count->cunt > 3){
		
		header("Location:".SITEURL."/payment.php?id=".$i_id."&type=postjob");
			   }
			
			else {
			
				header("Location:".SITEURL."/jobinvitepage.php?id=".$i_id."&type=postjob&ret=success");
				}
	
		}
	}
	
	
	
	function getprofiledetails($id){
		
		global $callConfig;

		$whr= "id='".$id."' and status='Active'";
	 $query=$callConfig->selectQuery(TPREFIX.TBL_USERS,'*',$whr,'','','');
	 //print_r($query);exit;
	 return $callConfig->getRow($query);
	}
	
	function profileupdate($id,$post){
		
		global $callConfig;
		//$profileimage= $callConfig->freeimageUploadcomncode("profile",'image',"uploads/profile/","uploads/profile/thumbs/",$post['hdn_image'],'','');	
		
		$fieldnames=array(
			'username'=>$post['username'],
			//'image'=>$profileimage,
			'email'=>$post['email'],			
		);
		//print_r($fieldnames);exit;
		$resp =$callConfig->updateRecord(TPREFIX.TBL_USERS,$fieldnames,'id',$id);
		
		if($resp!=""){
		header("Location:".SITEURL."/myprofile.php?ret=update success");
			   }
			
			else {
			
				header("Location:".SITEURL."/myprofile.php?ret= update failed");
				}
	}
	
	function profileinfoupdate($post,$id){
		
		global $callConfig;

		$fieldnames=array(
			'zipcode'=>$post['zipcode'],
			'address1'=>$post['address1'],
			'address2'=>$post['address2'],
			'city'=>$post['city'],
			'country'=>$post['country'],
			'phoneno'=>$post['phone'],			
		);
		//print_r($fieldnames);exit;
		$resp =$callConfig->updateRecord(TPREFIX.TBL_USERS,$fieldnames,'id',$id);
		
		if($resp!=""){
		header("Location:".SITEURL."/myprofile.php?ret=update success");
			   }
			
			else {
			
				header("Location:".SITEURL."/myprofile.php?ret= update failed");
				}
	}
	
	function getbankdetails($id){
		
		global $callConfig;

		$whr= "user_id='".$id."' ";
	 $query=$callConfig->selectQuery(TPREFIX.TBL_BANKDETAILS,'*',$whr,'','','');
	 //print_r($query);exit;
	 return $callConfig->getRow($query);
	}
	
	
	
	function bankinfoupdate($post,$id){
		
		global $callConfig;
		$fieldnames=array(
			'bank_name'=>$_POST['bankname'],
			'bank_account_number'=>$_POST['accountno'],
			'bank_ifsc'=>$_POST['ifsc'],			
		);
		//print_r($fieldnames);//exit;
		$resp =$callConfig->updateRecord(TPREFIX.TBL_BANKDETAILS,$fieldnames,'user_id',$id);
		//exit;
		if($resp!=""){
		header("Location:".SITEURL."/myprofile.php?ret=update success");
			   }
			
			else {
			
				header("Location:".SITEURL."/myprofile.php?ret= update failed");
				}
	}
	
	
	
	
	
	function gettranslaytoruserstartlimitsearch($country,$lfrom,$lto,$min,$max,$start,$limit){
		
		global $callConfig;
		
		if($lfrom!=''){
		$getlanguagefrom = mysql_query("select * from tb_language where title like '%".$lfrom."%'");
		$getlanguagefrom_res = mysql_fetch_array($getlanguagefrom);
		}
		if($lto!=''){
		$getlanguageto = mysql_query("select * from tb_language where title like '%".$lto."%'");
		$getlanguageto_res = mysql_fetch_array($getlanguageto);
		}
		if($lfrom == '' && $lto == '' && $country != ''){
		$whr= "usertype = 'translator' and status = 'Active' and country like '%".$country."%' and  price BETWEEN $min AND $max order by id";
		} 
		else if($lfrom == '' && $lto != '' && $country != ''){
		$whr= "usertype = 'translator' and status = 'Active' and country like '%".$country."%' and languageto = '".$getlanguageto_res['id']."' and  price BETWEEN $min AND $max  order by id";
		} 
		else if($lfrom != '' && $lto == '' && $country != ''){
	$whr= "usertype = 'translator' and status = 'Active' and country like '%".$country."%' and languagefrom = '".$getlanguagefrom_res['id']."' and  price BETWEEN $min AND $max  order by id";
		} 
		else if($lfrom == '' && $lto == '' && $country == ''){
		$whr= "usertype = 'translator' and status = 'Active' and  price BETWEEN $min AND $max  order by id";
		} 
		else if($lfrom == '' && $lto != '' && $country == ''){
		$whr= "usertype = 'translator' and status = 'Active'  and languageto = '".$getlanguageto_res['id']."'  and  price BETWEEN $min AND $max  order by id";
		} 
		else if($lfrom != '' && $lto == '' && $country == ''){
	    $whr= "usertype = 'translator' and status = 'Active'  and languagefrom = '".$getlanguagefrom_res['id']."'  and  price BETWEEN $min AND $max  order by id";
		}
		else{
		$whr= "usertype = 'translator' and status = 'Active' and country like '%".$country."%' and languagefrom = '".$getlanguagefrom_res['id']."' and languageto = '".$getlanguageto_res['id']."'  and  price BETWEEN $min AND $max  order by id";
		
		}
	   $query=$callConfig->selectQuery(TPREFIX.TBL_USERS,'*',$whr,'',$start,$limit);
	 return $callConfig->getAllRows($query);
	}
	
	
	
	function getinterpreteruserstartlimitsearch($country,$lfrom,$lto,$min,$max,$start,$limit){
		
		global $callConfig;
		
		if($lfrom!=''){
		$getlanguagefrom = mysql_query("select * from tb_language where title like '%".$lfrom."%'");
		$getlanguagefrom_res = mysql_fetch_array($getlanguagefrom);
		}
		if($lto!=''){
		$getlanguageto = mysql_query("select * from tb_language where title like '%".$lto."%'");
		$getlanguageto_res = mysql_fetch_array($getlanguageto);
		}
		if($lfrom == '' && $lto == '' && $country != ''){
		$whr= "usertype = 'interpreter' and status = 'Active' and country like '%".$country."%' and  price BETWEEN $min AND $max order by id";
		} 
		else if($lfrom == '' && $lto != '' && $country != ''){
		$whr= "usertype = 'interpreter' and status = 'Active' and country like '%".$country."%' and languageto = '".$getlanguageto_res['id']."' and  price BETWEEN $min AND $max  order by id";
		} 
		else if($lfrom != '' && $lto == '' && $country != ''){
	   $whr= "usertype = 'interpreter' and status = 'Active' and country like '%".$country."%' and languagefrom = '".$getlanguagefrom_res['id']."' and  price BETWEEN $min AND $max  order by id";
		} 
		else if($lfrom == '' && $lto == '' && $country == ''){
		$whr= "usertype = 'interpreter' and status = 'Active' and  price BETWEEN $min AND $max  order by id";
		} 
		else if($lfrom == '' && $lto != '' && $country == ''){
		$whr= "usertype = 'interpreter' and status = 'Active'  and languageto = '".$getlanguageto_res['id']."'  and  price BETWEEN $min AND $max  order by id";
		} 
		else if($lfrom != '' && $lto == '' && $country == ''){
	    $whr= "usertype = 'interpreter' and status = 'Active'  and languagefrom = '".$getlanguagefrom_res['id']."'  and  price BETWEEN $min AND $max  order by id";
		}
		else{
		$whr= "usertype = 'interpreter' and status = 'Active' and country like '%".$country."%' and languagefrom = '".$getlanguagefrom_res['id']."' and languageto = '".$getlanguageto_res['id']."'  and  price BETWEEN $min AND $max  order by id";
		
		}
	 $query=$callConfig->selectQuery(TPREFIX.TBL_USERS,'*',$whr,'',$start,$limit);
	 return $callConfig->getAllRows($query);
	}
	
	
	
	
	
	function getjobsstartlimitsearch($country,$lfrom,$lto,$min,$max,$start,$limit){
		
		global $callConfig;
		
		if($lfrom!=''){
		$getlanguagefrom = mysql_query("select * from tb_language where title like '%".$lfrom."%'");
		$getlanguagefrom_res = mysql_fetch_array($getlanguagefrom);
		}
		if($lto!=''){
		$getlanguageto = mysql_query("select * from tb_language where title like '%".$lto."%'");
		$getlanguageto_res = mysql_fetch_array($getlanguageto);
		}
		if($lfrom == '' && $lto == '' && $country != ''){
		$whr= "status = 'Active' and country like '%".$country."%' and  price BETWEEN $min AND $max order by id";
		} 
		else if($lfrom == '' && $lto != '' && $country != ''){
		$whr= "status = 'Active' and country like '%".$country."%' and languageto = '".$getlanguageto_res['id']."' and  price BETWEEN $min AND $max  order by id";
		} 
		else if($lfrom != '' && $lto == '' && $country != ''){
	$whr= "status = 'Active' and country like '%".$country."%' and languagefrom = '".$getlanguagefrom_res['id']."' and  price BETWEEN $min AND $max  order by id";
		} 
		else if($lfrom == '' && $lto == '' && $country == ''){
		$whr= "status = 'Active' and  price BETWEEN $min AND $max  order by id";
		} 
		else if($lfrom == '' && $lto != '' && $country == ''){
		$whr= "status = 'Active'  and languageto = '".$getlanguageto_res['id']."'  and  price BETWEEN $min AND $max  order by id";
		} 
		else if($lfrom != '' && $lto == '' && $country == ''){
	    $whr= "status = 'Active'  and languagefrom = '".$getlanguagefrom_res['id']."'  and  price BETWEEN $min AND $max  order by id";
		}
		else{
		$whr= "status = 'Active' and country like '%".$country."%' and languagefrom = '".$getlanguagefrom_res['id']."' and languageto = '".$getlanguageto_res['id']."'  and  price BETWEEN $min AND $max  order by id";
		
		}
	    $query=$callConfig->selectQuery(TPREFIX.TBL_POSTJOB,'*',$whr,'',$start,$limit);
	 return $callConfig->getAllRows($query);
	}
	
	
	
	
	
	
	
	function getalluserprofiles($id){
		
		global $callConfig;
		$whr= "status='Active'";
	 $query=$callConfig->selectQuery(TPREFIX.TBL_USERS,'*',$whr,'','','');
	 //print_r($query);exit;
	 return $callConfig->getAllRows($query);
	}	
	
	
	function forgot($post)
	{
		//print_r($_POST);
	  $query="select * from tb_users where email='".$_POST['email']."'";
	  $res=mysql_query($query);
	 
	 
	 $row99=mysql_fetch_array($res);
	 
	 //print_r($row99);
	 $cnt=mysql_num_rows($res);
	
	//print_r($cnt);exit;
	if($cnt>0){
	$to=$row99['email'];
	$subject = 'Forget Password :: EYAAB';
	$qry=mysql_query("select * from tb_mail_templates where id='5'")or(die(mysql_error()));
	$fet=mysql_fetch_object($qry);
//	print_r($fet);
	
	$msg=$fet->description;
	$head=$fet->title;
$msg=str_replace("{member_name}",$row99['firstname'].$row99['lastname'],$msg);
	$msg=str_replace("{username}",$row99['email'],$msg);
	$msg=str_replace("{password}",$row99['password'],$msg);
	$msg=str_replace("{type}",$row99['usertype'],$msg);
	
	$message=$head.$msg;
	
		//print_r($message);exit;
	  
						
						/*$message="<table cellspacing='0' cellpadding='5'  align='center' width='100%' border='0' style='border:1px solid #CCCCCC; border-collapse:collapse; 	font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px;'>
			  <tr>
			  <td colspan='2' align='left' valign='top' style='background-color:#002868'><img src='http://192.254.233.173/~rajeshch/Maozinha/images/site_logo_03.png' width='180' height='55'/></td>
		
			  </tr>
						  <td width='15%' height='23' align='left' valign='middle' colspan=2 ><strong>Contact Information:</strong></td>
						</tr>
						<tr>
						  <td width='15%' height='23' align='left' valign='middle'><strong>First Name:</strong></td>
						  <td width='32%' height='23' align='left' valign='middle'>".$row99['first_name']."</td>
						</tr>
					
					   	<tr>
						  <td width='15%' height='23' align='left' valign='middle'><strong>Email:</strong></td>
						  <td width='32%' height='23' align='left' valign='middle'>".$row99['email']."</td>
						</tr>
										
						<tr>
						  <td width='15%' height='23' align='left' valign='middle'><strong>Password:</strong></td>
						  <td width='32%' height='23' align='left' valign='middle'>".base64_decode($row99['password'])."</td>
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
					<td valign='top' colspan='2' align='left'>Maozinha</td>
				  </tr>
				</table>";*/
				
				//echo $message; exit;
					
							$headers  = 'MIME-Version: 1.0' . "\r\n";
							$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
							$headers .= 'From:EYAAB <info@eyaab.com>' . "\r\n";
						 	$ok=mail($to, $subject, $message, $headers);
						
			if($ok!='')
			{
				
				header("Location:index.php?msg=Password Sent To your Email");
			}
			
	}


else
			{
				header("Location:index.php?msg=Your Entered Details Doesnot Match With Our Database");
			}
			
			
		
	}
	
	
	function getpostjobsforproposal($id)
  {
	 global $callConfig;
	  $whr = "status='Active' and clientid='".$id."' and (award_status!='Awarded' && award_status!='Decline') ";
	 $query=$callConfig->selectQuery(TPREFIX.TBL_POSTJOB,'*',$whr,'id DESC','','');
	return $callConfig->getAllRows($query);
	  
  }
  
  function getjobsforproposalinner($id)
  {
	 global $callConfig;
	  $whr = "status='Active' and clientid='".$id."'";
	 $query=$callConfig->selectQuery(TPREFIX.TBL_POSTJOB,'*',$whr,'id DESC','','');
	return $callConfig->getAllRows($query);
	  
  }
  
  
  function getjobinvitesforproposal($id)
  {
	 global $callConfig;
	  $whr = "status='Active' and transid='".$id."'";
	 $query=$callConfig->selectQuery(TPREFIX.TBL_JOBINVITATION,'*',$whr,'id DESC','','');
	return $callConfig->getAllRows($query);
	  
  }
	
	function getsubmitproposalforproposal($id)
  {
	 global $callConfig;
	  $whr = "status='Active' and clientid='".$id."' and decline_status!='withdrawal' ";
	 $query=$callConfig->selectQuery(TPREFIX.TBL_POSTJOBPROPOSALS,'*',$whr,'id DESC','','');
	return $callConfig->getAllRows($query);
	  
  }

	
	function getpostjobsforinvites($id)
  {
	 global $callConfig;
	  $whr = "status='Active' and id='".$id."'";
	 $query=$callConfig->selectQuery(TPREFIX.TBL_POSTJOB,'*',$whr,'id DESC','','');
	return $callConfig->getRow($query);
	  
  }
	
	
	function getjobsproposalarchive($id)
  {
	 global $callConfig;
	  $whr = " clientid='".$id."' and ((status='Active' || status='Expired') || (award_status = 'Awarded' || award_status = 'Decline') )";
	$query=$callConfig->selectQuery(TPREFIX.TBL_POSTJOB,'*',$whr,'id DESC','','');
	return $callConfig->getAllRows($query);
	  
  }
  
  function getsubmitproposalarchive($id)
  {
	 global $callConfig;
	  $whr = " clientid='".$id."' and status='Active' ";
	$query=$callConfig->selectQuery(TPREFIX.TBL_POSTJOBPROPOSALS,'*',$whr,'id DESC','','');
	return $callConfig->getAllRows($query);
	  
  }
  
  function getsubmittedproposalofjobcount($id)
  {
	 global $callConfig;
	  $whr = "status='Active' and id='".$id."' and (award_status!='Awarded' and award_status!='Decline')";
	 $query=$callConfig->selectQuery(TPREFIX.TBL_POSTJOB,'*',$whr,'id DESC','','');
	return $callConfig->getAllRows($query);
  }
  
  function getjobsforproposal($id)
  {
	 global $callConfig;
	  $whr = "status='Active' and id='".$id."'";
	 $query=$callConfig->selectQuery(TPREFIX.TBL_POSTJOB,'*',$whr,'id DESC','','');
	return $callConfig->getRow($query);
  }
  
  function getclientdetails($id)
  {
	 global $callConfig;
	  $whr = "status='Active' and id='".$id."'";
	 $query=$callConfig->selectQuery(TPREFIX.TBL_USERS,'*',$whr,'id DESC','','');
	return $callConfig->getRow($query);
  }
  
  function getusersdetails($id)
  {
	 global $callConfig;
	  $whr = "status='Active' and languagefrom='".$id."' and id!='".$_SESSION['user_id']."' ";
	 $query=$callConfig->selectQuery(TPREFIX.TBL_USERS,'*',$whr,'id DESC','','');
	return $callConfig->getAllRows($query);
  }
	
	
	
	
function getAllCategory($sortfield,$order,$start,$limit)

{

global $callConfig;

//if($sortfield!="" && $order!="") $order=$sortfield.' '.$order;
$whr="status='active'";
$query=$callConfig->selectQuery(TPREFIX.TBL_CATEGORY,'*',$whr,$order,$start,$limit);

return $callConfig->getAllRows($query);

}

function getallbanners()
{

global $callConfig;

//if($sortfield!="" && $order!="") $order=$sortfield.' '.$order;
$whr="status='active'";
$query=$callConfig->selectQuery(TPREFIX.TBL_BANNERS,'*',$whr,'','','');
	return $callConfig->getAllRows($query);
}


function getAllCountry()

{

global $callConfig;

//if($sortfield!="" && $order!="") $order=$sortfield.' '.$order;
$whr="status='active' ";
$query=$callConfig->selectQuery(TPREFIX.TBL_COUNTRY,'*',$whr,'country_name ASC','','');

return $callConfig->getAllRows($query);

}


function getAllCategories($sortfield,$order,$start,$limit)

{

global $callConfig;

//if($sortfield!="" && $order!="") $order=$sortfield.' '.$order;
$whr="status='active'";
$query=$callConfig->selectQuery(TPREFIX.TBL_CATEGORY,'*',$whr,$order,$start,$limit);

return $callConfig->getAllRows($query);

}



function submitComplaint($post)

	
	{
	
	global $callConfig;
	
	$createdOn= date("Y-m-d H:i:s");
	//$bannerpic = $callConfig->freeimageUploadcomncode('file','image',"uploads/complaints/","uploads/complaints/thumbs",$post['file'],'185','51'); 
	
	  $bannerpic = $callConfig->freeimageUploadcomncode("file",'image',"uploads/complaints/","uploads/complaints/thumbs/",$post['hdn_image'],'434','411'); /*'250','150*/
	  
	  
	$fieldnames=array('complaint_category'=>$post['category'],'department'=>$post['department'],'title'=>$post['title'],'country_name'=>$post['country'],'price'=>$post['paid'],'image'=>$bannerpic,'description'=>$post['description'],'status'=>'Open','user_id'=>$_SESSION['id'],'date_added'=>$createdOn);
	
	//print_r($fieldnames);exit;
	$res=$callConfig->insertRecord(TPREFIX.TBL_COMPLAINTS,$fieldnames);
	if($res!='')
	{
	header("location:".SITEURL."/complaint.php?err='Complaint Registered successfully'" );
	}
	else{
	header("location:".SITEURL."/complaint.php?ferr='fail'" );
	}	

	}
	
	
	function LogComplaint($post)

	
	{
	//echo "hello" ; exit;
	
	global $callConfig;
	//print_r($post);exit;
	$createdOn= date("Y-m-d H:i:s");
	$bannerpic = $callConfig->freeimageUploadcomncode('file','image',"administrator/uploads/complaints/","uploads/complaints/",$post['file'],'185','51'); 
	$fieldnames=array('complaint_category'=>$post['category'],'department'=>$post['department'],'country_name'=>$post['country'],'image'=>$bannerpic,'description'=>$post['description'],'status'=>'Open','user_id'=>$_SESSION['id'],'date_added'=>$createdOn);
	//print_r($fieldnames);exit;
	$res=$callConfig->insertRecord(TPREFIX.TBL_COMPLAINTS,$fieldnames);
	if($res!='')
	{
	header("location:".SITEURL."/viewcomplaints.php?id=".$_GET['id']."&err='Complaint Registered successfully'" );
	}
	else{
	header("location:".SITEURL."/viewcomplaints.php?id=".$_GET['id']."&ferr='fail'" );
	}	

	}
	
	
	function countofallComplaints($sortfield,$order,$start,$limit)

  {

	global $callConfig;

	//if($sortfield!="" && $order!="") $order=$sortfield.' '.$order;
	$whr="status='Open'";

	 $query=$callConfig->selectQuery(TPREFIX.TBL_COMPLAINTS,'*',$whr,'','','');

	 return $callConfig->getCount($query);

  }
  
  function getCountNumberofcomplaints($category)
	{
		global $callConfig;
		$whr="complaint_category='".$category."'";
		$query	= $callConfig->selectQuery(TPREFIX.TBL_COMPLAINTS,'count(*) as count',$whr,'','',''); 
		$res = $callConfig->getRow($query);
		return $res->count;
		//return  $callConfig->getCount($query);
	}
	
		
	function getCountofcategorycomplaints($id)
	{
		global $callConfig;
		$whr="department=".$id."";
	  $query	= $callConfig->selectQuery(TPREFIX.TBL_COMPLAINTS,'*',$whr,'','',''); 
		//$res = $callConfig->getRow($query);
		return $res = $callConfig->getAllRows($query);
		//return $res->count;
		//return  $callConfig->getCount($query);
	}
	
	
	function getcompletedcomplaints($id)
	{
		global $callConfig;
		$whr="status='Closed' and department='".$id."'";
	  $query	= $callConfig->selectQuery(TPREFIX.TBL_COMPLAINTS,'*',$whr,'','',''); 
		//$res = $callConfig->getRow($query);
		return $res = $callConfig->getAllRows($query);
		//return $res->count;
		//return  $callConfig->getCount($query);
	}
	
	
	 function getCategory($id)
  {
	 global $callConfig;
	  $whr = "status='Active' and id='".$id."'";
	 $query=$callConfig->selectQuery(TPREFIX.TBL_CATEGORY,'*','id='.$id,'','','');
	return $callConfig->getRow($query);
  }
  
  
 function getAllfootertabs($sortfield,$order,$start,$limit)

{

global $callConfig;

//if($sortfield!="" && $order!="") $order=$sortfield.' '.$order;
$whr="status='active'";
$query=$callConfig->selectQuery(TPREFIX.TBL_FOOTERTABS,'*',$whr,$order,$start,$limit);

return $callConfig->getAllRows($query);

}

function getallcomplaints()
  {
	 global $callConfig;
	   $whr = " complaint_category='".$_GET['id']."'";
	 $query=$callConfig->selectQuery(TPREFIX.TBL_COMPLAINTS,'*',$whr,'','','');
	return $callConfig->getAllRows($query);
	  
  }
  
   function getAllCategorieslogo($sortfield,$order,$start,$limit)

{

global $callConfig;

//if($sortfield!="" && $order!="") $order=$sortfield.' '.$order;
$whr="status='Active' and id='".$_GET['id']."'";
  $query=$callConfig->selectQuery(TPREFIX.TBL_CATEGORY,'*',$whr,$order,$start,$limit);

return $callConfig->getRow($query);

}

function getallvideos($id)	
	{
	
		global $callConfig;
		if($id!=''){
		$whr="status='Active' and country_id=".$id."";
		}else{
			$whr="status='Active'";
		}
	 $query=$callConfig->selectQuery(TPREFIX.TBL_VIDEOSDISPLAY,'*',$whr,'','','');
		  return $callConfig->getAllRows($query);
		 
	}
	
	function getallvideosbycountry($id)	
	{
	
		global $callConfig;
		$whr="status='Active' and id=".$d."";
		 $query=$callConfig->selectQuery(TPREFIX.TBL_VIDEOSDISPLAY,'*',$whr,'','','');
		  return $callConfig->getAllRows($query);
	}

function insertvideofrontend(){
	//print_r($_POST);
	global $callConfig;
	$createdOn= date("Y-m-d H:i:s");
	$bannerpic = $callConfig->freeimageUploadcomncode("file",'image',"uploads/videos/","uploads/videos/thumbs/",$_POST['image'],'250','150');
	$fieldnames=array('category_id'=>$_POST['category'],'department_id'=>$_POST['department'],'video_name'=>$_POST['vtitle'],'video'=>$bannerpic,'description'=>$_POST['description'],'status'=>'Active','user_id'=>$_SESSION['id'],'date_added'=>$createdOn,'country_id'=>$_POST['country']);
	
	//print_r($fieldnames);exit;
	$res=$callConfig->insertRecord(TPREFIX.TBL_VIDEOSDISPLAY,$fieldnames);
	if($res!='')
	{
	header("location:".SITEURL."/video.php?msg=Video Posted Successfully" );
	}
	else{
	header("location:".SITEURL."/video.php?msg=Video Posted Failed" );
	}	
	
}

 function getlocations($id)
  {
	 global $callConfig;
	   $whr = "cat_id=".$id." and location1!='' group by location1";
	 $query=$callConfig->selectQuery(TPREFIX.TBL_COMPLAINTS,'*',$whr,'','',''); 
	return $callConfig->getAllRows($query);
	  
  }
  
  
  function getappform(){
		
		global $callConfig;
		$whr= "id='1' and status='Active'";
	 $query=$callConfig->selectQuery(TPREFIX.TBL_APPFORM,'*',$whr,'','','');
	 //print_r($query);exit;
	 return $callConfig->getRow($query);
	}
	
	function getcertification(){
		
		global $callConfig;
		$whr= "id='1' and status='Active'";
	 $query=$callConfig->selectQuery(TPREFIX.TBL_CERTIFICATION,'*',$whr,'','','');
	 //print_r($query);exit;
	 return $callConfig->getRow($query);
	}
	
	function getpanchayat(){
		
		global $callConfig;
		$whr= "id='1' and status='Active'";
	 $query=$callConfig->selectQuery(TPREFIX.TBL_PANCHAYAT,'*',$whr,'','','');
	 //print_r($query);exit;
	 return $callConfig->getRow($query);
	}
	
	function getdescription(){
		
		global $callConfig;
		$whr= "id='1' and status='Active'";
	 $query=$callConfig->selectQuery(TPREFIX.TBL_DESCRIPTION,'*',$whr,'','','');
	 //print_r($query);exit;
	 return $callConfig->getRow($query);
	}
	
	
	function getallnews()	
	{
	
		global $callConfig;
		$whr="status='Active'";
		 $query=$callConfig->selectQuery(TPREFIX.TBL_NEWS,'*',$whr,'','','');
		  return $callConfig->getAllRows($query);
	}

 function getnews($id)
  {
	 global $callConfig;
	   $whr = "id=".$id."";
	 $query=$callConfig->selectQuery(TPREFIX.TBL_NEWS,'*',$whr,'','',''); 
	return $callConfig->getRow($query);
	  
  }
  
  
   function getallsubcat($id)	
	{
	
		global $callConfig;
		$whr="status='Active' and cat_id=".$id." ";
		 $query=$callConfig->selectQuery(TPREFIX.TBL_DEPARTMENTS,'*',$whr,'','','');
		  return $callConfig->getAllRows($query);
	}
  
	

	/**********************LAVANYA**************************/
	
	function getuserdetailsfetch($id){
		
		global $callConfig;
		$whr= "id=".$id."" ;
	 $query=$callConfig->selectQuery(TPREFIX.TBL_REGUSERS,'*',$whr,'','','');
	 return $callConfig->getRow($query);
	}
	
	
	 function getcomplaintdetails($id)
	{
		global $callConfig;
		$whr="id='".$id."'";
	 $query	= $callConfig->selectQuery(TPREFIX.TBL_COMPLAINTS,'*',$whr,'','','');
		return $res = $callConfig->getRow($query);
		
		//return  $callConfig->getCount($query);
	}

	/**************************************************/

	function getcomplaintcount($id)
	{
		global $callConfig;
		$whr="complaint_category=".$id."";
	 $query	= $callConfig->selectQuery(TPREFIX.TBL_COMPLAINTS,'*',$whr,'','','');
		return $res = $callConfig->getCount($query);
		
		//return  $callConfig->getCount($query);
	}
	
	
	function getallsubcatlimit($id)	
	{
	
		global $callConfig;
		$whr="status='Active' and cat_id=".$id." ";
		 $query=$callConfig->selectQuery(TPREFIX.TBL_DEPARTMENTS,'*',$whr,'','0','2');
		  return $callConfig->getAllRows($query);
	}
	
	
	function getcategoryinnercount($cid,$sid)
	{
		global $callConfig;
		$whr="complaint_category=".$cid." and department='".$sid."'";
		$query	= $callConfig->selectQuery(TPREFIX.TBL_COMPLAINTS,'*',$whr,'','',''); 
		return $res = $callConfig->getAllRows($query);
		
		//return  $callConfig->getCount($query);
	}
	
	
	function getallsubcatsingle($id)	
	{
	
		global $callConfig;
		$whr="status='Active' and id=".$id." ";
		 $query=$callConfig->selectQuery(TPREFIX.TBL_DEPARTMENTS,'*',$whr,'','0','2');
		  return $callConfig->getRow($query);
	}
	
	
	function getopencompliants($cid,$sid)
	{
		global $callConfig;
		$whr="complaint_category=".$cid." and department='".$sid."' and status='Open'";
		$query	= $callConfig->selectQuery(TPREFIX.TBL_COMPLAINTS,'*',$whr,'','',''); 
		return $res = $callConfig->getAllRows($query);
		
		//return  $callConfig->getCount($query);
	}
	
	function getclosedcomplaints($cid,$sid)
	{
		global $callConfig;
		$whr="complaint_category=".$cid." and department='".$sid."' and status='Closed'";
	 $query	= $callConfig->selectQuery(TPREFIX.TBL_COMPLAINTS,'*',$whr,'','',''); 
		//$res = $callConfig->getRow($query);
		return $res = $callConfig->getAllRows($query);
		//return $res->count;
		//return  $callConfig->getCount($query);
	}
	
	function getsubcategoryforranks($id)	
	{
	
		global $callConfig;
		$whr="status='Active' and cat_id=".$id." ";
		 $query=$callConfig->selectQuery(TPREFIX.TBL_DEPARTMENTS,'*',$whr,'','','');
		  return $callConfig->getRow($query);
	}
	

	function getallcatwithsubcatcomplaints($cid,$id)
	{
		global $callConfig;
		$whr="complaint_category=".$cid." and department=".$id."";
	  $query	= $callConfig->selectQuery(TPREFIX.TBL_COMPLAINTS,'*',$whr,'','',''); 
		 return $callConfig->getAllRows($query);
	}
	
	function getuserdetailsofcompliant($id)
	{
		global $callConfig;
		$whr="id=".$id."";
	  $query	= $callConfig->selectQuery(TPREFIX.TBL_REGUSERS,'*',$whr,'','',''); 
		 return $callConfig->getRow($query);
	}
	
	
	function getcategorycountfordashboard($id)
	{
		global $callConfig;
		$whr="complaint_category=".$id." ";
		$query	= $callConfig->selectQuery(TPREFIX.TBL_COMPLAINTS,'*',$whr,'','',''); 
		return $res = $callConfig->getAllRows($query);
		
		//return  $callConfig->getCount($query);
	}
	
	function getopencompliantswithcat($id)
	{
		global $callConfig;
		$whr="complaint_category=".$id." and status='Open'";
		$query	= $callConfig->selectQuery(TPREFIX.TBL_COMPLAINTS,'*',$whr,'','',''); 
		return $res = $callConfig->getAllRows($query);
		
		//return  $callConfig->getCount($query);
	}
	
	
	function getclosedcomplaintswithcat($id)
	{
		global $callConfig;
		$whr="complaint_category=".$id." and status='Closed' ";
	 $query	= $callConfig->selectQuery(TPREFIX.TBL_COMPLAINTS,'*',$whr,'','',''); 
		//$res = $callConfig->getRow($query);
		return $res = $callConfig->getAllRows($query);
		//return $res->count;
		//return  $callConfig->getCount($query);
	}
	
	function getlegaldetails($id){
		
		global $callConfig;
		$whr = "status='Active' and sid=".$id."";
	 $query=$callConfig->selectQuery(TPREFIX.TBL_LEGAL,'*',$whr,'','','');
	 return $callConfig->getRow($query);
	}
	 
	
	function getcategoriesforsearch(){
		
		global $callConfig;
		$whr="status='Active'";
	 $query=$callConfig->selectQuery(TPREFIX.TBL_CATEGORY,'*',$whr,'','','');
	 return $callConfig->getAllRows($query);
	}
	
	function getallcategorycomplaints($id)
	{
		global $callConfig;
		$whr="complaint_category=".$id."";
	  $query	= $callConfig->selectQuery(TPREFIX.TBL_COMPLAINTS,'*',$whr,'','',''); 
		 return $callConfig->getAllRows($query);
	}
	
	function getallcatwithsubcatcompclosed($cid,$id)
	{
		global $callConfig;
		$whr="complaint_category=".$cid." and department=".$id." and status='Closed' ";
	  $query	= $callConfig->selectQuery(TPREFIX.TBL_COMPLAINTS,'*',$whr,'','',''); 
		 return $callConfig->getAllRows($query);
	}
	
	function getallcategorycompclosed($id)
	{
		global $callConfig;
		$whr="complaint_category=".$id." and status='Closed'";
	  $query	= $callConfig->selectQuery(TPREFIX.TBL_COMPLAINTS,'*',$whr,'','',''); 
		 return $callConfig->getAllRows($query);
	}
	
	function getallcatwithsubcatcompopen($cid,$id)
	{
		global $callConfig;
		$whr="complaint_category=".$cid." and department=".$id." and status='Open' ";
	  $query	= $callConfig->selectQuery(TPREFIX.TBL_COMPLAINTS,'*',$whr,'','',''); 
		 return $callConfig->getAllRows($query);
	}
	
	function getallcategorycompopen($id)
	{
		global $callConfig;
		$whr="complaint_category=".$id." and status='Open'";
	  $query	= $callConfig->selectQuery(TPREFIX.TBL_COMPLAINTS,'*',$whr,'','',''); 
		 return $callConfig->getAllRows($query);
	}
	
	
	function getrelatedcomplaints($get)
  {
	 global $callConfig;
	 //print_r($_POST);
	   $whr = " title LIKE '%".$_GET['title']."%'";
	  $query=$callConfig->selectQuery(TPREFIX.TBL_COMPLAINTS,'*',$whr,'','','');
	return $callConfig->getAllRows($query);
	  
  }
  
  function getCategorieslogo($id)

{

global $callConfig;

$whr="status='Active' and id='".$id."'";
  $query=$callConfig->selectQuery(TPREFIX.TBL_CATEGORY,'*',$whr,'','','');

return $callConfig->getRow($query);

}


function getsubCategories($id)

{

global $callConfig;

$whr="status='Active' and id='".$id."'";
  $query=$callConfig->selectQuery(TPREFIX.TBL_DEPARTMENTS,'*',$whr,'','','');

return $callConfig->getRow($query);

}
  
  
  function getcountryforviewcomplaints($id){
		
		global $callConfig;
		$whr= "status='Active' and id=".$id." ";
	 $query=$callConfig->selectQuery(TPREFIX.TBL_COUNTRY,'*',$whr,'','','');
	 //print_r($query);exit;
	 return $callConfig->getRow($query);
	}
  
  function getallvideoswithcat($id)	
	{
	
		global $callConfig;
		$whr="status='Active' and category_id=".$id." ";
		 $query=$callConfig->selectQuery(TPREFIX.TBL_VIDEOSDISPLAY,'*',$whr,'','','');
		  return $callConfig->getAllRows($query);
	}
	
	
	function selectdatetosearch($post)
  {
	 global $callConfig;
	 //print_r($_POST);
	 
	 	if($_POST['sid']!=""){
	 
	 header("location:".SITEURL."/dashboard1.php?cid=".$_POST['cid']."&sid=".$_POST['sid']."&fromdate=".$_POST['fromdate']."&todate=".$_POST['todate']." " );
	 	} else {
		header("location:".SITEURL."/dashboard1.php?cid=".$_POST['cid']."&fromdate=".$_POST['fromdate']."&todate=".$_POST['todate']." " );
		
		}
	 
	 
	}
	 
	 
	 function getvaluesfromsearchdates($get)
  {
	 global $callConfig;
	 
	
		$date = str_replace('/', '-',  $_GET['fromdate']);
		$fromdate= date('Y-d-m', strtotime($date));
		
		$date1 = str_replace('/', '-',  $_GET['todate']);
		$todate= date('Y-d-m', strtotime($date1));
	 
	 
	   $whr = "date_added between '".$fromdate."' and '".$todate."' and complaint_category=".$_GET['cid']." ";
	  $query=$callConfig->selectQuery(TPREFIX.TBL_COMPLAINTS,'*',$whr,'','','');
	return $callConfig->getAllRows($query);
	 
  }
  
  
  function getcategoryinnercountwithdate($get)
	{
		global $callConfig;
		
		
		 $date = str_replace('/', '-',  $_GET['fromdate']);
		 $fromdate= date('Y-d-m', strtotime($date));
		
		$date1 = str_replace('/', '-',  $_GET['todate']);
		$todate= date('Y-d-m', strtotime($date1));
		
		$whr="complaint_category=".$_GET['cid']." and department='".$_GET['sid']."' and date_added between '".$fromdate."' and '".$todate."' ";
		$query	= $callConfig->selectQuery(TPREFIX.TBL_COMPLAINTS,'*',$whr,'','',''); 
		return $res = $callConfig->getAllRows($query);
		
		//return  $callConfig->getCount($query);
	}
  
  function getopencompliantswithdate($get)
	{
		global $callConfig;
		
		$date = str_replace('/', '-',  $_GET['fromdate']);
		$fromdate= date('Y-d-m', strtotime($date));
		
		$date1 = str_replace('/', '-',  $_GET['todate']);
		$todate= date('Y-d-m', strtotime($date1));
		
		$whr="complaint_category=".$_GET['cid']." and department='".$_GET['sid']."' and date_added between '".$fromdate."' and '".$todate."' and status='Open' ";
		 $query	= $callConfig->selectQuery(TPREFIX.TBL_COMPLAINTS,'*',$whr,'','',''); 
		return $res = $callConfig->getAllRows($query);
		
		//return  $callConfig->getCount($query);
	}
  
  function getclosedcomplaintswithdate($get)
	{
		global $callConfig;
		
		$date = str_replace('/', '-',  $_GET['fromdate']);
		$fromdate= date('Y-d-m', strtotime($date));
		
		$date1 = str_replace('/', '-',  $_GET['todate']);
		$todate= date('Y-d-m', strtotime($date1));
		
		$whr="complaint_category=".$_GET['cid']." and department='".$_GET['sid']."' and date_added between '".$fromdate."' and '".$todate."' and status='Closed' ";
	 $query	= $callConfig->selectQuery(TPREFIX.TBL_COMPLAINTS,'*',$whr,'','',''); 
		return $res = $callConfig->getAllRows($query);
	}
	
	
	
	function getcategoryinnercountwithdatesub($get)
	{
		global $callConfig;
		
		$date = str_replace('/', '-',  $_GET['fromdate']);
		$fromdate= date('Y-d-m', strtotime($date));
		
		$date1 = str_replace('/', '-',  $_GET['todate']);
		$todate= date('Y-d-m', strtotime($date1));
		
		$whr="complaint_category=".$_GET['cid']." and date_added between '".$fromdate."' and '".$todate."' ";
		 $query	= $callConfig->selectQuery(TPREFIX.TBL_COMPLAINTS,'*',$whr,'','',''); 
		return $res = $callConfig->getAllRows($query);
		
		//return  $callConfig->getCount($query);
	}
	
	function getopencompliantswithdatesub($get)
	{
		global $callConfig;
		
		$date = str_replace('/', '-',  $_GET['fromdate']);
		$fromdate= date('Y-d-m', strtotime($date));
		
		$date1 = str_replace('/', '-',  $_GET['todate']);
		$todate= date('Y-d-m', strtotime($date1));
		
		$whr="complaint_category=".$_GET['cid']." and date_added between '".$fromdate."' and '".$todate."' and status='Open' ";
		$query	= $callConfig->selectQuery(TPREFIX.TBL_COMPLAINTS,'*',$whr,'','',''); 
		return $res = $callConfig->getAllRows($query);
		
		//return  $callConfig->getCount($query);
	}
  
  function getclosedcomplaintswithdatesub($get)
	{
		global $callConfig;
		
		$date = str_replace('/', '-',  $_GET['fromdate']);
		$fromdate= date('Y-d-m', strtotime($date));
		
		$date1 = str_replace('/', '-',  $_GET['todate']);
		$todate= date('Y-d-m', strtotime($date1));
		
		$whr="complaint_category=".$_GET['cid']." and date_added between '".$fromdate."' and '".$todate."' and status='Closed' ";
	 $query	= $callConfig->selectQuery(TPREFIX.TBL_COMPLAINTS,'*',$whr,'','',''); 
		return $res = $callConfig->getAllRows($query);
	}
	
	
	 function getlegalexpertdetails($sid)

{

global $callConfig;

$whr="status='Active' and sid='".$sid."' ";
  $query=$callConfig->selectQuery(TPREFIX.TBL_LEGAL,'*',$whr,'','','');

return $callConfig->getAllRows($query);

}
	
	
	
 }
?>