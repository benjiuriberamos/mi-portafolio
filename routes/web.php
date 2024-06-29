<?php

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SkillsController;
use App\Services\Logistica\LogisticaService;
use App\Services\Logistica\LogisticaMaritima;
use App\Services\Logistica\LogisticaTerrestre;
use App\Services\FabricaMuebles\Fabrica\FabricaMuebleArdeco;
use App\Services\FabricaMuebles\Fabrica\FabricaMuebleModerno;
use App\Services\FabricaMuebles\Fabrica\FabricaMuebleVictoriana;

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
    return view('pages.home');
})->name('home');

Route::get('/symfony', [SkillsController::class, 'symfony'])->name('symfony');
Route::get('/laravel', [SkillsController::class, 'laravel'])->name('laravel');
Route::get('/node', [SkillsController::class, 'node'])->name('node');

Route::get('/logistica-service', function () {
    $logisticaService = new LogisticaService();
    return new JsonResponse([
        "Barco" => $logisticaService->aplicarLogistica(new LogisticaMaritima()),
        "Camion" => $logisticaService->aplicarLogistica(new LogisticaTerrestre()),
    ]);
});

Route::get('/fabrica-muebles', function () {
    $fabricamuebleardeco = new FabricaMuebleArdeco();
    $fabricamueblvictoriana = new FabricaMuebleVictoriana();
    $fabricamueblemoderno = new FabricaMuebleModerno();
    return new JsonResponse([
        "Ardeco" => [
            (new FabricaMuebleArdeco())->crearMesa()->iAm(),
            FabricaMuebleArdeco::crearSilla2()->iAm(),
            $fabricamuebleardeco->crearSofa()->iAm(),
        ],
        "Mesas" => [
            $fabricamueblvictoriana->crearMesa()->iAm(),
            $fabricamueblvictoriana->crearSilla()->iAm(),
            $fabricamueblvictoriana->crearSofa()->iAm(),
        ],
        "Moderno" => [
            $fabricamueblemoderno->crearMesa()->iAm(),
            $fabricamueblemoderno->crearSilla()->iAm(),
            $fabricamueblemoderno->crearSofa()->iAm(),
        ],
    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
