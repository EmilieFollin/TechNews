<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 13/02/2018
 * Time: 10:51
 */

namespace application\controller;


use application\model\article\articleDb;
use Core\Controller\AppController;

class NewsController extends AppController
{
    public function indexAction () {


        #connection a la base de donnée
        $articleDb = new articleDb;

        #
        $article = $articleDb->fetchAll();

        #recuperation des article en spotlight

        $spotlight = $articleDb->fetchAll('SPOTLIGHTARTICLE = 1');


        $this->render('news/index', [
            'article' => $article,
            'spotlight' => $spotlight
        ]);


       # $this->render('news/index', ['titre' =>'WebForce3 Rouen !']);
       # include_once PATH_VIEWS . '/news/index.php';
    }

    public function businessAction() {
        # Connexion à la BDD
        $articleDb = new ArticleDb;
        # Récupération des Articles dela NDD
        $articles = $articleDb->fetchAll('IDCATEGORIE = 2');
        # Transmission à la vue
        $this->render('news/categorie', [
            'articles' => $articles
        ]);
    }
    public function computingAction() {
        # Connexion à la BDD
        $articleDb = new ArticleDb;
        # Récupération des Articles dela NDD
        $articles = $articleDb->fetchAll('IDCATEGORIE = 3');
        # Transmission à la vue
        $this->render('news/categorie', [
            'articles' => $articles
        ]);
    }
    public function techAction() {
        # Connexion à la BDD
        $articleDb = new ArticleDb;
        # Récupération des Articles dela NDD
        $articles = $articleDb->fetchAll('IDCATEGORIE = 4');
        # Transmission à la vue
        $this->render('news/categorie', [
            'articles' => $articles
        ]);
    }
    public function articleAction() {
        $this->render('news/article');
    }
}