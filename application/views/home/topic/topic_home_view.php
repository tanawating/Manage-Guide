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
                                <span class="glyphicon">&#xe111;</span>
                                <b><FONT SIZE=3>กระทู้-ถามตอบ</FONT></b>
                            </div>
                            <div class="panel-body">

                                <button type="button" class="btn btn-default" data-toggle="collapse" data-target="#add"> <span class="glyphicon glyphicon-pencil"></span> ตั้งกระทู้</button>
                                <br>
                                <br/>
                                <!-- สร้างตาราง -->
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th style="width: 1%"> # </th>
                                            <th> หัวข้อ </th>
                                            <th> อ่าน </th>
                                            <th> ตอบ</th>
                                            <th> ตั้งกระทู้โดย</th>
                                            <th> วันที่ตั้งกระทู้ </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (count($rs)>0): $no=1 ?>
                                            <?php foreach ($rs as $r):?>
                                                
                                                <tr>
                                                    <td><?php echo $no ?></td>
                                                    <td><a href="<?php echo site_url().'home_topic/show/'.$r->top_id;?>"> <?php echo $r->top_title ?></a></td>
                                                    <td><?php echo $r->top_view ?></td>
                                                    <td><?php echo $r->top_reply ?></td>
                                                    <td><?php echo $r->top_user_post ?></td>
                                                    <td><?php echo $r->top_date ?></td>
                                                </tr>
                                            <?php $no++; endforeach; ?>
                                        <?php endif; ?>

                                    </tbody>
                                </table>
                                <hr>
                                <div id="add" class="collapse">
                                    <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <span class="glyphicon">&#xe111;</span>
                                        <b><FONT SIZE=3>ตั้งกระทู้</FONT></b>
                                        </div>
                                        <br>
                                        <form name="frmaddadmin"  method="post" action="insert" id="" class="form-horizontal">
                                            <div class="form-group">
                                                <label for="title" class="col-sm-4 control-label">หัวข้อกระทู้</label>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" name="title" data-validation="required" placeholder="หัวข้อกระทู้" >
                                                    </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="data" class="col-sm-4 control-label">เนื้อหา</label>
                                                    <div class="col-sm-6">
                                                        <textarea class="form-control" rows="5" name="data" data-validation="required"  placeholder="เนื้อหา" ></textarea>
                                                    </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="username" class="col-sm-4 control-label">ชื่อผู้ตั้งกระทู้</label>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" data-validation="required"  name="name" placeholder="ชื่อ" >
                                                    </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-offset-5 col-sm-4">
                                                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-plus-sign"></span> เพิ่ม</button>
                                                </div>
                                            </div>
                                        </form>
                                     <FONT COLOR=red><h5 align = 'right'>*กรุณาใช้ถ้อยคำที่สุภาพด้วยนะครับ </h5></FONT>
                                  
                                    </div>  
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