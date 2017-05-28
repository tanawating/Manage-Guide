<div class="panel panel-primary">
    
    <div class="panel-heading">
        <center><b><FONT SIZE=3>ระบบสมาชิก</FONT></b></center>                        
    </div>

        <button class="list-group-item" data-toggle="collapse" data-target="#demo"> <i class="fa fa-user-circle" aria-hidden="true"></i><FONT COLOR=#337ab7> ผู้ดูแลระบบ</FONT></button>  
        
        <div id="demo" class="collapse">
                <div class="panel-body">
                    <?php echo form_open('login_check/admin');?>
                        <div class="form-horizontal">
                            <div style="margin-bottom: 5px" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input id="login-username" type="text" class="form-control" name="txtusername" value="" placeholder="Username" data-validation="required">                                        
                            </div>
                            <div style="margin-bottom: 10px" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input id="login-password" type="password" class="form-control" name="txtpassword" placeholder="Password" data-validation="required">
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-3 ">
                                    <button type="submit" class="btn btn-success">&nbsp&nbsp&nbsp<span class="glyphicon glyphicon-log-in"></span>&nbspเข้าสู่ระบบ&nbsp&nbsp&nbsp</button>
                                    <br>
                                </div>
                            </div>
                        </div>
                        <?php echo form_close();?>
                </div>
        </div>

        <button class="list-group-item" data-toggle="collapse" data-target="#demo2"> <i class="fa fa-user-circle-o" aria-hidden="true"></i><FONT COLOR=#337ab7> อาจารย์</FONT></button>

        <div id="demo2" class="collapse">
            <div class="panel-body">
                <?php echo form_open('');?>
                <div class="form-horizontal">
                    <div style="margin-bottom: 5px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="login-username" type="text" class="form-control" name="txtusername" value="" placeholder="Username" data-validation="required">                                        
                    </div>
                    <div style="margin-bottom: 10px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="login-password" type="password" class="form-control" name="txtpassword" placeholder="Password" data-validation="required">
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 ">
                            <button type="submit" disabled class="btn btn-success">&nbsp<span class="glyphicon glyphicon-log-in"></span>&nbspเข้าสู่ระบบ&nbsp&nbsp&nbsp</button>
                            <br>
                        </div>
                    </div>
                <?php echo form_close();?>
                </div>
            </div>
        </div>
        
            <br>
            <?php if (isset($_SESSION['error'])) {?>
            <center><p class="login-box-msg" style="color:red;"><?php echo $_SESSION['error'];?> </p></center>
            <?php } ?> 
            <br>
            
</div>                        





