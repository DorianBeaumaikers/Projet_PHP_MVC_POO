<?php

namespace App\Models;

class Post extends \Core\Classes\GenericModel {
    private $id = null;
    private $title;
    private $resume;
    private $content;
    private $image;
    private $created_at;

    //GETTERS

    public function getID() {
        return $this->id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getResume() {
        return $this->resume;
    }

    public function getContent() {
        return $this->content;
    }

    public function getImage() {
        return $this->image;
    }

    public function getCreated_at() {
        return $this->created_at;
    }

    //SETTERS

    public function setID(string $data = null) {
        if(isset($data)) {
            $this->id = $data;
        }
    }

    public function setTitle(string $data = null) {
        if(isset($data)) {
            $this->title = $data;
        }
    }

    public function setResume(string $data = null) {
        if(isset($data)) {
            $this->resume = $data;
        }
    }

    public function setContent(string $data = null) {
        if(isset($data)) {
            $this->content = $data;
        }
    }

    public function setImage(string $data = null) {
        if(isset($data)) {
            $this->image = $data;
        }
    }

    public function setCreated_at(string $data = null) {
        if(isset($data)) {
            $this->created_at = $data;
        }
    }
}