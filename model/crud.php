<?php
require_once "config.php";
class crud extends DbConfig {
    public function __construct()
    {
        parent::__construct();
    }
    //in dữ liệu ra màn hình
    public function getData($sql){
        $stmt= $this->conn->prepare($sql);
        $stmt->execute();
        $result=$stmt->fetchAll();
        return $result;
    }
    //hành động thêm sửa xóa
    public function action($sql){
        $this->conn->exec($sql);
    }

}