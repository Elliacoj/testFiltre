<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController {

    /**
     * Redirects into article list page
     * @return Response
     */
    #[Route("/", name: "article_list")]
    public function list():Response {
        $articles = [
            ["id" => 1, "title" => "Titre 1", "content" => "Je suis un contenu :-)"],
            ["id" => 2, "title" => "Titre 2", "content" => "Je suis un deuxième contenu ;-)"],
            ["id" => 3, "title" => "Titre 3", "content" => "Je suis un troisième contenu :-|"],
            ["id" => 4, "title" => "Titre 4", "content" => "Je suis un quatrième contenu :-) :-|"],
        ];

        return $this->render('article/list.html.twig', ["listArticle" => $articles]);
    }
}