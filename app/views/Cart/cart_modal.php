<?php if(!empty($_SESSION['cart'])): ?>
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
                    <td><a href="product/<?=$item['alias'];?>"><img src="images/<?=$item['img'];?>" alt=""></a></td>
                    <td><a href="product/<?=$item['alias'];?>"><?=$item['title'];?></a></td>
                    <td><?=$item['qty'];?></td>
                    <td><?=$_SESSION['cart.currency']['symbol_left'];?><?=$item['price'];?><?=$_SESSION['cart.currency']['symbol_right'];?></td>
                    <td><span data-id="<?=$id;?>" class="glyphicon  text-danger del-item" aria-hidden="true"><i class="fa fa-times" style="color: red"></i></span></td>
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
<?php else: ?>
    <h3>Savat bo'sh</h3>
<?php endif; ?>