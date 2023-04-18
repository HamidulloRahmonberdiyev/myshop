<?php $curr = \myshop\App::$app->getProperty('currency'); ?>
<div class="main">
    <div class="content" id="content">
    	<div class="content_top">
    		<div class="back-links">
             <?= $breadcrumbs; ?>
    	    </div>
    		<div class="clear"></div>
    	</div>
    	<div class="section group">
			<div class="cont-desc span_1_of_2">
   <div class="content_bottom">
    		<div class="heading">
    		<h3>Mahsulotlar</h3>
    		</div>
    		<div class="see">
    			<p><a href="#">Hammasini ko'rish</a></p>
    		</div>
    		<div class="clear"></div>
    	</div>

        <?php if($products): ?>
   <div class="section group">
		<?php foreach($products as $product): ?>
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="product/<?=$product->alias;?>"><img src="images/<?=$product->img;?>" alt=""></a>					
					<div class="price" style="border:none">
							<h3><p><?=$product->title;?></p><span><?=$curr['symbol_left'];?><?=$product->price * $curr['value'];?><?=$curr['symbol_right'];?></span></h3><br>	
					    <div class="add-cart" style="float:none">								
							<h4><a class="button" href="product/<?=$product->alias;?>">Sotib olish</a></h4>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<?php endforeach; ?>
			</div>
			<?php if($pagination->countPages > 1): ?>
				<?=$pagination; ?>
			<?php endif; ?>
            <?php else: ?>
                <h3 class="text">Bu kategoriyada mahsulot mavjud emas...</h3><br>
		<?php endif; ?>
        </div>
		<?php $cats = \myshop\App::$app->getProperty('cats'); ?>
        	<div class="rightsidebar span_3_of_1">
				<?php if($cats): ?>	
					<h2>Kategoriyalar</h2>
					<?php foreach($cats as $category): ?>
					<ul class="side-w3ls">
					<li><a href="category/<?=$category['alias'];?>"><?=$category['title'];?></a></li>
    				</ul>
					<?php endforeach; ?>
					<?php endif; ?>
    				<div class="subscribe">
    					<h2>Onlayn xizmatimizga obuna bo'ling!</h2>
    						<p>Email hisobingizni kiriting</p>
						    <div class="signup">
							    <form>
							    	<input type="text" value="E-mail manzil" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'E-mail manzil';"><input type="submit" value="Yuborish">
							    </form>
						    </div>
      				</div>
      				 <div class="community-poll">
      				 	<h2>So'rovnoma</h2>
      				 	<p>Mahsulotlarni onlayn xarid qilishingizning asosiy sababi nima?</p>
      				 	<div class="poll">
      				 		<form>
      				 			<ul>
									<li>
									<input type="radio" name="vote" class="radio" value="1">
									<span class="label"><label>Yetkazib berish xizmati qulay </label></span>
									</li>
									<li>
									<input type="radio" name="vote" class="radio" value="2">
									<span class="label"><label for="vote_2">Narxlar arzon</label></span>
									</li>
									<li>
									<input type="radio" name="vote" class="radio" value="3">
									<span class="label"><label for="vote_3">Tanlash imkoniyati ko'p</label></span>
									</li>
									<li>
									<input type="radio" name="vote" class="radio" value="5">
									<span class="label"><label for="vote_5">To'lov xizmati havfsiz </label></span>
									</li>
									<li>
									<input type="radio" name="vote" class="radio" value="6">
									<span class="label"><label for="vote_6">Vaqtdan yutish imkoniyati </label></span>
									</li>
									<li>
									<input type="radio" name="vote" class="radio" value="7">
									<span class="label"><label for="vote_7">Boshqa sabablar</label></span>
									</li>
									</ul>
      				 		</form>
      				 	</div>
      				 </div>
 				</div>
 		</div>
 	</div>
    </div>