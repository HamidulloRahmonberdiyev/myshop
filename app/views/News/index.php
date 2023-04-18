<div class="main">
    <div class="content">
	<div class="content_top">
    		<div class="back-links">
				<li><a href="<?= PATH;?>">Bosh menyu</a></li>
				<li>Yangiliklar</li>
			</div>
    		<div class="clear"></div>
    	</div>
		<?php if ($news): ?>
		<?php foreach ($news as $item): ?>
    		<div class="image group">
				<div class="grid images_3_of_1">
					<img src="images/<?= $item->img;?>" alt="" />
				</div>
				<div class="grid news_desc">
					<h3><?= $item->title;?> </h3>
					<p><?= $item->description;?></p>
			   </div>
		   </div>
		<?php endforeach; ?>
		<?php endif; ?>	
        </div> 
    </div>
 