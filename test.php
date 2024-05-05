<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Gantt Chart of Time Spent</title>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.0/main.min.css" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/6.1.11/index.global.min.js"
            integrity="sha512-WPqMaM2rVif8hal2KZZSvINefPKQa8et3Q9GOK02jzNL51nt48n+d3RYeBCfU/pfYpb62BeeDf/kybRY4SJyyw=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                var tasks = [
                    { title: 'Task 1', start: '2024-05-05T08:00:00', end: '2024-05-05T10:30:00' },
                    { title: 'Task 2', start: '2024-05-05T11:30:00', end: '2024-05-05T13:00:00' },
                    { title: 'Task 3', start: '2024-05-05T14:00:00', end: '2024-05-05T16:00:00' }
                ];

                var calendarEl = document.getElementById('calendar');

                var calendar = new FullCalendar.Calendar(calendarEl, {
                    initialView: 'timeGridDay',
                    headerToolbar: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'timeGridDay,timeGridWeek'
                    },
                    events: tasks,
                    eventRender: function (info) {
                        var eventEl = info.el;
                        var eventDuration = info.event.end - info.event.start; // Duration in milliseconds
                        eventEl.style.width = (eventDuration / (60 * 60 * 1000)) * 40 + 'px'; // Convert duration to hours and adjust width
                    },
                    eventBackgroundColor: 'skyblue',
                    eventBorderColor: 'black',
                    eventTextColor: 'black',
                    eventDisplay: 'block'
                });

                calendar.render();
            });
        </script>
        <style>
            body {
                margin: 0;
                padding: 0;
                font-family: Arial, sans-serif;
            }

            #calendar {
                max-width: 800px;
                margin: 50px auto;
            }

            .fc-time-grid-event {
                height: 30px;
                /* Set height of task bars */
            }
        </style>
    </head>

    <body>
        <div id="calendar"></div>
    </body>

</html>