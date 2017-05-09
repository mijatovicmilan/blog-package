<?php

Route::group(['namespace' => 'Mijat\Blog\Controllers'], function()
{
    Route::resource('posts', 'PostsController');
});

