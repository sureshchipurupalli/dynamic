<?php 
ini_set("display_errors",0);
@define(HOSTNAME,"localhost");
@define(USERNAME,"root");
@define(PASSWORD,"developer");
@define(DBNAME,  "dynamic_database");
//$blogcon=mysql_connect("blogstrong.db.8031369.hostedresource.com","blogstrong","Media3123");
//mysql_select_db("blogstrong",$blogcon);

###################################################################

######### TABLE CONSTANTS 

###################################################################

/********* Table Prefix *********/

define('SANDBOXURL', 'https://www.sandbox.paypal.com/cgi-bin/webscr');
define('BUSINESSEMAIL', 'rk004@gmail.com');

define('TPREFIX', 'tb_');


/********* Table Names *********/

define('TBL_ADMIN','admin');
define('TBL_BANKDETAILS','bankdetails');
define('TBL_SITESETTINGS','sitesettings');


define('TBL_RECENTACTIVITIES','recentactivities');

define('TBL_BLOGPOST','blog');

define('TBL_MENU','menu');

define('TBL_SUBMENU','submenu');

define('TBL_FAQ','faq');

define('TBL_NEWSLETTERS','newsletter');
define('TBL_USERS','users');
define('TBL_REGUSERS','regusers');
define('TBL_COMPLAINTS','complaints');
define('TBL_ORDERS','orders');
define('TBL_VIDEOS','videos');
define('TBL_VIDEOSDISPLAY','videosdisplay');
define('TBL_POLICY','policy');
define('TBL_CONDITIONS','conditions');
define('TBL_COUNTRY','country');
define('TBL_CATEGORY','category');
define('TBL_SUBSCRIBERS','subscribers');
define('TBL_COMMENTS','comments');
define('TBL_USERCONTACT','usercontact');
define('TBL_SUBSCRIBE','sub');
define('TBL_CONTACTUS','contactus');
define('TBL_SEO','seo');
define('TBL_CONTENTPAGE','contentpages');
define('TBL_LIKEDISLIKE','likes_dislikes');
define('TBL_CLIENTLIST','clientlist');
define('TBL_TESTIMONIAL','testimonial');
define('TBL_MAILFUNCTIONS','mailfunctions');
define('TBL_MAIL_TEMPLATE','mail_template');
define('TBL_NOTIFICATION','notification');
define('TBL_APPFORM','appform');
define('TBL_CERTIFICATION','certification');
define('TBL_PANCHAYAT','panchayat');
define('TBL_DESCRIPTION','description');
define('TBL_DEPARTMENTS','departments');
define('TBL_SUBDEPARTMENTS','subdeparts');


define('TBL_SIGNUP','signup');
define('TBL_AWARDED','awarded');
define('TBL_DECLINED','declined');
define('TBL_MILESTONE','milestones_rec');
define('TBL_MILESTONE_CHANGE','milestones_changes_rec');
define('TBL_CANCEL','cancel');
define('TBL_CLOSE','close');
define('TBL_WORKMESSAGES','workmessages');
define('TBL_WORKROOM','workroom');
define('TBL_CATEGORYPAGE','categorypages');
define('TBL_SUBCATEGORYPAGE','subcategorypages');
define('TBL_PRODUCT','classifieds');
define('TBL_PRODUCT_IMAGE','classifieds_image');
define('TBL_CURRENCY','currency');
define('TBL_COUNTRY','country');
define('TBL_FOOTERTABS','footertabs');
define('TBL_CITY','city');
define('TBL_STATE','state');
define('TBL_LANGUAGE','language');
define('TBL_JOBINVITATION','jobsinvitation');
define('TBL_JOBQUESTIONS','jobquestions');
define('TBL_PROPOSALANSWERS','proposalanswers');
define('TBL_POSTJOB','postjobs');
define('TBL_POSTJOBPROPOSALS','postjobsproposals');
define('TBL_FORGOT_PASSWORD','forgot_password');

define('TBL_WORKS','works');
define('TBL_CHOOSE','choose');
define('TBL_FIND','find');
define('TBL_ABOUTUS','aboutus');
define('TBL_BLOGPAGE','blogpage');
define('TBL_NEWS','news');
define('TBL_LEGAL','legal');
define('TBL_BANNERS','banners');
define('TBL_BLOGCOMMENTS','blogcomments');

define('TBL_MAIL_TEMPLATES','mail_templates');
define('TBL_ORDERS','orders');
define('TBL_NEWS','news');
define('TBL_CONTENTPAGES','contentpages');
define('TBL_REVIEW','review');
define('TBL_ATTRIBUTES','attributes');
define('TBL_CART_ORDER','cart_order');
define('TBL_CART_TRANSACTIONS','cart_transcation');
define('TBL_COUPON','coupon');
define('TBL_GALLERY','gallery');
define('TBL_ALBUMS','albums');
define('TBL_APPLYFORMS','applyforms');
define('TBL_DIRECTORIES','directories');
define('TBL_BLOGCOMMENTS','blog_comments');
define('ADMINROOT','administrator');
define('TBL_PRODUCTVIEW','productview');
define('TBL_FEEDBACK','feedback');
define('TBL_RATE','rate');
define('TBL_REFEEDBACK','refeedback');
define('TBL_FEEDBACKREQUEST','feedbackrequest');
define('TBL_REQUIREMENTCLOSE','requirementclose');
define('TBL_PRODUCTATTRIBUTES','productattributes');
define('TBL_INTERPRETERS_INDUSTRY','interpretor_industry');
define('TBL_TRANSLATOR_INDUSTRY','translator_industry');
define('TBL_WHATWEDO','whatwedo');
define('TBL_GETINVOLVED','getinvolved');
define('TBL_CONTINENT','continents');
//define('TBL_AWARD_CONFIRM','award_confirm');

/********* END  Table Names *********/

date_default_timezone_set("Asia/Kolkata");
define('STR_TO_TIME',strtotime(date("Y-m-d H:i:s")));

define('ONLY_DATE',date("m-d-Y"));

define('DATE_TIME',date("m-d-Y H:i:s"));

define('DATE_TIME_FORMAT',date("l dS F Y, H:i:s A", STR_TO_TIME));

define('DATETIMEFORMAT',date("l-dS-F-Y-H-i-s-A", STR_TO_TIME));

define('DBIN','INSERT INTO ');

define('DBUP','UPDATE ');

define('DBWHR',' WHERE ');

define('DBDEL','DELETE ');

define('DBFROM',' FROM ');

define('DBSELECT',' SELECT ');

define('DBSET',' SET ');

define('HEAD_LTN','location:');

define('DB_LMT',' LIMIT ');

define('DB_ORDER',' ORDER BY ');

define('DB_LIKE',' LIKE ');
###################################################################

######### Physical Path Constants 

###################################################################

//define(SITEROOT, 				$_SERVER['DOCUMENT_ROOT']."/beta");

//define(SITEROOT, 				$_SERVER['DOCUMENT_ROOT']."/newdynamic");

/*define(LISTINGIMAGESROOT, 		SITEROOT."/images/listings");

define(UPLOADSROOT, 			SITEROOT."/uploads/");

define(USER_IMAGE_ROOT,	        SITEROOT."/images/");

*/

###################################################################

######### Url Constants 

###################################################################

//define(SITEURL, 				"http://".$_SERVER['HTTP_HOST']);

define(SITEURL, 				"http://".$_SERVER['HTTP_HOST']."/newdynamic");



//define(SITEPATH_URL,'http://'.$_SERVER['HTTP_HOST']);

?>
