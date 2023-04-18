
<div class="main">
    <div class="content">
	<div class="content_top">
    		<div class="back-links">
             <ul><a href="<?=PATH;?>">Bosh sahifa >>></a>
                <li>Sotib olish</li>
             </ul>
    	    </div>
    		<div class="clear"></div>
    	</div>
    	<div class="section group">
        <?php if(!empty($_SESSION['cart'])): ?>
<div class="content">
    <div class="content-top">
    <div class="table-responsive">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>Rasm</th>
                    <th>Nomi</th>
                    <th>Soni</th>
                    <th>Narx</th>
                    <th><span aria-hidden="true"><i class="fa fa-times"></i></span></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($_SESSION['cart'] as $id => $item): ?>
                <tr>
                    <td><a href="product/<?=$item['alias'];?>"><img src="images/<?=$item['img'];?>" class="img-cart" alt=""></a></td>
                    <td><a href="product/<?=$item['alias'];?>"><?=$item['title'];?></a></td>
                    <td><?=$item['qty'];?></td>
                    <td><?=$_SESSION['cart.currency']['symbol_left'];?><?=$item['price'];?><?=$_SESSION['cart.currency']['symbol_right'];?></td>
                    <td><a href="/cart/delete/?id=<?=$id;?>"><span data-id="<?=$id;?>" class="glyphicon del-item" aria-hidden="true"><i class="fa fa-times" style="color: red"></i></span></a></td>
                </tr>
                <?php endforeach; ?>
                <tr>
                    <td>Soni:</td>
                    <td colspan="4" class="text-right cart-qty"><?=$_SESSION['cart.qty'];?></td>
                </tr>
                <tr>
                    <td>Jami:</td>
                    <td colspan="4" class="text-right cart-sum"><?=$_SESSION['cart.currency']['symbol_left'] . $_SESSION['cart.sum'] . $_SESSION['cart.currency']['symbol_right'];?></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<div class="register-group">
				<div class="col-md-6 account-left">
					<form method="post" action="cart/checkout" id="signup" role="form" data-toggle="validator">
                    <?php if(!isset($_SESSION['user'])): ?>
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
                    <?php endif; ?>
                    <div class="form-group">
                        <label for="note">Izoh qoldirish:</label>
                        <textarea name="note" rows="7" class="form-control"></textarea>
                    </div>
					<button type="submit" class="btn btn-danger">Yuborish</button>
				</div>
			</form>
			<?php if(isset($_SESSION['form_data'])) unset($_SESSION['form_data']); ?>
		</div>
    </div>
</div>
</div>
<?php else: ?>
    <h2 style="text-align: center; margin-top: 5%;">Savat bo'sh...</h2>
<?php endif; ?>
</div>

			
	