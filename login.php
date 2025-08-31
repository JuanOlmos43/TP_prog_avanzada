<?php

require_once __DIR__.'\includes\PageClass.php';

$body='<h4 class="text-center">Login</h4><br>
    
    <div class="d-flex justify-content-center">
        <div class="col-12 col-md-3 mx-auto">
            <form id="formPersonas" method="post" action="procesoLogin.php" class="p-4" style="background-color: #009c94ff;">
                <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <label for="user">Usuario</label>
                        <input type="text" class="form-control" id="user" name="user" required>
                        <div class="invalid-feedback">El campo Usuario no puede estar vacío.</div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <label for="password">Contraseña</label>
                        <input type="password" class="form-control" id="password" name="password" value="" required>
                        <div class="invalid-feedback">El campo contraseña no puede estar vacío.</div>
                    </div>
                </div>
                
                <button class="btn btn-primary btn-block" type="submit">Ingresar</button>
            </form>
        </div>
    </div>';

if (isset($_GET['error']) && $_GET['error'] == 1) {
    $body .= '
        <div class="alert alert-danger mt-3 text-center" role="alert" >
            Usuario o contraseña incorrectos
        </div>';
}

$oPage=new PageClass();
$oPage->setBody($body);
$oPage->setNavBar(true, ''); // invitado

echo $oPage->getHtml();
?>