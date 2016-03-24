<div class="row">
<br/><br/>
<legend><?= $title; ?></legend>
	<?php 
		if (!empty($error)){
			echo '<div class="alert alert-success" role="alert">'.$error.'</div>';
		}
	?>
	<?= form_open('','class="form-horizontal"') ?>
	  <div class="form-group">
	    <label class="col-sm-2 control-label">Username</label>
	    <div class="col-sm-4">
	      <input type="text" class="form-control" id="username" name="username" placeholder="Username" required="">
	    </div>
	  </div>
	  <div class="form-group">
	    <label class="col-sm-2 control-label">Password</label>
	    <div class="col-sm-4">
	      <input type="password" class="form-control" id="password" name="password" placeholder="Password" required="">
	    </div>
	  </div>
	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-4">
	    		<button type="submit" class="btn btn-primary btn-app btn-block">Login</button>
	    </div>
	  </div>
	</form>
</div>