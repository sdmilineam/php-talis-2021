<?php

namespace App\src\controller;

use App\src\DAO\ArticleDAO;
use App\src\DAO\CommentDAO;

class FrontController
{
    private $articleDAO;

    private $commentDAO;

    public function __construct()
    {
        $this->articleDAO = new ArticleDAO();
        $this->commentDAO = new CommentDAO();
    }

    public function article()
    {
        $articleDAO = new ArticleDAO();
        $articles = $this->articleDAO->getAllArticles();

        require '../templates/home.php';
    }

    public function comment()
    {
        $commentDAO = new CommentDAO();
        $comments = $this->commentDAO->getAllComments();

        require '../templates/commentaires.php';
    }
}
