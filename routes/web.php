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

Route::get('/','GameController@popular');

Auth::routes([
    'register' => true, // Registration Routes...
//    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);

Route::get('stock/chart','HomeController@chart');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/sample', 'HomeController@sample')->name('sample');
Route::get('/edit','ProfileController@edit')->name('profile.edit');
Route::post('/change-password','ProfileController@changePassword')->name('profile.changePassword');
Route::post('/change-name','ProfileController@changeName')->name('profile.changeName');
Route::post('/change-email','ProfileController@changeEmail')->name('profile.changeEmail');
Route::post('/change-photo','ProfileController@changePhoto')->name('profile.changePhoto');
Route::resource('/category','CategoryController');
Route::resource('/post','PostController');
Route::resource('/popular','PopularController');
Route::get('/review','PostController@reviewFilter')->name('post.reviewFilter');
Route::get('/noreview','PostController@noreviewFilter')->name('post.noreviewFilter');
//Route::get('/drive','PostController@driveFilter')->name('post.driveFilter');
//Route::get('/nodrive','PostController@nodriveFilter')->name('post.nodriveFilter');
Route::get('/mod','PostController@modFilter')->name('post.modFilter');
Route::get('/nomod','PostController@noModFilter')->name('post.noModFilter');
Route::resource('/photo','PhotoController');
Route::resource('/rating','RatingController');
Route::resource('/suggest','SuggestController');
Route::resource('/request_app','RequestAppController');
Route::resource('/comment','CommentController');
Route::resource('viewer','ViewerController');
Route::get('/show_rating/{id}','PostController@showRating')->name('post.showRating');
Route::get('/show_comment/{id}','PostController@showComment')->name('post.showComment');
Route::delete('/viewer_del/{id}','PostController@viewerDel')->name('post.viewerDel');
Route::get('/popularDel/','PopularController@destroyAll')->name('popular.destroyAll');

Route::resource('/ads','AdsController');
Route::post('/background','PhotoController@changeBackground')->name('photo.changeBackground');



Route::get('/suggest_game/create','GameController@createSuggest')->name('suggestGame.createSuggest');
Route::post('/suggest_game','GameController@storeSuggest')->name('suggestGame.storeSuggest');
Route::get('/request_game/create','GameController@createRequest')->name('requestGame.createRequest');
Route::post('/request_game','GameController@storeRequest')->name('requestGame.storeRequest');
Route::post('/add_rating','GameController@storeRating')->name('addRating.storeRating');
Route::post('/comment_game','GameController@storeComment')->name('commentGame.storeComment');
Route::get('/ad_game','GameController@adGame')->name('adGame');

Route::get('/show_comment/{id}','GameController@showComment')->name('post.showComment');
Route::get('/game','GameController@gameList')->name('game.gameList');
Route::get('/game/{id}','GameController@gameListFilter')->name('game.gameListFilter');
Route::get('/single_game_list/{id}','GameController@singleGameList')->name('game.singleGameList');
Route::get('/game_search','GameController@gameSearch')->name('game.gameSearch');

Route::post('/g_version','GVersionController@store')->name('gVersion.store');
Route::get('/download','GameController@download')->name('download');

