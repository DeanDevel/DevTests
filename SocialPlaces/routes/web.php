<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


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
// nobody read comments!
Route::get('/', function () {
    return view('welcome');
});


Route::get('/contact/create', 'ContactController@create');
Route::post('/contact', 'ContactController@store');


Auth::routes();

Route::get("/home", "ContactController@getdata");


Route::get('test', function () {
    $user = [
        'name' => 'LaraVue Email',
        'info' => 'This email was sent from laravel application for testing purposes only...'
    ];

    ///put address here of HR department.
    Mail::to('somebody@email.com')->send(new \App\Mail\NewMail($user));
    $emailsent = "success => email sent => ok";

    ///small check if in database 
    $last2 = DB::table('contacts')->orderBy('id', 'DESC')->first();
    $response = response()->json(
        collect([
            'response' => 'success',
            'comments' => $last2,
        ])->toJson()
    );  

    echo json_decode($response); // It always print null and nothing. 
    dd($response, $emailsent );  // print Null
    return $response; //You will get proper json response in function return.
});