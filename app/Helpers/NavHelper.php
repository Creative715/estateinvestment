<?php

namespace App\Helpers;

if (! function_exists('activeMainLink')) {
    function activeMainLink() {
        if(request()->is('/')) {
            return 'active';
        }
        return '';
    }
}

if (! function_exists('activeEestateLink')) {
    function activeEestateLink (){
        if((request()->is('estates') or request()->is('estate/*'))) {
            return 'active';
        }
        return '';
    }
}

if (! function_exists('activePageLink')) {
    function activePageLink (){
        if((request()->is('page') or request()->is('page/*'))) {
            return 'active';
        }
        return '';
    }
}

if (! function_exists('activeCategoryLink')) {
    function activeCategoryLink (){
        if((request()->is('category') or request()->is('category/*'))) {
            return 'active';
        }
        return '';
    }
}

if (! function_exists('activeCityLink')) {
    function activeCityLink (){
        if((request()->is('city') or request()->is('city/*'))) {
            return 'active';
        }
        return '';
    }
}
