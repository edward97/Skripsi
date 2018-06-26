<div class="card-deck">
	<div class="card">
		<div class="card-header">
			<div class="float-md-left">
				List Ability
			</div>
			<div class="float-md-right">
				<button type="button" class="btn btn-outline-success btn-sm" data-toggle="modal" data-target="#tambahAbility">
					<i class="fa fa-plus" aria-hidden="true"></i> Add Ability
				</button>
			</div>
		</div>

		<div class="card-body">
			<h5 class="card-title">Card title</h5>
			<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

			<table class="table table-hover table-sm">
				<thead>
					<tr>
						<th scope="col">ID</th>
						<th scope="col">Nama Ability</th>
						<th scope="col">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($ability as $i): ?>
						<tr>
							<td><?php echo $i->id_ability; ?></td>
							<td><?php echo $i->nm_ability; ?></td>
							<td>
								<?php echo anchor('setting/edit_abt/'.$i->id_ability, 'Edit', 'class="btn btn-outline-info btn-sm"'); ?>
								<?php echo anchor('setting/delete_act_abt/'.$i->id_ability, 'Delete', 'class="btn btn-outline-danger btn-sm"'); ?>
							</td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>

		<div class="card-footer">
			<p class="card-text"><small class="text-success"><?php echo $this->session->flashdata('msg_ability'); ?></small></p>
		</div>
	</div>

	<div class="card">
		<div class="card-header">
			<div class="float-md-left">
				List Job
			</div>
			<div class="float-md-right">
				<button type="button" class="btn btn-outline-success btn-sm" data-toggle="modal" data-target="#tambahJob">
					<i class="fa fa-plus" aria-hidden="true"></i> Add Job
				</button>
			</div>
		</div>

		<div class="card-body">
			<h5 class="card-title">Card title</h5>
			<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

			<table class="table table-hover table-sm">
				<thead>
					<tr>
						<th scope="col">ID</th>
						<th scope="col">Nama Job</th>
						<th scope="col">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($job as $i): ?>
						<tr>
							<td><?php echo $i->id_job; ?></td>
							<td><?php echo $i->nm_job; ?></td>
							<td>
								<?php echo anchor('setting/edit_job/'.$i->id_job, 'Edit', 'class="btn btn-outline-info btn-sm"'); ?>
								<?php echo anchor('setting/delete_act_job/'.$i->id_job, 'Delete', 'class="btn btn-outline-danger btn-sm"'); ?>
							</td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>

		<div class="card-footer">
			<p class="card-text"><small class="text-success"><?php echo $this->session->flashdata('msg_job'); ?></small></p>
		</div>
	</div>

</div>

<!-- Modal Ability -->
<div class="modal fade" id="tambahAbility" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tambah Ability</h5>
				
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<?php echo form_open('setting/add_act_abt') ?>
			<form>
				<div class="modal-body">
					<div class="form-group">
						<label for="id">ID</label>
						<input type="text" name="id" class="form-control" readonly>
					</div>

					<div class="form-group">
						<label for="nm_abt">Nama Ability</label>
						<input type="text" name="nm_abt" class="form-control" placeholder="Coding, Etc">
					</div>
				</div>

				<div class="modal-footer">
					<button type="submit" name="submit" class="btn btn-info btn-sm">Save</button>
					<button type="button" class="btn btn-warning btn-sm" data-dismiss="modal">Cancel</button>
				</div>
			</form>
		</div>
	</div>
</div>

<!-- Modal Job -->
<div class="modal fade" id="tambahJob" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tambah Job</h5>
				
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<?php echo form_open('setting/add_act_job') ?>
			<form>
				<div class="modal-body">
					<div class="form-group">
						<label for="id">ID</label>
						<input type="text" name="id" class="form-control" readonly>
					</div>

					<div class="form-group">
						<label for="nm_job">Nama Job</label>
						<input type="text" name="nm_job" class="form-control" placeholder="IT Support, Etc">
					</div>
				</div>

				<div class="modal-footer">
					<button type="submit" name="submit" class="btn btn-info btn-sm">Save</button>
					<button type="button" class="btn btn-warning btn-sm" data-dismiss="modal">Cancel</button>
				</div>
			</form>
		</div>
	</div>
</div>