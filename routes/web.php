<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AssociationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PeriodeController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CotisationController;
use App\Http\Controllers\TypeAdherentController;
use App\Models\Association;
use App\Models\TypeAdherent;
use App\Models\User;
use App\Models\Periode;
use App\Models\Section;
use App\Models\Cotisation;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/adherants', function(){
   $users=User::latest()->get();
   $types=TypeAdherent::latest()->get();
    return view('Pages.adherants',compact('users','types'));
});
Route::get('/member', function(){
    $associations=Association::latest()->get();
    return view('Pages.member',compact('associations'));
});
Route::get('/cotisations',function(){
    $periodes=Periode::latest()->get();
    $cotisations=Cotisation::all();
    $users=user::latest()->get();
    return view('Pages.cotisations',compact('periodes','users','cotisations'));
});
Route::get('/sections',function(){
    $periodes=Periode::latest()->get();
    $sections=Section::latest()->get();
    return view('Pages.sections',compact('periodes','sections'));
});
Route::get('/file-import',[UserController::class,'importView'])->name('import-view');
Route::post('/import',[UserController::class,'import'])->name('import');
Route::get('/export-users',[UserController::class,'exportUsers'])->name('export-users');

Route::resource('associations',AssociationController::class);
Route::post('/adherantAdd',[HomeController::class,'Adherant'])->name('addAdherant');
Route::post('/cotisationP',[HomeController::class,'cotisationP'])->name('cotisationP');
Route::get('/generateAss',[HomeController::class,'generateAss']);
Route::resource('/types',TypeAdherentController::class);
Route::resource('/periodes',PeriodeController::class);
Route::resource('/section', SectionController::class);
Route::resource('/cotisation', CotisationController::class);
