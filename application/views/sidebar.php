<div class="layout-sidebar">
        <div class="layout-sidebar-backdrop"></div>
        <div class="layout-sidebar-body">
          <div class="custom-scrollbar">
            <nav id="sidenav" class="sidenav-collapse collapse">
              <ul class="sidenav">
                <li class="sidenav-search hidden-md hidden-lg">
                  <form class="sidenav-form" action="/">
                    <div class="form-group form-group-sm">
                      <div class="input-with-icon">
                        <input class="form-control" type="text" placeholder="Search…">
                        <span class="icon icon-search input-icon"></span>
                      </div>
                    </div>
                  </form>
                </li>
                <li class="sidenav-heading"></li>
                <li class="sidenav-item has-subnav active">
                  <a href="dashboard-1.html" aria-haspopup="true">
                    <span class="sidenav-icon icon icon-home"></span>
                    <span class="sidenav-label">การจัดการข้อมูล
                    </span>
                  </a>
                  <ul class="sidenav-subnav collapse">
                    <li class="sidenav-subheading">เมนูหลัก
                    </li>
                    <li><a href="<?php echo base_url();?>admin/show_user_index">ข้อมูลสมาชิก</a></li>
                    <li><a href="<?php echo base_url();?>admin/show_student_index">ข้อมูลนักเรียน</a></li>
                    <li><a href="<?php echo base_url();?>admin/show_company_index">ข้อมูลสถานประกอบการ</a></li>
                    <li><a href="<?php echo base_url();?>admin/show_teacher_index">ข้อมูลอาจารย์</a></li>
                    <li><a href="<?php echo base_url();?>admin/show_class_index">ข้อมูลกลุ่มการเรียน</a></li>
                  </ul>
                </li>
                 
              </ul>
            </nav>
          </div>
        </div>
      </div>
