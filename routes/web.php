<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*---------------------------------------------------------------------------------------*/
//Route  pour contacter l'aadministrateur
Route::get('/contact', 'ContactFormController@create')->name('contact-create');
Route::get('/cgv', 'ContactFormController@cgv')->name('cgv');
Route::get('/cgu', 'ContactFormController@cgu')->name('cgu');
Route::post('/contact', 'ContactFormController@store');
//search
Route::get('/search', 'AnnoncesController@search')->name('search');
/*-----------------------------------------------------------------------------------*/
//Route message pour contacter l'annonceur
Route::post('message', 'UserController@message')->name('message');
/*------------------------------------------------------------------------------------*/
//route annonces frontend
Route::get('/', 'AnnoncesController@index')->name('products.annonces.index');
Route::get('/annonces', 'AnnoncesController@index')->name('products.annonces.index');
Route::get('/annonces/{annonce}-{slug}', 'AnnoncesController@show')->name('show');
Route::get('/annonces/posts/create', 'Admin\AdminAnnoncesController@create')->name('products.annonces.create');
Route::post('/annonces/posts', 'Admin\AdminAnnoncesController@store')->name('products.annonces.store');;
Route::get('/annonces/posts/{annonce}', 'Admin\AdminAnnoncesController@show')->name('annonces.show');

/*---------------------------------------------------------------------------------*/
//Routes resources admin backends
//Route::group(['middleware' => ['restrictToAdmin']], function () {

Route::delete('/annonces/posts/{annonce}', 'Admin\AdminAnnoncesController@destroy');
Route::get('/annonces/posts', 'Admin\AdminAnnoncesController@index')->name('annonces.index');

/*--------------------------------------------------------------------------------------*/
//Route pour valider les annonces backends annonces

Route::get('/annonces/valides', 'Admin\AdminValidesController@index');
Route::patch('/annonces/valides/{annonce}', 'Admin\AdminValidesController@update');
Route::delete('/annonces/valides/{annonce}', 'Admin\AdminValidesController@destroy');
Route::get('/annonces/valides/regionoccitanie', 'Admin\AdminValidesController@occitanie')->name('occitanie');
Route::get('/annonces/valides/regionpaysdelaloire', 'Admin\AdminValidesController@paysdelaloire')->name('paysdelaloire');
Route::get('/annonces/valides/regionbretagne', 'Admin\AdminValidesController@bretagne')->name('bretagne');
Route::get('/annonces/valides/regioncentre', 'Admin\AdminValidesController@centre')->name('centre');
Route::get('/annonces/valides/regionnormandie', 'Admin\AdminValidesController@normandie')->name('normandie');
Route::get('/annonces/valides/regioniledefrance', 'Admin\AdminValidesController@iledefrance')->name('iledefrance');
Route::get('/annonces/valides/regionhautsdefrance', 'Admin\AdminValidesController@hautsdefrance')->name('hautsdefrance');
Route::get('/annonces/valides/regiongrandest', 'Admin\AdminValidesController@grandest')->name('grandest');
Route::get('/annonces/valides/regionbourgogne', 'Admin\AdminValidesController@bourgogne')->name('bourgogne');
Route::get('/annonces/valides/regionauvergne', 'Admin\AdminValidesController@auvergne')->name('auvergne');
Route::get('/annonces/valides/regionprovence', 'Admin\AdminValidesController@provence')->name('provence');
Route::get('/annonces/valides/regioncorse', 'Admin\AdminValidesController@corse')->name('corse');
Route::get('/annonces/valides/regionaquitaine', 'Admin\AdminValidesController@aquitaine')->name('aquitaine');

//});

/*---------------------------------------------------------------------------------------*/
//Route pour afficher les categories d'annonces frontends bottom

Route::get('/annonces/ventesimmobilieres', 'AnnoncesController@ventesimmobilieres')->name('ventesimmobilieres');
Route::get('/annonces/locationsimmobilieres', 'AnnoncesController@locationsimmobilieres')->name('locationsimmobilieres');
Route::get('/annonces/colocations', 'AnnoncesController@colocations')->name('colocations');
Route::get('/annonces/bureauxcommerces', 'AnnoncesController@bureauxcommerces')->name('bureauxcommerces');
Route::get('/annonces/citadines', 'AnnoncesController@citadines')->name('citadines');
Route::get('/annonces/monospaces', 'AnnoncesController@monospaces')->name('monospaces');
Route::get('/annonces/berlines', 'AnnoncesController@berlines')->name('berlines');
Route::get('/annonces/utilitaires', 'AnnoncesController@utilitaires')->name('utilitaires');
Route::get('/annonces/camions', 'AnnoncesController@camions')->name('camions');
Route::get('/annonces/quatrequatre', 'AnnoncesController@quatrequatre')->name('quatrequatre');
Route::get('/annonces/informatique', 'AnnoncesController@informatique')->name('informatique');
Route::get('/annonces/jeuxvideos', 'AnnoncesController@jeuxvideos')->name('jeuxvideos');
Route::get('/annonces/sonimage', 'AnnoncesController@sonimage')->name('sonimage');
Route::get('/annonces/smarphonetelephonie', 'AnnoncesController@smarphonetelephonie')->name('smarphonetelephonie');
Route::get('/annonces/groselectromenagers', 'AnnoncesController@groselectromenagers')->name('groselectromenagers');
Route::get('/annonces/petitselectromenagers', 'AnnoncesController@petitselectromenagers')->name('petitselectromenagers');
Route::get('/annonces/deco', 'AnnoncesController@deco')->name('deco');
Route::get('/annonces/mobiliers', 'AnnoncesController@mobiliers')->name('mobiliers');
/*---------------------------------------------------------------------------------------*/
//Route pour afficher les categories d'annonces frontends
Route::get('/annonces/occitanie', 'AnnoncesController@occitanie')->name('occitanies');
Route::get('/annonces/paysdelaloire', 'AnnoncesController@paysdelaloire')->name('paysdelaloires');
Route::get('/annonces/bretagne', 'AnnoncesController@bretagne')->name('bretagnes');
Route::get('/annonces/centre', 'AnnoncesController@centre')->name('centres');
Route::get('/annonces/normandie', 'AnnoncesController@normandie')->name('normandies');
Route::get('/annonces/iledefrance', 'AnnoncesController@iledefrance')->name('iledefrances');
Route::get('/annonces/hautsdefrance', 'AnnoncesController@hautsdefrance')->name('hautsdefrances');
Route::get('/annonces/grandest', 'AnnoncesController@grandest')->name('grandests');
Route::get('/annonces/bourgogne', 'AnnoncesController@bourgogne')->name('bourgognes');
Route::get('/annonces/auvergne', 'AnnoncesController@auvergne')->name('auvergnes');
Route::get('/annonces/provence', 'AnnoncesController@provence')->name('provences');
Route::get('/annonces/corse', 'AnnoncesController@corse')->name('corses');
Route::get('/annonces/aquitaine', 'AnnoncesController@aquitaine')->name('aquitaines');

//route userprofil
Route::get('/site/profils', 'Site\UserProfilController@index')->name('site.profils.index');
Route::get('/site/profils/create', 'Site\UserProfilController@create')->name('site.profils.create');
Route::post('/site/profils', 'Site\UserProfilController@store')->name('site.profils.store');
Route::get('/site/profils/{annonce}/edit', 'Site\UserProfilController@edit')->name('site.profils.edit');
Route::get('/site/profils/show/{annonce}', 'Site\UserProfilController@show')->name('site.profils.show');
Route::patch('/site/profils/update/{annonce}', 'Site\UserProfilController@update')->name('site.profils.update');
Route::delete('/site/profils/destroy/{annonce}', 'Site\UserProfilController@destroy')->name('site.profils.destroy');
//fin


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
