<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('url-shortener', function() {
    return 'hello world';
})-> name('url-shortener');
