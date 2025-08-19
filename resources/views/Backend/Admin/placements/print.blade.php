<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{config('app.name')}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  </head>
  <body>
    <div id="printDiv" class="container-fluid py-2">
    <div >
        <div class="row justify-content-center">
            <div class="col-10 ">
                <img class="img-fluid" src="{{asset('assets/img/new-logo-png2.png')}}" alt="image">
            </div>
            <div class="col-12 text-center fs-3 fw-bold mb-3">IELTS Registration Form</div>
            
            <div class="col-10 bg-dark text-white fs-4 fw-bold text-center mb-2" style="border-radius: 20px 20px 0px 0px;">
                OFFICE USE ONLY
            </div>
            <div class="col-10">
                <div class="row justify-content-between">
                    <div class="col-8 ps-5" style="background-color: #FFC1B4; height:200px;">
                        <h5 class="mt-4">Enrollment Date : {{$data->enrollment_date}}</h5>
                        <h5 class="mt-4">Batch : {{$data->batch}}</h5>
                    </div>
                    <div class="col-4">
                        <div style="
                        width:100%;
                        height:250px;
                        background-image: url('{{asset("images/placements/".$data->image)}}');
                        background-position:center;
                        background-repeat:no repeat;
                        background-size:cover;
                        "></div>
                    </div>
                </div>
            </div>
            <style>
                .data-underline{
                    border-bottom:2px dotted gray;
                }
            </style>
            <div class="col-10">
                <div class="row">
                    <div class="col-8">
                        <h5 class="mb-2">Name: <span class="data-underline">{{$data->name}}</span></h5>
                        <h5 class="mb-2">Father's Name: <span class="data-underline">{{$data->father_name}}</span></h5>
                        <h5 class="mb-2">Mother's Name: <span class="data-underline">{{$data->mother_name}}</span></h5>
                        <h5 class="mb-2">Mailing Address: <span class="data-underline">{{$data->email}}</span></h5>
                        <h5 class="mb-2">Blood Group: <span class="data-underline">{{$data->blood_group}}</span></h5>
                        <h5 class="mb-2">Study/Work: <span class="data-underline">{{$data->profession}}</span></h5>
                        <h5 class="mb-2">Cell Number: <span class="data-underline">{{$data->phone}}</span></h5>
                        <h5 class="mb-2">Gurdian Cell No.: <span class="data-underline">{{$data->gurdian_phone}}</span></h5>
                        <h5 class="mb-2">Email: <span class="data-underline">{{$data->email}}</span></h5>
                        <h5 class="mb-2">Facebook: <span class="data-underline">{{$data->fb}}</span></h5>
                        <h5 class="mb-2">Course Start: <span class="data-underline">{{$data->course_start}}</span></h5>
                        <h5 class="mb-2">Course End: <span class="data-underline">{{$data->course_end}}</span></h5>
                        <h5 class="mb-2">
                            <div class="row">
                                <div class="col">Renewal:</div>
                                <div class="col">1st:{{$data->renewal1}}</div>
                                <div class="col">2nd:{{$data->renewal2}}</div>
                                <div class="col">3rd:{{$data->renewal3}}</div>
                            </div>
                        </h5>
                        <h5 class="mb-2">Reference: <span class="data-underline">{{$data->reference}}</span></h5>
                    </div>
                    <div class="col-4 d-flex flex-column justify-content-center align-items-start">
                        @foreach($courses as $course)
                        @if($course->id==$data->course_id)
                        <div>
                          <i class="bi bi-check2-square"></i> {{$course->title}} <br> <br>
                        </div>
                        @else
                        <div>
                          <i class="bi bi-app"></i> {{$course->title}} <br> <br>
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-10 mb-5" style="border-bottom:3px solid black; border-radius:30px; height:40px;"></div>
            <div class="col-11 pt-5">
                <div class="row justify-content-between">
                    <div class="col-3 border-top text-center">
                        Student's Signature
                    </div>
                    <div class="col-3 border-top text-center">
                        Enrolled By
                    </div>
                    <div class="col-3 border-top text-center">
                        Authority's Signature
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        window.onload = function () {
            window.print();
            setTimeout(() => {
                window.close();
            }, 100);
        };
    </script>
  </body>
</html>