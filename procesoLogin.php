<?php
require_once __DIR__.'\includes\PageClass.php';
$credencial_usuario = 'fcytuader';
$credencial_contraseña = 'programacionavanzada';
if (isset($_POST['user']) && isset($_POST['password'])) {

$nombre_usuario = $_POST['user'];
    
}
if(($credencial_contraseña !== $_POST['password']) && ($credencial_usuario !== $_POST['user'])){
  header("Location: login.php?error=1");
}
  $body='<h4 class="text-center">Bienvenido</h4>
        <h6 class="text-center">Usted '. $nombre_usuario . ' a iniciado correctamente</h6>
		';

$oPage=new PageClass();

  $oPage->setBody($body);
  $oPage->setNavBar(true, $nombre_usuario);
echo $oPage->getHtml();
