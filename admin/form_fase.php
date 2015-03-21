<?php

  require 'config/config.php';

  if(isset($_REQUEST['id'])):
    $fase = Fase::find($_REQUEST['id']);
  endif;

  if(isset($fase) & isset($_REQUEST['save'])):
    $fase->nome = $_REQUEST['nome'];
    $fase->save();
    if ($fase->is_valid()):
      echo "<script>alert('Operação realizada com Sucesso!');";
      echo "window.location='list_fase.php';</script>";
    else:
      echo "<div id='errors' name='errors'>"
        .$fase->errors->on('nome')
        ."</div>"
      ;
    endif;
  endif;

  if(!isset($fase) & isset($_REQUEST['save'])):
    $dados = array('nome' => $_REQUEST['nome']);
    $fase = new Fase($dados);
    $fase->save();
    if ($fase->is_valid()):
      echo "<script>alert('Operação realizada com Sucesso!');";
      echo "window.location='list_fase.php';</script>";
    else:
      echo $fase->errors->on('nome');
    endif;
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