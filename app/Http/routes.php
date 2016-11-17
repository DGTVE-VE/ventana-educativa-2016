<?php

/* * **************************HOME VENTANA********************** */

/* Las rutas dentro de este grupo, tienen sesión */
Route::group(['middleware' => 'web'], function () {
    /*     * ************************ Autenticación ************************ */
    Route::resource('user', 'Api\User');

    Route::get('user/existEmail/{email}', ['as' => 'user.existEmail', 'uses' => 'Api\User@existEmail']);
    Route::get('existeCCT/{cct}', 'VentanaController@existeCCT');
//    Route::get('user/existNick/{nickname}', ['as' => 'user.existNick', 'uses' => 'Api\User@existNick']);
    Route::get('login', 'SessionsController@create');
    Route::get('logout', 'SessionsController@destroy');
    /*     * ************************ Autenticación ************************ */

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
    Route::any('registro', 'VentanaController@registro');
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
	Route::get('educamedia/sea', 'MediatecaController@sea');
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
	Route::get('educamedia/sea/calculo', 'MediatecaController@SEAcalculo');
	Route::get('educamedia/sea/salud', 'MediatecaController@SEAsalud');
	Route::get('educamedia/sea/familia', 'MediatecaController@SEAfamilia');
	Route::get('educamedia/sea/lengua', 'MediatecaController@SEAlengua');

    Route::get('educamedia/telebachillerato/Propedéutico', 'MediatecaController@componente');
	Route::get('educamedia/breadcrumbs', 'MediatecaController@generaBreadCrumbs');

//    Route::get('educamedia/videos', 'MediatecaController@videos');
//    Route::get('educamedia/test', 'MediatecaController@test');
//    Route::get('educamedia/getVideosTelesec', 'MediatecaController@getVideosTelesec');
//    Route::get('store','MediatecaController@store');

    Route::post('educamedia/rate', 'MediatecaController@guardaRating');
    Route::post('educamedia/comment/telesecundaria', 'MediatecaController@storeTelesecundariaComment');
    Route::get('educamedia/telesecundaria/comments/{id}', 'MediatecaController@telesecundariaComments');
    Route::post('educamedia/comment/telebachillerato', 'MediatecaController@storeTelebachilleratoComment');
    Route::get('educamedia/comments/telebachillerato/{id}', 'MediatecaController@telebachilleratoComments');
    Route::get('educamedia/rating/telesecundaria/{id}', 'MediatecaController@getRatingTelesecundaria');
    Route::get('educamedia/rating/telebachillerato/{id}', 'MediatecaController@getRatingTelebachillerato');
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

    Route::get('redmite/administra/listaColabora', 'RedmiteController@listadoColaboradores');
    Route::get('redmite/administra/guardaDecision/{usuario}/{resultado}', 'RedmiteController@guardaDecisionColabora');
    /*     * **************************REDMITE********************** */

    /*     * **************************Educaplay********************** */
    Route::get('educaplay', 'EducaplayController@educaplay');
    Route::get('educaplay/detalleSeries/{serieId}/{urlVideo}/{videoId}', 'EducaplayController@series');
    Route::get('educaplay/descripciones/{serieId}', 'EducaplayController@descripciones');
    Route::get('educaplay/descripciones/temporada/{serieId}/{temporada}', 'EducaplayController@temporada');
    Route::get('educaplay/videoSerie', 'EducaplayController@videoSerie');
    Route::post('educaplay/rate', 'EducaplayController@guardaRating');
    Route::post('educaplay/guardaComentaVideo', 'EducaplayController@guardaComentaVideo');
    Route::get('educaplay/comentarioVideo/{videoId}', 'EducaplayController@comentariosVideo');
    Route::get('educaplay/comentarioSerie/{serieId}', 'EducaplayController@comentariosSerie');
    Route::post('educaplay/guardaTranscurrido', 'EducaplayController@guardaTiempoTranscurrido');

    Route::any('agregaMiLista', 'EducaplayController@agregaMiLista');
    Route::any('votacion', 'EducaplayController@votacion');
    Route::any('guardaposicion', 'EducaplayController@guardaposicion');
    Route::post('educaplay/queryRate', 'EducaplayController@queryRate');

    /*     * **************************Educaplay********************** */


    /*     * **************************Cultura********************** */
    Route::get('cultura', 'CulturaController@cultura');
    /*     * **************************Cultura********************** */

    /*     * **************************Cultura********************** */
    Route::get('biblioteca', 'BibliotecaController@biblioteca');
    Route::get('biblioteca/tomos/{pais}/{categoria}', 'BibliotecaController@tomos');
    /*     * **************************Cultura********************** */

    /*     * **************************Docente********************** */
    Route::get('docente', 'DocenteController@docente');
    Route::resource('docente/calendario', 'DocenteController@calendario');
    Route::get('docente/mimaterial', 'DocenteController@mimaterial');
    Route::get('docente/materialapoyo', 'DocenteController@materialapoyo');
    Route::get('docente/foros', 'DocenteController@foros');
    /*     * **************************Docente********************** */


    /*     * **************************Administración********************** */
    Route::get('admin', 'AdminController@admin');
    /*     * **************************Administración********************** */

    /*     * **************************Conocenos********************** */
    Route::get('conocenos', 'ConocenosController@conocenos');
    Route::get('bannerInicial', 'ConocenosController@bannerInicial');
    Route::get('slider', 'ConocenosController@slider');
    Route::get('noticias', 'ConocenosController@noticias');
    Route::get('mapa', 'ConocenosController@mapa');
    Route::get('pie', 'ConocenosController@pie');
    Route::get('cubos', 'ConocenosController@cubos');
    Route::post('guardaContactoConocenos', 'ConocenosController@guardaContactoConocenos');
    Route::post('conocenos/guardaCorreoNewsLetterConocenos', 'ConocenosController@guardaCorreoNewsLetterConocenos');
    Route::get('conocenos/activaCorreo/{correo}/{hash}', 'ConocenosController@activaCorreoNews');

    /*blog conocenos*/
    Route::resource('conocenos/blog', 'ConocenosBlogController');
    Route::post('conocenos/blog/comment', 'ConocenosBlogController@comment');
    /**/

    /*     * **************************Fin Conocenos********************** */
    Route::resource('Admin/biblioteca', 'Admin\\bibliotecaController');
	Route::resource('admin/proyectos', 'Admin\\ProyectosController');
    Route::resource('admin/publicaciones', 'Admin\\PublicacionesController');
    Route::resource('admin/news', 'Admin\\AdminNewsController');
});

//Route::get ('api/getImagenes/{tipo}/{id}', '');


/* * **********************
 *
 * TESTS
 */

Route::get('mail/test', function () {
//    print Illuminate\Support\Facades\Input::get('email');
//    print Mail::send('mail_templates.test', array(), function( $message )  {
//        $message->from('ventana@televisioneducativa.gob.mx', 'Test Ventana Educativa');
//        $message->to(
//        Illuminate\Support\Facades\Input::get('email'), 'usuario'
//        )->subject('Test Ventana Educativa!');
//    }
//    );
    $message = Swift_Message::newInstance()
        //Give the message a subject
        ->setSubject('Test ventana')
        //Set the From address with an associative array
        ->setFrom(array('ventana@televisioneducativa.gob.mx' => 'Ventana'))
        //Set the To addresses with an associative array
        ->setTo(array('j.israel.toledo@gmail.com'))
        //Give it a body
        ->setBody('My Message')
    //And optionally an alternative body
    //->addPart('<q>Here is the message itself</q>', 'text/html')
    ;

//Create the Transport
    $transport = Swift_SmtpTransport::newInstance('10.16.0.69', 25);
//Create the Mailer using your created Transport
    $mailer = Swift_Mailer::newInstance($transport);

//Send the message
    $result = $mailer->send($message);
    var_dump($result);
});
