<input type="hidden" name="id" id="id" value="<?= $proker->id_proker?>">
	<div class="col-md-6">
		<div class="form-group">
			<label>Nama Proker</label>
			<input class="form-control" type="text" name="nama_proker" id="nama_proker" value="<?= $proker->nama_proker?>" required>
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group">
			<label>Tanggal Mulai</label>
			<input class="form-control" type="date" name="tgl_mulai" id="tgl_mulai" value="<?= $proker->tanggal_mulai_proker?>" required>
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group">
			<label>Tanggal Selesai</label>
			<input class="form-control" type="date" name="tgl_selesai" id="tgl_selesai" value="<?= $proker->tanggal_selesai_proker?>" required>
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group">
			<label>Lokasi</label>
			<textarea name="lokasi" class="form-control" cols="30" rows="3" required><?= $proker->lokasi?></textarea>
		</div>
	</div>