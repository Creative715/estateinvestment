@extends('layouts.app' , ['title' => "$cities->title", 'description' => "$cities->description"])
@section('content')
    @include('app.includes.header')
    <div class="container">
        <section class="section section-sm section-first bg-default text-left">
            <div class="container">
                <h2>Нерухомість в місті {{ $cities->title }}</h2>
                {!! $cities->description !!}
                <div class="row">
                    @foreach($posts as $post)
                        <div class="col-xl-6">
                            <div class="card-body">
                                <img style="height: 350px; width: 550px;" class="img-thumbnail" src="{{ $post->img ?? asset('/images/no-image.jpg') }}" alt="{{ $post->title }}">
                                <div class="card-title">
                                    <div class="mt-4"></div>
                                    <h4><a href="{{ route('post.more', $post->slug) }}">{{ $post->title }}</a></h4>
                                </div>
                                <p class="card-text">{!! $post->getContentPreview() !!}</p>
                                <h4>Ціна: {{ $post->price }}</h4>
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
