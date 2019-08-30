<?php

use Illuminate\Http\Request;
use \App\ShapesManager;
use \App\Answer;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/shapes/get', function () {
    $shape = ShapesManager::generateRandom();

    return $shape;
});

Route::get('/temp', function () {
    Schema::dropIfExists('answers');

    Schema::create('answers', function($table)
    {
        $table->increments('id');
        $table->timestamps();

        $table->string('shape_type');
        $table->text('shape_data');
        
        $table->string('ans_value');
        $table->boolean('is_currect');
    });

    $answers = Answer::all();

    return $answers;
});

Route::post('/shapes/test', function (Request $request) {
    $shapeData = $request->input('shape');
    $ansVal = $request->input('answer');
    $shape = ShapesManager::generateFromData($shapeData);

    $isCurrect = ( $ansVal == $shape->getExtent() );

    $answer = new Answer;
    $answer->shape_type = $shape::COMPONENT_NAME;
    $answer->shape_data = (array) $shape->getData();
    $answer->ans_value = (string) $ansVal;
    $answer->is_currect = $isCurrect;
    $answer->save();

    return [
        'isCurrect' => $isCurrect,
    ];
});
