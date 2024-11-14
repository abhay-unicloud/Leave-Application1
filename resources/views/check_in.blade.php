<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance Check-in/Check-out</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .container {
            margin-top: 50px;
        }
        .card {
            padding: 20px;
            border-radius: 10px;
        }
        .btn-custom {
            background-color: #007bff;
            color: #fff;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="card shadow-sm">
        <h3 class="text-center">Check-in and Check-out Calculator</h3>
        <form id="attendanceForm">
            <div class="form-group">
                <label for="check_in_time">Check-in Time</label>
                <input type="time" id="check_in_time" name="check_in_time" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="duration">Duration (HH:MM, default 9:15)</label>
                <input type="text" id="duration" name="duration" class="form-control" placeholder="09:15">
            </div>
            <div class="form-group">
                <label for="check_out_time">Check-out Time</label>
                <input type="text" id="check_out_time" name="check_out_time" class="form-control" readonly>
            </div>
            <button type="button" class="btn btn-custom" id="calculateButton">Calculate Check-out Time</button>
        </form>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#calculateButton').on('click', function() {
            const checkInTime = $('#check_in_time').val();
            const duration = $('#duration').val() || '09:15'; // Default to 9 hours 15 minutes if empty

            if (!checkInTime) {
                alert('Please enter a check-in time.');
                return;
            }

            const [checkInHours, checkInMinutes] = checkInTime.split(':');
            const [durationHours, durationMinutes] = duration.split(':');

            const checkInDate = new Date();
            checkInDate.setHours(parseInt(checkInHours));
            checkInDate.setMinutes(parseInt(checkInMinutes));

            // Add custom or default duration
            checkInDate.setHours(checkInDate.getHours() + parseInt(durationHours));
            checkInDate.setMinutes(checkInDate.getMinutes() + parseInt(durationMinutes));

            // Format checkout time in 12-hour format with AM/PM
            let checkOutHours = checkInDate.getHours();
            const checkOutMinutes = checkInDate.getMinutes().toString().padStart(2, '0');
            const period = checkOutHours >= 12 ? 'PM' : 'AM';
            checkOutHours = checkOutHours % 12 || 12;

            const formattedCheckOutTime = `${checkOutHours}:${checkOutMinutes} ${period}`;
            $('#check_out_time').val(formattedCheckOutTime);
        });
    });
</script>

</body>
</html>
