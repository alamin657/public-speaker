<?php
// custom frontend
use App\Http\Controllers\frontend\FrontendController;


// Backend
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\GalleryController as dashboard_gallery;
use App\Http\Controllers\backend\ProjectController;
use App\Http\Controllers\backend\AwardController;
use App\Http\Controllers\backend\PortfolioController;
use App\Http\Controllers\backend\BannerController;
use App\Http\Controllers\backend\ContactController;
use App\Http\Controllers\backend\AboutController;
use App\Http\Controllers\backend\SkillController;
use App\Http\Controllers\backend\EducationController;
use App\Http\Controllers\backend\CounterController;
use App\Http\Controllers\backend\BlogController;
use App\Http\Controllers\backend\PorfolioCategoryController;
use App\Http\Controllers\backend\SettingController;

// use Illuminate\Routing\Route;

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
// Frotend
Route::get('/', [FrontendController::class, 'index'])->name('frontend.home');
Route::get('/about', [FrontendController::class, 'about'])->name('frontend.about');
Route::get('/skills', [FrontendController::class, 'skills'])->name('frontend.skills');
Route::get('/education', [FrontendController::class, 'education'])->name('frontend.education');
Route::get('/portfolio', [FrontendController::class, 'portfolio'])->name('frontend.portfolio');
Route::get('/award', [FrontendController::class, 'award'])->name('frontend.award');
Route::get('/project', [FrontendController::class, 'project'])->name('frontend.project');
Route::get('/gallery', [FrontendController::class, 'gallery'])->name('frontend.gallery');
Route::get('/blog', [FrontendController::class, 'blog'])->name('frontend.blog');
// Route::get('/gallery/{id}', [FrontendController::class, 'show'])->name('frontend.gallery');
Route::get('/contact', [FrontendController::class, 'contact'])->name('frontend.contact');
Route::post('/contact', [FrontendController::class, 'store'])->name('frontend.store');


//Route::resource('/user-contact', FrontendContactController::class);



// Backend
Route::resource('/dashboard', DashboardController::class);
Route::resource('/admin-gallery', dashboard_gallery::class);

Route::resource('/admin-project', ProjectController::class);
Route::resource('/admin-award', AwardController::class);
Route::resource('/admin-portfolio', PortfolioController::class);
Route::resource('/portfoloioCategory', PorfolioCategoryController::class);
Route::resource('/admin-banner', BannerController::class);
Route::resource('/admin-contact', ContactController::class);
Route::resource('/admin-about', AboutController::class);
Route::resource('/admin-skill', SkillController::class);
Route::resource('/admin-education', EducationController::class);
Route::resource('/admin-counter', CounterController::class);
Route::resource('/admin-blog', BlogController::class);
Route::resource('/setting', SettingController::class);
Route::put('/setting/update', [SettingController::class, 'update'])->name('admin.basicsetting.update');
