<?php $admin_type = $this->db->get_where('admin', array('admin_id' => $this->session->userdata('login_user_id')))->row()->owner_status;?>
    <div class="fixed-sidebar">
        <div class="fixed-sidebar-left sidebar--small" id="sidebar-left">
            <a href="<?php echo base_url();?>admin/panel/" class="logo">
                <div class="img-wrap">
                    <img src="<?php echo base_url();?>public/uploads/<?php echo $this->crud->getInfo('icon_white');?>">
                </div>
            </a>
            <div class="mCustomScrollbar" data-mcs-theme="dark">
                <ul class="left-menu">
                    <li>
                        <a href="#" class="js-sidebar-open">
                            <i class="left-menu-icon picons-thin-icon-thin-0069a_menu_hambuger"></i>
                        </a>
                    </li>
                    <li <?php if($page_name == 'panel'):?>class="currentItem"<?php endif;?>>
                        <a href="<?php echo base_url();?>admin/panel/" data-toggle="tooltip" data-placement="right" data-original-title="<?php echo getEduAppGTLang('dashboard');?>">
                            <div class="left-menu-icon">
                                <i class="picons-thin-icon-thin-0045_home_house"></i>
                            </div>
                        </a>
                    </li>
                    <!-- Messages Access -->
                    <?php if($this->db->get_where('account_role', array('type' => 'messages'))->row()->permissions == 1 || $admin_type == 1):?>
                    <li <?php if($page_name == 'message' || $page_name == 'group'):?>class="currentItem"<?php endif;?>>
                        <a href="<?php echo base_url();?>admin/message/" data-toggle="tooltip" data-placement="right" data-original-title="<?php echo getEduAppGTLang('messages');?>">
                            <div class="left-menu-icon">
                                <i class="picons-thin-icon-thin-0322_mail_post_box"></i>
                            </div>
                        </a>
                    </li> 
                    <?php endif;?>
                    <!-- End Messages Access -->
                    <li <?php if($page_name == 'subject_marks' || $page_name == 'admin_update' || $page_name == 'admin_profile' || $page_name == 'librarian_update' || $page_name == 'librarian_profile' || $page_name == 'accountant_profile' || $page_name == 'accountant_update' || $page_name == 'parent_childs' || $page_name == 'parent_update' || $page_name == 'parent_profile' || $page_name == 'accountant' || $page_name == 'student_profile_report' || $page_name == 'student_profile_attendance' || $page_name == 'student_marks' || $page_name == 'student_invoices' || $page_name == 'student_update' || $page_name == 'student_portal' || $page_name == 'librarian' || $page_name == 'pending' || $page_name == 'teacher_subjects' || $page_name == 'teacher_schedules' || $page_name == 'users' || $page_name == 'admins' || $page_name == 'teachers' || $page_name == 'teacher_profile' || $page_name == 'teacher_update' || $page_name == 'parents' || $page_name == 'students'):?>class="currentItem"<?php endif;?>>
                        <a href="<?php echo base_url();?>admin/users/" data-toggle="tooltip" data-placement="right" data-original-title="<?php echo getEduAppGTLang('users');?>">
                            <div class="left-menu-icon">        
                                <i class="picons-thin-icon-thin-0704_users_profile_group_couple_man_woman"></i>
                            </div>
                        </a>
                    </li>
                    <!-- Admissions Access -->
                    <?php if($this->db->get_where('account_role', array('type' => 'admissions'))->row()->permissions == 1 || $admin_type == 1):?>
                    <li <?php if($page_name == 'new_student'):?>class="currentItem"<?php endif;?>>
                        <a href="<?php echo base_url();?>admin/new_student/" data-toggle="tooltip" data-placement="right" data-original-title="<?php echo getEduAppGTLang('admissions');?>">
                            <div class="left-menu-icon">
                                <i class="picons-thin-icon-thin-0729_student_degree_science_university_school_graduate"></i>
                            </div>
                        </a>
                    </li> 
                    <?php endif;?>
                    <!-- Class Routine Access -->
                    <?php if($this->db->get_where('account_role', array('type' => 'schedules'))->row()->permissions == 1 || $admin_type == 1):?>
                    <li <?php if($page_name == 'class_routine_view' || $page_name == 'teacher_routine'):?>class="currentItem"<?php endif;?>>
                        <a href="<?php echo base_url();?>admin/class_routine_view/" data-toggle="tooltip" data-placement="right" data-original-title="<?php echo getEduAppGTLang('class_routine');?>">
                            <div class="left-menu-icon">
                                <i class="picons-thin-icon-thin-0029_time_watch_clock_wall"></i>
                            </div>
                        </a>
                    </li>
                    <?php endif;?>
                    <!-- Academic Access -->
                    <?php if($this->db->get_where('account_role', array('type' => 'academic'))->row()->permissions == 1 || $admin_type == 1):?>
                    <li <?php if($page_name == 'attendance' || $page_name == 'live' || $page_name == 'exam_room' || $page_name == 'exam_results' || $page_name == 'exam_edit' || $page_name == 'homework' || $page_name == 'homework_room' || $page_name == 'homework_edit' || $page_name == 'homework_details' || $page_name == 'meet' || $page_name == 'grados' || $page_name == 'upload_marks' || $page_name == 'study_material' || $page_name == 'cursos' || $page_name == 'subject_dashboard' || $page_name == 'forum_room' || $page_name == 'online_exams' || $page_name == 'edit_forum' || $page_name == 'forum'):?>class="currentItem"<?php endif;?>>
                        <a href="<?php echo base_url();?>admin/grados/" data-toggle="tooltip" data-placement="right" data-original-title="<?php echo getEduAppGTLang('academic');?>">
                            <div class="left-menu-icon">
                                <i class="picons-thin-icon-thin-0680_pencil_ruller_drawing"></i>
                            </div>
                        </a>
                    </li>   
                    <?php endif;?>
                    
                    
                    
                    
                    
                    
                    <!-- Classrooms Access -->
                    <?php if($this->db->get_where('account_role', array('type' => 'classrooms'))->row()->permissions == 1 || $admin_type == 1):?>        
                    <li <?php if($page_name == 'classroom'):?>class="currentItem"<?php endif;?>>
                        <a href="<?php echo base_url();?>admin/classrooms/" data-toggle="tooltip" data-placement="right" data-original-title="<?php echo getEduAppGTLang('classrooms');?>">
                            <div class="left-menu-icon">
                                <i class="os-icon picons-thin-icon-thin-0047_home_flat"></i>
                            </div>
                        </a>
                    </li>
                    <?php endif;?>
                    
                    <!-- Academic Settings Access -->
                    <?php if($this->db->get_where('account_role', array('type' => 'academic_settings'))->row()->permissions == 1 || $admin_type == 1):?>        
                    <li <?php if($page_name == 'academic_settings' || $page_name == 'section' || $page_name == 'grade' || $page_name == 'semester' || $page_name == 'student_promotion'):?>class="currentItem"<?php endif;?>>
                        <a href="<?php echo base_url();?>admin/academic_settings/" data-toggle="tooltip" data-placement="right" data-original-title="<?php echo getEduAppGTLang('academic_settings');?>">
                            <div class="left-menu-icon">
                                <i class="os-icon picons-thin-icon-thin-0006_book_writing_reading_read_manual"></i>
                            </div>
                        </a>
                    </li>
                    <?php endif;?>
                    <!-- Settings Access -->
                    <?php if($this->db->get_where('account_role', array('type' => 'settings'))->row()->permissions == 1 || $admin_type == 1):?>        
                    <li <?php if($page_name == 'system_settings' || $page_name == 'sms' || $page_name == 'email' || $page_name == 'translate' || $page_name == 'database'):?>class="currentItem"<?php endif;?>>
                        <a href="<?php echo base_url();?>admin/system_settings/" data-toggle="tooltip" data-placement="right" data-original-title="<?php echo getEduAppGTLang('settings');?>">
                            <div class="left-menu-icon">
                                <i class="picons-thin-icon-thin-0051_settings_gear_preferences"></i>
                            </div>
                        </a>
                    </li>
                    <?php endif;?>
                </ul>
            </div>
        </div>

        <div class="fixed-sidebar-left sidebar--large" id="sidebar-left-1">
            <a href="<?php echo base_url();?>admin/panel/" class="logo">
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
                        <a href="<?php echo base_url();?>admin/panel/">
                            <div class="left-menu-icon">
                                <i class="picons-thin-icon-thin-0045_home_house"></i>
                            </div>
                            <span class="left-menu-title"><?php echo getEduAppGTLang('dashboard');?></span>
                        </a>
                    </li>
                    <!-- Messages Access -->
                    <?php if($this->db->get_where('account_role', array('type' => 'messages'))->row()->permissions == 1 || $admin_type == 1):?>
                    <li>
                        <a href="<?php echo base_url();?>admin/message/">
                            <div class="left-menu-icon">
                                <i class="picons-thin-icon-thin-0322_mail_post_box"></i>
                            </div>
                            <span class="left-menu-title"><?php echo getEduAppGTLang('messages');?></span>
                        </a>
                    </li>       
                    <?php endif;?>
                    <li>
                        <a href="<?php echo base_url();?>admin/users/">
                            <div class="left-menu-icon">        
                                <i class="picons-thin-icon-thin-0704_users_profile_group_couple_man_woman"></i>
                            </div>
                            <span class="left-menu-title"><?php echo getEduAppGTLang('users');?></span>
                        </a>
                    </li>
                    <!-- Admissions Access -->
                    <?php if($this->db->get_where('account_role', array('type' => 'admissions'))->row()->permissions == 1 || $admin_type == 1):?>
                    <li>
                        <a href="<?php echo base_url();?>admin/new_student/">
                            <div class="left-menu-icon">
                                <i class="picons-thin-icon-thin-0729_student_degree_science_university_school_graduate"></i>
                            </div>
                            <span class="left-menu-title"><?php echo getEduAppGTLang('admissions');?></span>
                        </a>
                    </li> 
                    <?php endif;?>
                    <!-- Class Routine Access -->
                    <?php if($this->db->get_where('account_role', array('type' => 'schedules'))->row()->permissions == 1 || $admin_type == 1):?>
                    <li>
                        <a href="<?php echo base_url();?>admin/class_routine_view/">
                            <div class="left-menu-icon">
                                <i class="picons-thin-icon-thin-0029_time_watch_clock_wall"></i>
                            </div>
                            <span class="left-menu-title"><?php echo getEduAppGTLang('class_routine');?></span>
                        </a>
                    </li>
                    <?php endif;?>
                    <!-- Academic Access -->
                    <?php if($this->db->get_where('account_role', array('type' => 'academic'))->row()->permissions == 1 || $admin_type == 1):?>
                    <li>
                        <a href="<?php echo base_url();?>admin/grados/">
                            <div class="left-menu-icon">
                                <i class="picons-thin-icon-thin-0680_pencil_ruller_drawing"></i>
                            </div>
                            <span class="left-menu-title"><?php echo getEduAppGTLang('academic');?></span>
                        </a>
                    </li>       
                    <?php endif;?>
                    
                    
                    
                    
                    <!-- Classrooms Access -->
                    <?php if($this->db->get_where('account_role', array('type' => 'classrooms'))->row()->permissions == 1 || $admin_type == 1):?>        
                    <li>
                        <a href="<?php echo base_url();?>admin/classrooms/">
                            <div class="left-menu-icon">
                                <i class="os-icon picons-thin-icon-thin-0047_home_flat"></i>
                            </div>
                            <span class="left-menu-title"><?php echo getEduAppGTLang('classrooms');?></span>
                        </a>
                    </li>
                    <?php endif;?>
                    
                    <!-- Academic Settings Access -->
                    <?php if($this->db->get_where('account_role', array('type' => 'academic_settings'))->row()->permissions == 1 || $admin_type == 1):?>        
                    <li>
                        <a href="<?php echo base_url();?>admin/academic_settings/">
                            <div class="left-menu-icon">
                                <i class="os-icon picons-thin-icon-thin-0006_book_writing_reading_read_manual"></i>
                            </div>
                            <span class="left-menu-title"><?php echo getEduAppGTLang('academic_settings');?></span>
                        </a>
                    </li>
                    <?php endif;?>
                    <!-- Settings Access -->
                    <?php if($this->db->get_where('account_role', array('type' => 'settings'))->row()->permissions == 1 || $admin_type == 1):?>        
                    <li>
                        <a href="<?php echo base_url();?>admin/system_settings/">
                            <div class="left-menu-icon">
                                <i class="picons-thin-icon-thin-0051_settings_gear_preferences"></i>
                            </div>
                            <span class="left-menu-title"><?php echo getEduAppGTLang('settings');?></span>
                        </a>
                    </li>
                    <?php endif;?>
                    <br><br>
                    <li></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="fixed-sidebar fixed-sidebar-responsive">
        <div class="fixed-sidebar-left sidebar--small" id="sidebar-left-responsive">
            <a href="<?php echo base_url();?>admin/panel/" class="logo js-sidebar-open">
                <img src="<?php echo base_url();?>public/uploads/<?php echo $this->crud->getInfo('icon_white');?>">
            </a>
        </div>
        <div class="fixed-sidebar-left sidebar--large" id="sidebar-left-1-responsive">
            <a href="<?php echo base_url();?>" class="logo">
                <div class="img-wrap">
                    <img src="<?php echo base_url();?>public/uploads/<?php echo $this->crud->getInfo('icon_white');?>">
                </div>
                <div class="title-block">
                    <h6 class="logo-title"><?php echo $this->crud->getInfo('system_name')?></h6>
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
                        <a href="<?php echo base_url();?>admin/panel/">
                            <div class="left-menu-icon">
                                <i class="picons-thin-icon-thin-0045_home_house"></i>
                            </div>
                            <span class="left-menu-title"><?php echo getEduAppGTLang('dashboard');?></span>
                        </a>
                    </li>
                    <!-- Messages Access -->
                    <?php if($this->db->get_where('account_role', array('type' => 'messages'))->row()->permissions == 1 || $admin_type == 1):?>
                    <li>
                        <a href="<?php echo base_url();?>admin/message/">
                            <div class="left-menu-icon">
                                <i class="picons-thin-icon-thin-0322_mail_post_box"></i>
                            </div>
                            <span class="left-menu-title"><?php echo getEduAppGTLang('messages');?></span>
                        </a>
                    </li>       
                    <?php endif;?>
                    <li>
                        <a href="<?php echo base_url();?>admin/users/">
                            <div class="left-menu-icon">        
                                <i class="picons-thin-icon-thin-0704_users_profile_group_couple_man_woman"></i>
                            </div>
                            <span class="left-menu-title"><?php echo getEduAppGTLang('users');?></span>
                        </a>
                    </li>
                    <!-- Admissions Access -->
                    <?php if($this->db->get_where('account_role', array('type' => 'admissions'))->row()->permissions == 1 || $admin_type == 1):?>
                    <li>
                        <a href="<?php echo base_url();?>admin/new_student/">
                            <div class="left-menu-icon">
                                <i class="picons-thin-icon-thin-0729_student_degree_science_university_school_graduate"></i>
                            </div>
                            <span class="left-menu-title"><?php echo getEduAppGTLang('admissions');?></span>
                        </a>
                    </li> 
                    <?php endif;?>
                    <!-- Class Routine Access -->
                    <?php if($this->db->get_where('account_role', array('type' => 'schedules'))->row()->permissions == 1 || $admin_type == 1):?>
                    <li>
                        <a href="<?php echo base_url();?>admin/class_routine_view/">
                            <div class="left-menu-icon">
                                <i class="picons-thin-icon-thin-0029_time_watch_clock_wall"></i>
                            </div>
                            <span class="left-menu-title"><?php echo getEduAppGTLang('class_routine');?></span>
                        </a>
                    </li>
                    <?php endif;?>
                    <!-- Academic Access -->
                    <?php if($this->db->get_where('account_role', array('type' => 'academic'))->row()->permissions == 1 || $admin_type == 1):?>
                    <li>
                        <a href="<?php echo base_url();?>admin/grados/">
                            <div class="left-menu-icon">
                                <i class="picons-thin-icon-thin-0680_pencil_ruller_drawing"></i>
                            </div>
                            <span class="left-menu-title"><?php echo getEduAppGTLang('academic');?></span>
                        </a>
                    </li>       
                    <?php endif;?>
                    
                    
                    
                    
                    
                    <!-- News Access -->
                    <?php if($this->db->get_where('account_role', array('type' => 'news'))->row()->permissions == 1 || $admin_type == 1):?>        
                    <li>
                        <a href="<?php echo base_url();?>admin/news/">
                            <div class="left-menu-icon">
                                <i class="os-icon picons-thin-icon-thin-0010_newspaper_reading_news"></i>
                            </div>
                            <span class="left-menu-title"><?php echo getEduAppGTLang('news');?></span>
                        </a>
                    </li>
                    <?php endif;?>
                    
                    <!-- Classrooms Access -->
                    <?php if($this->db->get_where('account_role', array('type' => 'classrooms'))->row()->permissions == 1 || $admin_type == 1):?>        
                    <li>
                        <a href="<?php echo base_url();?>admin/classrooms/">
                            <div class="left-menu-icon">
                                <i class="os-icon picons-thin-icon-thin-0047_home_flat"></i>
                            </div>
                            <span class="left-menu-title"><?php echo getEduAppGTLang('classrooms');?></span>
                        </a>
                    </li>
                    <?php endif;?>
                    
                    <!-- Academic Settings Access -->
                    <?php if($this->db->get_where('account_role', array('type' => 'academic_settings'))->row()->permissions == 1 || $admin_type == 1):?>        
                    <li>
                        <a href="<?php echo base_url();?>admin/academic_settings/">
                            <div class="left-menu-icon">
                                <i class="os-icon picons-thin-icon-thin-0006_book_writing_reading_read_manual"></i>
                            </div>
                            <span class="left-menu-title"><?php echo getEduAppGTLang('academic_settings');?></span>
                        </a>
                    </li>
                    <?php endif;?>
                    <!-- Settings Access -->
                    <?php if($this->db->get_where('account_role', array('type' => 'settings'))->row()->permissions == 1 || $admin_type == 1):?>        
                    <li>
                        <a href="<?php echo base_url();?>admin/system_settings/">
                            <div class="left-menu-icon">
                                <i class="picons-thin-icon-thin-0051_settings_gear_preferences"></i>
                            </div>
                            <span class="left-menu-title"><?php echo getEduAppGTLang('settings');?></span>
                        </a>
                    </li>
                    <?php endif;?><br><br>
                    <li></li>
                </ul>
            </div>
        </div>
    </div>