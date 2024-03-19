<?php

class Topic
{

    private int $idTopic;

    private string $title;
    private DateTime $creationDate;
    private bool $isLocked = false;

    private array $categories;
    private array $posts;

    private static int $nbTopic = 0;

    public function __construct(string $title)
    {
        self::$nbTopic++;
        $this->idTopic = self::$nbTopic;
        $this->title = $title;
        $this->categories = [];
        $this->posts = [];
    }

    //===================== ID Topic =====================// 

    public function getIdTopic(): int
    {
        return $this->idTopic;
    }

    public function setIdTopic(int $idTopic)
    {
        $this->idTopic = $idTopic;

        return $this;
    }

    //===================== Title =====================// 

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title)
    {
        $this->title = $title;

        return $this;
    }

    //===================== Creation Date =====================// 

    public function getCreationDate(): DateTime
    {
        return $this->creationDate;
    }

    public function setCreationDate(string $creationDate)
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    //===================== Locked =====================// 

    public function getIsLocked(): bool
    {
        return $this->isLocked;
    }

    public function setIsLocked(bool $isLocked)
    {
        $this->isLocked = $isLocked;

        return $this;
    }

    //===================== Categories =====================// 

    public function getCategories(): array
    {
        return $this->categories;
    }

    public function setCategories(array $categories)
    {
        $this->categories = $categories;

        return $this;
    }

    public function addCategory(Category $category)
    {
        $this->categories[] = $category;
    }

    //===================== Posts =====================// 

    public function getPosts(): array
    {
        return $this->posts;
    }

    public function setPosts(array $posts)
    {
        $this->posts = $posts;

        return $this;
    }

    public function addPost(Post $post)
    {
        $this->posts[] = $post;
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
