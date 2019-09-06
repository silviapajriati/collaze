$(document).ready(function(){

	get_haan();
 
	$('#btn_save').click(function(){

		if ($('#upload_form').val() == '') {
		alert('Picture Must Be Upload');
		$('#upload_form').focus();
		return false;
		}
		if ($('#desc').val() == '') {
		alert('Description Product Cannot Be Empty');
		$('#desc').focus();
		return false;
		}
		
		var data = document.getElementById("upload_form").value.replace('C:\\fakepath\\','');
			
		// var iform			= $('#form_editing').files;
		var iform 		= $('#form_editing')[0];
		// console.log(iform);
		var upload_form		= new FormData(iform);

		
		$("#loading_control").show();

		$("#form_editing").ajaxSubmit({
			url:site_url("haan/add"),
			type: 'post',
			success: function(){

				alert('Haan Product Succesfully Added.', {title: 'Added Sukses.',titleClass: 'info', modal: true, buttons: [{id: 0, label:'OK', val: 'X'}],callback:function(){ window.setTimeout('window.location="<?php echo base_url();?>haan"',500); }});
				window.location = base_url + 'haan';

				$('#prod_haan').DataTable().destroy();
				$('#prod_haan tbody').html('');
			
				get_haan();

			},
			error: function(){

				// $("#loading_control").hide();
			}
        });

	});

	$('#btn_edit').click(function(){

		if ($('#desc').val() == '') {
		alert('Description Product Cannot Be Empty');
		$('#desc').focus();
		return false;
		}
		
		var data = document.getElementById("upload_form").value.replace('C:\\fakepath\\','');
			
		// var iform			= $('#form_editing').files;
		var iform 		= $('#form_editing')[0];
		// console.log(iform);
		var upload_form		= new FormData(iform);

		
		$("#loading_control").show();

		$("#form_editing").ajaxSubmit({
			url:site_url("haan/edit"),
			type: 'post',
			success: function(){

				alert('Haan Product Succesfully Update.', {title: 'Added Sukses.',titleClass: 'info', modal: true, buttons: [{id: 0, label:'OK', val: 'X'}],callback:function(){ window.setTimeout('window.location="<?php echo base_url();?>haan"',500); }});
				window.location = base_url + 'haan';

				$('#prod_haan').DataTable().destroy();
				$('#prod_haan tbody').html('');
			
				get_haan();

			},
			error: function(){

				// $("#loading_control").hide();
			}
        });

	});


});

function modul_add(){
	document.getElementById('namefile').readOnly = false;
	document.getElementById('upload_form').readOnly = false;
	$('#upload_form').val('');
	$('#namefile').val('');
	$('#desc').val('');
	$('#judul').text("Add Product Haan");
	$('#modal_haan').modal('show');
	$('#save').show();
	$('#edit').hide();
}

function get_haan(){

	var user 	= $('#hid_user').val();

	$.ajax({
			
		type:"POST",
		url:base_url+"haan/get_haan",
		dataType:"json",
		// data:param,
		success:function(data){
				
			var content_data 	= "";
			
			for(i=0;i<data.length;i++){
					
				param = JSON.stringify({
                        'id'	    	:data[i].id,
                        'desc'			:data[i].desc,
						'upload_form'	:data[i].upload_form,
						'status'		:data[i].status,
						'upload_date'	:data[i].upload_date
	
					});

				
				content_data += "<tr id='"+data[i].id+"'>";				
				content_data += '<td><img src="upload/'+data[i].upload_form+'" style="display: block; margin: 0 auto; text-align: left; ">';
				content_data += "</img></td>";
				content_data += "<td>"+data[i].desc+"</td>";
				if(user=='admin'){
				content_data += "<td><a href='#' onclick='edit("+param+")'";
                content_data += "class='btn btn-xs green'>Edit&nbsp;<i class=''></i></a> ";
                content_data += "<a href='#' onclick='delete_data("+data[i].id+")'";
                content_data += "class='btn btn-xs red'>Delete&nbsp;<i class=''></i></a>";
				content_data += "</td>";
				}
				content_data += "</tr>";

			}

			
			if(content_data!=''){
				$('#prod_haan tbody').html(content_data);
				$('#prod_haan').DataTable({
					"paging":   false,
					"ordering": false,
					"info":     false,
					"searching": false
				});
			}
		}
	});
}

function edit(e){
	document.getElementById('namefile').readOnly = true;
	document.getElementById('upload_form').readOnly = true;
	var params="";
		params = JSON.stringify({
			'id':e.id	
		});
	
		var kirim = 'id='+e.id;

		$('#hid_id').val(e.id);
		$('#namefile').val(e.upload_form);
		$('#desc').val(e.desc);

	$('#judul').text("Edit Product Haan");
	$('#modal_haan').modal('show');
	$('#edit').show();
	$('#save').hide();

}

function delete_data(id){

	bootbox.confirm("Are You Sure Want Delete This Data ?", function(result) {

		if(result==true){

			var str_param = "id="+id;

			$.ajax({

				type:"POST",
				url:base_url+"haan/delete",
				dataType:"html",
				data:str_param,
				success:function(){

					alert('Haan Product Succesfully Delete.');

					$('#prod_haan').DataTable().destroy();
					$('#prod_haan tbody').html('');
				
					get_haan();
				}
			});
		}
	});
}
