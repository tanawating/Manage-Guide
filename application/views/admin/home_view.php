<!DOCTYPE html>
<html lang="th">
    <head>
        
    <!-- herd -->
        <?php require 'separate/home/head.php';?>
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
                                <b><FONT SIZE=3><span class="glyphicon glyphicon-home"></span> หน้าหลัก</FONT></b>                        
                            </div>
                            <div class="panel-body">

                                <center><img src="<?php echo base_url();?>image/img_admin.png" alt="Cinque Terre" width="150" border="0"/></center>
                                <center><b>
                                <FONT SIZE=8>Sign In Username : <FONT COLOR=#337ab7> 
                                        <?php echo $this->session->userdata('username')?> 
                                </FONT></FONT></b></center>
                                <center><b><FONT SIZE=6.5>ยินดีต้อนรับ :   <FONT COLOR=#337ab7> <?php echo $this->session->userdata('name')?> </FONT></FONT></b></center>
                                <center><b><FONT SIZE=6.5>คุณกำลังอยู่ในส่วนของผู้ดูแลระบบ</FONT></b></center>

                            </div>
                        </div>

                    </div>
                </div>
                     
            </div>   
        </div>

    <!-- footer -->
 
            <?php require 'separate/home/footer.php';?>

    <!-- footer --> 
    
    
 
</body>
</html>

