<?php

use anlutro\LaravelSettings\Facades\Setting;
use Illuminate\Support\Facades\Storage;

function getLogo(){

    $logo = Storage::disk('mydisk');

    return $logo->url(setting('app_logo'));

}

function getLogoDark(){

    $logo = Storage::disk('mydisk');

    return $logo->url(setting('app_logodark'));

}

function getFavicon(){

    $favicon = Storage::disk('mydisk');

    return $favicon->url(setting('app_favicon'));

}