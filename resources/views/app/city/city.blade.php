@extends('layouts.app' , ['title' => "$cities->title", 'description' => "$cities->description"])
@section('content')
    @include('app.includes.header')
    <div class="container">
        <section class="section section-sm section-first bg-default text-left">
            <div class="container">
                <h2>Нерухомість в місті {{ $cities->title }}</h2>
                <div class="row">
                    @foreach($posts as $post)
                        <div class="col-xl-6 d-none d-xl-block">
                            <div class="card-body">
                                <img src="{{ $post->img ?? asset('/images/no-image.jpg') }}" alt="{{ $post->title }}">
                                <div class="card-title">{{ $post->title }}</div>
                                <p class="card-text">{{ $post->getContentPreview() }}</p>
                                <h4>Ціна від: {{ $post->price }} M<sup>2</sup></h4>
                                <h5>Додано: {{ $post->createdAtForHumans() }}</h5>
                                <div class="mt-4">
                                    <h5 class="product-big-title">Місто: <a href="{{ route('city.more', $post->city->slug) }}"">
                                            {{$post->city->title}}</a></h5>
                                </div>
                                <a class="button button-black-outline button-ujarak" href="{{ route('post.more', $post->slug) }}">Докладніше</a>
                            </div>
                        </div>
                    @endforeach

                </div>
                <div class="mx-auto my-4" style="width: max-content">{{ $posts->links() }}</div>
            </div>
        </section>
    </div>
        <hr>
    @include('app.includes.footer')
@endsection
