<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AssesmentController;
Auth::routes();
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



Route::get('/admin', [AdminController::class, 'admin']);
Route::post('/login', [AdminController::class, 'login']);

Route::group(['middleware' =>['adminlogin']],function(){

    Route::get('/logout',[AdminController::class, 'logout']);
    Route::get('/over-view', [IndexController::class, 'overview']);
    Route::get('/forms', [IndexController::class, 'form']);
    Route::get('/dashboard', [IndexController::class, 'dashboard']);
    Route::resource('Admins', AdminController::class);
    //BBLT program route 
    Route::get('/program/bblt', [ProgramController::class, 'bblt']);
    Route::match(['get', 'post'], '/bblt/store',[ProgramController::class, 'bbltstore']);
    //BBLTJ program route 
    Route::get('/program/bbltj', [ProgramController::class, 'bbltj']);
    Route::match(['get', 'post'], '/bbltj/store',[ProgramController::class, 'bbltjstore']);
    //APL program route 
    Route::get('/program/apl', [ProgramController::class, 'apl']);
    Route::match(['get', 'post'], '/apl/store',[ProgramController::class, 'aplstore']);
    //YLS program route 
    Route::get('/program/yls', [ProgramController::class, 'yls']);
    Route::match(['get', 'post'], '/yls/store',[ProgramController::class, 'ylsstore']);
    //YLS program route 
    Route::get('/program/careerx', [ProgramController::class, 'careerx']);
    Route::match(['get', 'post'], '/careerx/store',[ProgramController::class, 'careerxstore']);


    //All program data information
    Route::resource('Students', StudentController::class);
    Route::get('/view-profile/{student_id}', [StudentController::class, 'profile']);
    Route::get('/edit-profile/{student_id}', [StudentController::class, 'editprofile']);


    //Assesment for applicaent pre-Selection
    Route::get('/assesment/preselection', [AssesmentController::class, 'preselection']);
    Route:: match(['get','post'],'/preselection/edit/{student_id}',[AssesmentController::class, 'update']);
    Route:: match(['get','post'],'/preselection/follow-up/{student_id}',[AssesmentController::class, 'follow_up']);

    //Assesment for applicaent Writing test
    Route::get('/assesment/writing', [AssesmentController::class, 'writingtest']);
    Route:: match(['get','post'],'/testresult/edit/{student_id}',[AssesmentController::class, 'testresult']);
    Route:: match(['get','post'],'/writing/follow-up/{student_id}',[AssesmentController::class, 'writing_follow_up']);

    //Assesment for applicaent Interview
    Route::get('/assesment/interview', [AssesmentController::class, 'interview']);
    Route:: match(['get','post'],'/interviewresult/edit/{student_id}',[AssesmentController::class, 'interviewresult']);
    Route:: match(['get','post'],'/interview/follow-up/{student_id}',[AssesmentController::class, 'interview_follow_up']);

    //Financial Aid

    //route:: match(['get','post'],'/financialaid',[AssesmentController::class, 'financialaid']);


    //---------------------------------------------- JUBAIR ----------------------------------------------------//

    route:: match(['get','post'],'/financialaid-form',[AssesmentController::class, 'financialaid_form']);
    Route::get('/assesment/financialaid', [AssesmentController::class, 'financialaid']);
    Route:: match(['get','post'],'/financialaid-status/{student_id}',[AssesmentController::class, 'waiver']);
   

    //All program data information
    Route::resource('Students', StudentController::class);
    Route::get('/view-profile/{student_id}', [StudentController::class, 'profile']);
    Route::get('/edit-profile/{student_id}', [StudentController::class, 'editprofile']);


    //Student Management Page 
    Route::get('/students/programs_info', [ProgramController::class, 'programs_info']);
    Route::match(['get', 'post'], '/getBatch',[ProgramController::class, 'getBatch']);
    Route::match(['get', 'post'], '/getBatchData',[ProgramController::class, 'getBatchData']);
    
    //Download CSV-(From Student Table)
    Route::match(['get', 'post'], '/download-csv', [ProgramController::class, 'downloadCSVReport']);

    //Overview Page
    Route::get('/overview', [ProgramController::class, 'overview']);


    //Programs Page
    Route::get('/programs/programsView', [ProgramController::class, 'programsView']); //View Page
    Route::match(['get', 'post'], '/getProgramDatabyCategory',[ProgramController::class, 'getProgramDatabyCategory']); //Dropdown
    Route::match(['get', 'post'], '/programs/createProgram',[ProgramController::class, 'createProgram']);

    //Program-Batch Page
    Route::get('/programs/programBatch', [ProgramController::class, 'programBatch']); //View Page
    Route::match(['get', 'post'], '/getProgramData',[ProgramController::class, 'getProgramData']); //Dropdown
    Route::match(['get', 'post'], '/programs/createBatch',[ProgramController::class, 'createProgramBatch']);
    

    //Event Page
    Route::get('/events/eventsView', [ProgramController::class, 'eventsView']); //View Page
    Route::match(['get', 'post'], '/getEventDatabyCategory',[ProgramController::class, 'getEventDatabyCategory']); //Dropdown
    Route::match(['get', 'post'], '/events/createEvent' , [ProgramController::class, 'createEvent']); 

    //Event-Batch Page
    Route::get('/events/eventBatch', [ProgramController::class, 'eventBatch']); //View Page
    Route::match(['get', 'post'], '/getEventData',[ProgramController::class, 'getEventData']); //Dropdown
    Route::match(['get', 'post'], '/events/createEventBatch',[ProgramController::class, 'createEventBatch']);

    //Event- Forms
    Route::get('/events/forms/alumni_iftar', [ProgramController::class, 'alumni_iftar']); //View Iftar Page
    Route::get('/events/forms/careerExpo', [ProgramController::class, 'careerExpo']); //View CareerExpo Page

   
});
