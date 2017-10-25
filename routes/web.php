<?php

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

    return view('index');


});
Route::get('/routeBus', function () {

    return view('routeBus');

});
Route::get('/amountPassenger', function () {

    return view('amountPassenger');

});
Route::get('/indexPassenger', function () {

    return view('indexPassenger');

});
Route::get('/amountPassengerPassenger', function () {

    return view('amountPassengerPassenger');

});



Route::get('/routeBusPassenger', function() {
    return view('routeBusPassenger');
});
Route::get('/passengerAccount', function(){
    return view('passengerAccount');
});
Route::get('/graph', function(){
    return view('graph');
});
Route::get('/report', function(){
    return view('report');
});
Route::get('/statisticalData', function () {

    return view('statisticalData');

});




Route::get('protected', ['middleware' => ['auth', 'admin'], function() {
    return view('passengerAccount');
}]);

Route::get('passengerAccount', 'PassengerAccountController@getData');
Route::get('delete/{id}', 'PassengerAccountController@destroy');
Route::get('edit/{id}','PassengerAccountController@show');
Route::post('edit/{id}','PassengerAccountController@edit');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('home/{id}','HomeController@subscribe1');
Route::get('home2/{id}','HomeController@subscribe2');
Route::get('home3/{id}','HomeController@subscribe3');
Route::get('home4/{id}','HomeController@subscribe4');
Route::get('home5/{id}','HomeController@subscribe5');
Route::get('home6/{id}','HomeController@subscribe5');
Route::get('home7/{id}','HomeController@unSubscribe1');
Route::get('home8/{id}','HomeController@unSubscribe2');
Route::get('home9/{id}','HomeController@unSubscribe3');
Route::get('home10/{id}','HomeController@unSubscribe4');
Route::get('home11/{id}','HomeController@unSubscribe5');
Route::get('home12/{id}','HomeController@unSubscribe6');
Route::get('graph','graphController@graph');
Route::get('amountPassenger','amountPassengerController@graph');
Route::get('amountPassengerPassenger','amountController@graph');
Route::get('report','reportController@dailyGraph');
Route::get('week','WeekController@weeklyGraph');
Route::get('month','MonthController@monthlyGraph');
Route::get('year','YearController@yearlyGraph');
Route::get('scheduling','scheduleController@getDataSchedule');
Route::post('insert','scheduleController@insertDataSchedule');
Route::get('viewSchedule','scheduleController@displayDataSchedule');
Route::get('statisticalData','StatisticalDataController@getCount');



