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

Auth::routes();

Route::get('/connexion', 'PagesController@login')->name('connexion');
Route::get('/tableau-de-bord', 'PagesController@dashboard')->name('dashboard');
// routes repertoires
Route::get('/tableau-de-bord/repertoire', 'PagesController@repertoire')->name('repertoire');
Route::get('/tableau-de-bord/repertoire/liste-contact', 'PagesController@listecontact')->name('liste-contact');
Route::get('/tableau-de-bord/repertoire/ajouter-contact', 'PagesController@ajoutercontact')->name('ajouter-contact');
// routes campagnes
Route::get('/tableau-de-bord/campagnes/liste-campagnes', 'PagesController@listecampagnes')->name('liste-campagnes');
Route::get('/tableau-de-bord/campagnes/nouvelle-campagne', 'PagesController@nouvellecampagne')->name('nouvelle-campagne');
Route::get('/tableau-de-bord/campagnes/détails-campagnes', 'PagesController@detailscampagne')->name('details-campagne');
Route::get('/tableau-de-bord/campagnes/nouvelle-campagne/confirmation', 'PagesController@confirmcampagne')->name('confirm-campagne');
// routes comptes clients et sous comptes
Route::get('/tableau-de-bord/comptes/ajouter-clients', 'PagesController@ajouterclients')->name('ajouter-clients');
Route::get('/tableau-de-bord/comptes/liste-clients', 'PagesController@listeclients')->name('liste-clients');
Route::get('/tableau-de-bord/comptes/profile-clients', 'PagesController@profileclients')->name('profile-clients');
Route::get('/tableau-de-bord/comptes/sous-compte/ajouter', 'PagesController@ajoutersouscompte')->name('ajouter-sous-compte');
Route::get('/tableau-de-bord/comptes/sous-compte/liste', 'PagesController@listesouscompte')->name('liste-sous-compte');
// routes finances et rechargement
Route::get('/tableau-de-bord/finances/liste-rechargement', 'PagesController@listerecharge')->name('liste-recharge');
Route::get('/tableau-de-bord/finances/recharger-compte', 'PagesController@rechargecompte')->name('recharger-compte');
Route::get('/tableau-de-bord/finances/recharger-souscompte', 'PagesController@rechargesouscompte')->name('recharger-souscompte');
Route::get('/tableau-de-bord/finances/demande-rechargement', 'PagesController@demanderecharge')->name('demande-rechargement');
// routes rapports et stats
Route::get('/tableau-de-bord/rapports-et-stats/liste-rapports', 'PagesController@listerapports')->name('liste-rapports');
Route::get('/tableau-de-bord/rapports-et-stats/creer-rapport', 'PagesController@createrapport')->name('create-rapport');