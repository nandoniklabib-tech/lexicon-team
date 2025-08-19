<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{config('app.name')}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        .form-control{
            border-radius:0px;
            border:1px solid black;
        }
        .card-sign{
            height:160px;
            box-shadow: 0px 0px 10px 0px #00000040;
            border-radius:20px;
            display:flex;
            align-items:end;
            justify-content:center;
            text-align:center;
        }
        .card-my{
            border:1px solid #000000;
            border-radius:20px;
            padding:10px 0px;
        }
        .card-sign p{
            border-top:1px solid #000;
            padding:0px 20px;
        }
        .bi{
            color:red;
            padding-right: 10px;
        }
        p{
            font-size: 14px;
        }
    </style>
  </head>
  <body>
    <div id="printDiv" class="container-fluid py-2">
    <div >
        <div class="row justify-content-center">
            
            <div class="col-6 ">
                <img class="img-fluid" src="{{asset('assets/img/Top Head.png')}}" alt="image">
                {{$data->first_name}}
            </div>
            <div class="col-6 ">
                <img class="img-fluid" src="{{asset('assets/img/Top Head.png')}}" alt="image">
            </div>
           
           
            <div class="col-12 col-md-10">
                <div class="row">
                    <div class="col-6 row align-items-center">
                      <label class="col-auto">Sl. No :</label>
                      <div class="col">
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="col-6 row align-items-center">
                      <label class="col-auto">Date :</label>
                      <div class="col">
                        <input type="text" class="form-control">
                      </div>
                      <div class="col">
                        <input type="text" class="form-control">
                      </div>
                      <div class="col">
                        <input type="text" class="form-control">
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-10">

                <div class="col-11 row align-items-center">
                  <label class="col-auto">Received form :</label>
                  <div class="col">
                    <input type="text" class="form-control">
                  </div>
                </div>

            </div>
            
            <div class="col-md-10 pt-5">
                <div class="card-my">
                    <div class="row align-items-center fs-5">
                        <div class="col-8">
                            <span class="bg-danger px-3 py-1 text-white" style="border-radius:0px 10px 10px 0px;">Terms & Condition</span>
                            <p class="px-3 pt-3"><i class="bi bi-circle-square"></i> If you can't continue classes for any reason, your course will be <b>valid for 6 (six) months only</b>.</p>
                            <p class="px-3"><i class="bi bi-circle-square"></i> Please keep in mind, you <b>can't claim refund</b> after your enrollment.</p>
                        </div>
                        <div class="col-4 py-3 px-4">
                            <div class="card-sign">
                                <p>Signature</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-10 py-5">
                <div class="row justify-content-between">
                    <div class="col-6">
                        <div class="card-sign">
                            <p>Student's Signature</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card-sign">
                            <p>Accounts</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-10 pb-5" style="border-top: 3px solid #000000; text-align:center; font-size:14px;">
                <b><i class="bi bi-telephone-fill"></i> 01913 919 470, 01914 919 470 <i class="bi bi-envelope-fill"></i></b> lexiconelt"gmail.com <i class="bi bi-globe-europe-africa"></i> www.ieltsbd.org <i class="bi bi-facebook"></i>/lexiconELTC <br> 
                <b><i class="bi bi-house-fill"></i> NLI Tower (7th Floor) 977, Upper Jashore Road, KDA, New Market Area, Khulna-9100</b>
            </div>
            
            <div class=""></div>
            
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        // window.onload = function () {
        //     window.print();
        //     setTimeout(() => {
        //         window.close();
        //     }, 100);
        // };
    </script>
  </body>
</html>