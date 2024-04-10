<?php

use App\Http\Controllers\CautionController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DispatchController;
use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\AnomalyController;
use App\Http\Controllers\PermitController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\ManagementController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//Permits Routes
Route::name('permits')->get('/permits', [PermitController::class, 'index']);
Route::name('permits.create')->get('/permits/create', [PermitController::class, 'create']);
Route::name('permits.edit')->get('/permits/edit/{id}', [PermitController::class, 'edit']);
Route::name('permits.open')->get('/permits/open/{id}', [PermitController::class, 'open']);
Route::name('permits.close')->get('/permits/close/{id}', [PermitController::class, 'close']);
Route::name('permits.id')->get('/permits/show/{id}');


//Events Routes
Route::name('events')->get('/events');
Route::name('events.id')->get('/events/{id}');


//Anomalies Routes
Route::name('anomalies')->get('/anomalies', [AnomalyController::class, 'index']);
Route::name('anomalies.create')->get('/anomalies/create', [AnomalyController::class, 'create']);
Route::name('anomalies.edit')->get('/anomalies/edit/{id}', [AnomalyController::class, 'edit']);
Route::name('anomalies.id')->get('/anomalies/show/{id}');


//Dispatches Routes
Route::name('dispatches')->get('/dispatches', [DispatchController::class, 'index']);
Route::name('dispatches.id')->get('/dispatches/{id}');


//Management Routes
Route::name('management')->get('/management', [ManagementController::class, 'index']);
Route::name('management.id')->get('/management/{id}');


//Department Routes
Route::name('departments')->get('/departments', [DepartmentController::class, 'index']);
Route::name('departments.id')->get('/departments/{id}');


//Users Routes
Route::name('users')->get('/users', [UserController::class, 'index']);
Route::name('users.register')->get('/users/register', [UserController::class, 'register']);


//Events Routes
Route::name('events')->get('/events', [EventController::class, 'index']);
//Facility Routes
Route::name('facilities')->get('/facilities', [FacilityController::class, 'index']);
Route::name('facilities.types')->get('/facilities/types', [FacilityController::class, 'types']);


//Equipment Routes
Route::name('equipment')->get('/equipment', [EquipmentController::class, 'index']);
Route::name('equipment.create')->get('/equipment/create', [EquipmentController::class, 'create']);
Route::name('equipment.edit')->get('/equipment/edit/{id}', [EquipmentController::class, 'edit']);
Route::name('equipment.classes')->get('/equipment/classes', [EquipmentController::class, 'classes']);
Route::name('equipment.voltage.levels')->get('/equipment/voltage-levels', [EquipmentController::class, 'voltageLevels']);



//Cautions Routes
Route::name('cautions')->get('/cautions', [CautionController::class, 'index']);
