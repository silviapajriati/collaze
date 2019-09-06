<style style="css">
body {
  font-family: Georgia, "Times New Roman", Times, serif;
  color: #555;
}
.from_dotcs{
  border:2px dotted #5c5353;
  padding: 5px 5px 5px 5px;
  margin:0;
}

</style>
<script src="<?php echo base_url(); ?>js/jquery.form.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url() ?>js/js_form/main.js"></script>
<body>
    <div class="row">
        <div class="col-md-3">
        </div>
        <div class="col-md-6">
            <div class="from_dotcs">
                <label style="background: #708090; color: #ffffff; font-size: 20px;" class="col-md-12 control-label">LOGIN</label>
                <div id="div_alert"></div>
                <form class="form-horizontal" action="<?php echo site_url('login/login')?>" method="post">
                    <?php 
                        $flash2 = $this->session->flashdata('pesan1');
                        if($flash2){
                        ?>
                        <div class="alert alert-success alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label=""close>&times;</a><?php echo $this->session->flashdata('pesan1'); ?></div>
                        <?php
                        } else {
                            echo '';    
                        }
                    ?>
                    <div class="form-body">
                        <div class="form-group tight-bottom">
                            <label class="col-md-3 control-label">Username</label>
                            <div class="col-md-4">	
                                <input type="text" class="form-control input" placeholder="Username" id="txt_user" name="txt_user"/>
                            </div>
                        </div>
                        <div class="form-group tight-bottom">
                            <label class="col-md-3 control-label">Password</label>
                            <div class="col-md-4">
                                <input type="password" class="form-control input" placeholder="Password" id="txt_pass" name="txt_pass"/>
                            </div>
                        </div>
                        <div class="form-group tight-bottom">
                            <label class="control-label col-md-3"> </label>
                            <div class="col-md-9">
                                <div class="action_control">
                                    <input type="submit" name="login" value="Login" class="btn default">
                                    <button type="button" data-dismiss="modal" class="btn default">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-3">
        </div>
    </div>
</body>