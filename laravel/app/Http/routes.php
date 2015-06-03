<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

/*
 * Route pour la gestion de la connexion
 */
Route::group(['middleware' => 'auth'], function() {
    /*
     * Controller d'interaction avec les comptes
     */
    Route::resource('utilisateur','UtilisateurController');
    Route::resource('personne', 'PersonneController');
    Route::resource('profile','ProfileController');
    
    /*
     * ACL
     */
    Route::resource('role', 'RoleController');
    Route::resource('permission', 'PermissionController');
    /*
     * Gestion du contenu de la G-R
     */
    Route::resource('gardeRobe', 'GardeRobeController');
    /*
     * Externe à FC
     */
    Route::resource('partenaire', 'PartenaireController');
    /*
     * Shooting des mannequins
     */
    Route::resource('shooting', 'ShootingController');

});
    /*
     * Gestion des mannequins (pour affichage différent si pas co
     */
    Route::resource('mannequin', 'MannequinController');
    /*
     * Home page, affichage différent si pas co
     */
    Route::resource('homePage', 'homePageController');
        /*
     * Gestion session de votes
     */
    Route::resource('sessionVote', 'SessionVoteController');

