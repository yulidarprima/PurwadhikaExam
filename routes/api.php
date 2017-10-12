<?php
use Illuminate\Http\Request;
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
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(['prefix' => 'unit'], function()
{
    Route::get('/get', function () {
        $querybuilder = DB::table('unit_rumahs as u')
        ->select('u.kavling', 'u.blok', 'u.no_rumah', 'u.harga_rumah', 'u.luas_tanah', 'u.luas_bangunan')
        ->get();
        return response()->json($querybuilder, 200);
    });
    Route::get('/create', 'ProductController@CreateUnit');
    Route::get('/delete', 'ProductController@DeleteUnit');
});