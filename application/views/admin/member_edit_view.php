<?php if($_SESSION['type']=='0' ):?>
    <?php if($rs->am_type=='1' ):?>
        <script>
            window.history.back();
        </script>
        <?php exit; ?>
    <?php endif; ?>
<?php endif; ?>

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
                                            <b><FONT SIZE=3>จัดการข้อมูลผู้ดูแลระบบ</FONT></b> <span class="glyphicon glyphicon-arrow-right"></span> <b><FONT SIZE=3>แก้ไขข้อมูลผู้ดูแลระบบ</FONT></b>
                                        </div>
                                        <div class="panel-body">
                                        <?php if (isset($_SESSION['successEdit'])) {?>
                                            <div class="alert alert-success"> <center><span class="glyphicon glyphicon-bell fa-lg"></span> <?php echo $_SESSION['successEdit'];?></center></div>
                                        <?php }?>

                                            <form method="post" action="../edit" class="form-horizontal">
                                                <input type="hidden" class="form-control" name="txtID" value="<?php echo $rs->am_id ?>" >
                                                <div class="form-group">
                                                    <label class="col-sm-4 control-label">ชื่อ</label>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" name="txtName" value="<?php echo $rs->am_name ?>" data-validation="required">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-4 control-label">Username</label>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" name="txtUsername" disabled="" value="<?php echo $rs->am_username ?>" data-validation="required">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-4 control-label">Password</label>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" name="txtPassword" value="<?php echo $rs->am_password ?>" data-validation="required">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-offset-5 col-sm-4">
                                                        <a href="<?php echo base_url('admin_manage_member/index') ?>" class="btn btn-success" role="button"><i class="fa fa-reply" aria-hidden="true"></i> กลับ</a>
                                                        <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-saved"></span> บันทึก</button>
                                                    </div>
                                                </div>
                                            </form>

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
