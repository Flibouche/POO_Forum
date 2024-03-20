<?php

class Topic
{

    private int $idTopic;

    private Member $member;
    private Category $category;

    private string $title;
    private DateTime $creationDate;
    private bool $isLocked = false;

    private array $posts;

    private static int $nbTopic = 0;

    public function __construct(Member $member, Category $category, string $title, string $creationDate)
    {
        self::$nbTopic++;
        $this->idTopic = self::$nbTopic;
        $this->member = $member;
        $this->category = $category;
        $this->title = $title;
        $this->creationDate = new DateTime($creationDate);
        $this->posts = [];
        $this->member->addTopic($this);
        $this->category->addTopic($this);
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
    
        //===================== Member =====================// 
    
        public function getMember(): Member
        {
            return $this->member;
        }
    
        public function setMember(Member $member)
        {
            $this->member = $member;
    
            return $this;
        }

    //===================== Categories =====================// 

    public function getCategory()
    {
        return $this->category;
    }

    public function setCategory($category)
    {
        $this->category = $category;

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

    public function getCreationDate(): string
    {
        return $this->creationDate->format("d-m-Y H:i");
    }

    public function setCreationDate(string $creationDate)
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    //===================== isLocked =====================// 

    public function getIsLocked(): bool
    {
        return $this->isLocked;
    }

    public function setIsLocked(bool $isLocked)
    {
        $this->isLocked = $isLocked;

        return $this;
    }

    //===================== Locked =====================// 

    public function locked()
    {
        if($this->isLocked)
        {
            $this->isLocked = false;
            return "Unlocked<br>";
        } else
        {
            $this->isLocked = true;
            return "Locked<br>";
        }
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
        $result = "<h2>Messages du topic : $this (".count($this->posts).") </h2>

        par $this->member le ".$this->getCreationDate()." <br>";
        
        foreach($this->topics as $topic) {
            $topicBooked = ($topic->getIsBooked()) ? "text-bg-danger" : "text-bg-success";
            $result .= "<span class='badge $topicBooked'>".$topic->locked()."</span>";
        }

        foreach($this->posts as $post)
        {
            $result .= $post."<br>";
            // echo "par $this->member le ".$this->getPost()->getPublicationDate();
        }
        
        return $result;
    }

    //===================== toString =====================// 

    public function __toString()
    {
        return $this->title;
    }
}
