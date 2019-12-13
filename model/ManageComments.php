<?php

    class ManageComments extends DbConnect
{
    public function getAllComments($idArticle)
    {
        $query = "SELECT login, comment FROM comments INNER JOIN members ON id_member = members.id  WHERE id_article = :id";
        $result = $this->Connect()->prepare($query);
        $result->execute(["id"=>$idArticle]);
        $tab = [];
        while ($show = $result->fetch()) {
            $comment = new Comment($show);
            $tab[] = $comment;
        }
        
        return $tab;
    }
}

