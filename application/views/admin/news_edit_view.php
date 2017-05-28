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
                                            <b><FONT SIZE=3>จัดการข้อมูลข่าวสาร</FONT></b> <span class="glyphicon glyphicon-arrow-right"></span> <b><FONT SIZE=3>แก้ไขข่าว <?php echo $rs->n_titel ?></FONT></b>                           
                                        </div>
                                        <div class="panel-body">
                                        <?php if (isset($_SESSION['successEdit'])) {?>
                                            <div class="alert alert-success"> <center><span class="glyphicon glyphicon-bell fa-lg"></span> <?php echo $_SESSION['successEdit'];?></center></div>
                                        <?php }?>
                                            <center><p><font color="red"><?php echo $this->session->flashdata('err_filename'); ?></font></p></center>
                                            <br>
                                            
                                            <form name="frmaddadmin"  method="post" action="../edit" enctype="multipart/form-data" class="form-horizontal">
                                                <input type="hidden" class="form-control" name="txtID" value="<?php echo $rs->n_id ?>" >
                                                <div class="form-group">
                                                    <label class="col-sm-4 control-label">หัวข้อข่าว</label>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" name="txtTitel" value="<?php echo $rs->n_titel ?>" data-validation="required">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-4 control-label">เนื้อหาข่าว</label>
                                                    <div class="col-sm-6">
                                                        <textarea class="form-control" rows="6" name="txtDetail" placeholder="รายละเอียดต่างๆ" data-validation="required"><?php echo $rs->n_detail ?></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-4 control-label">ไฟล์ปัจจุบัน</label>
                                                    <div class="col-sm-6">
                                                        <p><a href="<?php echo base_url();?>fileupload/news/<?php echo $rs->n_name_file ?>" target="_black"><?php echo $rs->n_name_file ?></a></p>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="data" class="col-sm-4 control-label">อัพโหลดไฟล์</label>
                                                        <div class="col-sm-3">
                                                            <input class="btn btn-default btn-file" value="<?php echo $rs->n_name_file ?>" type="file" name="txtFile"/> 
                                                            <font color="blue">เฉพาะไฟล์ pdf เท่านั้น</font>
                                                        </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-offset-5 col-sm-4">
                                                        <a href="<?php echo base_url('admin_manage_news/index') ?>" class="btn btn-success" role="button"><i class="fa fa-reply" aria-hidden="true"></i> กลับ</a>
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

