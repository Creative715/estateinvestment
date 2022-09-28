@extends('layouts.app')
<div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
<div class="preloader">
    <div class="preloader-body">
        <div class="cssload-container">
            <div class="cssload-speeding-wheel"></div>
        </div>
        <p>Завантаження...</p>
    </div>
</div>
<div class="page">
    <!-- Page Header-->
@include('app.includes.header')
@include('app.includes.content')
@include('app.includes.footer')
</div>

