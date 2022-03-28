<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\SingleWord;
use App\Http\Livewire\User\UserProfile;
use App\Http\Livewire\DivisionPage;
use App\Http\Livewire\DistrictPage;
use App\Http\Livewire\UpazilaPage;
use App\Http\Livewire\UnionPage;

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



Route::get('/আঞ্চলিক-শব্দ/{word}', SingleWord::class)->name('single.word');
Route::get('/profile/{username}', UserProfile::class)->name('user.profile');
//Route::get('/বিভাগ-{division}', LocationPage::class)->name('division-page');
Route::get('/division-{div}', DivisionPage::class)->name('division.page');
Route::get('/division-{div}/district-{dis}', DistrictPage::class)->name('district.page');
Route::get('/division-{div}/district-{dis}/upazila-{subdis}', UpazilaPage::class)->name('upazila.page');
Route::get('/division-{div}/district-{dis}/upazila-{subdis}/union-{union}', UnionPage::class)->name('union.page');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


require __DIR__.'/auth.php';
