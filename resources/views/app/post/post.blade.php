@extends('layouts.app')
    @include('app.includes.header')
@section('content')
    <section class="breadcrumbs-custom-inset">
        <div class="breadcrumbs-custom context-dark bg-overlay-60">
            <div class="container">
                <h2 class="breadcrumbs-custom-title">{{ $posts->title }}</h2>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="{{ url('/') }}">Головна</a></li>
                    <li class="active"><a href="{{ route('estates') }}">вся нерухомість</a></li>
                    <li class="active">{{ $posts->title }}</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="section section-sm section-first bg-default text-left">
        <div class="container">
            <div class="row row-40 flex-lg-row-reverse justify-content-xl-between">
                <div class="col-xl-5 d-none d-xl-block">
                        <img class="img-thumbnail" src="{{ $posts->img ?? (asset('images/no-image.jpg')) }}" alt="{{ $posts->title }}" width="800" height="450"/>
                    <div class="my-md-3"></div>
                    <h4>Ціна від: {{ $posts->price }} M<sup>2</sup></h4>
                    <h5>Додано: {{ $posts->createdAtForHumans() }}</h5>
                </div>
                <div class="col-xl-7">
                    <ul class="list-xl box-typography">
                        <li>
                            <h2>{{ $posts->title }}</h2>
                            <p>{!! $posts->content !!}</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
{{--    <section class="section section-sm section-fluid bg-default">--}}
{{--        <div class="container">--}}
{{--            <h3>Destinations</h3>--}}
{{--        </div>--}}
{{--        <!-- Owl Carousel-->--}}
{{--        <div class="owl-carousel owl-classic owl-timeline" data-items="1" data-md-items="2" data-lg-items="3" data-xl-items="4" data-margin="30" data-autoplay="false" data-nav="true" data-dots="true">--}}
{{--            <div class="owl-item">--}}
{{--                <!-- Thumbnail Classic-->--}}
{{--                <article class="thumbnail thumbnail-mary">--}}
{{--                    <div class="thumbnail-mary-figure"><img src="{{ asset('images/gallery-image-11-420x308.jpg') }}" alt="" width="420" height="308"/>--}}
{{--                    </div>--}}
{{--                    <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/gallery-image-11-1200x800-original.jpg" data-lightgallery="item"><img src="images/gallery-image-11-420x308.jpg" alt="" width="420" height="308"/></a>--}}
{{--                    </div>--}}
{{--                </article>--}}
{{--                <div class="thumbnail-mary-description">--}}
{{--                    <h5 class="thumbnail-mary-project"><a href="#">France</a></h5><span class="thumbnail-mary-decor"></span>--}}
{{--                    <h5 class="thumbnail-mary-time">--}}
{{--                    </h5>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="owl-item">--}}
{{--                <!-- Thumbnail Classic-->--}}
{{--                <article class="thumbnail thumbnail-mary">--}}
{{--                    <div class="thumbnail-mary-figure"><img src="images/gallery-image-12-420x308.jpg" alt="" width="420" height="308"/>--}}
{{--                    </div>--}}
{{--                    <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/gallery-image-12-1200x800-original.jpg" data-lightgallery="item"><img src="images/gallery-image-12-420x308.jpg" alt="" width="420" height="308"/></a>--}}
{{--                    </div>--}}
{{--                </article>--}}
{{--                <div class="thumbnail-mary-description">--}}
{{--                    <h5 class="thumbnail-mary-project"><a href="#">Italy</a></h5><span class="thumbnail-mary-decor"></span>--}}
{{--                    <h5 class="thumbnail-mary-time">--}}
{{--                    </h5>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="owl-item">--}}
{{--                <!-- Thumbnail Classic-->--}}
{{--                <article class="thumbnail thumbnail-mary">--}}
{{--                    <div class="thumbnail-mary-figure"><img src="images/gallery-image-13-420x308.jpg" alt="" width="420" height="308"/>--}}
{{--                    </div>--}}
{{--                    <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/gallery-image-13-1200x800-original.jpg" data-lightgallery="item"><img src="images/gallery-image-13-420x308.jpg" alt="" width="420" height="308"/></a>--}}
{{--                    </div>--}}
{{--                </article>--}}
{{--                <div class="thumbnail-mary-description">--}}
{{--                    <h5 class="thumbnail-mary-project"><a href="#">Egypt</a></h5><span class="thumbnail-mary-decor"></span>--}}
{{--                    <h5 class="thumbnail-mary-time">--}}
{{--                    </h5>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="owl-item">--}}
{{--                <!-- Thumbnail Classic-->--}}
{{--                <article class="thumbnail thumbnail-mary">--}}
{{--                    <div class="thumbnail-mary-figure"><img src="images/gallery-image-14-420x308.jpg" alt="" width="420" height="308"/>--}}
{{--                    </div>--}}
{{--                    <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/gallery-image-14-1200x800-original.jpg" data-lightgallery="item"><img src="images/gallery-image-14-420x308.jpg" alt="" width="420" height="308"/></a>--}}
{{--                    </div>--}}
{{--                </article>--}}
{{--                <div class="thumbnail-mary-description">--}}
{{--                    <h5 class="thumbnail-mary-project"><a href="#">Dubai</a></h5><span class="thumbnail-mary-decor"></span>--}}
{{--                    <h5 class="thumbnail-mary-time">--}}
{{--                    </h5>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="owl-item">--}}
{{--                <!-- Thumbnail Classic-->--}}
{{--                <article class="thumbnail thumbnail-mary">--}}
{{--                    <div class="thumbnail-mary-figure"><img src="images/gallery-image-15-420x308.jpg" alt="" width="420" height="308"/>--}}
{{--                    </div>--}}
{{--                    <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/gallery-image-15-1200x800-original.jpg" data-lightgallery="item"><img src="images/gallery-image-15-420x308.jpg" alt="" width="420" height="308"/></a>--}}
{{--                    </div>--}}
{{--                </article>--}}
{{--                <div class="thumbnail-mary-description">--}}
{{--                    <h5 class="thumbnail-mary-project"><a href="#">Spain</a></h5><span class="thumbnail-mary-decor"></span>--}}
{{--                    <h5 class="thumbnail-mary-time">--}}
{{--                    </h5>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="owl-item">--}}
{{--                <!-- Thumbnail Classic-->--}}
{{--                <article class="thumbnail thumbnail-mary">--}}
{{--                    <div class="thumbnail-mary-figure"><img src="images/gallery-image-16-420x308.jpg" alt="" width="420" height="308"/>--}}
{{--                    </div>--}}
{{--                    <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/gallery-image-16-1200x800-original.jpg" data-lightgallery="item"><img src="images/gallery-image-16-420x308.jpg" alt="" width="420" height="308"/></a>--}}
{{--                    </div>--}}
{{--                </article>--}}
{{--                <div class="thumbnail-mary-description">--}}
{{--                    <h5 class="thumbnail-mary-project"><a href="#">Africa</a></h5><span class="thumbnail-mary-decor"></span>--}}
{{--                    <h5 class="thumbnail-mary-time">--}}
{{--                    </h5>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <hr>
        @include('app.includes.footer')
@endsection


