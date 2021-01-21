<div class="table-responsive">
	<table class="table table-bordered" id="tabel_proker">
		<thead>
			<tr>
				<th>No</th>
				<th>Program Kerja</th>
				<th>Lokasi</th>
				<th>Tanggal Mulai</th>
				<th>Tanggal Selesai</th>
				<th>Anggaran Dana</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
		<?php $no = 1;
		foreach ($proker as $row) : ?>
			<tr>
				<td><?= $no++?></td>
				<td><?= $row->nama_proker?></td>
				<td><?= nl2br($row->lokasi)?></td>
				<td><?= date("d M Y",strtotime($row->tanggal_mulai_proker))?></td>
				<td><?= date("d M Y",strtotime($row->tanggal_selesai_proker))?></td>
				<td>Rp <?=number_format($row->dana,2,',','.');?></td>
				<td align="center"><button class="btn btn-primary btn-sm btn-update" data-toggle="modal" data-target="#modal_update" data-id="<?= $row->id_proker ?>"><i class="fa fa-pencil-alt"></i></button></td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
</div>