<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TyphoonController;
use App\Http\Controllers\LevelController;
/*
|--------------------------------------------------------------------------
| Web Routes
|------------   --------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// 查詢
Route::any('/senior', [TyphoonController::class, 'senior'])->name('typhoon.senior');
Route::any('typhoon/powerLV', [TyphoonController::class, 'powerLV'])->name('typhoon.powerLV');
//修改
Route::patch('typhoon/update/{id}', [TyphoonController::class,'update'])->where('id','[0-9]+');
Route::any('typhoon/{id}/edit',[TyphoonController::class,'typhoon_edit'])->where('id','[0-9]+');

Route::any('/typhoon',[TyphoonController::class,'main_view'])->name('typhoon');
Route::any('/typhoon_add',[TyphoonController::class,'typhoon_add']);
Route::any('/typhoon/{id}',[TyphoonController::class,'typhoon_show'])->where('id','[0-9]+');
Route::any('/typhoon_add_updating',[TyphoonController::class,'typhoon_add_updating']);
Route::delete('typhoon/delete/{id}',[TyphoonController::class,'destroy'])->where('id','[0-9]+')->name('typhoon.destroy');
//Route::post('typhoon/store', [TeamsController::class, 'store'])->name('typhoon.store');

Route::any('/level',[LevelController::class,'main_view']);
Route::any('/level_add',[LevelController::class,'level_add']);
Route::any('/level/{id}',[LevelController::class,'level_show'])->where('id','[0-9]+');
Route::any('/level/{id}/edit',[LevelController::class,'level_edit'])->where('id','[0-9]+');
Route::any('/level_edit_updating',[LevelController::class,'level_edit_updating']);
Route::any('/level_add_updating',[LevelController::class,'level_add_updating']);
Route::delete('level/delete/{id}',[LevelController::class,'destroy'])->where('id','[0-9]+')->name('level.destroy');

Route::patch('level/update/{id}', [LevelController::class,'update'])->where('id','[0-9]+');
Route::any('level/{id}/edit',[LevelController::class,'level_edit'])->where('id','[0-9]+');

Route::get('/getCSRFToken', function() { return csrf_token(); }); // csrf = cross-site request forgery (跨站請求偽造)
