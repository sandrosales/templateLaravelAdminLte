<?php

use Illuminate\Support\Facades\Route;

Route::get('portal/admin/dashboard', function () {
    return view('layouts.portal.master');
});

Route::get('/', function () {
    return view('welcome');
});
