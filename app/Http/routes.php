<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/admin', function () {
    return view('welcome');
});
Route::get('/buatakun', function() {
	return view('buatakun');
})->middleware('auth');
// Route::get('/register', function() {
// 	return view('Auth.register');
// })->middleware('auth');

Route::get('/', 'IndexController@index');
Route::get('/singapura', 'IndexController@showsingapura');
Route::get('/testsingapura', 'IndexController@showtestsingapura');
Route::get('/hasilsingapura', 'IndexController@showhasilsingapura');
Route::get('/hasilsingapura-m', 'IndexController@showhasilsingapuram');
Route::get('/sydney', 'IndexController@showsydney');
Route::get('/hasilsydney', 'IndexController@showhasilsydney');
Route::get('/hasilsydney-m', 'IndexController@showhasilsydneym');
Route::get('/cambodia', 'IndexController@showcambodia');
Route::get('/hasilcambodia', 'IndexController@showhasilcambodia');
Route::get('/hasilcambodia-m', 'IndexController@showhasilcambodiam');
Route::get('/taiwan', 'IndexController@showtaiwan');
Route::get('/hasiltaiwan', 'IndexController@showhasiltaiwan');
Route::get('/hasiltaiwan-m', 'IndexController@showhasiltaiwanm');
Route::get('/china', 'IndexController@showchina');
Route::get('/hasilchina', 'IndexController@showhasilchina');
Route::get('/hasilchina-m', 'IndexController@showhasilchinam');
Route::get('/hongkong', 'IndexController@showhongkong');
Route::get('/hasilhongkong', 'IndexController@showhasilhongkong');
Route::get('/hasilhongkong-m', 'IndexController@showhasilhongkongm');
Route::get('/japan', 'IndexController@showjapan');
Route::get('/hasiljapan', 'IndexController@showhasiljapan');
Route::get('/hasiljapan-m', 'IndexController@showhasiljapanm');
Route::get('/jadwalkeluaran', 'IndexController@showjadwalkeluaran');
Route::get('/numbergenerator', 'IndexController@shownumbergenerator');
Route::get('/bukumimpi', 'IndexController@showbukumimpi');
Route::get('/bukumimpi-m', 'IndexController@showbukumimpim');
Route::get('/analisissingapura', 'IndexController@showanalisissingapura');
Route::get('/analisissydney', 'IndexController@showanalisissydney');
Route::get('/analisiscambodia', 'IndexController@showanalisiscambodia');
Route::get('/analisistaiwan', 'IndexController@showanalisistaiwan');
Route::get('/analisischina', 'IndexController@showanalisischina');
Route::get('/analisishongkong', 'IndexController@showanalisishongkong');
Route::get('/analisisjapan', 'IndexController@showanalisisjapan');
Route::get('/konversi', 'IndexController@showkonversi');
Route::get('/carahitung', 'IndexController@showcarahitung');
Route::get('/resultsgp', 'IndexController@showresultsgp');
Route::get('/livedrawsgp', 'IndexController@showlivedrawsgp');
Route::get('/livedrawsyd', 'IndexController@showlivedrawsyd');
Route::get('/livedrawcmb', 'IndexController@showlivedrawcmb');
Route::get('/livedrawtw', 'IndexController@showlivedrawtw');
Route::get('/livedrawchn', 'IndexController@showlivedrawchn');
Route::get('/livedrawhk', 'IndexController@showlivedrawhk');
Route::get('/livedrawjpn', 'IndexController@showlivedrawjpn');
Route::get('/prediksisgp', 'IndexController@showprediksisgp');
Route::get('/prediksisgpdet', 'IndexController@showprediksisgpdet');
Route::get('/prediksisyddet', 'IndexController@showprediksisyddet');
Route::get('/prediksicmbdet', 'IndexController@showprediksicmbdet');
Route::get('/prediksichndet', 'IndexController@showprediksichndet');
Route::get('/prediksitwdet', 'IndexController@showprediksitwdet');
Route::get('/prediksihkdet', 'IndexController@showprediksihkdet');
Route::get('/prediksijpndet', 'IndexController@showprediksijpndet');
Route::get('/comingsoon', 'IndexController@showcomingsoon');

Route::post('/searchResultSingapura', 'IndexController@searchResultSingapura');
Route::post('/searchResultSydney', 'IndexController@searchResultSydney');
Route::post('/searchResultCambodia', 'IndexController@searchResultCambodia');
Route::post('/searchResultTaiwan', 'IndexController@searchResultTaiwan');
Route::post('/searchResultChina', 'IndexController@searchResultChina');
Route::post('/searchResultHongkong', 'IndexController@searchResultHongkong');
Route::post('/searchResultJapan', 'IndexController@searchResultJapan');

Route::auth();
Route::get('/home', function() {
	return view('/');
});
Route::get('/home', 'HomeController@index');

Route::get('/results', 'ResultsController@index');
Route::get('/results/create', 'ResultsController@create');
Route::post('/results', 'ResultsController@store');

Route::get('/analisis', 'AnalisisController@index');
Route::get('/analisis/create', 'AnalisisController@create');
Route::post('/analisis', 'AnalisisController@store');
Route::get('/analisis/{singapura}', 'AnalisisController@show');
Route::get('/analisis/{singapura}/edit', 'AnalisisController@edit');
Route::patch('/analisis/{singapura}', 'AnalisisController@update');
Route::delete('/analisis/{singapura}/delete', 'AnalisisController@delete');

Route::get('/analisissyd', 'AnalisissydController@index');
Route::get('/analisissyd/create', 'AnalisissydController@create');
Route::post('/analisissyd', 'AnalisissydController@store');
Route::get('/analisissyd/{sydney}', 'AnalisissydController@show');
Route::get('/analisissyd/{sydney}/edit', 'AnalisissydController@edit');
Route::patch('/analisissyd/{sydney}', 'AnalisissydController@update');
Route::delete('/analisissyd/{sydney}/delete', 'AnalisissydController@delete');

Route::get('/analisiscmb', 'AnalisiscmbController@index');
Route::get('/analisiscmb/create', 'AnalisiscmbController@create');
Route::post('/analisiscmb', 'AnalisiscmbController@store');
Route::get('/analisiscmb/{cambodia}', 'AnalisiscmbController@show');
Route::get('/analisiscmb/{cambodia}/edit', 'AnalisiscmbController@edit');
Route::patch('/analisiscmb/{cambodia}', 'AnalisiscmbController@update');
Route::delete('/analisiscmb/{cambodia}/delete', 'AnalisiscmbController@delete');

Route::get('/analisistw', 'AnalisistwController@index');
Route::get('/analisistw/create', 'AnalisistwController@create');
Route::post('/analisistw', 'AnalisistwController@store');
Route::get('/analisistw/{taiwan}', 'AnalisistwController@show');
Route::get('/analisistw/{taiwan}/edit', 'AnalisistwController@edit');
Route::patch('/analisistw/{taiwan}', 'AnalisistwController@update');
Route::delete('/analisistw/{taiwan}/delete', 'AnalisistwController@delete');

Route::get('/analisiscn', 'AnalisiscnController@index');
Route::get('/analisiscn/create', 'AnalisiscnController@create');
Route::post('/analisiscn', 'AnalisiscnController@store');
Route::get('/analisiscn/{china}', 'AnalisiscnController@show');
Route::get('/analisiscn/{china}/edit', 'AnalisiscnController@edit');
Route::patch('/analisiscn/{china}', 'AnalisiscnController@update');
Route::delete('/analisiscn/{china}/delete', 'AnalisiscnController@delete');

Route::get('/analisishk', 'AnalisishkController@index');
Route::get('/analisishk/create', 'AnalisishkController@create');
Route::post('/analisishk', 'AnalisishkController@store');
Route::get('/analisishk/{hongkong}', 'AnalisishkController@show');
Route::get('/analisishk/{hongkong}/edit', 'AnalisishkController@edit');
Route::patch('/analisishk/{hongkong}', 'AnalisishkController@update');
Route::delete('/analisishk/{hongkong}/delete', 'AnalisishkController@delete');

Route::get('/analisisjpn', 'AnalisisjpnController@index');
Route::get('/analisisjpn/create', 'AnalisisjpnController@create');
Route::post('/analisisjpn', 'AnalisisjpnController@store');
Route::get('/analisisjpn/{japan}', 'AnalisisjpnController@show');
Route::get('/analisisjpn/{japan}/edit', 'AnalisisjpnController@edit');
Route::patch('/analisisjpn/{japan}', 'AnalisisjpnController@update');
Route::delete('/analisisjpn/{japan}/delete', 'AnalisisjpnController@delete');

Route::get('/admin/singapura', 'SingapuraController@index');
Route::get('/admin/singapura/create', 'SingapuraController@create');
Route::post('/admin/singapura', 'SingapuraController@store');
Route::get('/admin/singapura/{singapura}', 'SingapuraController@show');
Route::get('/admin/singapura/{singapura}/edit', 'SingapuraController@edit');
Route::patch('/admin/singapura/{singapura}', 'SingapuraController@update');
Route::delete('/admin/singapura/{singapura}/delete', 'SingapuraController@delete');

Route::get('/admin/sydney', 'SydneyController@index');
Route::get('/admin/sydney/create', 'SydneyController@create');
Route::post('/admin/sydney', 'SydneyController@store');
Route::get('/admin/sydney/{sydney}', 'SydneyController@show');
Route::get('/admin/sydney/{sydney}/edit', 'SydneyController@edit');
Route::patch('/admin/sydney/{sydney}', 'SydneyController@update');
Route::delete('/admin/sydney/{sydney}/delete', 'SydneyController@delete');

Route::get('/admin/cambodia', 'CambodiaController@index');
Route::get('/admin/cambodia/create', 'CambodiaController@create');
Route::post('/admin/cambodia', 'CambodiaController@store');
Route::get('/admin/cambodia/{cambodia}', 'CambodiaController@show');
Route::get('/admin/cambodia/{cambodia}/edit', 'CambodiaController@edit');
Route::patch('/admin/cambodia/{cambodia}', 'CambodiaController@update');
Route::delete('/admin/cambodia/{cambodia}/delete', 'CambodiaController@delete');

Route::get('/admin/taiwan', 'TaiwanController@index');
Route::get('/admin/taiwan/create', 'TaiwanController@create');
Route::post('/admin/taiwan', 'TaiwanController@store');
Route::get('/admin/taiwan/{taiwan}', 'TaiwanController@show');
Route::get('/admin/taiwan/{taiwan}/edit', 'TaiwanController@edit');
Route::patch('/admin/taiwan/{taiwan}', 'TaiwanController@update');
Route::delete('/admin/taiwan/{taiwan}/delete', 'TaiwanController@delete');

Route::get('/admin/china', 'ChinaController@index');
Route::get('/admin/china/create', 'ChinaController@create');
Route::post('/admin/china', 'ChinaController@store');
Route::get('/admin/china/{china}', 'ChinaController@show');
Route::get('/admin/china/{china}/edit', 'ChinaController@edit');
Route::patch('/admin/china/{china}', 'ChinaController@update');
Route::delete('/admin/china/{china}/delete', 'ChinaController@delete');

Route::get('/admin/hongkong', 'HongkongController@index');
Route::get('/admin/hongkong/create', 'HongkongController@create');
Route::post('/admin/hongkong', 'HongkongController@store');
Route::get('/admin/hongkong/{hongkong}', 'HongkongController@show');
Route::get('/admin/hongkong/{hongkong}/edit', 'HongkongController@edit');
Route::patch('/admin/hongkong/{hongkong}', 'HongkongController@update');
Route::delete('/admin/hongkong/{hongkong}/delete', 'HongkongController@delete');

Route::get('/admin/japan', 'JapanController@index');
Route::get('/admin/japan/create', 'JapanController@create');
Route::post('/admin/japan', 'JapanController@store');
Route::get('/admin/japan/{japan}', 'JapanController@show');
Route::get('/admin/japan/{japan}/edit', 'JapanController@edit');
Route::patch('/admin/japan/{japan}', 'JapanController@update');
Route::delete('/admin/japan/{japan}/delete', 'JapanController@delete');

Route::get('/admin/prediksisgp', 'PrediksisgpController@index');
Route::get('/admin/prediksisgp/create', 'PrediksisgpController@create');
Route::post('/admin/prediksisgp', 'PrediksisgpController@store');
Route::get('/admin/prediksisgp/{singapura}', 'PrediksisgpController@show');
Route::get('/admin/prediksisgp/{singapura}/edit', 'PrediksisgpController@edit');
Route::patch('/admin/prediksisgp/{singapura}', 'PrediksisgpController@update');
Route::delete('/admin/prediksisgp/{singapura}/delete', 'PrediksisgpController@delete');

Route::get('/admin/prediksisgps', 'PrediksisgpsController@index');
Route::get('/admin/prediksisgps/create', 'PrediksisgpsController@create');
Route::post('/admin/prediksisgps', 'PrediksisgpsController@store');
Route::get('/admin/prediksisgps/{singapura}', 'PrediksisgpsController@show');
Route::get('/admin/prediksisgps/{singapura}/edit', 'PrediksisgpsController@edit');
Route::patch('/admin/prediksisgps/{singapura}', 'PrediksisgpsController@update');
Route::delete('/admin/prediksisgps/{singapura}/delete', 'PrediksisgpsController@delete');


Route::get('/admin/prediksisyd', 'PrediksisydController@index');
Route::get('/admin/prediksisyd/create', 'PrediksisydController@create');
Route::post('/admin/prediksisyd', 'PrediksisydController@store');
Route::get('/admin/prediksisyd/{sydney}', 'PrediksisydController@show');
Route::get('/admin/prediksisyd/{sydney}/edit', 'PrediksisydController@edit');
Route::patch('/admin/prediksisyd/{sydney}', 'PrediksisydController@update');
Route::delete('/admin/prediksisyd/{sydney}/delete', 'PrediksisydController@delete');

Route::get('/admin/prediksicmb', 'PrediksicmbController@index');
Route::get('/admin/prediksicmb/create', 'PrediksicmbController@create');
Route::post('/admin/prediksicmb', 'PrediksicmbController@store');
Route::get('/admin/prediksicmb/{cambodia}', 'PrediksicmbController@show');
Route::get('/admin/prediksicmb/{cambodia}/edit', 'PrediksicmbController@edit');
Route::patch('/admin/prediksicmb/{cambodia}', 'PrediksicmbController@update');
Route::delete('/admin/prediksicmb/{cambodia}/delete', 'PrediksicmbController@delete');

Route::get('/admin/prediksitw', 'PrediksitwController@index');
Route::get('/admin/prediksitw/create', 'PrediksitwController@create');
Route::post('/admin/prediksitw', 'PrediksitwController@store');
Route::get('/admin/prediksitw/{taiwan}', 'PrediksitwController@show');
Route::get('/admin/prediksitw/{taiwan}/edit', 'PrediksitwController@edit');
Route::patch('/admin/prediksitw/{taiwan}', 'PrediksitwController@update');
Route::delete('/admin/prediksitw/{taiwan}/delete', 'PrediksitwController@delete');

Route::get('/admin/prediksichn', 'PrediksichnController@index');
Route::get('/admin/prediksichn/create', 'PrediksichnController@create');
Route::post('/admin/prediksichn', 'PrediksichnController@store');
Route::get('/admin/prediksichn/{china}', 'PrediksichnController@show');
Route::get('/admin/prediksichn/{china}/edit', 'PrediksichnController@edit');
Route::patch('/admin/prediksichn/{china}', 'PrediksichnController@update');
Route::delete('/admin/prediksichn/{china}/delete', 'PrediksichnController@delete');

Route::get('/admin/prediksihk', 'PrediksihkController@index');
Route::get('/admin/prediksihk/create', 'PrediksihkController@create');
Route::post('/admin/prediksihk', 'PrediksihkController@store');
Route::get('/admin/prediksihk/{hongkong}', 'PrediksihkController@show');
Route::get('/admin/prediksihk/{hongkong}/edit', 'PrediksihkController@edit');
Route::patch('/admin/prediksihk/{hongkong}', 'PrediksihkController@update');
Route::delete('/admin/prediksihk/{hongkong}/delete', 'PrediksihkController@delete');

Route::get('/admin/prediksijpn', 'PrediksijpnController@index');
Route::get('/admin/prediksijpn/create', 'PrediksijpnController@create');
Route::post('/admin/prediksijpn', 'PrediksijpnController@store');
Route::get('/admin/prediksijpn/{japan}', 'PrediksijpnController@show');
Route::get('/admin/prediksijpn/{japan}/edit', 'PrediksijpnController@edit');
Route::patch('/admin/prediksijpn/{japan}', 'PrediksijpnController@update');
Route::delete('/admin/prediksijpn/{japan}/delete', 'PrediksijpnController@delete');

Route::get('/users', 'UsersController@index');
Route::get('/users/create', 'UsersController@create');
Route::post('/users', 'UsersController@store');
Route::get('/users/{user}', 'UsersController@show');
Route::get('/users/{user}/edit', 'UsersController@edit');
Route::patch('/users/{user}', 'UsersController@update');
Route::delete('/users/{user}/delete', 'UsersController@delete');

Route::get('/groups', 'GroupsController@index');
Route::get('/groups/create', 'GroupsController@create');
Route::post('/groups', 'GroupsController@store');
Route::get('/groups/{group}', 'GroupsController@show');
Route::get('/groups/{group}/edit', 'GroupsController@edit');
Route::patch('/groups/{group}', 'GroupsController@update');
Route::delete('/groups/{group}/delete', 'GroupsController@delete');

Route::get('/categories', 'CategoriesController@index');
Route::get('/categories/create', 'CategoriesController@create');
Route::post('/categories', 'CategoriesController@store');
Route::get('/categories/{category}', 'CategoriesController@show');
Route::get('/categories/{category}/edit', 'CategoriesController@edit');
Route::patch('/categories/{category}', 'CategoriesController@update');
Route::delete('/categories/{category}/delete', 'CategoriesController@delete');

Route::get('/reports', 'ReportsController@index');
Route::get('/reports/create', 'ReportsController@create');
Route::post('/reports', 'ReportsController@store');
Route::get('/reports/{report}', 'ReportsController@show');
Route::get('/reports/{report}/edit', 'ReportsController@edit');
Route::patch('/reports/{report}', 'ReportsController@update');
Route::delete('/reports/{report}/delete', 'ReportsController@delete');
