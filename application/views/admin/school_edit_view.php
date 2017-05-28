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
                                            <b><FONT SIZE=3>จัดการข้อมูลโรงเรียน</FONT></b> <span class="glyphicon glyphicon-arrow-right"></span> <b><FONT SIZE=3>แก้ไขข้อมูลโรงเรียน</FONT></b>                           
                                        </div>
                                        <div class="panel-body">
                                        <?php if (isset($_SESSION['successEdit'])) {?>
                                            <div class="alert alert-success"> <center><span class="glyphicon glyphicon-bell fa-lg"></span> <?php echo $_SESSION['successEdit'];?></center></div>
                                        <?php }?>
                                            
                                            <form name="frmaddadmin"  method="post" action="../edit" class="form-horizontal">
                                                <input type="hidden" class="form-control" name="txtID" value="<?php echo $rs->sch_id ?>" >
                                                <div class="form-group">
                                                    <label for="name" class="col-sm-4 control-label">ชื่อโรงเรียน</label>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" name="txtName" value="<?php echo $rs->sch_name ?>" placeholder="ชื่อโรงเรียน" data-validation="required">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="name" class="col-sm-4 control-label">ที่อยู่โรงเรียน</label>
                                                    <div class="col-sm-6">
                                                        <textarea class="form-control" rows="6" name="txtAddress" placeholder="รายละเอียดต่างๆ" data-validation="required"><?php echo $rs->sch_address ?></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="name" class="col-sm-4 control-label">เบอร์โทรศัพท์</label>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" name="txtTel" value="<?php echo $rs->sch_tel ?>" placeholder="เบอร์โทรศัพท์" data-validation="required">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="name" class="col-sm-4 control-label">เว็บไซต์</label>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" name="txtWeb" value="<?php echo $rs->sch_web ?>" placeholder="เว็บไซต์">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="name" class="col-sm-4 control-label">รายละเอียด</label>
                                                    <div class="col-sm-6">
                                                        <textarea class="form-control" rows="6" name="txtDetail" placeholder="รายละเอียดต่างๆ" ><?php echo $rs->sch_detail ?></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="name" class="col-sm-4 control-label">ครูแนะแนว</label>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" name="txtTeacher" value="<?php echo $rs->sch_name_teacher ?>" placeholder="ครูแนะแนว">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="name" class="col-sm-4 control-label">เบอร์ติดต่อครูแนะแนว</label>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" name="txtTelTeacher" value="<?php echo $rs->sch_tel_teacher ?>" placeholder="เบอร์ติดต่อครูแนะแนว">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="detail" class="col-sm-4 control-label">Email ครูแนะแนว</label>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" name="txtEmail" value="<?php echo $rs->sch_email ?>" placeholder="Email ครูแนะแนว">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-offset-5 col-sm-4">
                                                        <a href="<?php echo base_url('admin_manage_school/index') ?>" class="btn btn-success" role="button"><i class="fa fa-reply" aria-hidden="true"></i> กลับ</a>
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

