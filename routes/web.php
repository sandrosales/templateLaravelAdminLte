<?php

use Illuminate\Support\Facades\Route;



Route::get('portal/admin/dashboard', function () {
    return view('portal.app');
});

Route::get('/', function () {
    return view('welcome');
});
