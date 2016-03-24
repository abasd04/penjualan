<div class="row">
<br/><br/>
 <?php if ($this->session->userdata('level') === 'Admin'){ ?>
        <a href="<?= site_url('penjualan/add') ?>" class="btn btn-app btn-primary">NEW TRANSAKSI</a>
<?php } ?>

<table class="table">
  <thead>
  	<tr>
  		<th>Kode Transaksi</th>
  		<th>Nama </th>
  		<th>Jenis</th>
  		<th>Harga</th>
  		<th>Pajak</th>
  		<th>Total</th>
       <?php if ($this->session->userdata('level') === 'Admin'){ ?>
        <th>#</th>
      <?php } ?>
  		
  	</tr>
  </thead>
  <tbody>
  	<?php 
  		if (!empty($list)){
  			foreach ($list as $l) { ?>
  				<tr>
  					<td><?= $l->kode_transaksi; ?></td>
  					<td><?= $l->nama; ?></td>
  					<td><?= $l->jenis; ?></td>
  					<td><?= $l->harga; ?></td>
  					<td><?= $l->pajak; ?></td>
  					<td><?= $l->total; ?></td>
              <?php if ($this->session->userdata('level') === 'Admin'){ ?>
                <td>
                <a href="<?= site_url('penjualan/delete/'.$l->kode_transaksi); ?>" class="btn btn-primary">Delete</a>
                </td>
              <?php } ?>
  					
  				</tr>
  			<?php }
  		}
  	?>
  </tbody>
</table>
</div>