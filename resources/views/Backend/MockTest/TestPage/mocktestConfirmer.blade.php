<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IELTS Dashboard</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <style>
        * {
            font-family: "Roboto", sans-serif;
            font-family: "Inter", sans-serif;
            font-family: "Lato", sans-serif;
        }

        .accordion-button:focus {
            z-index: 3;
            outline: 0;
            box-shadow: none;
        }

        .accordion-button:not(.collapsed) {
            color: var(--bs-accordion-active-color);
            background-color: rgb(222, 222, 222);
            box-shadow: inset 0 calc(-1 * var(--bs-accordion-border-width)) 0 var(--bs-accordion-border-color);
        }
    </style>
</head>

<body>
    <section style="border-bottom:1px solid black;">
        <p class="fw-bold my-2 ps-5">
            <!-- XXXXXXXXX  -->
            {{ session('mocktest.email') }}
        </p>
    </section>

    <section>
        <div class="container">
            <div class="row">

                <div class="col-12 fs-3 mt-4 text-danger">IELTS Familiarisation Test</div>
                <div class="col-12 fs-4 fw-bold mb-4">
                    Today
                </div>

                @if ($testlistening_have)
                    <div class="col-12 mb-5">
                        <div class="card shadow p-5">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <h3 class="fw-bold">Listening</h3>
                                    <h4 class="py-4 text-success">Completed</h4>
                                    <p class="mb-0">Timing: 30 minutes</p>
                                </div>
                                <div class="col-md-6 text-end text-success fs-1">
                                    <i class="bi bi-check-circle-fill"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if ($testreading_have)
                        <div class="col-12 mb-5">
                            <div class="card shadow p-5">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <h3 class="fw-bold">Reading</h3>
                                        <h4 class="py-4 text-success">Completed</h4>
                                        <p class="mb-0">Timing: 60 minutes</p>
                                    </div>
                                    <div class="col-md-6 text-end text-success fs-1">
                                        <i class="bi bi-check-circle-fill"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if (!$testwriting_have)
                            <div class="col-12 mb-5">
                                <div class="card shadow p-5">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            <h3 class="fw-bold">Writing</h3>
                                            <h4 class="py-4 text-danger">Not Completed</h4>
                                            <p class="mb-0">Timing: 60 minutes</p>
                                        </div>
                                        <div class="col-12 mt-4">
                                            <div class="accordion" id="accordionExample">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed fw-bold"
                                                            type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseTwo" aria-expanded="false"
                                                            aria-controls="collapseTwo">
                                                            Test information.
                                                        </button>
                                                    </h2>
                                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                                        data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">
                                                            <div class="row">

                                                                <div class="col-12">
                                                                    <video width="100%" height="400" controls>
                                                                        <source
                                                                            src="{{ asset('assets/videos/writing.mp4') }}"
                                                                            type="video/mp4">
                                                                        <source
                                                                            src="{{ asset('assets/videos/writing.mp4') }}"
                                                                            type="video/ogg">
                                                                    </video>
                                                                </div>
                                                                <div class="fs-3 fw-bold py-3">Ready?</div>
                                                                <p>Please confirm that you have understood the
                                                                    instructions above.</p>
                                                                <div class="col-12">
                                                                    <a href="{{ route('admin.writing.show', $mockTest->id) }}"
                                                                        class="btn btn-dark"><i
                                                                            class="bi bi-arrow-right"></i> Start
                                                                        Writing</a>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @else
                        <div class="col-12 mb-5">
                            <div class="card shadow p-5">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <h3 class="fw-bold">Reading</h3>
                                        <h4 class="py-4 text-danger">Not completed</h4>
                                        <p class="mb-0">Timing: 60 minutes</p>
                                    </div>
                                    <div class="col-md-6 text-end text-success fs-1">
                                    </div>
                                    <div class="col-12 mt-4">
                                        <div class="accordion" id="accordionExample">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed fw-bold" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                        aria-expanded="false" aria-controls="collapseTwo">
                                                        Test information.
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <div class="row">

                                                            <div class="col-12">
                                                                <video width="100%" height="400" controls>
                                                                    <source
                                                                        src="{{ asset('assets/videos/reading.mp4') }}"
                                                                        type="video/mp4">
                                                                    <source
                                                                        src="{{ asset('assets/videos/reading.mp4') }}"
                                                                        type="video/ogg">
                                                                </video>
                                                            </div>
                                                            <div class="fs-3 fw-bold py-3">Ready?</div>
                                                            <p>Please confirm that you have understood the instructions
                                                                above.</p>
                                                            <div class="col-12">
                                                                <a href="{{ route('admin.reading.show', $mockTest->id) }}"
                                                                    class="btn btn-dark"><i
                                                                        class="bi bi-arrow-right"></i> Start
                                                                    Reading</a>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mb-5">
                            <div class="card shadow p-5">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <h3 class="fw-bold">Writing</h3>
                                        <h4 class="py-4 text-danger">Not Completed</h4>
                                        <p class="mb-0">Timing: 60 minutes</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if ($testwriting_have)
                        <div class="col-12 mb-5">
                            <div class="card shadow p-5">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <h3 class="fw-bold">Writing</h3>
                                        <h4 class="py-4 text-success">Completed</h4>
                                        <p class="mb-0">Timing: 60 minutes</p>
                                    </div>
                                    <div class="col-md-6 text-end text-success fs-1">
                                        <i class="bi bi-check-circle-fill"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @else
                    <div class="col-12 mb-5">
                        <div class="card shadow p-5">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <h3 class="fw-bold">Listening</h3>
                                    <h4 class="py-4 text-danger">Not completed</h4>
                                    <p class="mb-0">Timing: 30 minutes</p>
                                </div>
                                <div class="col-md-6 text-end text-success fs-1">
                                </div>
                                <div class="col-12 mt-4">
                                    <div class="accordion" id="accordionExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed fw-bold" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                    aria-expanded="false" aria-controls="collapseTwo">
                                                    Test information.
                                                </button>
                                            </h2>
                                            <div id="collapseTwo" class="accordion-collapse collapse"
                                                data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div class="row">

                                                        <div class="col-12">
                                                            <video width="100%" height="400" controls>
                                                                <source
                                                                    src="{{ asset('assets/videos/listening.mp4') }}"
                                                                    type="video/mp4">
                                                                <source
                                                                    src="{{ asset('assets/videos/listening.mp4') }}"
                                                                    type="video/ogg">
                                                            </video>
                                                        </div>
                                                        <div class="fs-3 fw-bold py-3">Ready?</div>
                                                        <p>Please confirm that you have understood the instructions
                                                            above.</p>
                                                        <div class="col-12">
                                                            <a href="{{ route('admin.listening.show', $mockTest->id) }}"
                                                                class="btn btn-dark"><i class="bi bi-arrow-right"></i>
                                                                Start Listening</a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-5">
                        <div class="card shadow p-5">
                            <div class="row align-items-center">
                                <div class="col-md-12">
                                    <h3 class="fw-bold">Reading</h3>
                                    <h4 class="py-4 text-danger">Not completed</h4>
                                    <p class="mb-0">Timing: 60 minutes</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-5">
                        <div class="card shadow p-5">
                            <div class="row align-items-center">
                                <div class="col-md-12">
                                    <h3 class="fw-bold">Writing</h3>
                                    <h4 class="py-4 text-danger">Not completed</h4>
                                    <p class="mb-0">Timing: 60 minutes</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>
</body>

</html>
