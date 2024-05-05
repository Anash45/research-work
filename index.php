<?php
require_once './db_conn.php';
require './functions.php';
if (!isLoggedIn()) {
    header('location: login.php');
}
$info = '';
$page = 'home';
?>
<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.84.0">
        <title>Research Work</title>
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="./assets/fontawesome/css/all.css">
        <link rel="stylesheet" href="./assets/css/style.css">
    </head>

    <body>
        <?php include './header.php'; ?>
        <div class="container-fluid">
            <div class="row">
                <?php include './sidebar.php'; ?>
                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 pt-4">
                    <?php echo $info; ?>
                    <div id="calendar"></div>
                </main>
            </div>
        </div>
        <script src="./assets/js/jquery-3.6.1.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
        <script src="./assets/js/bootstrap.bundle.min.js"></script>
        <script src="./assets/js/script.js"></script>
        <div>
            <?php include './essentials.php'; ?>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/6.1.11/index.global.min.js"
            integrity="sha512-WPqMaM2rVif8hal2KZZSvINefPKQa8et3Q9GOK02jzNL51nt48n+d3RYeBCfU/pfYpb62BeeDf/kybRY4SJyyw=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
            $(document).ready(function () {
                // Initialize FullCalendar
                var calendarEl = document.getElementById('calendar');
                var calendar = new FullCalendar.Calendar(calendarEl, {
                    initialView: 'dayGridMonth', // Display month view by default
                    events: [], // Initialize with no events
                    eventClick: function (info) {
                        // Display task details when clicked
                        // console.log('Task ID: ' + info.event.id + '\nTask Title: ' + info.event.title + '\nBoard ID: ' + info.event.extendedProps.board_id);
                        window.location = "tasks.php?board_id=" + info.event.extendedProps.board_id + "&task_id=" + info.event.id;
                    }
                });

                // Fetch tasks from server and render on the calendar
                // You can fetch tasks using AJAX and then dynamically add them to the calendar
                // Example:
                $.ajax({
                    url: 'fetchTasks.php',
                    type: 'GET',
                    dataType: 'json',
                    success: function (response) {
                        calendar.addEventSource(response); // Add tasks to the calendar
                    },
                    error: function (xhr, status, error) {
                        console.error(error);
                        alert('Error fetching tasks.');
                    }
                });

                // Render the calendar
                calendar.render();
            });


        </script>
    </body>

</html>