<div id="sidebar-left" class="span2">
				<div class="nav-collapse sidebar-nav">
                

					<ul class="nav nav-tabs nav-stacked main-menu">
                    
				<li>
							<a href="#" class="dropmenu"> <i class="icon-edit"></i><span class="hidden-tablet">Dashboard</span></a>
							<ul <?php if($option=='com_dashboard'||$option=='com_sitesettings') ?>>
							
								<li  <?php if($option=='com_dashboard'){echo 'class="active"';} ?>><a class="submenu" href="index.php?option=com_dashboard"><i class="icon-file-alt"></i><span class="hidden-tablet">Dashboard View</span></a></li>
								
								
								<li <?php if($option=='com_sitesettings'){echo 'class="active"';} ?>><a class="submenu" href="index.php?option=com_sitesettings"><i class="icon-file-alt"></i><span class="hidden-tablet">Site Settings</span></a></li>

							</ul>	
				</li>
                
                
                
						
					<li>
							<a href="#" class="dropmenu"> <i class="icon-edit"></i><span class="hidden-tablet">Users</span></a>
							<ul <?php if($option=='com_adminlist'||$option=='com_adminlist_insert') ?>>
                            
                            <?php if($_SESSION['roletype']=="superadmin"){ ?>
								<li  <?php if($option=='com_adminlist'){echo 'class="active"';} ?>><a class="submenu" href="index.php?option=com_adminlist"><i class="icon-file-alt"></i><span class="hidden-tablet">Admin Users</span></a></li>
                                <?php } ?> 
								<li <?php if($option=='com_adminlist_insert'){echo 'class="active"';} ?>><a class="submenu" href="index.php?option=com_regusers"><i class="icon-file-alt"></i><span class="hidden-tablet">Registered Users</span></a></li>

							</ul>	
						</li>
						
						<?php /*<li>
							<a href="#" class="dropmenu"> <i class="icon-edit"></i><span class="hidden-tablet">Sub menu for About us</span></a>
							<ul <?php if($option=='com_submenu'||$option=='com_submenu_insert') ?>>
                            
                            
								<li  <?php if($option=='com_submenu'){echo 'class="active"';} ?>><a  class="submenu" href="index.php?option=com_submenu"><i class="icon-file-alt"></i><span class="hidden-tablet">Add Page</span></a></li>
                                
								

							</ul>	
						</li>*/?>
                        
                        
                        
						
						<?php /*?><li>
							<a href="#"  class="dropmenu"><i class="icon-tasks"></i><span class="hidden-tablet"> Sub menu for About us</span></a>
								<ul  <?php if($option=='com_submenu'||$option=='com_submenu_insert') ?>>
									
									
									
									<li  <?php if($option=='com_submenu'){echo 'class="active"';} ?>><a class="submenu" href="index.php?option=com_submenu"><i class="icon-file-alt"></i><span class="hidden-tablet">Add Page</span></a></li>				
									
									

								</ul>	
							
							
						</li><?php */?>
						
						
						<li>
							<a href="#"  class="dropmenu"><i class="icon-tasks"></i><span class="hidden-tablet"> Pages</span></a>
								<ul  <?php if($option=='com_aboutus'||$option=='com_videos'||$option=='com_videos_insert'||$option=='com_privacypolicy'||$option=='com_conditions') ?>>
									
									
									
									<li  <?php if($option=='com_complaints'){echo 'class="active"';} ?>><a class="submenu" href="index.php?option=com_complaints"><i class="icon-file-alt"></i><span class="hidden-tablet">Complaints</span></a></li>				
									
									<li <?php if($option=='com_videos'){echo 'class="active"';} ?>><a class="submenu" href="index.php?option=com_videos"><i class="icon-file-alt"></i><span class="hidden-tablet">Videos</span></a></li>
									<?php /*<li  <?php if($option=='com_privacypolicy'){echo 'class="active"';} ?>><a class="submenu" href="index.php?option=com_privacypolicy"><i class="icon-file-alt"></i><span class="hidden-tablet">Privacy Policy</span></a></li>
									<li <?php if($option=='com_conditions'){echo 'class="active"';} ?>><a class="submenu" href="index.php?option=com_conditions"><i class="icon-file-alt"></i><span class="hidden-tablet">Terms and Conditions</span></a></li>*/?>


								</ul>	
							
							
						</li>
                        
						
						<li>
							<a href="#"  class="dropmenu"><i class="icon-tasks"></i><span class="hidden-tablet">What We Do</span></a>
								<ul  <?php if($option=='com_whatwedo'||$option=='com_whatwedo_insert') ?>>
									
									
									
							<li  <?php if($option=='com_whatwedo'){echo 'class="active"';} ?>><a class="submenu" href="index.php?option=com_whatwedo"><i class="icon-file-alt"></i><span class="hidden-tablet">Add Content</span></a></li>				
									
									


								</ul>	
							
							
						</li>
						
						
						<li>
							<a href="#"  class="dropmenu"><i class="icon-tasks"></i><span class="hidden-tablet">Get Involved</span></a>
								<ul  <?php if($option=='com_getinvolved'||$option=='com_getinvolved_insert') ?>>
									
									
									
							<li  <?php if($option=='com_getinvolved'){echo 'class="active"';} ?>><a class="submenu" href="index.php?option=com_getinvolved"><i class="icon-file-alt"></i><span class="hidden-tablet">Add Content</span></a></li>				
									
									


								</ul>	
							
							
						</li>
						
						
                        <li>
							<a href="#"  class="dropmenu"><i class="icon-tasks"></i><span class="hidden-tablet">Sub Menu</span></a>
								<ul  <?php if($option=='com_submenu'||$option=='com_submenu_insert') ?>>
									
									
									
									<li <?php if($option=='com_submenu'){echo 'class="active"';} ?>><a class="submenu" href="index.php?option=com_submenu"><i class="icon-file-alt"></i><span class="hidden-tablet">Add Page</span></a></li>				
									
									


								</ul>	

						</li>
						
						<li>
							<a href="index.php?option=com_contentpages"><i class="icon-edit"></i><span class="hidden-tablet">Content Pages</span></a>		
						</li>
						
						<li>
							<a href="index.php?option=com_legal"><i class="icon-edit"></i><span class="hidden-tablet">Get Legal Expert</span></a>		
						</li>
						
						
						<li>
							<a href="index.php?option=com_news"> <i class="icon-edit"></i><span class="hidden-tablet">News</span></a>		
						</li>
						
						<li>
							<a href="index.php?option=com_banners"><i class="icon-edit"></i><span class="hidden-tablet">Banners</span></a>		
						</li>
						
						<li>
							<a href="index.php?option=com_category"><i class="icon-edit"></i><span class="hidden-tablet">Category</span></a>		
						</li>
						
						<li>
							<a href="#" class="dropmenu"> <i class="icon-edit"></i><span class="hidden-tablet">Footer Section</span></a>
							<ul <?php if($option=='com_footertabs'||$option=='com_footertabs_edit') ?>>
								<li  <?php if($option=='com_footertabs'){echo 'class="active"';} ?>><a class="submenu" href="index.php?option=com_footertabs"><i class="icon-file-alt"></i><span class="hidden-tablet">Footer Tabs</span></a></li>
								<!--<li <?php if($option=='com_sitesettings'){echo 'class="active"';} ?>><a class="submenu" href="index.php?option=com_sitesettings"><i class="icon-file-alt"></i><span class="hidden-tablet">Site settings</span></a></li>-->

							</ul>	
						</li>
						
						
						<li>
							<a href="index.php?option=com_subscribers"><i class="icon-edit"></i><span class="hidden-tablet">Subscribers</span></a>		
						</li>
						
					<!--	<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Dropdown</span><span class="label label-important"> 3 </span></a>
							<ul>
								<li><a class="submenu" href="submenu.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 1</span></a></li>
								<li><a class="submenu" href="submenu2.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 2</span></a></li>
								<li><a class="submenu" href="submenu3.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 3</span></a></li>
							</ul>	
						</li>
						
						
						<li><a href="chart.php"><i class="icon-list-alt"></i><span class="hidden-tablet"> Charts</span></a></li>
						
						<li><a href="gallery.html"><i class="icon-picture"></i><span class="hidden-tablet"> Gallery</span></a></li>
						<li><a href="tables.php"><i class="icon-align-justify"></i><span class="hidden-tablet"> Tables</span></a></li>
						<li><a href="calendar.html"><i class="icon-calendar"></i><span class="hidden-tablet"> Calendar</span></a></li>
						<li><a href="file-manager.html"><i class="icon-folder-open"></i><span class="hidden-tablet"> File Manager</span></a></li>
						<li><a href="icon.html"><i class="icon-star"></i><span class="hidden-tablet"> Icons</span></a></li>
						<li><a href="../../index.php"><i class="icon-lock"></i><span class="hidden-tablet"> Login Page</span></a></li>-->
						
						<li>
							<a href="#" class="dropmenu"> <i class="icon-edit"></i><span class="hidden-tablet">Supported Pages</span></a>
							<ul <?php if($option=='com_country'||$option=='com_departments') ?>>
								<li  <?php if($option=='com_country'){echo 'class="active"';} ?>><a class="submenu" href="index.php?option=com_country"><i class="icon-file-alt"></i><span class="hidden-tablet">Country List</span></a></li>
								
								<li  <?php if($option=='com_continent'){echo 'class="active"';} ?>><a class="submenu" href="index.php?option=com_continent"><i class="icon-file-alt"></i><span class="hidden-tablet">Continent List</span></a></li>
								
								<li  <?php if($option=='com_departments'){echo 'class="active"';} ?>><a class="submenu" href="index.php?option=com_departments"><i class="icon-file-alt"></i><span class="hidden-tablet">Department List</span></a></li>
								
								<li <?php if($option=='com_subdepts'){echo 'class="active"';}?>><a class="submenu" href="index.php?option=com_subdepts"><i class="icon-file-alt"></i><span class="hidden-tablet">Sub Departments</span></a></li>

							</ul>
						</li>
					
					</ul>
				</div>
			</div>
