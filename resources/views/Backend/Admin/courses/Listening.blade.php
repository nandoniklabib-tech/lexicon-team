@extends('Backend.app')

@section('content')

<style>

</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 text-center">
            <a href="{{url('courses')}}" class="btn btn-secondary">Back</a>
            <a href="{{url('courses/'.$course->id.'/Listening')}}" class="btn btn-primary fw-bold text-uppercase">Listening</a>
            <a href="{{url('courses/'.$course->id.'/Reading')}}" class="btn btn-outline-primary fw-bold text-uppercase">Reading</a>
            <a href="{{url('courses/'.$course->id.'/Writing')}}" class="btn btn-outline-primary fw-bold text-uppercase">Writing</a>
            <a href="{{url('courses/'.$course->id.'/Speaking')}}" class="btn btn-outline-primary fw-bold text-uppercase">Speaking</a>
        </div>
        
        <!--<div class="col-12 mt-3">-->
        <!--    <input type="text" name="l_1" class="form-control mb-3" placeholder="Write Question No: 1">-->
        <!--    <input type="text" name="l_2" class="form-control mb-3" placeholder="Write Question No: 2">-->
        <!--    <input type="text" name="l_3" class="form-control mb-3" placeholder="Write Question No: 3">-->
        <!--    <input type="text" name="l_4" class="form-control mb-3" placeholder="Write Question No: 4">-->
        <!--    <input type="text" name="l_5" class="form-control mb-3" placeholder="Write Question No: 5">-->
        <!--</div>-->
        <form action="{{url('listens',$listen->id)}}" method="post" enctype="multipart/form-data"> @csrf @method('put')
        <div class="col-12 mt-3">

            <p class="text-uppercase fw-bold fs-4">Section 1</p>
            <p class="fw-bold">Question 1-5</p>
            <p>Complete the sentences.</p>
            <p>Write <span class="fw-bold">NO MORE THAN TWO WORDS</span> for each answer.</p>
            
            <p>Example</p>
            <p>Peter consumers far too much <span style="text-decoration:underline;">soft drink</span></p>
            <p>(1) <input type="text" name="lq1" value="{{$listen->lq1}}" style="width:300px;"> Answer: <input type="text" name="la1" value="{{$listen->la1}}" style="width:300px;" placeholder="Answer"></p>
            <p>(2) <input type="text" name="lq2" value="{{$listen->lq2}}" style="width:300px;"> Answer: <input type="text" name="la2" value="{{$listen->la2}}" style="width:300px;" placeholder="Answer"></p>
            <p>(3) <input type="text" name="lq3" value="{{$listen->lq3}}" style="width:300px;"> Answer: <input type="text" name="la3" value="{{$listen->la3}}" style="width:300px;" placeholder="Answer"></p>
            <p>(4) <input type="text" name="lq4" value="{{$listen->lq4}}" style="width:300px;"> Answer: <input type="text" name="la4" value="{{$listen->la4}}" style="width:300px;" placeholder="Answer"></p>
            <p>(5) <input type="text" name="lq5" value="{{$listen->lq5}}" style="width:300px;"> Answer: <input type="text" name="la5" value="{{$listen->la5}}" style="width:300px;" placeholder="Answer"></p>

            <p>Question 6-10</p>
            <p>Choose the correct letter,<input type="text" style="width:100px;" placeholder="C, I or B"></p>
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th scope="col"></th>
                  <th scope="col"><input type="text" name="" style="width:300px;"></th>
                  <th scope="col"><input type="text" name="" style="width:300px;"></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><input type="text" name="" style="width:300px;"></td>
                  <td>B</td>
                  <td>(6) <input type="text" name="" style="width:300px;" placeholder="Answer"></td>
                </tr>
                <tr>
                  <td><input type="text" name="" style="width:300px;"></td>
                  <td>(7) <input type="text" name="" style="width:300px;" placeholder="Answer"></td>
                  <td>(8) <input type="text" name="" style="width:300px;" placeholder="Answer"></td>
                </tr>
                <tr>
                  <td><input type="text" name="" style="width:300px;"></td>
                  <td>(9) <input type="text" name="" style="width:300px;" placeholder="Answer"></td>
                  <td>(10) <input type="text" name="" style="width:300px;" placeholder="Answer"></td>
                </tr>
              </tbody>
            </table>
            <p><input type="text" name="" style="width:300px;"></p>
            <p><input type="text" name="" style="width:300px;"></p>
            <p><input type="text" name="" style="width:300px;"></p>

        </div> 
        <div class="col-12 mt-3">

            <p class="text-uppercase fw-bold fs-4">Section 2</p>
            <p class="fw-bold">Question 11-15</p>   
            <p>Complete the table</p>   
            <p>Write <span class="fw-bold">NO MORE THAN TWO WORDS</span> for each answer.</p>   
            <p>Advantages of Standfield Childcare Center</p>   
            <table class="table table-bordered">
              <thead>
                <tr class="text-nowrap">
                  <th scope="col"></th>
                  <th scope="col"><input type="text" style="width:300px;"></th>
                  <th scope="col"><input type="text" style="width:300px;"></th>
                </tr>
              </thead>
              <tbody>
                <tr class="text-nowrap">
                  <td>1</td>
                  <td>11. <input type="text" name="lq11" value="{{$listen->lq11}}" style="width:200px;"> Answer: <input type="text" name="la11" value="{{$listen->la11}}" style="width:200px;"></td>
                  <td>12. <input type="text" name="lq12" value="{{$listen->lq12}}" style="width:200px;"> Answer: <input type="text" name="la12" value="{{$listen->la12}}" style="width:200px;"></td>
                </tr>
                <tr class="text-nowrap">
                  <td>2</td>
                  <td>13. <input type="text" name="lq13" value="{{$listen->lq13}}" style="width:200px;"> Answer: <input type="text" name="la13" value="{{$listen->la13}}" style="width:200px;"></td>
                  <td>14. <input type="text" name="lq14" value="{{$listen->lq14}}" style="width:200px;"> Answer: <input type="text" name="la14" value="{{$listen->la14}}" style="width:200px;"></td>
                </tr>
                <tr class="text-nowrap">
                  <td>3</td>
                  <td>15. <input type="text" name="lq15" value="{{$listen->lq15}}" style="width:200px;"> Answer: <input type="text" name="la15" value="{{$listen->la15}}" style="width:200px;"></td>
                  <td>16. <input type="text" name="lq16" value="{{$listen->lq16}}" style="width:200px;"> Answer: <input type="text" name="la16" value="{{$listen->la16}}" style="width:200px;"></td>
                </tr>
              </tbody>
            </table>
            <p class="fw-bold">Question 17-20</p>   
            <p>Choose the correct letter, A, B or C</p>   
            <p><b>NB</b> <i>you may use a letter more than once.</i></p>   
            <p><b>A</b> <input type="text" name="" style="width:300px;"></p>   
            <p><b>B</b> <input type="text" name="" style="width:300px;"></p>   
            <p><b>C</b> <input type="text" name="" style="width:300px;"></p>   
            <p><b>Which childcare worker:</b></p>   
            <p><b>17</b> <input type="text" name="" style="width:300px;"></p>   
            <p><b>18</b> <input type="text" name="" style="width:300px;"></p>   
            <p><b>19</b> <input type="text" name="" style="width:300px;"></p>   
            <p><b>20</b> <input type="text" name="" style="width:300px;"></p>     
            <p></p>   
            <p></p>   
            <p></p>   
            <p></p>   
        </div>
        <div class="col-12 mt-3">
            <p class="text-uppercase fw-bold fs-4">Section 3</p>
            <p class="fw-bold">Question 21-25</p>
            <p class="">21. <input type="text" name="lq21" value="{{$listen->lq21}}" style="width:300px;"> Answer: <input type="text" name="la21" value="{{$listen->la21}}" style="width:300px;"></p>
            <p class="">22. <input type="text" name="lq22" value="{{$listen->lq22}}" style="width:300px;"> Answer: <input type="text" name="la22" value="{{$listen->la22}}" style="width:300px;"></p>
            <p class="">23. <input type="text" name="lq23" value="{{$listen->lq23}}" style="width:300px;"> Answer: <input type="text" name="la23" value="{{$listen->la23}}" style="width:300px;"></p>
            <p class="">24. <input type="text" name="lq24" value="{{$listen->lq24}}" style="width:300px;"> Answer: <input type="text" name="la24" value="{{$listen->la24}}" style="width:300px;"></p>
            <p class="">25. <input type="text" name="lq25" value="{{$listen->lq25}}" style="width:300px;"> Answer: <input type="text" name="la25" value="{{$listen->la25}}" style="width:300px;"></p>
            <p class="fw-bold">Question 26-30</p>
            <p class="">Complete the summary</p>
            <p class="">
                26. <input type="text" name="lq26" value="{{$listen->lq26}}" style="width:300px;"> Answer: <input type="text" name="la26" value="{{$listen->la26}}" style="width:300px;">
                27. <input type="text" name="lq27" value="{{$listen->lq27}}" style="width:300px;"> Answer: <input type="text" name="la27" value="{{$listen->la27}}" style="width:300px;">
                28. <input type="text" name="lq28" value="{{$listen->lq28}}" style="width:300px;"> Answer: <input type="text" name="la28" value="{{$listen->la28}}" style="width:300px;">
                29. <input type="text" name="lq29" value="{{$listen->lq29}}" style="width:300px;"> Answer: <input type="text" name="la29" value="{{$listen->la29}}" style="width:300px;">
                30. <input type="text" name="lq30" value="{{$listen->lq30}}" style="width:300px;"> Answer: <input type="text" name="la30" value="{{$listen->la30}}" style="width:300px;">
            </p>
        </div>
        <div class="col-12 mt-3">
            <p class="text-uppercase fw-bold fs-4">Section 4</p>
            <p class="fw-bold">Question 31-33</p>
            
            <div class="col-12 mb-4">
                <p class="">31. <input type="text" name="lq31" value="{{$listen->lq31}}" style="width:300px;"></p>
                <p class="ps-5"><b>A</b> <input type="text" name="lq31o1" value="{{$listen->lq31o1}}" style="width:300px;"></p>
                <p class="ps-5"><b>B</b> <input type="text" name="lq31o2" value="{{$listen->lq31o2}}" style="width:300px;"></p>
                <p class="ps-5"><b>C</b> <input type="text" name="lq31o3" value="{{$listen->lq31o3}}" style="width:300px;"></p>
                <p class=""><b>Answer:</b> <input type="text" name="la31" value="{{$listen->la31}}" style="width:300px;"></p>
            </div> 
            <div class="col-12 mb-4">
                <p class="">32. <input type="text" name="lq32" value="{{$listen->lq32}}" style="width:300px;"></p>
                <p class="ps-5"><b>A</b> <input type="text" name="lq32o1" value="{{$listen->lq32o1}}" style="width:300px;"></p>
                <p class="ps-5"><b>B</b> <input type="text" name="lq32o2" value="{{$listen->lq32o2}}" style="width:300px;"></p>
                <p class="ps-5"><b>C</b> <input type="text" name="lq32o3" value="{{$listen->lq32o3}}" style="width:300px;"></p>
                <p class=""><b>Answer:</b> <input type="text" name="la32" value="{{$listen->la32}}" style="width:300px;"></p>
            </div> 
            <div class="col-12 mb-4">
                <p class="">33. <input type="text" name="lq33" value="{{$listen->lq33}}" style="width:300px;"></p>
                <p class="ps-5"><b>A</b> <input type="text" name="lq33o1" value="{{$listen->lq33o1}}" style="width:300px;"></p>
                <p class="ps-5"><b>B</b> <input type="text" name="lq33o2" value="{{$listen->lq33o2}}" style="width:300px;"></p>
                <p class="ps-5"><b>C</b> <input type="text" name="lq33o3" value="{{$listen->lq33o3}}" style="width:300px;"></p>
                <p class=""><b>Answer:</b> <input type="text" name="la33" value="{{$listen->la33}}" style="width:300px;"></p>
            </div> 
            
            <p class="fw-bold">Question 34-40</p>  
            <p class="">Complete the notes</p>  
            <p class="">Write <b>ONE WORD OR A NUMBER</b> for each answer.</p>  
            <table class="table table-bordered">
              <tbody>
                <tr>
                  <td><input type="text" name="" style="width:300px;"></td>
                  <td>
                      34. <input type="text" name="lq34" value="{{$listen->lq34}}" style="width:300px;"> Answer: <input type="text" name="la34" value="{{$listen->la34}}" style="width:300px;">
                      35. <input type="text" name="lq35" value="{{$listen->lq35}}" style="width:300px;"> Answer: <input type="text" name="la35" value="{{$listen->la35}}" style="width:300px;">
                      36. <input type="text" name="lq36" value="{{$listen->lq36}}" style="width:300px;"> Answer: <input type="text" name="la36" value="{{$listen->la36}}" style="width:300px;">
                  </td>
                </tr>
                <tr>
                  <td><input type="text" name="" style="width:300px;"></td>
                  <td>
                      37. <input type="text" name="lq37" value="{{$listen->lq37}}" style="width:300px;"> Answer: <input type="text" name="la37" value="{{$listen->la37}}" style="width:300px;">
                      38. <input type="text" name="lq38" value="{{$listen->lq38}}" style="width:300px;"> Answer: <input type="text" name="la38" value="{{$listen->la38}}" style="width:300px;">
                  </td>
                </tr>
                <tr>
                  <td><input type="text" name="" style="width:300px;"></td>
                  <td>
                      39. <input type="text" name="lq39" value="{{$listen->lq39}}" style="width:300px;"> Answer: <input type="text" name="la39" value="{{$listen->la39}}" style="width:300px;">
                      40. <input type="text" name="lq40" value="{{$listen->lq40}}" style="width:300px;"> Answer: <input type="text" name="la40" value="{{$listen->la40}}" style="width:300px;">
                  </td>
                </tr>
              </tbody>
            </table>
            
        </div> 
        <button type="submit" class="btn btn-primary px-5">Save Changes</button>
        </form>
    </div>
</div>

@endsection
