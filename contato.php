<?php
  require_once('modulos/vars.php');

  require_once('modulos/conexao.php');

    $nome=(string) null;
    $telefone=(string) null;
    $celular=(string) null;
    $email=(string) null;
    $homePage=(string) null;
    $facebook=(string) null;
    $profissao=(string) null;
    $mensagem=(string) null;
    $critica=(string) null;
    $sexo=(string) null;


    if(!isset($_POST['sbtEnviar'])){
      
    }else{
        
      $nome=$_POST['txtNome'];
      $telefone=$_POST['txtTelefone'];
      $celular=$_POST['txtCelular'];
      $email=$_POST['txtEmail'];
      $homePage=$_POST['txtHomePage'];
      $facebook=$_POST['txtFacebook'];
      $profissao=$_POST['txtProfissão'];
      $mensagem=$_POST['txtMensagem'];
      $critica=$_POST['txtCriticas'];
      $sexo=$_POST['rdoSexo'];
              
      if($nome==""||$celular==""||$email==""||$profissao==""||$mensagem==""||$sexo==""){
        echo(ERRO_CAIXA_VAZIA);
      }else{
        $conex= conexaoMysql();
       
        $sql ="insert into tblcontato
            (
             nome, telefone,celular,email,homePage,linkFacebook,profissao,mensagem,critica,sexo
            )
            
            values
            (
            '".$nome."','".$telefone."','".$celular."','".$email."','".$homePage."','".$facebook."','".$profissao."','".$mensagem."','".$critica."','".$sexo."'
            
            )
        ";
          
          
          
          if(mysqli_query($conex,$sql)){
            echo("<script> alert('Registro inserido com sucesso!') </script>");
          }else{
            echo("<script> alert('Erro ao executar o script!') </script>");
          }
          
      }
    }
 ?>
<?php 
        require_once('cabecalho.php');

?>
        <div id="contato">
               <div class="titulo">
                       <h3>Preencha o formulário e</h3>
                       <h1>ENVIE-NOS UMA MENSAGEM</h1>
               </div>
              
                        <form action="contato.php" name="formContato" method="post" >
                          <div id="informacoes">      
                                <div class="informacao">
                                   <h4>Nome*</h4>      <input type="text" name="txtNome" id="nome"  maxlength="100" placeholder="Informe seu nome" required>
                                </div>   
                                <div class="informacao" id="telefone">
                                   <h4>Telefone </h4>      <input type="text" name="txtTelefone" id="telefone"  maxlength="14" placeholder="Informe seu telefone">
                                </div>   
                                <div class="informacao" id="celular">
                                   <h4>Celular* </h4>      <input type="text" name="txtCelular" id="celular"  maxlength="15" placeholder="Informe seu celular" required>
                                </div>   
                                <div class="informacao">
                                   <h4>Email*</h4>      <input type="email" name="txtEmail" id="email"  maxlength="100" placeholder="Informe seu email" required>
                                </div>   
                                <div class="informacao">
                                   <h4>Home Page</h4>      <input type="url" name="txtHomePage" id="homePage" v maxlength="100" placeholder="Informe sua home page">
                                </div>   
                                <div class="informacao">
                                   <h4>Link no Facebook</h4>      <input type="url" name="txtFacebook" id="facebook" value="" maxlength="100" placeholder="Informe seu facebook">
                                </div>   
                                <div class="informacao">
                                   <h4>Profissão* </h4>      <input type="text" name="txtProfissão" id="profissão"  maxlength="100" placeholder="Informe sua profissão" required>
                                </div>   
                               

                               
                               <div class="mensagem">
                                <h4>Mensagem*</h4>
                                <textarea name="txtMensagem" id="mensagem" cols="40" rows="15" maxlength="500">

                                </textarea>
                               </div>

                               <div class="criticas">
                                <h4>Sugestão/Criticas </h4>
                                <textarea name="txtCriticas" id="criticas" cols="40" rows="15" maxlength="100" >

                                </textarea>
                               </div>

                               <div class="sexo">
                                   <h4>Sexo*</h4>     
                                    <input type="radio" name="rdoSexo"  value="M" checked >Masculino
                                    <input type="radio" name="rdoSexo"  value="F">Feminino
                                    <input type="radio" name="rdoSexo"  value="O">Outro

                                </div> 
                                 
                               
                           </div>  
                           <div class="enviarCritica">
                              <input type="submit" value="Enviar" name="sbtEnviar">
                          </div> 
                          <div id="observacao">
                                <p>Itens com "*" e obrigatória a digitação</p>
                          </div>
                        </form>
               
        </div>
<?php 
        require_once('rodaPe.php');
