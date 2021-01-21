<div class="col-md-6">
	<input type="hidden" name="id" id="id" value="<?= $kegiatan->id_kegiatan?>">
	<div class="form-group">
		<label>Nama Kegiatan</label>
		<input class="form-control" type="text" name="nama_kegiatan" id="nama_kegiatan" value="<?= $kegiatan->nama_kegiatan?>" required>
	</div>
</div>
<div class="col-md-6">
	<div class="form-group">
		<label>Proker</label>
		<select class="form-control select2" name="proker" id="proker" required>
		<?php foreach($proker as $row):?>
			<option value="<?= $row->id_proker?>"><?= $row->nama_proker?></option>
		<?php endforeach;?>
		</select>
	</div>
</div>
<div class="col-md-6">
	<div class="form-group">
		<label>Ketupel Kegiatan</label>
		<select class="form-control select2" name="ketupel" id="ketupel" required>
		<?php foreach($ketupel as $roww):?>
			<option value="<?= $roww->id_user?>" <?php if($roww->id_user == $kegiatan->ketupel):?>selected<?php endif;?>><?= $roww->nama_user?></option>
		<?php endforeach;?>
		</select>
	</div>
</div>

<script>
	$('.select2').select2({
            theme: 'bootstrap4',
            width : '100%',
        });
</script>
