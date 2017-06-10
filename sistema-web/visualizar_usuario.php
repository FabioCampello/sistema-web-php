<?php 

   $id = $_GET['id'];
   $result = mysqli_query($conexao, "SELECT * FROM usuarios WHERE id = '$id' LIMIT 1");
   
   $resultado = mysqli_fetch_assoc($result);

?> 

<div class="page-header">
    <h1 align="center">Usuário: <?php echo $resultado['nome'];?></h1>
</div>

<table class="table">
     <thead class="table table-inverse">
        <tr >
          <th>ID</th>
          <th>NOME</th>
          <th>CPF</th>
          <th>E-MAIL</th>
          <th>LOGIN</th>
          <th>SENHA</th>
          <th>NÍVEL DE ACESSO</th>
          <th>CRIADO</th>
          <th>MODIFICADO</th>
        </tr>
     </thead>
    <tbody>

    <!-- TRECHO DE CÓDIGO QUE ATRIBUÍ VALOR EM STRING À VARIÁVEL 'nivel_acesso_id' -->
    <?php
          if (['nivel_acesso_id'] == "1") {
                    $nivel = "Adiministrador";

                 }else{

                    $nivel = "Usuário";

                 }

          ?>

    <!-- ******************************************************************************* -->

    <tr>
      <th scope="row"><?php echo $resultado['id'];?></th>
      <td><?php echo $resultado['nome'];?></td>
      <td><?php echo $resultado['cpf'];?></td>
      <td><?php echo $resultado['email'];?></td>
      <td><?php echo $resultado['login'];?></td>
      <td><?php echo $resultado['senha'];?></td>
      <td><?php echo $nivel;?></td>
      <td><?php echo $resultado['created'] = date("d/m/Y");?></td>
      <td><?php echo $resultado['modified'] = date("d/m/Y");?></td>
    </tr>
  </tbody>
</table>

</div>
<br/>
<div>
    <div class="pull" align="center">

        <a href='administrador.php?link=2&id=<?php echo $resultado['id']; ?>'>
            <button type='button' class='btn btn-sm btn-info'>Listar</button>
        </a>
        &nbsp;
        <a href='administrador.php?link=4&id=<?php echo $resultado['id']; ?>'>
            <button type='button' class='btn btn-sm btn-warning'>Editar</button>
        </a>
        &nbsp;
        <a href='administrador.php?link=8&id=<?php echo $resultado['id']; ?>'>
            <button type='button' class='btn btn-sm btn-danger'>Apagar</button>
        </a>

    </div>
</div> 
