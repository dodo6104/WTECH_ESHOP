<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;
use App\Http\Controllers\CartController;


Route::get('/adminpanel', [FirstController::class, 'adminpanel']);

Route::get('/adminpanel/addgame', [FirstController::class, 'additem']);

Route::get('/adminpanel/editgame', [FirstController::class, 'edititems']);

Route::post('/adminpanel/addgame', [FirstController::class, 'additem_post']);

Route::get('/adminpanel/deletegame/{id}', [FirstController::class, 'deleteitem']);

Route::get('/adminpanel/editgame/{id}', [FirstController::class, 'editItem']);

Route::post('/adminpanel/processgameform', [FirstController::class,'processGameForm']);

Route::get('/register', [FirstController::class, 'regiter_panel']);

Route::post('/register', [FirstController::class, 'registerUser']);

Route::get('/login', [FirstController::class, 'login']);

Route::post('/login', [FirstController::class,'loginUser']);

Route::get('/account', [FirstController::class,'account']);

Route::get('/', [FirstController::class,'homepage']);

Route::post('/logout', [FirstController::class,'logout']);

Route::get('/game/{gameId}', [FirstController::class,'gamedetail']);

Route::get('/cart', [FirstController::class, 'showCart']);

Route::get('/cart/add/{itemId}', [FirstController::class, 'addToCart']);

Route::post('/cart/update/{itemId}', [FirstController::class, 'updateItemInCart']);

Route::post('/cart/remove/{itemId}', [FirstController::class, 'removeItemFromCart']);

Route::get('/test', [FirstController::class,'test']);

Route::get('/search', [FirstController::class,'searchGamesByGenres']);

Route::get('/filter/games', 'FirstController@filterGames')->name('filter.games');

Route::get('/cart/shipping', [FirstController::class,'setShipping']);

Route::post('/cart/shipping-submit', [FirstController::class,'sumbmitShipping']);

Route::post('/cart/payment', [FirstController::class,'paymentProcess']);

Route::post('/pay', [FirstController::class,'payProcess']);

Route::post("/game/{gameId}/addreview", [FirstController::class,'addReview']);
