@extends('layouts.app', ['title' => 'Вся нерухомість', 'description' => 'Придбати нерухомість в Польщі'])
@section('content')
    @include('app.includes.header')
    <section class="section section-sm section-first bg-default text-left">
        <div class="container">
            <h2>Вся нерухомість</h2>
            <div class="row">
                @foreach($posts as $post)
                    <div class="col-xl-12">
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
            <div class="mx-auto my-4" style="width: max-content">{{ $posts->links() }}</div>
        </div>
    </section>
    <hr>
    @include('app.includes.footer')
@endsection
