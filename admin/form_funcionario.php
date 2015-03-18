<?php

  require 'config/config.php';

  if(isset($_GET['id'])):
    $funcionario = Funcionario::find($_GET['id']);
  endif;

  if(isset($funcionario) & isset($_POST['save'])):
    $funcionario->update_attributes(
      array('nome' => $_POST['nome'],
        'cpf'      => $_POST['cpf'],
        'cargo'    => $_POST['cargo'],
        'cidade'   => $_POST['cidade'],
        'estado'   => $_POST['estado'],
        'bairro'   => $_POST['bairro'],
        'cep'      => $_POST['cep']
      )
    );
    echo "<script>alert('Alteracao realizada com Sucesso!');";
    echo "window.location='list_funcionario.php';</script>";
  endif;

  if(!isset($funcionario) & isset($_POST['save'])){
    Funcionario::factory(
      array('nome' => $_POST['nome'],
        'cpf'    => $_POST['cpf'],
        'cargo'  => $_POST['cargo'],
        'cidade' => $_POST['cidade'],
        'estado' => $_POST['estado'],
        'bairro' => $_POST['bairro'],
        'cep'    => $_POST['cep']
      )
    );
  }
?>
<!DOCTYPE html >
<html lang="pt-br">
  <head>
    <title>
      SAO - Sistema de Adiministração de Obras
    </title>
    <script src="../js/jquery-1.2.6.pack.js" type="text/javascript"></script>
    <script src="../js/jquery.maskedinput-1.1.4.pack.js" type="text/javascript" /></script>
    <script type="text/javascript">$(document).ready(function(){$("#cpf").mask("999.999.999-99");});</script>
    <script type="text/javascript">$(document).ready(function(){$("#cep").mask("99999-999");});</script>
  </head>
  <body>
    <h3>Cadastro de Funcionario</h3>
    <form id="form_funcionario" method="post" action="">
      <label>* Nome:</label>
      <input name="nome" id="nome" value="<?php if(isset($funcionario)){ echo $funcionario->nome;} ?>" type="text" />
      <br /><br />

      <label>* CPF:</label>
      <input name="cpf" id="cpf" value="<?php if(isset($funcionario)){ echo $funcionario->cpf;} ?>" type="text" />
      <br /><br />

      <label>* Cargo:</label>
      <input name="cargo" id="cargo" value="<?php if(isset($funcionario)){ echo $funcionario->cargo;} ?>" type="text" />
      <br /><br />

      <label>Cidade:</label>
      <input name="cidade" id="cidade" value="<?php if(isset($funcionario)){ echo $funcionario->cidade;} ?>" type="text" />
      <br /><br />

      <label>Estado:</label>
      <input name="estado" id="estado"  value="<?php if(isset($funcionario)){ echo $funcionario->estado;} ?>" type="text" />
      <br /><br />

      <label>Bairro:</label>
      <input name="bairro" id="bairro" value="<?php if(isset($funcionario)){ echo $funcionario->bairro;} ?>" type="text" />
      <br /><br />

      <label>CEP:</label>
      <input name="cep" id="cep" value="<?php if(isset($funcionario)){ echo $funcionario->cep;} ?>" type="text" />
      <br /><br />

      <input name="cancelar" type="button" onClick="window.location='index.php'" value="Cancelar">
      <input name="save" id="save" type="submit" value="Cadastrar" />
    </form>
  </body>
</html>