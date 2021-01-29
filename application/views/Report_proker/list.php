<div class="row btnprint">
    <div class="col-md-12 mb-3" align="right">
        <button class="btn btn-primary btn-sm" onclick="printproker()"><i class="fa fa-file-pdf fa-2x"></i></button>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th><center><strong><h3>Report Program Kerja<?php if($tahun != 0):?><br><?=$tahun?><?php endif;?></h3></strong></center></th>
                </tr>
            </thead>
        </table>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="table-responsive">
            <table class="table table-bordered" id="tabel_proker">
                <thead>
                    <tr>
                        <th><center>No</center></th>
                        <th><center>Proker</center></th>
                        <th><center>Lokasi</center></th>
                        <th><center>Tanggal Mulai</center></th>
                        <th><center>Tanggal Selesai</center></th>
                        <th><center>Anggaran Dana</center></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; foreach($proker as $row):?>
                        <tr>
                            <td><?= $no++?></td>
                            <td><?= $row->nama_proker?></td>
                            <td><?= $row->lokasi?></td>
                            <td><?= date("d M Y",strtotime($row->tanggal_mulai_proker))?></td>
                            <td><?= date("d M Y",strtotime($row->tanggal_selesai_proker))?></td>
                            <td>Rp <?=number_format($row->dana,2,',','.');?></td>
                        </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
</div>