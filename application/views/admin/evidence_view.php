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
                                <span class="glyphicon glyphicon-eye-open"></span><FONT SIZE=3><b> ตรวจสอบหลักฐานการสมัครเรียน</b></FONT>
                            </div>
                            <div class="panel-body">

                                <table class="table table-bordered">
                                    <thead>
                                        <tr class="active">
                                           <th>เลขบัตรประชาชน</th>
                                           <th>ชื่อ-นามสกุล</th>
                                           <th>สาขาที่สมัคร</th>
                                           <th>ระดับเข้าศึกษา</th>
                                           <th>ปีการศึกษา</th>
                                           <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php if(count($rs)>0):?>
                                        <?php foreach ($rs as $r):?>
                                        <tr>
                                            <td><?php echo $r->en_identity ?></td>
                                            <td><?php echo $r->en_prefix.' '.$r->en_fristname.' '.$r->en_lastname ?></td>
                                            <td><?php echo $r->en_major ?></td>
                                            <td><?php echo $r->en_request_major ?></td>
                                            <td><center><?php echo $r->en_year_education ?></center></td>
                                            <td style="width: 10%"> 
                                                <a 
                                                    type="button" target="_black" class="btn btn-info btn-xs" href="<?php echo  base_url('admin_manage_evidence/viewone/'.$r->en_id); ?>" role="button">
                                                    <span class="glyphicon glyphicon-eye-open"></span> ตรวจสอบ
                                                </a>
                                            </td>
                                        </tr>
                                        <?php endforeach;?>
                                    <?php else: ?>

                                               <td COLSPAN=5><center><b>--------------------------------------------------- ไม่มีข้อมูล ---------------------------------------------------</b></center></td>

                                    <?php endif; ?> 
                                    </tbody>
                                </table>
                                
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

