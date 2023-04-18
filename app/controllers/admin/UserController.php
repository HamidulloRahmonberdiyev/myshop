<?php

namespace app\controllers\admin;

use app\models\User;
use myshop\libs\Pagination;

class UserController extends AppController {

    public function indexAction() {
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $perpage = 10;
        $count = \R::count('user');
        $pagination = new Pagination($page, $perpage, $count);
        $start = $pagination->getStart();
        $users = \R::findAll('user', "LIMIT $start, $perpage");
        $this->setMeta('Foydalanuvchilar ro\'yhati');
        $this->set(compact('users', 'pagination', 'count'));
    }

    public function addAction() {
        $this->setMeta('Yangi foydalanuvchi');
    }

    public function deleteAction() {
        $user_id = $this->getRequestID();
        $user = \R::load('user', $user_id);
        \R::trash($user);
        $_SESSION['success'] = 'Foydalanuvchi o\'chirildi';
        redirect();
    }

    public function editAction() {
        if (!empty($_POST)) {
            $id = $this->getRequestID(false);
            $user = new \app\models\admin\User;
            $data = $_POST;
            $user->load($data);
            if (!$user->attributes['password']) {
                unset($user->attributes['password']);
            }else{
                $user->attributes['password'] = password_hash($user->attributes['password'], PASSWORD_DEFAULT);
            }
            if (!$user->validate($data) || !$user->checkUnique()) {
                $user->getErrors();
                redirect();
            }
            if ($user->update('user', $id)) {
                $_SESSION['success'] = 'O\'zagarishlar saqlandi';
            }
            redirect();
        }

        $user_id = $this->getRequestID();
        $user = \R::load('user', $user_id);

        $orders = \R::getAll("SELECT `order`.`id`, `order`.`user_id`, `order`.`status`, `order`.`date`, `order`.`update_at`, `order`.`currency`, ROUND(SUM(`order_product`.`price`), 2) AS `sum` FROM `order` JOIN `order_product` ON `order`.`id` = `order_product`.`order_id` WHERE user_id = {$user_id} GROUP BY `order`.`id` ORDER BY `order`.`status`, `order`.`id`");
        
        $this->setMeta('Tahrirlash');
        $this->set(compact('user', 'orders'));
    }

    public function loginAdminAction() {
        if (!empty($_POST)) {
            $user = new User();
            if ($user->login(true)) {
                $_SESSION['success'] = 'Siz tizimga muvaffaqiyatli kirdingiz';
            }
            if (User::isAdmin()) {
                redirect(ADMIN);
            }else{
                redirect();
            }
        }
        $this->layout = 'login';
    }

}