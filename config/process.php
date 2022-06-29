<?php
     session_start();
     if(isset($_SESSION["msg"])){
        $sessionMsg = $_SESSION["msg"];
        $_SESSION["msg"] = "";
     }

     require_once("url.php");
     require_once("conn.php");
    
    $data = $_POST;

     if(!empty($data)){
     
        if($data["type"] === "create"){
        
            $name = $data["name"];
            $lastname = $data["lastname"];
            $age = $data["age"];
            $sector = $data["sector"];
            $role = $data["role"];
            $wage = $data["wage"];

            $stmt = $conn->prepare("INSERT INTO funcionarios (name, lastname, age, sector, role, wage) VALUES(:name, :lastname, :age, :sector, :role, :wage)");

            $stmt->bindParam(":name", $name);
            $stmt->bindParam(":lastname", $lastname);
            $stmt->bindParam(":age", $age);
            $stmt->bindParam(":sector", $sector);
            $stmt->bindParam(":role", $role);
            $stmt->bindParam(":wage", $wage);

            try{
                $stmt->execute();
                $_SESSION["msg"] = "contato adicionado com sucesso";
            }catch(PDOException $e){
                $error = $e->getMessage();
                echo "Erro: $error";
            }

            
        }else if($data["type"] === "delete"){
                
            $id = $data["id"];

            $stmt = $conn->prepare("DELETE FROM funcionarios WHERE id = :id");
            $stmt->bindParam(":id", $id);

            try{
                $stmt->execute();
                $_SESSION["msg"] = "contato removido com sucesso";
            }catch(PDOException $e){
                $error = $e->getMessage();
                echo "Erro: $error";
            }
        }else if($data["type"] === "update"){
            $id = $data["id"];
            $name = $data["name"];
            $lastname = $data["lastname"];
            $age = $data["age"];
            $sector = $data["sector"];
            $role = $data["role"];
            $wage = $data["wage"];

            $stmt = $conn->prepare("UPDATE funcionarios SET name = :name, lastname = :lastname, age = :age, sector = :sector, role = :role, wage = :wage WHERE id = :id");
            
            $stmt->bindParam(":id", $id);
            $stmt->bindParam(":name", $name);
            $stmt->bindParam(":lastname", $lastname);
            $stmt->bindParam(":age", $age);
            $stmt->bindParam(":sector", $sector);
            $stmt->bindParam(":role", $role);
            $stmt->bindParam(":wage", $wage);

            try{
                $stmt->execute();
                $_SESSION["msg"] = "contato atualizado com sucesso";
            }catch(PDOException $e){
                $error = $e->getMessage();
                echo "Erro: $error";
            }
        }
        header("location:" . $BASE_URL . "../index.php");
    }else{

        $id;

        if(!empty($_GET)){
            $id = $_GET["id"];
        }

        if(!empty($id)){
                
                $query = "SELECT * FROM funcionarios WHERE id = :id";
                
                $stmt = $conn->prepare($query);
                
                $stmt->bindParam(":id", $id);

                $stmt->execute();

                $collaborator = $stmt->fetch();

        }else{
            $stmt = $conn->prepare("SELECT * FROM funcionarios");
            $stmt->execute();
            $collaborators = $stmt->fetchAll();
        }

    }

?>