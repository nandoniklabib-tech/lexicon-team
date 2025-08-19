@extends('Backend.MockTest.layouts.app')

@section('content')
    <section>
        <div class="container py-4">
            <div class="row justify-content-center">
                @foreach ($mockTests as $test)
                    <div class="col-md-3 mb-4 bg-info">
                        <a href="{{ url('admin/mocktests/'.$test->id.'/user-info') }}" class=""
                            style="height:120px; width:100%;color:#222; display:flex; align-items:center; justify-content:center; font-size:33px;">
                            {{ $test->title }}
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
