<table class="table table-hover">
	<caption>List of users</caption>
	<thead>
		<tr>
			<th scope="col">ID User</th>
			<th scope="col">email</th>
			<th scope="col">Confirm Code</th>
			<th scope="col">Acc. Status</th>
			<th scope="col">ID Job</th>
			<th scope="col">ID Stage</th>
			<th scope="col">Action</th>
		</tr>
	</thead>

	<tbody>
		<?php foreach ($user as $i): ?>
		<tr>
			<td><?php echo $i->id_user ?></td>
			<td><?php echo $i->email ?></td>
			<td><?php echo $i->confirm_code ?></td>
			<td><?php echo $i->acc_status ?></td>
			<td><?php echo $i->id_job ?></td>
			<td><?php echo $i->id_stage ?></td>
			<td>
				<?php echo anchor('user/detail/'.$i->id_user, 'Detail', 'class="btn btn-outline-info btn-sm"'); ?>
			</td>
		</tr>
		<?php endforeach ?>
	</tbody>
</table>

