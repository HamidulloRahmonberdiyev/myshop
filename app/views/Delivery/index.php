<div class="main">
    <div class="content">
		<div class="content_top">
    		<div class="back-links">
				<li><a href="<?= PATH;?>">Bosh menyu</a></li>
				<li>Yetkazib berish xizmati</li>
			</div>
    		<div class="clear"></div>
    	</div>
		<?php if ($delivery): ?>
    		<div class="section group">
				<?php foreach ($delivery as $item): ?>
				<div class="grid_1_of_3 images_1_of_3">
					<img src="images/<?= $item->img;?>" alt="" /><br>
					<h3><?= $item->title;?></h3>
					<p><?= $item->description;?></p>
					<hr>
				</div>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>
	</div> 
</div>