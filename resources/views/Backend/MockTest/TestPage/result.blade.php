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
    <div class="score-card text-center">
        <!-- Profile -->
        <div class="mb-4">
            <img src="{{ asset('images/mockTestImage/user.png') }}" class="rounded-circle result-profile-img" alt="profile">
            <h5 class="mt-2">{{ $user->name }}</h5>
        </div>

        <!-- Results Circles -->
        <div class="row justify-content-center mt-4">
            @php
                $listeningScore = $scores->firstWhere('section.name', 'Listening')?->score ?? 0;
                $readingScore   = $scores->firstWhere('section.name', 'Reading')?->score ?? 0;

                function calculateBand($correct) {
                    if ($correct >= 39) return 9;
                    if ($correct >= 37) return 8.5;
                    if ($correct >= 35) return 8;
                    if ($correct >= 33) return 7.5;
                    if ($correct >= 30) return 7;
                    if ($correct >= 27) return 6.5;
                    if ($correct >= 23) return 6;
                    if ($correct >= 19) return 5.5;
                    if ($correct >= 15) return 5;
                    if ($correct >= 12) return 4.5;
                    if ($correct >= 10) return 4;
                    if ($correct >= 8) return 3.5;
                    return 3;
                }

                $listeningBand = calculateBand($listeningScore);
                $readingBand   = calculateBand($readingScore);
            @endphp

            <!-- Listening -->
            <div class="col-md-4 mb-4">
                <h5>Listening</h5>
                <div class="d-flex justify-content-center">
                    <div class="progress-circle">
                        <svg width="120" height="120">
                            <circle class="bg" cx="60" cy="60" r="55"></circle>
                            <circle class="progress" id="listeningCircle" cx="60" cy="60" r="55"></circle>
                        </svg>
                        <div class="progress-text">
                            <b>{{ $listeningScore }}</b>
                            <small>/40</small>
                        </div>
                    </div>
                </div>
                <p class="mt-2">Band: <b>{{ $listeningBand }}</b></p>
                <div class="btn btn-info">Check Answer</div>
            </div>

            <!-- Reading -->
            <div class="col-md-4 mb-4">
                <h5>Reading</h5>
                <div class="d-flex justify-content-center">
                    <div class="progress-circle">
                        <svg width="120" height="120">
                            <circle class="bg" cx="60" cy="60" r="55"></circle>
                            <circle class="progress" id="readingCircle" cx="60" cy="60" r="55"></circle>
                        </svg>
                        <div class="progress-text">
                            <b>{{ $readingScore }}</b>
                            <small>/40</small>
                        </div>
                    </div>
                </div>
                <p class="mt-2">Band: <b>{{ $readingBand }}</b></p>
                <div class="btn btn-info">Check Answer</div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    function setCircleProgress(circleId, score) {
        const circle = document.getElementById(circleId);
        const radius = circle.r.baseVal.value;
        const circumference = 2 * Math.PI * radius;
        const percent = score / 40;
        const offset = circumference * (1 - percent);
        circle.style.strokeDasharray = circumference;
        circle.style.strokeDashoffset = offset;
    }

    setCircleProgress('listeningCircle', {{ $listeningScore }});
    setCircleProgress('readingCircle', {{ $readingScore }});
</script>
</body>
</html>
