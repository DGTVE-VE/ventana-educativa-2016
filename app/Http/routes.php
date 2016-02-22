<?php
/*Vistas principales*/
Route::get('home', 'PagesController@home');
Route::get('indexRed','PagesController@indexRed');
Route::get('indexVod','PagesController@indexVod');
Route::get('indexDocentes','PagesController@indexDocentes');
//Route::get('viewTable','PagesController@viewTable');


/*Vistas de páginas secundarias*/
Route::get('publicaciones','PagesController@publicaciones');
Route::get('quienesSomos','PagesController@quienesSomos');
Route::get('areastematicas','PagesController@areastematicas');
Route::get('proyectos','PagesController@proyectos');
Route::get('contacto','PagesController@contacto');

/*Vistas de administración Formularios*/
Route::get('frmbanner','PagesController@frmbanner');
Route::get('frmcolaboradores','PagesController@frmcolaboradores');
Route::get('frmproyectos','PagesController@frmproyectos');
Route::get('frmpublicaciones','PagesController@frmpublicaciones');
Route::get('usuarios','PagesController@usuarios');

