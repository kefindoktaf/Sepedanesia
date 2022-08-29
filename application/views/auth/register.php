<section class="login_box_area section_gap">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="login_box_img">
					<img class="img-fluid" src="<?= base_url('assets/img/')?>login.jpg" alt="">
					<div class="hover">
						<h4>New to our website?</h4>
						<p>There are advances being made in science and technology everyday, and a good example of this is the</p>
						<a class="primary-btn" href="<?= base_url('auth'); ?>">Login Now</a>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="login_form_inner reg_form">
					<br><h2>CREATE AN ACCOUNT</h2>
					<form class="row login_form" action="<?= base_url('auth/register') ?>" method="post" id="contactForm" novalidate="novalidate">
						<div class="col-md-12 form-group">
							<input type="text" class="form-control" id="nama" name="nama" placeholder="Name" value="<?= set_value('nama'); ?>">
							<?= form_error('nama','<small class="text-danger pl-4">','</small>') ?>
						</div>
						<div class="col-md-12 form-group">
							<input type="email" class="form-control" id="email" name="email" placeholder="Email Address" value="<?= set_value('email'); ?>">
							<?= form_error('email','<small class="text-danger pl-4">','</small>') ?>
						</div>
						<div class="col-md-12 form-group">
							<input type="text" class="form-control" id="username" name="username" placeholder="Username" value="<?= set_value('username'); ?>">
							<?= form_error('username','<small class="text-danger pl-4">','</small>') ?>
						</div>			
						<div class="col-md-12 form-group">
							<input type="password" class="form-control" id="password1" name="password1" placeholder="Password">
							<?= form_error('password1','<small class="text-danger pl-4">','</small>') ?>
						</div>
						<div class="col-md-12 form-group">
							<input type="password" class="form-control" id="password2" name="password2" placeholder="Confirm password">
							<?= form_error('password2','<small class="text-danger pl-4">','</small>') ?>
						</div>
						<div class="col-md-12 form-group">
							<div class="creat_account">
								<input type="checkbox" id="f-option2" name="selector">
								<label for="f-option2">Keep me logged in</label>
							</div>
						</div>
						<div class="col-md-12 form-group">
							<button type="submit" value="submit" class="primary-btn">Register</button>
						</div>					
					</form>
				</div>
			</div>
		</div>
	</div>
</section>