<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Sign Up</div>
				<div class="panel-body">
				<?php echo validation_errors(); ?>
				<?php $attr = array('class' => 'form-horizontal'); ?>
					<?php echo form_open('login/create',$attr) ?>
						<input type="hidden" name="_token" value="">

						<div class="form-group">
							<label class="col-md-4 control-label">E-Mail Address</label>
							<div class="col-md-6">
								<input type="email" class="form-control" name="email" value="">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Password</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Confirm Password</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password2">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">Sign Up</button>

								<a class="btn btn-link" href="<?php echo site_url('login') ?>">Login</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>