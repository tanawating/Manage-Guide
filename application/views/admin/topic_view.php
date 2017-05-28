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
                                
                        <!-- content -->
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            <div class="pull-right action-buttons">
                                            </div>
                                            <span class="glyphicon glyphicon-cog"></span><FONT SIZE=3><b> จัดการข้อมูลกระทู้</b></FONT>
                                        </div>
                                        <div class="panel-body">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th> หัวข้อ </th>
                                                        <th> อ่าน </th>
                                                        <th> ตอบ</th>
                                                        <th> ตั้งกระทู้โดย</th>
                                                        <th> วันที่ตั้งกระทู้ </th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php if (count($rs)>0): $no=1 ?>
                                                        <?php foreach ($rs as $r):?>

                                                            <tr>
                                                                <td><a href="<?php echo site_url().'admin_manage_topic/viewone/'.$r->top_id;?>"> <?php echo $r->top_title ?></a></td>
                                                                <td><?php echo $r->top_view ?></td>
                                                                <td><?php echo $r->top_reply ?></td>
                                                                <td><?php echo $r->top_user_post ?></td>
                                                                <td><?php echo $r->top_date ?></td>
                                                                <td>
                                                                    <a 
                                                                        type="button" class="btn btn-info btn-xs" href="<?php echo  base_url('admin_manage_topic/viewone/'.$r->top_id); ?>" role="button">
                                                                        <span class="glyphicon glyphicon-eye-open"></span> รายละเอียด
                                                                    </a>                                     
                                                                    <button type="button" class="btn btn-danger btn-xs">
                                                                        <a href="#myModal" class="trash" data-id="<?php echo $r->top_id; ?>"  data-toggle="modal" class="btn btn-info" role="button" ><font color="#FFFFF">ลบ </font></a>
                                                                    </button>                                                              
                                                                    <div class="modal small fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog modal-sm">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                                    <h3 id="myModalLabel"><center><span class="glyphicon glyphicon-bell"></span> ข้อความแจ้งเตือน</center> </h3>

                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <p class="error-text"><center><h5><i class="fa fa-warning modal-icon"></i> คุณต้องการลบข้อมูลจริงหรือไม่ ?</h5></center>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                   <button class="btn btn-default"data-dismiss="modal" aria-hidden="true">ยกเลิก</button> <a href="#" class="btn btn-danger"  id="modalDelete" >ยืนยัน</a>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        <?php $no++; endforeach; ?>
                                                    <?php else: ?>

                                                           <td COLSPAN=5><center><b>--------------------------------------------------- ไม่มีข้อมูล ---------------------------------------------------</b></center></td>

                                                    <?php endif; ?>

                                                </tbody>
                                            </table>
                                            <p align = "center" ><font color="blue">จะไม่นับ View เข้าชมในส่วนของผู้ดูแลระบบ</font></p>
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

