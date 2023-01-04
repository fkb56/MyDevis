<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DevisController;
use App\Http\Controllers\FacturesController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StockController;
use App\Models\Client;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', function() {
	return Inertia::render('Welcome', [
		'canLogin' => Route::has('login'),
		'user' => DB::table('users')->select('name_enterprise', 'street_number', 'street', 'post_code', 'city', 'phone')->get()
	]);
});

Route::get('/contact', function() {
	return Inertia::render('Contact', [
		'user' => DB::table('users')
			->select('name_enterprise', 'street_number', 'street', 'post_code', 'city', 'phone', 'email')
			->get()
	]);
})->name('contact');
Route::post('/contact', [MessageController::class, 'sendMessage'])->name('contact');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function() {
	return Inertia::render('Dashboard', [
		'products' => DB::table('products')->where('quantity', 0)->get(),
		'count_products' => Product::all()->count(),
		'clients' => DB::table('clients')->orderBy('created_at')->take(10)->get(),
		'count_clients' => Client::all()->count(),
	]);
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->group(function() {
	Route::resource('categorie', CategoryController::class);
	Route::resource('clients', ClientController::class);
	Route::resource('produits', ProductController::class);
	Route::resource('devis', DevisController::class);
	Route::resource('factures', FacturesController::class);
	Route::resource('stocks', StockController::class);
});
