<?php
 function conexaoMysql (){
     $server='localhost';
     $user='root';
     $password='';
     $dataBase='dbcontatoprojeto';
     $conexao= mysqli_connect($server,$user,$password,$dataBase);
     
     return $conexao;
 }


?>