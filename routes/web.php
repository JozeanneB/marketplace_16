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

Route::get('/', function () {
    $helloWorld = 'Hello World';
    return view('welcome', ['hello' => $helloWorld]);
});

Route::get('/model', function () {       
    /*
    $user = new \App\User(); // Active Record - criação de usuário

    $user->name = 'Usuário Teste';
    $user->email = 'email@hotmail.com';
    $user->password = bcrypt('123456');

    $user->save(); // salva usuário no banco de dados

    return \App\User::all();
    */
    
    /*
    $user = \App\User::find(17); // Active Record - busca de usuário
    
    $user->name = 'Usuário Modificado';
    $user->email = 'email@market.com';

    $user->save(); // salva usuário no banco de dados
   
    return \App\User::all();
    */
    
    /*
    $products = \App\Product::all(); // select * from products

    return $products;
    */
});