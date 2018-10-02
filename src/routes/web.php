<?php

Route::group(['prefix'=>'math','namespace'=>'Uzzaircode\Math'],function(){
    Route::get('/','MathController@index');
    Route::get('/{a}/{b}','MathController@multiply');
});

// 