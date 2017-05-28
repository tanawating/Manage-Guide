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
                            <span class="glyphicon glyphicon-bullhorn"></span>
                            <b><FONT SIZE=3>ประกาศข่าวสาร</FONT></b>
                        </div>
                        <div class="panel-body">
                       
                            <span class="glyphicon">&#xe122;</span> 
                            

                            <a href="#"><?php echo $news->n_titel; ?></a>
                            | เข้าชม <?php echo $news->n_view; ?> ครั้ง 
                            | วันที่ประกาศ <?php echo $news->n_date; ?> 
                            | ผู้ประกาศ <FONT COLOR=red><?php echo $news->n_user_post; ?></FONT>
                            
                            <div class="jumbotron text-center">
                                <h2><?php echo $news->n_detail; ?></h2>
                                <br>
                                <?php
                                    if(trim($news->n_name_file) != ''):
                                ?>
                                    <a class="button btn btn-info" target="_black" href="<?php echo base_url();?>fileupload/news/<?php echo $news->n_name_file?>"><span class="glyphicon glyphicon-download"></span> Download File</a>
                                <?php
                                    endif;
                                ?>  
                            </div>
                      
                            <center><a href="<?php echo site_url("home_news/index")?>" class="btn btn-warning" role="button"><i class="fa fa-reply" aria-hidden="true"></i> กลับหน้าข่าว</a> </center>    
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