$(document).ready(function(){

	list();


	$('[data-plugin="add"]').click(function(){
		$('.panel_add').slideDown();
		$('[data-plugin="add"]').slideUp();
	});

	$('[data-plugin="minimize"]').click(function(){
		$('.panel_add').slideUp();
		$('[data-plugin="add"]').slideDown();
	});

	
	// ----insert-------

	$('#form_insert').submit(function(e){
		e.preventDefault();

		$.ajax({
			url: base_url+"Program_kerja/insert/",
			type: 'post',
			dataType: 'json',
			data: new FormData(this),
			cache : false,
			contentType : false,
			processData : false,
			success:function(data){
				if (data['status']) {
					$('#form_insert')[0].reset();
					swal({
					  title: "Sukses",
					  text : data.pesan,
					  icon: "success",
					});
					list();
				}else{
					swal({
					  title: "Gagal",
					  text : data.pesan,
					  icon: "error",
					});
				}
			}
		});
	});

	$('#form_update').submit(function(e){
		e.preventDefault();

		$.ajax({
			url: base_url+"Program_kerja/update/",
			type: 'post',
			dataType: 'json',
			data: new FormData(this),
			cache : false,
			contentType : false,
			processData : false,
			success:function(data){
				if (data['status']) {
					swal({
					  title: "Sukses",
					  text : data.pesan,
					  icon: "success",
					});
					$('#modal_update').modal('hide');
					list();
				}else{
					swal({
					  title: "Gagal",
					  text : data.pesan,
					  icon: "error",
					});
				}
			}
		});
	});

	$('#form_hapus_checked').submit(function(e){
		e.preventDefault();

		var id_hapus = $('input[name="id_hapus[]"]:checked');

		var id = [];

		if (id_hapus.length > 0) {

			$(id_hapus).each(function(){
		   		id.push($(this).val());
			});

			if (confirm('Apakah anda yakin ingin menghapus?')) {	
				$.ajax({
					url: base_url+"Program_kerja/hapus_selected/",
					type: 'post',
					dataType: 'json',
					data: {id : id},
					success:function(data){
						if (data['status']) {
							swal({
							  title: data.pesan,
							  icon: "success",
							});
							list();
						}else{
							swal({
							  title: data.pesan,
							  icon: "error",
							});
						}
					}
				});
			}
		}else{
			swal({
			  	title: 'silahkan ceklist data yang ingin anda hapus',
			  	icon: "info",
			});
		}
	});

	$('#form_search').submit(function(e){
		e.preventDefault();

		$.ajax({
			url: base_url+"Program_kerja/search/",
			type: 'post',
			dataType: 'json',
			data: new FormData(this),
			cache : false,
			contentType : false,
			processData : false,
			success:function(data){
				$('#list_data').html(data);
				$('#tabel_faktur_pajak').dataTable();
			}
		});
	});

	// ------- update -------
	$(document).on('click','.btn-update',function(){
		var id = $(this).data('id');

		$.ajax({
			url: base_url+"Program_kerja/data_update",
			type: 'post',
			dataType: 'json',
			data:{id:id},
			success:function(data){
				$('#target_update').html(data['html']);
			}
		})
	});

	$(document).on('click','.btn-preview',function(){
		var file = $(this).data('file');

		var html = "<embed type='application/pdf' id='pdf' width='100%' height='600' src='"+base_url+'upload/'+file+"'></embed>";

		$('#target_preview').html(html);

	});
});

function list(){
	$('#list_data').html("<center><h2>Loading...</h2></center>");

	$.ajax({
		url: base_url+"Program_kerja/list",
		dataType: 'json',
		success:function(data){
			$('#list_data').html(data);
			$('#tabel_proker').dataTable({
				stateSave: true
			});
		}
	});
}