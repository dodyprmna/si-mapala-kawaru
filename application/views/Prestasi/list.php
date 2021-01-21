<div class="table-responsive">
	<table class="table table-bordered" id="tabel_prestasi">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Prestasi</th>
				<th>Tahun Pencapaian</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
		<?php $no = 1;
		foreach ($prestasi as $row) : ?>
			<tr>
				<td><?= $no++?></td>
				<td><?= $row->nama_user?></td>
				<td><?= $row->prestasi?></td>
				<td><?= $row->tahun?></td>
				<td align="center"><button class="btn btn-primary btn-sm btn-update" data-toggle="modal" data-target="#modal_update" data-id="<?= $row->id_prestasi ?>"><i class="fa fa-pencil-alt"></i></button></td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
</div>