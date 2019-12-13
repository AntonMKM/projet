<?php

class CommentController {
    
        function getComments()
    {
        $gestion = new ManageComments();
        $myComments = $gestion->getAllComments();
        require 'view/fullArticle.php';
    }
    }
