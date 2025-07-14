<?php include_once 'header.php';?><br><br><br>
<link rel="stylesheet" href="att.css">
<body>
    <div class="container">
        <h1>Attendance</h1>
        <form action="">
            <label for="date">Date:</label>
            <input type="date" id="date" name="date">
            <label for="period">Period:</label>
            <select name="period" id="period">
                <option value="1">Period 1</option>
                <option value="2">Period 2</option>
                <option value="3">Period 3</option>
                <option value="4">Period 4</option>
                <option value="5">Period 5</option>
            </select>
            <label for="status">Status:</label>
              <select name="status" id="status">
                <option value="present">Present</option>
                <option value="absent">Absent</option>
                <option value="late">Late</option>
              </select><br><br>
            <button id="take-attendance">Take Attendance</button>
        </form><br><br>
        <table id="attendance-table">
            <thead>
                <tr>
                    <th>Student ID</th>
                    <th>Name</th>
                    <th>Attendance</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>
  <script src="assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>