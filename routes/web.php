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

Route::get('/', function () {
    return view('welcome');
});
/* راوت من غير برميتر*/
Route::get('test',function (){
    echo 'lkjkgf';
    $ffg='kjmgfk';
    dd(546564,$ffg);



});
 /* راوت مع برميتر*/
Route::get("name/{gg}",function ($id){
   dd($id);

});
 /* راوت مع  اكثر من برميتر*/
 Route::get("name/{gg}/{gd}",function ($id, $gd){
     dd($id .$gd);

 });

 /* نقل من راوت الي راوت أخر */
 Route::redirect('blog' ,'new_blog',301);
 Route::  get('new_blog',function (){

 })->name('my_new_blog');/* اسم الراوت  */

 Route::redirect('google' , 'https://www.google.com/',301);
 /* عرض من الفيو  */
 Route::get("name",function (){
     return   view('welcome');

 });

Route::prefix('admin')->group (function(){
    Route::get("name",function (){
        return   view('welcome');

    });
    Route::prefix('user')->group (function (){
        Route::get("name",function (){
            dd(4545);

        });



    });


 });
/*  عمل ميدل وير وإضافة أكثر ممن فحص يتم بشكل تسلسلي */
Route::middleware(['checkip','auth'])->group (function (){
    Route::get("dashbord",function (){


    });






});
Route::middleware('throttle:3,1')->group(function (){

    Route::get("admin",function (){


    });
}


);

