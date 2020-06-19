<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Citas</title>

    <!-- Favicon -->
    <link rel="icon" href="public/img/core-img/logo.png">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="public/style.css">

</head>

<body>
    <!-- ##### Preloader ##### -->
    <div id="preloader">
        <i class="circle-preloader"></i>
        </div>
        @extends('narvar')
    @section('narvar')
  

    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img" style="background-image: url(public/img/bg-img/breadcumb.jpg);">
        <div class="bradcumbContent">
            <h2>Citas</h2>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->
    <div id="slices" style="height: 300px; " >
</div>
    <!-- ##### Google Maps ##### -->


    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contact-content">
                        <div class="row">
                            <!-- Contact Information -->
                            <div class="col-12 col-lg-5">
                                <div class="contact-information wow fadeInUp" data-wow-delay="400ms">
                                    <div class="section-heading text-left">
                                        <span>Nos interesa tu opinion</span>
                                        <h3>Citas</h3>


                                    </div>

                                    <!-- Contact Social Info -->
                                    <div class="contact-social-info d-flex mb-30">
                                        <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                        <a href="https://www.facebook.com/tensacarloscparedes/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
 
                                        <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>


                                    </div>

                                    <!-- Single Contact Info -->
                                    <div class="single-contact-info d-flex">
                                        <div class="contact-icon mr-15">
                                            <i class="icon-placeholder"></i>
                                        </div>
                                        <p>Av. de la industria Automitriz, Lerma de Villada, M&eacute;x. CP 52004 </p>
                                    </div>

                                    <!-- Single Contact Info -->
                                    <div class="single-contact-info d-flex">
                                        <div class="contact-icon mr-15">
                                            <i class="icon-telephone-1"></i>
                                        </div>
                                        <p>Tel: 722 553 2836<br>Oficina: 203-808-8648</p>
                                    </div>

                                    <!-- Single Contact Info -->
                                    <div class="single-contact-info d-flex">
                                        <div class="contact-icon mr-15">
                                            <i class="icon-contract"></i>
                                        </div>
                                        <p>grupotensatoluca@grupotensatoluca.com</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Contact Form Area -->
                            <div class="col-12 col-lg-7">
                                <div class="contact-form-area wow fadeInUp" data-wow-delay="500ms">
                                  <form method="post" action="{{url('Citas')}}">
	                         {{csrf_field()}}
<div class="container">
	<div align="center" class="row" style="padding-top: 2%;">
		<div class="col-12" style="padding-bottom: 5%;">
			<h3>Agendar nueva cita</h3>
		</div>
		<div class="col-12">
			<span>Correo</span>
			<input class="form-control col-6" type="email" name="correo_cita" value="grupo_tensa_toluca@grupotensatoluca.com">
		</div>
		<div class="col-12">
			<span>Telefono</span>
			<input class="form-control col-6" type="number" name="telefono_cita" placeholder="Telefono" required>
		</div>
		<div class="col-12">
			<span>Fecha y hora de la cita</span>
			<select name="fecha_hora_cita" class="form-control col-6">
				@foreach($m1 as $m1)
				<option>{{$m1->dia_tiempo}} de {{$m1->hora_tiempo}}</option>
				@endforeach
			</select>
		</div>
		<div class="col-12">
			<span>Motivo de la cita</span>
			<textarea class="form-control col-6" name="comentarios_cita"></textarea >
		</div>
		<div class="col-12">
			<div>
				<br>
				<button class="btn btn-success btn-block col-6">Guardar</button>
			</div>
		</div>
	</div>
</div>
</form>                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->

        <!-- ##### Footer Area Start ##### -->
        <footer class="footer-area">
        <div class="main-footer-area section-padding-100-0">
            <div class="container">
                <div class="row">
                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget mb-100">
                            <div class="widget-title">
                                <a href="#"><img src="public/img/core-img/logo2.png" alt=""></a>
                            </div>
                            <p align="justify">Las plantas de cart&oacute;n corrugado juegan un 
papel esencial en la industria en general ya que proveen de material de empaque para productos agr&iacute;colas, qu&iacute;micos e industriales.</p>
                            <div class="footer-social-info">
                            </div>
                        </div>
                    </div>
                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget mb-100">
                            <div class="widget-title">
                                <h6>Usa los links</h6>
                            </div>
                            <nav>
                                <ul class="useful-links">
                                    <li><a href="{{ url('/index') }}">Inicio</a></li>
                                    <li><a href="{{ url('/contact') }}">Contactanos</a></li>
                                    <li><a href="{{ url('/productos') }}">Productos</a></li>
                                    <li><a href="{{ url('/login') }}">Sistema</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget mb-100">
                            <div class="widget-title">
                                <h6>Galeria</h6>
                            </div>

                            <div class="gallery-list d-flex justify-content-between flex-wrap" id="galeria">

                                <a href="public/img/bg-img/empresa.png" class="gallery-img" title="Bodegas de la empresa" ><img src="public/img/bg-img/empresa.png" ></a> 
                                <a href="public/img/bg-img/almacen.png" class="gallery-img" title="Almacen"><img src="public/img/bg-img/almacen.png" alt=""></a>
                                <a href="public/img/bg-img/almacen2.png" class="gallery-img" title="Almacen2"><img src="public/img/bg-img/almacen2.png" alt=""></a>
                                <a href="public/img/bg-img/rollos.png" class="gallery-img" title="Almacen de rollos"><img src="public/img/bg-img/rollos.png" alt=""></a>
                                <a href="public/img/bg-img/corrugadora.png" class="gallery-img" title="Corrugadora Principal"><img src="public/img/bg-img/corrugadora.png" alt=""></a>
                                <a href="public/img/bg-img/modulos.png" class="gallery-img" title="Plancha"><img src="public/img/bg-img/modulos.png" alt=""></a>
                                <a href="public/img/bg-img/grupot.png" class="gallery-img" title="Grupo Tensa Calidad y Servicio"><img src="public/img/bg-img/grupot.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget mb-100">
                            <div class="widget-title">
                                <h6>Contactos</h6>
                            </div>
                            <div class="single-contact d-flex mb-30">
                                <i class="icon-placeholder"></i>
                                <p>Av. de la industria Automitriz, Lerma de Villada, M&eacute;x. CP 52004 </p>
                            </div>
                            <div class="single-contact d-flex mb-30">
                                <i class="icon-telephone-1"></i>
                                <p>Tel: 722 553 2836<br>Oficina: 203-808-8648</p>
                            </div>
                            <div class="single-contact d-flex">
                                <i class="icon-contract"></i>
                                <p>grupotensatoluca@grupotensatoluca.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p>
                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> Derechos Reservados | Grupo Tensa S.A. de C.V.

                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="public/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="public/js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="public/js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="public/js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="public/js/active.js"></script>
    <!-- Google Maps -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwuyLRa1uKNtbgx6xAJVmWy-zADgegA2s"></script>
    <script src="public/js/google-map/map-active.js"></script>
    @endsection

   
</body>