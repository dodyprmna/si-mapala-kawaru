<div class="page-inner">
	<div class="page-header">
		<h4 class="page-title">Kegiatan</h4>
	</div>

	<div class="row">
		<div class="col-md-12 panel_add" style="display: none">
			<div class="card">
				<div class="card-header">
					<div class="row">
						<div class="col-md-6">
							<h4>Form Input Kegiatan</h4>
						</div>
						<div class="col-md-6" align="right">
							<button class="btn btn-primary btn-sm" data-plugin="minimize"><i class="fa fa-minus"></i></button>
						</div>
					</div>
				</div>
				<div class="card-body">
					<div class="row" >
						<div class="col-md-12">
							<form id="form_insert" method="post">
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
					        				<label>Nama Kegiatan</label>
					        				<input class="form-control" type="text" name="nama_kegiatan" id="nama_kegiatan" required>
					        			</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
					        				<label>Program Kerja</label>
											<select class="form-control select2" name="proker" id="proker" required>
												<?php foreach($proker as $row):?>
													<option value="<?= $row->id_proker?>"><?= $row->nama_proker?></option>
												<?php endforeach;?>
											</select>	
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label>Ketupel Kegiatan</label>
											<select class="form-control select2" name="ketupel" id="ketupel">
												<?php foreach($ketupel as $row):?>
													<option value="<?= $row->id_user?>"><?= $row->nama_user?></option>
												<?php endforeach;?>
											</select>
										</div>
									</div>
			        			</div>
			        			<div class="form-group" align="right">
			        				<button class="btn btn-danger btn-sm" type="reset">Reset</button>
			        				<button class="btn btn-primary btn-sm" type="submit">Submit</button>
			        			</div>
	        				</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div class="row">
						<div class="col-md-6">
							<h4 class="card-title">Daftar Kegiatan</h4>
						</div>
						<?php if(in_array('4', explode(',', $this->session->userdata("akses")))):?>
						<div class="col-md-6" align="right">
							<button class="btn btn-primary btn-sm" data-plugin="add"><i class="fa fa-plus"></i></button>
						</div>
						<?php endif;?>
					</div>
				</div>
				<div class="card-body" id="list_data">
					
				</div>
			</div>
		</div>
	</div>
</div>