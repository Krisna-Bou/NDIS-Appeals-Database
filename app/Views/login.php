<div class="register-container">
	<div class="register-card">
		<title>Login</title>
		<div class="col-4 offset-4">
			<?php echo form_open(base_url() . 'login/check_login'); ?>
			<h1 class="text-center">Login</h1>
			<div class="form-group">
				<?php echo $error; ?>
			</div>
			<input type="text" class="text-in" placeholder="Email" required="required" name="email">
			<input type="password" class="text-in" placeholder="Password" required="required" name="password">
			<button type="submit" class="submit-btn">SUBMIT</button>
				<?php echo form_close(); ?>
		</div>
	</div>
</div>