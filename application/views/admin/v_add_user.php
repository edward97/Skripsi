<?php echo form_open('admin/add_act'); ?>
	<div class="form-row">
		<div class="form-group col-md-1">
			<label for="id">ID</label>
			<input type="text" class="form-control" name="id" id="id" readonly>
		</div>

		<div class="form-group col-md-3">
			<label for="username">Nama Admin</label>
			<input type="text" class="form-control" name="username" id="username" required>
		</div>

		<div class="form-group col-md-4">
			<label for="email">Email Admin</label>
			<input type="email" class="form-control" name="email" id="email" required>
		</div>

		<div class="form-group col-md-4">
			<label for="password">Password</label>
			<input type="password" class="form-control" name="password" id="password" required>
			<small id="passHelp" class="form-text text-muted">We'll never share your password with anyone else.</small>
		</div>
	</div>

	<button type="submit" name="submit" class="btn btn-info">Add</button>
<?php echo form_close(); ?>
