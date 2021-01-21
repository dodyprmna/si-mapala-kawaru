<input type="hidden" name="id" id="id" value="<?= $prestasi->id_prestasi?>">
	<div class="col-md-6">
		<div class="form-group">
			<label>Nama Prestasi</label>
			<input class="form-control" type="text" name="nama_prestasi" id="nama_prestasi" value="<?= $prestasi->prestasi?>" required>
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group">
			<label>Tahun</label>
			<input class="form-control" type="text" name="tahun" id="tahun" value="<?= $prestasi->tahun?>" required>
		</div>
	</div>