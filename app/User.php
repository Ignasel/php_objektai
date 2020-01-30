<?php

namespace OOP;

class User{
    private $name;
    private $email;
    private $phone;

    public function __construct($name, $email, $phone)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
    }

    public function show(){
        $data[] = $this->name;
        $data[] = $this->email;
        $data[] = $this->phone;

        return $data;
    }

    public function addComment($comment){
        $this->comment = $comment;
    }

    public function showComment(){
        $comments[] = $this->comment;
        return $comments;
    }

}