<!-- {{ asset('assets/css/') }} -->
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>LEXICON - IELTS - Reading</title>

    <!-- favicon -->
    <link rel="shortcut icon" href="" type="image/x-icon">

    <!-- bootstrap css  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- bootstrap icons  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- google fonts  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="{{ asset('assets/css/free_mock_test.css') }}?version={{ time() }}">

</head>

<body class="">

    <!-- offcavas for note start  -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasRightLabel">Notes</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div id="notesList" style="margin-top: 20px;"></div>
        </div>
    </div>
    <!-- offcavas for note end  -->

    <div id="contextMenu">
        <button onclick="highlightSelectedText()">Highlight</button>
        <button onclick="clearHighlight()">Clear</button>
        <button onclick="clearAllHighlights()">Clear All</button>
        <button onclick="takeNote()" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight">Take Note</button>
    </div>

    <!-- Start Modal -->
    <div class="modal fade" id="startModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered">
            <div class="modal-content rounded-pill py-2">
                <div class="modal-body text-center">
                    <a href="#" id="fullscreenBtn2" class="btn btn-modal-start rounded-pill fw-bold"
                        data-bs-dismiss="modal">Click here to start the test</a>
                </div>
            </div>
        </div>
    </div>

    <div class="prev-next-div">
        <a class="up-btn" href="#" id="upBtn">
            <!-- <i class="fa-regular fa-square-caret-left-fill"></i> -->
            <i class="fa-solid fa-square-caret-left"></i>
        </a>
        <a class="down-btn" href="#" id="downBtn">
            <!-- <i class="fa-regular fa-square-caret-right"></i> -->
            <i class="fa-solid fa-square-caret-right"></i>
        </a>
    </div>

    <form class="afterSubmitForm" action="{{ url('admin-mocktest-reading-exam-store') }}" method="post"> @csrf

        <!-- top bar -->
        <section class=""
            style="width: 100%; height: 10vh; display: flex; align-items: center; background-color: rgb(255, 221, 221); border-bottom: 1px solid black;">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-5">
                        <span class="fw-bold d-md-block d-none">{{ session('mocktest.name') }}</span>
                        <!-- 30 minuties remaining -->
                        <span id="countdown" class="fw-bold">60 : 00</span>
                        <span class="d-md-inline d-none">remaining</span>
                    </div>
                    <div class="col-7">
                        <div class="d-flex justify-content-end align-items-center">
                            <button type="submit" class="afterSubmitBtn btn btn-outline-dark fw-bold">Finish
                                test</button>
                            <button class="btn btn-outline-dark ms-2" type="button" data-bs-toggle="offcanvas"
                                data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                <!-- <i class="bi bi-pencil-square"></i> -->
                                <i class="bi bi-vector-pen"></i>
                            </button>
                            <a class="text-dark" href="#" id="fullscreenBtn" title="Toggle Fullscreen">
                                <i id="fullscreenIcon" class="fa-solid fa-maximize fs-3 ps-3"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- question content  -->
        <section style="width: 100%; height: 80vh; display: flex; align-items: center;">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="tab-content" id="pills-tabContent">
                            <!-- PART 1 CONTENT -->
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                aria-labelledby="pills-home-tab" tabindex="0">
                                <div class="row justify-content-center">
                                    <div class="col-md-12">
                                        <div class="px-md-5 px-3 pt-3 part-bottom" style="height:70vh;">
                                            <!-- QUESTIONS START  -->
                                            <div class="row">
                                                <!-- LEFT SIDE -->
                                                <div class="col-6"
                                                    style="height:80vh;overflow:auto; border-right:.5px solid gray;">
                                                    <div class="tab-content">
                                                        @php $firstGroup = true; @endphp
                                                        @foreach ($mockTest->sections as $section)
                                                            @if ($section->name === 'Reading')
                                                                @foreach ($section->questionGroups as $index => $group)
                                                                    <div class="tab-pane fade {{ $firstGroup ? 'show active' : '' }}"
                                                                        id="left-part{{ $index + 1 }}"
                                                                        role="tabpanel">
                                                                        <h3 class="mb-4">Part {{ $index + 1 }}
                                                                        </h3>
                                                                        {!! $group->description !!}
                                                                    </div>
                                                                    @php $firstGroup = false; @endphp
                                                                @endforeach
                                                            @endif
                                                        @endforeach
                                                    </div>

                                                </div>

                                                <!-- RIGHT SIDE -->
                                                <div class="col-6 p-3" style="height:80vh; overflow-y:auto;">
                                                    <div class="tab-content" id="pills-tabContent">
                                                        {{-- Dynamically generate tabs for each questionGroup --}}
                                                        @php $firstGroup = true; @endphp
                                                        @foreach ($mockTest->sections as $section)
                                                            @if ($section->name === 'Reading')
                                                                @foreach ($section->questionGroups as $index => $group)
                                                                    <div class="tab-pane fade {{ $firstGroup ? 'show active' : '' }}"
                                                                        id="part{{ $index + 1 }}" role="tabpanel">
                                                                        <h3 class="mb-4">Part {{ $index + 1 }}
                                                                        </h3>

                                                                        <div class="card mb-4">
                                                                            <div class="card-header">
                                                                                <strong>{{ $group->title }}</strong>
                                                                            </div>
                                                                            <div class="card-body">

                                                                                {{-- TABLE rendering (row/col meta_data type="table") --}}
                                                                                @php
                                                                                    $rows = [];
                                                                                    foreach ($group->questions as $q) {
                                                                                        if (
                                                                                            isset(
                                                                                                $q->meta_data['row'],
                                                                                                $q->meta_data['col'],
                                                                                            )
                                                                                        ) {
                                                                                            $rows[$q->meta_data['row']][
                                                                                                $q->meta_data['col']
                                                                                            ] = $q;
                                                                                        }
                                                                                    }
                                                                                    ksort($rows);
                                                                                @endphp

                                                                                @if (!empty($rows))
                                                                                    <table
                                                                                        class="table table-bordered text-left align-middle">
                                                                                        @foreach ($rows as $row)
                                                                                            <tr>
                                                                                                @for ($col = 1; $col <= max(array_keys($row)); $col++)
                                                                                                    <td>
                                                                                                        @if (isset($row[$col]))
                                                                                                            @php $question = $row[$col]; @endphp

                                                                                                            {{-- static inside table --}}
                                                                                                            @if ($question->type === 'others')
                                                                                                                {{ $question->text }}

                                                                                                                {{-- fill in blank inside table --}}
                                                                                                            @elseif($question->type === 'fill_blank')
                                                                                                                <input
                                                                                                                    type="text"
                                                                                                                    class="form-control"
                                                                                                                    name="question_{{ $question->id }}"
                                                                                                                    placeholder="Answer">
                                                                                                            @elseif($question->type === 'mcq')
                                                                                                                @foreach ($question->options as $option)
                                                                                                                    <div>
                                                                                                                        <input
                                                                                                                            type="radio"
                                                                                                                            name="question_{{ $question->id }}"
                                                                                                                            value="{{ $option->id }}">
                                                                                                                        {{ $option->text }}
                                                                                                                    </div>
                                                                                                                @endforeach
                                                                                                            @endif
                                                                                                        @endif
                                                                                                    </td>
                                                                                                @endfor
                                                                                            </tr>
                                                                                        @endforeach
                                                                                    </table>
                                                                                @endif

                                                                                {{-- Render all other question types --}}
                                                                                @foreach ($group->questions as $question)
                                                                                    <div class="mb-3">

                                                                                        {{-- MCQ --}}
                                                                                        @if ($question->type === 'mcq')
                                                                                            <p class="fw-bold">
                                                                                                Q{{ $question->question_no }}
                                                                                                :
                                                                                                {{ $question->text }}
                                                                                            </p>
                                                                                            @if (!empty($question->meta_data['image']))
                                                                                                <div
                                                                                                    class="text-left mb-3">
                                                                                                    <img src="{{ $question->meta_data['image'] }}"
                                                                                                        alt="Question Image"
                                                                                                        class="img-fluid"
                                                                                                        style="max-height: 300px;">
                                                                                                </div>
                                                                                            @endif
                                                                                            @foreach ($question->options as $option)
                                                                                                <div>
                                                                                                    <input
                                                                                                        type="radio"
                                                                                                        name="question_{{ $question->id }}"
                                                                                                        value="{{ $option->id }}">
                                                                                                    {{ $option->text }}
                                                                                                </div>
                                                                                            @endforeach

                                                                                            {{-- Fill in The Blanks --}}
                                                                                        @elseif($question->type === 'fill_blank' && empty($question->meta_data['row']))
                                                                                            <p class="">
                                                                                                Q{{ $question->question_no }}
                                                                                                :
                                                                                                {!! $question->text !!}
                                                                                            </p>
                                                                                            <input type="hidden"
                                                                                                class="form-control w-50"
                                                                                                name="question_{{ $question->id }}"
                                                                                                placeholder="Answer here">

                                                                                            {{-- Multi Select --}}
                                                                                        @elseif($question->type === 'multi_select')
                                                                                            <select
                                                                                                name="question_{{ $question->id }}[]"
                                                                                                class="form-select w-50"
                                                                                                multiple>
                                                                                                @foreach ($question->options as $option)
                                                                                                    <option
                                                                                                        value="{{ $option->id }}">
                                                                                                        {{ $option->text }}
                                                                                                    </option>
                                                                                                @endforeach
                                                                                            </select>

                                                                                            {{-- Select --}}
                                                                                        @elseif($question->type === 'select')
                                                                                            Q{{ $question->question_no }}
                                                                                            :
                                                                                            <select
                                                                                                name="question_{{ $question->id }}"
                                                                                                class="form-select"
                                                                                                style="width: 60px; height:50px; display: inline">
                                                                                                <option value="">
                                                                                                    -- Choose --
                                                                                                </option>
                                                                                                @foreach ($question->meta_data['options'] ?? [] as $option)
                                                                                                    <option
                                                                                                        value="{{ $option }}">
                                                                                                        {{ $option }}
                                                                                                    </option>
                                                                                                @endforeach
                                                                                            </select>
                                                                                            {!! $question->text !!}

                                                                                            {{-- CheckBox --}}
                                                                                        @elseif($question->type === 'checkbox')
                                                                                            @foreach ($question->options as $option)
                                                                                                <div>
                                                                                                    <input
                                                                                                        type="checkbox"
                                                                                                        name="question_{{ $question->id }}[]"
                                                                                                        value="{{ $option->id }}">
                                                                                                    {{ $option->text }}
                                                                                                </div>
                                                                                            @endforeach

                                                                                            {{-- True false --}}
                                                                                        @elseif($question->type === 'true_false')
                                                                                            Q{{ $question->question_no }}
                                                                                            :
                                                                                            <select class="form-select"
                                                                                                style="width: 100px; height:50px; display: inline">
                                                                                                <option>Select</option>
                                                                                                @foreach ($question->meta_data['options'] ?? [] as $option)
                                                                                                    <option
                                                                                                        type="radio"
                                                                                                        value="{{ $option }}">
                                                                                                        {{ $option }}
                                                                                                @endforeach
                                                                                            </select>
                                                                                            {!! $question->text !!}

                                                                                            {{-- static Text --}}
                                                                                        @elseif($question->type === 'static')
                                                                                            {!! $question->text !!}
                                                                                            @if (!empty($question->meta_data['image']))
                                                                                                <div
                                                                                                    class="text-left my-3">
                                                                                                    <img src="{{ $question->meta_data['image'] }}"
                                                                                                        alt="Diagram"
                                                                                                        class="img-fluid"
                                                                                                        style="max-height: 300px;">
                                                                                                </div>
                                                                                            @endif
                                                                                        @endif
                                                                                    </div>
                                                                                @endforeach
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    @php $firstGroup = false; @endphp
                                                                @endforeach
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- QUESTIONS END  -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- bottom bar -->
        <section class="bottom-bar">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- BOTTOM BUTTON -->
                        <ul class="nav nav-pills justify-content-around" id="pills-tab" role="tablist">
                            @php $firstTab = true; @endphp
                            @foreach ($mockTest->sections as $section)
                                @if ($section->name === 'Reading')
                                    @foreach ($section->questionGroups as $index => $group)
                                        <li class="nav-item">
                                            <button type="button" class="nav-link {{ $firstTab ? 'active' : '' }}"
                                                data-bs-toggle="pill" data-bs-target="#part{{ $index + 1 }}">
                                                Part {{ $index + 1 }}
                                            </button>
                                        </li>
                                        @php $firstTab = false; @endphp
                                    @endforeach
                                @endif
                            @endforeach
                        </ul>

                    </div>
                </div>
            </div>
        </section>

    </form>

    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <script src="{{ asset('assets/js/button_active.js') }}?version={{ time() }}"></script>
    <script src="{{ asset('assets/js/answer_tracking.js') }}?version={{ time() }}"></script>
    <script src="{{ asset('assets/js/fullscreen.js') }}?version={{ time() }}"></script>
    <script src="{{ asset('assets/js/start_modal.js') }}?version={{ time() }}"></script>
    <script>
        let totalSeconds = (60 * 60) + 0;
        const countdownElement = document.getElementById('countdown');
        const startBtn = document.getElementById('fullscreenBtn2');
        let timerStarted = false;
        let timer;

        function updateCountdown() {
            const minutes = Math.floor(totalSeconds / 60);
            const seconds = totalSeconds % 60;

            const formattedTime = `${String(minutes).padStart(2, '0')} : ${String(seconds).padStart(2, '0')}`;
            countdownElement.textContent = formattedTime;

            if (totalSeconds > 0) {
                totalSeconds--;
            } else {
                clearInterval(timer);
                countdownElement.textContent = "Time's up!";
            }
        }

        startBtn.addEventListener('click', function(e) {
            e.preventDefault();

            if (!timerStarted) {
                timerStarted = true;
                updateCountdown(); // Call immediately
                timer = setInterval(updateCountdown, 1000);
            }
        });
    </script>
    <script src="{{ asset('assets/js/play_audio.js') }}?version={{ time() }}"></script>
    <script src="{{ asset('assets/js/up_down.js') }}?version={{ time() }}"></script>
    <script src="{{ asset('assets/js/highlight.js') }}?version={{ time() }}"></script>

    <!-- after submit start -->
    <script>
        const form = document.querySelector('.afterSubmitForm');
        const btn = document.querySelector('.afterSubmitBtn');
        form.addEventListener('submit', function() {
            btn.disabled = true;
            btn.innerHTML =
                'Loading... <span class="spinner-border spinner-border-sm ms-2" role="status" aria-hidden="true"></span>';
        });
    </script>
    <script>
        const form2 = document.querySelector('.afterSubmitForm2');
        const btn2 = document.querySelector('.afterSubmitBtn2');
        form2.addEventListener('submit', function() {
            btn2.disabled = true;
            btn2.innerHTML =
                'Loading... <span class="spinner-border spinner-border-sm ms-2" role="status" aria-hidden="true"></span>';
        });
    </script>
    <script>
        const form3 = document.querySelector('.afterSubmitForm3');
        const btn3 = document.querySelector('.afterSubmitBtn3');
        form3.addEventListener('submit', function() {
            btn3.disabled = true;
            btn3.innerHTML =
                'Loading... <span class="spinner-border spinner-border-sm ms-2" role="status" aria-hidden="true"></span>';
        });
    </script>
    <!-- after submit end -->

</body>

</html>
