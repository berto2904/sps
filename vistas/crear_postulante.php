<?php
require ('../clases/UsuarioClass.php');
// require ('../clases/ConnQuery.php');

session_start();

if (isset($_SESSION["usuario"])) {
  $idUsuario = $_SESSION["usuario"];
}
else {
  session_destroy();
  header("location: ../index.php");
}
include ('header.php');
?>
<header id="gtco-header" class="gtco-cover" role="banner" style="background-image: url('../librerias/Login/images/bg-01.jpg');">
  <div class="overlay"></div>
  <div class="gtco-container">
    <div class="row">
      <div class="col-md-12 col-md-offset-0 text-left">
        <div class="row contenidoPostulante">
          <section>
            <h1>Crear Postulante</h1>
          </section>
          <section>
  					<div class="wizard">
  						<div class="wizard-inner">
  							<div class="connecting-line"></div>
  							<ul class="nav nav-tabs" role="tablist">

  								<li role="presentation" class="active">
  									<a href="#" data-toggle="tab" aria-controls="" role="tab" title="Informacion Personal">
  										<span class="round-tab">
  											<i class="glyphicon glyphicon-user"></i>
  										</span>
  									</a>
  								</li>

  								<li role="presentation" class="">
  									<a href="#" data-toggle="tab" aria-controls="" role="tab" title="Familiares">
  										<span class="round-tab">
  											<i class="glyphicon glyphicon-leaf"></i>
  										</span>
  									</a>
  								</li>
  								<li role="presentation" class="">
  									<a href="#" data-toggle="tab" aria-controls="" role="tab" title="Educación">
  										<span class="round-tab">
  											<i class="glyphicon glyphicon-education"></i>
  										</span>
  									</a>
  								</li>
  								<li role="presentation" class="">
  									<a href="#" data-toggle="tab" aria-controls="" role="tab" title="Hobbies y pasatiempos">
  										<span class="round-tab">
  											<i class="glyphicon glyphicon-music"></i>
  										</span>
  									</a>
  								</li>
                  <li role="presentation" class="">
  									<a href="#" data-toggle="tab" aria-controls="" role="tab" title="Informacion Socioambiental">
  										<span class="round-tab">
  											<i class="glyphicon glyphicon-home"></i>
  										</span>
  									</a>
  								</li>
                  <li role="presentation" class="">
  									<a href="#" data-toggle="tab" aria-controls="" role="tab" title="Informacion Economica">
  										<span class="round-tab">
  											<i class="glyphicon glyphicon-piggy-bank"></i>
  										</span>
  									</a>
  								</li>
                  <li role="presentation" class="">
  									<a href="#" data-toggle="tab" aria-controls="" role="tab" title="Antecedentes Laborales">
  										<span class="round-tab">
  											<i class="glyphicon glyphicon-briefcase"></i>
  										</span>
  									</a>
  								</li>
                  <li role="presentation" class="">
  									<a href="#" data-toggle="tab" aria-controls="" role="tab" title="Confirmacion">
  										<span class="round-tab">
  											<i class="glyphicon glyphicon-ok"></i>
  										</span>
  									</a>
  								</li>
  							</ul>
  						</div>

  						<form role="form">
  							<div class="tab-content">
  								<div class="tab-pane active" role="tabpanel" id="">
                    <div class="step1">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="exampleInputEmail1">First Name</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="First Name">
                            </div>
                            <div class="col-md-6">
                                <label for="exampleInputEmail1">Last Name</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                            </div>
                            <div class="col-md-6">
                                <label for="exampleInputEmail1">Confirm Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="exampleInputEmail1">Mobile Number</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                            </div>
                            <div class="col-md-6">
                            <label for="exampleInputEmail1">Email address</label>
                                <div class="row">
                                    <div class="col-md-3 col-xs-3">
                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                                    </div>
                                    <div class="col-md-9 col-xs-9">
                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
  								</div>
  								<div class="tab-pane" role="tabpanel" id="">
  									<h3>Step 2</h3>
  									<p>This is step 2</p>
  									<ul class="list-inline pull-right">
  										<li><button type="button" class="btn btn-default prev-step">Previous</button></li>
  										<li><button type="button" class="btn btn-primary next-step">Save and continue</button></li>
  									</ul>
  								</div>
  								<div class="tab-pane" role="tabpanel" id="">
  									<h3>Step 3</h3>
  									<p>This is step 3</p>
  									<ul class="list-inline pull-right">
  										<li><button type="button" class="btn btn-default prev-step">Previous</button></li>
  										<li><button type="button" class="btn btn-default next-step">Skip</button></li>
  										<li><button type="button" class="btn btn-primary btn-info-full next-step">Save and continue</button></li>
  									</ul>
  								</div>
  								<div class="tab-pane" role="tabpanel" id="complete">
  									<h3>Complete</h3>
  									<p>You have successfully completed all steps.</p>
  								</div>
  								<div class="clearfix"></div>
  							</div>
  						</form>
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
