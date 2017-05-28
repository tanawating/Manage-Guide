<!DOCTYPE html>
<html lang="th">
    <head>
        <?php require 'separate/home/head.php';?>
        <!-- form_validator -->
            <script src="<?php echo base_url();?>assets/form_validator/jquery.min.js"></script>
            <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
            <script src="<?php echo base_url();?>assets/form_validator/jquery.form.validator.min.js"></script>
            <script src="<?php echo base_url();?>assets/form_validator/security.js"></script>
            <script src="<?php echo base_url();?>assets/form_validator/file.js"></script>
            <script src="<?php echo base_url();?>assets/scroll_top/scrolltopcontrol.js"></script>
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
                
                <div class="col-md-3">
                    <div class="thumbnail" style="height: auto!important;">
                                
                        <!-- ฟอร์ม ระบบสมาชิก-->
                            <?php require 'separate/home/system_member.php';?>

                        <!-- ฟอร์ม เมนูหลัก-->
                            <?php require 'separate/home/main_menu.php';?>
                                
                        <!-- ฟอร์ม เกี่ยวกับ สาขา-->
                            <?php require 'separate/home/about_major.php';?>
                    </div> 
                </div> 
                       
                <div class="col-md-9">
                    <div class="thumbnail" style="height: auto!important;">
                                
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <span class="glyphicon glyphicon-list-alt"></span>
                                <b><FONT SIZE=3>ตารางออกแนะแนว <span class="glyphicon glyphicon-arrow-right"></span> ข้อมูลอาจารย์</FONT></b>                            
                            </div>
                            <div class="panel-body">

                                <center><img src="<?php echo base_url();?>fileupload/teacher/<?php echo $home->tc_pic?>" class="img-rounded" alt="Cinque Terre" width="250" border="0"/></center>
                                <center>
                                <br/>
                                <table style="width: 80%" class="table table-bordered">
                                    <thead>
                                        <tr class="active">
                                            <th style="width: 30%;text-align:right;" >ชื่อ-นามสกุล</th>
                                            <td><?php echo $home->tc_name ?> <?php echo $home->tc_lastname ?></td>
                                        </tr>
                                        <tr class="active">
                                            <th style="width: 30%;text-align:right;">เบอร์โทรศัพท์</th>
                                            <td><?php echo $home->tc_tel ?></td>
                                        </tr>
                                        <tr class="active">
                                            <th style="width: 30%;text-align:right;">E-mail</th>
                                            <td><?php echo $home->tc_email ?></td>
                                        </tr>
                                        <tr class="active">
                                            <th style="width: 30%;text-align:right;">Facebook</th>
                                            <td> <a><?php echo $home->tc_facebook ?></a></td>
                                        </tr>
                                    </thead>
                                </table>
                                <a href="<?php echo site_url("home/index")?>" class="btn btn-warning" role="button"><i class="fa fa-reply" aria-hidden="true"></i> กลับ</a>
                                </center>

                            </div>
                        </div>
                    </div> 
                </div>
                
            </div>   
        </div>
    <!-- end body -->

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