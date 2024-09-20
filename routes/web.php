<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/add-post-tags', \App\Livewire\AddPostTags::class);
