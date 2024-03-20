<?php

class Category
{

    private int $idCategory;

    private string $type;

    private array $topics;

    private static int $nbCategory = 0;

    public function __construct(string $type)
    {
        self::$nbCategory++;
        $this->idCategory = self::$nbCategory;
        $this->type = $type;
        $this->topics = [];
    }

    //===================== ID Category =====================// 

    public function getIdCategory(): int
    {
        return $this->idCategory;
    }

    public function setIdCategory(int $idCategory)
    {
        $this->idCategory = $idCategory;

        return $this;
    }

    //===================== Type =====================// 

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type)
    {
        $this->type = $type;

        return $this;
    }

    //===================== Topics =====================// 

    public function getTopics(): array
    {
        return $this->topics;
    }

    public function setTopics(Topic $topics)
    {
        $this->topics = $topics;

        return $this;
    }

    public function addTopic(Topic $topic)
    {
        $this->topics[] = $topic;
    }

    //===================== Get Infos =====================// 

    public function getInfos()
    {
        $result = "<h2>Sujets de : $this (".count($this->topics).") </h2>";

        if(count($this->topics) == 0)
        {
            $result .= "<p style='color:red'>Pas de sujets dans cette catégorie !</p>";
        } else {
            foreach($this->topics as $topic)
            {
                $result .= $topic;
            }
        }

        return $result;
    }

    //===================== toString =====================// 

    public function __toString()
    {
        return $this->type;
    }
}
