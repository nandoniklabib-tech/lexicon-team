@extends('Backend.MockTest.layouts.app')

@section('content')
    <style>
        .form-card {
            background: #fff;
            border-radius: 20px;
            padding: 2rem;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
            transition: all 0.3s ease;
        }

        .form-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.25);
        }

        .form-control {
            border-radius: 12px;
            border: 1px solid #ddd;
            padding: 12px 15px;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: #667eea;
            box-shadow: 0 0 8px rgba(102, 126, 234, 0.6);
        }

        label {
            font-weight: 600;
            color: #444;
        }

        .btn-submit {
            background: linear-gradient(135deg, #667eea, #764ba2);
            border: none;
            border-radius: 12px;
            padding: 12px 25px;
            font-size: 16px;
            font-weight: bold;
            color: #fff;
            transition: all 0.4s ease;
            box-shadow: 0 5px 15px rgba(118, 75, 162, 0.3);
        }

        .btn-submit:hover {
            background: linear-gradient(135deg, #764ba2, #667eea);
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(102, 126, 234, 0.4);
        }

        .form-title {
            font-size: 24px;
            font-weight: 700;
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
    </style>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7">
                <form class="form-card" action="{{ route('userInfoSave', $mockTest->id) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <h3 class="form-title">Fill Your Information</h3>
                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="name" class="d-flex justify-content-between">
                                Name *
                            </label>
                            <input type="text" name="name" id="name" class="form-control mt-2" required>
                        </div>
                        <div class="col-12 mb-3">
                            <label for="phone" class="d-flex justify-content-between">
                                Phone *
                                <i class="bi bi-info-circle text-muted" data-bs-toggle="tooltip"
                                    title="For contact with you."></i>
                            </label>
                            <input type="text" name="phone" id="phone" class="form-control mt-2" required>
                        </div>
                        <div class="col-12 mb-3">
                            <label for="email" class="d-flex justify-content-between">
                                Email *
                                <i class="bi bi-info-circle text-muted" data-bs-toggle="tooltip"
                                    title="We’ll send your result to this email."></i>
                            </label>
                            <input type="email" name="email" id="email" class="form-control mt-2" required>
                        </div>
                        <div class="col-12 text-center">
                            <button type="submit" class="btn-submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
