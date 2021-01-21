<div class="col-md-12">
    <input type="hidden" name="id" value="<?= $id?>">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Pertanyaan</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <?php if(!empty($kinerja)):?>
            <tbody>
                <tr>
                    <td>1.</td>
                    <td>Apakah kegiatan menyerap dana sesuai budget?</td>
                    <td>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="point_1" value="1" <?php if($kinerja->point_1 == 1):?>checked<?php endif;?>>
                            <label class="form-check-label">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="point_1" value="0" <?php if($kinerja->point_1 == 0):?>checked<?php endif;?>>
                            <label class="form-check-label">Tidak</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td>Apakah kegiatan menghasilkan eksplorasi baru?</td>
                    <td>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="point_2" value="1" <?php if($kinerja->point_2 == 1):?>checked<?php endif;?>>
                            <label class="form-check-label">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="point_2" value="0" <?php if($kinerja->point_2 == 0):?>checked<?php endif;?>>
                            <label class="form-check-label">Tidak</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>3.</td>
                    <td>Apakah kegiatan menghasilkan prestasi?</td>
                    <td>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="point_3" value="1" <?php if($kinerja->point_3 == 1):?>checked<?php endif;?>>
                            <label class="form-check-label">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="point_3" value="0" <?php if($kinerja->point_3 == 0):?>checked<?php endif;?>>
                            <label class="form-check-label">Tidak</label>
                        </div>
                    </td>
                </tr>
            </tbody>
            <?php else:?>
                <tr>
                    <td>1.</td>
                    <td>Apakah kegiatan menyerap dana sesuai budget?</td>
                    <td>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="point_1" value="1" checked>
                            <label class="form-check-label">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="point_1" value="0">
                            <label class="form-check-label">Tidak</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td>Apakah kegiatan menghasilkan eksplorasi baru?</td>
                    <td>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="point_2" value="1" checked>
                            <label class="form-check-label">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="point_2" value="0">
                            <label class="form-check-label">Tidak</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>3.</td>
                    <td>Apakah kegiatan menghasilkan prestasi?</td>
                    <td>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="point_3" value="1" checked>
                            <label class="form-check-label">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="point_3" value="0">
                            <label class="form-check-label">Tidak</label>
                        </div>
                    </td>
                </tr>
            <?php endif;?>
        </table>
    </div>
</div>