<?php

if($_GET['option']!="")
$option=$_GET['option'];

else
$option="com_login";

switch($option)

		{
			case "com_dbbackup":
			$disptemp="views/dbbackup.php";
			$left_sitesettings_focus='class="selected"'; 
			break;
			
  
			case "com_login":

			$disptemp="views/login.php";

			break;
			
			case "com_logout":

			$disptemp="views/logout.php";

			break;

			case "com_dashboard":

			$disptemp="views/dashboard.php"; 

			$left_dashboard_focus='class="selected"'; 

			break;

			/*case "com_sitesettings":

			$disptemp="views/sitesettings.php"; 

			$left_dashboard_focus='class="selected"'; 

			break;*/
			
			
			case "com_sitesettings":

			$disptemp="views/sitesettings.php"; 

			$left_dashboard_focus='class="selected"'; 

			break;
			
		

			/*case "com_sitesettings_insert":

			$disptemp="views/sitesettings.php"; 

			$left_dashboard_focus='class="selected"';
			
			break;
			
			case "com_sitesettings_edit":

			$disptemp="views/sitesettings.php"; 

			$left_dashboard_focus='class="selected"';*/


			case "com_logout":

			$disptemp="views/logout.php";

			break;

			

			case "com_adminlist":

			$disptemp="views/adminusers.php"; 

			$left_dashboard_focus='class="selected"'; 

			break;

			

			case "com_adminlist_insert":

			$disptemp="views/adminusers.php"; 

			$left_dashboard_focus='class="selected"'; 

			break;
			
			case "com_adminlist_edit":

			$disptemp="views/adminusers.php"; 

			$left_dashboard_focus='class="selected"'; 

			break;
			
			
			case "com_videos":

			$disptemp="views/videos.php"; 

			$left_dashboard_focus='class="selected"'; 

			break;

			

			case "com_videos_insert":

			$disptemp="views/videos.php"; 

			$left_dashboard_focus='class="selected"'; 

			break;
			
			
			case "com_videos_edit":

			$disptemp="views/videos.php"; 

			$left_dashboard_focus='class="selected"'; 

			break;
			
			
			/*case "com_aboutus":

			$disptemp="views/aboutus.php"; 

			$left_dashboard_focus='class="selected"'; 

			break;
			
			case "com_aboutus_insert":

			$disptemp="views/aboutus.php"; 

			$left_dashboard_focus='class="selected"'; 

			break;*/
			
			case "com_description":

			$disptemp="views/description.php"; 

			$left_dashboard_focus='class="selected"'; 

			break;
			
			case "com_description_insert":

			$disptemp="views/description.php"; 

			$left_dashboard_focus='class="selected"'; 

			break;
			
			case "com_appform":

			$disptemp="views/appform.php"; 

			$left_dashboard_focus='class="selected"'; 

			break;
			
			case "com_appform_insert":

			$disptemp="views/appform.php"; 

			$left_dashboard_focus='class="selected"'; 

			break;
			
			case "com_certification":

			$disptemp="views/certification.php"; 

			$left_dashboard_focus='class="selected"'; 

			break;
			
			case "com_certification_insert":

			$disptemp="views/certification.php"; 

			$left_dashboard_focus='class="selected"'; 

			break;
			
			case "com_panchayat":

			$disptemp="views/panchayat.php"; 

			$left_dashboard_focus='class="selected"'; 

			break;
			
			case "com_panchayat_insert":

			$disptemp="views/panchayat.php"; 

			$left_dashboard_focus='class="selected"'; 

			break;
					
					
			case "com_userslist":

			$disptemp="views/userslist.php"; 

			$left_dashboard_focus='class="selected"'; 

			break;

			

			case "com_userslist_insert":

			$disptemp="views/userslist.php"; 

			$left_dashboard_focus='class="selected"'; 

			break;			
						
			case "com_privacypolicy":

			$disptemp="views/policy.php"; 

			$left_dashboard_focus='class="selected"'; 

			break;

			case "com_privacypolicy_insert":

			$disptemp="views/policy.php"; 

			$left_dashboard_focus='class="selected"'; 

			break;
			
			case "com_privacypolicy_edit":

			$disptemp="views/policy.php"; 

			$left_dashboard_focus='class="selected"'; 

			break;
			
			
			
			case "com_conditions":

			$disptemp="views/conditions.php"; 

			$left_dashboard_focus='class="selected"'; 

			break;

			case "com_conditions_insert":

			$disptemp="views/conditions.php"; 

			$left_dashboard_focus='class="selected"'; 

			break;
			
			case "com_conditions_edit":

			$disptemp="views/conditions.php"; 

			$left_dashboard_focus='class="selected"'; 

			break;
			
			
			case "com_legal":

			$disptemp="views/legal.php"; 

			$left_dashboard_focus='class="selected"'; 

			break;

			case "com_legal_insert":

			$disptemp="views/legal.php"; 

			$left_dashboard_focus='class="selected"'; 

			break;
			
			case "com_legal_edit":

			$disptemp="views/legal.php"; 

			$left_dashboard_focus='class="selected"'; 

			break;
			
			
			case "com_subdepts":

			$disptemp="views/subdeparts.php"; 

			$left_dashboard_focus='class="selected"'; 

			break;

			case "com_subdepts_insert":

			$disptemp="views/subdeparts.php"; 

			$left_dashboard_focus='class="selected"'; 

			break;
			
			case "com_subdepts_edit":

			$disptemp="views/subdeparts.php"; 

			$left_dashboard_focus='class="selected"'; 

			break;
			
			
			case "com_continent":

			$disptemp="views/continents.php"; 

			$left_dashboard_focus='class="selected"'; 

			break;

			case "com_continent_insert":

			$disptemp="views/continents.php"; 

			$left_dashboard_focus='class="selected"'; 

			break;
			
			case "com_continent_edit":

			$disptemp="views/continents.php"; 

			$left_dashboard_focus='class="selected"'; 

			break;
			
			
			case "com_news":

			$disptemp="views/news.php"; 

			$left_dashboard_focus='class="selected"'; 

			break;

			case "com_news_insert":

			$disptemp="views/news.php"; 

			$left_dashboard_focus='class="selected"'; 

			break;
			
			case "com_news_edit":

			$disptemp="views/news.php"; 

			$left_dashboard_focus='class="selected"'; 

			break;
			
			
			case "com_contentpages":

			$disptemp="views/contentpages.php"; 

			$left_dashboard_focus='class="selected"'; 

			break;

			case "com_contentpages_insert":

			$disptemp="views/contentpages.php"; 

			$left_dashboard_focus='class="selected"'; 

			break;
			
			case "com_contentpages_edit":

			$disptemp="views/contentpages.php"; 

			$left_dashboard_focus='class="selected"'; 

			break;
			
			case "com_complaints":

			$disptemp="views/complaints.php"; 

			$left_dashboard_focus='class="selected"'; 

			break;

			case "com_complaints_insert":

			$disptemp="views/complaints.php"; 

			$left_dashboard_focus='class="selected"'; 

			break;
			
			case "com_complaints_edit":

			$disptemp="views/complaints.php"; 

			$left_dashboard_focus='class="selected"'; 

			break;
			
			case "com_category":

			$disptemp="views/category.php"; 

			$left_dashboard_focus='class="selected"'; 

			break;
			
			case "com_category_insert":

			$disptemp="views/category.php"; 

			$left_dashboard_focus='class="selected"'; 

			break;
			
			case "com_category_edit":

			$disptemp="views/category.php"; 

			$left_dashboard_focus='class="selected"'; 

			break;
			
			case "com_departments":

			$disptemp="views/department.php"; 

			$left_dashboard_focus='class="selected"'; 

			break;
			
			case "com_departments_insert":

			$disptemp="views/department.php"; 

			$left_dashboard_focus='class="selected"'; 

			break;
			
			case "com_departments_edit":

			$disptemp="views/department.php"; 

			$left_dashboard_focus='class="selected"'; 

			break;
			
			case "com_subscribers":

			$disptemp="views/subscribers.php"; 

			$left_dashboard_focus='class="selected"'; 

			break;
			
			case "com_subscribers_insert":

			$disptemp="views/subscribers.php"; 

			$left_dashboard_focus='class="selected"'; 

			break;
			
			
			
			case "com_subscribers_edit":

			$disptemp="views/subscribers.php"; 

			$left_dashboard_focus='class="selected"'; 

			break;
			
			
			case "com_footertabs":

			$disptemp="views/footer_tabs.php"; 

			$left_dashboard_focus='class="selected"'; 

			break;
			
			case "com_footertabs_insert":

			$disptemp="views/footer_tabs.php"; 

			$left_dashboard_focus='class="selected"'; 

			break;
			
			case "com_footertabs_edit":

			$disptemp="views/footer_tabs.php"; 

			$left_dashboard_focus='class="selected"'; 

			break;
			
			
			case "com_country":

			$disptemp="views/country.php"; 

			$left_dashboard_focus='class="selected"'; 

			break;
			
			case "com_country_edit":

			$disptemp="views/country.php"; 

			$left_dashboard_focus='class="selected"'; 

			break;
			
			case "com_country_insert":

			$disptemp="views/country.php"; 

			$left_dashboard_focus='class="selected"'; 

			break;
			
			
			case "com_productview":

			$disptemp="views/productview.php"; 

			$left_dashboard_focus='class="selected"'; 

			break;

			case "com_productview_insert":

			$disptemp="views/productview.php"; 

			$left_dashboard_focus='class="selected"'; 

			break;
			
			case "com_fieldattribute":

			$disptemp="views/productfieldattributes.php"; 

			$left_dashboard_focus='class="selected"'; 

			break;

			case "com_fieldattribute_insert":

			$disptemp="views/productfieldattributes.php"; 

			$left_dashboard_focus='class="selected"'; 

			break;
			
			
			

			case "com_contentpage":

			$disptemp="views/contentpage.php"; 

			$left_dashboard_focus='class="selected"'; 

			break;

			case "com_contentpage_insert":

			$disptemp="views/contentpage.php"; 

			$left_dashboard_focus='class="selected"'; 

			break;
			
			case "com_languagepage":

			$disptemp="views/languagepage.php"; 

			$left_dashboard_focus='class="selected"'; 

			break;

			case "com_languagepage_insert":

			$disptemp="views/languagepage.php"; 

			$left_dashboard_focus='class="selected"'; 

			break;
			
			
			case "com_regusers":

			$disptemp="views/regusers.php"; 

			$left_dashboard_focus='class="selected"'; 
			

			break;

			case "com_regusers_insert":

			$disptemp="views/regusers.php"; 

			$left_dashboard_focus='class="selected"'; 

			break;
			
			case "com_regusers_edit":

			$disptemp="views/regusers.php"; 

			$left_dashboard_focus='class="selected"'; 

			break;
			
			
			case "com_translatorspage":

			$disptemp="views/translatorspage.php"; 

			$left_dashboard_focus='class="selected"'; 

			break;
	
			case "com_translatorspage_insert":

			$disptemp="views/translatorspage.php"; 

			$left_dashboard_focus='class="selected"'; 

			break;
			
			case "com_translatorspage_view":

			$disptemp="views/translatorspage.php"; 

			$left_dashboard_focus='class="selected"'; 

			break;
			
			case "com_interpreterspage":

			$disptemp="views/interpreterspage.php"; 

			$left_dashboard_focus='class="selected"'; 

			break;

			case "com_interpreterspage_insert":

			$disptemp="views/interpreterspage.php"; 

			$left_dashboard_focus='class="selected"'; 

			break;
			
			case "com_interpreterspage_view":

			$disptemp="views/interpreterspage.php"; 

			$left_dashboard_focus='class="selected"'; 

			break;
			
			
			case "com_tutor":

			$disptemp="views/tutor.php"; 

			$left_dashboard_focus='class="selected"'; 
			

			break;

			case "com_tutor_insert":

			$disptemp="views/tutor.php"; 

			$left_dashboard_focus='class="selected"'; 

			break;
			
			case "com_categories":

			$disptemp="views/categories.php"; 

			$left_jobs_focus='class="selected"'; 

			break;

			case "com_categories_insert":

			$disptemp="views/categories.php"; 

			$left_jobs_focus='class="selected"'; 

			break;
			
			
			case "com_jobs":

			$disptemp="views/jobs.php"; 

			$left_dashboard_focus='class="selected"'; 

			break;

			case "com_jobs_insert":

			$disptemp="views/jobs.php"; 

			$left_dashboard_focus='class="selected"'; 

			break;
			
			case "com_jobs_view":

			$disptemp="views/jobs.php"; 

			$left_dashboard_focus='class="selected"'; 

			break;
			
			case "com_jobs_proposals_view":

			$disptemp="views/jobs.php"; 

			$left_dashboard_focus='class="selected"'; 

			break;
			
			
			case "com_orders":

			$disptemp="views/orders.php"; 

			$left_dashboard_focus='class="selected"'; 

			break;

			case "com_orders_insert":

			$disptemp="views/orders.php"; 

			$left_dashboard_focus='class="selected"'; 

			break;
			
			case "com_orders_view":

			$disptemp="views/orders.php"; 

			$left_dashboard_focus='class="selected"'; 

			break;
			
			case "com_orders_proposals_view":

			$disptemp="views/orders.php"; 

			$left_dashboard_focus='class="selected"'; 

			break;
			
			
			case "com_email_template":

			$disptemp="views/email_template.php"; 

			$left_dashboard_focus='class="selected"'; 

			break;

			case "com_email_template_insert":

			$disptemp="views/email_template.php"; 

			$left_dashboard_focus='class="selected"'; 

			break;
			
			/*case "com_videos":

			$disptemp="views/videos.php"; 

			$left_jobs_focus='class="selected"'; 

			break;
			case "com_videos_insert":

			$disptemp="views/videos.php"; 

			$left_jobs_focus='class="selected"'; 

			break;*/
			
			
			case "com_rating":
			$disptemp="views/rating.php"; 
			$left_rating_focus='class="selected"'; 
			break;
			case "com_rating_insert":
			$disptemp="views/rating.php"; 
			$left_rating_focus='class="selected"'; 
			break;
			
			
			case "com_sub":

			$disptemp="views/subscribe.php"; 

			$left_subscribe_focus='class="selected"'; 
			
			break;
			case "com_sub_insert":

			$disptemp="views/subscribe.php"; 

			$left_subscribe_focus='class="selected"'; 

			break;
			
			
			case "com_subscribe":
			$disptemp="views/subscribe.php"; 
			$left_sub_focus='class="selected"'; 
			break;
			case "com_subscribe_insert":
			$disptemp="views/subscribe.php"; 
			$left_sub_focus='class="selected"'; 
			break;
			
			
			case "com_contactus":
			$disptemp="views/contactus.php"; 
			$left_jobs_focus='class="selected"'; 
			break;
			case "com_contactus_insert":
			$disptemp="views/contactus.php"; 
			$left_jobs_focus='class="selected"'; 
			break;
			
			
			case "com_paysection":
			$disptemp="views/paysection.php"; 
			$left_jobs_focus='class="selected"'; 
			break;
			case "com_paysection_insert":
			$disptemp="views/paysection.php"; 
			$left_jobs_focus='class="selected"'; 
			break;
			
			
			case "com_invitation":
			$disptemp="views/invitation.php"; 
			$left_jobs_focus='class="selected"'; 
			break;
			case "com_invitation_insert":
			$disptemp="views/invitation.php"; 
			$left_jobs_focus='class="selected"'; 
			break;
			
			
			case "com_testimonial":
			$disptemp="views/testimonial.php"; 
			$left_testimonial_focus='class="selected"'; 
			break;
			case "com_testimonial_insert":
			$disptemp="views/testimonial.php"; 
			$left_testimonial_focus='class="selected"'; 
			break;
			
			
			case "com_works":
			$disptemp="views/works.php"; 
			$left_works_focus='class="selected"'; 
			break;

			case "com_works_insert":
			$disptemp="views/works.php"; 
			$left_works_focus='class="selected"'; 
			break;
			
			case "com_choose":
			$disptemp="views/choose.php"; 
			$left_choose_focus='class="selected"'; 
			break;

			case "com_choose_insert":
			$disptemp="views/choose.php"; 
			$left_choose_focus='class="selected"'; 
			break;
			
			
			case "com_find":
			$disptemp="views/find.php"; 
			$left_find_focus='class="selected"'; 
			break;
			
			case "com_find_insert":
			$disptemp="views/find.php"; 
			$left_find_focus='class="selected"'; 
			break;
			
			
			
			/*case "com_aboutus":
			$disptemp="views/aboutus.php"; 
			$left_aboutus_focus='class="selected"'; 
			break;
			
			case "com_aboutus_insert":
			$disptemp="views/aboutus.php"; 
			$left_aboutus_focus='class="selected"'; 
			break;
			
			case "com_aboutus_edit":
			$disptemp="views/aboutus.php"; 
			$left_aboutus_focus='class="selected"'; 
			break;*/
			
			case "com_blog":
			$disptemp="views/blog.php"; 
			$left_blog_focus='class="selected"'; 
			break;
			case "com_blog_insert":
			$disptemp="views/blog.php"; 
			$left_blog_focus='class="selected"'; 
			break;
			
			
			case "com_news":
			$disptemp="views/news.php"; 
			$left_news_focus='class="selected"'; 
			break;
			
			case "com_news_insert":
			$disptemp="views/news.php"; 
			$left_news_focus='class="selected"'; 
			break;
			
			case "com_news_edit":
			$disptemp="views/news.php"; 
			$left_news_focus='class="selected"'; 
			break;
			
			case "com_banners":
			$disptemp="views/banners.php"; 
			$left_banners_focus='class="selected"'; 
			break;
			
			case "com_banners_insert":
			$disptemp="views/banners.php"; 
			$left_banners_focus='class="selected"'; 
			break;
			
			case "com_banners_edit":
			$disptemp="views/banners.php"; 
			$left_banners_focus='class="selected"'; 
			break;
			
			/*case "com_teams":
			$disptemp="views/teams.php"; 
			$left_teams_focus='class="selected"'; 
			break;
			case "com_teams_insert":
			$disptemp="views/teams.php"; 
			$left_teams_focus='class="selected"'; 
			break;
			
			
			case "com_matches":
			$disptemp="views/matches.php"; 
			$left_matches_focus='class="selected"'; 
			break;
			case "com_matches_insert":
			$disptemp="views/matches.php"; 
			$left_matches_focus='class="selected"'; 
			break;
*/		
			
/*checked*/			
			
			
			
			
			

			case "com_headerbanners":

			$disptemp="views/headerbanners.php"; 

			$left_dashboard_focus='class="selected"'; 

			break;

			case "com_headerbanners_insert":

			$disptemp="views/headerbanners.php"; 

			$left_dashboard_focus='class="selected"'; 

			break;

			
            
			

			/*case "com_contentpages_insert":



			$disptemp="views/franchisecontentpages.php"; 



			$left_franchisor_focus='class="selected"'; 



			break;

			case "com_contentpages":



			$disptemp="views/franchisecontentpages.php"; 



			$left_franchisor_focus='class="selected"'; 



			break; */

			

			

			case "com_country":



			$disptemp="views/country.php";



			$left_regions_focus='class="selected"'; 



			break;						

			

			case "com_country_insert":



			$disptemp="views/country.php";



			$left_regions_focus='class="selected"'; 



			break;

			

			case "com_state":



			$disptemp="views/state.php";



			$left_regions_focus='class="selected"'; 



			break;

						

			case "com_state_insert":



			$disptemp="views/state.php";



			$left_regions_focus='class="selected"'; 



			break;

						

			case "com_city":



			$disptemp="views/city.php";



			$left_regions_focus='class="selected"'; 



			break;

						

			case "com_city_insert":



			$disptemp="views/city.php";



			$left_regions_focus='class="selected"'; 



			break;

			

			

			

			/*-------Posts---------*/

			

			case "com_testimonials":

			

			$disptemp="views/testimonials.php";

			

			$left_posts_focus='class="selected"';

			

			break;

			

			case "com_testimonials_insert":

			

			$disptemp="views/testimonials.php";

			

			$left_posts_focus='class="selected"';

			

			break;

			

			

			/*case "com_email":

			

			$disptemp="views/email.php";

			

			$left_posts_focus='class="selected"';

			

			break;

			

			case "com_email_insert":

			

			$disptemp="views/email.php";

			

			$left_posts_focus='class="selected"';

			

			break;*/

			

			case "com_articles":



			$disptemp="views/articles.php";



			$left_posts_focus='class="selected"';  



			break;

			

			case "com_articles_insert":



			$disptemp="views/articles.php";



			$left_posts_focus='class="selected"';  



			break;

			

			case "com_compevents":



			$disptemp="views/competitions.php";



			$left_competition_focus='class="selected"';  



			break;

			case "com_compevents_insert":



			$disptemp="views/competitions.php";



			$left_competition_focus='class="selected"';  



			break;

			
			

			case "com_faq":



			$disptemp="views/faq.php";



			$left_posts_focus='class="selected"';  



			break;

			

			case "com_faq_insert":



			$disptemp="views/faq.php";



			$left_posts_focus='class="selected"';  



			break;

			

			

			case "com_seo":



			$disptemp="views/seo.php";



			$left_posts_focus='class="selected"';  



			break;

			

			case "com_seo_insert":



			$disptemp="views/seo.php";



			$left_posts_focus='class="selected"';  



			break;

			

			case "com_notificationsend":



			$disptemp="views/notificationsend.php";



			$left_posts_focus='class="selected"';  



			break;

			case "com_notificationsent":



			$disptemp="views/sentnotification.php";



			$left_posts_focus='class="selected"';  



			break;

			

			case "com_notificationemail":



			$disptemp="views/notificationemail.php";



			$left_posts_focus='class="selected"';  



			break;

			

			

			case "com_eventssend":



			$disptemp="views/eventssend.php";



			$left_posts_focus='class="selected"';  



			break;

			case "com_franchisenotification":



			$disptemp="views/franchisenotification.php";



			$left_posts_focus='class="selected"';  



			break;

			case "com_franchiseevents":



			$disptemp="views/franchiseevents.php";



			$left_posts_focus='class="selected"';  



			break;

			case "com_franchisenotification1":



			$disptemp="views/subfranchiseenotification.php";



			$left_posts_focus='class="selected"';  



			break;

			case "com_franchiseevents1":



			$disptemp="views/subfranchiseeevents.php";



			$left_posts_focus='class="selected"';  



			break;

			

			

			/*-------Menu List---------*/
	

			

			

			case "com_subcategory":

			$disptemp="views/subcategories.php"; 

			$left_jobs_focus='class="selected"'; 

			break;

			

			case "com_subcategory_insert":

			$disptemp="views/subcategories.php"; 

			$left_jobs_focus='class="selected"'; 

			break;

			

			case "com_subcategory":

			$disptemp="views/subcategories.php"; 

			$left_jobs_focus='class="selected"'; 

			break;

			

			case "com_subcategory_insert":

			$disptemp="views/subcategories.php"; 

			$left_jobs_focus='class="selected"'; 

			break;



			/***/
			case "com_menu":

			$disptemp="views/menu.php"; 

			$left_jobs_focus='class="selected"'; 

			break;

			

			case "com_menu_insert":

			$disptemp="views/menu.php"; 

			$left_jobs_focus='class="selected"'; 

			break;

			

			case "com_submenu":

			$disptemp="views/submenu.php"; 

			$left_jobs_focus='class="selected"'; 

			break;

			

			case "com_submenu_insert":

			$disptemp="views/submenu.php"; 

			$left_jobs_focus='class="selected"'; 

			break;
			
			
			case "com_submenu_edit":

			$disptemp="views/submenu.php"; 

			$left_jobs_focus='class="selected"'; 

			break;
			
			
			case "com_getinvolved":

			$disptemp="views/getinvolved.php"; 

			$left_jobs_focus='class="selected"'; 

			break;

			

			case "com_getinvolved_insert":

			$disptemp="views/getinvolved.php"; 

			$left_jobs_focus='class="selected"'; 

			break;
			
			case "com_getinvolved_edit":

			$disptemp="views/getinvolved.php"; 

			$left_jobs_focus='class="selected"'; 

			break;

			
			case "com_whatwedo":

			$disptemp="views/whatwedo.php"; 

			$left_jobs_focus='class="selected"'; 

			break;

			

			case "com_whatwedo_insert":

			$disptemp="views/whatwedo.php"; 

			$left_jobs_focus='class="selected"'; 

			break;
			
			case "com_whatwedo_edit":

			$disptemp="views/whatwedo.php"; 

			$left_jobs_focus='class="selected"'; 

			break;



			/*-------Petgallery---------*/

			

			case "com_petgallery":

			$disptemp="views/petsgallery.php"; 

			$left_jobs_focus='class="selected"'; 

			break;

            case "com_petgallery_insert":

			$disptemp="views/petsgallery.php"; 

			$left_jobs_focus='class="selected"'; 

			break;

			

			case "com_messages":

			$disptemp="views/messages.php"; 

			$left_jobs_focus='class="selected"'; 

			break;

			

			case "com_messages_insert":

			$disptemp="views/messages.php"; 

			$left_jobs_focus='class="selected"'; 

			break;

			/*-------Notification---------*/

			

			case "com_notification":

			$disptemp="views/notification.php"; 

			$left_jobs_focus='class="selected"'; 

			break;

			/*-------Blogs---------*/

			

			case "com_blogpost":

			$disptemp="views/blog.php"; 

			$left_jobs_focus='class="selected"'; 

			break;

			case "com_blogpost_insert":

			$disptemp="views/blog.php"; 

			$left_jobs_focus='class="selected"'; 

			break;

			case "com_blogcomments":

			$disptemp="views/blognew.php"; 

			$left_jobs_focus='class="selected"'; 

			break;

			

			/*-------crowrdcube---------*/

				

			

			case "com_newsletters":

			$disptemp="views/newsletters.php"; 

			$left_dashboard_focus='class="selected"'; 

			break;

			case "com_email":

			

			$disptemp="views/mail.php";

			

			$left_posts_focus='class="selected"';

			

			break;
			
			case "com_email_insert":

			

			$disptemp="views/mail.php";

			

			$left_posts_focus='class="selected"';

			

			break;


			/*..........documents.................*/

			case "com_documents":

			$disptemp="views/documents.php"; 

			$left_jobs_focus='class="selected"'; 

			break;

			/*................................... */

			

			case "com_faq_categories":

			$disptemp="views/faq_category.php"; 

			$left_jobs_focus='class="selected"'; 

			break;

			case "com_faq_categories_insert":

			$disptemp="views/faq_category.php"; 

			$left_jobs_focus='class="selected"'; 

			break;

			case "com_changepwd":

			$disptemp="views/changepwd.php"; 

			$left_jobs_focus='class="selected"'; 

			break;

			

			

			

			/*---------------News---------------*/

			case "com_news":

			$disptemp="views/news.php"; 

			$left_news_focus='class="selected"'; 

			break;

			case "com_news_insert":

			$disptemp="views/news.php"; 

			$left_news_focus='class="selected"'; 

			break;

			

			/*---------------chairty--------------*/

			case "com_charity":

			$disptemp="views/charity.php"; 

			$left_jobs_focus='class="selected"'; 

			break;

			case "com_charity_insert":

			$disptemp="views/charity.php"; 

			$left_jobs_focus='class="selected"'; 

			break;

			case "com_messages":

			$disptemp="views/messages.php"; 

			$left_jobs_focus='class="selected"'; 

			break;

			case "com_messages_insert":

			$disptemp="views/messages.php"; 

			$left_jobs_focus='class="selected"'; 

			break;

			

			/*---------------Pledgeamount--------------*/

			case "com_pledgeamount":

			$disptemp="views/pledgeamount.php"; 

			$left_jobs_focus='class="selected"'; 

			break;

			

			

			/*---------------waste--------------*/

			case "com_faq_insert_test":

			$disptemp="views/faq1.php"; 

			$left_jobs_focus='class="selected"'; 

			break;	

			case "com_faq_insert_tes":

			$disptemp="views/faq1.php"; 

			$left_jobs_focus='class="selected"'; 

			break;	

			case "com_popuppdf":

			$disptemp="views/popuppdf.php"; 

			$left_jobs_focus='class="selected"'; 

			break;

			case "com_auto_test":

			$disptemp="views/auto.php"; 

			$left_jobs_focus='class="selected"'; 

			break;
			
			
			
			
			case "com_clientlist":

			$disptemp="views/clientlist.php"; 

			$left_jobs_focus='class="selected"'; 

			break;

			case "com_clientlist_insert":

			$disptemp="views/clientlist.php"; 

			$left_jobs_focus='class="selected"'; 

			break;

		}		

?>