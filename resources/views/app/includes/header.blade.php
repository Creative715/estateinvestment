<header class="section page-header">
    <!-- RD Navbar-->
    <div class="rd-navbar-wrap">
        <nav class="rd-navbar rd-navbar-corporate" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed"
             data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static"
             data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static"
             data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static"
             data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px"
             data-xxl-stick-up-offset="106px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1"
                 data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>
            <div class="rd-navbar-aside-outer">
                <div class="rd-navbar-aside">
                    <!-- RD Navbar Panel-->
                    <div class="rd-navbar-panel">
                        <!-- RD Navbar Toggle-->
                        <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span>
                        </button>
                        <!-- RD Navbar Brand-->
                        <div class="rd-navbar-brand">
                            <!--Brand--><a class="brand" href="/"><h4><img src="{{ asset('/images/logo.png') }}"
                                                                           alt="Нерухомість у Польщі"> Estateinvestment
                                </h4></a>
                        </div>
                    </div>
                    <div class="rd-navbar-aside-right rd-navbar-collapse">
                        <ul class="rd-navbar-corporate-contacts">
                            <li>
                                <div class="unit unit-spacing-xs">
                                    <div class="unit-left"><span class="icon fa fa-clock-o"></span></div>
                                    <div class="unit-body">
                                        <a class="link-phone" href="tel:48575707823"><h4><i class="fas fa-phone"></i> +48(575)70-78-23</h4></a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="unit unit-spacing-xs">
                                    <div class="unit-body">
                                        <div class="row">
                                            <div class="col col-md-6 text-center"><a class="link-phone" target="_blank" href="viber://chat?number=48575707823"><h4><i class="fab fa-viber"></i></h4></a></div>
                                            <div class="col col-md-6 text-center"><a class="link-phone" target="_blank" href="https://api.whatsapp.com/send?phone=48575707823"><h4><i class="fab fa-whatsapp "></i></h4></a></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <a data-toggle="modal" data-target="#Modal" class="button button-md button-default-outline-2 button-ujarak" href="#">Замовити дзвінок</a>
                    </div>
                </div>
            </div>
            <div class="rd-navbar-main-outer">
                <div class="rd-navbar-main">
                    <div class="rd-navbar-nav-wrap">
                        <ul class="list-inline list-inline-md">
                            <li><a href="#"><i style="color: #fff;" class="fab fa-facebook-f fa-2x"></i></a></li>
                            <li><a href="#"><i style="color: #fff;" class="fab fa-instagram fa-2x"></i></a></li>
                        </ul>
                        <ul class="rd-navbar-nav">
                            <li class="rd-nav-item {{ $mainLink }}"><a class="rd-nav-link" href="{{ url('/') }}">Головна</a>
                            </li>
                            <li class="rd-nav-item {{ $estateLink }}"><a class="rd-nav-link" href="{{ route('estates') }}">Вся
                                    нерухомість</a>
                            </li>
                            <li class="rd-nav-item {{ $categoryLink }}"><a class="rd-nav-link" href="{{ route('category') }}">Категорії
                                    об'єктів</a>
                            </li>
                            <li class="rd-nav-item {{ $cityLink }}"><a class="rd-nav-link" href="{{ route('city') }}">Нерухомість у
                                    містах</a>
                            </li>
                            <li class="rd-nav-item"><a class="rd-nav-link" href="#contact">Контакт</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
