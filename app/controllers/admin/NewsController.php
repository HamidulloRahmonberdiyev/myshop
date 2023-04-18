<?php

namespace app\controllers\admin;

use app\models\AppModel;
use app\models\admin\News;
use myshop\libs\Pagination;
use myshop\App;

class NewsController extends AppController {

    public function indexAction() {
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $perpage = 5;
        $count = \R::count('news');
        $pagination = new Pagination($page, $perpage, $count);
        $start = $pagination->getStart();
        $news_all = \R::getAll("SELECT news.*  FROM news ORDER BY news.title LIMIT $start, $perpage");
        $this->setMeta('Habarlar ro\'yhati');
        $this->set(compact('news_all', 'pagination', 'count'));
    }

    public function deleteAction() {
        $id = $this->getRequestID();
        $news = \R::load('news', $id);
        \R::trash($news);
        $src = $news['img'];
        $file = WWW . "/images/$src";
        if(file_exists($file)){
           unlink($file);
        }
        $_SESSION['success'] = 'Mahsulot o\'chirildi!';
        redirect();  
    }

    public function addImageAction() {
        if (isset($_GET['upload'])) {
            if ($_POST['name'] == 'photo') {
                $wmax = App::$app->getProperty('img_width');
                $hmax = App::$app->getProperty('img_height');
            }
            $name = $_POST['name'];
            $news = new News();
            $news->uploadImg($name, $wmax, $hmax);
        }
    }

    public function editAction() {
        if (!empty($_POST)) {
            $id = $this->getRequestID(false);
            $news = new News();
            $data = $_POST;
            $news->load($data);
            $news->getImg();
            if (!$news->validate($data)) {
                $news->getErrors();
                redirect();
            }

            if ($news->update('news', $id)) {
                $alias = AppModel::createAlias('news', 'alias', $data['title'], $id);
                $news = \R::load('news', $id);
                $news->alias = $alias;
                \R::store($news);
                $_SESSION['success'] = "O'zgarishlar saqlandi";
                redirect();
            }
        }
        $id = $this->getRequestID();
        $news = \R::load('news', $id);
        $this->setMeta("Tahrirlash ($news->title)");
        $this->set(compact('news'));
    }

    public function addAction() {
        if (!empty($_POST)) {
            $news = new News();
            $data = $_POST;
            $news->load($data);
            $news->getImg();
            if (!$news->validate($data)) {
                $news->getErrors();
                redirect();
            }

            if ($id = $news->save('news')) {
                $alias = AppModel::createAlias('news', 'alias', $data['title'], $id);
                $news = \R::load('news', $id);
                $news->alias = $alias;
                \R::store($news);
                $_SESSION['success'] = "Habar qo\'shildi";
            }
            redirect();
        }
        $this->setMeta('Yangi habar');
    }
}