<?php
require_once "../helper/database.php";

class RecycleBinController extends DB
{
    public function products(){
        return $products = $this->pdo->query("select * from products where deleted_at is not null")->fetchAll(PDO::FETCH_OBJ);
    }
    public function restore($id){
        $statement = $this->pdo->prepare("
            update products
                set 
                deleted_at = null
                where id = :id;
        ");
        $statement->bindParam(":id", $id);
        if($statement->execute()){
            header("Location: http://localhost:8000/products");
        }else{
            throw new Exception("can't create!");
        }
    }
}