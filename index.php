<?php
require_once __DIR__ . '/includes/PageClass.php';

$body = '
<section class="py-5 text-center">
  <h1 class="display-4 fw-semibold mb-3">SysAdmin</h1>
  <p class="lead mb-1">Bienvenido al sitio oficial de SysAdmin.</p>
</section>';


$oPage = new PageClass();
$oPage->setBody($body);
$oPage->setNavBar(false); // invitado

echo $oPage->getHtml();
