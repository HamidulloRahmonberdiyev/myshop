<section class="content-header">
    <h1 style="margin: 20px;">
        Kategoriyalar
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=ADMIN;?>"><i class="fa fa-home"></i> Bosh menyu</a></li>
        <li><a href="<?=ADMIN;?>/category"><i class="fa fa-th-large text-success"></i> Kategoriyalar</a></li>
        <li><i class="fa fa-plus text-success"></i> Kategoriya qo'shish</li>
    </ol>
</section>
            <section class="content">
                <div class="xs tabls">
					<div class="panel panel-warning">
							<div class="panel-body no-padding">
                                <form action="<?=ADMIN;?>/category/add" method="post" data-toggle="validator">
                                <div class="form-group has-feedback">
                                    <label for="title">Kategoriya nomi</label>
                                    <input type="text" name="title" class="form-control" placeholder="Kategoriya nomi" required>
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>
                                <div class="form-group">
                                    <label for="parent_id">Tegishli kategoriya</label>
                                    <?php new \app\widgets\menu\Menu([
                                    'tpl' => WWW . '/menu/select.php',
                                    'container' => 'select',
                                    'cache' => 0,
                                    'cacheKey' => 'admin_select',
                                    'class' => 'form-control',
                                    'attrs' => [
                                        'name' => 'parent_id',
                                        'id' => 'parent_id',
                                    ],
                                    'prepend' => '<option value="0">Alohida kategoriya</option>',
                                    ]); ?>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="keywords">Kalit so'z</label>
                                    <input type="text" name="keywords" class="form-control" placeholder="Kalit so'z">
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="description">Tavsifi</label>
                                    <input type="text" name="description" class="form-control" placeholder="Tavsifi">
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-success">Saqlash</button>
                                </div>
                                </form>
							</div>
						</div>
					</div>
            </section>	      











































