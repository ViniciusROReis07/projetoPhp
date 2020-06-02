<?php 
    require_once('cabecalho.php');
    require_once('bd/conexao.php');
    $conex = conexaoMysql();
   
?>
    <div id="conteudo">
        <div id="faleConosco">
           <div id="filtro">
             <form action="admFaleConosco.php" name="frmFaleConosco" method="post" id="frmFaleConosco">
                   <select id="sugestaoCriticas">
                     <option value="">Criticas</option>
                     <option value="">Sugestão</option>
                   </select>
                   <input type="submit" value="Filtrar" name="sbtFiltro" id="sbtFiltro"> 
             </form>
           </div>    
            
           <table id="tblFaleConosco">
            <tr class="linhaTblFaleConosco">
               <td>
                 <h3>Nome</h3>
               </td>
               <td>
                  <h3>Celular</h3>
               </td>
               <td>
                  <h3>Profissão</h3>
               </td>
               <td>
                  <h3>Sexo</h3>
               </td>
               <td>
                 <h3>Excluir/Visualizar</h3>
               </td>
            </tr>
            <?php
               
               
                $sql ="
                SELECT * FROM dbcontatoprojeto.tblcontato order by tblcontato.idContato desc ;
                ";
               
                 $selectContato = mysqli_query($conex, $sql);
                 
               
     while ($rsContato = mysqli_fetch_assoc($selectContato)){
            ?>
               
            <tr class="linhaTblFaleConosco">
               <td>
                 <p><?=$rsContato['nome']?></p>
               </td>
               <td>
                  <p><?=$rsContato['celular']?></p>
               </td>
               <td>
                  <p><?=$rsContato['profissao']?></p>
               </td>
               <td>
                  <p><?=$rsContato['sexo']?></p>
               </td>
               <td>
                 <div class="crudFaleConosc">
                      <div class="crudOpcao">
                          <figure>
                            <img src="imagens/delicon2.png" title="delete icon">
                          </figure>
                      </div>
                      <div class="crudOpcao">
                          <figure>
                            <img src="imagens/viewIncon.png" title="view icon">
                          </figure>
                      </div>
                  </div>
               </td>
            </tr>
            <?php 
                }
               ?>
               
           </table>
        </div>
    </div>
<?php 
    require_once('rodaPe.php');
?>