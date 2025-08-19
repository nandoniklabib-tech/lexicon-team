@extends('Frontend.frontApp')

@section('content')

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; }
        .calendar { width: 800px; margin: auto; }
        
        @media screen and (max-width: 600px) {
          .calendar { width: 350px; margin: auto; }
        }
        .calendar-header { display: flex; justify-content: space-between; align-items: center; padding: 10px; background: #111; color: white; }
        .calendar-days { display: grid; grid-template-columns: repeat(7, 1fr); gap: 5px; padding: 10px; }
        .day { padding: 10px; background: #ecf0f1; border-radius: 5px; position: relative; }
        .today { background: green !important; color: white; font-weight: bold; }
        .exam-day { background: #E51D27 !important; color: white; font-weight: bold; }
        .day-name { font-weight: bold; color: black; }
        .exam-title { font-size: 12px; display: block; margin-top: 5px; color: white; }
    </style>

    <div class="calendar my-3">
        <div class="calendar-header">
            <button id="prevMonth">&#9665;</button>
            <h2 id="monthYear"></h2>
            <button id="nextMonth">&#9655;</button>
        </div>
        <div class="calendar-days"></div>
    </div>

    <script>
        $(document).ready(function() {
            let currentDate = new Date();
            
            // Pass Laravel data to JavaScript
            let examDates = @json($examdates);
            
            function renderCalendar(date) {
                let year = date.getFullYear();
                let month = date.getMonth();
                let today = new Date();
                let todayDate = today.getDate();
                let todayMonth = today.getMonth();
                let todayYear = today.getFullYear();
                
                $("#monthYear").text(new Intl.DateTimeFormat('en-US', { month: 'long', year: 'numeric' }).format(date));
                
                let firstDay = new Date(year, month, 1).getDay();
                let daysInMonth = new Date(year, month + 1, 0).getDate();
                let daysHtml = "";
                
                let dayNames = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
                for (let i = 0; i < 7; i++) {
                    daysHtml += `<div class='day-name'>${dayNames[i]}</div>`;
                }
                
                for (let i = 0; i < firstDay; i++) daysHtml += "<div></div>";
                
                for (let day = 1; day <= daysInMonth; day++) {
                    let isToday = (day === todayDate && month === todayMonth && year === todayYear);
                    let formattedDate = `${year}-${(month + 1).toString().padStart(2, '0')}-${day.toString().padStart(2, '0')}`;
                    let examTitle = "";
                    let isExamDay = false;
                    
                    examDates.forEach(exam => {
                        if (exam.date === formattedDate) {
                            examTitle = exam.title;
                            isExamDay = true;
                        }
                    });
                    
                    daysHtml += `<div class='day ${isToday ? "today" : isExamDay ? "exam-day" : ""}'>
                                    ${day}
                                    ${examTitle ? `<br><span class='exam-title'>${examTitle}</span>` : ""}
                                 </div>`;
                }
                
                $(".calendar-days").html(daysHtml);
            }
            
            renderCalendar(currentDate);
            
            $("#prevMonth").click(() => { currentDate.setMonth(currentDate.getMonth() - 1); renderCalendar(currentDate); });
            $("#nextMonth").click(() => { currentDate.setMonth(currentDate.getMonth() + 1); renderCalendar(currentDate); });
        });
    </script>

@endsection