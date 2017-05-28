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
                                <center>
                                <b><FONT SIZE=3> โครงสร้างหลักสูตร</FONT></b>
                                </center>
                            </div>
                                <div class="panel-body">
                                    <center>
                                    <table class="table table-bordered" style="width: 50%">
                                                <thead>
                                                    <tr>
                                                        <th class="active"><center>หัวข้อ</center></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>  
                                                        <td>
                                                            <center> 
                                                            <a 
                                                                href="#"  >
                                                                โครงสร้างหลักสูตร 4 ปี
                                                            </a> 
                                                            </center> 
                                                        </td>
                                                    </tr>
                                                    <tr>  
                                                        <td>
                                                            <center> 
                                                            <a
                                                                href="#"  >
                                                                หมวดศึกษาทั่วไป
                                                            </a> 
                                                            </center> 
                                                        </td>
                                                    </tr>
                                                    <tr>  
                                                        <td>
                                                            <center> 
                                                            <a
                                                                href="#"  >
                                                                หมวดวิชาเฉพาะ
                                                            </a> 
                                                            </center> 
                                                        </td>
                                                    </tr>
                                                    <tr>  
                                                        <td>
                                                            <center> 
                                                            <a
                                                                href="#"  >
                                                                หมวดวิชาเลือกเสรี
                                                            </a> 
                                                            </center> 
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
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