<?php 
     setlocale(LC_ALL, "pt_BR");

     require_once('modulos/vars.php');

     $usuario = (string) null;
     $senha = (string)null;

     if(!isset($_POST['sbtEntrar'])){
         
     }else{
         $usuario=$_POST['txtUsuario'];
         $senha=$_POST['psdSenha'];

         if($usuario==""||$senha==""){
              echo(ERRO_CAIXA_VAZIA);
         }else{
             
         }
     }
?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="imagens/icon.png">
    <link rel="stylesheet" type="text/css" href="css/reset.css">
     <link rel="stylesheet" type="text/css" href="css/style.css">
     <script  src="js/jquery.js"></script>
    <script  src="js/jcycle.js"></script>
    <title>Honker Burguer</title>
     <script>
        $(document).ready(function(){
            
                $('#iconeMenuMobile').click(function(){
                    $('#menuMobileLista').fadeToggle(1000);
                });

                $('.itemMenu').click(function(){
                        $('#menuMobileLista').fadeToggle();
                });  
                 
            
                 $('.iconeMenuHorizontalMobile').click(function(){
                    $('.menuHorizontalMobileLista').fadeToggle(1000);
                });

                $('.listaHorizontalMobile li').click(function(){
                        $('.menuHorizontalMobileLista').fadeToggle();
                });  
        });
     

            
               
      
    </script>
</head>
<body>
    <nav>
        <div class="conteiner">
                    <div class="menuDesktop">
                        <div class="logo">
                            <figure>
                            <img src="imagens/logo.png" alt="Logo">
                            </figure>
                        </div>
                        <ul class="menuPaginas">
                            <li>
                            <a href="index.php">Home</a>
                            </li>
                            <li>
                                <a href="curiosidade.php">Curiosidades</a>
                            </li>
                            <li>
                                <a href="sobreEmpresa.php">Sobre a Empresa </a>

                            </li>
                            <li>
                                <a href="promocoes.php">Promoçoes</a>
                            </li>
                            <li>
                                <a href="nossasLojas.php">Nossas Lojas </a>

                            </li>
                            <li>
                                <a href="ProdutoMes.php">Produto do mes</a>
                            </li>
                            <li>
                                <a href="contato.php">Contato</a>
                            </li>

                        </ul>
                        <form name="formAutenticacao" action="produtos.php" method="post" >
                            <div class="conteinerUsuario">
                                Usuario
                                <input type="text" name="txtUsuario" placeholder="Informe" required >
                            </div>
                            <div class="conteinerSenha">
                                 Senha
                                <input type="password" name="psdSenha" placeholder="Informe" required>
                            </div>


                                <input class="conteinerConfirmacao" type="submit" name="sbtEntrar" value="Ok">



                        </form>
            
                    </div>
                    <div class="menuMobile">
                       <div id="iconeMenuMobile">
                           
                       </div>
                         <div id="menuMobileLista">
                            <ul id="listaMobile">
                                <li class="itemMenu"> <a href="produtos.php">Home</a></li>
                                <li class="itemMenu"><a href="curiosidade.php">Curiosidades</a></li>
                                <li class="itemMenu"><a href="sobreEmpresa.php">Sobre a Empresa </a></li>
                                <li class="itemMenu"><a href="promocoes.php">Promoçoes</a></li>
                                <li class="itemMenu"><a href="nossasLojas.php">Nossas Lojas </a></li>
                                <li class="itemMenu"> <a href="ProdutoMes.php">Produto do mes</a></li>
                                <li class="itemMenu"><a href="contato.php">Contato</a></li>

                            </ul>
                        </div>
                       <div class="logoMobile">
                            <figure>
                            <img src="imagens/logo.png" alt="Logo">
                            </figure>
                        </div> 
                    </div>
            
        </div>
    </nav>
    