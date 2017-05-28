<!DOCTYPE html>
<html lang="th">
<head>
        
    <!-- herd -->

        <?php require 'separate/home/head.php';?>
        <script src="<?php echo base_url();?>assets/form_validator/jquery.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>assets/form_validator/jquery.form.validator.min.js"></script>
        <script src="<?php echo base_url();?>assets/form_validator/security.js"></script>
        <script src="<?php echo base_url();?>assets/form_validator/file.js"></script>
        <script src="<?php echo base_url();?>assets/scroll_top/scrolltopcontrol.js"></script>
        <link href="<?php echo base_url();?>/assets/datetimepicker/jquery.datetimepicker.css" rel="stylesheet">
        <script src="<?php echo base_url();?>assets/datetimepicker/jquery.datetimepicker.js"></script>

    <!-- herd -->
        
</head>
    
<body>
    
    <!-- herder -->
        <div class="container">
            <?php require 'separate/home/herder.php';?>
        </div>
    <!-- herder -->


    <!-- body -->
        <div class="container" >
            <div class="row">
                
                <div class="col-md-2">
       
                        <!-- main_menu-->
                            <?php require 'separate/admin/main_menu.php';?>

                </div> 
                       
                <div class="col-md-10">
                    <div class="thumbnail" style="height: auto!important;">
                                
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            <span class="glyphicon glyphicon-cog"></span>
                                            <b><FONT SIZE=3>จัดการข้อมูลอาจารย์</FONT></b> <span class="glyphicon glyphicon-arrow-right"></span> <b><FONT SIZE=3>แก้ไขข้อมูลอาจารย์</FONT></b>                           
                                        </div>
                                        <div class="panel-body">
                                        <?php if (isset($_SESSION['successEdit'])) {?>
                                            <div class="alert alert-success"> <center><span class="glyphicon glyphicon-bell fa-lg"></span> <?php echo $_SESSION['successEdit'];?></center></div>
                                        <?php }?>
                                            
                                            <center><p><font color="red"><?php echo $this->session->flashdata('err_filename'); ?></font></p></center>
                                            <center><img src="<?php echo base_url();?>fileupload/teacher/<?php echo $rs->tc_pic?>"  class="img-rounded" alt="Cinque Terre" width="250" border="0"/></center>
                                            <br>
                                            <form method="post" action="../edit" enctype="multipart/form-data" class="form-horizontal">
                                                <input type="hidden" class="form-control" name="txtID" value="<?php echo $rs->tc_id ?>" >
                                                <div class="form-group">
                                                    <label for="name" class="col-sm-4 control-label">ชื่อ</label>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" name="txtName" value="<?php echo $rs->tc_name ?>"  data-validation="required">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="name" class="col-sm-4 control-label">นามสกุล</label>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" name="txtLastname" value="<?php echo $rs->tc_lastname ?>" data-validation="required">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="name" class="col-sm-4 control-label">Username</label>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" disabled name="txtUsername" value="<?php echo $rs->tc_username ?>" data-validation="required">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="name" class="col-sm-4 control-label">Password</label>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" name="txtPassword" value="<?php echo $rs->tc_password ?>" data-validation="required">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="name" class="col-sm-4 control-label">เบอร์โทรศัพท์</label>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" name="txtTel" value="<?php echo $rs->tc_tel ?>" data-validation="required">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="name" class="col-sm-4 control-label">E-mail</label>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" name="txtEmail" value="<?php echo $rs->tc_email ?>" data-validation="required" >
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="name" class="col-sm-4 control-label">Facebook</label>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" name="txtFacebook" value="<?php echo $rs->tc_facebook ?>" data-validation="required" >
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="data" class="col-sm-4 control-label">อัพโหลดไฟล์</label>
                                                        <div class="col-sm-3">
                                                            <input class="btn btn-default btn-file" value="<?php echo $rs->tc_pic?>" type="file" name="txtPic"/> 
                                                            <font color="blue">เฉพาะไฟล์ jpg,png เท่านั้น</font>
                                                        </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-offset-5 col-sm-4">
                                                        <a href="<?php echo base_url('admin_manage_teacher/index') ?>" class="btn btn-success" role="button"><i class="fa fa-reply" aria-hidden="true"></i> กลับ</a>
                                                        <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-saved"></span> บันทึก</button>    
                                                    </div>
                                                </div>
                                            </form>
    
                                        </div>
                                    </div>

                    </div>
                </div>
                     
            </div>   
        </div>
        
    <!-- footer -->
 
            <?php require 'separate/home/footer.php';?>

    <!-- footer -->

    <script>
        $.validate({
        modules: 'security, file',
        onModulesLoaded: function () {
        $('input[name="pass_confirmation"]').displayPasswordStrength();}});
    </script> 


</body>
</html>

