@extends('layouts.app', ['title' => $posts->title, 'description' => $posts->description])
@include('app.includes.header')
@section('content')
    <div class="modal fade" id="ModalImg" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="min-width: 800px !important;" >
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{ $posts->title }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img class="img-thumbnail" src="{{ $posts->img ?? (asset('images/no-image.jpg')) }}"
                         alt="{{ $posts->title }}"/>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
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
                <div class="col-xl-4">
                    <div class="my-md-3"></div>
                    <h4>Ціна: {{ $posts->price }}</h4>
                    <h5>Додано: {{ $posts->createdAtForHumans() }}</h5>
                    <div class="mt-4">
                        <h5 class="product-big-title">Місто: <a href="{{ route('city.more', $posts->city->slug) }}">
                                {{$posts->city->title}}</a></h5>
                    </div>
                </div>
                <div class="col-xl-8">
                    <ul class="list-xl box-typography">
                        <li>
                            <a data-toggle="modal" data-target="#ModalImg" href="#">
                            <img style="width: 800px; height: 470px;" class="img-thumbnail" src="{{ $posts->img ?? (asset('images/no-image.jpg')) }}"
                                 alt="{{ $posts->title }}"/>
                            </a>
                        </li>
                            <h2>{{ $posts->title }}</h2>
                            <p>{!! $posts->content !!}</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-sm section-fluid bg-default">
        <div class="container">
            <h3>----------------------------------------------</h3>
        </div>
        <!-- Owl Carousel-->
        <div class="owl-carousel owl-classic owl-timeline" data-items="1" data-md-items="2" data-lg-items="3" data-xl-items="4" data-margin="30" data-autoplay="false" data-nav="true" data-dots="true">
            @if (count($posts->images)>0)
                @foreach ($posts->images as $img)
                    <div class="owl-item">
                        <article class="thumbnail thumbnail-mary">
                            <div class="thumbnail-mary-figure">
                                <img src="/images/gallery/{{ $img->image }}" alt="" style="with:420px; height: 308px;" srcset="">
                            </div>
                            <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="/images/gallery/{{ $img->image }}" alt="нерухомість у Польщі" width="420" height="308"/></a>
                            </div>
                        </article>
                    </div>
                @endforeach
            @endif
        </div>
    </section>
    <hr>
    @include('app.includes.footer')
@endsection


