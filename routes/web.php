<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\KomentarController;
use Illuminate\Support\Facades\Route;

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
    return view('landing',[
      "title" => "Home"  
    ]);
});

// Route::get('/artikel', function () {
//     return view('artikel',[
//       "title" => "artikel"  
//     ]);
// });

Route::get('/artikel', [ArtikelController::class, 'all']);
Route::post('/artikel', [ArtikelController::class, 'save'])->name('article.save');
Route::delete('/artikel/{id}', [ArtikelController::class, 'delete'])->name('article.delete');
Route::get('/artikel/{single}', [ArtikelController::class,'view'])->name('article.view'); //{single} adalah wildcard dari controller
Route::get('/artikel/komentar/{id}', [KomentarController::class,'saveKomentar']);
// Route::get('/artikel/{single}', [KomentarController::class,'all'])->name('komentar.view');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
