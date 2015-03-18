<?php

  require 'config/config.php';

  if(isset($_GET['id'])):
    $etapa = Etapa::find($_GET['id']);
  endif;

  if(isset($etapa) & isset($_POST['save'])):
    $etapa->update_attributes(
      array('nome' => $_POST['nome'],
        'porcentagem' => $_POST['porcentagem']
      )
    );
    echo "<script>alert('Alteracao realizada com Sucesso!');";
      echo "window.location='list_etapa.php';</script>";
  endif;

  if(!isset($etapa) & isset($_POST['save'])){
    Etapa::factory(array('nome' => $_POST['nome'], 'porcentagem' => $_POST['porcentagem']));
  }
?>
<!DOCTYPE html >
<html lang="pt-br">
  <head>
    <title>
      SAO - Sistema de Adiministração de Obras
    </title>
  </head>
  <body>
    <h3>Cadastro de Etapa</h3>
    <form id="form_etapa" method="post" action="">
      <label>* Nome:</label>
      <input name="nome" id="nome" value="<?php if(isset($etapa)){ echo $etapa->nome;} ?>" type="text" />
      <br /><br />

      <label>* Porcentagem:</label>
      <input name="porcentagem" id="porcentagem" value="<?php if(isset($etapa)){ echo $etapa->porcentagem;} ?>" type="text" />
      <br /><br />

      <input name="cancelar" type="button" onClick="window.location='index.php'" value="Cancelar">
      <input name="save" id="save" type="submit" value="Cadastrar" />
    </form>
  </body>
</html>