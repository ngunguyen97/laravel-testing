<?php


use App\DesignPattern\FactoryMethod\Conceptual\ConcreteCreator\ConcreteCreator1;
use App\DesignPattern\FactoryMethod\RealWorld\ConcreteCreator\FacebookPoster;
use App\Http\Controllers\ClientCodeController;
use App\Http\Controllers\ConcertOrdersController;
use App\Http\Controllers\GroupByController;
use App\Http\Controllers\ConcertsController;

use App\Http\Controllers\PageController;
use App\Http\Controllers\SocialNetworkController;
use App\Http\Controllers\UserController;
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

//function arrayData() {
//  return [
//    [
//      'id' => 1,
//      'interviewer' => 'Riddle',
//      'interviewee' => 'Larry',
//      'skill' => 'PHP',
//      'date' => '2021/01/01'
//    ],
//    [
//      'id' => 2,
//      'interviewer' => 'Hugh',
//      'interviewee' => 'Kuro',
//      'skill' => 'ReactJs',
//      'date' => '2021/01/02'
//    ],
//    [
//      'id' => 3,
//      'interviewer' => 'Hugh',
//      'interviewee' => 'Kusa',
//      'skill' => 'PHP',
//      'date' => '2021/01/03'
//    ],
//    [
//      'id' => 4,
//      'interviewer' => 'Riddle',
//      'interviewee' => 'Fuku',
//      'skill' => 'PHP',
//      'date' => '2021/01/01'
//    ],
//    [
//      'id' => 5,
//      'interviewer' => 'Hugh',
//      'interviewee' => 'Kevin',
//      'skill' => 'PHP',
//      'date' => '2021/01/03'
//    ],
//    [
//      'id' => 6,
//      'interviewer' => 'Will',
//      'interviewee' => 'Neko',
//      'skill' => 'Ruby',
//      'date' => '2021/01/01'
//    ]
//  ];
//}
//
//
//// Lesson: 2.1
//Route::get('/', function () {
//
//  $data = arrayData();
//  $group = new GroupByController();
//  $result = $group->arrayGroupBy($data, 'date', 'skill');
//
//  dd($result);
//});

// Lesson: 2.2
Route::get('/task-2', function () {
  $array = [1, 2, 5, 15, 9, 10, 20];
  $array1 = [5, 12, 1, 10, 9, 11, 3, 8];

  $group = new GroupByController();

  $newArray1 = $group->getUniqueValue($array, $array1);
  $newArray2 =  $group->getUniqueValue($array1, $array);

  $result = $group->mergeArray($newArray1, $newArray2);

  dd($result); // [2, 15, 20, 12, 11, 3, 8]

});

// Lesson: 2.3
Route::get('/task-3', [\App\Http\Controllers\GameController::class, 'index']);

Route::post('users', [UserController::class, 'store']);





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Design Pattern
Route::get('/factoryMethod', function () {
  echo nl2br("App: Launched with the ConcreteCreator1.\n");
  $clientCode = new ClientCodeController();
  $clientCode->index(new ConcreteCreator1());
  echo nl2br("\n\n");
});

Route::get('/factoryMethod/real', function () {
  echo nl2br("App: Launched with the FacebookPoster.\n");
  $client = new SocialNetworkController();
  $client->initialize(new FacebookPoster("john_smith", "******"));
  echo nl2br("\n\n");
});

Route::get('/abstract-factory', [PageController::class, 'index']);



/** =========================== */
/** Testing */
Route::get('concerts/{id}', 'ConcertsController@show');
Route::post('concerts/{id}/orders', [ConcertOrdersController::class, 'store']);
Route::post('/books', 'BooksController@store');
Route::patch('/books/{book}', 'BooksController@update');
Route::delete('/books/{book}', 'BooksController@destroy');

Route::post('/author', 'AuthorsController@store');
