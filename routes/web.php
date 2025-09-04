<?php

use Illuminate\Support\Facades\Route;
//Frontend Controller
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ListenController;
use App\Http\Controllers\WriteController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ScorerController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\AchievementController;
use App\Http\Controllers\TrainerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\ExamDateController;
use App\Http\Controllers\ExamDateTimeController;
use App\Http\Controllers\ExamDateTestController;
use App\Http\Controllers\IeltsRegistrationController;
use App\Http\Controllers\PlacementController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ExamTypeController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\LexiflyCountryController;
use App\Http\Controllers\LexiflyCountryUniversityController;
use App\Http\Controllers\LexiflyController;
use App\Http\Controllers\CourseTrainerController;
use App\Http\Controllers\McqController;
use App\Http\Controllers\McqStudentController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\MocktestStudentController;
use App\Http\Controllers\AdminMocktestController;
//Backend Controller
use App\Http\Controllers\TestWritingController;
use App\Http\Controllers\TestReadingController;
use App\Http\Controllers\TestListeningController;



// Route::get('/', function () { return view('welcome'); });
Route::get('/', [WelcomeController::class,'welcome']);
Route::get('exam-date', [WelcomeController::class,'examDate']);
Route::get('exam-date-test/{id}', [WelcomeController::class,'examDateTest']);
Route::post('exam-date-test-store', [WelcomeController::class,'examDateTestStore']);
Route::get('achievement', [WelcomeController::class,'achievement']);
Route::get('all-blog', [WelcomeController::class,'allBlog']);
Route::get('category-wise-blogs/{id}', [WelcomeController::class,'categoryWiseBlogs']);
Route::get('blog/{id}', [WelcomeController::class,'blog']);
Route::get('course/{id}', [WelcomeController::class,'course']);
Route::get('course/{id}/placement', [WelcomeController::class,'courseWisePlacement']);
Route::get('ielts-registration', [WelcomeController::class,'ieltsRegistration']);
Route::post('ielts-registration-store', [IeltsRegistrationController::class,'ieltsRegistrationStore']);
Route::post('placement-store', [PlacementController::class,'placementStore']);
Route::get('contact', [WelcomeController::class,'contact']);
Route::post('contact-store', [ContactController::class,'contactStore']);
Route::post('type-store', [ExamTypeController::class,'typeStore']);
Route::get('all-event', [WelcomeController::class,'allEvent']);
Route::get('mission-vision', [WelcomeController::class,'missionVision']);
Route::get('top-scorer', [WelcomeController::class,'topScorer']);
Route::get('message-from-ceo', [WelcomeController::class,'messageFromCeo']);
Route::get('who-we-are', [WelcomeController::class,'whoWeAre']);
Route::get('mocktest', [WelcomeController::class,'mocktest']);
Route::get('higher-education', [WelcomeController::class,'higherEducation']);
Route::get('immigration', [WelcomeController::class,'immigration']);
Route::post('lexifly-store', [LexiflyController::class,'lexiflyStore']);
Route::get('testing-center', [WelcomeController::class,'testingCenter']);
Route::get('plecaement-test-yle/{id}', [WelcomeController::class,'plecaementTestYLE']);
Route::get('plecaement-test-esl/{id}', [WelcomeController::class,'plecaementTestESL']);
Route::get('plecaement-test-ielts/{id}', [WelcomeController::class,'plecaementTestIELTS']);
Route::get('mcq-check', [WelcomeController::class,'mcqCheck']);
Route::get('notice/{id}', [WelcomeController::class,'notice']);

Route::get('exam-date-delete', [ExamDateController::class,'deleteExpiredItems']);

Route::resource('mcqstudents', McqStudentController::class);

Route::post('login-free-test', [WelcomeController::class,'loginFreeTest']);
Route::post('register-free-test', [WelcomeController::class,'registerFreeTest']);

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware(['auth','user-access:Admin'])->group(function(){

  // mock test start -------------
  Route::get('admin/mocktests', [AdminMocktestController::class, 'mocktests'])->name('admin.mocktests');

  //user info
  Route::get('admin/mocktests/{mockTest}/user-info', [AdminMocktestController::class, 'userInfoShow'])->name('userInfoShow');
  Route::post('admin/mocktests/{mockTest}/user-info', [AdminMocktestController::class, 'userInfoSave'])->name('userInfoSave');

  //identify which mocktest is going
  Route::get('admin/test/dashboard/{mockTest}', [AdminMocktestController::class,'identifyMocktest'])->name('admin.test.deshboard');

  //listening show and store
  Route::get('admin/listening/{mockTest}',[AdminMocktestController::class, 'showListeningQuestion'])->name('admin.listening.show');
  Route::post('admin/listening/{mockTest}',[AdminMocktestController::class, 'storeListeningQuestion'])->name('admin.listening.store');
  Route::get('admin/listening/result/{mockTest}',[AdminMocktestController::class, 'showListeningResult'])->name('admin.listening.result.show');

  //reading show and store
  Route::get('admin/reading/{mockTest}',[AdminMocktestController::class, 'showReadingQuestion'])->name('admin.reading.show');
  Route::post('admin/reading/{mockTest}',[AdminMocktestController::class, 'storeReadingQuestion'])->name('admin.reading.store');
  Route::get('admin/reading/result/{mockTest}',[AdminMocktestController::class, 'showReadingResult'])->name('admin.reading.result.show');

  //writing show and store
  Route::get('admin/writing/{mockTest}',[AdminMocktestController::class, 'showWritingQuestion'])->name('admin.writing.show');
  Route::post('admin/writing/{mockTest}',[AdminMocktestController::class, 'storeWritingQuestion'])->name('admin.writing.store');

   });



  // Admin2
  Route::get('admin-mocktest-2-info', function () { return view('Backend.MockTest.Admin.2.info'); });
  Route::get('admin-mocktest-listening-2-exam', function () { return view('Backend.MockTest.Admin.2.listening'); });
  Route::get('admin-mocktest-reading-2-exam', function () { return view('Backend.MockTest.Admin.2.reading'); });
  Route::get('admin-mocktest-writing-2-exam', function () { return view('Backend.MockTest.Admin.2.writing'); });
  // Admin3
  Route::get('admin-mocktest-3-info', function () { return view('Backend.MockTest.Admin.3.info'); });
  Route::get('admin-mocktest-listening-3-exam', function () { return view('Backend.MockTest.Admin.3.listening'); });
  Route::get('admin-mocktest-reading-3-exam', function () { return view('Backend.MockTest.Admin.3.reading'); });
  Route::get('admin-mocktest-writing-3-exam', function () {
     return view('Backend.MockTest.Admin.3.writing');
     });

// Admin Mock Test End ----------

Route::middleware(['auth'])->group(function(){
//   Route::get('/admin', [HomeController::class, 'admin_dashboard']);

  Route::resource('websites', WebsiteController::class);
  Route::resource('settings', SettingController::class);
  
  Route::get('message-from-ceo-back', [SettingController::class,'messageFromCeo']);
  Route::put('message-from-ceo-update', [SettingController::class,'messageFromCeoUpdate']);
  Route::get('who-we-are-back', [SettingController::class,'whoWeAre']);
  Route::put('who-we-are-update', [SettingController::class,'whoWeAreUpdate']);
  Route::get('mission-vision-back', [SettingController::class,'missionVision']);
  Route::put('mission-vision-update', [SettingController::class,'missionVisionUpdate']);
  
  Route::resource('courses', CourseController::class);
  Route::resource('listens', ListenController::class);
  Route::resource('writes', WriteController::class);
  Route::resource('tests', TestController::class);
  
  Route::resource('testwritings', TestWritingController::class);
  Route::resource('testreadings', TestReadingController::class);
  Route::resource('testlistenings', TestListeningController::class);

  Route::get('courses/{id}/Listening', [CourseController::class,'Listening']);
  Route::get('courses/{id}/Reading', [CourseController::class,'Reading']);
  Route::get('courses/{id}/Writing', [CourseController::class,'Writing']);
  Route::get('courses/{id}/Speaking', [CourseController::class,'Speaking']);
  
  Route::resource('blogcategories', BlogCategoryController::class);
  Route::resource('blogs', BlogController::class);
  
  Route::get('blogcategory/{blogcategory_id}/blogs', [BlogController::class,'index']);
  
  Route::resource('scorers', ScorerController::class);
  Route::resource('events', EventController::class);
  Route::resource('achievements', AchievementController::class);
  Route::resource('trainers', TrainerController::class);
  Route::resource('categories', CategoryController::class);
  Route::resource('features', FeatureController::class);
  Route::get('course/{id}/features', [CourseController::class,'courseWiseFeatures']);
  Route::resource('contents', ContentController::class);
  Route::get('course/{id}/contents', [CourseController::class,'courseWiseContents']);
  Route::resource('examdates', ExamDateController::class);
  Route::resource('examdatetimes', ExamDateTimeController::class);
  Route::get('examdate/{id}/times', [ExamDateTimeController::class,'index']);
  Route::resource('examdatetests', ExamDateTestController::class);
  Route::resource('ieltsregistrations', IeltsRegistrationController::class);
  Route::get('ieltsregistrations-print/{id}', [IeltsRegistrationController::class,'print']);
  Route::get('ieltsregistrations-invoice/{id}', [IeltsRegistrationController::class,'invoice']);
  Route::resource('placements', PlacementController::class);
  Route::get('placements-print/{id}', [PlacementController::class,'print']);
  Route::resource('contacts', ContactController::class);
  Route::resource('examtypes', ExamTypeController::class);
  Route::resource('testimonials', TestimonialController::class);
  Route::resource('lexiflycountryuniversities', LexiflyCountryUniversityController::class);
  Route::get('lexifly-country-universities/{id}', [LexiflyCountryUniversityController::class,'index']);
  Route::resource('lexiflycountries', LexiflyCountryController::class);
  Route::get('lexifly-higher-education', [LexiflyCountryController::class,'lexiflyHigherEducation']);
  Route::get('lexifly-immigration', [LexiflyCountryController::class,'lexiflyImmigration']);
  Route::resource('lexiflies', LexiflyController::class);
  
  Route::get('background-images', [SettingController::class,'backgroundImages']);
  Route::put('background-images-update', [SettingController::class,'backgroundImagesUpdate']);
  
  Route::resource('coursetrainers', CourseTrainerController::class);
  Route::get('course/{id}/trainers', [CourseController::class,'courseWiseTrainers']);
  
  Route::get('admin-placement-form', [PlacementController::class,'adminPlacementForm']);
  Route::get('admin-ielts-form', [PlacementController::class,'adminIeltsForm']);
  
  Route::resource('mcqs', McqController::class);
  Route::get('mcqs-yle', [McqController::class,'yleIndex']);
  Route::get('mcqs-esl', [McqController::class,'eslIndex']);
  Route::get('mcqs-ielts', [McqController::class,'ieltsIndex']);
  
  Route::resource('partners', PartnerController::class);
  Route::resource('notices', NoticeController::class);
  Route::resource('sliders', SliderController::class);
  Route::resource('mockteststudents', MocktestStudentController::class);
  
});

Route::middleware(['auth'])->group(function(){
    Route::resource('users', UserController::class);
    Route::put('profile-update/{id}', [UserController::class,'profileUpdate']);
    Route::put('/profile-password-reset/{id}', [UserController::class, 'updatePassword'])->name('profile.password.reset');

    Route::get('dashboard', [HomeController::class, 'dashboard']);
  
    Route::get('free-mock-test', [WelcomeController::class,'freeMockTest']);
    Route::get('free-mock-test-listening', [WelcomeController::class,'freeMockTestListening']);
    Route::get('free-mock-test-reading', [WelcomeController::class,'freeMockTestReading']);
    Route::get('free-mock-test-writing', [WelcomeController::class,'freeMockTestWriting']);
    
    Route::post('free-mock-test-writing-store', [TestWritingController::class,'freeMockTestWritingStore']);
    Route::post('free-mock-test-reading-store', [TestReadingController::class,'freeMockTestReadingStore']);
    Route::post('free-mock-test-listening-store', [TestListeningController::class,'freeMockTestListeningStore']);

});

Route::post('free-mock-test-listening-store2', [TestListeningController::class,'freeMockTestListeningStore2']);
Route::post('free-mock-test-reading-store2', [TestReadingController::class,'freeMockTestReadingStore2']);
Route::post('free-mock-test-writing-store2', [TestWritingController::class,'freeMockTestWritingStore2']);

Route::get('mock-test-packages', [WelcomeController::class,'mockTestPackages']);

Route::get('free-mock-test-info', [WelcomeController::class,'freeMockTestInfo']);
Route::post('mockteststudent-store1', [WelcomeController::class,'mockteststudentStore1']);
Route::post('mockteststudent-store', [WelcomeController::class,'mockteststudentStore']);
Route::get('free-mock-test-board', [WelcomeController::class,'freeMockTestBoard']);

Route::get('free-mock-test-view-1', [WelcomeController::class,'freeMockTestView1']);
Route::get('free-mock-test-view-2', [WelcomeController::class,'freeMockTestView2']);
Route::get('free-mock-test-view-3', [WelcomeController::class,'freeMockTestView3']);
Route::get('free-mock-test-view-1-complete', [WelcomeController::class,'freeMockTestView1Complete']);
Route::get('free-mock-test-view-2-complete', [WelcomeController::class,'freeMockTestView2Complete']);
Route::get('free-mock-test-view-3-complete', [WelcomeController::class,'freeMockTestView3Complete']);
