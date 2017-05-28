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
                                            <b><FONT SIZE=3>จัดการข้อมูลอาจารย์</FONT></b> <span class="glyphicon glyphicon-arrow-right"></span> <b><FONT SIZE=3>ข้อมูล <?php echo $rs->tc_name.' '.$rs->tc_lastname ?></FONT></b>                           
                                        </div>
                                        <div class="panel-body">
                                            <center><img src="<?php echo base_url();?>fileupload/teacher/<?php echo $rs->tc_pic ?>" class="img-thumbnail" alt="Cinque Terre" width="250" border="0"/></center>
                                                <center>
                                                    <br/>
                                                <table style="width: 80%" class="table table-bordered">
                                                    <thead>
                                                        <tr class="active">
                                                            <th style="width: 30%;text-align:right;" >ชื่อ-นามสกุล</th>
                                                            <td><?php echo $rs->tc_name.' '.$rs->tc_lastname ?></td>
                                                        </tr>
                                                        <tr class="active">
                                                            <th style="width: 30%;text-align:right;">Username</th>
                                                            <td><?php echo $rs->tc_username ?></td>
                                                        </tr>
                                                        <tr class="active">
                                                            <th style="width: 30%;text-align:right;">Password</th>
                                                            <td><?php echo $rs->tc_password ?></td>
                                                        </tr>
                                                        <tr class="active">
                                                            <th style="width: 30%;text-align:right;">เบอร์โทรศัพท์	</th>
                                                            <td> <?php echo $rs->tc_tel ?></td>
                                                        </tr>
                                                        <tr class="active">
                                                            <th style="width: 30%;text-align:right;">E-mail</th>
                                                            <td> <?php echo $rs->tc_email ?></td>
                                                        </tr>
                                                        <tr class="active">
                                                            <th style="width: 30%;text-align:right;">Facebook</th>
                                                            <td> <a><?php echo $rs->tc_facebook ?></a></td>
                                                        </tr>
                                                    </thead>
                                                </table>
                                                        <a href="<?php echo base_url('admin_manage_teacher/index') ?>" class="btn btn-success" role="button"><i class="fa fa-reply" aria-hidden="true"></i> กลับ</a>
                                                </center>
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

