<div class="main">
    <div class="content">
    	<div class="content_top">
    		<div class="back-links">
    		<!-- <p><a href="index.html">Home</a> >>>> <a href="#">Electronics</a></p> -->
			<?=$breadcrumbs;?>
		</div>
    		<div class="clear"></div>
    	</div>
    	<div class="section group">
				<div class="cont-desc span_1_of_2">
				  <div class="product-details">		
					<div class="grid images_3_of_2">
						<div id="container">
						<?php if($gallery): ?>
						   <div id="products_example">
							   <div id="products">
							   <?php foreach($gallery as $item): ?>
								<div class="slides_container">
									<a target="_blank"><img src="images/<?=$item->img;?>" alt=" " /></a>
								</div>
								<?php endforeach; ?>
								<?php foreach($gallery as $item): ?>
								<ul class="pagination">
									<li><a><img src="images/<?=$item->img;?>" alt=" " /></a></li>
								</ul>
								<?php endforeach; ?>
							</div>
						</div>
						<?php else: ?>
							<img src="images/<?=$product->img;?>" alt="">
						<?php endif; ?>
					</div>
				</div>
				<?php $curr = \myshop\App::$app->getProperty('currency'); ?>
				<?php $cats = \myshop\App::$app->getProperty('cats'); ?>
				<div class="desc span_3_of_2">
					<h2><?=$product->title;?></h2>
					<p><?=$product->description;?></p>					
					<div class="price">
						<p>Narx: <span id="base-price" data-base="<?=$product->price * $curr['value'];?>"><?=$curr['symbol_left'];?><?=$product->price * $curr['value'];?><?=$curr['symbol_right'];?></span></p>
					</div>
					<?php if($mods): ?>
					<div class="available">
						<p>Mavjud variantlar :</p>
					<ul>
						<!-- <li>Rang:
							<select class="choose-color">
							<option>Rangni tanlang</option>
							<option></option>
						</select></li> -->
						<!-- <li>Hajmi:<select class="choose">
							<option>Katta</option>
							<option>O'rta</option>
							<option>Kichik</option>
						</select></li> -->
						<!-- <li>Dona:<select class="choose">
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
						</select></li> -->
					</ul>
					</div>
					<?php endif; ?>
					<div class="quantity"> 
						Soni: <input type="number" size="4" value="1" name="quantity" min="1" step="1">
					</div>
				<div class="share-desc">
					<div class="share">
						<p>Ulashish:</p>
						<ul>
					    	<li><a href="#"><img src="images/facebook.png" alt="" /></a></li>
					    	<li><a href="#"><img src="images/twitter.png" alt="" /></a></li>					    
			    		</ul>
					</div>
					<div class="button">
						<span>
							<a class="add-to-cart-link" id="productAdd" data-id="<?=$product->id;?>" href="cart/add?id=<?=$product->id;?>">Sotib Olish</a>
						</span>
					</div>					
					<div class="clear"></div>
				</div>
				 <div class="wish-list">
				 	<ul>
				 		<li><span>Kategoriya:</span>
				 		<span><a href="category/<?=$cats[$product->category_id]['alias'];?>"><?=$cats[$product->category_id]['title'];?></a></span></li>
				 	</ul>
				 </div>
			</div>
			<div class="clear"></div>
		  </div>
		<div class="product_desc">	
			<div id="horizontalTab">
				<ul class="resp-tabs-list">
					<li>Mahsulot haqida</li>
					<li>Mahsulot tavsifi</li>
					<li>Sharhlar</li>
					<div class="clear"></div>
				</ul>
				<div class="resp-tabs-container">
					<div class="product-desc">
						<p>Lorem Ipsum is simply dummy text of the <span>printing and typesetting industry</span>. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
					</div>

				 <div class="product-tags">
					<p><?=$product->content;?></p>
					<h4>Izoh qoldrish:</h4>
					<div class="input-box">
						<input type="text" value="">
					</div>
					<div class="button"><span><input class="btn btn-danger" type="submit" value="Yuborish"></span></div>
			    </div>	

				<div class="review">
					<h4><?=$product->title;?> <a href="#"></a></h4>
					 <ul>
					 	<li>Narx :<a href="#"><img src="images/price-rating.png" alt="" /></a></li>
					 	<li>Qiymat :<a href="#"><img src="images/value-rating.png" alt="" /></a></li>
					 	<li>Sifat :<a href="#"><img src="images/quality-rating.png" alt="" /></a></li>
					 </ul>
					 <h4><?=$product->description;?></h4><br>
				  <div class="your-review">
				  	 <h3>Mahsulot haqida fikringizni bizga yuboring?</h3>
				  	  <form>
					    	<div>
						    	<span><label>F.I.Sh<span class="red"></span></label></span>
						    	<span><input type="text" value=""></span>
						    </div>
						    <div><span><label>Email<span class="red"></span></label></span>
						    	<span><input type="email" value=""></span>
						    </div>						
						    <div>
						    	<span><label>Habar<span class="red"></span></label></span>
						    	<span><textarea> </textarea></span>
						    </div>
						   <div>
						   		<span><input class="btn btn-danger" type="submit" value="Yuborish"></span>
						  </div>
					    </form>
				  	 </div>				
				</div>
			</div>
		 </div>
	 </div>
	  
   <div class="content_bottom">
    		<div class="heading">
    		<h3>Aloqador Mahsulotlar</h3>
    		</div>
    		<div class="see">
    			<p><a href="#">Hammasini ko'rish</a></p>
    		</div>
    		<div class="clear"></div>
    	</div>
	<?php if($related): ?>
   <div class="section group">
		<?php foreach($related as $item): ?>
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="product/<?=$item['alias'];?>"><img src="images/<?=$item['img'];?>" alt=""></a>					
					<div class="price" style="border:none">
							<h3><p><?=$item['title'];?></p><span><?=$curr['symbol_left'];?><?=$item['price'] * $curr['value'];?><?=$curr['symbol_right'];?></span></h3><br>
					    <div class="add-cart" style="float:none">								
							<h4><a class="button" href="product/<?=$item['alias'];?>">Sotib olish</a></h4>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>

		<div class="content_bottom">
    		<div class="heading">
    		<h3>Yaqinda ko'rilganlar</h3>
    		</div>
    		<div class="see">
    			<p><a href="#">Hammasini ko'rish</a></p>
    		</div>
    		<div class="clear"></div>
    	</div>
	<?php if($recentlyViewed): ?>
   <div class="section group">
		<?php foreach($recentlyViewed as $item): ?>
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="product/<?=$item['alias'];?>"><img src="images/<?=$item['img'];?>" alt=""></a>					
					<div class="price" style="border:none">
							<h3><p><?=$item['title'];?></p><span><?=$curr['symbol_left'];?><?=$item['price'] * $curr['value'];?><?=$curr['symbol_right'];?></span></h3><br>
					    <div class="add-cart" style="float:none">								
							<h4><a class="button" href="product/<?=$item['alias'];?>">Sotib olish</a></h4>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<?php endforeach; ?>
			</div>
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
 </div>