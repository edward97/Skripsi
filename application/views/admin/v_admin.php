<?php echo $this->session->flashdata('msg_admin') ?>

<div class="float-left">
	<p><a class="btn btn-outline-success" href="#" data-toggle="modal" data-target="#tambahAdmin"><i class="fa fa-plus" aria-hidden="true"></i> Tambah Admin</a></p>
</div>

<div class="float-right">
	<?php echo $pagination; ?>
</div>


<table class="table table-hover">
	<caption>Total Admin : <?php echo $jumlah_admin ?></caption>
	<thead>
		<tr>
			<th scope="col">ID</th>
			<th scope="col">Nama Admin</th>
			<th scope="col">Email</th>
			<th scope="col">Level</th>
			<th scope="col">Status Partisipasi</th>
			<th scope="col">Keterangan</th>
			<th scope="col">Action</th>
		</tr>
	</thead>

	<tbody>
		<?php foreach ($admin as $i): ?>
		<tr>
			<td><?php echo $i->id_admin ?></td>
			<td><?php echo $i->nm_admin ?></td>
			<td><?php echo $i->email ?></td>
			<td><?php echo $i->level ?></td>
			<td><?php echo $i->status_partisipasi ?></td>
			<td><?php echo $i->keterangan ?></td>
			<td>
				<a
					href="javascript:;" 
					data-id="<?php echo $i->id_admin ?>" 
					data-nama="<?php echo $i->nm_admin ?>" 
					data-email="<?php echo $i->email ?>" 
					data-level="<?php echo $i->level ?>" 
					data-partisipasi="<?php echo $i->status_partisipasi ?>" 
					data-keterangan="<?php echo $i->keterangan ?>" 
					data-toggle="modal" data-target="#edit-admin" 
					class="btn btn-outline-info btn-sm">
						<i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
				</a>
				
				<a class="btn btn-outline-danger btn-sm" href="<?php echo site_url('admin/delete/').$i->id_admin ?>" onclick="return confirmDialog();"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</a>
			</td>
		</tr>
		<?php endforeach ?>
	</tbody>
</table>

<!-- Modal Admin -->
<div class="modal fade" id="tambahAdmin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Add Admin</h5>
				
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<?php echo form_open('admin/add_act'); ?>
			<form>
				<div class="modal-body">
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="id">ID</label>
							<input type="text" name="id" id="id" class="form-control" readonly>
						</div>

						<div class="form-group col-md-6">
							<label for="username">Nama Admin</label>
							<input type="text" class="form-control" name="username" id="username" required>
						</div>
					</div>

					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="email">Email Admin</label>
							<input type="email" class="form-control" name="email" id="email" required>
						</div>

						<div class="form-group col-md-6">
							<label for="password">Password</label>
							<input type="password" class="form-control" name="password" id="password" required>
						</div>
					</div>

					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="level">Level</label>
							<input type="text" class="form-control" name="level" id="level" required>
							<small id="keteranganHelp" class="form-text text-muted">[ 1 => superadmin, 2 => admin ]</small>
						</div>

						<div class="form-group col-md-6">
							<label for="partisipasi">Status Partisipasi</label>
							<input type="text" class="form-control" name="partisipasi" id="partisipasi" required>
							<small id="keteranganHelp" class="form-text text-muted">[ 0 => Non-Active, 1 => Active ]</small>
						</div>
					</div>

					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="keterangan">keterangan</label>
							<input type="text" class="form-control" name="keterangan" id="keterangan" required>
							<small id="keteranganHelp" class="form-text text-muted">HRD, Logistic, etc.</small>

						</div>
					</div>
				</div>

				<div class="modal-footer">
					<button type="submit" name="submit" class="btn btn-info"><i class="fa fa-floppy-o" aria-hidden="true"></i> Save</button>
					<button type="button" class="btn btn-warning" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i> Cancel</button>
				</div>
			<?php echo form_close(); ?>
		</div>
	</div>
</div>

<!-- Modal Update Admin -->
<div class="modal fade" id="edit-admin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Add Admin</h5>
				
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<?php echo form_open('admin/update_act'); ?>
			<form>
				<div class="modal-body">
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="id">ID</label>
							<input type="text" name="id" id="id" class="form-control" readonly>
						</div>

						<div class="form-group col-md-6">
							<label for="username">Nama Admin</label>
							<input type="text" class="form-control" name="username" id="username" required>
						</div>
					</div>

					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="email">Email Admin</label>
							<input type="email" class="form-control" name="email" id="email" required>
						</div>

						<div class="form-group col-md-6">
							<label for="password">Password</label>
							<input type="password" class="form-control" name="password" id="password" required>
						</div>
					</div>

					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="level">Level</label>
							<input type="text" class="form-control" name="level" id="level" required>
							<small id="keteranganHelp" class="form-text text-muted">[ 1 => superadmin, 2 => admin ]</small>
						</div>

						<div class="form-group col-md-6">
							<label for="partisipasi">Status Partisipasi</label>
							<input type="text" class="form-control" name="partisipasi" id="partisipasi" required>
							<small id="keteranganHelp" class="form-text text-muted">[ 0 => Non-Active, 1 => Active ]</small>
						</div>
					</div>

					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="keterangan">keterangan</label>
							<input type="text" class="form-control" name="keterangan" id="keterangan" required>
							<small id="keteranganHelp" class="form-text text-muted">HRD, Logistic, etc.</small>

						</div>
					</div>
				</div>

				<div class="modal-footer">
					<button type="submit" name="submit" class="btn btn-info"><i class="fa fa-refresh" aria-hidden="true"></i> Update</button>
					<button type="button" class="btn btn-warning" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i> Cancel</button>
				</div>
			<?php echo form_close(); ?>
		</div>
	</div>
</div>
