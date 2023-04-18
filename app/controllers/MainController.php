<?php

namespace app\controllers;

use myshop\Cache;

class MainController extends AppController {

    public function indexAction() {
        $hits = \R::find('product', "status = '1' LIMIT 8");
        $this->setMeta('Bosh sahifa', 'Tavsifi...', 'Kalit so\'zlar...');
        $this->set(compact('hits'));
      
    } 

}