<?php

  require 'config/config.php';

  if(isset($_GET['id'])):
    $admin = Admin::find($_GET['id']);
  endif;

  if(isset($admin) & isset($_POST['save'])):
    $admin->update_attributes(
      array('nome' => $_POST['nome'],
        'email'    => $_POST['email'],
        'login'    => $_POST['login'],
        'nivel'    => $_POST['nivel'],
        'ativo'    => $_POST['ativo'], // true => 1, false => 0
        'telefone' => $_POST['telefone']
      )
    );
    echo "<script>alert('Alteracao realizada com Sucesso!');";
    echo "window.location='list_admin.php';</script>";
  endif;

  if(!isset($admin) & isset($_POST['save'])){
    Admin::factory(
      array('nome' => $_POST['nome'],
        'email'    => $_POST['email'],
        'login'    => $_POST['login'],
        'senha'    => md5($_POST['senha']),
        'nivel'    => $_POST['nivel'],
        'ativo'    => $_POST['ativo'], // true => 1, false => 0
        'telefone' => $_POST['telefone']
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
    <script type="text/javascript">$(document).ready(function(){$("#telefone").mask("(99)9999-9999");});</script>
  </head>
  <body>
    <h3>Cadastro de Admin</h3>
    <form id="form_admin" method="post" action="" onsubmit="return valida_form(this)">
      <label>* Nome:</label>
      <input name="nome" id="nome" value="<?php if(isset($admin)){ echo $admin->nome;} ?>" type="text" />
      <br /><br />

      <label>* Email:</label>
      <input name="email" id="email" value="<?php if(isset($admin)){ echo $admin->email;} ?>" type="text" />
      <br /><br />

      <label>* login:</label>
      <input name="login" id="login" value="<?php if(isset($admin)){ echo $admin->login;} ?>" type="text" />
      <br /><br />

      <?php if(! isset($admin)): ?>
        <label>* Senha:</label>
        <input name="senha" id="senha" type="password" />
        <br /><br />
      <?php endif; ?>

      <label>* Nivel:</label>
      <input name="nivel" id="nivel" value="<?php if(isset($admin)){ echo $admin->nivel;} ?>" type="text" />
      <br /><br />

      <label>* Ativo:</label>
      <input type="radio" name="ativo" value="1" <?php if(isset($admin)){ if($admin->ativo == 1){ echo 'checked';}} ?>>Sim&nbsp;
      <input type="radio" name="ativo" value="0" <?php if(isset($admin)){ if($admin->ativo == 0){ echo 'checked';}} ?>>Nao
      <br /><br />

      <label>* Telefone:</label>
      <input name="telefone" id="telefone" value="<?php if(isset($admin)){ echo $admin->telefone;} ?>" type="text" />
      <br /><br />

      <input name="cancelar" type="button" onClick="window.location='list_admin.php'" value="Cancelar">
      <input name="save" id="save" type="submit" value="Cadastrar" />
    </form>
  </body>

  <script type="text/javascript" language="javascript">
    function valida_form (){
      var email_filter = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
      if(!email_filter.test(document.getElementById("email").value)){
        alert('Por favor, digite o email corretamente');
        document.getElementById("email").focus();
        return false
      }
    }
  </script>
</html>