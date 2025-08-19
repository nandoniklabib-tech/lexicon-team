<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Writing</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  
  <style>
    .back-container{
      width: 210mm;
      /* height: 297mm; */
      /* background-image: url(./demo.jpg);
      background-position: center;
      background-size: cover;
      background-repeat: no-repeat; */
      /* border: 1px solid black; */
      margin: 0px auto;
    }
    .print-btn{
      position: fixed;
      left: 10px;
      top: 10px;
    }
    @media print {
      .print-btn{
        display: none;
      }
    }
  </style>
  </head>
  <body>
    
  <a href="#" class="print-btn btn btn-dark" onclick="window.print()">🖨️ Print Now</a>

  <div class="back-container">

    <!-- top -->
    <div style="background: white; width: 100%;height: 80mm;">
      <div style="background: white;width: 95%;height: 30%; margin: 0px auto;position: relative;">
        <div style="position: absolute;width: 30px;height: 30px;left: 5px;top: 20px;background: black;"></div>
        <div style="position: absolute;width: 30px;height: 30px;right: 5px;top: 20px;background: black;"></div>
        <div class="text-center pt-3">
          <img style="width: 70%;margin: 0px auto;" src="{{asset('assets/Mocktest/logo.jpg')}}" alt="logos">
        </div>
      </div>
      <div style="background: white;width: 90%;height: 70%; margin: 0px auto; display: flex; align-items:stretch;justify-content: center;">
        <div class="row ">

          <div class="col-12 text-center fs-3 fw-bold">
            IELTS Writing Answer Sheet - TASK 1
          </div>
          <div class="col-12">
            <span class="fw-bold fs-5">Candidate Name:</span>
            <span class="fs-5">{{$testwriting->name}}</span>
          </div>
          <div class="col-12">
            <span class="fw-bold fs-5">Candidate No:</span>
            <span class="fs-5">0000</span>
          </div>
          <div class="col-7">
            <span class="fw-bold fs-5">Test Module:</span>
            <span class="fs-5">&#9635; Academic </span>
            <span class="fs-5">&#9634; General Training </span>
            
          </div>
          <div class="col-5 text-end">
            <span class="fw-bold fs-5">Test Date: </span>
            <span class="fs-5">{{$testwriting->created_at}}</span>
          </div>
          <div class="col-12 text-center" style="font-size: 11px;">
            If you need more space to write your answer, use an additional sheet and write in the space provided to indicate how many sheet you are using.
          </div>

        </div>
      </div>
    </div>

    <!-- middle -->
    <div style="background: red; width: 100%;height: 160mm;padding: 10px 30px 0px 30px;color: white;">
      <div class="row text-center fw-bold">
        <div class="col-3">
          Writing Task 1
        </div>
        <div class="col-3">
          Writing Task 1
        </div>
        <div class="col-3">
          Writing Task 1
        </div>
        <div class="col-3">
          Writing Task 1
        </div>
      </div>
      <div style="background: white; width: 100%;height: 100%; color: black;padding: 20px;text-align: justify;">
        <p>{{$testwriting->answer1}}</p>
      </div>
    </div>

    <!-- bottom -->
    <div style="background: white; width: 100%;height: 57mm;">
      <div style="border: 1px solid black; width: 90%; height: 70%; display: flex; align-items: center; justify-content: center; margin: 0px auto;">
        Do not write in this area. Please continue your answer on the other side of this sheet.
      </div>
      <div style=" width: 95%; height: 30%; margin: 0px auto; position: relative;">
        <div style="position: absolute;width: 30px;height: 30px;left: 5px;bottom: 20px;background: black;"></div>
        <div style="position: absolute;width: 30px;height: 30px;right: 5px;bottom: 20px;background: black;"></div>
      </div>
    </div>

  </div>

  <div class="back-container">

    <!-- top -->
    <div style="background: white; width: 100%;height: 80mm;">
      <div style="background: white;width: 95%;height: 30%; margin: 0px auto;position: relative;">
        <div style="position: absolute;width: 30px;height: 30px;left: 5px;top: 20px;background: black;"></div>
        <div style="position: absolute;width: 30px;height: 30px;right: 5px;top: 20px;background: black;"></div>
        <div class="text-center pt-3">
          <img style="width: 70%;margin: 0px auto;" src="{{asset('assets/Mocktest/logo.jpg')}}" alt="logos">
        </div>
      </div>
      <div style="background: white;width: 90%;height: 70%; margin: 0px auto; display: flex; align-items:stretch;justify-content: center;">
        <div class="row ">

          <div class="col-12 text-center fs-3 fw-bold">
            IELTS Writing Answer Sheet - TASK 1
          </div>
          <div class="col-12">
            <span class="fw-bold fs-5">Candidate Name:</span>
            <span class="fs-5">{{$testwriting->name}}</span>
          </div>
          <div class="col-12">
            <span class="fw-bold fs-5">Candidate No:</span>
            <span class="fs-5">0000</span>
          </div>
          <div class="col-7">
            <span class="fw-bold fs-5">Test Module:</span>
            <span class="fs-5">&#9635; Academic </span>
            <span class="fs-5">&#9634; General Training </span>
            
          </div>
          <div class="col-5 text-end">
            <span class="fw-bold fs-5">Test Date: </span>
            <span class="fs-5">{{$testwriting->created_at}}</span>
          </div>
          <div class="col-12 text-center" style="font-size: 11px;">
            If you need more space to write your answer, use an additional sheet and write in the space provided to indicate how many sheet you are using.
          </div>

        </div>
      </div>
    </div>

    <!-- middle -->
    <div style="background: red; width: 100%;height: 160mm;padding: 10px 30px 0px 30px;color: white;">
      <div class="row text-center fw-bold">
        <div class="col-3">
          Writing Task 2
        </div>
        <div class="col-3">
          Writing Task 2
        </div>
        <div class="col-3">
          Writing Task 2
        </div>
        <div class="col-3">
          Writing Task 2
        </div>
      </div>
      <div style="background: white; width: 100%;height: 100%; color: black;padding: 20px;text-align: justify;">
        <p>{{$testwriting->answer2}}</p>
      </div>
    </div>

    <!-- bottom -->
    <div style="background: white; width: 100%;height: 57mm;">
      <div style="border: 1px solid black; width: 90%; height: 70%; display: flex; align-items: center; justify-content: center; margin: 0px auto;">
        Do not write in this area. Please continue your answer on the other side of this sheet.
      </div>
      <div style=" width: 95%; height: 30%; margin: 0px auto; position: relative;">
        <div style="position: absolute;width: 30px;height: 30px;left: 5px;bottom: 20px;background: black;"></div>
        <div style="position: absolute;width: 30px;height: 30px;right: 5px;bottom: 20px;background: black;"></div>
      </div>
    </div>

  </div>
      

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
  </body>
</html>

