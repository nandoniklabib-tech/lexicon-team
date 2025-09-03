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
    <link rel="stylesheet" href="{{ asset('assets/css/writing.css') }}?version={{ time() }}">


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
                    <div class="col-2 d-flex flex-column align-items-center text-center">
                        <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" style="height:40px;">

                        @php
                        $testUser = \App\Models\TestUser::find(session('test_user_id'));
                        @endphp

                        <p class="fw-bold mt-2 mb-0">{{ $testUser->name ?? 'Guest' }}</p>
                    </div>
                    <!-- Middle: Test name + Countdown -->

                    <div class="col-6 text-center ">
                        <span id="countdown" class="fw-bold fs-5">60 : 00</span>
                        <span class="d-md-inline d-none">remaining</span>
                    </div>
                    <!-- Right: Controls -->
                    <div class="col-4">
                            <div class="text-end">
                                <button type="submit" class=" btn btn-outline-dark fw-bold">Finish test</button>
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

        <!-- Question content -->
        <section style="width: 100%; height: 80vh;">
            <div class="container-fluid h-100">
                <div class="row h-100">
                    <div class="col-12 h-100 d-flex flex-column">

                        <!-- Tabs content -->
                        <div class="tab-content flex-grow-1 h-100" id="pills-tabContent">
                            @php $firstGroup = true; @endphp
                            @foreach($mockTest->sections->firstWhere('name', 'Writing')->questionGroups as $index => $group)
                                <div class="tab-pane fade {{ $firstGroup ? 'show active' : '' }}" 
                                    id="part{{ $index + 1 }}" 
                                    role="tabpanel">
                                    
                                    <div class="split-container">
                                        <!-- Left Column: Writing Passage -->
                                        <div class="split left-pane" >
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
                                        <div class="divider"></div>
                                        <!-- Right Column: Textarea -->
                                        <div class="split right-pane">
                                            <h3 class="mb-4">Your Answer</h3>
                                            <div class="answer-box">
                                                <textarea class="form-control expandable-textarea answer-textarea" 
                                                        name="answers[{{ $group->id }}]" 
                                                        placeholder="Type your answer here..."></textarea>
                                                <div class="word-count"
                                                        style="height: 560px;overflow:hidden; resize:auto">
                                                    Words: <span id="wordCount{{ $group->id }}">0</span>
                                                </div>
                                            </div>
                                        </div>

                                        
                                    </div>
                                </div>
                                @php $firstGroup = false; @endphp
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- bottom bar -->
        <section class="bottom-bar fixed-bottom bg-light py-2 border-top">
            <div class="container-fluid">
                <div class="d-flex align-items-center py-3 justify-content-center w-100">
                    @foreach ($mockTest->sections as $section)
                        @if ($section->name === 'Writing')
                            @foreach ($section->questionGroups as $index => $group)
                                <div class="part-nav p-2 text-center"
                                    data-part="{{ $index + 1 }}">
                                    <span class="fw-bold part-label">
                                        Part {{ $index + 1 }}
                                    </span>
                                </div>
                            @endforeach
                        @endif
                    @endforeach
                </div>
            </div>
        </section>


    </form>

    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
        const partNavs = document.querySelectorAll('.part-nav');
        const tabPanes = document.querySelectorAll('.tab-pane');

        // Show first part by default
        if (partNavs.length) {
            partNavs[0].classList.add('active');
            tabPanes[0].classList.add('show', 'active');
        }

        // Part switching
        partNavs.forEach(nav => {
            nav.addEventListener('click', function() {
                const part = nav.dataset.part;

                // hide all tab panes
                tabPanes.forEach(pane => pane.classList.remove('show', 'active'));

                // show selected tab
                document.getElementById(`part${part}`).classList.add('show', 'active');

                // reset all navs
                partNavs.forEach(n => n.classList.remove('active'));

                // activate current
                nav.classList.add('active');
            });
        });
    });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.split-container').forEach(container => {
        const divider = container.querySelector('.divider');
        const leftPane = container.querySelector('.left-pane');
        const rightPane = container.querySelector('.right-pane');
        let isResizing = false;

        divider.addEventListener('mousedown', function () {
            isResizing = true;
            document.body.style.cursor = 'col-resize';
        });

        document.addEventListener('mousemove', function (e) {
            if (!isResizing) return;

            const containerOffsetLeft = container.offsetLeft;
            const pointerRelativeXpos = e.clientX - containerOffsetLeft;

            const containerWidth = container.offsetWidth;
            let leftWidth = (pointerRelativeXpos / containerWidth) * 100;

            // clamp between 20% and 80%
            if (leftWidth < 20) leftWidth = 20;
            if (leftWidth > 80) leftWidth = 80;

            leftPane.style.width = leftWidth + '%';
            rightPane.style.width = (100 - leftWidth) + '%';
        });

        document.addEventListener('mouseup', function () {
            if (isResizing) {
                isResizing = false;
                document.body.style.cursor = 'default';
            }
        });
    });
});

document.addEventListener("DOMContentLoaded", () => {
    document.querySelectorAll(".answer-textarea").forEach(textarea => {
        const groupId = textarea.getAttribute("name").match(/\d+/)[0];
        const counter = document.getElementById(`wordCount${groupId}`);

        textarea.addEventListener("input", () => {
            const text = textarea.value.trim();
            const words = text.length === 0 ? 0 : text.split(/\s+/).length;
            counter.textContent = words;
        });
    });
});



    </script>
    

</body>
</html>
