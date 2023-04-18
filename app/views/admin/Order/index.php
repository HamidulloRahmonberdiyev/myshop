<section class="content-header">
    <h1 style="margin: 20px;">
        Buyurtmalar ro'yhati
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=ADMIN;?>"><i class="fa fa-home"></i> Bosh menyu</a></li>
        <li><i class="fa fa-truck text-success"></i> Buyurtmalar ro'yhati</li>
    </ol>
</section>
                <div class="xs tabls">
					<div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
							<div class="panel-body no-padding">
								<table class="table table-striped">
									<thead>
										<tr class="warning">
											<th>ID</th>
											<th>Xaridor</th>
											<th>Telefon</th>
											<th>Status</th>
											<th>Summa</th>
											<th>Kiritilgan vaqt</th>
											<th>Yangilangan vaqt</th>
											<th>Kuzatish</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($orders as $order): ?>
											<?php $class = $order['status'] ? 'success' : ''; ?>
										<tr class="<?=$class;?>">
											<td><?=$order['id'];?></td>
											<td><?=$order['name'];?></td>
											<td><?=$order['phone'];?></td>
											<td><?=$order['status'] ? 'Yakunlandi' : 'Yangi';?></td>
											<td><?=$order['sum'];?> <?=$order['currency'];?></td>
											<td><?=$order['date'];?></td>
											<td><?=$order['update_at'];?></td>
											<td>
												<a href="<?=ADMIN;?>/order/view?id=<?=$order['id'];?>"><i class="fa fa-eye"></i></a>
												<a href="<?=ADMIN;?>/order/delete?id=<?=$order['id'];?>" style="margin-left:10px"><i class="fa fa-close text-danger"></i></a>
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











































