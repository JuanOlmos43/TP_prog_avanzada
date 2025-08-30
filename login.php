<?php

require_once __DIR__.'\includes\PageClass.php';

$body='<h4 class="text-center">Login</h4><br>
    
      <div class="d-flex justify-content-center">

        <form id="formPersonas" method="post" action="procesoLogin.php" style="min-width:350px;max-width:600px;width:100%">

            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label>Usuario</label>
                    <input type="text" class="form-control" id="user" name="user" required>
                    <div class="valid-feedback"></div>
                    <div class="invalid-feedback">El campo Nombre no puede estar vacío.</div>
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label>Contraseña</label>
                    <input type="password" class="form-control" id="password" name="password" value="" required>
                    <div class="valid-feedback"></div>
                    <div class="invalid-feedback">El campo contraseña no puede estar vacío.</div>
                </div>
            </div>

            <button class="btn btn-primary" type="submit" value="">Enviar datos</button>

        </form>
    </div>';

if (isset($_GET['error']) && $_GET['error'] == 1) {
    $body .= '
        <div class="alert alert-danger mt-3 text-center" role="alert">
            Usuario o contraseña incorrectos
        </div>';
}

$body .= '</form></div>';

$oPage=new PageClass();

$oPage->setBody($body);

echo $oPage->getHtml();


?>