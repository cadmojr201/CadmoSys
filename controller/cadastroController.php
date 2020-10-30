<?php 
    if(!empty($_POST["nome"] && $_POST["cpf"] && $_POST["email"] && $_POST["senha"] && $_POST["endereco"] && $_POST["numero"] && $_POST["telefone"])){
        #conexão com o banco de dados
        $pdo = new PDO("mysql:dbname=hotelads42; host=localhost", "root", "");

        $email=$_POST["email"];
        $cpf=$_POST["cpf"];
        $stmt=$pdo->prepare("SELECT idUsuario FROM tblusuario WHERE cpf = :cpf AND email = :email");
        $stmt->bindValue(":cpf", $cpf);
        $stmt->bindValue(":email", $email);
        $stmt->execute();

        if($stmt->rowCount()==0){
            try{
                $idPerfilUsuario = 1;
                $nome = $_POST["nome"];
                $cpf = $_POST["cpf"];
                $email = $_POST["email"];
                $senha = $_POST["senha"];
                $endereco = $_POST["endereco"];
                $numero = $_POST["numero"];
                $telefone = $_POST["telefone"];
                $status = "A";
                $stmt=$pdo->prepare("INSERT INTO tblusuario(idPerfilUsuario,nome,cpf,email,senha,endereco,numero,telefone,status)VALUES(:idPerfilUsuario,:nome,:cpf,:email,:senha,:endereco,:numero,:telefone,:status)");
                $stmt->bindValue(":idPerfilUsuario", $idPerfilUsuario);
                $stmt->bindValue(":nome", $nome);
                $stmt->bindValue(":cpf", $cpf);
                $stmt->bindValue(":email", $email);
                $stmt->bindValue(":senha", $senha);
                $stmt->bindValue(":endereco", $endereco);
                $stmt->bindValue(":numero", $numero);
                $stmt->bindValue(":telefone", $telefone);
                $stmt->bindValue(":status", $status);
                $stmt->execute();
                echo "Cadastro realizado com sucesso!";

            }catch(PDOException $e){
                echo "erro de conexão ".$e->getMessage();
            }
        }else{
            echo "Usuário já cadastrado!";
        }
        $pdo = null;
    }else{
        echo "Preencha todos os campos pra realizar o cadastro.";
    }    
?>