
<div class="main">
    <div class="content">
	<div class="content_top">
    		<div class="back-links">
             <ul><a href="<?=PATH;?>">Bosh sahifa >>></a>
                <li>Ro'yhatdan o'tish</li>
             </ul>
    	    </div>
    		<div class="clear"></div>
    	</div>
    	<div class="section group">
			<div class="cont-desc span_1_of_2">
			<div class="register-group">
				<div class="col-md-6 account-left">
					<form method="post" action="user/signup" id="signup" role="form" data-toggle="validator">
					<div class="form-group has-feedback">
						<label for="login">Login</label>
						<input type="text" name="login" class="form-control" id="login" placeholder="Login" value="<?=isset($_SESSION['form_data']['login']) ? h($_SESSION['form_data']['login']) : '' ?>" required>
						<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
						<div class="help-block with-errors"></div>
					</div>
					<div class="form-group has-feedback">
						<label for="password">Parol</label>
						<input type="password" name="password" class="form-control" id="password" placeholder="Parol" data-error="Parol kamida 6 ta belgidan iborat bo'lishi kerak" data-minlength="6" value="<?=isset($_SESSION['form_data']['password']) ? h($_SESSION['form_data']['password']) : '' ?>" required>
						<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
					</div>
					<div class="form-group has-feedback">
						<label for="name">Ism</label>
						<input type="text" name="name" class="form-control" id="name" placeholder="Ism" value="<?=isset($_SESSION['form_data']['name']) ? h($_SESSION['form_data']['name']) : '' ?>" required>
						<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
					</div>
					<div class="form-group has-feedback">
						<label for="phone">Telefon raqam</label>
						<input type="number" name="phone" class="form-control" id="phone" placeholder="+998" value="<?=isset($_SESSION['form_data']['phone']) ? h($_SESSION['form_data']['phone']) : '' ?>" required>
						<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
					</div>
					<div class="form-group has-feedback">
						<label for="email">Email</label>
						<input type="email" name="email" class="form-control" id="email" placeholder="Email" value="<?=isset($_SESSION['form_data']['email']) ? h($_SESSION['form_data']['email']) : '' ?>" required>
						<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
					</div>
					<div class="form-group has-feedback">
						<label for="address">Manzil:</label>
						<input type="text" name="address" class="form-control" id="address" placeholder="Address" value="<?=isset($_SESSION['form_data']['address']) ? h($_SESSION['form_data']['address']) : '' ?>" required>
						<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
					</div>
					<button type="submit" class="btn btn-danger">Yuborish</button>
				</div>
			</form>
			<?php if(isset($_SESSION['form_data'])) unset($_SESSION['form_data']); ?>
		</div>
    </div>
</div>
	</div>
		</div>