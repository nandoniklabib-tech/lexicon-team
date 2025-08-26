<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>LEXICON - IELTS - Writing</title>

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

<body>

    <!-- Offcanvas for notes -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasRightLabel">Notes</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div id="notesList" style="margin-top: 20px;"></div>
        </div>
    </div>

    <div id="contextMenu">
        <button onclick="highlightSelectedText()">Highlight</button>
        <button onclick="clearHighlight()">Clear</button>
        <button onclick="clearAllHighlights()">Clear All</button>
        <button onclick="takeNote()" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight">Take Note</button>
    </div>

    <!-- Prev/Next buttons -->
    <div class="prev-next-div">
        <a class="up-btn" href="#" id="upBtn"><i class="fa-solid fa-square-caret-left"></i></a>
        <a class="down-btn" href="#" id="downBtn"><i class="fa-solid fa-square-caret-right"></i></a>
    </div>

    <form action="{{ route('admin.writing.store', $mockTest->id) }}" method="post" class="writingForm">
        @csrf

        <!-- Top bar -->
        <section class="reading-top-bar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-5">
                        <span class="fw-bold d-md-block d-none">{{ session('mocktest.name') }}</span>
                        <span id="countdown" class="fw-bold">60 : 00</span>
                        <span class="d-md-inline d-none">remaining</span>
                    </div>
                    <div class="col-7">
                        <div class="d-flex justify-content-end align-items-center">
                            <button type="submit" class="afterSubmitBtn btn btn-outline-dark fw-bold">Finish
                                test</button>
                            <button class="btn btn-outline-dark ms-2" type="button" data-bs-toggle="offcanvas"
                                data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
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

        <!-- Question content -->
        <section style="width: 100%; height: 80vh;">
            <div class="container-fluid h-100">
                <div class="row h-100">
                    <div class="col-12 h-100 d-flex flex-column">

                        <!-- Tabs nav -->
                        

                        <!-- Tabs content -->
                        <div class="tab-content flex-grow-1 h-100" id="partTabsContent">
                            @foreach($mockTest->sections->firstWhere('name', 'Writing')->questionGroups as $index => $group)
                                <div class="tab-pane fade {{ $index === 0 ? 'show active' : '' }}" 
                                    id="content-{{ $index+1 }}" 
                                    role="tabpanel">
                                    
                                    <div class="row h-100">
                                        <!-- Left Column: Writing Passage -->
                                        <div class="col-md-6 border-end p-3" style="height: 100%; overflow-y: auto;">
                                            <h3 class="mb-4">Writing Task {{ $index+1 }}</h3>
                                            @php
                                                $passages = \App\Models\WritingPassage::where('question_group_id', $group->id)->get();
                                            @endphp
                                            @foreach($passages as $passage)
                                                <div class="mb-4">
                                                    @if(!empty($passage->title))
                                                        <h4>{{ $passage->title }}</h4>
                                                    @endif
                                                    <p>{!! $passage->content !!}</p>
                                                </div>
                                            @endforeach
                                        </div>

                                        <!-- Right Column: Textarea -->
                                        <div class="col-md-6 p-3" style="height: 100%;">
                                            <h3 class="mb-4">Your Answer</h3>
                                            <textarea class="form-control expandable-textarea" name="answers[{{ $group->id }}]" placeholder="Type your answer here..." style="resize: auto; overflow:hidden; height:560px"></textarea>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <ul class="nav nav-pills mb-3" id="partTabs" role="tablist">
                            @foreach($mockTest->sections->firstWhere('name', 'Writing')->questionGroups as $index => $group)
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link {{ $index === 0 ? 'active' : '' }}" 
                                            id="tab-{{ $index+1 }}" 
                                            data-bs-toggle="pill" 
                                            data-bs-target="#content-{{ $index+1 }}" 
                                            type="button" role="tab">
                                        Part {{ $index+1 }}
                                    </button>
                                </li>
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
    <script src="{{ asset('assets/js/play_audio.js') }}?version={{ time() }}"></script>
    <script src="{{ asset('assets/js/up_down.js') }}?version={{ time() }}"></script>
    <script src="{{ asset('assets/js/highlight.js') }}?version={{ time() }}"></script>

    <!-- Countdown Timer -->
    <script>
        let totalSeconds = 60 * 60;
        const countdownElement = document.getElementById('countdown');

        function updateCountdown() {
            const minutes = Math.floor(totalSeconds / 60);
            const seconds = totalSeconds % 60;

            countdownElement.textContent = `${String(minutes).padStart(2,'0')} : ${String(seconds).padStart(2,'0')}`;

            if(totalSeconds > 0){
                totalSeconds--;
            } else {
                clearInterval(timer);
                countdownElement.textContent = "Time's up!";
            }
        }

        updateCountdown(); // initial call
        let timer = setInterval(updateCountdown, 1000);
    </script>

    <!-- Disable button after submit -->
    <script>
        document.querySelectorAll('form.writingForm').forEach(form => {
            form.addEventListener('submit', function(){
                const btn = this.querySelector('button[type="submit"]');
                btn.disabled = true;
                btn.innerHTML = 'Loading... <span class="spinner-border spinner-border-sm ms-2" role="status" aria-hidden="true"></span>';
            });
        });
    </script>
    <script>
    document.addEventListener('input', function (event) {
        if (event.target.classList.contains('expandable-textarea')) {
            event.target.style.height = 'auto'; // reset height
            event.target.style.height = event.target.scrollHeight + 'px'; // set to scroll height
        }
    });
</script>

</body>
</html>
