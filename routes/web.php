<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\SingleWord;
use App\Models\Regional;

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
    return view('welcome');
})->name('home');

Route::get('/আঞ্চলিক-শব্দ', function () {
    return view('welcome');
})->name('home');


Route::get('/আঞ্চলিক-শব্দ/{word}', SingleWord::class)->name('single.word');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/division-{division}', [DivisionController::class,'index'])->name('division');
Route::get('/division-{division}/district-{district}', [DistrictController::class,'index'])->name('district');
Route::get('/division-{division}/district-{district}/upazila-{upazila}', [UpazilaController::class,'index'])->name('upazila');
Route::get('/division-{division}/{district-{district}/upazila-{upazila}/union-{union}', [UnionController::class,'index'])->name('union');

require __DIR__.'/auth.php';
