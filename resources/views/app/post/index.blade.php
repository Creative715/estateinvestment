@extends('layouts.app')
@include('app.includes.header')
@section('content')
        <section class="section section-sm section-first bg-default text-left">
            <div class="container">
                <h2>Вся нерухомість</h2>
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
                                Місто:
                                @foreach ($post->cities as $city)
                                    <a href="#" class="badge bg-info">{{$city->title}}</a>
                                @endforeach
                            </div>
                            <a class="button button-black-outline button-ujarak" href="{{ route('post.more', $post->slug) }}">Докладніше</a>
                        </div>
                    </div>
                    @endforeach

                </div>
                <div class="mx-auto my-4" style="width: max-content">{{ $posts->links() }}</div>
            </div>
        </section>





@endsection
