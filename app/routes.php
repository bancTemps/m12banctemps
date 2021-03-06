<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/** ------------------------------------------
 *  Route model binding
 *  ------------------------------------------
 */
Route::model('user', 'User');
Route::model('comment', 'Comment');
Route::model('post', 'Post');
Route::model('role', 'Role');
Route::model('service', 'Service');
Route::model('request', 'Solicitud');
Route::model('report', 'Report');
Route::model('category', 'Category');

/** ------------------------------------------
 *  Route constraint patterns
 *  ------------------------------------------
 */
Route::pattern('comment', '[0-9]+');
Route::pattern('post', '[0-9]+');
Route::pattern('user', '[0-9]+');
Route::pattern('role', '[0-9]+');
Route::pattern('token', '[0-9a-z]+');
Route::pattern('blog', '[a-z]+');
Route::pattern('report', '[0-9]+');
Route::pattern('category', '[0-9a-z]+');

/** ------------------------------------------
 *  Admin Routes
 *  ------------------------------------------
 */
Route::group(array('prefix' => 'admin', 'before' => 'auth'), function()
{
   
    #Categories Management
    Route::get('categories/{category}/show', 'AdminCategoriesController@getShow');
    Route::get('categories/{category}/edit', 'AdminCategoriesController@getEdit');
    Route::post('categories/{category}/edit', 'AdminCategoriesController@postEdit');
    Route::get('categories/{category}/delete', 'AdminCategoriesController@getDelete');
    Route::post('categories/{category}/delete', 'AdminCategoriesController@postDelete');
    Route::controller('categories', 'AdminCategoriesController');

    # Comment Management
    Route::get('comments/{comment}/edit', 'AdminCommentsController@getEdit');
    Route::post('comments/{comment}/edit', 'AdminCommentsController@postEdit');
    Route::get('comments/{comment}/delete', 'AdminCommentsController@getDelete');
    Route::post('comments/{comment}/delete', 'AdminCommentsController@postDelete');
    Route::controller('comments', 'AdminCommentsController');

    # Blog Management
    Route::get('blogs/{post}/show', 'AdminBlogsController@getShow');
    Route::get('blogs/{post}/edit', 'AdminBlogsController@getEdit');
    Route::post('blogs/{post}/edit', 'AdminBlogsController@postEdit');
    Route::get('blogs/{post}/delete', 'AdminBlogsController@getDelete');
    Route::post('blogs/{post}/delete', 'AdminBlogsController@postDelete');
    Route::controller('blogs', 'AdminBlogsController');

    # User Management
    Route::get('users/{user}/show', 'AdminUsersController@getShow');
    Route::get('users/{user}/edit', 'AdminUsersController@getEdit');
    Route::post('users/{user}/edit', 'AdminUsersController@postEdit');
    Route::get('users/{user}/delete', 'AdminUsersController@getDelete');
    Route::post('users/{user}/delete', 'AdminUsersController@postDelete');
    Route::controller('users', 'AdminUsersController');
    
    # User Role Management
    Route::get('roles/{role}/show', 'AdminRolesController@getShow');
    Route::get('roles/{role}/edit', 'AdminRolesController@getEdit');
    Route::post('roles/{role}/edit', 'AdminRolesController@postEdit');
    Route::get('roles/{role}/delete', 'AdminRolesController@getDelete');
    Route::post('roles/{role}/delete', 'AdminRolesController@postDelete');
    Route::controller('roles', 'AdminRolesController');
    
    # Report Management
    Route::get('reports/{report}/blockUser', 'AdminReportsController@getBlockUser');
    Route::post('reports/{report}/blockUser', 'AdminReportsController@postBlockUser');
    Route::get('reports/{report}/rejectReport', 'AdminReportsController@getRejectReport');
    Route::controller('reports', 'AdminReportsController');

    # Admin Dashboard
    Route::controller('/', 'AdminDashboardController');
});


/** ------------------------------------------
 *  Frontend Routes
 *  ------------------------------------------
 */

// User reset routes
Route::get('user/reset/{token}', 'UserController@getReset');
// User password reset
Route::post('user/reset/{token}', 'UserController@postReset');
//:: User Account Routes ::
Route::post('user/{user}/edit', 'UserController@postEdit');
//:: User Account Routes ::
Route::post('user/login', 'UserController@postLogin');

//Vista del crear servicio
Route::get('user/services/create','UserController@createService');
//Lista de lso servicios por ajax, devolviendo un json con los datos.
Route::get('user/servicelist','UserController@getServices');
//Lista de lso servicios solicitados por ajax, devolviendo un json con los datos.
Route::get('user/doservicelist','UserController@getDoServices');
//Lista de los servicios consumidos por ajax, devolviendo un json con los datos.
Route::get('user/doconsumedlist','UserController@getConsumedServices');
//Lista de las solicitudes de un usuario
Route::get('user/requestlist','UserController@getRequests');
//Lista los mensajes de una conversacion

Route::get('user/messages/{id}', 'UserController@viewConversation');
Route::get('user/messagelist/{id}','UserController@listMessages');
Route::get('user/newmessage/{id}/{comment}', 'UserController@postMessage')
->where(array('id' => '[0-9]+', 'comment' => '[a-z]+'));


Route::any('user/newmessage/{id}/{comentario}', 'UserController@postMessage')
->where(array('id' => '[0-9]+', 'comentario' => '(\w|\W)+'));


//Edita servicio creado por el usuario desde el datatable:

Route::get('user/services/{service}/deleteService','UserController@getDeleteService');
Route::get('user/services/{service}/descongelarService','UserController@descongelarService');
Route::post('user/services/{service}/deleteService','UserController@postDeleteService');
Route::post('user/services/{service}/editService','UserController@postEditService');
Route::get('user/services/{service}/editService','UserController@getEditService');

//Edita y elimina las solicitudes hechas por un usuario que aun no han sido aceptadas

//Route::get('user/services/{service}/deleteSolicitud','UserController@getDeleteSolicitud');
Route::get('user/services/{solicitud}/deleteSolicitud','UserController@getDeleteSolicitud');
Route::get('user/services/{solicitud}/acceptSolicitud','UserController@getAcceptSolicitud'); 
Route::get('user/services/{solicitud}/rejectSolicitud','UserController@getRejectSolicitud');  
Route::get('user/services/{consumedService}/consumService','UserController@consumService');        
//Comentado porque no sirve de nada
//Route::post('user/servicelist','UserController@getServices');
//Almacenar servicio creado
Route::post('user/services','ServiceController@store');
//Mostrar el servicio
Route::get('user/services','UserController@getServiceIndex');




# User RESTful Routes (Login, Logout, Register, etc)
Route::controller('user', 'UserController');

//:: Application Routes ::

# Filter for detect language
Route::when('contact-us','detectLang');

# Contact Us Static Page
Route::get('contact-us', function()
{
    // Return about us page
    return View::make('site/contact-us');
});
#Solicitudes


#Serveis.
Route::get('service','ServiceController@getIndex');
Route::post('service/{serviceSlug}','ServiceController@postDetail');
Route::get('service/{serviceSlug}','ServiceController@getDetail');

//Crear Servicio
Route::get('view/getJson/{slug}', 'OtherUserController@getOtherServices');
Route::get('view/getJsonService/{slug}', 'OtherUserController@getOtherConsumedServices');
Route::get('view/{view}/service', 'OtherUserController@viewOtherService');
Route::get('view/{view}/report', 'OtherUserController@reportForm');
Route::post('view/{view}/report', 'OtherUserController@postReport');
Route::post('view/{serviceauthor}/add', 'UserController@addFriend');
Route::get('view/{view}', 'OtherUserController@viewOther');


Route::get('request/{service_id}/{user_id}','SolicitudController@createSolicitud');
#Blog y cosas del blog
Route::get('blog', 'BlogController@getIndex');
# Posts - Second to last set, match slug
Route::get('blog/{postSlug}', 'BlogController@getView');
Route::post('blog/{postSlug}', 'BlogController@postView');
Route::get('ajax','SolicitudController@ajax');
#NICOLAS CAGE EN: La busqueda del servicio perdido (parte 1)
Route::post('/', 'ServiceController@getIndex');

# Index Page - Last route, no matches
Route::get('/', array('before' => 'detectLang','uses' => 'ServiceController@getIndex'));
