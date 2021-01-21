<div class="page-inner">
	<div class="page-header">
		<h4 class="page-title">Prestasi</h4>
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
											<label>Nama Prestasi</label>
											<input type="text" class="form-control" name="nama_prestasi" required>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Tahun</label>
											<input class="form-control" type="number" name="tahun" id="tahun" required>
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
							<h4 class="card-title">Daftar Prestasi</h4>
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