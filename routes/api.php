<?php

use App\Models\Character;
use App\Models\House;
use App\Models\Quote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
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

// Route::get('/character/{character_slug}', function (Request $request) {
//     $character = Character::where('slug', $request->character_slug)->get();
//     $character['quotes'] = Quote::where('character', $request->character_slug)->get();
//     return $character;
// });

// Route::get('/quotes/{character_slug}/{count_of_quotes}', function (Request $request) {
//     return Quote::where('character', $request->character_slug)->get()->take($request->count_of_quotes || 1);
// });

// Route::get('/houses', function () {
//     $houses = House::get();
//     foreach ($houses as $house) {
//         $house['members'] = Character::where('house', $house->slug)->get();
//     }

//     return $houses;
// });
