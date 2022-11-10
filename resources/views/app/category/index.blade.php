@extends('layouts.app', ['title' => "Категорії об'єктів", 'description' => 'Придбати нерухомість в Польщі'])
@section('content')
    @include('app.includes.header')
    <div class="container">
        <section id="category" class="section section-sm">
            <div class="container">
                <h3>Категорії об'єктів</h3>
                <div class="row row-30">
                    @foreach($categories as $category)
                        <div class="col-12 col-sm-6 col-lg-4">
                            <article class="box-icon-classic">
                                <div
                                    class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                                    <div class="unit-body">
                                        <a href="{{ route('category.more', $category->slug) }}"><img
                                                class="img-thumbnail img-prev-m"
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
    </div>
    <hr>
    @include('app.includes.footer')
@endsection
