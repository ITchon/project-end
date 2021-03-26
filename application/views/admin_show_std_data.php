<!DOCTYPE html>
<html lang="en">
  
  <body class="layout layout-header-fixed">
    
    <div class="layout-main">
      
      <div class="layout-content">
        <div class="layout-content-body">
          <div class="title-bar">
          </div>
          <div class="row gutter-xs">
          <div class="col-md-4">
              <div class="card">
                <div class="card-body">
                  <div class="media">
                    <div class="media-middle media-left">
                      <div class="media-chart">
                        <canvas data-chart="doughnut" data-animation="false" data-labels='["Resolved", "Unresolved"]' data-values='[{"backgroundColor": ["#00FF00", "#757575"], "data": [879, 377]}]' data-hide='["legend", "scalesX", "scalesY", "tooltips"]' height="64" width="64"></canvas>
                      </div>
                    </div>
                    <div class="media-middle media-body">
                      <h2 class="media-heading">
                        <span class="fw-l">879</span>
                        <small>Resolved</small>
                      </h2>
                      <small>More than 70% resolved issues</small>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    <div class="col-xs-12">
      <div class="card">
        <div class="layout-content">
          <div class="layout-content-body">
          <h2>ข้อมูลสถานประกอบการ</h2>
            
                <br>
                <div class="col-md-8">
                    <div class="demo-form-wrapper">
                              
                    </div> 
                </div>
                    <?php foreach($result as $res){ ?> 
                    <table style="width:100%">
                    
                    <!-- <tr>
                      <div class="form-group">
                      <th width=25%><h4 class="col-sm-9 control-label" for="form-control-1">รูปบริษัท</h4></th>
                                <div class="col-sm-9">
                                <td><img src="<?php echo base_url()?>../img/<?php echo $res->cpn_img ?>"style="width:12%"></td>
                                </div>
                        </div>
                    </tr> -->
                    <tr>
                      <div class="form-group">
                      <th width=25%><h4 class="col-sm-9 control-label" for="form-control-1">ชื่อ</h4></th>
                                <div class="col-sm-9">
                                <td ><h5><?php echo $res->std_fname ?></h5></td>
                                </div>
                        </div>
                    </tr>
                      <tr>
                        <div class="form-group">
                        <th width=25%><h4 class="col-sm-9 control-label" for="form-control-1">นามสกุล</h4></th>
                                <div class="col-sm-9">
                                <td><h5><?php echo $res->std_lname ?></h5></td>
                                </div>
                        </div>
                      </tr>
                      <tr>
                        <div class="form-group">
                        <th width=25%><h4 class="col-sm-9 control-label" for="form-control-1">รหัสบัติประชาชน</h4></th>
                                <div class="col-sm-9">
                                    <td><h5><?php echo $res->std_idcard ?></h5></td>
                                </div>
                        </div>
                      </tr> 
                      <tr> 
                        <div class="form-group">
                        <th width=25%><h4 class="col-sm-9 control-label" for="form-control-1">รหัสนักเรียน</h4></th> 
                                <div class="col-sm-9">
                                <td><h5><?php echo $res->std_code ?></h5></td>
                                </div>
                        </div>
                      </tr> 
                      <tr>
                      <div class="form-group">
                      <th width=25%><h4 class="col-sm-9 control-label" for="form-control-1">อายุ</h4></th>
                                <div class="col-sm-9">
                                <td><h5><?php echo $res->std_birthday ?></h5></td>
                                </div>
                        </div>
                      </tr>
                      <tr>
                      <div class="form-group">
                      <th width=25%><h4 class="col-sm-9 control-label" for="form-control-1">เพศ</h4></th>
                                <div class="col-sm-9">
                                <td><h5><?php echo $res->std_sex ?></h5></td>
                                </div>
                        </div>
                      </tr>
                      <tr>
                      <div class="form-group">
                      <th width=25%><h4 class="col-sm-9 control-label" for="form-control-1">ระดับชั้น</h4></th>
                                <div class="col-sm-9">
                                <td><h5><?php echo $res->cls_name ?></h5></td>
                                </div>
                        </div>
                      </tr>
                      <tr>
                      
                      <div class="form-group">
                      <th width=25%><h4 class="col-sm-9 control-label" for="form-control-1">แผนกวิชา</h4></th>
                                <div class="col-sm-9">
                                <td><h5><?php echo $res->dpm_name ?></h5></td>
                                </div>
                        </div>
                      </tr>  
                      <tr>
                      <div class="form-group">
                      <th width=25%><h4 class="col-sm-9 control-label" for="form-control-1">สถานะ</h4></th>
                                <div class="col-sm-9">
                                <td>
                            <?php if( $res->std_status == 1){
                               echo '<h5 class="color">อนุมัติแล้ว</h5>';
                             }else{
                               echo '<h5 class="color2">ยังไม่อนุมัติ</h5>';
                             }?>
                            </td>
                                </div>
                        </div>
                      </tr>
                             
                            <?php  } ?> 
                    </table>
                    </div>                
            </div>      
        </div>     
        <br>
        
        
        <a type ='button'   onclick="javascript:window.location='<?php echo base_url() . 'admin/accept_std/' . $res->std_id; ?>';"><i class='btn btn-success'>อนุมัติ</i></a> 
                            <a type ='button'   onclick="javascript:window.location='<?php echo base_url() . 'admin/cancel_accept_std/' . $res->std_id; ?>';"><i class='btn btn-warning'>ยกเลิกอนุมัติ</i></a> 
        &nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-danger " href="<?php echo base_url(); ?>admin/index4">กลับหน้าหลัก</a>
        
    </div>
    
    

  </body>
  
  <script src="<?php echo base_url()?>asset/js/vendor.min.js"></script>
  <script src="<?php echo base_url()?>asset/js/elephant.min.js"></script>
    <script src="<?php echo base_url()?>asset/js/application.min.js"></script>                                 
    
    
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-83990101-1', 'auto');
      ga('send', 'pageview');
    </script>
</html>
<style>
.color {
  color: green;
}
.color2 {
  color: red;
}
</style>