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
                                            <b><FONT SIZE=3>จัดการตารางออกแนะแนว</FONT></b> <span class="glyphicon glyphicon-arrow-right"></span> <b><FONT SIZE=3>แก้ไขข้อมูลตารางแนะแนว</FONT></b>                           
                                        </div>
                                        <div class="panel-body">
                                        <?php if (isset($_SESSION['successEdit'])) {?>
                                            <div class="alert alert-success"> <center><span class="glyphicon glyphicon-bell fa-lg"></span> <?php echo $_SESSION['successEdit'];?></center></div>
                                        <?php }?>
                                        <form name="frmaddadmin"  method="POST" action="../edit" class="form-horizontal">
                                        <input type="hidden" class="form-control" name="txtID" value="<?php echo $rs->g_id ?>" >
                                            <div class="form-group">
                                                <label for="name" class="col-sm-5 control-label">วันที่ออกแนะแนว</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" name="txtDate" value="<?php echo $rs->g_date ?>" id="startdate" data-validation="required" >
                                                    <script type="text/javascript">
                                                        jQuery('#startdate').datetimepicker({
                                                            lang:'th',
                                                            timepicker:false,
                                                            format:'Y-m-d'
                                                        });
                                                    </script>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="name" class="col-sm-5 control-label">เวลา</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" name="txtTime" value="<?php echo $rs->time ?>" id="startdate2" data-validation="required" >
                                                    <script type="text/javascript">
                                                        jQuery('#startdate2').datetimepicker({
                                                            lang:'th',
                                                            datepicker:false,
                                                            format: 'H:i'
                                                        });
                                                    </script>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="name" class="col-sm-5 control-label">โรงเรียน</label>
                                                    <div class="col-sm-4">
                                                         <select class="form-control" name="txtSchool">
                                                            <option value="<?php echo $rs->sch_id ?>"><?php echo $rs->sch_name ?>
                                                            </option>     
                                                    <?php if(count($rsSchool)>0):?>
                                                        <?php foreach ($rsSchool as $rSchool):?>
                                                            <option value="<?php echo $rSchool->sch_id ?>"><?php echo $rSchool->sch_name ?>
                                                            </option>
                                                        <?php endforeach;?>
                                                    <?php endif; ?>
                                                        </select>  
                                                    </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="name" class="col-sm-5 control-label">อาจารย์ออกแนะแนว</label>
                                                    <div class="col-sm-4">
                                                         <select class="form-control" name="txtTeacher">
                                                            <option value="<?php echo $rs->tc_id ?>"><?php echo $rs->tc_name.' '.$rs->tc_lastname ?>
                                                            </option> 
                                                    <?php if(count($rsTeacher)>0):?>
                                                        <?php foreach ($rsTeacher as $rTeacher):?>
                                                            <option value="<?php echo $rTeacher->tc_id ?>"><?php echo $rTeacher->tc_name  .' '. $rTeacher->tc_lastname ?>
                                                            </option>
                                                        <?php endforeach;?>
                                                    <?php endif; ?>
                                                        </select>  
                                                    </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="detail" class="col-sm-5 control-label">รายละเอียด</label>
                                                    <div class="col-sm-4">
                                                        <textarea class="form-control" rows="5" id="detail" name="txtDetail"><?php echo $rs->g_detail ?></textarea>
                                                    </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-offset-5 col-sm-4">
                                                    <a href="<?php echo base_url('admin_manage_guide/index') ?>" class="btn btn-success" role="button"><i class="fa fa-reply" aria-hidden="true"></i> กลับ</a>
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

