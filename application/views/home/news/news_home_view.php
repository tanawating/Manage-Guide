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
                        
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th> # </th>
                                            <th> ชื่อเรื่อง </th>
                                            <th> ผู้ประกาศ </th>
                                            <th> วันที่เวลาลงประกาศ</th>
                                            <th> เข้าชม </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (count($rs)>0): $no=1?>
                                            <?php foreach ($rs as $r): ?>
                                            <tr>
                                                <td style="width: 1%"> <?php echo $no ?> </td>
                                                <td> <a href="<?php echo site_url().'home_news/show/'.$r->n_id;?>"> <?php echo $r->n_titel ?></a></td>
                                                <td> <?php echo $r->n_user_post ?> </td>
                                                <td> <?php echo $r->n_date ?> </td>
                                                <td> <?php echo $r->n_view ?> </td>
                                            </tr>
                                            <?php $no++; endforeach; ?>
                                        <?php endif; ?>

                                    </tbody>
                                </table>
                         
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