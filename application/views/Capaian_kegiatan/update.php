<input type="hidden" name="id" id="id" value="<?= $capaian->id_capaian?>">
	<div class="col-md-6">
		<div class="form-group">
			<label>Kegiatan</label>
			<select class="form-control" name="kegiatan" required>
				<?php foreach($kegiatan as $row):?>
				<option value="<?= $row->id_kegiatan?>" <?php if($capaian->fk_kegiatan == $row->id_kegiatan):?>selected<?php endif;?>><?= $row->nama_kegiatan?></option>
				<?php endforeach;?>
			</select>
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group">
			<label>Judul Penelitian</label>
			<input class="form-control" type="text" name="judul_penelitian" required value="<?= $capaian->judul_penelitian?>">
		</div>
	</div>