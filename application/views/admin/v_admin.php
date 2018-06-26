<p><a class="btn btn-outline-success" href="<?php echo site_url('admin/add') ?>"><i class="fa fa-plus" aria-hidden="true"></i> Tambah Admin</a></p>

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
				
				<a class="btn btn-outline-info btn-sm" href="<?php echo site_url('admin/edit/').$i->id_admin ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
				<a class="btn btn-outline-danger btn-sm" href="<?php echo site_url('admin/delete/').$i->id_admin ?>"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</a>
			</td>
		</tr>
		<?php endforeach ?>
	</tbody>
</table>

