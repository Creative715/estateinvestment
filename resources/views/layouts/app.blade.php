<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('/favicon.ico') }}">
    <title>{{ $title ?? 'Нерухомість у Польщі. Придбання та оренда житла у Польщі. Земельні ділянки. Новобудови.' }}</title>
    <meta name="description" content="{{ $description ?? 'Нерухомість у Польщі. Придбання та оренда житла у Польщі. Земельні ділянки. Новобудови.' }}">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Montserrat:400,500,600,700%7CPoppins:400%7CTeko:300,400">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('font/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
</head>
<!-- Modal -->
<div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Зворотній дзвінок</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('phone') }}">
                    @csrf
                    <div class="row row-14 gutters-14">
                        <div class="col-md-12">
                            <div class="form-wrap">
                                <input class="form-input" id="contact-your-name-2" type="text" name="name" required>
                                <label class="form-label" for="contact-your-name-2">Ваше ім'я</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-wrap">
                                <input class="form-input" id="contact-phone-2" type="text" name="phone" required>
                                <label class="form-label" for="contact-phone-2">Телефон</label>
                            </div>
                        </div>
                    </div>
                    <button class="button button-primary button-pipaluk btn-block" type="submit">Надіслати</button>
                </form>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>
<body>
<div class="preloader">
    <div class="preloader-body">
        <div class="cssload-container">
            <div class="cssload-speeding-wheel"></div>
        </div>
        <p>Завантаження...</p>
    </div>
</div>
<div class="page">
@yield('content')
</div>
<div class="snackbars" id="form-output-global"></div>
<!-- Javascript-->
<script src="{{ asset('js/core.min.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>

</body>
</html>
