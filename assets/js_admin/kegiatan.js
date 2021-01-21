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
			url: base_url+"Kegiatan/insert/",
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
			url: base_url+"Kegiatan/update/",
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

	// ------- update -------
	$(document).on('click','.btn-update',function(){
		var id = $(this).data('id');

		$.ajax({
			url: base_url+"Kegiatan/data_update",
			type: 'post',
			dataType: 'json',
			data:{id:id},
			success:function(data){
				$('#target_update').html(data['html']);
			}
		})
	});

	$(document).on('click','.btn-pelaksana',function(){
		var id = $(this).data('id');

		$.ajax({
			url: base_url+"Kegiatan/form_pelaksana",
			type: 'post',
			dataType: 'json',
			data:{id:id},
			success:function(data){
				$('#title').html('Input detail kegiatan');
				$('#target').html(data['html']);
			}
		})
	});

	$(document).on('click','.btn-detail',function(){
		var id = $(this).data('id');

		$.ajax({
			url: base_url+"Kegiatan/detail_kegiatan",
			type: 'post',
			dataType: 'json',
			data:{id:id},
			success:function(data){
				$('#title_modal').html('Detail Kegiatan');
				$('#target_detail').html(data['html']);
			}
		})
	});

	$(document).on('click','.btn-kinerja',function(){
		var id = $(this).data('id');

		$.ajax({
			url: base_url+"Kegiatan/form_kinerja",
			type: 'post',
			dataType: 'json',
			data:{id:id},
			success:function(data){
				$('#target_kinerja').html(data['html']);
			}
		})
	});

	$('#form_pelaksana').submit(function(e){
		e.preventDefault();

		$.ajax({
			url: base_url+"Kegiatan/insert_pelaksana/",
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
					$('#modal_kinerja').modal('hide');
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

	$('#form_kinerja_kegiatan').submit(function(e){
		e.preventDefault();

		$.ajax({
			url: base_url+"Kegiatan/insert_kinerja/",
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
					$('#modal_').modal('hide');
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

});

function list(){
	$('#list_data').html("<center><h2>Loading...</h2></center>");

	$.ajax({
		url: base_url+"Kegiatan/list",
		dataType: 'json',
		success:function(data){
			$('#list_data').html(data);
			$('#tabel_kegiatan').dataTable({
				stateSave: true
			});
		}
	});
}