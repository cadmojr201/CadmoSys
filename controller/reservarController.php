<?php

if(!empty($_POST["apartamento"] && $_POST["qtdHospedes"] && $_POST["dataReserva"] && $_POST["dataCheckin"] && $_POST["dataCheckout"] && $_POST["valorTotalReserva"] && $_POST["valorPago"])){
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
            $idUsuario = ;
            $idApartamento = $_POST["idApartamento"];
            $qtdHospedes = $_POST["qtdHospedes"];
            $dataReserva = $_POST["dataReserva"];
            $dataCheckin = $_POST["dataCheckin"];
            $dataCheckout = $_POST["dataCheckout"];
            $checkin = $_POST["checkin"];
            $checkout = $_POST["checkout"];
            $valorTotalReserva = ;
            $valorPago = ;
            $stmt=$pdo->prepare("INSERT INTO tblreserva(idUsuario,idApartamento,qtdHospedes,dataReserva,dataCheckin,datacheckout,chechin,checkout,valorTotalReserva,valorPago)
                                 VALUES(:idPerfilUsuario,:nome,:cpf,:email,:senha,:endereco,:numero,:telefone,:status)");
            $stmt->bindValue(":idUsuario", $idUsuario);
            $stmt->bindValue(":idApartamento", $idApartamento);
            $stmt->bindValue(":qtdHospedes", $qtdHospedes);
            $stmt->bindValue(":dataReserva", $dataReserva);
            $stmt->bindValue(":dataCheckin", $dataCheckin);
            $stmt->bindValue(":dataCheckout", $dataCheckout);
            $stmt->bindValue(":checkin", $checkin);
            $stmt->bindValue(":checkout", $checkout);
            $stmt->bindValue(":valorTotalReserva", $valorTotalReserva);
            $stmt->bindValue(":valorPago", $valorPago);
            $stmt->execute();
            echo "Reserva realizada com sucesso!";

        }catch(PDOException $e){
            echo "erro de conexão ".$e->getMessage();
        }
    }else{
        echo "Dia já reservado!";
    }
    $pdo = null;
}else{
    echo "Preencha todos os campos pra realizar a reserva.";
}  

?>