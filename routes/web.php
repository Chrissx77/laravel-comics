<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $name = "Christian";
    $lastname = "Garozzo";

    return view("pages.index", compact("name", "lastname"));
});
