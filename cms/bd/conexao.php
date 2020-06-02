<?php

 function conexaoMysql () {
     $server= 'localhost';
     $user='root';
     $password='';
     $database='dbContatoProjeto';
     
     $conexao= mysqli_connect($server, $user, $password, $database);
     
     return $conexao;
 }


?>