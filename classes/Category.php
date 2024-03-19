<?php

class Category {

    private int $idCategory;

    private string $type;

    private static int $nbCategory = 0;

    public function __construct(string $type) {
        self::$nbCategory++;
        $this->idCategory = self::$nbCategory;
        $this->type = $type;
    }

    //===================== ID Category =====================// 

    public function getIdCategory() : int
    {
        return $this->idCategory;
    }

    public function setIdCategory(int $idCategory)
    {
        $this->idCategory = $idCategory;

        return $this;
    }

    //===================== Type =====================// 

    public function getType() : string
    {
        return $this->type;
    }

    public function setType(string $type)
    {
        $this->type = $type;

        return $this;
    }
    
    //===================== Get Infos =====================// 
    
    public function getInfos()
    {
        return "<h2>Sujets de : $this</h2>";
    }

    //===================== toString =====================// 

    public function __toString()
    {
        return $this->type;
    }
}
?>