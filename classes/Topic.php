<?php

class Topic {

    private int $idTopic;

    private string $title;
    private DateTime $creationDate;
    private bool $isLocked = false;

    private static int $nbTopic = 0;

    public function __construct(string $title) {
        self::$nbTopic++;
        $this->idTopic = self::$nbTopic;
        $this->title = $title;
    }

    //===================== ID Topic =====================// 
    
    public function getIdTopic() : int
    {
        return $this->idTopic;
    }
    
    public function setIdTopic(int $idTopic)
    {
        $this->idTopic = $idTopic;
        
        return $this;
    }

    //===================== Title =====================// 
    
    public function getTitle() : string
    {
        return $this->title;
    }
    
    public function setTitle(string $title)
    {
        $this->title = $title;
        
        return $this;
    }

    //===================== Creation Date =====================// 
    
    public function getCreationDate() : string
    {
        return $this->creationDate;
    }
    
    public function setCreationDate(string $creationDate)
    {
        $this->creationDate = $creationDate;
        
        return $this;
    }
    
    //===================== Locked =====================// 

    public function getIsLocked() : bool
    {
        return $this->isLocked;
    }

    public function setIsLocked(bool $isLocked)
    {
        $this->isLocked = $isLocked;

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