<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'PrincipalController@principal')->name('site.index');

Route::get('/sobre', 'SobreController@sobre')->name('site.sobre');

Route::get('/contato', 'ContatoController@contato')->name('site.contato');

Route::get('/login', 'LoginController@login')->name('site.login');
