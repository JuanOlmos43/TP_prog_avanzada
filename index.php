<?php

require_once __DIR__.'\includes\PageClass.php';

$body='<h1 class="text-center">Sitio de administración de kioscos</h14>';

    $oPage=new PageClass();

      $oPage->setBody($body);

    echo $oPage->getHtml();


?>