<?php

use Illuminate\Support\Facades\Route;

use function PHPUnit\Framework\isNull;

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

Route::get('/belahketupat', function () {
    $tinggi = 5;
    for ($row = 0; $row < $tinggi; $row++) {
        for ($space = $row; $space < $tinggi; $space++) {
            echo '_';
        }
        for ($col = 0; $col <= $row; $col++) {
            echo '*';
        }
        for ($col = 0; $col <= $row; $col++) {
            echo '*';
        }
        echo '</br>';
    }
    for ($row = 1; $row < $tinggi; $row++) {
        for ($space = 0; $space <= $row; $space++) {
            echo '_';
        }
        for ($col = $row; $col < $tinggi; $col++) {
            echo '*';
        }
        for ($col = $row; $col < $tinggi; $col++) {
            echo '*';
        }
        echo '</br>';
    }
});

Route::get('/fibonanci', function () {
    $n = 15;
    $array = array();
    for ($val = 0; $val <= $n; $val++) {
        if ($val <= 1) {
            $array[$val] = $val;
            echo $array[$val] . ',';
        } else if ($val == $n) {
            $array[$val] = $array[$val - 2] + $array[$val - 1];
            echo ($array[$val]);
        } else {
            $array[$val] = $array[$val - 2] + $array[$val - 1];
            echo ($array[$val] . ',');
        }
    }

    echo '<pre>';
    echo '</br>';
    print_r($array);
});

Route::get('/sort', function () {
    $data = array(6, 5, 3, 1, 8, 7, 2, 4);
    function insertion_sort($data)
    {
        $n = count($data);
        for ($i = 1; $i < $n; $i++) {
            for ($k = $i; $k > 0; $k--) {
                if ($data[$k] < $data[$k - 1]) {
                    $dummy = $data[$k];
                    $data[$k] = $data[$k - 1];
                    $data[$k - 1] = $dummy;
                }
            }
        }
        return $data;
    }
    print_r(insertion_sort($data));
});

Route::get('/category', function () {
    function category($age, $gender = null)
    {
        if (is_null($gender)) {
            if ($age <= 3) {
                return 'batita';
            } else if ($age <= 5) {
                return 'balita';
            } else if ($age <= 10) {
                return 'anak-anak';
            } else if ($age <= 18) {
                return 'remaja';
            } else if ($age <= 45) {
                return 'dewasa';
            } else {
                return 'undefined';
            }
        } else {
            if ($gender == 'female' && $age >= 21 || $gender == 'male' && $age >= 25) {
                return 'dewasa siap menikah';
            } else if ($gender == 'female' && $age >= 45) {
                return 'dewasa menopause';
            } else {
                return 'undefined';
            }
        }
    }

    $status = category(25, 'male');

    print_r($status);
});

Route::get('/component', function(){
    return view('component');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

// DEFAULT: RESOURCES
// ->namespace($this->namespace)
Route::namespace('App\Http\Controllers')->middleware(['auth'])->group(function () {
    // Countries
    // Route::get("countries/{id}", 'CountriesController@show');
    // Route::get("countries/{id}/edit", 'CountriesController@edit');

    Route::get("{collection}", 'ResourcesController@index');
    Route::get("{collection}/trash", 'ResourcesController@trash');
    Route::get("{collection}/create", 'ResourcesController@create');
    Route::post("{collection}", 'ResourcesController@store');

    Route::get("{collection}/import", 'ResourcesController@import');
    Route::post("{collection}/import", 'ResourcesController@doImport');
    Route::get("{collection}/export", 'ResourcesController@export');
    Route::post("{collection}/export", 'ResourcesController@doExport');

    Route::get("{collection}/{id}", 'ResourcesController@show');
    Route::get("{collection}/{id}/edit", 'ResourcesController@edit');
    Route::put("{collection}/{id}", 'ResourcesController@update');
    Route::delete("{collection}/{id}", 'ResourcesController@destroy');


    Route::get("{collection}/{id}/trashed", 'ResourcesController@trashed');
    Route::put("{collection}/{id}/restore", 'ResourcesController@restore');
    Route::delete("{collection}/{id}/delete", 'ResourcesController@delete'); // hard delete item
    Route::delete("{collection}/trash/empty", 'ResourcesController@empty'); // empty all trashed
    Route::put("{collection}/trash/restore", 'ResourcesController@putBack'); // empty all trashed
});
