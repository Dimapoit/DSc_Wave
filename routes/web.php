<?php

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
//Переключение языков
Route::get('/', function () {
    return redirect('/'. App\Http\Middleware\Locale::$mainLanguage);
});

Route::get('setlocale/{lang}', function ($lang) {

    $referer = Redirect::back()->getTargetUrl();; //URL предыдущей страницы
    $parse_url = parse_url($referer, PHP_URL_PATH); //URI предыдущей страницы

    //разбиваем на массив по разделителю
    $segments = explode('/', $parse_url);

    //Если URL (где нажали на переключение языка) содержал корректную метку языка
    if (in_array($segments[1], App\Http\Middleware\Locale::$languages)) {

        unset($segments[1]); //удаляем метку
    }

    //Добавляем метку языка в URL (если выбран не язык по-умолчанию)
    array_splice($segments, 1, 0, $lang);

    //формируем полный URL
    $url = Request::root().implode("/", $segments);

    //если были еще GET-параметры - добавляем их
    if(parse_url($referer, PHP_URL_QUERY)){
        $url = $url.'?'. parse_url($referer, PHP_URL_QUERY);
    }
    return redirect($url); //Перенаправляем назад на ту же страницу

})->name('setlocale');

Route::group(
    [
        'prefix' => App\Http\Middleware\Locale::getLocale()
        /*, 'middleware' => 'reconstr'*/
    ],
    function () {

        Route::get('/', 'MainController@index')->name('main');
        Route::get('/about', 'MainController@about')->name('about');
        Route::get('/services', 'MainController@services')->name('services');
        Route::get('/blog', 'MainController@blog')->name('blog');
        Route::get('/gallery', 'MainController@gallery')->name('gallery');
        Route::get('/contact', 'MainController@contact')->name('contact');
        Route::get('/rent', 'MainController@rent')->name('rent');
        Route::get('/cafe', 'MainController@cafe')->name('cafe');
        Route::get('/shop', 'MainController@shop')->name('shop');
        Route::get('/studio', 'MainController@studio')->name('studio');
    });




Auth::routes();
