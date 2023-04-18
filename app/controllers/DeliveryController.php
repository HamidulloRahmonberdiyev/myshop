<?php

namespace app\controllers;

class DeliveryController extends AppController {
    
    public function indexAction() {
        $delivery = \R::find('delivery', "status = '1' LIMIT 6");
        $this->setMeta('Buyurtmalar haqida');
        $this->set(compact('delivery'));
    }
}