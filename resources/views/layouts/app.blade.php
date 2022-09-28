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
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <title>Нерухомість у Польщі. Придбання та оренда житла у Польщі. Земельні ділянки. Новобудови.</title>

    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Montserrat:400,500,600,700%7CPoppins:400%7CTeko:300,400">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('/font/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
</head>
<!-- Modal -->
{{--<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
{{--    <div class="modal-dialog">--}}
{{--        <div class="modal-content">--}}
{{--            <div class="modal-header">--}}
{{--                <h5 class="modal-title" id="exampleModalLabel">Зворотній дзвінок</h5>--}}
{{--                <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                    <span aria-hidden="true">&times;</span>--}}
{{--                </button>--}}
{{--            </div>--}}
{{--            <div class="modal-body">--}}
{{--                <form class="rd-form rd-form-variant-2 rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="">--}}
{{--                    <div class="row row-14 gutters-14">--}}
{{--                        <div class="col-md-12">--}}
{{--                            <div class="form-wrap">--}}
{{--                                <input class="form-input" id="contact-your-name-2" type="text" name="name" data-constraints="@Required">--}}
{{--                                <label class="form-label" for="contact-your-name-2">Ваше ім'я</label>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-12">--}}
{{--                            <div class="form-wrap">--}}
{{--                                <input class="form-input" id="contact-phone-2" type="text" name="phone" data-constraints="@Numeric">--}}
{{--                                <label class="form-label" for="contact-phone-2">Телефон</label>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <button class="button button-primary button-pipaluk btn-block" type="submit">Надіслати</button>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--            <div class="modal-footer">--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<body>
@yield('content')
<div class="snackbars" id="form-output-global"></div>
<!-- Javascript-->
<script src="{{ asset('js/core.min.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>

</body>
</html>
