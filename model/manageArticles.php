 <?php
 


class ManageArticles extends DbConnect{
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
    $article -> setAutor($_SESSION['login']);
    $query = "INSERT INTO articles(title, content, autor) VALUES(:title, :content, :autor)";
    $result = $this->Connect()->prepare($query);
    $result->execute(array("title" => $article->getTitle(), "content" => $article->getContent(), "autor" => $article->getAutor()));
}

}

?> 