<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MixingConcreteController AS BetonoMaisimas;
use App\Http\Controllers\LabConcreteController AS BetonoLab;

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

Route::get('/', function () {
    return view('welcome');
});

// BetonoMaisimas CRUD Group Blade
Route::prefix('mixingconcretes')->name('mixingconcretes-')->group(function () {
    Route::get('/', [BetonoMaisimas::class, 'index'])->name('index');
    Route::get('/create', [BetonoMaisimas::class, 'create'])->name('create');
    Route::post('/create', [BetonoMaisimas::class, 'store'])->name('store');
    Route::get('/{mixingconcrete}', [BetonoMaisimas::class, 'show'])->name('show');
    Route::get('/{mixingconcrete}/edit', [BetonoMaisimas::class, 'edit'])->name('edit');
    Route::put('/{mixingconcrete}', [BetonoMaisimas::class, 'update'])->name('update');
    Route::get('/{mixingconcrete}/delete', [BetonoMaisimas::class, 'delete'])->name('delete');
    Route::delete('/{mixingconcrete}', [BetonoMaisimas::class, 'destroy'])->name('destroy');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
