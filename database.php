<?php
    class database{
        var $dbhost = "localhost";
        var $dbuser = "root";
        var $dbpass = "";
        var $dbname = "club-motor";
        var $db = "";
     
        function __construct(){
            try {
				$conn = new PDO("mysql:host=$this->dbhost;dbname=$this->dbname", $this->dbuser, $this->dbpass);
				$conn->exec("set names utf8");
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->db = $conn;
			}
			catch (PDOException $e) {
                die("Connection failed: " . $e->getMessage());
			}
        }

        function getDatabase(){
            return $this->db;
        }

        function getData($query){
            $row = $this->db->prepare($query);
            $row->execute();
            $data = $row->fetchAll();

            return $data;
        }

        function getCompany(){
            $query = "select * from company";
            $data = $this->getData($query);
            return $data[0] ?? null;
        }

        function getClient(){
            $query = "select * from client";
            $data = $this->getData($query);
            return $data ?? [];
        }

        function getTopProduct(){
            $query = "select * from product where top_seller = 1";
            $data = $this->getData($query);
            return $data ?? [];
        }

        function getProductByMerk($product_merk_id){
            $query = "select * from product where product_merk_id = $product_merk_id";
            $data = $this->getData($query);
            return $data ?? [];
        }

        function getProductMerk(){
            $query = "select * from product_merk";
            $data = $this->getData($query);
            return $data ?? [];
        }

        function getAllArticle(){
            $query = "select * from article";
            $data = $this->getData($query);
            return $data ?? [];
        }

        function getGallery(){
            $query = "select * from gallery";
            $data = $this->getData($query);
            return $data ?? [];
        }

        function tambah_data($tabel,$data)
        {
            $rowsSQL = array();
            $toBind = array();
            $columnNames = array_keys($data[0]);

            foreach($data as $arrayIndex => $row){
                $params = array();
                foreach($row as $columnName => $columnValue){
                    $param = ":" . $columnName . $arrayIndex;
                    $params[] = $param;
                    $toBind[$param] = $columnValue;
                }
                $rowsSQL[] = "(" . implode(", ", $params) . ")";
            }

            $sql = "INSERT INTO $tabel (" . implode(", ", $columnNames) . ") VALUES " . implode(", ", $rowsSQL);
            $row = $this->db->prepare($sql);

            foreach($toBind as $param => $val){
                $row->bindValue($param, $val);
            }

            return $row->execute();
        }
    }
?>
