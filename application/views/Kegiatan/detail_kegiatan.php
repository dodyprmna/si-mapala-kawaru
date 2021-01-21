<div class="col-md-12">
    <div class="row">
        <div class="col-md-6">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th>Nama Kegiatan</th>
                        <td><?= $kegiatan->nama_kegiatan?></td>
                    </tr>
                    <tr>
                        <th>Ketua Pelaksana Kegiatan</th>
                        <td><?= $kegiatan->nama_user?></td>
                    </tr>
                    <tr>
                        <th>Lokasi Kegiatan</th>
                        <td><?= nl2br($kegiatan->lokasi_kegiatan)?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-6">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th>Tanggal Mulai Kegiatan</th>
                        <td><?php if(!empty($kegiatan->tanggal_mulai_kegiatan)):?><?= date("d M Y",strtotime($kegiatan->tanggal_mulai_kegiatan))?><?php endif;?></td>
                    </tr>
                    <tr>
                        <th>Tanggal Selesai Kegiatan</th>
                        <td><?php if(!empty($kegiatan->tanggal_selesai_kegiatan)):?><?= date("d M Y",strtotime($kegiatan->tanggal_selesai_kegiatan))?><?php endif;?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 mt-3" align="center">
            <hr>
            <strong>Pelaksana kegiatan</strong>
        </div>
        <div class="col-md-12">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Telepon</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1; foreach($detail as $row):?>
                    <tr>
                        <td><?= $no++?></td>
                        <td><?= $row->nama_user?></td>
                        <td><?= $row->alamat?></td>
                        <td><?= $row->nomor_telepon?></td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>
        <?php if(!empty($pendanaan)):?>
        <div class="col-md-12 mt-3" align="center">
            <strong>Capaian Alokasi Pendanaan</strong>
        </div>
        <div class="col-md-12">
            <table class="table table-hover">
                <tbody>
                    <tr>
                        <th>Pemasukan</th>
                        <td>Rp <?=number_format($pendanaan->pemasukan,2,',','.');?></td>
                    </tr>
                    <tr>
                        <th>Pengeluaran</th>
                        <td>Rp <?=number_format($pendanaan->pengeluaran,2,',','.');?></td>
                    </tr>
                    <tr>
                        <th>Keterangan</th>
                        <td>
                            <?php if($pendanaan->pemasukan > $pendanaan->pengeluaran):?>
                                <span class="badge badge-success badge-sm">Surplus</span>
                            <?php elseif($pendanaan->pemasukan == $pendanaan->pengeluaran):?>
                                <span class="badge badge-success badge-sm">Sesuai</span>
                            <?php else:?>
                                <span class="badge badge-danger badge-sm">Defisit</span>
                            <?php endif;?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <?php endif;?>
        <?php if(!empty($kinerja)):?>
        <div class="col-md-12 mt-3" align="center">
            <strong>Kinerja Kegiatan</strong>
        </div>
        <div class="col-md-12">
            <table class="table table-hover">
                <tbody>
                    <tr>
                        <th>Kriteria kinerja kegiatan</th>
                        <td><span class="badge badge-info">menyerap dana <?php if($kinerja->point_1 == 0):?>tidak <?php endif;?>sesuai budget,<?php if($kinerja->point_2 == 0):?>tidak<?php endif;?> menghasilkan eksplorasi baru,<?php if($kinerja->point_3 == 0):?>tidak<?php endif;?> menghasilkan prestasi.</span></td>
                    </tr>
                    <tr>
                        <th>Bobot Nilai</th>
                        <td><?=$kinerja->bobot;?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <?php endif;?>
    </div>
</div>