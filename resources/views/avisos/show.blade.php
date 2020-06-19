<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Acerca de</title>

    <!-- Favicon -->
    <link rel="icon" href="public/img/core-img/logo.png">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="../public/style.css">
<link rel="stylesheet" href="../public/estilos.css">

</head>

<body>
    <!-- ##### Preloader ##### -->
    <div id="preloader">
        <i class="circle-preloader"></i>
    </div>

    @extends('narvar2')
    @section('narvar2')
    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img" style="background-image: url(public/img/bg-img/breadcumb.jpg);">
        <div class="bradcumbContent">
            <h2>Avisos</h2>
        </div>
    </div>
   <div id="slices" style="height: 100px; " ></div>
    <!-- ##### Breadcumb Area End ##### -->
<div class="container">
  @foreach($avisos as $item) 
        <div class="col-sm-12 col-md-4">
          
        <div class="card">

        <img  src="{{asset('storage/app/public/').'/'.$item->foto}}"> 
            <h5>{{$item->titulo}}</h5>
            <p>{{$item->content}}</p>
             <a>Categoria:{{$item->category}}</a>
       
        </div>

        </div>
       @endforeach
    </div>
   

<!-- ##### Footer Area Start ##### -->
<footer class="footer-area">
        <div class="main-footer-area section-padding-100-0">
            <div class="container">
                <div class="row">
                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget mb-100">
                            <div class="widget-title">
                                <a href="#"><img src="../public/img/core-img/logo2.png" alt=""></a>
                            </div>
                            <p align="justify">Las plantas de cart&oacute;n corrugado juegan un papel esencial en la industria en general ya que proveen de material de empaque para productos agr&iacute;colas, químicos e industriales.</p>
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
                                <a href="../public/img/bg-img/empresa.png" class="gallery-img" title="Bodegas de la empresa" ><img src="../public/img/bg-img/empresa.png" ></a> 
                                <a href="../public/img/bg-img/almacen.png" class="gallery-img" title="Almacen"><img src="../public/img/bg-img/almacen.png" alt=""></a>
                                <a href="../public/img/bg-img/almacen2.png" class="gallery-img" title="Almacen2"><img src="../public/img/bg-img/almacen2.png" alt=""></a>
                                <a href="../public/img/bg-img/rollos.png" class="gallery-img" title="Almacen de rollos"><img src="../public/img/bg-img/rollos.png" alt=""></a>
                                <a href="../public/img/bg-img/corrugadora.png" class="gallery-img" title="Corrugadora Principal"><img src="../public/img/bg-img/corrugadora.png" alt=""></a>
                                <a href="../public/img/bg-img/modulos.png" class="gallery-img" title="Plancha"><img src="../public/img/bg-img/modulos.png" alt=""></a>
                                <a href="../public/img/bg-img/grupot.png" class="gallery-img" title="Grupo Tensa Calidad y Servicio"><img src="../public/img/bg-img/grupot.png" alt=""></a>
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
    <script src="../public/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="../public/js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="../public/js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="../public/js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="../public/js/active.js"></script>
    @endsection
</body>

</html>