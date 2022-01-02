<?php

namespace App\Controllers;

class PostsController extends \Core\Classes\GenericController {

    public function __construct(){
        $this->class = "\App\Models\PostsRepository";
        $this->table = "posts";
        parent::__construct();
    }

    public function menu(){
        $posts = $this->repository->findAll();
    
        require_once "../app/views/posts/menu.php";

    }
}