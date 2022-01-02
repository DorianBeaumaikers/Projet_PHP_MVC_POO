<?php

namespace Core\Classes;

abstract class GenericController {
    protected $repository;
    protected $class;
    protected $table;

    public function __construct(){
        $this->repository = new $this->class();
    }

    public function index() {

        $list = $this->table;
        $$list = $this->repository->findAll();
    
        require_once "../app/views/". $this->table ."/index.php";
    }

    public function show($data, string $field = "id") {
        $item = substr($this->table, 0, -1);
        $findMethod = "findBy" . ucfirst($field);
        $$item = $this->repository->$findMethod($data);
    
        require_once "../app/views/". $this->table ."/show.php";

    }
}