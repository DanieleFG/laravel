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

//use Illuminate\Routing\Route; erro Bad Method Call ->Method Illuminate\Routing\Route::get does not exist. 
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//      return view('welcome');
//  });
Route::get('listagem-usuario', 'UserController@listUser' );

Route::group( ['namespace' => 'Form'], function() {


    //Route::verb('uri', 'Controller@method') ->name('route-name');

    /**
    * VERBO GET
    */

    Route::get('usuarios', 'TestController@listAllUser') ->name('users.listAll');
    Route::get('usuarios/novo', 'TestController@formAddUser') ->name('users.formAddUser');// para cadastrar usuario
    Route::get('usuarios/editar/{user}', 'TestController@formEditUser') ->name('users.formEditUser');// visualizar dados para edicão
    Route::get('usuarios/{user}', 'TestController@listUser') ->name('users.list');// parametro {user} passar uma informação pala url

    /**
     * VERBO POST
     */
     Route::post('usuarios/store', 'TestController@storeUser')->name('users.store');

     /**
     * VERBO PUT /PATCH
     */
    Route::patch('usuarios/edit/{user}', 'TestController@edit')->name('users.edit'); // fazer a edição epdate

     /**
     * VERBO DELETE
     */
    Route::delete('usuarios/destroy/{user}', 'TestController@destroy')->name('users.destroy');
});
