<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MembershipController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SingleItemController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PaymentMethodController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/dashboard', function () {
    return view('welcome-dashboard');
});

Route::get('/', [HomeController::class, 'index'])->name('home');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


// Contact us page
Route::get('pages/contact', [ContactController::class, 'contact'])->name('go-contact');
Route::post('/message_sent', [ContactController::class, 'sendEmail'])->name('contact.send');

Route::view('pages/aboutus', 'pages.aboutus')->name('go-aboutus');
Route::get('pages/membership', [MembershipController::class, 'membership'])->name('go-membership');
Route::get('/products/category/{category_id}', [ProductController::class,'showAll'])->name('go-products');
Route::get('pages/singleitem/{id}', [SingleItemController::class,'index'])->name('single');
Route::get('pages/contact', [ContactController::class, 'contact'])->name('go-contact');
Route::get('pages/cart', [CartController::class, 'index'])->name('go-cart');



Route::get('/product/{id}', [CartController::class, 'remove'])->name('cart.remove');
Route::post('pages/singleitem/{id}', [SingleItemController::class,'create'])->name('addto_cart');
Route::get('pages/checkout', [PaymentMethodController::class,'index'])->name('go-checkout');
Route::post('pages/checkout/done', [PaymentMethodController::class,'store'])->name('checkout');
