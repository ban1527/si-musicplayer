<?php

namespace app;
use PDO;

class koneksi {

protected object $db;

    public function __construct()
    {

        try {
            $this->db = new PDO("mysql:host=localhost;dbname=dbuts", "root", "");
        } catch (\Exception $e) {
            die ("error : " . $e->getMessage());
        }
    } 
}
?>