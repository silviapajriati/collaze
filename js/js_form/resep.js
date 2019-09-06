$(document).ready(function(){

	get_resep();
 
	$('#btn_save').click(function(){

		if ($('#upload_form').val() == '') {
		alert('Picture Must Be Upload');
		$('#upload_form').focus();
		return false;
		}
		if ($('#title').val() == '') {
		alert('Judul Harus Diisi');
		$('#title').focus();
		return false;
		}
		if ($('#cara').val() == '') {
		alert('Cara Pembuatan Harus Diisi');
		$('#cara').focus();
		return false;
		}
			
		
		var data = document.getElementById("upload_form").value.replace('C:\\fakepath\\','');
			
		// var iform			= $('#form_editing').files;
		var iform 		= $('#form_editing')[0];
		// console.log(iform);
		var upload_form		= new FormData(iform);

		
		$("#loading_control").show();

		$("#form_editing").ajaxSubmit({
			url:site_url("resep/add"),
			type: 'post',
			success: function(){

				alert('Resep Berhasil Ditambah.', {title: 'Added Sukses.',titleClass: 'info', modal: true, buttons: [{id: 0, label:'OK', val: 'X'}],callback:function(){ window.setTimeout('window.location="<?php echo base_url();?>resep"',500); }});
				window.location = base_url + 'resep';

				// $('#prod_resep').DataTable().destroy();
				$('#prod_resep tbody').html('');
			
				get_resep();

			},
			error: function(){

				// $("#loading_control").hide();
			}
        });

	});

	$('#btn_edit').click(function(){

		if ($('#title').val() == '') {
		alert('Judul Harus Diisi');
		$('#title').focus();
		return false;
		}
		if ($('#cara').val() == '') {
		alert('Cara Pembuatan Harus Diisi');
		$('#cara').focus();
		return false;
		}
		var data = document.getElementById("upload_form").value.replace('C:\\fakepath\\','');
			
		// var iform			= $('#form_editing').files;
		var iform 		= $('#form_editing')[0];
		// console.log(iform);
		var upload_form		= new FormData(iform);

		
		$("#loading_control").show();

		$("#form_editing").ajaxSubmit({
			url:site_url("resep/edit"),
			type: 'post',
			success: function(){

				alert('Resep Berhasil Diupdate.', {title: 'Added Sukses.',titleClass: 'info', modal: true, buttons: [{id: 0, label:'OK', val: 'X'}],callback:function(){ window.setTimeout('window.location="<?php echo base_url();?>resep"',500); }});
				window.location = base_url + 'resep';

				// $('#prod_resep').DataTable().destroy();
				$('#prod_resep tbody').html('');
			
				get_resep();

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
	$('#judul').text("Add Product resep");
	$('#modal_resep').modal('show');
	$('#save').show();
	$('#edit').hide();
}

function get_resep(){

	var user 	= $('#hid_user').val();

	$.ajax({
			
		type:"POST",
		url:base_url+"resep/get_resep",
		dataType:"json",
		// data:param,
		success:function(data){
				
			var content_data 	= "";
			
			for(i=0;i<data.length;i++){
					
				param = JSON.stringify({
                        'id'	    	:data[i].id,
                        'judul'			:data[i].judul,
						'upload_form'	:data[i].upload_form,
						'cara'			:data[i].cara,
						'upload_date'	:data[i].upload_date
	
					});

				content_data += "<tr>";				
				content_data += "<td>"+data[i].judul+"</td>";
				content_data += "</tr>";

				content_data += "<tr id='"+data[i].id+"'>";				
				content_data += '<td><img src="upload/'+data[i].upload_form+'" style="display: block; margin: 0 auto; text-align: left; width: 300px; height:300px; ">';
				content_data += "</img></td>";
				content_data += "<td>"+data[i].cara+"</td>";
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
				$('#prod_resep tbody').html(content_data);

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
		$('#title').val(e.judul);
		$('#cara').val(e.cara);

	$('#judul').text("Edit Resep");
	$('#modal_resep').modal('show');
	$('#edit').show();
	$('#save').hide();

}

function delete_data(id){

	bootbox.confirm("Anda Yakin Mau Menghapus Resep ini ?", function(result) {

		if(result==true){

			var str_param = "id="+id;

			$.ajax({

				type:"POST",
				url:base_url+"resep/delete",
				dataType:"html",
				data:str_param,
				success:function(){

					alert('Resep Berhasil Dihapus.');

					// $('#prod_resep').DataTable().destroy();
					$('#prod_resep tbody').html('');
				
					get_resep();
				}
			});
		}
	});
}
