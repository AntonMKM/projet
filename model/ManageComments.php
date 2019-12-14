<?php

class ManageComments extends DbConnect
{
    public function getAllComments($idArticle)
    {
        $query = "SELECT login, comment, DATE_FORMAT(date_comment, '%d/%m/%Y  %H:%i') FROM comments WHERE id_article = :id";
        $result = $this->Connect()->prepare($query);
        $result->execute(["id" => $idArticle]);
        $tab = [];
        while ($show = $result->fetch()) {
            $comment = new Comment($show);
            $tab[] = $comment;
        }

        return $tab;
    }
    public function sendAllComment(Comment $comment)
    {

        $comment->setLogin($_SESSION['login']);
        $query = "INSERT INTO comments(id_article, login, comment) VALUES(:id_article, :login, :comment)";
        $result = $this->Connect()->prepare($query);
        $result->execute(array("id_article" => $comment->getId_article(), "login" => $comment->getLogin(), "comment" => htmlspecialchars($comment->getComment())));
    }
}
