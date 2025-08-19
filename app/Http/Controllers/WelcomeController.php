<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\TestWriting;
use App\Models\TestReading;
use App\Models\TestListening;
use App\Models\Partner;

use App\Models\Setting;
use App\Models\Trainer;
use App\Models\BlogCategory;
use App\Models\Blog;
use App\Models\Event;
use App\Models\Scorer;
use App\Models\Category;
use App\Models\Course;
use App\Models\Feature;
use App\Models\Content;
use App\Models\ExamDate;
use App\Models\ExamDateTime;
use App\Models\ExamDateTest;
use App\Models\Achievement;
use App\Models\Testimonial;
use App\Models\LexiflyCountry;
use App\Models\LexiflyCountryUniversity;
use App\Models\CourseTrainer;
use App\Models\Mcq;
use App\Models\McqStudent;
use App\Models\Notice;
use App\Models\Slider;
use App\Models\MocktestStudent;

use Illuminate\Support\Facades\Session;

class WelcomeController extends Controller
{  
    public function welcome(){
        $data['papers'] = ExamDate::where('title','Ielts paper based exam')->latest()->get();
        $data['computers'] = ExamDate::where('title','Ielts on computer')->latest()->get();
        $data['aos'] = ExamDate::where('title','A/O level exam')->latest()->get();
        $data['setting'] = Setting::latest()->first();
        $data['partners'] = Partner::get();
        $data['notices'] = Notice::where('status',1)->latest()->get();
        $data['sliders'] = Slider::latest()->get();
        $data['trainers'] = Trainer::latest()->get();
        $data['categories'] = Category::get();
        $data['courses'] = Course::get();
        $data['features'] = Feature::get();
        $data['testimonials'] = Testimonial::latest()->get();
        $data['lexiflycountries'] = LexiflyCountry::latest()->get();
        $data['lexiflycountryuniversities'] = LexiflyCountryUniversity::latest()->get();
        return view('Frontend.pages.welcome', $data);
    }
    public function examDate(){
        $data['setting'] = Setting::latest()->first();
        $data['categories'] = Category::get();
        $data['partners'] = Partner::latest()->get();
        $data['examdates'] = ExamDate::latest()->get();
        return view('Frontend.pages.examDate', $data);
    }
    public function examDateTest($id){
        $data['setting'] = Setting::latest()->first();
        $data['categories'] = Category::get();
        $data['partners'] = Partner::latest()->get();
        $data['examdate'] = ExamDate::find($id);
        $data['examdatetimes'] = ExamDateTime::where('examdate_id',$id)->get();
        return view('Frontend.pages.examDateTest', $data);
    }
    public function examDateTestStore(Request $request){
        
        $this->validate($request, [
            'exam_date_time' => 'required',
        ],
        [
            'exam_date_time.required'=>'Time Schedule is Required'    
        ]);
        
        $data = new ExamDateTest;
        $data->exam_title = $request->exam_title;
        $data->exam_date = $request->exam_date;
        $data->exam_date_time = $request->exam_date_time;
        $data->test_name = $request->test_name;
        $data->requirement = $request->requirement;
        $data->requirement_detail = $request->requirement_detail;
        $data->name = $request->name;
        $data->mobile = $request->mobile;
        $data->email = $request->email;
        $data->save();
        return redirect()->to('/')->with('success','Successfully Done.');
    }
    public function higherEducation(){
        $data['setting'] = Setting::latest()->first();
        $data['categories'] = Category::get();
        $data['partners'] = Partner::latest()->get();
        $data['lexiflycountries'] = LexiflyCountry::where('type','Higher Education')->latest()->get();
        return view('Frontend.pages.lexifly.higherEducation', $data);
    }
    public function testingCenter(){
        $data['setting'] = Setting::latest()->first();
        $data['categories'] = Category::get();
        $data['partners'] = Partner::latest()->get();
        $data['papers'] = ExamDate::where('title','Ielts paper based exam')->latest()->get();
        $data['computers'] = ExamDate::where('title','Ielts on computer')->latest()->get();
        $data['aos'] = ExamDate::where('title','A/O level exam')->latest()->get();
        return view('Frontend.pages.testingCenter', $data);
    }
    public function immigration(){
        $data['setting'] = Setting::latest()->first();
        $data['categories'] = Category::get();
        $data['partners'] = Partner::latest()->get();
        $data['lexiflycountries'] = LexiflyCountry::where('type','Immigration')->latest()->get();
        return view('Frontend.pages.lexifly.immigration', $data);
    }
    public function achievement(){
        $data['setting'] = Setting::latest()->first();
        $data['categories'] = Category::get();
        $data['partners'] = Partner::latest()->get();
        $data['achievements'] = Achievement::latest()->get();
        return view('Frontend.pages.ourStory.achievement', $data);
    }
    public function allBlog(){
        $data['setting'] = Setting::latest()->first();
        $data['categories'] = Category::get();
        $data['partners'] = Partner::latest()->get();
        $data['blogcategories'] = BlogCategory::get();
        $data['blogs'] = Blog::latest()->get();
        return view('Frontend.pages.allBlog', $data);
    }
    public function categoryWiseBlogs($id){
        $data['setting'] = Setting::latest()->first();
        $data['categories'] = Category::get();
        $data['partners'] = Partner::latest()->get();
        $data['blogcategories'] = BlogCategory::get();
        $data['bcategory'] = BlogCategory::find($id);
        $data['blogs'] = Blog::where('blogcategory_id',$id)->latest()->get();
        return view('Frontend.pages.categoryWiseBlogs', $data);
    }
    public function blog($id){
        $data['setting'] = Setting::latest()->first();
        $data['categories'] = Category::get();
        $data['partners'] = Partner::latest()->get();
        $data['blogs'] = Blog::where('id', '!=', $id)->latest()->get();
        $data['blog'] = Blog::find($id);
        return view('Frontend.pages.blog', $data);
    }
    public function notice($id){
        $data['setting'] = Setting::latest()->first();
        $data['categories'] = Category::get();
        $data['partners'] = Partner::latest()->get();
        $data['notice'] = Notice::find($id);
        return view('Frontend.pages.notice', $data);
    }
    public function course($id){
        $data['setting'] = Setting::latest()->first();
        $data['categories'] = Category::get();
        $data['partners'] = Partner::latest()->get();
        $data['course'] = Course::find($id);
        $data['contents'] = Content::where('course_id',$id)->get();
        $data['coursetrainers'] = CourseTrainer::where('course_id',$id)->get();
        return view('Frontend.pages.course', $data);
    }
    public function courseWisePlacement($id){
        $data['setting'] = Setting::latest()->first();
        $data['categories'] = Category::get();
        $data['partners'] = Partner::latest()->get();
        $data['course'] = Course::find($id);
        return view('Frontend.pages.courseWisePlacement', $data);
    }
    public function ieltsRegistration(){
        $data['setting'] = Setting::latest()->first();
        $data['categories'] = Category::get();
        $data['examdates'] = ExamDate::get();
        $data['partners'] = Partner::latest()->get();
        return view('Frontend.pages.ieltsRegistration', $data);
    }
    public function contact(){
        $data['setting'] = Setting::latest()->first();
        $data['categories'] = Category::get();
        $data['partners'] = Partner::latest()->get();
        return view('Frontend.pages.contact', $data);
    }
    public function mocktest(){
        $data['setting'] = Setting::latest()->first();
        $data['categories'] = Category::get();
        $data['partners'] = Partner::latest()->get();
        return view('Frontend.pages.mocktest', $data);
    }
    public function allEvent(){
        $data['setting'] = Setting::latest()->first();
        $data['categories'] = Category::get();
        $data['partners'] = Partner::latest()->get();
        $data['events'] = Event::latest()->get();
        return view('Frontend.pages.gallery.allEvent', $data);
    }
    public function missionVision(){
        $data['setting'] = Setting::latest()->first();
        $data['categories'] = Category::get();
        $data['partners'] = Partner::latest()->get();
        return view('Frontend.pages.ourStory.missionVision', $data);
    }
    public function topScorer(){
        $data['setting'] = Setting::latest()->first();
        $data['categories'] = Category::get();
        $data['partners'] = Partner::latest()->get();
        $data['scorers'] = Scorer::orderBy('score', 'desc')->get();
        return view('Frontend.pages.gallery.topScorer', $data);
    }
    public function messageFromCeo(){
        $data['setting'] = Setting::latest()->first();
        $data['categories'] = Category::get();
        $data['partners'] = Partner::latest()->get();
        return view('Frontend.pages.ourStory.messageFromCeo', $data);
    }
    public function whoWeAre(){
        $data['setting'] = Setting::latest()->first();
        $data['categories'] = Category::get();
        $data['partners'] = Partner::latest()->get();
        return view('Frontend.pages.ourStory.whoWeAre', $data);
    }



    public function mockteststudentStore1(Request $request){
        $data = new MocktestStudent;
        $data->type = $request->type;
        $data->name = $request->name;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->save();
    session([
        'mocktest.name' => $request->name,
        'mocktest.phone' => $request->phone,
        'mocktest.email' => $request->email,
        'mocktest.listeningstatus' => 'No',
    ]);
        if($request->type=='IELTS on Computer'){
            return redirect()->to('free-mock-test')->with('success','Thanks " '.$request->name.' " for Registration.');
        }
        else{
            return redirect()->back()->with('success','Thanks " '.$request->name.' " for Registration.');
        }

    }


    public function freeMockTestInfo(){
        $data['setting'] = Setting::latest()->first();
        $data['categories'] = Category::get();
        $data['partners'] = Partner::latest()->get();
        return view('Frontend.pages.freeMockTest.freeMockTestInfo', $data);
    }
    public function mockteststudentStore(Request $request){
        $exist = MocktestStudent::where('email',$request->email)->first();

        if(!$exist){
            $data = new MocktestStudent;
            $data->type = $request->type;
            $data->name = $request->name;
            $data->phone = $request->phone;
            $data->email = $request->email;
            $data->save();
        }

        session([
            'mocktest.name' => $request->name,
            'mocktest.phone' => $request->phone,
            'mocktest.email' => $request->email,
            'mocktest.listeningstatus' => 'No',
        ]);

        return redirect()->to('free-mock-test-board')->with('success','Thanks " '.$request->name.' " for Registration.');
    }
    public function freeMockTestBoard(){
        $data['setting'] = Setting::latest()->first();
        $data['categories'] = Category::get();
        $data['partners'] = Partner::latest()->get();
        return view('Frontend.pages.freeMockTest.freeMockTestBoard', $data);
    }
    public function freeMockTestDashboard(){
        $data['setting'] = Setting::latest()->first();
        $data['categories'] = Category::get();
        $data['partners'] = Partner::latest()->get();
        $data['testlistening_have'] = TestListening::where('email',session('mocktest.email'))->first();
        $data['testreading_have'] = TestReading::where('email',session('mocktest.email'))->first();
        $data['testwriting_have'] = TestWriting::where('email',session('mocktest.email'))->first();
        return view('Frontend.pages.freeMockTest.freeMockTestDashboard', $data);
    }
    public function freeMockTestView1(){
        $data['setting'] = Setting::latest()->first();
        $data['categories'] = Category::get();
        $data['partners'] = Partner::latest()->get();
        return view('Frontend.pages.freeMockTest.freeMockTestView1', $data);
    }
    public function freeMockTestView2(){
        $data['setting'] = Setting::latest()->first();
        $data['categories'] = Category::get();
        $data['partners'] = Partner::latest()->get();
        return view('Frontend.pages.freeMockTest.freeMockTestView2', $data);
    }
    public function freeMockTestView3(){
        $data['setting'] = Setting::latest()->first();
        $data['categories'] = Category::get();
        $data['partners'] = Partner::latest()->get();
        return view('Frontend.pages.freeMockTest.freeMockTestView3', $data);
    }
    public function freeMockTestView1Complete(){
        $data['setting'] = Setting::latest()->first();
        $data['categories'] = Category::get();
        $data['partners'] = Partner::latest()->get();
        return view('Frontend.pages.freeMockTest.freeMockTestView1Complete', $data);
    }
    public function freeMockTestView2Complete(){
        $data['setting'] = Setting::latest()->first();
        $data['categories'] = Category::get();
        $data['partners'] = Partner::latest()->get();
        return view('Frontend.pages.freeMockTest.freeMockTestView2Complete', $data);
    }
    public function freeMockTestView3Complete(){
        $data['setting'] = Setting::latest()->first();
        $data['categories'] = Category::get();
        $data['partners'] = Partner::latest()->get();
        return view('Frontend.pages.freeMockTest.freeMockTestView3Complete', $data);
    }






    public function freeMockTest(){
        $data['setting'] = Setting::latest()->first();
        $data['categories'] = Category::get();
        $data['partners'] = Partner::latest()->get();
        $data['testwriting'] = TestWriting::where('user_id',Auth::user()->id)->first();
        $data['testreading'] = TestReading::where('user_id',Auth::user()->id)->first();
        $data['testlistening'] = TestListening::where('user_id',Auth::user()->id)->first();
        
        if($data['testwriting']){$data['writing_score'] = $data['testwriting']->mark1+$data['testwriting']->mark2;}
        if($data['testreading']){$data['reading_score'] = $data['testreading']->mark1+$data['testreading']->mark2+$data['testreading']->mark3+$data['testreading']->mark4+$data['testreading']->mark5+$data['testreading']->mark6+$data['testreading']->mark7+$data['testreading']->mark8+$data['testreading']->mark9+$data['testreading']->mark10+$data['testreading']->mark11+$data['testreading']->mark12+$data['testreading']->mark13+$data['testreading']->mark14+$data['testreading']->mark15+$data['testreading']->mark16+$data['testreading']->mark17+$data['testreading']->mark18+$data['testreading']->mark19+$data['testreading']->mark20+$data['testreading']->mark21+$data['testreading']->mark22+$data['testreading']->mark23+$data['testreading']->mark24+$data['testreading']->mark25+$data['testreading']->mark26+$data['testreading']->mark27+$data['testreading']->mark28+$data['testreading']->mark29+$data['testreading']->mark30+$data['testreading']->mark31+$data['testreading']->mark32+$data['testreading']->mark33+$data['testreading']->mark34+$data['testreading']->mark35+$data['testreading']->mark36+$data['testreading']->mark37+$data['testreading']->mark38+$data['testreading']->mark39+$data['testreading']->mark40;}
        if($data['testlistening']){$data['listening_score'] = $data['testlistening']->mark1+$data['testlistening']->mark2+$data['testlistening']->mark3+$data['testlistening']->mark4+$data['testlistening']->mark5+$data['testlistening']->mark6+$data['testlistening']->mark7+$data['testlistening']->mark8+$data['testlistening']->mark9+$data['testlistening']->mark10+$data['testlistening']->mark11+$data['testlistening']->mark12+$data['testlistening']->mark13+$data['testlistening']->mark14+$data['testlistening']->mark15+$data['testlistening']->mark16+$data['testlistening']->mark17+$data['testlistening']->mark18+$data['testlistening']->mark19+$data['testlistening']->mark20+$data['testlistening']->mark21+$data['testlistening']->mark22+$data['testlistening']->mark23+$data['testlistening']->mark24+$data['testlistening']->mark25+$data['testlistening']->mark26+$data['testlistening']->mark27+$data['testlistening']->mark28+$data['testlistening']->mark29+$data['testlistening']->mark30+$data['testlistening']->mark31+$data['testlistening']->mark32+$data['testlistening']->mark33+$data['testlistening']->mark34+$data['testlistening']->mark35+$data['testlistening']->mark36+$data['testlistening']->mark37+$data['testlistening']->mark38+$data['testlistening']->mark39+$data['testlistening']->mark40;}
        
        return view('Frontend.pages.freeMockTest', $data);
    }
    public function freeMockTestListening(){
        $data['setting'] = Setting::latest()->first();
        $data['categories'] = Category::get();
        $data['partners'] = Partner::latest()->get();
        return view('Frontend.pages.freeMockTest.listening', $data);
    }
    public function freeMockTestReading(){
        $data['setting'] = Setting::latest()->first();
        $data['categories'] = Category::get();
        $data['partners'] = Partner::latest()->get();
        return view('Frontend.pages.freeMockTest.reading', $data);
    }
    public function freeMockTestWriting(){
        $data['setting'] = Setting::latest()->first();
        $data['categories'] = Category::get();
        $data['partners'] = Partner::latest()->get();
        return view('Frontend.pages.freeMockTest.writing', $data);
    }
    public function loginFreeTest(Request $request){
        $input = $request->all();
     
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        $user = User::where('email', $request->email)->first();
        if ($user) {
            if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password']))){
                return redirect()->to('free-mock-test');
            }
            else{
                return back()->with('error','Password Are Wrong.');
            }
        }
        else{
            return back()->with('error','Email does not exist, Register First.');
        }
    }
    public function registerFreeTest(Request $request){
        $have_user = User::where('email',$request->email)->first();
        
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'mobile' => 'required|string|size:11|regex:/^01[0-9]{9}$/',
            'password' => ['required', 'string', 'min:8'],
        ],[
            'mobile.size' => 'Invalid Mobile Number.',
            'mobile.regex' => 'Invalid Mobile Number.',
        ]);
        
        if(empty($have_user)){
            $data = new User;
            $data->name = $request->name;
            $data->mobile = $request->mobile;
            $data->education = $request->education;
            $data->institution = $request->institution;
            $data->email = $request->email;
            $data->password = Hash::make($request->password);
            $data->save();
            Auth::login($data);
            return redirect()->to('free-mock-test');
        }
        else{
            return back()->with('error','Already Exists.');
        }
    }
    public function plecaementTestYLE($id){
        $data['setting'] = Setting::latest()->first();
        $data['categories'] = Category::get();
        $data['partners'] = Partner::latest()->get();
        $data['mcqs'] = Mcq::where('type','YLE')->inRandomOrder()->take(15)->get();
        $data['mcqstudent_id'] = $id;
        return view('Frontend.pages.plecaementTest.YLE', $data);
    }
    public function plecaementTestESL($id){
        $data['setting'] = Setting::latest()->first();
        $data['categories'] = Category::get();
        $data['partners'] = Partner::latest()->get();
        $data['mcqs'] = Mcq::where('type','ESL')->inRandomOrder()->take(15)->get();
        $data['mcqstudent_id'] = $id;
        return view('Frontend.pages.plecaementTest.ESL', $data);
    }
    public function plecaementTestIELTS($id){
        $data['setting'] = Setting::latest()->first();
        $data['categories'] = Category::get();
        $data['partners'] = Partner::latest()->get();
        $data['mcqs'] = Mcq::where('type','IELTS')->inRandomOrder()->take(15)->get();
        $data['mcqstudent_id'] = $id;
        return view('Frontend.pages.plecaementTest.IELTS', $data);
    }
    public function mcqCheck(Request $request){
        $data['setting'] = Setting::latest()->first();
        $data['categories'] = Category::get();
        $data['partners'] = Partner::latest()->get();
        $data['mcqstudent'] = McqStudent::find($request->mcqstudent_id);
        $data['type'] = $request->type;
       
        $userAnswers = $request->input('answers'); // [question_id => selected_option]
        $results = [];
        $score = 0;
        $total = 0;
    
        foreach ($userAnswers as $questionId => $selectedOption) {
            $mcq = Mcq::find($questionId);
            $isCorrect = $mcq && $mcq->answer === $selectedOption;
    
            if ($isCorrect) {
                $score++;
            }
    
            $results[] = [
                'question' => $mcq->question,
                'selected' => $selectedOption,
                'correct' => $mcq->answer,
                'is_correct' => $isCorrect,
            ];
        }
        $total = count($userAnswers);
        
        // echo $score.' out of '.$total;
    
        return view('Frontend.pages.plecaementTest.result', ['results' => $results,'score' => $score,'total' => count($userAnswers),], $data, compact('mcq'));
        
    }

    public function mockTestPackages(){
        $data['setting'] = Setting::latest()->first();
        $data['categories'] = Category::get();
        $data['partners'] = Partner::latest()->get();
        return view('Frontend.pages.mockTest.packages', $data);
    }

}
