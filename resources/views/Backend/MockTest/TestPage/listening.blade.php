<!-- {{ asset('assets/css/') }} -->
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>LEXICON - IELTS - Listening</title>

    <!-- favicon -->
    <link rel="shortcut icon" href="" type="image/x-icon">

    <!-- bootstrap css  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- bootstrap icons  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- google fonts  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="{{ asset('assets/css/free_mock_test.css') }}?version={{ time() }}">
    <link rel="stylesheet" href="{{ asset('assets/css/listening.css') }}">


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

    <audio id="testAudio" src="{{ asset('adminMock/2/audio.mp3') }}"></audio>

    <!-- Start Modal -->
    {{-- <div class="modal fade" id="startModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered">
            <div class="modal-content rounded-pill py-2">
                <div class="modal-body text-center">
                    <a href="#" id="fullscreenBtn2" class="btn btn-modal-start rounded-pill fw-bold"
                        data-bs-dismiss="modal">Click here to start the test</a>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="prev-next-div">
        <a class="up-btn" href="#" id="upBtn">
            <i class="fa-solid fa-square-caret-left"></i>
        </a>
        <a class="down-btn" href="#" id="downBtn">
            <i class="fa-solid fa-square-caret-right"></i>
        </a>
    </div>
    <form action="{{ route('admin.listening.store', $mockTest->id) }}" method="post" class="">
        @csrf

        <!-- top bar -->
        <section class="w-100" style="height: 10vh; display: flex; align-items: center; background-color: rgb(255, 221, 221); border-bottom: 1px solid black;">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <!-- Left: Logo -->
                    <div class="col-2 d-flex flex-column align-items-center text-center">
                        <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" style="height:40px;">

                        @php
                        $testUser = \App\Models\TestUser::find(session('test_user_id'));
                        @endphp

                        <p class="fw-bold mt-2 mb-0">{{ $testUser->name ?? 'Guest' }}</p>
                    </div>


                    <!-- Middle: Test name + Countdown -->

                    <div class="col-6 text-center ">
                        <span id="countdown" class="fw-bold fs-5">30 : 00</span>
                        <span class="d-md-inline d-none">remaining</span>
                    </div>

                    <!-- Right: Controls -->
                    <div class="col-4">

                        <div class="d-flex justify-content-end align-items-center">
                            <button type="submit" class="afterSubmitBtn btn btn-outline-dark fw-bold">Finish test</button>

                            <button class="btn btn-outline-dark ms-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
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
        <section class="p-3" style="height:80vh; overflow-y:auto;">
            <div class="tab-content" id="pills-tabContent">
                {{-- Dynamically generate tabs for each questionGroup --}}
                @php $firstGroup = true; @endphp
                @foreach ($mockTest->sections as $section)
                @if ($section->name === 'Listening')
                @foreach ($section->questionGroups as $index => $group)
                <div class="tab-pane fade {{ $firstGroup ? 'show active' : '' }}" id="part{{ $index + 1 }}" role="tabpanel">
                    <h3 class="mb-4">Part {{ $index + 1 }}</h3>

                    <div class="card mb-4">
                        <div class="card-header">
                            <strong>{{ $group->title }}</strong>
                        </div>
                        <div class="card-body">

                            @php
                            // Separate table questions by table_no
                            $tables = [];
                            $nonTableQuestions = [];
                            foreach ($group->questions as $q) {
                            if (isset($q->meta_data['table_no'], $q->meta_data['row'], $q->meta_data['col'])) {
                            $tables[$q->meta_data['table_no']][$q->meta_data['row']][$q->meta_data['col']] = $q;
                            } else {
                            $nonTableQuestions[] = $q;
                            }
                            }
                            ksort($tables);
                            @endphp

                            {{-- Render all questions in order --}}
                            @foreach ($group->questions as $question)
                            @if ($question->type !== 'table' && empty($question->meta_data['table_no']))
                            <div class="mb-3 question" id="q{{ $question->question_no }}">
                                @if ($question->type === 'mcq')
                                <p class="fw-bold question-text">{{ $question->question_no }}: {{ $question->text }}</p>

                                @if (!empty($question->meta_data['image']))
                                <div class="text-left mb-3">
                                    <img src="{{ $question->meta_data['image'] }}" alt="Question Image" class="img-fluid" style="max-height: 300px;">
                                </div>
                                @endif

                                @foreach ($question->options as $option)
                                <div class="form-check">
                                    <input type="radio" class="form-check-input question-input" name="answers[{{ $question->id }}]" value="{{ $option->id }}" id="q{{ $question->id }}_option{{ $loop->index }}">
                                    <label class="form-check-label" for="q{{ $question->id }}_option{{ $loop->index }}">
                                        {{ $option->text }}
                                    </label>
                                </div>
                                @endforeach

                                @elseif ($question->type === 'fill_blank')
                                <p class="question-inline">
                                    {!! str_replace(
                                    '___',
                                    '<input type="text" class="form-control d-inline mx-1 question-input" name="answers[' . $question->id . ']" placeholder="' . $question->question_no . '">',
                                    $question->text
                                    ) !!}
                                </p>

                                @elseif ($question->type === 'multi_select')
                                <select name="answers[{{ $question->id }}][]" class="form-select w-50 question-input" multiple>
                                    @foreach ($question->options as $option)
                                    <option value="{{ $option->id }}">{{ $option->text }}</option>
                                    @endforeach
                                </select>

                                @elseif ($question->type === 'select')
                                <p class="question-text">Q{{ $question->question_no }}: {!! $question->text !!}</p>
                                <select name="answers[{{ $question->id }}]" class="form-select w-50 question-input">
                                    <option value="">-- Choose --</option>
                                    @foreach ($question->meta_data['options'] ?? [] as $option)
                                    <option value="{{ $option }}">{{ $option }}</option>
                                    @endforeach
                                </select>

                                @elseif ($question->type === 'checkbox')
                                <p class="question-text">Q{{ $question->question_no }}: {!! $question->text !!}</p>
                                @foreach ($question->options as $option)
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input question-input" name="answers[{{ $question->id }}][]" value="{{ $option->id }}" id="q{{ $question->id }}_chk{{ $loop->index }}">
                                    <label class="form-check-label" for="q{{ $question->id }}_chk{{ $loop->index }}">
                                        {{ $option->text }}
                                    </label>
                                </div>
                                @endforeach

                                @elseif ($question->type === 'true_false')
                                <div class="d-flex gap-3">
                                    @foreach ($question->meta_data['options'] ?? [] as $option)
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input question-input" name="answers[{{ $question->id }}]" value="{{ $option }}" id="q{{ $question->id }}_tf{{ $loop->index }}">
                                        <label class="form-check-label" for="q{{ $question->id }}_tf{{ $loop->index }}">
                                            {{ $option }}
                                        </label>
                                    </div>
                                    @endforeach
                                </div>

                                @elseif ($question->type === 'static')
                                <p class="question-static">{!! $question->text !!}</p>
                                @if (!empty($question->meta_data['image']))
                                <div class="text-left my-3">
                                    <img src="{{ asset($question->meta_data['image']) }}" alt="Diagram" class="img-fluid question-image" style="max-height: 300px;">
                                </div>
                                @endif
                                @endif
                            </div>

                            @else
                            {{-- Render table in-place --}}
                            @php
                            $tableNo = $question->meta_data['table_no'];
                            if (isset($tables[$tableNo])) {
                            $rows = $tables[$tableNo];
                            unset($tables[$tableNo]);
                            @endphp

                            <table class="table table-bordered text-left align-middle mb-4">
                                @foreach ($rows as $row)
                                <tr>
                                    @for ($col = 1; $col <= max(array_keys($row)); $col++) <td>
                                        @if (isset($row[$col]))
                                        @php $q = $row[$col]; @endphp

                                        {{-- Static content --}}
                                        @if ($q->type === 'static')
                                        {{ $q->text }}
                                        @endif

                                        {{-- Fill blank --}}
                                        @if ($q->type === 'fill_blank')
                                        {!! str_replace(
                                        '___',
                                        '<input type="text" class="form-control d-inline mx-1 question-input" name="answers['.$q->id.']" placeholder="'.$q->question_no.'">',
                                        $q->text
                                        ) !!}
                                        @endif

                                        {{-- MCQ --}}
                                        @if ($q->type === 'mcq')
                                        @foreach ($q->options as $option)
                                        <div>
                                            <input type="radio" class="question-input" name="answers[{{ $q->id }}]" value="{{ $option->id }}">
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

                            @php } @endphp

                            @endif
                            @endforeach

                        </div>
                    </div>
                </div>
                @php $firstGroup = false; @endphp
                @endforeach
                @endif
                @endforeach
            </div>
        </section>


        <!-- bottom bar -->
        <section class="bottom-bar fixed-bottom bg-light py-2 border-top">
            <div class="container">
                <div class="row">
                    <div class="col-12">

                        <!-- PART TABS -->
                        <ul class="nav nav-pills mb-1 d-flex w-100" id="pills-tab" role="tablist">
                            @php $firstTab = true; @endphp
                            @foreach ($mockTest->sections as $section)
                            @if ($section->name === 'Listening')
                            @foreach ($section->questionGroups as $index => $group)
                            <li class="nav-item flex-fill text-center me-1 mb-1">
                                <button type="button" class="nav-link {{ $firstTab ? 'active' : '' }}" data-bs-toggle="pill" data-bs-target="#part{{ $index + 1 }}">
                                    Part {{ $index + 1 }}
                                </button>
                            </li>
                            @php $firstTab = false; @endphp
                            @endforeach
                            @endif
                            @endforeach
                        </ul>

                        <!-- QUESTION BUTTONS FOR ACTIVE PART -->
                        <div id="question-buttons-container" class="d-flex flex-wrap justify-content-center">
                            @foreach ($mockTest->sections as $section)
                            @if ($section->name === 'Listening')
                            @foreach ($section->questionGroups as $index => $group)
                            <div class="question-nav mb-1" data-part="{{ $index + 1 }}" style="{{ $index !== 0 ? 'display:none;' : 'flex;' }}">
                                @foreach ($group->questions as $question)
                                @if($question->type !== 'static')
                                <button type="button" class="btn btn-outline-secondary btn-sm me-1 mb-1 question-btn" data-target="q{{ $question->question_no }}">
                                    {{ $question->question_no }}
                                </button>
                                @endif
                                @endforeach
                            </div>
                            @endforeach
                            @endif
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </section>





    </form>

    {{-- Script for update time --}}
    <script>
        let totalSeconds = (30 * 60) + 0;
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

        // To start the time counter
        startBtn.addEventListener('click', function(e) {
            e.preventDefault();

            if (!timerStarted) {
                timerStarted = true;
                updateCountdown(); // Call immediately
                timer = setInterval(updateCountdown, 1000);
            }
        });

    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const partTabs = document.querySelectorAll('#pills-tab .nav-link');
            const questionNavs = document.querySelectorAll('.question-nav');
            const questionButtons = document.querySelectorAll('.question-btn');
            const inputs = document.querySelectorAll('.question-input');

            // Show only the active part's question buttons
            partTabs.forEach(tab => {
                tab.addEventListener('shown.bs.tab', function(e) {
                    const targetPart = e.target.getAttribute('data-bs-target').replace('#part', '');
                    questionNavs.forEach(nav => {
                        nav.style.display = (nav.dataset.part === targetPart) ? 'flex' : 'none';
                    });
                });
            });

            // Scroll to question
            questionButtons.forEach(btn => {
                btn.addEventListener('click', function() {
                    const targetId = this.dataset.target;
                    const targetElem = document.getElementById(targetId);
                    if (targetElem) {
                        targetElem.scrollIntoView({
                            behavior: 'smooth'
                            , block: 'center'
                        });
                        targetElem.classList.add('highlight-question');
                        setTimeout(() => targetElem.classList.remove('highlight-question'), 1500);
                    }
                });
            });

            // Highlight question button when answered
            inputs.forEach(input => {
                input.addEventListener('change', function() {
                    const questionDiv = this.closest('.question');
                    if (!questionDiv) return;
                    const qId = questionDiv.id;
                    const btn = document.querySelector(`.question-btn[data-target="${qId}"]`);
                    if (btn) {
                        btn.classList.remove('btn-outline-secondary');
                        btn.classList.add('btn-success');
                    }

                    // MCQ circle highlight
                    if (input.type === 'radio') {
                        const name = input.name;
                        const radios = document.querySelectorAll(`input[name="${name}"]`);
                        radios.forEach(r => {
                            if (r.checked) {
                                r.parentElement.classList.add('selected-option');
                            } else {
                                r.parentElement.classList.remove('selected-option');
                            }
                        });
                    }
                });
            });

        });

    </script>




    <style>
        /* Optional highlight animation */
        .highlight-question {
            border: 2px solid #0d6efd;
            padding: 2px;
            transition: all 0.5s ease;
        }

    </style>


    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="{{ asset('assets/js/fullscreen.js') }}?version={{ time() }}"></script>
    <script src="{{ asset('assets/js/start_modal.js') }}?version={{ time() }}"></script>
    <script src="{{ asset('assets/js/highlight.js') }}?version={{ time() }}"></script>


</body>

</html>
