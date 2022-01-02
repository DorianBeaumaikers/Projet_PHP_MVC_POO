<?php

namespace Core\Classes;

abstract class GenericRepository {
    
    protected $type;
    protected $class;

    public function __construct() {
        $this->type = strtolower(explode("Repository", substr(get_class($this), 11))[0]);
        $this->class = substr(get_class($this), 0, -11);
    }

    public function findAll() {
        $sql = "SELECT * FROM `{$this->type}` ORDER BY id ASC LIMIT 10;";
        $rs = \Core\Classes\App::getConn()->prepare($sql);
        $rs->execute();
        return $rs->fetchAll(\PDO::FETCH_CLASS, $this->class);
    }

    public function findById($id) {
        $sql = "SELECT * from `{$this->type}` WHERE id = :id;";
        $rs = \Core\Classes\App::getConn()->prepare($sql);
        $rs->bindValue(":id", $id, \PDO::PARAM_INT);
        $rs->execute();
        return new $this->class($rs->fetch(\PDO::FETCH_ASSOC));
    }
}