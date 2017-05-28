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
                        <span class="glyphicon glyphicon-cog"></span><FONT SIZE=3><b> จัดการข้อมูลกระทู้</b></FONT> <span class="glyphicon glyphicon-arrow-right"></span> <b><FONT SIZE=3>หัวข้อ <?php echo $rs->top_title ?></FONT></b>
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
                            
                            <?php if (count($rsc)>0): ?>
                                <?php foreach ($rsc as $r):?>
                            
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
                            
                            <center>
                                <a href="<?php echo base_url('admin_manage_topic/index') ?>" class="btn btn-success" role="button"><i class="fa fa-reply" aria-hidden="true"></i> กลับ</a>
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

