@extends('Frontend.app')

@section('content')
<div class="container">
    <div class="row justify-content-center mb-3">
        <div class="col-md-12">
            <a href="{{url('tests',$testlistening->test_id)}}" class="btn btn-dark ps-1 pe-2 py-0"><i class="bi bi-arrow-left-short"></i> Back</a>
        </div>
    </div>
    <form action="{{url('testlistenings',$testlistening->id)}}" method="post"> @csrf @method('put')
    <div class="row justify-content-center mb-3">
        <div class="col-md-12 mb-2">
            <h4 class="">SECTION 1</h4>
            <h5>Questions 1-5</h5>
            <p class="mb-0">Complete the sentences.</p>
            <p class="mb-0">Write <b>NO MORE THAN TWO WORDS</b> for each answer.</p>
        </div>
        <div class="col-md-12 mb-2">
            <p>Peter consumes far too much <input type="text" value="soft drink" disabled></p>
            <p>Peter and Mary's diet will be both sensible and 1 <input type="text" name="answer1" value="{{$testlistening->answer1}}" disabled> <b>MARK:</b> <input type="number" name="mark1" value="{{$testlistening->mark1}}"></p>
            <p>Every two months, they can eat 2 <input type="text" name="answer2" value="{{$testlistening->answer2}}" disabled> <b>MARK:</b> <input type="number" name="mark2" value="{{$testlistening->mark2}}"></p>
            <p>On Saturdays, they will go 3 <input type="text" name="answer3" value="{{$testlistening->answer3}}" disabled> <b>MARK:</b> <input type="number" name="mark3" value="{{$testlistening->mark3}}"></p>
            <p>This coming Saturday, they will go to 4 <input type="text" name="answer4" value="{{$testlistening->answer4}}" disabled> <b>MARK:</b> <input type="number" name="mark4" value="{{$testlistening->mark4}}"></p>
            <p>In every meal, there will be 5 <input type="text" name="answer5" value="{{$testlistening->answer5}}" disabled> <b>MARK:</b> <input type="number" name="mark5" value="{{$testlistening->mark5}}"></p>
        </div>
        <div class="col-md-12 mb-2">
            <h5>Questions 6-10</h5>
            <p class="mb-0">Choose the correct letter, <b>C, I, or B</b>.</p>
        </div>
        <div class="col-md-12 mb-2">
            <table class="table table-bordered" style="border:1px solid black">
              <tbody class="table-dark">
                <tr>
                  <td class="fw-bold text-nowrap"></td>
                  <td class="fw-bold text-nowrap">Peter's opinion</td>
                  <td class="fw-bold text-nowrap">Mary's opinion</td>
                </tr>
                <tr>
                  <td class="fw-bold text-nowrap">Tuesdays</td>
                  <td class="">B</td>
                  <td class="">6 <input type="text" name="answer6" value="{{$testlistening->answer6}}" disabled> <b>MARK:</b> <input type="number" name="mark6" value="{{$testlistening->mark6}}"></td>
                </tr>
                <tr>
                  <td class="fw-bold text-nowrap">Thursdays</td>
                  <td class="">7 <input type="text" name="answer7" value="{{$testlistening->answer7}}" disabled> <b>MARK:</b> <input type="number" name="mark7" value="{{$testlistening->mark7}}"></td>
                  <td class="">8 <input type="text" name="answer8" value="{{$testlistening->answer8}}" disabled> <b>MARK:</b> <input type="number" name="mark8" value="{{$testlistening->mark8}}"></td>
                </tr>
                <tr>
                  <td class="fw-bold text-nowrap">Sundays</td>
                  <td class="">9 <input type="text" name="answer9" value="{{$testlistening->answer9}}" disabled> <b>MARK:</b> <input type="number" name="mark9" value="{{$testlistening->mark9}}"></td>
                  <td class="">10 <input type="text" name="answer10" value="{{$testlistening->answer10}}" disabled> <b>MARK:</b> <input type="number" name="mark10" value="{{$testlistening->mark10}}"></td>
                </tr>
              </tbody>
            </table>
        </div>
        <div class="col-md-12 mb-2">
            <p class="mb-0"><b>C</b> Chocolate</p>
            <p class="mb-0"><b>I</b> Ice cream</p>
            <p class="mb-0"><b>B</b> Biscuits</p>
        </div>
        <div class="col-md-12 mb-2">
            <h4 class="">SECTION 2</h4>
            <h5>Questions 11-16</h5>
            <p class="mb-0">Complete the table.</p>
            <p class="mb-0">Write <b>NO MORE THAN TWO WORDS</b> for each answer.</p>
            <h4>Advantages of Stanfield Childcare Centre</h4>
        </div>
        <div class="col-md-12 mb-2">
            <table class="table table-bordered" style="border:1px solid black">
              <tbody>
                <tr>
                  <td class="fw-bold text-nowrap"></td>
                  <td class="fw-bold text-nowrap">Detail</td>
                  <td class="fw-bold text-nowrap">Another Detail</td>
                </tr>
                <tr>
                  <td class="fw-bold text-nowrap">1</td>
                  <td class="">Walls are 11 <input type="text" name="answer11" value="{{$testlistening->answer11}}" disabled> <b>MARK:</b> <input type="number" name="mark11" value="{{$testlistening->mark11}}"></td>
                  <td class="">includes the 12 <input type="text" name="answer12" value="{{$testlistening->answer12}}" disabled> <b>MARK:</b> <input type="number" name="mark12" value="{{$testlistening->mark12}}"></td>
                </tr>
                <tr>
                  <td class="fw-bold text-nowrap">2</td>
                  <td class="">Teachers are able to teach a 13 <input type="text" name="answer13" value="{{$testlistening->answer13}}" disabled> <b>MARK:</b> <input type="number" name="mark13" value="{{$testlistening->mark13}}"></td>
                  <td class="">There are many special 14 <input type="text" name="answer14" value="{{$testlistening->answer14}}" disabled> <b>MARK:</b> <input type="number" name="mark14" value="{{$testlistening->mark14}}"></td>
                </tr>
                <tr>
                  <td class="fw-bold text-nowrap">3</td>
                  <td class="">They 15 <input type="text" name="answer15" value="{{$testlistening->answer15}}" disabled> <b>MARK:</b> <input type="number" name="mark15" value="{{$testlistening->mark15}}"> Surfaces daily. </td>
                  <td class="">procedures to limit the spread of 16 <input type="text" name="answer16" value="{{$testlistening->answer16}}" disabled> <b>MARK:</b> <input type="number" name="mark16" value="{{$testlistening->mark16}}"></td>
                </tr>
              </tbody>
            </table>
        </div>
        <div class="col-md-12 mb-2">
            <h4 class="">SECTION 2</h4>
            <h5>Questions 17-20</h5>
            <p class="mb-0">Choose the correct letter, <b>A, B, or C</b>.</p>
            <p class="mb-0">NB You may use a letter more than once.</p>
        </div>
        <div class="col-md-12 mb-2">
            <p class="">
                <b>17</b> has her own children? 
                <select name="answer17">
                    <option value="" hidden></option>
                    <option value="A. Andrea">A. Andrea</option>
                    <option value="B. Bella">B. Bella</option>
                    <option value="C. Cathy">C. Cathy</option>
                </select>
            </p>
            <p class="">
                <b>18</b> often sleeps at the center? 
                <select name="answer18">
                    <option value="" hidden></option>
                    <option value="A. Andrea">A. Andrea</option>
                    <option value="B. Bella">B. Bella</option>
                    <option value="C. Cathy">C. Cathy</option>
                </select>
            </p>
            <p class="">
                <b>19</b> is good with shy children? 
                <select name="answer19">
                    <option value="" hidden></option>
                    <option value="A. Andrea">A. Andrea</option>
                    <option value="B. Bella">B. Bella</option>
                    <option value="C. Cathy">C. Cathy</option>
                </select>
            </p>
            <p class="">
                <b>20</b> is a good cook? 
                <select name="answer20">
                    <option value="" hidden></option>
                    <option value="A. Andrea">A. Andrea</option>
                    <option value="B. Bella">B. Bella</option>
                    <option value="C. Cathy">C. Cathy</option>
                </select>
            </p>
        </div>
        <div class="col-md-12 mb-2">
            <h4 class="">SECTION 3</h4>
            <h5>Questions 21-25</h5>
            <p class="mb-0">Complete the flowchart.</p>
            <p class="mb-0">Write <b>ONE WORD ONLY</b> for each answer.</p>
        </div>
        <div class="col-md-12 mb-2 text-center">
            <h4 class="">Foundation for Essay Writing</h4>
            <p class="">Decide on <b>21</b> <input type="text" name="answer21" value="{{$testlistening->answer21}}" disabled> you like. <b>MARK:</b> <input type="number" name="mark21" value="{{$testlistening->mark21}}"></p>
            <p class=""><i class="bi bi-arrow-down"></i></p>
            <p class="">Focus on <b>22</b> <input type="text" name="answer22" value="{{$testlistening->answer22}}" disabled> area of interest. <b>MARK:</b> <input type="number" name="mark22" value="{{$testlistening->mark22}}"></p>
            <p class=""><i class="bi bi-arrow-down"></i></p>
            <p class="">Write <b>23</b> <input type="text" name="answer23" value="{{$testlistening->answer23}}" disabled> statement. <b>MARK:</b> <input type="number" name="mark23" value="{{$testlistening->mark23}}"></p>
            <p class=""><i class="bi bi-arrow-down"></i></p>
            <p class="">Create <b>24</b> <input type="text" name="answer24" value="{{$testlistening->answer24}}" disabled> <b>MARK:</b> <input type="number" name="mark24" value="{{$testlistening->mark24}}"></p>
            <p class=""><i class="bi bi-arrow-down"></i></p>
            <p class="">Ensure this <b>25</b> <input type="text" name="answer25" value="{{$testlistening->answer25}}" disabled> clearly. <b>MARK:</b> <input type="number" name="mark25" value="{{$testlistening->mark25}}"></p>
        </div>
        <div class="col-md-12 mb-2">
            <h5>Questions 26-30</h5>
            <p class="mb-0">Complete the summary.</p>
            <p class="mb-0">Write <b>NO MORE THAN TWO WORDS OR A NUMBER</b> for each answer.</p>
        </div>
        <div class="col-md-12 mb-2">
            <p class="">There are several 26 <input type="text" name="answer26" value="{{$testlistening->answer26}}" disabled> <b>MARK:</b> <input type="number" name="mark26" value="{{$testlistening->mark26}}"> involved in producing a good essay. The writer must think independently and give 27 <input type="text" name="answer27" value="{{$testlistening->answer27}}" disabled> <b>MARK:</b> <input type="number" name="mark27" value="{{$testlistening->mark27}}"> examples as support, each one with a reference (which is a 28 <input type="text" name="answer28" value="{{$testlistening->answer28}}" disabled> <b>MARK:</b> <input type="number" name="mark28" value="{{$testlistening->mark28}}">). The formatting must follow the 29 <input type="text" name="answer29" value="{{$testlistening->answer29}}" disabled> <b>MARK:</b> <input type="number" name="mark29" value="{{$testlistening->mark29}}"> issued by the university, as well as the word count decided by the lecturer, although it can vary by 30 <input type="text" name="answer30" value="{{$testlistening->answer30}}" disabled> <b>MARK:</b> <input type="number" name="mark30" value="{{$testlistening->mark30}}"></p>
        </div>
        <div class="col-md-12 mb-2">
            <h4 class="">SECTION 4</h4>
            <h5>Questions 31-33</h5>
            <p class="mb-0">Choose the correct letter, <b>A, B, or C</b>.</p>
        </div>
        <div class="col-md-12 mb-2">
            <p><b>31</b> Geocentrism</p>
            <div class="ps-4">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="answer31" id="311" value="A. has a long history.">
                  <label class="form-check-label" for="311">
                    A. <span class="fw-normal">has a long history.</span>
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="answer31" id="312" value="B. is similar to heliocentrism.">
                  <label class="form-check-label" for="312">
                    B. <span class="fw-normal">is similar to heliocentrism.</span>
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="answer31" id="313" value="C. took some time to be deduced.">
                  <label class="form-check-label" for="313">
                    C. <span class="fw-normal">took some time to be deduced.</span>
                  </label>
                </div>
            </div>
        </div>
        <div class="col-md-12 mb-2">
            <p><b>32</b> Heliocentrism</p>
            <div class="ps-4">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="answer32" id="321" value="A. was realised only recently..">
                  <label class="form-check-label" for="321">
                    A. <span class="fw-normal">was realised only recently..</span>
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="answer32" id="322" value="B. was not generally accepted..">
                  <label class="form-check-label" for="322">
                    B. <span class="fw-normal">was not generally accepted..</span>
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="answer32" id="323" value="C. fitted the views of the church..">
                  <label class="form-check-label" for="323">
                    C. <span class="fw-normal">fitted the views of the church..</span>
                  </label>
                </div>
            </div>
        </div>
        <div class="col-md-12 mb-2">
            <p><b>33</b> The night sky</p>
            <div class="ps-4">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="answer33" id="331" value="A. is relatively simple..">
                  <label class="form-check-label" for="331">
                    A. <span class="fw-normal">is relatively simple..</span>
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="answer33" id="332" value="B. remains basically the same..">
                  <label class="form-check-label" for="332">
                    B. <span class="fw-normal">remains basically the same..</span>
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="answer33" id="333" value="C. was once used for navigation..">
                  <label class="form-check-label" for="333">
                    C. <span class="fw-normal">was once used for navigation..</span>
                  </label>
                </div>
            </div>
        </div>
        <div class="col-md-12 mb-2">
            <h5>Questions 34-40</h5>
            <p class="mb-0">Complete the notes.</p>
            <p class="mb-0">Write <b>ONE WORD OR A NUMBER</b> for each answer.</p>
        </div>
        <div class="col-md-12 mb-2">
            <table class="table table-bordered" style="border:1px solid black">
              <tbody>
                <tr>
                  <td class="fw-bold text-nowrap">Nicolaus Copernicus</td>
                  <td>started the Copernican 34 <input type="text" name="answer34" value="{{$testlistening->answer34}}" disabled> <b>MARK:</b> <input type="number" name="mark34" value="{{$testlistening->mark34}}"> his book published the year he was 35 <input type="text" name="answer35" value="{{$testlistening->answer35}}" disabled> <b>MARK:</b> <input type="number" name="mark35" value="{{$testlistening->mark35}}"> and then passed away This book generated little 36 <input type="text" name="answer36" value="{{$testlistening->answer36}}" disabled> <b>MARK:</b> <input type="number" name="mark36" value="{{$testlistening->mark36}}"></td>
                </tr>
                <tr>
                  <td class="fw-bold text-nowrap">Other scientists</td>
                  <td>Galileo was persecuted. 37 <input type="text" name="answer37" value="{{$testlistening->answer37}}" disabled> <b>MARK:</b> <input type="number" name="mark37" value="{{$testlistening->mark37}}"> was killed. even the sun believed to be in 38 <input type="text" name="answer38" value="{{$testlistening->answer38}}" disabled> <b>MARK:</b> <input type="number" name="mark38" value="{{$testlistening->mark38}}"></td>
                </tr>
                <tr>
                  <td class="fw-bold text-nowrap">Modern geocentrism</td>
                  <td>based on the 39 <input type="text" name="answer39" value="{{$testlistening->answer39}}" disabled> <b>MARK:</b> <input type="number" name="mark39" value="{{$testlistening->mark39}}"> Believers also support creationism. 40 <input type="text" name="answer40" value="{{$testlistening->answer40}}" disabled> <b>MARK:</b> <input type="number" name="mark40" value="{{$testlistening->mark40}}"> of Americans believe in this.</td>
                </tr>
              </tbody>
            </table>
        </div>
        
        <div class="col-md-12 mb-2"></div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12 text-center">
            <button type="submit" class="btn btn-success px-5">Submit</button>
        </div>
    </div>
    </form>
</div>
@endsection
