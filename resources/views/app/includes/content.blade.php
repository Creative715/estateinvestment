<!-- Swiper-->
<section class="section swiper-container swiper-slider swiper-slider-corporate swiper-pagination-style-2"
         data-loop="true" data-autoplay="5000" data-simulate-touch="true" data-nav="false" data-direction="vertical">
    <div class="swiper-wrapper text-left">
        <div class="swiper-slide context-dark" data-slide-bg="{{ asset('images/slider-4-slide-1-1920x678.jpg') }}">
            <div class="swiper-slide-caption section-md">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10">
                            <h2 class="oh font-weight-light" data-caption-animate="slideInUp" data-caption-delay="100">
                                <span>Новобудови</span><span class="font-weight-bold"> у Польщі</span></h2><a
                                class="button button-default-outline button-ujarak"
                                href="{{ url('/category/novobudovi') }}" data-caption-animate="fadeInLeft"
                                data-caption-delay="0">Докладніше</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-slide context-dark" data-slide-bg="images/slider-4-slide-2-1920x678.jpg">
            <div class="swiper-slide-caption section-md">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10">

                            <h2 class="oh font-weight-light" data-caption-animate="slideInUp" data-caption-delay="100">
                                <span>Оренда</span><span class="font-weight-bold"> житла у Польщі</span></h2><a
                                class="button button-default-outline button-ujarak"
                                href="{{ url('/category/orenda-zitla') }}" data-caption-animate="fadeInLeft"
                                data-caption-delay="0">Докладніше</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-slide context-dark" data-slide-bg="{{ asset('images/slider-4-slide-3-1920x678.jpg') }}">
            <div class="swiper-slide-caption section-md">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10">

                            <h2 class="oh font-weight-light" data-caption-animate="slideInUp" data-caption-delay="100">
                                <span>Земельні</span><span class="font-weight-bold"> ділянки</span></h2><a
                                class="button button-default-outline button-ujarak"
                                href="{{ url('/category/zemelni-dilianki') }}" data-caption-animate="fadeInLeft"
                                data-caption-delay="0">Докладніше</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-slide context-dark" data-slide-bg="{{ asset('images/slider-4-slide-4-1920x678.jpg') }}">
            <div class="swiper-slide-caption section-md">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10">

                            <h2 class="oh font-weight-light" data-caption-animate="slideInUp" data-caption-delay="100">
                                <span>Придбання</span><span class="font-weight-bold"> нерухомості</span></h2><a
                                class="button button-default-outline button-ujarak"
                                href="{{ url('/category/pridbannia-neruxomosti') }}" data-caption-animate="fadeInLeft"
                                data-caption-delay="0">Докладніше</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="swiper-pagination"></div>
</section>
<section class="section section-lg section-top-1 bg-gray-4">
    <div class="container offset-negative-1">
        <div class="box-categories cta-box-wrap">
            <div class="box-categories-content">
                <div class="row justify-content-center">
                    <div class="col-md-4 wow fadeInDown col-9" data-wow-delay=".2s">
                        <ul class="list-marked-2 box-categories-list">
                            <li><img src="{{ asset('images/cta-3-368x420.jpg') }}" alt="Новинки" width="368"
                                     height="420"/>
                                <h5 class="box-categories-title"><a class="rd-nav-link"
                                                                    href="{{ url('/category/novobudovi') }}">Новобудови</a>
                                </h5>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4 wow fadeInDown col-9" data-wow-delay=".2s">
                        <ul class="list-marked-2 box-categories-list">
                            <li><img src="{{ asset('images/cta-2-368x420.jpg') }}" alt="Придбання нерухомості в Польщі"
                                     width="368" height="420"/>
                                <h5 class="box-categories-title"><a
                                        href="{{ url('/category/pridbannia-neruxomosti') }}">Придбання нерухомості</a>
                                </h5>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4 wow fadeInDown col-9" data-wow-delay=".2s">
                        <ul class="list-marked-2 box-categories-list">
                            <li><img src="{{ asset('images/cta-1-368x420.jpg') }}" alt="Оренда житла Польща" width="368"
                                     height="420"/>
                                <h5 class="box-categories-title"><a href="{{ url('/category/orenda-zitla') }}">Оренда
                                        житла</a></h5>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <a class="link-classic wow fadeInUp" href="{{ route('estates') }}">Вся нерухомість<span></span></a>
    </div>
</section>
<section id="aboutus" class="section section-sm section-first bg-default text-md-left">
    <div class="container">
        <div class="row row-50 align-items-center justify-content-center justify-content-xl-between">
            <div class="col-lg-6 text-center wow fadeInUp"><img src="{{ asset('images/index-3-556x382.jpg') }}" alt=""
                                                                width="556" height="382"/>
            </div>
            <div class="col-lg-6 wow fadeInRight" data-wow-delay=".1s">
                <div class="box-width-lg-470">
                    <h3>Про нас</h3>
                    <div
                        class="tabs-custom tabs-horizontal tabs-line tabs-line-big tabs-line-style-2 text-center text-md-left"
                        id="tabs-7">
                        <ul class="nav nav-tabs">
                            <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-7-1"
                                                                        data-toggle="tab">Досвід</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-7-2"
                                                                        data-toggle="tab">Вибір</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-7-3"
                                                                        data-toggle="tab">Довіра</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tabs-7-1">
                                <p>МИ САМІ КУПУВАЛИ НЕРУХОМІСТЬ <br>
                                    Ми знаємо всі підводні камені та труднощі. <br>
                                    Ми давно працюємо на ринку нерухомості та користуємось повагою та довірою наших
                                    клієнтів. Наша команда – це професіоналізм, досвід, вміння підібрати кращий варіант
                                    саме для Вас.</p>
                                <div class="group-md group-middle"><a class="button button-secondary button-pipaluk"
                                                                      href="{{ url('/page/pro-nas-nasa-diialnist') }}">Докладніше</a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tabs-7-2">
                                <p>Як ми вибираємо об’єкти нерухомості?<br>
                                    В першу чергу ми знаходимо ті будинки, в яких би хотіли жити самі. У нас гарний
                                    смак! Ми не просто беремо у інших агентів фото і розміщуємо у себе на сайті.Ми
                                    відправляємось на об’єкт. Ретельно дивимося на нього. Звіряючи все описане в рекламі
                                    з реальністю.</p>
                                <div class="group-md group-middle"><a class="button button-secondary button-pipaluk"
                                                                      href="{{ url('/page/pro-nas-nasa-diialnist') }}">Докладніше</a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tabs-7-3">
                                <p>ЧОМУ НАМ ДОВІРЯЮТЬ КЛІЄНТ?<br>

                                    Надаємо актуальну інформацію<br>

                                    У своїй роботі ми прагнемо задовольнити побажання всіх сторін угоди. Завдяки широкій
                                    базі нерухомості, ми пропонуємо оптимальні варіанти в співвідношенні ціна / якість.
                                    Ваш комфорт – наша головна задача!
                                </p>
                                <div class="group-md group-middle"><a class="button button-secondary button-pipaluk"
                                                                      href="{{ url('/page/pro-nas-nasa-diialnist') }}">Докладніше</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="catalogue" class="section section-sm">
    <div class="container">
        <h3>Каталог об'єктів</h3>
        <div class="row row-30">
            @foreach($categories as $category)
                <div class="col-sm-6 col-lg-4">
                    <article class="box-icon-classic">
                        <div
                            class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                            <div class="unit-body">
                                <a href="{{ route('category.more', $category->slug) }}"><img class="img-thumbnail img-prev-m"
                                        src="{{ $category->img ?? (asset('images/no-image.jpg')) }}"
                                        alt="{{ $category->title }}"></a>
                                <h5 class="box-icon-classic-title"><a
                                        href="{{ route('category.more', $category->slug) }}">{{ $category->title }}</a>
                                </h5>
                                <p class="box-icon-classic-text"></p>
                            </div>
                        </div>
                    </article>
                </div>
            @endforeach
        </div>
    </div>
</section>
<section id="new" class="section section-sm bg-default">
    <div class="container">
        <h3 class="oh-desktop"><span class="d-inline-block wow slideInDown">Нові надходження</span></h3>
        <div class="row row-sm row-40 row-md-50">
            @foreach($posts as $post)
                <div class="col-sm-12 col-md-12 wow fadeInRight">
                    <article class="product-big">
                        <div class="unit flex-column flex-md-row align-items-md-stretch">
                            <div class="unit-left"><a class="product-big-figure" href="#"><img
                                        src="{{ $post->img ?? asset('/images/no-image.jpg') }}" alt="{{ $post->title }}"
                                        width="600" height="366"/></a></div>
                            <div class="unit-body">
                                <div class="product-big-body">
                                    <h5 class="product-big-title"><a
                                            href="{{ route('post.more', $post->slug) }}">{{ $post->title }}</a></h5>
                                    <p class="product-big-text">{!! $post->getContentPreview() !!}</p>
                                    <h5 class="product-big-title">Додано: {{ $post->createdAtForHumans() }}</h5>
                                    <div class="mt-3">
                                        <h5 class="product-big-title">Місто: <a
                                                href="{{ route('city.more', $post->city->slug) }}">
                                                {{$post->city->title}}</a></h5>
                                    </div>
                                    <a class="button button-black-outline button-ujarak"
                                       href="{{ route('post.more', $post->slug) }}">Докладніше</a>
                                    <div class="product-big-price-wrap"><span
                                            class="product-big-price">Ціна: {{ $post->price }}</span></div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            @endforeach
        </div>
    </div>
</section>
<section id="city" class="section section-sm">
    <div class="container">
        <h3>Нерухомість у містах</h3>
        <div class="row row-30">
            @foreach($cities as $city)
                <div class="col-sm-6 col-lg-4">
                    <article class="box-icon-classic">

                        <div
                            class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                            <div class="unit-body">
                                <a href="{{ route('city.more', $city->slug) }}"><img class="img-thumbnail img-prev-m"
                                                                                     src="{{ $city->img ?? (asset('images/no-image.jpg')) }}"
                                                                                     alt="{{ $city->title }}"></a>
                                <h5 class="box-icon-classic-title"><a
                                        href="{{ route('city.more', $city->slug) }}">{{ $city->title }}</a></h5>
                                <p class="box-icon-classic-text">{!! $city->getContentPreview() !!} </p>
                            </div>
                        </div>
                    </article>
                </div>
            @endforeach
        </div>
    </div>
</section>
<section class="section bg-default text-center offset-top-50">
    <div class="parallax-container" data-parallax-img="{{ asset('images/parallax-1-1920x850.jpg') }}">
        <div class="parallax-content section-xl section-inset-custom-1 context-dark bg-overlay-2-21">
            <div class="container">
                <h2 class="heading-2 oh font-weight-normal wow slideInDown"><span class="d-block font-weight-semi-bold">Заповнивши форму</span><span
                        class="d-block font-weight-light">можна задати запитання</span></h2>
                <p class="text-width-medium text-spacing-75 wow fadeInLeft" data-wow-delay=".1s">І наш менеджер
                    відповість вам на поштову скриньку, або зателефонуює у найближчий час</p>
                <form method="post" action="{{ route('send') }}">
                    @csrf
                    <div class="row row-14 gutters-14">
                        <div class="col-md-4">
                            <div class="form-wrap">
                                <input class="form-input" id="name" type="text" name="name" required>
                                <label class="form-label" for="name">Ваше ім'я</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-wrap">
                                <input class="form-input" id="email" type="email" name="email" required>
                                <label class="form-label" for="email">E-mail</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-wrap">
                                <input class="form-input" id="phone" type="tel" name="phone" required>
                                <label class="form-label" for="phone">Телефон</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-wrap">
                                <label class="form-label" for="massage">Текст запитання</label>
                                <textarea class="form-input textarea-lg" id="massage" name="massage"
                                          required></textarea>
                            </div>
                        </div>
                    </div>
                    <button class="button button-primary button-pipaluk" type="submit">Надісати запитання</button>
                </form>
            </div>
        </div>
    </div>
</section>
{{--<section class="section section-sm section-top-0 section-fluid section-relative bg-gray-4">--}}
{{--    <div class="container-fluid">--}}
{{--        <div></div>--}}
{{--        <h3 class="mt-3">Галерея нерухомості</h3>--}}
{{--        <div class="owl-carousel owl-classic owl-dots-secondary" data-items="1" data-sm-items="2" data-md-items="3" data-lg-items="4" data-xl-items="5" data-xxl-items="6" data-stage-padding="15" data-xxl-stage-padding="0" data-margin="30" data-autoplay="true" data-nav="true" data-dots="true">--}}
{{--            <article class="thumbnail thumbnail-mary">--}}
{{--                <div class="thumbnail-mary-figure"><img src="images/gallery-image-1-270x195.jpg" alt="" width="270" height="195"/>--}}
{{--                </div>--}}
{{--                <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/gallery-image-1-1200x800-original.jpg" data-lightgallery="item"><img src="images/gallery-image-1-270x195.jpg" alt="" width="270" height="195"/></a>--}}
{{--                </div>--}}
{{--            </article>--}}
{{--            <article class="thumbnail thumbnail-mary">--}}
{{--                <div class="thumbnail-mary-figure"><img src="images/gallery-image-2-270x195.jpg" alt="" width="270" height="195"/>--}}
{{--                </div>--}}
{{--                <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/gallery-image-2-1200x800-original.jpg" data-lightgallery="item"><img src="images/gallery-image-2-270x195.jpg" alt="" width="270" height="195"/></a>--}}
{{--                </div>--}}
{{--            </article>--}}
{{--            <article class="thumbnail thumbnail-mary">--}}
{{--                <div class="thumbnail-mary-figure"><img src="images/gallery-image-3-270x195.jpg" alt="" width="270" height="195"/>--}}
{{--                </div>--}}
{{--                <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/gallery-image-3-1200x800-original.jpg" data-lightgallery="item"><img src="images/gallery-image-3-270x195.jpg" alt="" width="270" height="195"/></a>--}}
{{--                </div>--}}
{{--            </article>--}}
{{--            <article class="thumbnail thumbnail-mary">--}}
{{--                <div class="thumbnail-mary-figure"><img src="images/gallery-image-4-270x195.jpg" alt="" width="270" height="195"/>--}}
{{--                </div>--}}
{{--                <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/gallery-image-4-1200x800-original.jpg" data-lightgallery="item"><img src="images/gallery-image-4-270x195.jpg" alt="" width="270" height="195"/></a>--}}
{{--                </div>--}}
{{--            </article>--}}
{{--            <article class="thumbnail thumbnail-mary">--}}
{{--                <div class="thumbnail-mary-figure"><img src="images/gallery-image-5-270x195.jpg" alt="" width="270" height="195"/>--}}
{{--                </div>--}}
{{--                <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/gallery-image-5-1200x800-original.jpg" data-lightgallery="item"><img src="images/gallery-image-5-270x195.jpg" alt="" width="270" height="195"/></a>--}}
{{--                </div>--}}
{{--            </article>--}}
{{--            <article class="thumbnail thumbnail-mary">--}}
{{--                <div class="thumbnail-mary-figure"><img src="images/gallery-image-6-270x195.jpg" alt="" width="270" height="195"/>--}}
{{--                </div>--}}
{{--                <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/gallery-image-6-1200x800-original.jpg" data-lightgallery="item"><img src="images/gallery-image-6-270x195.jpg" alt="" width="270" height="195"/></a>--}}
{{--                </div>--}}
{{--            </article>--}}
{{--            <article class="thumbnail thumbnail-mary">--}}
{{--                <div class="thumbnail-mary-figure"><img src="images/gallery-image-7-270x195.jpg" alt="" width="270" height="195"/>--}}
{{--                </div>--}}
{{--                <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/gallery-image-7-1200x800-original.jpg" data-lightgallery="item"><img src="images/gallery-image-7-270x195.jpg" alt="" width="270" height="195"/></a>--}}
{{--                </div>--}}
{{--            </article>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
