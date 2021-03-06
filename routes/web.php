<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/product/{slug}', 'HomeController@single')->name('product.single');

Route::prefix('cart')->name('cart.')->group(function () {
    Route::get('/', 'CartController@index')->name('index');
    Route::post('add', 'CartController@add')->name('add');
    Route::get('remove/{slug}', 'CartController@remove')->name('remove');
    Route::get('cancel', 'CartController@cancel')->name('cancel');
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
    // Mass assignment - atribuição em massa
    $user = \App\User::create([
        'name' => 'Nanderson Castro',
        'email' => 'email100@email.com',
        'password'=> bcrypt('123456')
    ]);
    */

    /*
    //Mass update -atualização em massa
    $user = \App\User::find(5);

    $user = $user->update([
        'name' => 'Atualizando com Mass Update'
    ]);
    */

    /*
    //Como eu faria para pegar a loja de um usuário
    $user = \App\User::find(14);
    
    //dd($user->store->count()); // Número de propriedades da store
    return $user->store; //O objeto único (Store) se for Collection de Dados (Objeto)
    */

    /*
    //Pegar os produtos de uma loja
    $loja = \App\Store::find(1);
    //return $loja->products->count();
    //return $loja->products()->where('id', 1)->get();
    return $loja->products;
    */

    /*
    //Pegar as lojas de uma categoria
    $categoria = \App\Category::find(1);
    $categoria.products;
    */

    /*
    //Criar uma loja para um usuário
    $user = \App\User::find(10);
    $store = $user->store()->create([
        'name' => 'Loja Teste',
        'description' => 'Loja Teste de produtos de informática',
        'mobile_phone' => 'XX-XXXX-XXXX',
        'phone' => 'XX-XXXXX-XXXX',
        'slug' => 'loja-teste',
    ]);

    dd($store);
    */

    /*
    //Criar um produto para uma loja
    $store = \App\Store::find(1);
    $product = $store->products()->create([
        'name' => 'Notebook Dell',
        'description' => 'CORE I5 10GB',
        'body' => 'Qualquer coisa...',
        'price' => 2999.99,
        'slug' => 'notebook-dell',
    ]);
    
    dd($product); 
    */

    /*
    //Criar uma categoria
    \App\Category::create([
        'name' => 'Games',
        'description' => null,
        'slug' => 'games',
    ]); 
    
    \App\Category::create([
        'name' => 'Notebooks',
        'description' => null,
        'slug' => 'notebooks',
    ]);  
    
    return \App\Category::all();
    */

    /*
    //Adicionar um produto para uma categoria ou vice-versa
    $product = \App\Product::find(4);
    //dd($product->categories()->attach([1])); //Incluir a categoria
    //dd($product->categories()->detach([1])); //Remover a categoria
 
    //dd($product->categories()->sync([1, 2])); //Adiciona as categorias 1 e 2 ao produto
    */

    /*
    //Obter as categorias do produto
    $product = \App\Product::find(4);

    return $product->categories;
    */

    return \App\User::all();

    $products = \App\Product::all(); // select * from products

    return $products;
});

/* // Rotas antes da refatoração
Route::get('/admin/stores', 'Admin\\StoreController@index');
Route::get('/admin/stores/create', 'Admin\\StoreController@create');
Route::post('/admin/stores/store', 'Admin\\StoreController@store');
*/

Route::group(['middleware' => ['auth']], function () {
    Route::prefix('admin')->name('admin.')->namespace('Admin')->group(function () {
        /* // Rotas antes da segunda refatoração
        Route::prefix('stores')->name('stores.')->group(function(){
            Route::get('/', 'StoreController@index')->name('index');
            Route::get('/create', 'StoreController@create')->name('create');
            Route::post('/store', 'StoreController@store')->name('store');
            Route::get('/{store}/edit', 'StoreController@edit')->name('edit');
            Route::post('/update/{store}', 'StoreController@update')->name('update');
            Route::get('/destroy/{store}', 'StoreController@destroy')->name('destroy');
        });
        */
        Route::resource('stores', 'StoreController');

        Route::resource('products', 'ProductController');

        Route::resource('categories', 'CategoryController');

        Route::post('photos/remove', 'ProductPhotoController@removePhoto')->name('photo.remove');
    });
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
