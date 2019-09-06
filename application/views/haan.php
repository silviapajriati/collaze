<style>
body {
  font-family: Georgia, "Times New Roman", Times, serif;
  color: #555;
}
.from_dotcs{
  border:2px dotted #5c5353;
  padding: 5px 5px 5px 5px;
  margin:0;
}
table{
    border: none;
    border-collapse: collapse;
}
th{
    border: none;
}
td{
    border: none;
}
</style>
<script type="text/javascript">
    var base_url        = '<?php echo base_url(); ?>';

     function site_url(url){
        var bu = "<?php echo base_url(); ?>";
        url = (url)?url:"";
        return bu+url;
    }

</script>
<script src="<?php echo base_url(); ?>js/jquery.form.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url() ?>js/js_form/haan.js"></script>
<body>
<?php
    $username = isset($user)?$user:'';
?>
<input type="hidden" id="hid_user" value="<?php echo $username;?>" />
<div class="portlet-body form">
    <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-9">
            <h1><span class="caption-subject font-red-sunglo bold uppercase">HAAN SERIES</span></h1>
                <table class="table" id="prod_haan" border=0>
                    <thead>
                        <tr align="center" valign="middle" >		
                            <th width="30%"></th>
                            <th width="30%"></th>
                            <?php
                            if($username=='admin'){
                                echo'<th width="20%"></th>';
                            }
                            ?>
                            
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td colspan="3" align="center">
                            <span class="item font-medium">
                                <span aria-hidden="true" class="icon-info"></span>&nbsp;Data Belum Ada
                            </span>
                        </td>
                    </tr>
                    </tbody>
                </table>
        </div>
        <div class="col-md-1">
            <br>
            <?php
                if($username=='admin'){
                    echo'<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" 
                    onclick="return modul_add();"><i class="icon-file-plus"></i> Add </button>';
                }
            ?>
        </div>
    </div>

</div>
</body>

<div id="modal_haan" class="modal fade bs-modal-lg" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog"> 
        <div class="portlet light bg-inverse">
            <div class="portlet-title">
                <div class="caption tight-bottom">
                <span class="caption-subject font-blue bold" id="judul"><i class="icon-file-plus"></i></span>
                </div>
                <div class="actions tight-bottom">
                    <a href="#" data-dismiss="modal"><i class="icon-close"></i></a>
                </div>
            </div>
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <form action="#" class="form-horizontal" method="POST" id="form_editing" enctype="multipart/form-data">
                <input type="hidden" id="hid_id" name="hid_id"/>
                    <div class="form-group tight-bottom" action="" method="POST" id="form_editing" enctype="multipart/form-data">
                        <label class="col-md-3 control-label">Upload Picture</label>
                        <div class="col-sm-9">									
                        <input type="file" class="form-control input-sm" id="upload_form" name="upload_form">
                        <input type="text" class="form-control input-sm" id="namefile" name="namefile" />
                        </div>
                    </div>
                    <div class="form-group tight-bottom">
                        <label class="col-md-3 control-label">Description</label>
                        <div class="col-sm-9">
                        <textarea class="form-control input-sm" rows="5" placeholder="Description Product" name="desc" id="desc" ></textarea>
                        </div>
                    </div>
                    <div class="form-actions tight-bottom">
                        <div class="row" id="save">
                            <div style="text-align:right;padding-right:15px;">
                                <button type="button" class="btn blue" id="btn_save">Save</button>
                                <button type="button" data-dismiss="modal" class="btn default">Cancel</button>
                            </div>
                        </div>
                        <div class="row" id="edit">
                            <div style="text-align:right;padding-right:15px;">
                                <button type="button" class="btn blue" id="btn_edit">Edit</button>
                                <button type="button" data-dismiss="modal" class="btn default">Cancel</button>
                            </div>
                        </div>
                    </div>                    
                </form>
                <!-- END FORM-->
            </div>
        </div>
    </div>
</div>

