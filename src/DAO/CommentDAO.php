<?php

namespace App\src\DAO;

use App\src\models\Comment;
use PDO;

class CommentDAO extends DAO
{
    //! PARTIE GESTION D'ARTICLES DANS LA BDD
    public function buildComment($row)
    {
        return new Comment($row);
    }

    public function getAllComments()
    {
        $comments = [];

        $sql = 'SELECT * FROM commentaires ORDER BY created_at DESC';
        $req = $this->createQuery($sql);
        $result = $req->fetchAll(PDO::FETCH_ASSOC);

        foreach ($result as $row) {
            $id = $row['id'];
            $comments[$id] = $this->buildComment($row);
        }

        return $comments;
    }
}
