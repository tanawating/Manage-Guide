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
                                
                        <!-- content -->
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            <div class="pull-right action-buttons">
                                                <div class="btn-group pull-right">
                                                    <button type="button" class="btn btn-default btn-xs" data-toggle="collapse" data-target="#add"> <span class="glyphicon glyphicon-plus-sign">เพิ่มข้อมูลอาจารย์</button>
                                                </div>
                                            </div>
                                            <span class="glyphicon glyphicon-cog"></span><FONT SIZE=3><b> จัดการข้อมูลอาจารย์</b></FONT>
                                        </div>
                                        <div class="panel-body">

                                            <div id="add" class="collapse">    
                                                <div class="panel panel-primary">
                                                    <div class="panel-body">

                                                        <form method="post" action="add" class="form-horizontal">
                                                            <div class="form-group">
                                                                <label for="name" class="col-sm-4 control-label">ชื่อจริง</label>
                                                                <div class="col-sm-6">
                                                                    <input type="text" class="form-control" name="txtName" value="" placeholder="ชื่อจริง" data-validation="required">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="name" class="col-sm-4 control-label">นามสกุล</label>
                                                                <div class="col-sm-6">
                                                                    <input type="text" class="form-control" name="txtLastname" value="" placeholder="นามสกุล" data-validation="required">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="name" class="col-sm-4 control-label">Username</label>
                                                                <div class="col-sm-6">
                                                                    <input type="text" class="form-control" name="txtUsername" value="" placeholder="Username" data-validation="required">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="name" class="col-sm-4 control-label">Password</label>
                                                                <div class="col-sm-6">
                                                                    <input type="text" class="form-control" name="txtPassword" value="" placeholder="Password" data-validation="required">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="name" class="col-sm-4 control-label">E-mail</label>
                                                                <div class="col-sm-6">
                                                                    <input type="text" class="form-control" name="txtEmail" value="" placeholder="E-mail">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="name" class="col-sm-4 control-label">Facebook</label>
                                                                <div class="col-sm-6">
                                                                    <input type="text" class="form-control" name="txtFacebook" value="" placeholder="Facebook">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="name" class="col-sm-4 control-label">เบอร์โทรศัพท์</label>
                                                                <div class="col-sm-6">
                                                                    <input type="text" class="form-control" name="txtTel" value="" placeholder="เบอร์โทรศัพท์">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="detail" class="col-sm-4 control-label">อัพโหลดรูปภาพ</label>
                                                                <div class="col-sm-6">
                                                                    <input type="text" class="form-control" name="txtPic" value="" placeholder="อัพโหลดรูปภาพ">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-sm-offset-5 col-sm-4">
                                                                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-saved"></span> บันทึก</button>    
                                                                </div>
                                                            </div>
                                                        </form>
    
                                                    </div>
                                                </div>
                                            </div>

                                            <hr>
                                            
                                            <?php if (isset($_SESSION['successAdd'])) {?>
                                                <div class="alert alert-success"> <center><span class="glyphicon glyphicon-bell fa-lg"></span> <?php echo $_SESSION['successAdd'];?></center></div>
                                            <?php }?>
                                            <?php if (isset($_SESSION['successRemove'])) {?>
                                                <div class="alert alert-success"> <center><span class="glyphicon glyphicon-bell fa-lg"></span></span> <?php echo $_SESSION['successRemove'];?></center></div>
                                            <?php }?>
                                            <?php if (isset($_SESSION['Error'])) {?>
                                                <div class="alert alert-warning"> <center><span class="glyphicon glyphicon-bell fa-lg"></span></span> <?php echo $_SESSION['Error'];?></center></div>
                                            <?php }?>

                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                       <th>ชื่อ-นามสกุล</th>
                                                       <th>E-mail</th>
                                                       <th>Username</th>
                                                       <th>Password</th>
                                                       <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php if(count($rs)>0):?>
                                                    <?php foreach ($rs as $r):?>
                                                        <tr>
                                                            <td><?php echo $r->tc_name.' '.$r->tc_lastname ?></td>
                                                            <td><?php echo $r->tc_email ?></td>
                                                            <td><?php echo $r->tc_username ?></td>
                                                            <td><?php echo $r->tc_password ?></td>
                                                            <td> 
                                                                <a 
                                                                    type="button" class="btn btn-info btn-xs" href="<?php echo  base_url('admin_manage_teacher/viewone/'.$r->tc_id); ?>" role="button">
                                                                    <span class="glyphicon glyphicon-eye-open"></span> รายละเอียด
                                                                </a>
                                                                <a 
                                                                    type="button" class="btn btn-warning btn-xs" href="<?php echo  base_url('admin_manage_teacher/viewedit/'.$r->tc_id); ?>" role="button">
                                                                    <span class="glyphicon glyphicon-edit"></span> แก้ไข
                                                                </a>                                       
                                                                <button type="button" class="btn btn-danger btn-xs">
                                                                    <a href="#myModal" class="trash" data-id="<?php echo $r->tc_id; ?>"  data-toggle="modal" class="btn btn-info" role="button" ><font color="#FFFFF">ลบ </font></a>
                                                                </button>                                                              
                                                                <div class="modal small fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog modal-sm">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                                <h3 id="myModalLabel"><center><span class="glyphicon glyphicon-bell"></span> ข้อความแจ้งเตือน</center> </h3>

                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <p class="error-text"><center><h5><i class="fa fa-warning modal-icon"></i> คุณต้องการลบข้อมูลจริงหรือไม่ ?</h5></center>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                               <button class="btn btn-default"data-dismiss="modal" aria-hidden="true">ยกเลิก</button> <a href="#" class="btn btn-danger"  id="modalDelete" >ยืนยัน</a>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach;?>
                                                    <?php else: ?>

                                                           <td COLSPAN=5><center><b>--------------------------------------------------- ไม่มีข้อมูล ---------------------------------------------------</b></center></td>

                                                    <?php endif; ?>
                                                </tbody>
                                            </table>

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
        $('.trash').click(function(){
            var id=$(this).data('id');
            $('#modalDelete').attr('href','remove/'+id);
        })
    </script>
    
    <script>
        $.validate({
        modules: 'security, file',
        onModulesLoaded: function () {
        $('input[name="pass_confirmation"]').displayPasswordStrength();}});
    </script> 

</body>
</html>

