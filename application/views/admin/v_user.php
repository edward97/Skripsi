<p><?php echo anchor('admin/add', 'Tambah Admin', 'class="btn btn-outline-info"'); ?></p>

<table class="table table-hover">
	<caption>List of users</caption>
	<thead>
		<tr>
			<th scope="col">ID</th>
			<th scope="col">Nama Admin</th>
			<th scope="col">Email</th>
			<th scope="col">Action</th>
		</tr>
	</thead>

	<tbody>
		<?php foreach ($admin as $i): ?>
		<tr>
			<td><?php echo $i->id_admin ?></td>
			<td><?php echo $i->nm_admin ?></td>
			<td><?php echo $i->email ?></td>
			<td>
				<?php echo anchor('admin/edit/'.$i->id_admin, 'Edit', 'class="btn btn-outline-info btn-sm"'); ?>
				<?php echo anchor('admin/delete/'.$i->id_admin, 'Delete', 'class="btn btn-outline-danger btn-sm"'); ?>
			</td>
		</tr>
		<?php endforeach ?>
	</tbody>
</table>

