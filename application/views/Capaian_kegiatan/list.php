<div class="table-responsive">
	<table class="table table-bordered" id="tabel_capaian">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Kegiatan</th>
				<th>Judul Penelitian</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
		<?php $no = 1;
		foreach ($capaian_kegiatan as $row) : ?>
			<tr>
				<td><?= $no++?></td>
				<td><?= $row->nama_kegiatan?></td>
				<td><?= $row->judul_penelitian?></td>
				<td align="center"><button class="btn btn-primary btn-sm btn-update" data-toggle="modal" data-target="#modal_update" data-id="<?= $row->id_capaian ?>"><i class="fa fa-pencil-alt"></i></button></td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
</div>