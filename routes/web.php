<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppUserController;
use App\Http\Controllers\ManageUserController;
use App\Http\Controllers\SectionsController;
use App\Http\Controllers\QuestionsController;
use App\Http\Livewire\AddJobCategoryComponent;
use App\Http\Livewire\AddSliderComponent;
use App\Http\Livewire\AddTeacherComponent;
use App\Http\Livewire\AdminEditTeacherComponent;
use App\Http\Livewire\AdminQuestionListComponent;
use App\Http\Livewire\AdminTeacherList;
use App\Http\Livewire\AllTeacherComponent;
use App\Http\Livewire\CatJobComponent;
use App\Http\Livewire\ChampionshipComponent;
use App\Http\Livewire\ChampionshipLeaderboardComponent;
use App\Http\Livewire\ChampionshipPractice;
use App\Http\Livewire\EnrollComponent;
use App\Http\Livewire\ExamComponent;
use App\Http\Livewire\ExamEditComponent;
use App\Http\Livewire\ExamListComponent;
use App\Http\Livewire\InvitationComponent;
use App\Http\Livewire\JobComponent;
use App\Http\Livewire\JobExamComponent;
use App\Http\Livewire\JobLeaderboardComponent;
use App\Http\Livewire\JobPracticeCategoryList;
use App\Http\Livewire\LeaderBoardComponent;
use App\Http\Livewire\SliderEditComponent;
use App\Http\Livewire\SliderListComponent;
use App\Http\Livewire\UserEditComponent;
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
Route::get('/invitation/{id}',InvitationComponent::class)->name('Invitation');



Route::get('/quizlavel/{id}', UserQuizlv::class)->name('quizLavel');


Route::middleware(['auth', 'verified', 'role:admin'])->prefix('admin')->group(function () {


    //User
    Route::get('/users', [ManageUserController::class, 'index'])->name('usersIndex');

    Route::get('/edituser/{id}',UserEditComponent::class)
        ->name('editUser');
    
    Route::post('/updateUser/{id}', [UserEditComponent::class, 'updateUser'])
        ->name('updateUser');

    //Slider
    Route::get('/sliderList',SliderListComponent::class)
        ->name('allSlider');

    Route::get('/admin/addslider',AddSliderComponent::class)
        ->name('addSlider');

    Route::get('/editSlider/{id}',SliderEditComponent::class)
        ->name('editSlider');

    Route::post('/updateSlider/{id}', [SliderEditComponent::class, 'updateSlider'])
        ->name('updateSlider');

    Route::post('/storeslider', [AddSliderComponent::class, 'storeSlider'])
        ->name('storeSlider');

    Route::get('/adminhome', [AdminController::class, 'adminhome'])->name('adminhome');

    Route::get('/globalQuizzes', [AdminController::class, 'globalQuizzes'])->name('globalQuizzes');

    //Teacher
    Route::get('/teacherList',AdminTeacherList::class)
        ->name('teacherList');

    Route::get('/editteacher/{id}',AdminEditTeacherComponent::class)
        ->name('editTeacher');

    Route::post('/updateteacher/{id}', [AdminEditTeacherComponent::class, 'updateTeacher'])
        ->name('updateTeacher');

    Route::get('/createTeacher',AddTeacherComponent::class)
        ->name('createTeacher');

    Route::post('/storeTeacher', [AddTeacherComponent::class, 'storeTeacher'])
        ->name('storeTeacher');

    //Category
    Route::get('/jobcatList',JobPracticeCategoryList::class)
        ->name('jobcatList');

    Route::get('/createJobCategory',AddJobCategoryComponent::class)
        ->name('createJobCategory');
    
    Route::post('/storeJobCategory', [AddJobCategoryComponent::class, 'storeCategory'])
        ->name('storeJobCategory');

    //Exam
    Route::get('/examList',ExamListComponent::class)
        ->name('examList');
    
    Route::get('/createExam',ExamComponent::class)
        ->name('createExam');

    Route::post('/storeExam', [ExamComponent::class, 'storeExam'])
        ->name('storeExam');

    Route::get('/editexam/{id}',ExamEditComponent::class)
        ->name('editExam');

    Route::post('/updateExam/{id}', [ExamEditComponent::class, 'updateExam'])
        ->name('updateExam');

    //Question
    Route::get('/createQuestion/{section}', [QuestionsController::class, 'createQuestion'])
        ->name('createQuestion');

    Route::get('/allquestion',AdminQuestionListComponent::class)
        ->name('allquestion');

    Route::get('/detailQuestion/{question}', [QuestionsController::class, 'detailQuestion'])
        ->name('detailQuestion');

    //Lavel
    Route::get('/createLavel', [SectionsController::class, 'createSection'])
        ->name('createSection');

    Route::post('/deleteLavel/{id}', [SectionsController::class, 'deleteSection'])
        ->name('deleteSection');

    Route::post('/storeLavel/Lavel', [SectionsController::class, 'storeSection'])
        ->name('storeSection');

    Route::get('/editLavel/{section}', [SectionsController::class, 'editSection'])
        ->name('editSection');

    Route::post('/updateLavel/{section}', [SectionsController::class, 'updateSection'])
        ->name('updateSection');

    Route::get('/listLavel', [SectionsController::class, 'listSection'])
        ->name('listSection');

    Route::get('/detailSection/{section}', [SectionsController::class, 'detailSection'])
        ->name('detailSection');

    Route::post('/storeQuestion/{section}', [QuestionsController::class, 'storeQuestion'])
        ->name('storeQuestion');
    Route::post('/deleteQuestion/{id}', [QuestionsController::class, 'deleteQuestion'])
        ->name('deleteQuestion');

    Route::post('/deleteQuiz/{id}', [LeaderBoardComponent::class, 'deleteQuiz'])
        ->name('deleteQuiz');
    
});

Route::get('/userQuizDetails/{id}', [AppUserController::class, 'userQuizDetails'])
        ->name('userQuizDetails');
        
Route::middleware(['auth', 'verified', 'role:admin|user'])->prefix('appuser')->group(function () {

    Route::get('/userQuizHome', [AppUserController::class, 'userQuizHome'])
        ->name('userQuizHome');

    /* Route::get('/userQuizDetails/{id}', [AppUserController::class, 'userQuizDetails'])
        ->name('userQuizDetails'); */

    Route::post('/deleteUserQuiz/{id}', [AppUserController::class, 'deleteUserQuiz'])
        ->name('deleteUserQuiz');

    Route::get('/startQuiz', [AppUserController::class, 'startQuiz'])
        ->name('startQuiz');
    
    //Championship
    Route::get('/championship',ChampionshipComponent::class)->name('Championship');
    Route::get('/champinroll/{id}', EnrollComponent::class)->name('champEnroll');
    Route::get('/userShowreasult/{examid}/{usrid}', [AppUserController::class, 'Showreasult'])
        ->name('userShowreasult');
    Route::get('/champledarboard',ChampionshipLeaderboardComponent::class)->name('ChampledarBoard');
    //JOb
    Route::get('/jobpeparation/{id}/{cat_id}',JobComponent::class)->name('jobPeparation');
    Route::get('/cat_jobpeparation/{id}',CatJobComponent::class)->name('catJobPeparation');
    Route::get('/allteacher',AllTeacherComponent::class)->name('allTeacher');
    Route::get('/jobexams/{id}/{month}/{cat_id}',JobExamComponent::class)->name('jobExams');        
    Route::get('/jonledarboard',JobLeaderboardComponent::class)->name('JobledarBoard');
});
