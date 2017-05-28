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
                                            <b><FONT SIZE=3>จัดการข้อมูลข่าวสาร</FONT></b> <span class="glyphicon glyphicon-arrow-right"></span> <b><FONT SIZE=3> <?php echo $rs->n_titel ?></FONT></b>                           
                                        </div>
                                        <div class="panel-body">
                                            
                                                    <span class="glyphicon">&#xe122;</span> 
                                                    <a href="#"><?php echo $rs->n_titel ?></a>
                                                    | เข้าชม <?php echo $rs->n_view ?> ครั้ง 
                                                    | วันที่ประกาศ <?php echo $rs->n_date ?> 
                                                    | ผู้ประกาศ <FONT COLOR=red><?php echo $rs->n_user_post ?></FONT>

                                                    <div class="jumbotron text-center">
                                                        <h2><?php echo $rs->n_detail ?></h2>
                                                        <br>
                                                        <?php
                                                            if(trim($rs->n_name_file) != ''):
                                                        ?>
                                                            <a class="button btn btn-info" target="_black" href="<?php echo base_url();?>fileupload/news/<?php echo $rs->n_name_file?>"><span class="glyphicon glyphicon-download"></span> Download File</a>
                                                        <?php
                                                            endif;
                                                        ?>   
                                                    </div>
                                                <center>
                                                    <a href="<?php echo base_url('admin_manage_news/index') ?>" class="btn btn-success" role="button"><i class="fa fa-reply" aria-hidden="true"></i> กลับ</a>
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

