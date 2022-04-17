<?php

use App\Http\Controllers\ChoiceController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use  App\Http\Controllers\Controller;
use App\Http\Controllers\CourController;
use App\Http\Controllers\ExoController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\PdffileController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\VideoController;
use App\Models\Cour;
use App\Models\Exo;
use App\Models\Pdffile;
use App\Models\Video;

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
    return view('index');
})->name('index');

Route::get('notAllowed',function(){
    return 'not allowed'; 
})->name('notAllowed');
Route::get('/{cour}/edit', function ($cour) {
    $cour = Cour::find($cour);
    return view('authenticated.teacher.editCour',compact('cour'));
})->name('edit');

Route::get('/courses/{niv}',function($niv){
    $courses = Cour::all()->where('niveau','=',$niv)->values('title');
    return view('courses',compact('courses'));
})->name('coursesView');
Route::get('/auth', function () {
    return view('auth');
})->name('auth');


Route::get('/tdash', function () {
    return view('authenticated.teacher.dash');
})->name('techDash');
Route::get('/{cour_id}/addTest', function ($cour_id) {
    return view('authenticated.teacher.addTest' , compact('cour_id'));
})->name('editTest');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    
});


Route::middleware('auth')->group(function(){
    Route::get('/dashboard', [Controller::class , 'dash'])->name('dashboard');
    Route::get('/logout',[Controller::class , 'logout'])->name('logout');
    Route::post('addComment',[CommentController::class , 'store'])->name('commenter');
    Route::get('watchVideo',[VideoController::class , 'watch'])->name('watch');
    Route::get('downloadFile',[Controller::class , 'download'])->name('download');


    Route::get('/view/{cour}', function($cour){
        $c = Cour::all()->where('id','=',$cour);
        $cours = array();
        foreach($c as $cour){
            array_push($cours , $cour);
        }
        $c = $cours[0];
        return view('authenticated.courView' , compact('c'));
    })->name('viewCour');
});

Route::middleware('teacher')->group(function(){
    Route::post('addQuestion',[QuestionController::class , 'store'])->name('addAsk');
    Route::post('addTest',[TestController::class , 'store'])->name('addTest');
    Route::post('addChoice',[ChoiceController::class , 'store'])->name('addChoice');
    Route::post('/createCour',[CourController::class , 'store'])->name('createCour')->middleware('teacher');
    Route::post('/createLesson',[LessonController::class , 'store'])->name('createLesson');
    Route::post('/addVideo',[VideoController::class , 'store'])->name('addVideo');
    Route::post('/addPdf',[PdffileController::class , 'store'])->name('addPdf');
    Route::post('/addExo',[ExoController::class , 'store'])->name('addExo');
});


Route::middleware('admin')->group(function(){
    Route::get("/addTeacher" , [Controller::class , 'addTeacher'])->name('addTeacher');
    Route::post("/createTeacher" , [Controller::class , 'createTeacher'])->name('createTeacher');
});






/*
$file = $request->file('image');
$contents = $file->openFile()->fread($file->getSize());


*/