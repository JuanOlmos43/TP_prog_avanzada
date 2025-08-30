<?php
require_once __DIR__.'\includes\PageClass.php';

if (isset($_POST['user'])) {

$nombre_usuario = $_POST['user'];
    
}
$body='<h4 class="text-center">Bienvenido</h4>
        <h6 class="text-center">Usted '. $nombre_usuario . ' a iniciado correctamente</h6>
		';

$oPage=new PageClass();

  $oPage->setBody($body);
  $oPage->setNavBar(true, $nombre_usuario);
echo $oPage->getHtml();
