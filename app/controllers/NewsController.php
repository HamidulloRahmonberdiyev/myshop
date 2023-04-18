<?php

namespace app\controllers;

class NewsController extends AppController {

    public function indexAction() {
        $news = \R::find('news', "status = '1' LIMIT 6");
        $this->setMeta('Yangiliklar haqida');
        $this->set(compact('news'));
    }

}