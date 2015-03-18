<?php

  require 'config/config.php';

  if(isset($_GET['id'])):
    $fase = Fase::find($_GET['id']);
  endif;

  if(isset($fase) & isset($_POST['save'])):
    $fase->update_attributes(array('nome' => $_POST['nome']));
    echo "<script>alert('Alteracao realizada com Sucesso!');";
      echo "window.location='list_fase.php';</script>";
  endif;

  if(!isset($fase) & isset($_POST['save'])):
    Fase::factory(
      array('nome' => $_POST['nome']
      )
    );
  endif;
?>
<!DOCTYPE html >
<html lang="pt-br">
  <head>
    <title>
      SAO - Sistema de Adiministração de Obras
    </title>
  </head>
  <body>
    <h3>Cadastro de Fase</h3>
    <form id="form_fase" method="post" action="">
      <label>* Nome:</label>
      <input name="nome" id="nome" value="<?php if(isset($fase)){ echo $fase->nome;} ?>" type="text" />
      <br /><br />

      <input name="cancelar" type="button" onClick="window.location='index.php'" value="Cancelar">
      <input name="save" id="save" type="submit" value="Cadastrar" />
    </form>
  </body>
</html>