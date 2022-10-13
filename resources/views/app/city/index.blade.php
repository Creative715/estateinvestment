@extends('layouts.app')
@include('app.includes.header')
@section('content')
    <div class="container">
<section id="city" class="section section-sm">
    <div class="container">
        <h3>Нерухомість у містах</h3>
        <div class="row row-30">
            @foreach($cities as $city)
                <div class="col-sm-6 col-lg-4">
                    <article class="box-icon-classic">

                        <div class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                            <div class="unit-body">
                                <h5 class="box-icon-classic-title"><a href="{{ route('city.more', $city->slug) }}">{{ $city->title }}</a></h5>
                                <p class="box-icon-classic-text">{!! $city->getContentPreview() !!} </p>
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
