<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\DivisionController;

use App\Models\Division;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::apiResource('users', UserController::class);
Route::apiResource('divisions', DivisionController::class);

Route::get('/divisions/{id}/children', function ($id) {
  $name = Division::find($id)->name;
  return DB::table('divisions')->where('parent', '=', $name)->select('name')->get();
});

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
