<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <title>CADMO SYS</title>
    <link rel="stylesheet" href="style.css">

</head>
<body><center>
<br>
        <h1 style="color: yellow; display: inline; margin: 10px auto auto 570px;">Bem Vindo!!!</h1>
        <input style="margin: 10px 10px 10px 480px;" id="menuSair" class="menu" type="button" name="sair" id="sair" value="Sair" onclick="location.href='login.html'">
        <br><br>
        <input class="menu" type="button" name="reservarApartamento" id="reservarApartamento" value="Reservar Apartamento" onclick="location.href='reservar.html'">
        <input class="menu" type="button" name="reservarServico" id="reservarServico" value="Reservar Serviço" onclick="location.href='reservarServico.html'">
        <input class="menu" type="button" name="reservarProduto" id="reservarProduto" value="Reservar Produto" onclick="location.href='reservarProduto.html'">
    <?php
    /*
    session_start();
    if($_SESSION["usuario"] == $_POST["usuario"]){
    $html = " 
       
        <br>
        <h1 style="color: yellow; display: inline; margin: 10px auto auto 570px;">Bem Vindo!!!</h1>
        <input style="margin: 10px 10px 10px 480px;" id="menuSair" class="menu" type="button" name="sair" id="sair" value="Sair" onclick="location.href='login.html'">
        <br><br>
        <input class="menu" type="button" name="reservarApartamento" id="reservarApartamento" value="Reservar Apartamento" onclick="location.href='reservar.html'">
        <input class="menu" type="button" name="reservarServico" id="reservarServico" value="Reservar Serviço" onclick="location.href='reservarServico.html'">
        <input class="menu" type="button" name="reservarProduto" id="reservarProduto" value="Reservar Produto" onclick="location.href='reservarProduto.html'">
     ";
     echo $html;   
    }else{
        echo "Sessão fechada, faça o login!!!";
    }
    */?>
</center></body>
</html>