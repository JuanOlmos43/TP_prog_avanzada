<?php
require_once __DIR__.'\includes\PageClass.php';

if (isset($_POST['user'])) {

$nombre_usuario = $_POST['user'];
    
}
$body='<h4 class="text-center">Bienvenido</h4>
        <h6 class="text-center">Usted '. $nombre_usuario . ' a iniciado correctamente</h6>

<div class="mx-auto" style="width: 40%;">
  <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://media.gettyimages.com/id/1451277246/es/foto/pasillo-de-supermercado-piernas-de-mujer-y-canasta-para-comprar-en-tienda-de-comestibles.jpg?s=612x612&w=0&k=20&c=Xy4WKT_awtMQol_gJXm2ZnVX3YykBNiBrI6LVbqAkgs=" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://media.gettyimages.com/id/507840170/es/foto/mujer-compra-lavado-de-polvo.jpg?s=612x612&w=gi&k=20&c=j_vgq0ApG13z-dl1wIjAxXdnl3w5ebqIbJZpqAJFmVw=" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://media.gettyimages.com/id/1367328549/es/foto/retrato-de-una-guapa-sonriente-con-una-botella-de-vino-en-las-manos-en-el-supermercado.jpg?s=612x612&w=0&k=20&c=X68iaBX9nLLfmOBD7Et5BOjYjiLWMW87cPf506nvU70=" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>


		<div class="container text-center">
  <div class="row">
    <div class="col">
            <div class="card" style="width: 18rem;">
        <img src="https://media.gettyimages.com/id/1451277246/es/foto/pasillo-de-supermercado-piernas-de-mujer-y-canasta-para-comprar-en-tienda-de-comestibles.jpg?s=612x612&w=0&k=20&c=Xy4WKT_awtMQol_gJXm2ZnVX3YykBNiBrI6LVbqAkgs=" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Utilice el sitio para administrar el inventario categorizado por "COMIDA"</p>
        </div>
      </div>
    </div>
    <div class="col">
        <div class="card" style="width: 18rem;">
        <img src="https://media.gettyimages.com/id/507840170/es/foto/mujer-compra-lavado-de-polvo.jpg?s=612x612&w=gi&k=20&c=j_vgq0ApG13z-dl1wIjAxXdnl3w5ebqIbJZpqAJFmVw=" class="card-img-top" alt="...">
          <div class="card-body">
           <p class="card-text">Utilice el sitio para administrar el inventario categorizado por "LIMPIEZA"</p>
          </div>
      </div>
    </div>
    <div class="col">
          <div class="card" style="width: 18rem;">
        <img src="https://media.gettyimages.com/id/1367328549/es/foto/retrato-de-una-guapa-sonriente-con-una-botella-de-vino-en-las-manos-en-el-supermercado.jpg?s=612x612&w=0&k=20&c=X68iaBX9nLLfmOBD7Et5BOjYjiLWMW87cPf506nvU70=" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Utilice el sitio para administrar el inventario categorizado por "BEBIDAS ALCOHOLICAS"</p>
        </div>
      </div>
    </div>
  </div>
</div>';

$oPage=new PageClass();

  $oPage->setBody($body);
  $oPage->setNavBar(true, $nombre_usuario);
echo $oPage->getHtml();
