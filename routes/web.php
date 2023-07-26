<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Residents;
use App\Http\Livewire\Travelers;
use App\Http\Livewire\Certificates;

use App\Http\Livewire\Monitorings;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\MoveController;
use App\Models\Certificate;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('resident', Residents::class)
->middleware(['auth:sanctum', 'verified'])
->name('resident');

Route::get('traveler', Travelers::class)
->middleware(['auth:sanctum', 'verified'])
->name('traveler');

Route::get('monitoring', Monitorings::class)
->middleware(['auth:sanctum', 'verified'])
->name('monitoring');

Route::get('certificates', Certificates::class)
->middleware(['auth:sanctum', 'verified'])
->name('certificates');

Route::get('addMonitoring/{id}',[Travelers::class,'addMonitoring']);



Route::get('pdf/previewTraveler', [PDFController::class, 'previewTraveler'])->name('pdf.previewTraveler');
Route::get('pdf/generatePDFtraveler', [PDFController::class, 'generatePDFtraveler'])->name('pdf.generatePDFtraveler');

Route::get('pdf/previewMonitoring', [PDFController::class, 'previewMonitoring'])->name('pdf.previewMonitoring');
Route::get('pdf/generatePDFMonitoring', [PDFController::class, 'generatePDFMonitoring'])->name('pdf.generatePDFMonitoring');

Route::get('pdf/certificate', [PDFController::class, 'certificate'])->name('pdf.certificate');


//Route::get('pdf/previewTravelerMonitoring', [PDFController::class, 'previewTravelerMonitoring'])->name('pdf.previewTravelerMonitoring');
//Route::get('pdf/generatePDFTravelerMonitoring', [PDFController::class, 'generatePDFTravelerMonitoring'])->name('pdf.generatePDFTravelerMonitoring');

Route::get('googlePieChart', [ChartController::class, 'googlePieChart']) ->name('googlePieChart');

//Route::get('google-pie-chart', 'ChartController@googlePieChart');

//Route::get('googlePieChart', [ChartController::class, 'index']);

//Route::get('/{id}', [
//    'as' => 'move',
//    'uses' => 'MoveController@move',
//]);

//Route::get('move', [MoveController::class, 'move']);

//Route::get('/{id}',['as'=>'move','uses'=>'MoveController@move',]);

//Route::get('/{id}',[MoveController::class, 'move_one_record'])->name('move_one_record');
