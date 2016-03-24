<div class="row">
<br/><br/>
<legend>New User</legend>
	<?= form_open('','class="form-horizontal"') ?>
	<div class="form-group">
	    <label class="col-sm-2 control-label">Kode User</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" id="kode_user" name="kode_user" placeholder="Kode User">
	    </div>
	  </div>
	  <div class="form-group">
	    <label class="col-sm-2 control-label">Username</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" id="username" name="username" placeholder="Username">
	    </div>
	  </div>
	  <div class="form-group">
	    <label class="col-sm-2 control-label">Hak Akses</label>
	    <div class="col-sm-10">
	      <?= form_dropdown('level',array(''=>'Pilih Hak Akses','Admin'=>'Admin','User'=>'User'),'','class="form-control"') ?>
	    </div>
	  </div>
	  <div class="form-group">
	    <label class="col-sm-2 control-label">Password</label>
	    <div class="col-sm-10">
	      <input type="password" class="form-control" id="password" name="password" placeholder="Password">
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