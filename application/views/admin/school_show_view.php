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
                                            <b><FONT SIZE=3>จัดการข้อมูลโรงเรียน</FONT></b> <span class="glyphicon glyphicon-arrow-right"></span> <b><FONT SIZE=3>ข้อมูล<?php echo $rs->sch_name ?></FONT></b>                           
                                        </div>
                                        <div class="panel-body">
                                            <center><img src="<?php echo base_url();?>image/<?php echo $rs->sch_pic ?>" class="img-thumbnail" alt="Cinque Terre" width="250" border="0"/></center>
                                                <center>
                                                    <br/>
                                                <table style="width: 80%" class="table table-bordered">
                                                    <thead>
                                                        <tr class="active">
                                                            <th style="width: 30%;text-align:right;" >ชื่อโรงเรียน</th>
                                                            <td><?php echo $rs->sch_name ?></td>
                                                        </tr>
                                                        <tr class="active">
                                                            <th style="width: 30%;text-align:right;">ที่อยู่</th>
                                                            <td><?php echo $rs->sch_address ?></td>
                                                        </tr>
                                                        <tr class="active">
                                                            <th style="width: 30%;text-align:right;">เบอร์โทรศัพท์</th>
                                                            <td><?php echo $rs->sch_tel ?></td>
                                                        </tr>
                                                        <tr class="active">
                                                            <th style="width: 30%;text-align:right;">เว็บไซต์</th>
                                                            <td> <a><?php echo $rs->sch_web ?></a></td>
                                                        </tr>
                                                        <tr class="active">
                                                            <th style="width: 30%;text-align:right;">รายละเอียด</th>
                                                            <td> <?php echo $rs->sch_detail ?></td>
                                                        </tr>
                                                        <tr class="active">
                                                            <th style="width: 30%;text-align:right;">ครูแนะแนว</th>
                                                            <td> <?php echo $rs->sch_name_teacher ?></td>
                                                        </tr>
                                                        <tr class="active">
                                                            <th style="width: 30%;text-align:right;">เบอร์ติดต่อครูแนะแนว</th>
                                                            <td> <?php echo $rs->sch_tel_teacher ?></td>
                                                        </tr>
                                                        <tr class="active">
                                                            <th style="width: 30%;text-align:right;">Email ครูแนะแนว</th>
                                                            <td> <?php echo $rs->sch_email ?></td>
                                                        </tr>
                                                    </thead>
                                                </table>
                                                        <a href="<?php echo base_url('admin_manage_school/index') ?>" class="btn btn-success" role="button"><i class="fa fa-reply" aria-hidden="true"></i> กลับ</a>
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

