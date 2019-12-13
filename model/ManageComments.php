<?php

    class ManageComments extends DbConnect
{
    public function getAllComments()
    {
        $query = "SELECT login, comment FROM comments INNER JOIN members ON id_member = members.id";
        $result = $this->Connect()->prepare($query);
        $result->execute();
        $tab = [];
        while ($show = $result->fetch()) {
            $comment = new Comment($show);
            $tab[] = $comment;
        }
        return $tab;
    }
}