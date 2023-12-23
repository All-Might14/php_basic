<?php
require_once "../helper/database.php";
class ProductController extends DB
{
    public function index(){
            $statement = $this->pdo->query("select * from products where deleted_at is null");
            $products = $statement->fetchAll(PDO::FETCH_OBJ);
            return $products;
    }
    public function store($request){
        try {
            $statement = $this->pdo->prepare("
                insert into products
                    (name, price, stock, category, description, created_at, updated_at)
                values
                    (:name, :price, :stock, :category, :description, now(), now())
            ");
            $statement->bindParam(":name", $request["name"]);
            $statement->bindParam(":price", $request["price"]);
            $statement->bindparam(":stock", $request["stock"]);
            $statement->bindparam(":category", $request["category"]);
            $statement->bindparam(":description", $request["description"]);
            if($statement->execute()){
                header("Location: http://localhost:8000/products");
            }else{
                throw new Exception("can't create!");
            }
        }catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    public function edit($id){
        try {
            $statement = $this->pdo->prepare("select * from products where id = :id");
            $statement->bindParam(":id" , $id);
            if($statement -> execute()){
                $product = $statement->fetch(PDO::FETCH_OBJ);
                return $product;
            }else{
                throw new Exception("Error");
            }
        }catch (Exception $e){
            echo $e->getMessage();
        }
    }
    public function update($id , $request){
        try {
            $statement = $this->pdo->prepare("
                update products
                set
                    name = :name,
                    price = :price,
                    stock = :stock,
                    category = :category,
                    created_at = :created_at,
                    updated_at = now()
                where
                    id = :id;
            ");
            $statement->bindParam(":id", $id);
            $statement->bindParam(":name", $request["name"]);
            $statement->bindParam(":price", $request["price"]);
            $statement->bindparam(":stock", $request["stock"]);
            $statement->bindparam(":category", $request["category"]);
            $statement->bindparam(":created_at", $request["created_at"]);

            if($statement->execute()){
                header("Location: http://localhost:8000/products");
            }else{
                throw new Exception("can't create!");
            }
        }catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    public function destroy($id){
        try {
            $statement = $this->pdo->prepare("
                update products
                    set 
                    deleted_at = now()
                where id = :id;
            ");
            $statement->bindParam(":id", $id);
            if($statement->execute()){
                header("Location: http://localhost:8000/products");
            }else{
                throw new Exception("can't create!");
            }
        }catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}