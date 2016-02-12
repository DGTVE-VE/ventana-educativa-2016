<?php
Route::get('home', 'PagesController@home');
Route::get('indexRed','PagesController@indexRed');
Route::get('indexVod','PagesController@indexVod');
Route::get('indexDocentes','PagesController@indexDocentes');
Route::get('viewTable','PagesController@viewTable');
Route::get('indexPublicaciones','PagesController@indexPublicaciones');
//Route::get('integrantesSlider', function ()
//{
//return View::make('red/integrantesSlider');
//});