<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('frontend.index');
});
Route::get('/login', function(){
    return view('backend.login');
});