@extends('Backend.MockTest.layouts.app')

@section('content')
    <style>
        .mock-card {
            border-radius: 20px;
            height: 180px;
            color: #fff;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            transition: all 0.4s ease-in-out;
            box-shadow: 0 8px 20px rgba(255, 0, 0, 0.15);
            background-size: 200% 200%;
        }

        .mock-card:hover {
            transform: translateY(-8px) scale(1.05);
            box-shadow: 0 12px 35px rgba(0, 0, 0, 0.25);
            animation: gradientShift 4s ease infinite;
        }

        @keyframes gradientShift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .mock-title {
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .mock-desc {
            font-size: 14px;
            opacity: 0.9;
        }

        .mock-link {
            text-decoration: none;
            color: inherit;
            width: 100%;
            height: 100%;
        }

        /* Gradient sets */
        .gradient-1 { background: linear-gradient(135deg, #66ff75, #f30a0e); }
        .gradient-2 { background: linear-gradient(135deg, #ff6a00, #2409ee); }
        .gradient-3 { background: linear-gradient(135deg, #19c8d5, #168702); }
        .gradient-4 { background: linear-gradient(135deg, #112599, #e4bbbb); }
        .gradient-5 { background: linear-gradient(135deg, #8e2de2, #cde000); }
        .gradient-6 { background: linear-gradient(135deg, #fc6076, #13fd0b); }

        .gradient-7 { background: linear-gradient(135deg, #3a28c0, #ff5e62); }
        .gradient-8 { background: linear-gradient(135deg, #8dcf11, #054fef); }
        .gradient-9 { background: linear-gradient(135deg, #bb2537, #1f9a4e); }
        .gradient-10 { background: linear-gradient(135deg, #28ffed, #381161); }
        .gradient-11 { background: linear-gradient(135deg, #8e2de2, #dcef12); }
        .gradient-12 { background: linear-gradient(135deg, #db3249, #16f1db); }
    </style>

    <section>
        <div class="container py-5">
            <h2 class="text-center fw-bold mb-5 text-white">Available Mock Tests</h2>
            <div class="row g-4 justify-content-center">
                @foreach ($mockTests as $index => $test)
                    @php
                        $gradients = ['gradient-1','gradient-2','gradient-3','gradient-4','gradient-5','gradient-6','gradient-7','gradient-8','gradient-9','gradient-10','gradient-11','gradient-12'];
                        $class = $gradients[$index % count($gradients)];
                    @endphp
                    <div class="col-md-4 col-lg-3">
                        <a href="{{ url('admin/mocktests/'.$test->id .'/user-info') }}" class="mock-link">
                            <div class="mock-card {{ $class }}">
                                <div class="mock-title">{{ $test->title }}</div>
                                <div class="mock-desc">{{ Str::limit($test->description, 80) }}</div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
