<section class="content-header">
    <h1 style="margin: 20px;">
        Yangi mahsulot
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=ADMIN;?>"><i class="fa fa-home"></i> Bosh menyu</a></li>
        <li><a href="<?=ADMIN;?>/product"><i class="fa fa-cubes text-success"></i> Mahsulotlar</a></li>
        <li><i class="fa fa-cube text-success"></i> Yangi mahsulot</li>
    </ol>
</section>
            <section class="content">
                <div class="xs tabls">
					<div class="panel panel-warning">
						<div class="panel-body no-padding">
                            <form action="<?=ADMIN;?>/product/add" method="post" data-toggle="validator" id="add">
                                <div class="form-group has-feedback">
                                    <label for="title">Mahsulot nomi</label>
                                    <input type="text" name="title" class="form-control" placeholder="Mahsulot nomi" value="<?php isset($_SESSION['form_data']['title']) ? h($_SESSION['form_data']['title']) : null;?>" id="title" required>
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>

                                <div class="form-group">
                                    <label for="category_id">Tegishli kategoriya</label>
                                         <?php new \app\widgets\menu\Menu([
                                            'tpl' => WWW . '/menu/select.php',
                                            'container' => 'select',
                                            'cache' => 0,
                                            'cacheKey' => 'admin_select',
                                            'class' => 'form-control',
                                            'attrs' => [
                                            'name' => 'category_id',
                                            'id' => 'category_id',
                                        ],
                                            // 'prepend' => '<option>Yangi Kategoriya</option>',
                                        ]) ?>
                                 </div>

                                <div class="form-group">
                                    <label for="keywords">Kalit so'z</label>
                                    <input type="text" name="keywords" class="form-control" id="keywords" placeholder="Kalit so'z" value="<?php isset($_SESSION['form_data']['keywords']) ? h($_SESSION['form_data']['keywords']) : null;?>">
                                </div>

                                <div class="form-group">
                                    <label for="description">Tavsifi</label>
                                    <input type="text" name="description" class="form-control" id="description"  placeholder="Tavsifi" value="<?php isset($_SESSION['form_data']['description']) ? h($_SESSION['form_data']['description']) : null;?>">
                                </div>

                                <div class="form-group has-feedback">
                                    <label for="price">Narx</label>
                                    <input type="text" name="price" class="form-control" id="price" placeholder="Narx" pattern="^[0-9.]{1,}$" value="<?php isset($_SESSION['form_data']['price']) ? h($_SESSION['form_data']['price']) : null;?>" required data-error="Faqat raqamlar va nuqtadan foydalishga ruxsat etiladi">
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group has-feedback">
                                    <label for="content">Mazmuni</label>
                                    <textarea name="content" id="editor1" cols="80" rows="10"><?php isset($_SESSION['form_data']['content']) ? $_SESSION['form_data']['content'] : null;?></textarea>
                                </div>

                                <div class="form-group">
                                    <label>
                                        <input type="checkbox" name="status" checked> Status
                                    </label>
                                </div>

                                <div class="form-group">
                                    <label>
                                        <input type="checkbox" name="hit" checked> Hit
                                    </label>
                                </div>

                                <div class="form-group">
                                    <label for="related">Aloqador mahsulotlarni belgilash</label>
                                    <select name="related[]" class="form-control select2" id="related" multiple></select>
                                </div>
                                
                                <div class="form-group">
                                    <?php new \app\widgets\filter\Filter(null, WWW . '/filter/admin_filter_tpl.php');?>
                                </div>

                            <div class="form-group">
                                <div class="col-md-4">
                                     <div class="box box-danger box-solid file-upload">
                                        <div class="box-header">
                                            <h3 class="box-title"> Asosiy Rasm</h3>
                                        </div>
                                    <div class="box-body"><br>
                                        <div id="single" class="btn btn-success" data-url="product/add-image" data-name="single">Rasmni tanlang</div>
                                            <p><small>Tavsiya etiladigan o'lcham: <b>300х300</b>    </small></p>
                                        <div class="single"></div>
                                    </div>
                                        <div class="overlay">
                                            <i class="fa fa-refresh fa-spin"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="box box-primary box-solid file-upload">
                                        <div class="box-header">
                                            <h3 class="box-title"> Galereya</h3>
                                        </div>
                                    <div class="box-body"><br>
                                        <div id="multi" class="btn btn-success" data-url="product/add-image" data-name="multi">Rasmni tanlang</div>
                                            <p><small>Tavsiya etiladigan o'lcham: <b>700х1000</b>    </small></p>
                                        <div class="multi"></div>
                                    </div>
                                        <div class="overlay">
                                            <i class="fa fa-refresh fa-spin"></i> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                       

                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">Saqlash</button>
                                </div>
                            </form>
                             <?php if (isset($_SESSION['form_data'])) unset($_SESSION['form_data']); ?>
						</div>
					</div>
				</div>
        </section>	      











































