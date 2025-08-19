<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{config('app.name')}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div id="printDiv" class="container-fluid py-2">
    <div >
        <div class="row justify-content-center">
            <div class="col-10 ">
                <img class="img-fluid" src="{{asset('assets/img/Top Head.png')}}" alt="image">
            </div>
            <div class="col-12 text-center fs-3 fw-bold mb-3">IELTS Registration Form</div>
            <div class="col-12 col-md-10">
            <div class="table-responsive">
                <table class="table border table-responsive fs-6">
                  <tbody>
                    <tr><td>1. Given Name: {{$data->first_name}}</td></tr>
                    <tr><td>2. Surename/Family Name: {{$data->last_name}}</td></tr>
                    <tr><td>3. Date of Birth: {{$data->dob}}</td></tr>
                    <tr><td>4. Passport Number: {{$data->passport_number}}</td></tr>
                    <tr><td>5. Expiry date: {{$data->passport_exp_date}}</td></tr>
                    <tr><td>6. NID Card Number: {{$data->nid}} <br> (If you don't have any passport or passport date is expired)</td></tr>
                    <tr><td>7. Email address: {{$data->email}}</td></tr>
                    <tr><td>8. Cell Number: {{$data->phone}}</td></tr>
                    <tr><td>9. The test type you intend to take: {{$data->test_type}}</td></tr>
                    <tr><td>10. Preferred Test Date: {{$data->test_date}}</td></tr>
                    <tr><td>11. Occupation: {{$data->occupation}}</td></tr>
                    <tr><td>12. Country to apply for Visa: {{$data->country_for_apply}}</td></tr>
                    <tr><td>13. How many years have you studied in English?: {{$data->year_studied_english}}</td></tr>
                    <tr><td>14. Test Venue: {{$data->test_venue}}</td></tr>
                    <tr><td class="text-center fw-bold">If you are under 18, please fill out the option below</td></tr>
                    <tr><td>15. Guradian's name: {{$data->guardian_name}}</td></tr>
                    <tr><td>16. Date of Birth (Guardian): {{$data->guardian_dob}}</td></tr>
                    <tr><td>17. Email ID: {{$data->guardian_email}}</td></tr>
                    <tr><td>18. Cell number: {{$data->guardian_phone}}</td></tr>
                    <tr><td>19. Passport or NID Number: {{$data->guardian_passport_nid}}</td></tr>
                    <tr><td>20. Expiry date (Passport): {{$data->guardian_passport_exp_date}}</td></tr>
                  </tbody>
                </table>
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