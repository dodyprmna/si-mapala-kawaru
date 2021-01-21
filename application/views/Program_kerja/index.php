<div class="page-inner">
	<div class="page-header">
		<h4 class="page-title">Program Kerja</h4>
	</div>

	<div class="row">
		<div class="col-md-12 panel_add" style="display: none">
			<div class="card">
				<div class="card-header">
					<div class="row">
						<div class="col-md-6">
							<h4>Form Input</h4>
						</div>
						<div class="col-md-6" align="right">
							<button class="btn btn-primary btn-sm" data-plugin="minimize"><i class="fa fa-minus"></i></button>
						</div>
					</div>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-md-12">
							<form id="form_insert" method="post">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Nama Program Kerja</label>
											<input type="text" class="form-control" name="nama_proker" required>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Tanggal Mulai</label>
											<input class="form-control" type="date" name="tgl_mulai" id="tgl_mulai" required>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Tanggal Selesai</label>
											<input class="form-control" type="date" name="tgl_selesai" id="tgl_selesai" required>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Lokasi</label>
											<textarea class="form-control" name="lokasi" cols="30" rows="3" required></textarea>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group" style="float: right">
											<button class="btn btn-danger btn-sm" type="reset">Reset</button> <button class="btn btn-primary btn-sm" type="submit">Submit</button>
										</div>
									</div>
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
							<h4 class="card-title">Daftar Program Kerja</h4>
						</div>
						<div class="col-md-6" align="right">
							<button class="btn btn-primary btn-sm" data-plugin="add"><i class="fa fa-plus"></i></button>
						</div>
					</div>	
				</div>
				<div class="row">
						<div class="col-md-12">
							<div class="card-body" id="list_data">
								
							</div>
						</div>

					</form>
				</div>
			</div>
		</div>
	</div>
</div>