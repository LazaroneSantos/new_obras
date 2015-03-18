<?php
  # inclue the ActiveRecord library
  require_once '../librarys/php-activerecord/ActiveRecord.php';

  $cfg = ActiveRecord\Config::instance();
  $cfg->set_model_directory('../models');
  $cfg->set_connections(array('development' =>
    'mysql://root:usb30sata@localhost/new_obras'));
/*
 * TESTE COM POSTGRESQL
  $cfg->set_connections(array('development' =>
    'pgsql://new_obras:123456@localhost/new_obras'));
*/

  # caminho das imagens assim so precisa chamar o nome da imagem
  $img = "../img/";

  # favicon nas paginas
  echo "<link rel='shortcut icon' href='".$img."favicon.ico' >";
  echo "<title>SAO - Sistema de Adiminstracao de Obras</title>";
?>
