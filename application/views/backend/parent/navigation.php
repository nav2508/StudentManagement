    <div class="fixed-sidebar">
        <div class="fixed-sidebar-left sidebar--small" id="sidebar-left">
            <a href="<?php echo base_url();?>parents/panel/" class="logo">
                <div class="img-wrap">
                    <img src="<?php echo base_url();?>public/uploads/<?php echo $this->crud->getInfo('icon_white');?>">
                </div>
            </a>
            <div class="mCustomScrollbar" data-mcs-theme="dark">
                <ul class="left-menu">
                    <li>
                        <a href="javascript:void(0);" class="js-sidebar-open">
                            <i class="left-menu-icon picons-thin-icon-thin-0069a_menu_hambuger"></i>
                        </a>
                    </li>
                    <li <?php if($page_name == 'panel'):?>class="currentItem"<?php endif;?>>
                        <a href="<?php echo base_url();?>parents/panel/" data-toggle="tooltip" data-placement="right" data-original-title="<?php echo getEduAppGTLang('dashboard');?>">
                            <div class="left-menu-icon">
                                <i class="picons-thin-icon-thin-0045_home_house"></i>
                            </div>
                        </a>
                    </li>
                    <li <?php if($page_name == 'message' || $page_name == 'group'):?>class="currentItem"<?php endif;?>>
                        <a href="<?php echo base_url();?>parents/message/" data-toggle="tooltip" data-placement="right" data-original-title="<?php echo getEduAppGTLang('messages');?>">
                            <div class="left-menu-icon">
                                <i class="picons-thin-icon-thin-0322_mail_post_box"></i>
                            </div>  
                        </a>
                    </li>     
                    <li <?php if($page_name == 'teachers'):?>class="currentItem"<?php endif;?>>
                        <a href="<?php echo base_url();?>parents/teachers/" data-toggle="tooltip" data-placement="right" data-original-title="<?php echo getEduAppGTLang('teachers');?>">
                            <div class="left-menu-icon">
                                <i class="os-icon picons-thin-icon-thin-0704_users_profile_group_couple_man_woman"></i>
                            </div>  
                        </a>
                    </li> 
                    <li <?php if($page_name == 'class_routine'):?>class="currentItem"<?php endif;?>>
                        <a href="<?php echo base_url();?>parents/class_routine/" data-toggle="tooltip" data-placement="right" data-original-title="<?php echo getEduAppGTLang('class_routine');?>">
                            <div class="left-menu-icon">
                                <i class="picons-thin-icon-thin-0029_time_watch_clock_wall"></i>
                            </div>
                        </a>
                    </li> 
                    
                    <li <?php if($page_name == 'marks'):?>class="currentItem"<?php endif;?>>
                        <a href="<?php echo base_url();?>parents/marks/" data-toggle="tooltip" data-placement="right" data-original-title="<?php echo getEduAppGTLang('marks');?>">
                            <div class="left-menu-icon">
                                <i class="picons-thin-icon-thin-0729_student_degree_science_university_school_graduate"></i>
                            </div>
                        </a>
                    </li> 
                    <li <?php if($page_name == 'attendance_report' || $page_name == 'subjects' || $page_name == 'forum_room' || $page_name == 'subject_marks' || $page_name == 'study_material' || $page_name == 'forum' || $page_name == 'subject_dashboard' || $page_name == 'homework' || $page_name == 'online_exams'):?>class="currentItem"<?php endif;?>>
                        <a href="<?php echo base_url();?>parents/subjects/" data-toggle="tooltip" data-placement="right" data-original-title="<?php echo getEduAppGTLang('academic');?>">
                            <div class="left-menu-icon">
                                <i class="picons-thin-icon-thin-0680_pencil_ruller_drawing"></i>
                            </div>
                        </a>
                    </li>  
                    
                    
                    
                    
                </ul>
            </div>
        </div>

        <div class="fixed-sidebar-left sidebar--large" id="sidebar-left-1">
            <a href="<?php echo base_url();?>parents/panel/" class="logo">
                <div class="img-wrap">
                    <img src="<?php echo base_url();?>public/uploads/<?php echo $this->crud->getInfo('icon_white');?>">
                </div>
                <div class="title-block">
                    <h6 class="logo-title"><?php echo $this->crud->getInfo('system_name');?></h6>
                </div>
            </a>
            <div class="mCustomScrollbar" data-mcs-theme="dark">
                <ul class="left-menu">
                    <li>
                        <a href="javascript:void(0);" class="js-sidebar-open">
                            <i class="left-menu-icon picons-thin-icon-thin-0069a_menu_hambuger"></i>
                            <span class="left-menu-title"><?php echo getEduAppGTLang('minimize_menu');?></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>parents/panel/">
                            <div class="left-menu-icon">
                                <i class="picons-thin-icon-thin-0045_home_house"></i>
                            </div>
                            <span class="left-menu-title"><?php echo getEduAppGTLang('dashboard');?></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>parents/message/">
                            <div class="left-menu-icon">
                                <i class="picons-thin-icon-thin-0322_mail_post_box"></i>
                            </div>
                            <span class="left-menu-title"><?php echo getEduAppGTLang('messages');?></span>
                        </a>
                    </li>     
                    <li>
                        <a href="<?php echo base_url();?>parents/teachers/">
                            <div class="left-menu-icon">
                                <i class="os-icon picons-thin-icon-thin-0704_users_profile_group_couple_man_woman"></i>
                            </div>
                            <span class="left-menu-title"><?php echo getEduAppGTLang('teachers');?></span>
                        </a>
                    </li> 
                    <li>
                        <a href="<?php echo base_url();?>parents/class_routine/">
                            <div class="left-menu-icon">
                                <i class="picons-thin-icon-thin-0029_time_watch_clock_wall"></i>
                            </div>
                            <span class="left-menu-title"><?php echo getEduAppGTLang('class_routine');?></span>
                        </a>
                    </li> 
                    
                    <li>
                        <a href="<?php echo base_url();?>parents/marks/">
                            <div class="left-menu-icon">
                                <i class="picons-thin-icon-thin-0729_student_degree_science_university_school_graduate"></i>
                            </div>
                            <span class="left-menu-title"><?php echo getEduAppGTLang('marks');?></span>
                        </a>
                    </li> 
                    <li>
                        <a href="<?php echo base_url();?>parents/subjects/">
                            <div class="left-menu-icon">
                                <i class="picons-thin-icon-thin-0680_pencil_ruller_drawing"></i>
                            </div>
                            <span class="left-menu-title"><?php echo getEduAppGTLang('academic');?></span>
                        </a>
                    </li>  
                    
                    
                    
                    
                    <br><br>
                    <li></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="fixed-sidebar fixed-sidebar-responsive">
        <div class="fixed-sidebar-left sidebar--small" id="sidebar-left-responsive">
            <a href="<?php echo base_url();?>parents/panel/" class="logo js-sidebar-open">
                <img src="<?php echo base_url();?>public/uploads/<?php echo $this->crud->getInfo('icon_white');?>">
            </a>
        </div>
        <div class="fixed-sidebar-left sidebar--large" id="sidebar-left-1-responsive">
            <a href="<?php echo base_url();?>parents/panel/" class="logo">
                <div class="img-wrap">
                    <img src="<?php echo base_url();?>public/uploads/<?php echo $this->crud->getInfo('icon_white');?>">
                </div>
                <div class="title-block">
                    <h6 class="logo-title"><?php echo $this->crud->getInfo('system_name');?></h6>
                </div>
            </a>
            <div class="mCustomScrollbar" data-mcs-theme="dark">
                <ul class="left-menu">
                    <li>
                        <a href="#" class="js-sidebar-open">
                            <i class="left-menu-icon picons-thin-icon-thin-0069a_menu_hambuger"></i>
                            <span class="left-menu-title"><?php echo getEduAppGTLang('minimize_menu');?></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>parents/panel/">
                            <div class="left-menu-icon">
                                <i class="picons-thin-icon-thin-0045_home_house"></i>
                            </div>
                            <span class="left-menu-title"><?php echo getEduAppGTLang('dashboard');?></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>parents/message/">
                            <div class="left-menu-icon">
                                <i class="picons-thin-icon-thin-0322_mail_post_box"></i>
                            </div>
                            <span class="left-menu-title"><?php echo getEduAppGTLang('messages');?></span>
                        </a>
                    </li>     
                    <li>
                        <a href="<?php echo base_url();?>parents/teachers/">
                            <div class="left-menu-icon">
                                <i class="os-icon picons-thin-icon-thin-0704_users_profile_group_couple_man_woman"></i>
                            </div>
                            <span class="left-menu-title"><?php echo getEduAppGTLang('teachers');?></span>
                        </a>
                    </li> 
                    <li>
                        <a href="<?php echo base_url();?>parents/class_routine/">
                            <div class="left-menu-icon">
                                <i class="picons-thin-icon-thin-0029_time_watch_clock_wall"></i>
                            </div>
                            <span class="left-menu-title"><?php echo getEduAppGTLang('class_routine');?></span>
                        </a>
                    </li> 
                    
                    <li>
                        <a href="<?php echo base_url();?>parents/marks/">
                            <div class="left-menu-icon">
                                <i class="picons-thin-icon-thin-0729_student_degree_science_university_school_graduate"></i>
                            </div>
                            <span class="left-menu-title"><?php echo getEduAppGTLang('marks');?></span>
                        </a>
                    </li> 
                    <li>
                        <a href="<?php echo base_url();?>parents/subjects/">
                            <div class="left-menu-icon">
                                <i class="picons-thin-icon-thin-0680_pencil_ruller_drawing"></i>
                            </div>
                            <span class="left-menu-title"><?php echo getEduAppGTLang('academic');?></span>
                        </a>
                    </li>  
                    
                    
                    
                    
                    <br><br>
                    <li></li>
                </ul>
            </div>
        </div>
    </div>