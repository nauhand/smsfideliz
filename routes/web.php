<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {return view('welcome');});

//Auth Routes
Auth::routes();
Route::get('/', 'PagesController@login')->name('connexion');
Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
Route::get('/login/sous-compte', 'Auth\LoginController@showSubuserLoginForm');
Route::post('/login/admin', 'Auth\LoginController@adminLogin');
Route::post('/login/sous-compte', 'Auth\LoginController@subuserLogin');

//dashboard route
Route::get('/client/tableau-de-bord', 'ClientController@index')->name('dashboard');

// routes repertoires
Route::get('/client/tableau-de-bord/repertoire', 'ClientController@repertoire')->name('repertoire');
Route::get('/client/tableau-de-bord/repertoire/liste-contact', 'ClientController@listecontact')->name('liste-contact');
Route::get('/client/tableau-de-bord/repertoire/ajouter-contact', 'ClientController@ajoutercontact')->name('ajouter-contact');

// routes campagnes
Route::get('/client/tableau-de-bord/campagnes/liste-campagnes', 'ClientController@listecampagnes')->name('liste-campagnes');
Route::get('/client/tableau-de-bord/campagnes/nouvelle-campagne', 'ClientController@nouvellecampagne')->name('nouvelle-campagne');
Route::get('/client/tableau-de-bord/campagnes/détails-campagnes', 'ClientController@detailscampagne')->name('details-campagne');
Route::get('/client/tableau-de-bord/campagnes/nouvelle-campagne/confirmation', 'ClientController@confirmcampagne')->name('confirm-campagne');

// routes comptes clients et sous comptes
Route::get('/client/tableau-de-bord/comptes/profile-clients', 'ClientController@profileclients')->name('profile-clients');
Route::get('/client/tableau-de-bord/comptes/sous-compte/ajouter', 'ClientController@ajoutersouscompte')->name('ajouter-sous-compte');
Route::get('/client/tableau-de-bord/comptes/sous-compte/liste', 'ClientController@listesouscompte')->name('liste-sous-compte');

// routes finances et rechargement
Route::get('/client/tableau-de-bord/finances/liste-rechargement', 'ClientController@listerecharge')->name('liste-recharge');
Route::get('/client/tableau-de-bord/finances/recharger-souscompte', 'ClientController@rechargesouscompte')->name('recharger-souscompte');
Route::get('/client/tableau-de-bord/finances/demande-rechargement', 'ClientController@demanderecharge')->name('demande-rechargement');

// routes rapports et stats
Route::get('/tableau-de-bord/rapports-et-stats/liste-rapports', 'ClientController@listerapports')->name('liste-rapports');
Route::get('/tableau-de-bord/rapports-et-stats/creer-rapport', 'ClientController@createrapport')->name('create-rapport');

//admin routes
Route::get('/admin/tableau-de-bord/', 'AdminController@index')->name('admin-dash');
Route::get('/admin/tableau-de-bord/finances/recharge-en-attente', 'AdminController@rechargeattente')->name('recharge-attente');
Route::get('/admin/tableau-de-bord/finances/recharger-compte', 'AdminController@rechargecompte')->name('recharger-compte');
Route::get('/admin/tableau-de-bord/comptes/ajouter-clients', 'AdminController@ajouterclients')->name('ajouter-clients');
Route::get('/admin/tableau-de-bord/comptes/liste-clients', 'CreateClientController@index')->name('liste-clients');
Route::resource('addclient', 'CreateClientController');
Route::resource('editclient', 'EditClientController');