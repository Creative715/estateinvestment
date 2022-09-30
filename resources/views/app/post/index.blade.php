@extends('layouts.app', ['title' => 'Вся нерухомість', 'description' => 'Придбати нерухомість в Польщі'])
@include('app.includes.header')
@section('content')
    <section class="section section-sm section-first bg-default text-left">
        <div class="container">
            <h2>Вся нерухомість</h2>
            <div class="row">
                @foreach($posts as $post)
                    <div class="col-xl-6 d-none d-xl-block">
                        <div class="card-body">
                            <img class="img-thumbnail" src="{{ $post->img ?? asset('/images/no-image.jpg') }}"
                                 alt="{{ $post->title }}">
                            <div class="mt-4"></div>
                            <div class="card-title"><h4><a
                                        href="{{ route('post.more', $post->slug) }}">{{ $post->title }}</a></h4></div>
                            <p class="card-text">{!! $post->getContentPreview() !!}</p>
                            <h4>Ціна від: {{ $post->price }} M<sup>2</sup></h4>
                            <h5>Додано: {{ $post->createdAtForHumans() }}</h5>
                            <div class="mt-4">
                              <h4>Місто: <a href="{{ route('city.more', $post->city->slug) }}" class="badge bg-info"><h4>{{$post->city->title}}</h4></a></h4>
                            </div>
                            <a class="button button-black-outline button-ujarak"
                               href="{{ route('post.more', $post->slug) }}">Докладніше</a>
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="mx-auto my-4" style="width: max-content">{{ $posts->links() }}</div>
        </div>
    </section>

@endsection
