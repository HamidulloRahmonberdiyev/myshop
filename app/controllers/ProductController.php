<?php 

namespace app\controllers;

use app\models\Breadcrumbs;
use app\models\Product;

class ProductController extends AppController {

    public function viewAction() {
        $alias = $this->route['alias'];
        $product = \R::findOne('product', 'alias = ?', [$alias]);
        if (!$product) {
            throw new \Exception("Sahifa topilmadi!", 404);
        }

        // breadcrumbs
        $breadcrumbs = Breadcrumbs::getBreadcrumbs($product->category_id, $product->title);

        // bog'liq mahsulotlar
        $related = \R::getAll("SELECT * FROM related_product JOIN product ON product.id = related_product.related_id WHERE related_product.product_id = ?", [$product->id]);
        
        // cookie faylida taqiqlangan mahsulotni yozib olish
        $p_model = new Product();
        $p_model->setRecentlyViewed($product->id);

        // mahsulotlar kuzatuvi
        $r_viewed = $p_model->getRecentlyViewed();
        $recentlyViewed = null;
        if ($r_viewed) {
            $recentlyViewed = \R::find('product', 'id IN (' . \R::genSlots($r_viewed) . ') LIMIT 4', $r_viewed);         
        }

        // galereya
        $gallery = \R::findAll('gallery', 'product_id = ?', [$product->id]);

        // modifikatsiya
        $mods = \R::findAll('modification', 'product_id = ?', [$product->id]);
        

        $this->setMeta($product->title, $product->description, $product->keywords);
        $this->set(compact('product', 'related', 'gallery', 'recentlyViewed', 'breadcrumbs', 'mods'));
    }

}