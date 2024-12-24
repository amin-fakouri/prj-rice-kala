<?php

use App\Livewire\Landing;
use App\Livewire\MyDashboard;
use App\Livewire\Products\AllProducts;
use App\Livewire\ProfileUser\ProfileUser;
use App\Livewire\Train\Traning;
use App\Livewire\User\AddDiscount;
use App\Livewire\User\BuyProduct\BuyProdcut;
use App\Livewire\User\BuyProductWithDiscount\BuyProdcutDiscount;
use App\Livewire\User\CreateAccountCompany;
use App\Livewire\User\FishProduct;
use App\Livewire\User\FishProductDiscount;
use App\Livewire\User\LoginToComapny\LoginToCompany;
use App\Livewire\User\LoginToComapny\RegisterToCompany;
use App\Livewire\User\Products;
use App\Livewire\User\ProductsDiscoun;
use App\Livewire\User\ProductsUser;
use App\Livewire\User\ReadPropertyRice;
use App\Livewire\User\SeeProduct\SeeProduct;
use App\Livewire\User\SeeProductWithDiscount\SeeProdcutDiscount;
use App\Livewire\User\Seller\Seller;
use App\Livewire\User\Seller\SellerDashboard;
use App\Livewire\User\VisitPage\VisistPage;
use Illuminate\Support\Facades\Route;

//Route::view('/', 'welcome');

Route::get('/', Landing::class);

Route::middleware('signed')->group(function () {
    Route::get('/my_dashboard/{user_id}', MyDashboard::class)->name('my_dashboard');
    Route::get('/seller/{user_id}', Seller::class)->name('page_seller');

    Route::get('/create_company/{user_id}', CreateAccountCompany::class)
        ->name('create_company');

    Route::get('dashboard-seller/{id}', SellerDashboard::class)->middleware('signed')
        ->name('dash_seller');

    Route::get('see_product', ProductsUser::class)->name('products_created');
    Route::get('discount/{id_product}', AddDiscount::class)->name('add_discount');

    Route::get('/profile/{id}', ProfileUser::class)->middleware('signed')
        ->name('profile_user');

    Route::get('/see_product_discount/{product_id}', SeeProdcutDiscount::class)
        ->name('see_product_discount');

    Route::get('/see_product/{product_id}', SeeProduct::class)
        ->name('see_product');

    Route::get('/buy_product/{product_id}', BuyProdcut::class)->name('buy_product');

    Route::get('/buy_product_discount/{product_id}', BuyProdcutDiscount::class)
        ->name('buy_product_discount');

    Route::get('/fish_pro_discount/{product_id}', FishProductDiscount::class)
        ->name('fish_pro_dis');

    Route::get('/fis_pro/{product_id}', FishProduct::class)->name('fish_pro');


});

Route::get('/products_discount_all', ProductsDiscoun::class)->name('pros_dis');
Route::get('/products_all', Products::class)->name('pros');

Route::get('/visit/{name_com_id}', VisistPage::class)->name('visit');

Route::get('/about', ReadPropertyRice::class)->name('read_pro_rice');


// Route For Login Or Sing Up To Account Company
Route::middleware('signed')->group(function () {
    Route::get('/login_company', LoginToCompany::class)
        ->name('login_company');

    Route::get('/register_company/{user_id}', RegisterToCompany::class)
        ->name('register_company');

    Route::get('/products', Products::class)->name('product_no_dis');
    Route::get('/products_dis', ProductsDiscoun::class)->name('pro_dis');

    Route::get('/all_products/{i}', AllProducts::class)->name('all_pros');
});


//Route::view('dashboard', 'dashboard')
//    ->middleware(['auth', 'verified'])
//    ->name('dashboard');


// For Tran Tailwind
Route::get('/tailwind', Traning::class);

Route::view('profile', 'profile')
    ->name('profile');

require __DIR__ . '/auth.php';
