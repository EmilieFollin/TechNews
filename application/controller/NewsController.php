<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 13/02/2018
 * Time: 10:51
 */

namespace application\controller;



use Core\controller\AppController;

class NewsController extends AppController
{
    public function indexAction () {

        $this->render('news/index', []);


       # $this->render('news/index', ['titre' =>'WebForce3 Rouen !']);
       # include_once PATH_VIEWS . '/news/index.php';
    }

    public function categorieAction () {
        $this->render('news/categorie');
    }

    public function articleAction () {
        $this->render('news/article');
    }

}