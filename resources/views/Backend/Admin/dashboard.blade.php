@extends('Backend.app')

@section('content')
<div class="container-fluid py-4">
    <div class="row justify-content-center">
        
        <div class="col-md-4 mb-4">
            <a style="background:#D91656;" href="{{url('admin/mocktests')}}" class="card py-5 text-center fs-4 text-white fw-bold">
                Mock Test <br>
                System
            </a>
        </div>
        <div class="col-md-4 mb-4">
            <a style="background:#EB5B00;" href="#" class="card py-5 text-center fs-4 text-white fw-bold">
                Higher Education <br>
                Student List
            </a>
        </div>
        <div class="col-md-4 mb-4">
            <a style="background:#D91656;" href="#" class="card py-5 text-center fs-4 text-white fw-bold">
                Immigration <br>
                Student List
            </a>
        </div>
        <div class="col-md-4 mb-4">
            <a style="background:#640D5F;" href="#" class="card py-5 text-center fs-4 text-white fw-bold">
                IELTS Registration <br>
                Student List
            </a>
        </div>
        <div class="col-md-4 mb-4">
            <a style="background:#D91656;" href="#" class="card py-5 text-center fs-4 text-white fw-bold">
                Placement Test <br>
                Student List
            </a>
        </div>
        <div class="col-md-4 mb-4">
            <a style="background:#640D5F;" href="#" class="card py-5 text-center fs-4 text-white fw-bold">
                Lexiflies <br>
                Student List
            </a>
        </div>
        <div class="col-md-4 mb-4">
            <a style="background:#EB5B00;" href="#" class="card py-5 text-center fs-4 text-white fw-bold">
                Contact <br>
                Student List
            </a>
        </div>
        
    </div>
</div>
@endsection
