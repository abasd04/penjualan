<div class="row">
<br/><br/>
<a href="<?= site_url('user/add') ?>" class="btn btn-app btn-primary">NEW USER</a>
<table class="table">
  <thead>
  	<tr>
  		<th>Kode User</th>
  		<th>username </th>
  		<th>Hak Akses</th>
  		<th>#</th>
  	</tr>
  </thead>
  <tbody>
  	<?php 
  		if (!empty($list)){
  			foreach ($list as $l) { ?>
  				<tr>
  					<td><?= $l->kd_user; ?></td>
  					<td><?= $l->username; ?></td>
  					<td><?= $l->level; ?></td>
  					<td>
  						<a href="<?= site_url('user/delete/'.$l->kd_user); ?>" class="btn btn-primary">Delete</a>
  					</td>
  				</tr>
  			<?php }
  		}
  	?>
  </tbody>
</table>
</div>