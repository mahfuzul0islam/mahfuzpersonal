<?php

use App\Http\Controllers\Admin\CustomAuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Home\HomeContactController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Pages\AboutController;
use App\Http\Controllers\Pages\ContactController;
use App\Http\Controllers\Pages\ImageController;
use App\Http\Controllers\Pages\WorkController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/profile/logout', [ProfileController::class, 'Logout'])->name('profile.logout');
});
//admin Grouping starts here
Route::middleware(['auth', 'roles:admin'])->group(function () {
    //CustomAuth controller group starts here
    Route::controller(CustomAuthController::class)->group(function () {
        Route::get('/admin/profile', 'ProfileIndex')->name('admin.profile');

        Route::post('/admin/profile/update', 'ProfileUpdate')->name('admin.profile.update');

    });

    //admin controller group starts here
    Route::controller(AdminController::class)->group(function () {
        Route::get('/admin/dashboard', 'dashboard')->name('admin.dashboard');
    }); 
    //my work controller starts here
    Route::controller(WorkController::class)->group(function () {
        Route::get('/admin/mywork', 'index')->name('admin.work');
        Route::get('/admin/add-work', 'AddWorkIndex')->name('admin.add.work');
        Route::post('/admin/store-work', 'StoreWork')->name('admin.store.work');
        Route::get('/admin/edit-work/{id}', 'EditWork')->name('admin.edit.work');
        Route::post('/admin/update-work/{id}', 'UpdateWork')->name('admin.update.work');
        Route::get('/admin/delete-work/{id}', 'DeleteWork')->name('admin.delete.work');
    });
    //image controller starts here
    Route::controller(ImageController::class)->group(function () {
        Route::get('/admin/images', 'BannerImage')->name('admin.images');
        Route::post('/admin/images/{id}', 'UpdateImage')->name('admin.images.update');
        //post part here 
        Route::get('/admin/posts', 'PostIndex')->name('admin.posts');
        Route::post('/admin/store-posts', 'PostStore')->name('admin.store.posts');
        Route::get('/admin/posts/delete/{id}', 'PostDelete')->name('admin.posts.delete');
    });
    //about controller starts here
    Route::controller(AboutController::class)->group(function () {
        
        //My expertise and skills part here
        Route::post('/admin/store-skills', 'StoreSkills')->name('admin.store.skills');
        Route::get('/admin/delete-skills/{id}', 'DeleteSkills')->name('admin.delete.skill');
        //address part here
        Route::post('/admin/update-addtess/{id}', 'UpdateAddress')->name('admin.update.address');
        //about part here
        Route::post('/admin/update-abouts/{id}', 'UpdateAbouts')->name('admin.update.about');
        Route::get('/admin/abouts', 'AboutIndex')->name('admin.abouts');
    });
    //Contact controller starts here
    Route::controller(ContactController::class)->group(function () {
        Route::get('/admin/contacts', 'ContactIndex')->name('admin.contacts');
        Route::get('/admin/delete/message/{id}', 'DeleteMessage')->name('admin.delete.message');

    });


});

//forntend group starts here

//home controller starts here
Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'HomeIndex')->name('home.index');
    Route::get('/myworks', 'HomeWork')->name('home.work');
    Route::get('/myworks/single/{id}', 'HomeWorkSingle')->name('home.work.single');
    Route::get('/posts', 'HomePost')->name('home.post');
    Route::get('/terms-of-service', 'HomeTerms')->name('home.terms');
    Route::get('/about', 'HomeAbout')->name('home.about');
});
//contact controller
Route::controller(HomeContactController::class)->group(function () {
    Route::get('/contacts', 'HomeContact')->name('home.contact');
    Route::post('/contacts/store', 'ContactStore')->name('home.contact.store');
});

require __DIR__ . '/auth.php';
