<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Shop;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ShopController;
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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/create', function () {
    return view('create');
});


Route::get('/shop', function () {
    return view('shop');
});

Route::post('/shop/product', [ShopController::class, 'product'])->name('shop.product');
Route::post('/shop/store', [ShopController::class, 'store'])->name('shop.store');
Route::get('/shop/add', [ShopController::class, 'add'])->name('shop.add');
Route::get('/user/login', [UserController::class, 'login'])->name('user.login');
Route::get('/user/register', [UserController::class, 'create'])->name('user.register');
Route::post('/user/store', [UserController::class, 'store'])->name('user.store');



//Route::get('/user', [UserController::class, 'create']);

/* Route::resource('/user', UserController::class);
Route::resource('/shop', ShopController::class); */


/* Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/register', function () {
    return view('register');
}); */



/*
|--------------------------------------------------------------------------
| ELOQUENT Relationships
|--------------------------------------------------------------------------
*/

//One to one relationships
/* Route::get('/user/{id}/shop', function ($id) {
    return User::find($id)->shop;
});

Route::get('/shop/{id}/user', function ($id) {
    return Shop::find($id)->user->name;
});


//One to Many relationships
Route::get('/shops', function () {
    $user = User::find(2);

    foreach ($user->shops as $shop) {
        echo $shop->businessName . '<br>';
    }
});
 */

/*
|--------------------------------------------------------------------------
| ELOQUENT
|--------------------------------------------------------------------------
*/
/*
Route::get('/read', function () {
    $users = User::all();
    return $users;
});

Route::get('/readOne', function () {
    $user = User::find(3);
    return $user;
});

Route::get('/findWhere', function () {
    $users = User::where('name', 'LIKE', "%Ma%")->get();
    return $users;
});

Route::get('/findId', function () {

    $users = USER::where('id', '11')->orderBy('id', 'desc')->take(1)->get();
    return $users;
});

Route::get('/findorfail', function () {
    $users = User::findOrFail(3);
    return $users;
});

Route::get('/basicinsert', function () {
    $user = new User;
    $user->name = 'Ricardo';
    $user->email = 'ricardo@hotmail.com';
    $user->password = 'ricardo123';
    $user->save();
});

Route::get('/updateone', function () {
    $user = User::find(6);

    $user->email = 'pepemario@hotmail.com';

    $user->save();
});

Route::get('/delete', function () {
    $user = User::find(3);
    $user->delete();
});

Route::get('/destroy', function () {
    $user = User::destroy(7, 9);
});

Route::get('/deleteWhere', function () {
    $user = User::where('name', 'Ricardo')->delete();
});

Route::get('/softDelete', function () {
    $user = User::find(11)->delete();
});

Route::get('/readSoftDelete', function () {
    $user = User::withTrashed()->where('id', '11')->get();
    return $user;
});

Route::get('/restore', function () {
    $user = User::withTrashed()->where('id', '11')->restore();
});

Route::get('/forcedelete', function () {
    $user = User::withTrashed()->where('id', '11')->forceDelete();
});

Route::get('/forcedelete2', function () {
    $user = User::onlyTrashed()->where('id', '11')->forceDelete();
});
 */
/*


Route::get('/insert', function () {
    # code...
    DB::insert('insert into users (name, email, password) values (?, ?,?)', ['Marc', 'mark@hotmail.com', '123']);
});

Route::get('/read', function () {
    # code...
    $results = DB::select('select * from users where id =?', [1]);

    foreach ($results as $result) {
        # code...
        return $result->email;
    }
});

Route::get('/update', function () {
    # code...
    $updated = DB::update(
        'update users set name = ? where id = ?',
        ['Luis', '1']
    );

    return $updated;
});


Route::get('/delete', function () {
    # code...
    $deleted = DB::delete(
        'delete from users where id = ?',
        [2]
    );

    if ($deleted == 1) {

        return ('Registro no puede ser eliminado');
    } else {
        return ('Registro eliminado');
    }
});
 */

/* Route::get('/insert', function () {
    # code...
    DB::insert('insert into users (name, email, password) values (?, ?,?)', ['Ian', 'Ian@hotmail.com', '321']);
});
 */
