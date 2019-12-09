 <?php
 
require "dbConnect.php";
require "class/articlesClass.php";

class manageArticles extends DbConnect{
public function getAllArticles(){
    $query = "SELECT * FROM articles";
    $result = $this->Connect()->prepare($query);
    $result->execute();
    $tab = [];
    while($show = $result->fetch()){
        $article = new Article($show);
        $tab[] = $article;
    }
    return $tab;
}

public function sendAllArticle($data){
    $article = new Article($data);
    $query = "INSERT INTO articles(title, content) VALUES(:title, :content)";
    $result = $this->Connect()->prepare($query);
    $result->execute(array("title" => $article->getTitle(), "content" => $article->getContent()));
}

}

?> 