<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AssesmentController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\StudentProgramController;
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
   
    //form view for admin side
    Route::get('admin/program/bblt', [ViewController::class, 'bblt']);
    Route::get('admin/program/bbltj', [ViewController::class, 'bbltj']);
    Route::get('admin/program/yls', [ViewController::class, 'yls']);
    Route::get('admin/program/apl', [ViewController::class, 'apl']);
    Route::get('admin/program/careerx', [ViewController::class, 'careerx']);


    //All program data(Applicant data) information
    Route::resource('Students', StudentController::class);
    Route::get('/view-profile/{student_id}/{program_batch_id}', [StudentController::class, 'profile']);
    Route::get('/edit-profile/{student_id}', [StudentController::class, 'editprofile']);

//---------------------------------------------- Assesment Part ----------------------------------------------------//
    //Assesment for applicaent pre-Selection
    Route::get('/assesment/preselection', [AssesmentController::class, 'preselection']);
    Route:: match(['get','post'],'/preselection/edit/{student_id}/{program_batch_id}',[AssesmentController::class, 'update']);
    Route:: match(['get','post'],'/preselection/follow-up/{student_id}/{program_batch_id}',[AssesmentController::class, 'follow_up']);
    //Assesment for applicaent Writing test
    Route::get('/assesment/writing', [AssesmentController::class, 'writingtest']);
    Route:: match(['get','post'],'/testresult/edit/{student_id}/{program_batch_id}',[AssesmentController::class, 'testresult']);
    Route:: match(['get','post'],'/writing/follow-up/{student_id}/{program_batch_id}',[AssesmentController::class, 'writing_follow_up']);
    //Assesment for applicaent Interview
    Route::get('/assesment/interview', [AssesmentController::class, 'interview']);
    Route:: match(['get','post'],'/interviewresult/edit/{student_id}/{program_batch_id}',[AssesmentController::class, 'interviewresult']);
    Route:: match(['get','post'],'/interview/follow-up/{student_id}/{program_batch_id}',[AssesmentController::class, 'interview_follow_up']);
    //Financial Stage
    Route::get('/assesment/financialaid', [AssesmentController::class, 'financialaid']);
    Route:: match(['get','post'],'/financialaid-status/{student_id}/{program_batch_id}',[AssesmentController::class, 'waiver']);
    //Payment stage
    Route::get('/assesment/payment', [AssesmentController::class, 'payment']);
    Route:: match(['get','post'],'/registration/accepted/{student_id}/{program_batch_id}',[AssesmentController::class, 'acceptregistration']);
    Route:: match(['get','post'],'/registration/update/{student_id}/{program_batch_id}',[AssesmentController::class, 'update_payment']);

    
//----------------------------------------------End Assesment Part ----------------------------------------------------//
    //Settings for User controll
    Route::get('/admin/setings', [SettingController::class, 'settings']);


    //---------------------------------------------- JUBAIR ----------------------------------------------------//

   
    //All program data information
   // Route::resource('Students', StudentController::class);
   // Route::get('/view-profile/{student_id}', [StudentController::class, 'profile']);
   // Route::get('/edit-profile/{student_id}', [StudentController::class, 'editprofile']);

    //Student Management Page 
    Route::get('/students/programs_info', [ProgramController::class, 'programs_info']);
    Route::match(['get', 'post'], '/getStudentType',[ProgramController::class, 'getStudentType']);
    Route::match(['get', 'post'], '/getBatch',[ProgramController::class, 'getBatch']);
    Route::match(['get', 'post'], '/getBatch2',[ProgramController::class, 'getBatch2']);
    Route::match(['get', 'post'], '/getBatchData',[ProgramController::class, 'getBatchData']);
    
    //Download CSV-(From Student Table)
    Route::match(['get', 'post'], '/download-csv', [ProgramController::class, 'downloadCSVReport']);

    //Overview Page
    Route::get('/overview', [ProgramController::class, 'overview']);

    //Programs Page
    Route::get('/programs/programsView', [ProgramController::class, 'programsView']); //View Page
    Route::match(['get', 'post'], '/getProgramDatabyCategory',[ProgramController::class, 'getProgramDatabyCategory']); //Dropdown
    Route::match(['get', 'post'], '/getProgramDatabyProject',[ProgramController::class, 'getProgramDatabyProject']); //Dropdown
    Route::match(['get', 'post'], '/programs/createProgram',[ProgramController::class, 'createProgram']);

    //Program-Batch Page
    Route::get('/programs/programBatch', [ProgramController::class, 'programBatch']); //View Page
    Route::match(['get', 'post'], '/getProgramData',[ProgramController::class, 'getProgramData']); //Dropdown
    Route::match(['get', 'post'], '/programs/createBatch',[ProgramController::class, 'createProgramBatch']);
    Route::match(['get', 'post'], '/programs/editBatch/{program_batch_id}',[ProgramController::class, 'editProgramBatch']);

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

    //Dashboard
    Route::get('/dashboard', [ProgramController::class, 'dashboard']);
    Route::get('/fetchMedium', [ProgramController::class, 'fetchMedium']);
    Route::get('/fetchEthnicity', [ProgramController::class, 'fetchEthnicity']);
    Route::get('/fetchDisability', [ProgramController::class, 'fetchDisability']);
    Route::get('/fetchDivision', [ProgramController::class, 'fetchDivision']);
    Route::get('/fetchGender', [ProgramController::class, 'fetchGender']);
    Route::get('/fetchStudyear', [ProgramController::class, 'fetchStudyear']);

    //Old Student Data
    Route::get('/old_data/programs', [ProgramController::class, 'old_data']);
   

});



//--------------Student side where student need not to loging at the system for application for a perticullar program---------------------//
Route::get('/program/thank', [ProgramController::class, 'thankyou']);
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

 /*------------------------All route those will be showed when student will login the system-------------------------------------*/
 //login page for tstudent
 Route::get('/student/login', [UserController::class, 'stdlog']);
 //login request from the student side and access the portal 
 Route::post('/student/login', [UserController::class, 'loginrequest']);
 Route::group(['middleware' =>['userlogin']],function(){

    Route::get('/student/dashboard', [UserController::class, 'stddashboard']);
    Route::get('/student/logout', [UserController::class, 'logout']);

/*------------------------Application Porecess from student for all existing program-------------------------------------*/
    //BBLT program route
    Route::get('/student/program/bblt', [StudentProgramController::class, 'bblt']);
    Route::match(['get', 'post'], 'student/bblt/store',[StudentProgramController::class, 'bbltstore']);
    //BBLTJ program route 
    Route::get('/student/program/bbltj', [StudentProgramController::class, 'bbltj']);
    Route::match(['get', 'post'], '/student/bbltj/store',[StudentProgramController::class, 'bbltjstore']);
    //APL program route 
    Route::get('/student/program/apl', [StudentProgramController::class, 'apl']);
    Route::match(['get', 'post'], '/student/apl/store',[StudentProgramController::class, 'aplstore']);
     //Careerx program route 
    Route::get('/student/program/careerx', [StudentProgramController::class, 'careerx']);
    Route::match(['get', 'post'], '/student/careerx/store',[StudentProgramController::class, 'careerxstore']);
/*------------------------EndApplication Porecess from student for all existing program-------------------------------------*/

    //get the all program from for submission
    Route::get('/student/program', [UserController::class, 'program']);

    //get all events form for submission
    Route::get('/student/event', [UserController::class, 'event']);

/*-------------------------Payment proces form student side----------------------------------------------*/
    //FinancialAid form submission process
    route:: match(['get','post'],'/financialaid-form',[PaymentController::class, 'financialaid_form']);
    //show my waiver amount
    Route::get('/student/mywaiver', [PaymentController::class, 'mywaiver']);
    //my pending Payment Info
    Route::get('/student/my-payments', [PaymentController::class, 'mypayment']);
    //Update my pending Payment Info
    Route::match(['get','post'],'/student/update-payment/details/{student_id}/{program_batch_id}', [PaymentController::class, 'updatemypayment']);
  
/*-------------------------End Payment proces form student side----------------------------------------------*/

});
 