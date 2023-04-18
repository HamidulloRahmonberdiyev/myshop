<?php $cats = \myshop\App::$app->getProperty('cats'); ?>
<div class="header_slide">
		<div class="header_bottom_left">
			<?php if($cats): ?>			
				<div class="categories">
				  <ul>
				  	<h3>Kategoriyalar</h3>
					  <?php foreach($cats as $category): ?>	
				    	<li><a href="category/<?=$category['alias'];?>"><?=$category['title'];?></a></li>
					   <?php endforeach; ?>
					</ul>
				</div>
			<?php endif; ?>					
	  	</div>
		
					 <div class="header_bottom_right">					 
					 	 <div class="slider">					     
							 <div id="slider">
			                    <div id="mover">
			                    	<div id="slide-1" class="slide">			                    
									 <div class="slider-img">
									     <a href="category/televizorlar"><img src="images/mebel.jpg" alt="learn more" /></a>									    
									  </div>
						             	<div class="slider-text">
		                                 <h1>Mebellar<br><span>SALE</span></h1>
		                                 <h2>Chegirma 10%</h2>
									   <div class="features_list">
									   	<h4>Arzon va Sifatli, hamyonbop narxlarda. Hoziroq buyurtma bering!</h4>							               
							            </div>
							             <a href="category/mebellar" class="button-slider">Xarid qilish</a>
					                   </div>			               
									  <div class="clear"></div>				
				                  </div>	
						             	<div class="slide">
						             		<div class="slider-text">
		                                 <h1>Maishiy texnika<br><span>SALE</span></h1>
		                                 <h2>Chegirma 20% </h2>
									   <div class="features_list">
									   	<h4>Arzon va Sifatli, hamyonbop narxlarda. Hoziroq buyurtma bering!</h4>							               
							            </div>
							             <a href="category/texnika" class="button-slider">Xarid qilish</a>
					                   </div>		
						             	 <div class="slider-img">
									     <a href="category/texnika"><img src="images/muzlatkich.png" alt="learn more" /></a>
									  </div>						             					                 
									  <div class="clear"></div>				
				                  </div>
				                  <div class="slide">						             	
					                  <div class="slider-img">
									     <a href="category/televizorlar"><img src="images/televizor.jpg" alt="learn more" /></a>
									  </div>
									  <div class="slider-text">
		                                 <h1>Televizorlar<br><span>SALE</span></h1>
		                                 <h2>Chegirma 30%</h2>
									   <div class="features_list">
									   	<h4>Arzon va Sifatli, hamyonbop narxlarda. Hoziroq buyurtma bering!</h4>							               
							            </div>
							             <a href="category/televizorlar" class="button-slider">Xarid qilish</a>
					                   </div>	
									  <div class="clear"></div>				
				                  </div>												
			                 </div>		
		                </div>
					 <div class="clear"></div>					       
		         </div>
		      </div>
		   <div class="clear"></div>
		</div>

		<?php if($hits): ?>
				<?php $curr = \myshop\App::$app->getProperty('currency'); ?>
			 <div class="main">
    <div class="content">
    	<div class="content_top">
    		<div class="heading">
    		<h3>Yangi Mahsulotlar</h3>
    		</div>
    		<div class="see">
    			<p><a href="#">Hammasini ko'rish</a></p>
    		</div>
    		<div class="clear"></div>
    	</div>
	      <div class="section group">
		  <?php foreach($hits as $hit): ?>
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="product/<?=$hit->alias;?>"><img src="images/<?=$hit->img;?>" alt="" /></a>
					 <h2><?=$hit->title;?></h2>
					<div class="price-details">
				       <div class="price-number">
							<p><span class="rupees"><?=$curr['symbol_left'];?><?=$hit->price * $curr['value'];?><?=$curr['symbol_right'];?></span></p>
					    </div>
					       	<div class="add-cart">								
								<h4><a href="product/<?=$hit->alias;?>">Sotib olish</a></h4>
							</div>
						<div class="clear"></div>
					</div>	
						</div>
						<?php endforeach; ?>	
					</div>
    			</div>
 			</div>
	<?php endif; ?>

			