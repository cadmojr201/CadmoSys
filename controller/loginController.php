<?php 
    if(!empty($_POST["usuario"] && $_POST["senha"])){
        try{
            #conexão com o banco de dados
            $pdo = new PDO("mysql:dbname=hotelads42; host=localhost", "root", "");

            $email=$_POST["usuario"];
            $senha=$_POST["senha"];
            $stmt=$pdo->prepare("SELECT idUsuario FROM tblusuario WHERE email = :email AND senha = :senha");
            $stmt->bindValue(":email", $email);
            $stmt->bindValue(":senha", $senha);
            $stmt->execute();

            if($stmt->rowCount()>0){
                
                session_start();
                $_SESSION["usuario"] = $_POST["usuario"];
                header("location: /cadmoSys/view/menu.php");
                
            }else{

                echo "Usuário ou senha invalido!";
                
            }  
        }catch(PDOException $e){
            echo "erro de conexão ".$e->getMessage();
        }
        $pdo = null;
    }else{
        echo "Preencha todos os campos pra realizar o login.";
    }
?>