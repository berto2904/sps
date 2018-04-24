<?php
$server = ($_SERVER['DOCUMENT_ROOT']);
require ('../clases/UsuarioClass.php');
// require ('../clases/ConnQuery.php');

session_start();

if (isset($_SESSION['usuario'])) {
  $idUsuario = $_SESSION['usuario'];

}
else {
  session_destroy();
  header("location: ../index.php");
}
include ('header.php');
?>
<header id="gtco-header" class="gtco-cover" role="banner" style="background-image: url('../librerias/Login/images/bg-02.jpg');">
  <div class="overlay"></div>
  <div class="gtco-container">
    <div class="row">
      <div class="col-md-12 col-md-offset-0 text-left">
        <div class="row contenidoPostulante">
          <section>
            <h1>Consultar Postulante</h1>
          </section>
          <section>
  					<div class="wizard">
              <div class="wizard-inner">

              </div>
  					</div>
  				</section>
        </div>
      </div>
    </div>
  </div>
</header>
<?php
include ('footer.php');
?>
