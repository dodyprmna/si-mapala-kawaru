$(document).ready(function(){

    list();
    
	$('#form_update').submit(function(e){
		e.preventDefault();

		$.ajax({
			url: base_url+"Budgeting/update/",
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
			url: base_url+"Budgeting/data_update",
			type: 'post',
			dataType: 'json',
			data:{id:id},
			success:function(data){
				$('#target_update').html(data['html']);
			}
		})
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