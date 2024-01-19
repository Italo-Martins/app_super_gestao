<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\TesteController;
use App\Http\Controllers\FornecedorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return 'Olá mundo';
// });

// Route::get('/sobre-nos', function () {
    //     return 'Sobre nós';
// });

// Route::get('/contato', function () {
    //     return 'Contato';
// });

Route::get('/',[PrincipalController::class, 'principal'])->name('site.index');
Route::get('/sobre-nos', [SobreNosController::class, 'sobreNos'])->name('site.sobrenos');
Route::get('/contato', [ContatoController::class, 'contato'])->name('site.contato');
Route::post('/contato', [ContatoController::class, 'contato'])->name('site.contato');
Route::get('/login', function(){
    return 'Login';
})->name('site.login');

// Agrupando rotas
Route::prefix('/app')->group( function() {
    Route::get('/clientes', function(){
        return 'clientes';
    })->name('app.clientes');

    Route::get('/fornecedores', [FornecedorController::class, 'index'])->name('app.fornecedores');

    Route::get('/produtos', function(){
        return 'Produtos';
    })->name('app.produtos');
});


// Como Receber parâmetros
// ? -> indica que o parâmetro é opcional
// Route::get('/contato/{nome}/{categoria}/{assunto}/{mensagem?}', function(string $nome, string $categoria, string $assunto, string $mensagem = 'Mesnagem não enviada'){
//         echo "Estamos aqui: $nome - $categoria - $assunto - $mensagem";
//     }
// );

// Redirecionamento de rotas
// Route::get('/rota1', function() {
//     echo 'Rota 1';
// })->name('site.rota1');

// Route::get('/rota2', function() {
//     return redirect('/rota1');
// })->name('site.rota2');

//Opção menos usada, ccontudo mais direta
// Route::redirect('/route2', '/route1');

// Rota de FallBack
Route::fallback(function() {
    echo 'A rota acessada não existe. <a href="'.route('site.index').'">Clique aqui </a>para ir para a pagina inicial.';
});


Route::get('/teste/{p1}/{p2}',[TesteController::class, 'teste'])->name('teste');
