<input type="hidden" name="id" value="<?= $id?>">
<div class="col-md-6">
    <div class="form-group">
        <label>Tanggal Mulai Kegiatan</label>
        <input type="date" class="form-control" name="tgl_mulai" value="<?= $kegiatan->tanggal_mulai_kegiatan?>" required>
    </div>
</div>
<div class="col-md-6">
    <div class="form-group">
        <label>Tanggal Selesai Kegiatan</label>
        <input type="date" class="form-control" name="tgl_selesai" value="<?= $kegiatan->tanggal_selesai_kegiatan?>" required>
    </div>
</div>
<div class="col-md-12">
    <div class="form-group">
        <label>Lokasi Kegiatan</label>
        <textarea class="form-control" name="lokasi" cols="30" rows="3" required><?= $kegiatan->lokasi_kegiatan?></textarea>
    </div>
</div>
<div class="col-md-12">
    <div class="form-group">
        <label>Pelaksana kegiatan</label>
        <select class="form-control select2" multiple name="ekspeditor[]">
            <?php foreach ($ekspeditor as $row) : ?>
                <option value="<?= $row->id_user ?>" <?php if(in_array($row->id_user,$detail)):?>selected<?php endif;?>><?= $row->nama_user ?></option>
            <?php endforeach; ?>
        </select>
    </div>
</div>
<div class="col-md-6">
    <div class="form-group">
        <label>Pemasukan</label>
        <input class="form-control" type="number" name="pemasukan" <?php if(!empty($pendanaan)):?>value="<?= $pendanaan->pemasukan?>"<?php endif?>>
    </div>
</div>
<div class="col-md-6">
    <div class="form-group">
        <label>Pengeluaran</label>
        <input class="form-control" type="number" name="pengeluaran" <?php if(!empty($pendanaan)):?>value="<?= $pendanaan->pengeluaran?>"<?php endif;?>>
    </div>
</div>
<script>
    $('.select2').select2({
        theme: 'bootstrap4',
        width: '100%',
    });
</script>