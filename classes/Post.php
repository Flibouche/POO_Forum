<?php

class Post
{

    private int $idPost;

    private Member $member;
    private Topic $topic;

    private string $comment;
    private DateTime $publicationDate;

    private static int $nbPost = 0;

    public function __construct(Member $member, Topic $topic, string $comment, string $publicationDate)
    {
        self::$nbPost++;
        $this->idPost = self::$nbPost;
        $this->member = $member;
        $this->topic = $topic;
        $this->comment = $comment;
        $this->publicationDate = new DateTime($publicationDate);
        $this->member->addPost($this);
        $this->topic->addPost($this);
    }

    //===================== ID Post =====================// 

    public function getIdPost(): int
    {
        return $this->idPost;
    }

    public function setIdPost(int $idPost)
    {
        $this->idPost = $idPost;

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

    //===================== Topic =====================// 

    public function getTopic(): Topic
    {
        return $this->topic;
    }

    public function setTopic(Topic $topic)
    {
        $this->topic = $topic;

        return $this;
    }

    //===================== Comment =====================// 

    public function getComment(): string
    {
        return $this->comment;
    }

    public function setComment(string $comment)
    {
        $this->comment = $comment;

        return $this;
    }

    //===================== Publication Date =====================// 

    public function getPublicationDate(): string
    {
        return $this->publicationDate->format("d-m-Y H:i");
    }

    public function setPublicationDate(string $publicationDate)
    {
        $this->publicationDate = $publicationDate;

        return $this;
    }

    //===================== toString =====================// 

    public function __toString()
    {
        return $this->comment;
    }
}
