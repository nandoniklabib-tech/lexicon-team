<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IELTS Result Page</title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/result.css') }}">
</head>

<body>
    <div class="container py-5">
        <div class="score-card">
            <!-- Profile -->
            <div class="mb-3">
                <img src="{{ asset('images/mockTestImage/user.png') }}" class="rounded-circle result-profile-img" alt="profile" >
                <h5 class="mt-2">{{ $user->name }}</h5>
            </div>

            <!-- Results -->
            <h3>Your Results:</h3>
            <div class="row mt-4">
                <!-- Listening -->
                <div class="col-md-6">
                    <h5>Listening</h5>
                    <div class="d-flex justify-content-around">
                        <!-- Correct Answer Circle -->
                        <div class="progress-circle">
                            <svg width="120" height="120">
                                <circle class="bg" cx="60" cy="60" r="55"></circle>
                                <circle class="progress" id="listeningCorrectCircle" cx="60" cy="60" r="55"></circle>
                            </svg>
                            <div class="progress-text">
                                <b id="listeningCorrectScore">0</b>
                                <small id="listeningCorrectText">0/40</small>
                            </div>
                        </div>

                        <!-- Band Score Circle -->
                        <div class="progress-circle">
                            <svg width="120" height="120">
                                <circle class="bg" cx="60" cy="60" r="55"></circle>
                                <circle class="progress" id="listeningBandCircle" cx="60" cy="60" r="55"></circle>
                            </svg>
                            <div class="progress-text">
                                <b id="listeningBandScore">0</b>
                                <small>Band</small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Reading -->
                <div class="col-md-6">
                    <h5>Reading</h5>
                    <div class="d-flex justify-content-around">
                        <!-- Correct Answer Circle -->
                        <div class="progress-circle">
                            <svg width="120" height="120">
                                <circle class="bg" cx="60" cy="60" r="55"></circle>
                                <circle class="progress" id="readingCorrectCircle" cx="60" cy="60" r="55"></circle>
                            </svg>
                            <div class="progress-text">
                                <b id="readingCorrectScore">0</b>
                                <small id="readingCorrectText">0/40</small>
                            </div>
                        </div>

                        <!-- Band Score Circle -->
                        <div class="progress-circle">
                            <svg width="120" height="120">
                                <circle class="bg" cx="60" cy="60" r="55"></circle>
                                <circle class="progress" id="readingBandCircle" cx="60" cy="60" r="55"></circle>
                            </svg>
                            <div class="progress-text">
                                <b id="readingBandScore">0</b>
                                <small>Band</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Band Score -->
            <div class="band-score mt-5 p-4 bg-white rounded shadow-sm text-start">
                <h5 class="mb-3">
                    <img src="https://cdn-icons-png.flaticon.com/512/1828/1828884.png" width="24" alt="icon"
                        class="me-2">
                    Band Score:
                </h5>

                <!-- Band Numbers -->
                <div class="d-flex justify-content-center mb-4" id="bandNumbers">
                    @foreach(range(9, 3, -0.5) as $band)
                        <span data-band="{{ $band }}" class="{{ $band == 3 ? 'active' : '' }}">{{ $band }}</span>
                    @endforeach
                </div>

                <!-- Band Details -->
                <div id="bandDetails">
                    <!-- Filled dynamically by JS -->
                </div>
            </div>

            <!-- Answer Keys -->
            <div class="answer-key text-start mt-5">
                <h5>Answer Keys:</h5>

                <!-- Listening Answers -->
                <p><b>Listening</b></p>
                <ul class="list-unstyled">
                    @foreach($listeningAnswers as $q => $answer)
                        <li class="{{ $answer['user'] == $answer['correct'] ? 'correct' : 'wrong' }}">
                            Q{{ $q + 1 }}: {{ $answer['user'] }} : {{ $answer['correct'] }} 
                            {{ $answer['user'] == $answer['correct'] ? '✓' : '✗' }}
                        </li>
                    @endforeach
                </ul>

                <!-- Reading Answers -->
                <p><b>Reading</b></p>
                <ul class="list-unstyled">
                    @foreach($readingAnswers as $q => $answer)
                        <li class="{{ $answer['user'] == $answer['correct'] ? 'correct' : 'wrong' }}">
                            Q{{ $q + 1 }}: {{ $answer['user'] }} : {{ $answer['correct'] }} 
                            {{ $answer['user'] == $answer['correct'] ? '✓' : '✗' }}
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
    // Band Score Data
    const bandData = {
        "9": { correct: "39-40", skill: "Expert user", desc: "You have a full operational command of the language. Your use of English is appropriate, accurate and fluent, and you show complete understanding." },
        "8.5": { correct: "37-38", skill: "Very good user", desc: "Has fully operational command of the language with only occasional inaccuracies and inappropriate usage." },
        "8": { correct: "35-36", skill: "Very good user", desc: "Has full operational command but occasional inaccuracies and misunderstandings in unfamiliar situations." },
        "7.5": { correct: "33-34", skill: "Good user", desc: "Has operational command of the language with occasional inaccuracies, inappropriate usage and misunderstandings." },
        "7": { correct: "30-32", skill: "Good user", desc: "You have an operational command of the language, though with occasional inaccuracies, inappropriate usage and misunderstandings in some situations. Generally you handle complex language well and understand detailed reasoning." },
        "6.5": { correct: "27-29", skill: "Competent user", desc: "Generally you have an effective command of the language despite some inaccuracies, inappropriate usage and misunderstandings. You can use and understand fairly complex language, particularly in familiar situations." },
        "6": { correct: "23-26", skill: "Competent user", desc: "Has generally effective command of the language despite inaccuracies, inappropriate usage and misunderstandings." },
        "5.5": { correct: "19-22", skill: "Modest user", desc: "Has partial command of the language, coping with overall meaning in most situations, though likely to make many mistakes." },
        "5": { correct: "15-18", skill: "Modest user", desc: "Has partial command of the language, coping with overall meaning but making frequent mistakes." },
        "4.5": { correct: "12-14", skill: "Limited user", desc: "Basic competence is limited to familiar situations. Frequent problems in understanding and expression." },
        "4": { correct: "10-11", skill: "Limited user", desc: "Has frequent problems with understanding and expression. Cannot use complex language." },
        "3.5": { correct: "8-9", skill: "Extremely limited user", desc: "Conveys and understands only general meaning in very familiar situations. Frequent breakdowns in communication." },
        "3": { correct: "3-4", skill: "Extremely limited user", desc: "You convey and understand only general meaning in very familiar situations. There are frequent breakdowns in communication." }
    };

    // Handle Band Click
    document.querySelectorAll("#bandNumbers span").forEach(span => {
        span.addEventListener("click", () => {
            document.querySelectorAll("#bandNumbers span").forEach(s => s.classList.remove("active"));
            span.classList.add("active");
            const band = span.getAttribute("data-band");
            const data = bandData[band];
            document.getElementById("bandDetails").innerHTML = `
                <table class="table table-borderless">
                    <tbody>
                        <tr><td class="fw-bold">Correct Answers:</td><td>${data.correct}</td></tr>
                        <tr><td class="fw-bold">Skill Level:</td><td><span class="fw-bold">${data.skill}</span></td></tr>
                        <tr><td class="fw-bold">Description:</td><td><span class="fw-bold">${data.desc}</span></td></tr>
                    </tbody>
                </table>
            `;
        });
    });

    // Results from backend
    const results = {
        listening: {{ json_encode($listeningCorrect ?? 0) }},
        reading: {{ json_encode($readingCorrect ?? 0) }}
    };

    console.log('Listening correct:', results.listening);
    console.log('Reading correct:', results.reading);

    function calculateBand(correct) {
        if (correct >= 39) return 9;
        if (correct >= 37) return 8.5;
        if (correct >= 35) return 8;
        if (correct >= 33) return 7.5;
        if (correct >= 30) return 7;
        if (correct >= 27) return 6.5;
        if (correct >= 23) return 6;
        if (correct >= 19) return 5.5;
        if (correct >= 15) return 5;
        if (correct >= 12) return 4.5;
        if (correct >= 10) return 4;
        if (correct >= 8) return 3.5;
        return 3;
    }

    // Set results in DOM
    document.getElementById("listeningCorrectScore").innerText = results.listening;
    document.getElementById("listeningCorrectText").innerText = `${results.listening}/40`;
    document.getElementById("listeningBandScore").innerText = calculateBand(results.listening);

    document.getElementById("readingCorrectScore").innerText = results.reading;
    document.getElementById("readingCorrectText").innerText = `${results.reading}/40`;
    document.getElementById("readingBandScore").innerText = calculateBand(results.reading);
</script>

</body>

</html>
