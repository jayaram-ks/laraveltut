<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('jayaram/{name}',function($name){
   echo "Name is ".$name;
});


Route::get('customer/{id}','CustomerController@customer');

Route::get('/test',function(){


	echo "<form action='test' method='POST'>";
	echo "<input type='hidden' name='_token' value='".csrf_token()."' >";
	echo "<input type='hidden' name='_method' value = 'DELETE' />";
	echo "<input type='submit'/>";

	echo "</form>";

});



Route::get('/orders',function()
{
      $orders = App\Order::All();
      foreach($orders as $order)
      {
      	  //$customer = App\Customer::find($order->customer_id);
          echo $order->name ." belongs to -- ".$order->customer->name;
          echo "<br>";
      }
});

Route::get('create_customer',"CustomerController@createcustomer");

Route::post('create_customer','CustomerController@insertcustomer');


Route::get('edit_customer/{id}',function($id){
  $customer = App\Customer::find($id);
       
  echo "<form method='POST' action='/edit_customer/".$id."' >";
  echo "<input type='text' name='cname' value='".$customer->name."'' />";
  echo "<input type='hidden' name='_method' value='PUT' >"; 
  echo "<input type='hidden' name='_token' value='".csrf_token()."'>";
  echo "<input type='submit' value='Update'>";
  echo "</form>";

});

Route::put('edit_customer/{id}','CustomerController@updatecustomer');

Route::get('delete_customer/{id}','CustomerController@deletecustomer');

Route::post('test',function()
{
	echo " CREATED : POST REQUEST received ";
});

Route::put('test',function(){
	echo " UPDATED : PUT REQUEST received ";
});

Route::delete('test',function(){
	echo " DELETED : DELETE REQUEST received ";
});

Route::get('set_session',function(){
    session(['uzrname'=>"Jayaram"]);
});

Route::get('get_session',function(){
     echo session('uzrname');
})->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index');


Route::group(['middleware'=>['admin']],function(){

    Route::get('/admin',function(){
      echo "User is loggedin";
    });

});



//REFERENCES
// multiple methods in request
Route::match(['get','post'],'/',function(){

});

