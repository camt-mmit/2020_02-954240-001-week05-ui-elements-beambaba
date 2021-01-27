<?php

use Illuminate\Support\Facades\Route;

use Psr\Http\Message\ServerRequestInterface;

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
    return redirect('/ui');
});

Route::get('/ui', function () {
    return view('ui-form');
})->name('ui-form');

Route::post('/ui', function (ServerRequestInterface $request) {
    $data = $request->getParsedBody();
    unset($data['_token']);
    return view('ui-result', [
        'data' => $data,
    ]);
})->name('ui-result');




Route::post('/area', function (ServerRequestInterface $request) {
    $data = $request->getParsedBody();
    unset($data['_token']);
    $type = $data['type'];
    $width = (double) $data['width'];
    $height = (double) $data['height'];
    if ('regtangular' === strtolower($type)) {
        $area = $width * $height;
    } else if ('triangle' === strtolower($type)) {
        $area = 0.5 * $width * $height;
    }
    return view('area-result', [
        'type' => $type, 'width' => $width, 'height' => $height,
        'area' => $area
    ]);
})->name('area-result');
Route::get('/', function () {
    return redirect('/mul');
});


Route::get('/mul', function () {
    return view('mul-form');
})->name('mul-form');


Route::post('/mul', function (ServerRequestInterface $request) {
    $data = $request->getParsedBody();
    $n = $data['n'];
    return view('mul-result', 
         ['n' => $n, 
        ]);
})->name('mul-result');