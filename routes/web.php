<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\InsightsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\OptimyzeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UniversityController;

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


Route::get('/',[HomeController::class,'index'])->name('index');
Route::get('/uk',[HomeController::class,'foregin'])->name('foregin');
Route::get('contact',[ContactController::class,'index'])->name('contact');
Route::get('about',[AboutController::class,'index'])->name('about');

Route::get('portfolio',[PortfolioController::class,'index'])->name('portfolio');
Route::get('portfolio-details',[PortfolioController::class,'portfolioDetails'])->name('portfolio-details');
Route::get('services',[ServicesController::class,'index'])->name('services');
Route::get('service-details',[ServicesController::class,'details'])->name('service-details');
Route::get('client',[ClientController::class,'index'])->name('Client');
Route::get('insights',[InsightsController::class,'index'])->name('insights');


Route::get('business',[PersonaController::class,'business'])->name('business');
Route::get('owner',[PersonaController::class,'owner'])->name('owner');
Route::get('private',[PersonaController::class,'private'])->name('private');
Route::get('finance',[PersonaController::class,'finance'])->name('finance');
Route::get('/universities',[UniversityController::class,'getUniversities']);
/*****************************************Service**************************************************************** */
Route::get('/small-business',[ServicesController::class,'small_business']);
Route::get('/cfo',[ServicesController::class,'cfo']);
Route::get('/private-client',[ServicesController::class,'private_client']);
Route::get('my-field-is-non-profit-business',[ServicesController::class,'field_in_finance']);
/*****************************************Optimyze**************************************************************** */
Route::get('/optimize/doing-business',[OptimyzeController::class,'doing_busness']);
Route::get('/optimize/unlock-your-business-values',[OptimyzeController::class,'unlock_your_business']);
Route::get('/optimize/drive-business-performance',[OptimyzeController::class,'drive_business_performance']);
Route::get('/optimize/gain-financeial-control',[OptimyzeController::class,'gain_finance']);
Route::get('/optimize/audit',[OptimyzeController::class,'audit']);
Route::get('/optimize/tax-reporting',[OptimyzeController::class,'tax_reporting']);
Route::get('/optimize/rising-capital',[OptimyzeController::class,'rising_capital']);
Route::get('/finance-ops',[OptimyzeController::class,'finance_ops']);
Route::get('/family-offices',[OptimyzeController::class,'family_offices']);
Route::get('/tax-planning',[OptimyzeController::class,'tax_planning']);
Route::get('/international-private-client',[OptimyzeController::class,'international_private_client']);
Route::get('/trusts-and-estate-planning',[OptimyzeController::class,'trusts_and_estate_planning']);
/*****************************************Blog**************************************************************** */
Route::get('insights',[BlogController::class,'index'])->name('blog');
Route::get('add-blog',[BlogController::class,'add_blog'])->middleware('auth');
Route::post('submit-blog',[BlogController::class,'submit_blog']);
Route::get('/blog-list',[BlogController::class,'list']);
Route::get('/edit-blog/{id}',[BlogController::class,'edit']);
Route::post('update-blog/{id}',[BlogController::class,'update']);
Route::get('/delete-blog/{id}',[BlogController::class,'delete']);
Route::get('blog-details',[BlogController::class,'blogDetails'])->name('blog-details');

/*****************************************I am small busniss**************************************************************** */
Route::get('services/owner-managed-businesses',[OptimyzeController::class,'owner_managed']);
Route::get('services/tech-businesses',[OptimyzeController::class,'tech_business']);
Route::get('services/start-ups',[OptimyzeController::class,'start_ups']);
Route::get('services/manufacturers',[OptimyzeController::class,'manufacturers']);
Route::get('services/distributors',[OptimyzeController::class,'distributors']);
Route::get('services/charitable-organization',[OptimyzeController::class,'charitable_organization']);
Route::get('services/saas-businesses',[OptimyzeController::class,'saas_businesses']);
/*****************************************I am a CFO**************************************************************** */
Route::get('services/tranform-finance',[OptimyzeController::class,'tranform_finance']);
Route::get('services/coprate-finence-service',[OptimyzeController::class,'coprate_finence_service']);
Route::get('services/unlock-your-busines-value',[OptimyzeController::class,'unlock_busness']);
Route::get('services/drive-performance',[OptimyzeController::class,'drive_performance']);
Route::get('services/fractional-servicess',[OptimyzeController::class,'fractional_services']);
/*****************************************My field is non profit business**************************************************************** */
Route::get('services/cost-of-doing-business',[OptimyzeController::class,'cost_of_doing_business']);
Route::get('services/audit-and-assurance',[OptimyzeController::class,'audit_and_assurance']);
Route::get('services/tax-planning',[OptimyzeController::class,'tax_planning_service']);
Route::get('services/governance',[OptimyzeController::class,'governance']);

/*****************************************Login******************************************************************************* */
Route::get('/login',[LoginController::class,'login'])->name('login');
Route::Post('/submit-login',[LoginController::class,'submit_login']);
Route::get('/logout',[LoginController::class,'logout']);
Route::get('/test',[BlogController::class,'test']);
Route::post('/test-submit',[BlogController::class,'test_submit']);

// Route::get('news',[NewsController::class,'news'])->name('news');
Route::get('/add-news',[NewsController::class,'add_news']);
Route::post('/submit-news',[NewsController::class,'submit_news']);
Route::get('/news_list',[NewsController::class,'news_list']);
Route::get('/edit-news/{id}',[NewsController::class,'edit']);
Route::post('update-news/{id}',[NewsController::class,'update']);
Route::get('/delete-news/{id}',[NewsController::class,'delete']);
Route::get('/news', [NewsController::class, 'newsdetails']);
Route::get('/all-news',[NewsController::class,'all_news']);
Route::get('/news-detail/{id}', [NewsController::class, 'news_detail']);
Route::get('/{slug}',[BlogController::class,'detail']);


