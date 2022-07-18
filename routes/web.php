<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppUserController;
use App\Http\Controllers\ManageUserController;
use App\Http\Controllers\SectionsController;
use App\Http\Controllers\QuestionsController;
use App\Http\Livewire\AllTeacherComponent;
use App\Http\Livewire\CatJobComponent;
use App\Http\Livewire\ChampionshipComponent;
use App\Http\Livewire\ChampionshipPractice;
use App\Http\Livewire\EnrollComponent;
use App\Http\Livewire\ExamComponent;
use App\Http\Livewire\ExamEditComponent;
use App\Http\Livewire\ExamListComponent;
use App\Http\Livewire\JobComponent;
use App\Http\Livewire\JobExamComponent;
use App\Http\Livewire\LeaderBoardComponent;
use App\Http\Livewire\UserQuizlv;

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
})->name('welcome');

Route::get('/champpractice',ChampionshipPractice::class)->name('champPractice');
Route::get('/quizledarboard',LeaderBoardComponent::class)->name('QuizledarBoard');



Route::get('/quizlavel/{id}', UserQuizlv::class)->name('quizLavel');


Route::middleware(['auth', 'verified', 'role:admin'])->prefix('admin')->group(function () {

    //Route::resource('users', ManageUserController::class);

    Route::get('/users', [ManageUserController::class, 'index'])->name('usersIndex');

    Route::get('/adminhome', [AdminController::class, 'adminhome'])->name('adminhome');

    Route::get('/globalQuizzes', [AdminController::class, 'globalQuizzes'])->name('globalQuizzes');

    Route::get('/createExam',ExamComponent::class)
        ->name('createExam');

    Route::post('/storeExam', [ExamComponent::class, 'storeExam'])
        ->name('storeExam');

    Route::get('/examList',ExamListComponent::class)
        ->name('examList');

    Route::get('/editexam/{id}',ExamEditComponent::class)
        ->name('editExam');

    Route::post('/updateExam/{id}', [ExamEditComponent::class, 'updateExam'])
        ->name('updateExam');


    Route::get('/createSection', [SectionsController::class, 'createSection'])
        ->name('createSection');

    Route::post('/deleteSection/{id}', [SectionsController::class, 'deleteSection'])
        ->name('deleteSection');

    Route::post('/storeSection/section', [SectionsController::class, 'storeSection'])
        ->name('storeSection');

    Route::get('/editSection/{section}', [SectionsController::class, 'editSection'])
        ->name('editSection');

    Route::post('/updateSection/{section}', [SectionsController::class, 'updateSection'])
        ->name('updateSection');

    Route::get('/listLavel', [SectionsController::class, 'listSection'])
        ->name('listSection');

    Route::get('/detailSection/{section}', [SectionsController::class, 'detailSection'])
        ->name('detailSection');

    Route::get('/createQuestion/{section}', [QuestionsController::class, 'createQuestion'])
        ->name('createQuestion');

    Route::get('/detailQuestion/{question}', [QuestionsController::class, 'detailQuestion'])
        ->name('detailQuestion');

    Route::post('/storeQuestion/{section}', [QuestionsController::class, 'storeQuestion'])
        ->name('storeQuestion');
    Route::post('/deleteQuestion/{id}', [QuestionsController::class, 'deleteQuestion'])
        ->name('deleteQuestion');

    Route::post('/deleteQuiz/{id}', [LeaderBoardComponent::class, 'deleteQuiz'])
        ->name('deleteQuiz');
    
});

Route::middleware(['auth', 'verified', 'role:admin|user'])->prefix('appuser')->group(function () {

    Route::get('/userQuizHome', [AppUserController::class, 'userQuizHome'])
        ->name('userQuizHome');

    Route::get('/userQuizDetails/{id}', [AppUserController::class, 'userQuizDetails'])
        ->name('userQuizDetails');

    Route::post('/deleteUserQuiz/{id}', [AppUserController::class, 'deleteUserQuiz'])
        ->name('deleteUserQuiz');

    Route::get('/startQuiz', [AppUserController::class, 'startQuiz'])
        ->name('startQuiz');
    
    //Championship
    Route::get('/championship',ChampionshipComponent::class)->name('Championship');
    Route::get('/champinroll/{id}', EnrollComponent::class)->name('champEnroll');
    Route::get('/userShowreasult/{examid}/{usrid}', [AppUserController::class, 'Showreasult'])
        ->name('userShowreasult');
    //JOb
    Route::get('/jobpeparation/{id}',JobComponent::class)->name('jobPeparation');
    Route::get('/cat_jobpeparation/{id}',CatJobComponent::class)->name('catJobPeparation');
    Route::get('/allteacher',AllTeacherComponent::class)->name('allTeacher');
    Route::get('/jobexams/{id}/{month}',JobExamComponent::class)->name('jobExams');
});
