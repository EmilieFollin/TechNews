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
use Core\model\dbfactory;
use Core\model\ORM;

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

    public function idiormAction() {
        #recupêration des catégories
        dbfactory::IdiormFactory();
        $categories  = ORM::for_table('categorie')->find_result_set();
        #find_array();


        $this->renderJson($categories);

        foreach ( $categories as $categorie ) :
            echo $categorie->LIBELLECATEGORIE . '<br>';
        endforeach;


        #afficher la liste des auteurs du site dans un tableau HTML
        dbfactory::IdiormFactory();
        $auteur = ORM::for_table('auteur')->find_result_set();

        $this->renderJson($auteurs);

        foreach ($auteurs as $auteur) :
            echo '<td>'. $auteur->IDAUTEUR . '</td>';
            echo '<td>'. $auteur->PRENOMAUTEUR . '</td>';
            echo '<td>'. $auteur->NOMAUTEUR . '</td>';
            echo '<td>'. $auteur->EMAILAUTEUR . '</td>';
        endforeach;
    }

    public function articleAction() {
        # http://localhost/technews/public/article/1-slug-de-mon-article.html

        # Récupération de l'IDARTICLE
        $idarticle = $_GET['idarticle'];

        # Récupération de l'Article
        $article = ORM::for_table('view_articles')->find_one($idarticle);

        # Récupération des Articles de la Catégorie (suggestions)
        $suggestion = ORM::for_table('view_articles')


        # Je récupère uniquement, les articles de la même
        # catégorie que mon article
        -> where('IDCATEGORIE', $article->IDCATEGORIE)

        # Sauf mon article en cours
        ->where_not_equal('IDARTICLE', $idarticle)

        # 3 articles maximum
        ->limit(3)

        # Par ordre décroissant
        -> order_by_desc('IDARTICLE')

        # Je récupère les résultats
        -> find_result_set();

        # Transmission à la Vue.

        $this->render('news/article', [
            'article' => $article,
            'suggestions' => $suggestions,
        ]);
    }



}