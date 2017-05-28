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
                            <span class="glyphicon glyphicon-question-sign"></span>
                            <b><FONT SIZE=3>กระทู้ถาม-ตอบ</FONT></b>
                        </div>
                        <div class="panel-body">
                       
                            <span class="glyphicon">&#xe111;</span> 
                            

                            <a href="#"><?php echo $rs->top_title; ?></a>
                            | เข้าชม <?php echo $rs->top_view  ?> ครั้ง 
                            | วันที่ตั้งกระทู้ <?php echo $rs->top_date ?> 
                            | ผู้ตั้งกระทู้ <FONT COLOR=#0000FF><?php echo $rs->top_user_post ?></FONT>
                            
                            <div class="jumbotron text-center">
                                <h2><?php echo $rs->top_detail  ?></h2> 
                            </div>
                            
                            
                            
                            <?php if (count($rs2)>0): ?>
                                <?php foreach ($rs2 as $r):?>
                            
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="">
                                        <th>         
                                            <h5 align = 'center'><B><?php echo $r->tre_detail ?></B></h5>
                                        </th>
                                        
                                    </tr>
                                </thead>

                            </table>
                                    <h5 align = 'right'>
                                        วันที่ตอบ <?php echo $r->tre_date ?> 
                                        | ผู้ตอบ <FONT COLOR=#0000FF><?php echo $r->tre_name ?></FONT>
                                    </h5>
                                    <br/><br/>
                                <?php endforeach; ?>
                            <?php endif; ?>
                            
                            
                      
                            <center><a href="<?php echo site_url("home_topic/index")?>" class="btn btn-warning" role="button"><i class="fa fa-reply" aria-hidden="true"></i> กลับหน้ากระทู้</a> </center>    
                        </div>
                           
                    </div>
                        
                    <div class="panel panel-primary">
                        
                                    <div class="panel-heading">
                                        <span class="glyphicon glyphicon-edit"></span>
                                        <b><FONT SIZE=3>ตอบกระทู้</FONT></b>                        
                                    </div>
                                    <div class="panel-body">
                                        <div class="form-horizontal">
                                        <?php echo form_open('home_topic/user_answer'); ?>
                                            <div class="form-group">
                                                <label for="title" class="col-sm-4 control-label">ข้อความ</label>
                                                    <div class="col-sm-6">
                                                        <textarea class="form-control" rows="4" id="title" name="title" data-validation="required" placeholder="ข้อความ" ></textarea>
                                                    </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="username" class="col-sm-4 control-label">ผู้ตอบ</label>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" data-validation="required" id="name" name="name" placeholder="ชื่อผู้ตอบ">
                                                    </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-offset-5 col-sm-4">
                                                    <input name ="top_id" type="hidden" id="top_id" value="<?PHP echo $rs->top_id ?>" />
                                                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-plus-sign"></span> ตอบ</button>    

                                                </div>
                                            </div>
                                        <?php echo form_close();  ?>
                                        <FONT COLOR=red><h5 align = 'right'>*กรุณาใช้ถ้อยคำที่สุภาพด้วยนะครับ!! </h5></FONT>
                                        </div>
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