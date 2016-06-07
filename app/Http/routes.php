<?php






/* * **************************HOME VENTANA********************** */

/* Las rutas dentro de este grupo, tienen sesión */
Route::group(['middleware' => 'web'], function () {
    /* * ************************ Autenticación ************************ */
    Route::resource('user', 'Api\User');

    Route::get('user/existEmail/{email}', ['as' => 'user.existEmail', 'uses' => 'Api\User@existEmail']);
    Route::get('user/existNick/{nickname}', ['as' => 'user.existNick', 'uses' => 'Api\User@existNick']);
    Route::get('login', 'SessionsController@create');
    Route::get('logout', 'SessionsController@destroy');
    /* * ************************ Autenticación ************************ */

    Route::resource('sessions', 'SessionsController');
    Route::auth();
    Route::get('/', 'VentanaController@ventana_educativa');
    Route::get('ventana_educativa', ['as' => 'home', 'uses' => 'VentanaController@ventana_educativa']);
    Route::get('home', 'VentanaController@ventana_educativa');
    Route::resource('sessions', 'SessionsController');
    Route::get('login', 'SessionsController@create');
    Route::get('logout', 'SessionsController@destroy');
    Route::post('cambiaAvatar', 'VentanaController@cambiaAvatar');

    // Password reset link request routes...
    Route::get('password/email', 'Auth\PasswordController@getEmail');
    Route::post('password/email', 'Auth\PasswordController@postEmail');
    //
    //// Password reset routes...
    Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
    Route::post('password/reset', 'Auth\PasswordController@postReset');


    Route::get('verificaCorreo/{correo}/{hash}', 'VentanaController@activaCorreo');
    Route::get('registro', 'VentanaController@registro');
    Route::get('acceso', 'VentanaController@acceso');
    Route::get('presentacion', 'VentanaController@presentacion');
    Route::post('registraUsuario', 'VentanaController@registraUsuario');
    Route::get('correoEnviado', 'VentanaController@correoEnviado');


    Route::get('agregaMiLista', 'VentanaController@agregaMiLista');


    /* REDMITE */
    Route::resource('redmite/blog', 'RedBlogController');
    Route::post('redmite/blog/comment', 'RedBlogController@comment');
    /* /REDMITE */

//Route::get ('testSession','SessionsController@test');
    /*     * **************************HOME VENTANA********************** */



    /*     * **************************educamedia********************** */
    Route::get('educamedia', 'MediatecaController@mediateca');
    Route::get('educamedia/telesecundaria', 'MediatecaController@telesecundaria');
    Route::get('educamedia/telebachillerato', 'MediatecaController@telebachillerato');
    Route::get('educamedia/telesecundaria/primergrado', 'MediatecaController@primergrado');
    /* ejemplo de uso para youtube */
//    Route::get('educamedia/{nivel}/{grado}/{materia}/{bloque}', 'MediatecaController@getVideos');
    Route::get('educamedia/telesecundaria/{grado}/{materia}/{bloque}', 'MediatecaController@getVideosTelesecundaria');
    Route::get('educamedia/telebachillerato/{grado}/{materia}', 'MediatecaController@getVideosTelebachillerato');
//Route::get('mediateca/telesecundaria/1/11', 'MediatecaController@getVideos');

    Route::get('educamedia/telesecundaria/segundogrado', 'MediatecaController@segundogrado');
    Route::get('educamedia/telesecundaria/tercergrado', 'MediatecaController@tercergrado');
    Route::get('educamedia/telebachillerato/semestreI', 'MediatecaController@semestreI');
    Route::get('educamedia/telebachillerato/semestreII', 'MediatecaController@semestreII');
    Route::get('educamedia/telebachillerato/semestreIII', 'MediatecaController@semestreIII');
    Route::get('educamedia/telebachillerato/semestreIV', 'MediatecaController@semestreIV');
    Route::get('educamedia/telebachillerato/semestreV', 'MediatecaController@semestreV');
    Route::get('educamedia/telebachillerato/semestreVI', 'MediatecaController@semestreVI');

    Route::get('educamedia/telebachillerato/Propedéutico', 'MediatecaController@componente');

//    Route::get('educamedia/videos', 'MediatecaController@videos');
//    Route::get('educamedia/test', 'MediatecaController@test');
//    Route::get('educamedia/getVideosTelesec', 'MediatecaController@getVideosTelesec');
//    Route::get('store','MediatecaController@store');

    Route::post('educamedia/rate', 'MediatecaController@guardaRating');
    Route::post('educamedia/comment/telesecundaria', 'MediatecaController@storeTelesecundariaComment');
    Route::get('educamedia/telesecundaria/comments/{id}', 'MediatecaController@telesecundariaComments');
    Route::post('educamedia/comment/telebachillerato', 'MediatecaController@storeTelebachilleratoComment');
    Route::get('educamedia/comments/telebachillerato/{id}', 'MediatecaController@telebachilleratoComments');
    /*     * **************************MEDIATECA********************** */

    /*     * **************************REDMITE********************** */
    /* Vistas principales REDMITE */
//Route::get('/','RedmiteController@redmite');
    Route::get('redmite', 'RedmiteController@redmite');

    /* Vistas de páginas secundarias REDMITE */
    Route::get('redmite/publicaciones', 'RedmiteController@publicaciones');
    Route::get('redmite/quienesSomos', 'RedmiteController@quienesSomos');
    Route::get('redmite/areastematicas', 'RedmiteController@areastematicas');
    Route::get('redmite/proyectos', 'RedmiteController@proyectos');
    Route::get('redmite/contacto', 'RedmiteController@contacto');
    Route::get('redmite/correoValidado', 'RedmiteController@correoValidado');
    Route::get('redmite/contacto', 'RedmiteController@contacto');
    Route::get('correoValidado', 'RedmiteController@correoValidado');


    /* Vistas de administración Formularios REDMITE */
    Route::get('redmite/usuarios', 'RedmiteController@usuarios');
    Route::post('redmite/guardaCorreoNewsLetter', 'RedmiteController@guardaCorreoNewsLetter');
    Route::get('redmite/activaCorreo/{correo}/{hash}', 'RedmiteController@activaCorreoNews');
    Route::post('redmite/guardaContacto', 'RedmiteController@guardaContacto');
    Route::get('redmite/admin/integrantes', 'RedmiteController@integrantes');
    Route::post('redmite/admin/guardaIntegrantes', 'RedmiteController@guardaIntegrantes');
    Route::get('redmite/guardarProyecto', 'RedmiteController@guardarProyecto');
    /*     * **************************REDMITE********************** */

    /*     * **************************Educaplay********************** */
    Route::get('educaplay', 'EducaplayController@educaplay');
    Route::get('educaplay/detalleSeries/{serieId}/{urlVideo}', 'EducaplayController@series');
	Route::get('educaplay/descripciones/{serieId}', 'EducaplayController@descripciones');
	Route::get('educaplay/descripciones/temporada/{serieId}/{temporada}', 'EducaplayController@temporada');
	Route::get('educaplay/videoSerie', 'EducaplayController@videoSerie');
    /*     * **************************Educaplay********************** */


    /*     * **************************Cultura********************** */
    Route::get('cultura', 'CulturaController@cultura');
    /*     * **************************Cultura********************** */

    /*     * **************************Cultura********************** */
    Route::get('biblioteca', 'BibliotecaController@biblioteca');
    Route::get('biblioteca/tomos/{categoria}', 'BibliotecaController@tomos');
    /*     * **************************Cultura********************** */
    
    /*     * **************************Cultura********************** */
    Route::get('docente', 'DocenteController@docente');
    /*     * **************************Cultura********************** */
});

//Route::get ('api/getImagenes/{tipo}/{id}', '');

/* 	------------	Función que extrae e imprime breadcrumbs	-----------	 */

function seleccionaGrado($grado) {
    switch ($grado) {
        case '1': $grado = 'primergrado';
            break;
        case '2': $grado = 'segundogrado';
            break;
        case '3': $grado = 'tercergrado';
            break;
        case 'I': $grado = 'semestreI';
            break;
        case 'II': $grado = 'semestreII';
            break;
        case 'III': $grado = 'semestreIII';
            break;
        case 'IV': $grado = 'semestreIV';
            break;
        case 'V': $grado = 'semestreV';
            break;
        case 'VI': $grado = 'semestreVI';
            break;
    }
    return $grado;
}

function generaBreadCrumbs() {
    $uri = $_SERVER['REQUEST_URI'];
    $uriActual = explode('/', $uri);
    $elemsURI = count($uriActual);
    $j = $elemsURI - 1;
    $termina = false;
    while ($uriActual[$j] != 'educamedia') {
        $j--;
    }
    echo '<a href=' . url($uriActual[$j]);
    echo '>' . strtoupper($uriActual[$j]) . '</a>';
    $hrefCompleta = $uriActual[$j];
    $j++;
    for ($i = $j; $i < $elemsURI; $i++) {
        if (strlen($uriActual[$i]) < 4) {
            $gradoURI = seleccionaGrado($uriActual[$i]);
            $termina = true;
        } else {
            $gradoURI = $uriActual[$i];
        }
        $hrefCompleta = url($hrefCompleta . "/" . $gradoURI);
        echo ' / <a href="' . $hrefCompleta;
        if (strpos($uriActual[$i], '%C3%A9') !== false) {
            $gradoURI = 'Proped&#201;utico';
            $termina = true;
        }
        echo'">' . strtoupper($gradoURI) . '</a>';
        if ($termina == true) {
            break;
        }
    }
}
