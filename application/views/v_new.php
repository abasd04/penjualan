<div class="row">
<br/><br/>
<legend>New Transaksi</legend>
	<?= form_open('','class="form-horizontal"') ?>
	  <div class="form-group">
	    <label class="col-sm-2 control-label">Kode Transaksi</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" id="kd_transaksi" name="kode_transaksi" placeholder="Kode Transaksi">
	    </div>
	  </div>
	  <div class="form-group">
	    <label class="col-sm-2 control-label">Nama</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
	    </div>
	  </div>
	  <div class="form-group">
	    <label class="col-sm-2 control-label">Jenis</label>
	    <div class="col-sm-10">
	      <?= form_dropdown('jenis',$list_jenis,'','class="form-control" id="jenis"') ?>
	    </div>
	  </div>
	  <div class="form-group">
	    <label class="col-sm-2 control-label">Harga</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" id="harga" name="harga" placeholder="Harga" readonly="">
	    </div>
	  </div>
	  <div class="form-group">
	    <label class="col-sm-2 control-label">Pajak</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" id="pajak" name="pajak" placeholder="Pajak" readonly="">
	    </div>
	  </div>
	  <div class="form-group">
	    <label class="col-sm-2 control-label">Total</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" id="total" name="total" placeholder="Total" readonly="">
	    </div>
	  </div>
	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	    	<div class="pull-right">
	    		<button type="submit" class="btn btn-primary">Save</button>
	    	</div>
	    	<a href="<?= site_url(); ?>" class="btn btn-default">Cancel</a>
	    </div>
	  </div>
	</form>
</div>