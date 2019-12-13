<?php

class Comment{

    private $id;
    private $id_membre;
    private $comment;
    private $date_comment;

    public function __construct(array $data = null){
        if($data){
            $this->init($data);
        }
    }
    
    public function init(array $data){
        foreach($data as $index => $value){
            $method = "set" . ucfirst($index);
                if (method_exists($this, $method)){
                $this->$method($value);
                }
            }
        }
    	public function getId() {
            return $this->id;
        }
    
        public function setId($id) {
            $this->id = $id;
        }
    
        public function getId_membre() {
            return $this->id_membre;
        }
    
        public function setId_membre($id_membre) {
            $this->id_membre = $id_membre;
        }
    
        public function getComment() {
            return $this->comment;
        }
    
        public function setComment($comment) {
            $this->comment = $comment;
        }
    
        public function getDate_comment() {
            return $this->date_comment;
        }
    
        public function setDate_comment($date_comment) {
            $this->date_comment = $date_comment;
        }
    

}