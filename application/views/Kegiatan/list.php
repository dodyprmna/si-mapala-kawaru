<table class="table table-bordered" id="tabel_kegiatan">
	<thead>
		<tr>
			<th><center>No</center></th>
			<th><center>Nama Kegiatan</center></th>
			<th><center>Proker</center></th>
			<th><center>Tanggal Mulai Kegiatan</center></th>
			<th><center>Tanggal Selesai Kegiatan</center></th>
			<th><center>Aksi</center></th>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1; foreach($kegiatan as $row):?>
			<tr>
				<td align="center"><?= $no++?></td>
				<td><?= $row->nama_kegiatan?></td>
				<td><?= $row->nama_proker?></td>
				<td><?php if(!empty($row->tanggal_mulai_kegiatan)):?><?= date("d M Y",strtotime($row->tanggal_mulai_kegiatan))?><?php else:?>-<?php endif?></td>
				<td><?php if(!empty($row->tanggal_selesai_kegiatan)):?><?= date("d M Y",strtotime($row->tanggal_selesai_kegiatan))?><?php else:?>-<?php endif?></td>
				<td align="center">
					<?php if(in_array('5',explode(',', $this->session->userdata("akses")))):?>
						<button class="btn btn-primary btn-sm btn-pelaksana" data-id="<?= $row->id_kegiatan?>" data-toggle="modal" data-target="#modal"><i class="fa fa-edit"></i></button>
					<?php endif;?>
					<?php if(in_array('4',explode(',', $this->session->userdata("akses")))):?>
						<button class="btn btn-primary btn-sm btn-update" data-id="<?= $row->id_kegiatan?>" data-toggle="modal" data-target="#modal_update"><i class="fa fa-pencil-alt"></i></button>
					<?php endif;?>
					<?php if(in_array('6',explode(',', $this->session->userdata("akses")))):?>
						<button class="btn btn-primary btn-sm btn-kinerja" data-id="<?= $row->id_kegiatan?>" data-toggle="modal" data-target="#modal_kinerja">input kinerja</button>
					<?php endif;?>
						<button class="btn btn-info btn-sm btn-detail" data-id="<?= $row->id_kegiatan?>" data-toggle="modal" data-target="#modal_"><i class="fa fa-eye"></i></button>
				</td>
			</tr>
		<?php endforeach;?>
	</tbody>
</table>