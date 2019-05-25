<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::apiResource('/bungas', 'BungaController');

Route::group(['prefix'=>'user'], function(){
    Route::apiResource('/{user}/transaksis', 'TransaksiController');
});