<?php

class Member
{

    private int $idMember;

    private string $pseudo;
    private string $password;
    private string $email;
    private DateTime $registrationDate;

    private array $posts;
    private array $topics;

    private static int $nbMember = 0;

    public function __construct(string $pseudo, string $password, string $email)
    {
        self::$nbMember++;
        $this->idMember = self::$nbMember;
        $this->pseudo = $pseudo;
        $this->password = $password;
        $this->email = $email;
        $this->posts = [];
        $this->topics = [];
    }

    //===================== ID Member =====================// 

    public function getIdMember(): int
    {
        return $this->idMember;
    }

    public function setIdMember(int $idMember)
    {
        $this->idMember = $idMember;

        return $this;
    }

    //===================== Pseudo =====================// 

    public function getPseudo(): string
    {
        return $this->pseudo;
    }

    public function setPseudo(string $pseudo)
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    //===================== Password =====================// 

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password)
    {
        $this->password = $password;

        return $this;
    }

    //===================== Email =====================// 

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email)
    {
        $this->email = $email;

        return $this;
    }

    //===================== Registration Date =====================// 

    public function getRegistrationDate(): DateTime
    {
        return $this->registrationDate;
    }

    public function setRegistrationDate(string $registrationDate)
    {
        $this->registrationDate = $registrationDate;

        return $this;
    }

    //===================== Posts =====================//

    public function getPosts(): array
    {
        return $this->posts;
    }

    public function setPosts(Post $posts)
    {
        $this->posts = $posts;

        return $this;
    }

    public function addPost(Post $post)
    {
        $this->posts[] = $post;
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
        $result = "<h2>Sujets de $this</h2>";

        foreach($this->topics as $topic)
        {
            $result .= $topic;
        }

        return $result;
    }

    //===================== toString =====================// 

    public function __toString()
    {
        return $this->pseudo;
    }
}
