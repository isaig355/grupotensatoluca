

    
    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 h-100">
                        <div class="header-content h-100 d-flex align-items-center justify-content-between">
                            <div class="academy-logo">
                                <a href="{{ url('/index') }}"><img  src="public/img/core-img/logo2.png" width="150" height="150" ></a>
                            </div>
                            <div class="login-content">
                                <a href="{{ url('/page-login') }}">Registrate / Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="academy-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="academyNav">

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="{{ url('/index') }}">Inicio</a></li>

                                    <li><a href="{{ url('/about-us') }}">Acerca de</a></li>
                                    <li><a href="{{ url('/productos') }}">Productos/Calidad</a></li>
                                    <li><a href="{{ url('/contact') }}">Contacto</a></li>
                                    <li><a href="{{ url('/avisos/show') }}">aviso</a></li>
                                    <li><a href="{{ url('/Citas') }}">citas</a></li>

                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>

                        <!-- Calling Info -->
                        <div class="calling-info">
                            <div class="call-center">
                            <a href="{{ url('/index') }}"><img  src="public/img/core-img/logo2.png" width="150" height="150" ></a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
        <!-- ##### Header Area End ##### -->
        @yield('narvar')