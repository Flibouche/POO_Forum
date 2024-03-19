<?php

class Post {

    private int $idPost;

    private string $comment;
    private DateTime $publicationDate;

    private static int $nbPost = 0;

    public function __construct(string $comment, string $publicationDate) {
        self::$nbPost++;
        $this->idPost = self::$nbPost;
        $this->comment = $comment;
        $this->publicationDate = new DateTime($publicationDate);
    }

    //===================== ID Post =====================// 
    
    public function getIdPost() : int
    {
        return $this->idPost;
    }

    public function setIdPost(int $idPost)
    {
        $this->idPost = $idPost;

        return $this;
    }

    //===================== Comment =====================// 
    
    public function getComment() : string
    {
        return $this->comment;
    }

    public function setComment(string $comment)
    {
        $this->comment = $comment;
        
        return $this;
    }

    //===================== Publication Date =====================// 

    public function getPublicationDate() : DateTime
    {
        return $this->publicationDate;
    }

    public function setPublicationDate(string $publicationDate)
    {
        $this->publicationDate = $publicationDate;

        return $this;
    }

    //===================== Get Infos =====================// 
    
    public function getInfos()
    {

    }

    //===================== toString =====================// 

    public function __toString()
    {

    }
}

?>