<section class="content-header">
    <h1 style="margin: 20px;">
        Yangiliklar
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=ADMIN;?>"><i class="fa fa-home"></i> Bosh menyu</a></li>
        <li><i class="fa fa-text"></i> Yangiliklar</li>
    </ol>
</section>
                <div class="xs tabls">
					<div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
							<div class="panel-body no-padding">
								<table class="table table-striped">
									<thead>
										<tr class="warning">
											<th>ID</th>
											<th>Nomi</th>
											<th>Rasm</th>
											<th>Kuzatish</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($news_all as $news): ?>
										<tr>
											<td><?=$news['id'];?></td>
											<td><?=$news['title'];?></td>
											<td><img src="/images/<?=$news['img'];?>" style="width: 200px"></td>
											<td>
												<a href="<?=ADMIN;?>/news/edit?id=<?=$news['id'];?> "><i class="fa fa-pencil"></i></a>
												<a href="<?=ADMIN;?>/news/delete?id=<?=$news['id'];?>" style="margin-left:10px"><i class="fa fa-close text-danger"></i></a>
											</td>
										</tr>
										<?php endforeach; ?>
									</tbody>
								</table>
							</div>
							<div class="text-center">
								<?php if($pagination->countPages > 1): ?>
									<?=$pagination;?>
								<?php endif; ?>
							</div>
						</div>
						</div>
					</div>	      











































