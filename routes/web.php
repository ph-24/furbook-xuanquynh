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
use Illuminate\Support\Facades\Input;
Route::get('/', function () {
  return redirect('cats');
});

/*Route::get('cats',function(){
	$cats = Furbook\Cat::all();
	
	return view('cats.index')->with('cats',$cats);
});


Route::get('cats/breeds/{name}',function($name){
	$breed = Furbook\Breed::with('cats')
	->whereName($name)
	->first();
	return view('cats.index')
	->with('breed',$breed)
	->with('cats',$breed->cats);
});
//create
Route::get('cats/create',function(){
	return view('cats.create');
});
Route::post('cats',function(){
	$cat= Furbook\Cat::create(Input::all());
	return redirect('cats/'.$cat->id)->withSuccess('Cat has been updated.');
});
//delete
Route::delete('cats/{cat}',function(Furbook\Cat $cat){
	$cat->delete();
	return redirect('cats')
	->withSuccess('Cat has been deleted.');
});
*/



/*Route::get('/', function () {
   /* c1:
    return view('cats/show')->with('number',10);*/
    /*C2:
    $number=10;
    return view(('cats/show'),compact('number'));*/
   /* c3: return view('cats/show', array('number'=>10));*/

 /*  return redirect('cats');
});
*/
Route::resource('cat','CatController');
/*list cats*/
/*Route::get('/cats', function () {
	$cats = Furbook\Cat::all();
     return view('cats/index')->with('cats',$cats);
});*/
//display list cats of breed name
Route::get('/cat/breeds/{name}', function ($name) {
   $breed=Furbook\Breed::with('cats')
   ->where('name',$name)
   ->first();

   return view('cats.index')
   ->with('breed',$breed)
   ->with('cats',$breed->cats);
});
//display inf cat
/*Route::get('/cats/{id}', function ($id) {
	 $cat = Furbook\Cat::find($id);
   return view('cats.show')->with('cat', $cat);
   // echo sprintf('Cat #'.$id);
})->where('id','[0-9]+');*/
//create cats 
/*Route::get('/cats/create', function () {
	return view('cats.create');
	//dd(Request::all());
	//dd(Input::all());
	
});*/
/*Route::post('/cats', function () {
	$cat= Furbook\Cat::create(Input::all());
   return redirect('cats/'.$cat->id)->with('cat',$cat)
   ->withSuccess('create cat success');
    echo 'du lieu moi duoc gui len';
});
*/

//update

/*Route::get('/cats/{id}/edit', function ($id) {
	$cat= Furbook\Cat::find($id);
	return view('cats.edit')->with('cat',$cat);
    echo sprintf('edit cats'.$id);
});
Route::put('/cats/{id}', function ($id) {
	
	$cat= Furbook\Cat::find($id);
	//dd(Input::all());

	$cat->update(Input::all());
	return redirect('cats/'.$cat->id)
	->withSuccess('update cat success');
     //echo 'du lieu update duoc gui len';
});*/
//delete
/*Route::get('/cats/{id}/delete', function ($id) {
	$id=Input::post('id');
	$cat=Furbook\Cat::find($id);
	$cat->delete();
	return redirect('cats')
	->route('cat.show', $cat->id)
	->withSuccess('delete cat success');
    
});
Route::delete('/cats/{id}', function ($id) {
    echo sprintf('delete cats'.$id);
});*/


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
