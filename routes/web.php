<?php
use Facade\FlareClient\View;
use App\Http\Controllers\DotaHeroController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('main');
// });

Route::get('/heroes', [DotaHeroController::class, 'index']);

Route::get('/herolists', [DotaHeroController::class, 'index2']);
Route::delete('/herolists/{id}/delete', [DotaHeroController::class, 'deleteHero']);
Route::redirect('/', '/heroes');
