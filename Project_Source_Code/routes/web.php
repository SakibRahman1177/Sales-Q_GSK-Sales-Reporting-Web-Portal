<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ExcelController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\ChambersController;
use App\Http\Controllers\senURLController;
use App\Http\Controllers\PdxURLController;
use App\Http\Controllers\ASEController;
use App\Http\Controllers\LoginAuthController;

use App\Models\ASE;
use Illuminate\Support\Facades\Input;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/login', [LoginAuthController::class, 'LogIn']);
Route::post('/login', [LoginAuthController::class, 'LoginSubmitted']); 

Route::get('/logout',[LoginAuthController::class,'logout'])->name('logout');

// Route::get('/change-password',[LoginAuthController::class,'changePWD']);
// Route::post('/change-password', [LoginAuthController::class, 'changePWDSubmitted']);

// Route::get('/Dump-data',[PostController::class, 'Store'])->middleware('ValidAdmin');
Route::get('/',[ExcelController::class, 'index'])->middleware('ValidAdmin');
Route::post('/Dumpdata/import',[ExcelController::class, 'importData'])->middleware('ValidAdmin');
Route::get('/Dumpdata/export',[ExcelController::class, 'exportData'])->middleware('ValidAdmin');

Route::get('/ASEList',[ASEController::class, 'AseTable'])->middleware('ValidAdmin');
Route::get('/edit-ase-list-data/{id}', [ASEController::class, 'editAseData'])->name('ASE.ASEListEdit')->middleware('ValidAdmin');
Route::post('/edit-ase-list-data', [ASEController::class, 'updateAseData'])->name('ASE.ASEListEdit')->middleware('ValidAdmin');
Route::get('/destroy-ase-list-data/{id}', [ASEController::class, 'deleteAseData'])->name('deleteAseData')->middleware('ValidAdmin');
Route::get('/add-ase-list', [ASEController::class, 'addASE'])->middleware('ValidAdmin');
Route::post('/add-ase-list', [ASEController::class, 'storeASE'])->middleware('ValidAdmin');
// Route::get('/',[ASEController::class, 'index'])->middleware('ValidAdmin');
Route::post('/ASEList',[ASEController::class, 'importAseData'])->middleware('ValidAdmin');
// Route::get('/ASEList',[ASEController::class, 'searchASE'])->middleware('ValidAdmin');

// Route::any( '/search', function() {
//     $q = (Input::get ('q'));
//     if($q != ''){

//     }
//     $data = ASE::where ( 'ASE_Name', 'LIKE', '%' .$q. '%' )->orWhere ( 'OutletCode', 'LIKE', '%' .$q. '%' )->paginate(10)->setpath('');
//     $data->appends(array(
//             'q'=> Input::get ('q'),
//     ));
//     if (count ($data) > 0)
//         return view ( 'ASElist' )->withData($data);
//     else
//         return view ( 'ASElist' )->withMessage('No Details found. Try to search again !');
// } );


Route::get('file-import-export', [ExcelController::class, 'fileImportExport'])->middleware('ValidAdmin');
Route::post('file-import', [ExcelController::class, 'fileImport'])->name('import')->middleware('ValidAdmin');
Route::get('file-export', [ExcelController::class, 'fileExport'])->name('export')->middleware('ValidAdmin');

Route::get('/g-maps', [AreaController::class, 'areaMap'])->middleware('ValidAdmin');
Route::get('/areas', [PostController::class, 'card'])->middleware('ValidAdmin');
Route::get('/dash', [LoginAuthController::class, 'DashView'])->middleware('ValidAdmin'); 

Route::get('/create', [ChambersController::class, 'create'])->middleware('ValidAdmin');
Route::post('/create', [ChambersController::class, 'store'])->middleware('ValidAdmin');
Route::get('/chambers', [ChambersController::class, 'response'])->middleware('ValidAdmin');

Route::get('/add-ssd-post-form', [senURLController::class, 'addSSD'])->middleware('ValidAdmin');
Route::post('/store-ssd', [senURLController::class, 'storeSSD'])->middleware('ValidAdmin');
Route::get('/show-ssd-post-data', [senURLController::class, 'displayData'])->middleware('ValidAdmin');

Route::get('/area/{ASE_Area}', [ASEController::class, 'ManageChamber'])->middleware('ValidAdmin');

Route::get('/chamber/{OutletCode}', [ASEController::class, 'OutletSaleData'])->middleware('ValidAdmin');

Route::get('/edit-ssd-post-data/{id}', [senURLController::class, 'editSenData'])->name('sensodyne.senEdit')->middleware('ValidAdmin');
Route::post('/edit-ssd-post-data', [senURLController::class, 'updateSenData'])->name('sensodyne.senEdit')->middleware('ValidAdmin');

Route::get('/destroy-ssd-post-data/{id}', [senURLController::class, 'deleteSenData'])->name('deleteSenData')->middleware('ValidAdmin');

Route::get('/add-pdx-post-form', [PdxURLController::class, 'addPDX'])->middleware('ValidAdmin');
Route::post('/store-pdx', [PdxURLController::class, 'storePDX'])->middleware('ValidAdmin');
Route::get('/show-pdx-post-data', [PdxURLController::class, 'displayData'])->middleware('ValidAdmin');

Route::get('/edit-pdx-post-data/{id}', [PdxURLController::class, 'editParData'])->name('parodontax.parEdit')->middleware('ValidAdmin');
Route::post('/edit-pdx-post-data', [PdxURLController::class, 'updateParData'])->name('parodontax.parEdit')->middleware('ValidAdmin');

Route::get('/destroy-pdx-post-data/{id}', [PdxURLController::class, 'deleteParData'])->name('deleteParData')->middleware('ValidAdmin');
Route::get('/reg', [LoginAuthController::class, 'addAdmin'])->middleware('ValidAdmin');
    Route::post('/reg', [LoginAuthController::class, 'addAdminSubmitted'])->middleware('ValidAdmin');

// Route::group(['middleware'=>'admins'],function(){
    
// });