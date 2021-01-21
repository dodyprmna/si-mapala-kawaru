<div class="page-inner">
	<div class="page-header">
		<h4 class="page-title">User</h4>
	</div>

	<div class="row">
		<div class="col-md-12 panel_add" style="display: none">
			<div class="card">
				<div class="card-header">
					<div class="row">
						<div class="col-md-6">
							<h4>Form Input User</h4>
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
									<div class="col-md-6">
										<div class="form-group">
					        				<label>Nama User</label>
					        				<input class="form-control" type="text" name="nama_user" id="nama_user" required>
										</div>
										<div class="form-group">
					        				<label>Alamat</label>
					        				<input class="form-control" type="text" name="alamat" id="alamat" required>
										</div>
										<div class="form-group">
					        				<label>Nomor Telepon</label>
					        				<input class="form-control" type="number" name="nomor_telepon" id="nomor_telepon" required>
										</div>
									</div>
									<div class="col-md-6">

									<div class="form-group">
					        				<label>Username</label>
					        				<input class="form-control" type="text" name="username" id="username" required>
					        			</div>
					        			<div class="form-group">
					        				<label>Role Akses</label>
					        				<select class="select2" id="role" name="role">
					        					<?php foreach($role as $row):?>
					        						<option value="<?= $row->id_role?>"><?= $row->nama_role?></option>
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
							<h4 class="card-title">Daftar user</h4>
						</div>
						<div class="col-md-6" align="right">
							<button class="btn btn-primary btn-sm" data-plugin="add"><i class="fa fa-plus"></i></button>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
						</div>
					</div>
				</div>
				<div class="card-body" id="list_data">
					
				</div>
			</div>
		</div>
	</div>
</div>