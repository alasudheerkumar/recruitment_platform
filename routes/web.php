<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\NewJobController;
use Illuminate\Support\Facades\Route;
use App\Models\User;


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

Route::get('/dashboard', 'PagesController@dashboard');



/* --------------------------- Candidate Pages ---------------------------- */

//Index or jobs page to candidate 

// Route::get('/', function () {
//     return view('pages.index');
// })->middleware(['auth']);

// Route::get('/index','PagesController@index');

Route::get('/', function () {
    return view('pages.index');
})->middleware(['auth']);


// Route::get('/index', function () {
//     return view('pages.index');
// })->middleware(['auth']);

Route::get('/index','NewJobController@show')->middleware(['auth']);


//  Settings Page
Route::get('/settings', function () {
    $title = "Settings";
    return view('pages.settings')->with('title',$title);
})->middleware(['auth'])->name('settings');

// Candidate Personal details
Route::get('/pdetails', function() {
    $title = "Personal Details";
    return view('pages.pdetails')->with('title',$title);
})->middleware(['auth'])->name('Personal Details');


// Task page
Route::get('/task', function() {
    $title = "Task Details";
    return view('pages.task')->with('title',$title);
})->middleware(['auth'])->name('Task Details');


// Documents page
Route::get('/documents', function() {
    $title = "Documents Details";
    return view('pages.documents')->with('title',$title);
})->middleware(['auth'])->name('Documents');


// Notifications page
Route::get('/notifications', function() {
    $title = "Notifications";
    return view('pages.notifications')->with('title',$title);
})->middleware(['auth'])->name('Notifications');


// Calendar page
Route::get('/interview', function() {
    
    // if(){
    //     $title = "Interview";
    //     return view('pages.interview')->with('title',$title);
    // }
    // else{
    //     $title = "Interview Date Selected";
    //     return view('pages.interview', @yield('content2'))->with('title',$title);
    // }
    // $title = "Interview Date Selected";
    $title = "Interview";
    return view('pages.interview')->with('title',$title);


    
})->middleware(['auth'])->name('Interview');





/* ----------------------------- Admin Pages ------------------------------- */

// Applicants Page
// Route::get('/applicants', function () {
//     $applicants = User::all();
//     $title = 'Candidacy';
//     return view('admin_pages.applicants', compact('applicants'))->with('title',$title);
// })->middleware(['auth'])->name('Candidacy');

Route::get('/applicants','RegisteredUserController@show')->middleware(['auth']);


// Admin Settings Page
Route::get('/adminsettings', function () {
    $title = 'Administrator Settings';
    return view('admin_pages.adsettings')->with('title',$title);
})->middleware(['auth'])->name('Administrator Settings');


// Admin Interviews of Applicants
Route::get('/interviews', function () {
    $title = 'Applicant Interview Date Requests';
    return view('admin_pages.interviews')->with('title',$title);
})->middleware(['auth'])->name('Interview Dates');


// Admin Personal Details
Route::get('/admindetails', function () {
    $title = 'Administrator Personal Details';
    return view('admin_pages.adpd')->with('title',$title);
})->middleware(['auth'])->name('Administrator Personal Details');


// Admin Creation of new job
Route::get('/newjob', function () {
    $title = 'Create a New Job';
    return view('admin_pages.newjob')->with('title',$title);
})->middleware(['auth'])->name('Creation of new job');


Route::get('/applicants', [PostsController::class, 'userData']);


                                                    
Route::resource('pages','PostsController');

Route::resource('messages','MessageController');


Route::resource('newjobs','NewJobController');


Route::resource('users','RegisteredUserController');





// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
