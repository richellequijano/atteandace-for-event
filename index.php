<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Attendance System</title>
    <style>
        body {
            background-image: url('chell.jpg'); /* Replace with your image path */
            background-size: cover; /* Adjust as needed */
            background-repeat: no-repeat;
            width: 100%;
            height: 100vh;
        }

        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color:rgb(255, 255, 255);
        }

        header {
            background-color: #4CAF50;
            color: white;
            text-align: center;
            padding: 30px 0;
        }

        .form-container {
            width: 40%;
            margin: 30px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .form-container h2 {
            color: #333;
            margin-bottom: 20px;
        }

        .input-field {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
        }

        .login-btn {
            width: 100%;
            padding: 12px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 20px;
        }

        .login-btn:hover {
            background-color: #45a049;
        }

        .form-links {
            margin-top: 15px;
        }

        .form-links a {
            text-decoration: none;
            color: #4CAF50;
            font-size: 14px;
        }

        .list-container {
            width: 80%;
            margin: 30px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table th,
        table td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }

        table th {
            background-color: #4CAF50;
            color: white;
            font-weight: bold;
        }

        table td {
            background-color:rgb(255, 255, 255);
        }

        table tr:hover {
            background-color:rgb(255, 255, 255);
        }

        .back-btn {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 20px;
        }

        .back-btn:hover {
            background-color: #45a049;
        }

        .student-info-container {
            width: 60%;
            margin: 30px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .student-info-container h2 {
            color: #333;
            margin-bottom: 20px;
        }

        .thank-you-container {
            display: none;
            text-align: center;
            margin-top: 50px;
        }

        .thank-you-container h2 {
            color: white; /* Change text color to white */
            font-size: 48px; /* Increase font size */
        }

        .view-history-btn {
            background-color: skyblue; /* Sky blue color */
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            padding: 10px 20px;
            font-size: 16px;
            margin-top: 20px;
        }

        .view-history-btn:hover {
            background-color: deepskyblue; /* Darker blue on hover */
        }

        .clear-history-btn {
            background-color: #f44336; /* Red color */
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            padding: 10px 20px;
            font-size: 16px;
            margin-top: 20px;
        }

        .clear-history-btn:hover {
            background-color: #d32f2f; /* Darker red on hover */
        }
    </style>
</head>

<body>

    <header>
        <h1>Event Attendance System</h1>
        <p>Login to track attendance and monitor students</p>
    </header>

    <!-- Teacher Login Form -->
    <div class="form-container" id="teacherLoginForm">
        <h2>Teacher Login</h2>
        <form onsubmit="return validateTeacherLogin(event)">
            <input type="text" id="teacherUsername" class="input-field" placeholder="Username" required><br>
            <input type="password" id="teacherPassword" class="input-field" placeholder="Password" required><br>
            <button type="submit" class="login-btn">Login</button>
        </form>
        <div class="form-links">
            <p><a href="#" onclick="switchToStudentLogin()">Student Login</a></p>
        </div>
    </div>

    <!-- Student Login Form -->
    <div class="form-container" id="studentLoginForm" style="display: none;">
        <h2>Student Login</h2>
        <form onsubmit="return validateStudentLogin(event)">
            <input type="text" id="studentUsername" class="input-field" placeholder="Username" required><br>
            <input type="password" id="studentPassword" class="input-field" placeholder="Password" required><br>
            <button type="submit" class="login-btn">Login</button>
        </form>
        <div class="form-links">
            <p><a href="#" onclick="switchToTeacherLogin()">Teacher Login</a></p>
            <p><a href="#" onclick="switchToSignup()">Don't have an account? Sign Up</a></p>
        </div>
    </div>

    <!-- Signup Form -->
    <div class="form-container" id="signupForm" style="display: none;">
        <h2>Sign Up</h2>
        <form onsubmit="return validateSignup(event)">
            <input type="text" id="signupUsername" class="input-field" placeholder="Username" required><br>
            <input type="email" id="signupEmail" class="input-field" placeholder="Email" required><br>
            <input type="password" id="signupPassword" class="input-field" placeholder="Password" required><br>
            <button type="submit" class="login-btn">Sign Up</button>
        </form>
        <div class="form-links">
            <p><a href="#" onclick="switchToStudentLogin()">Already have an account? Login</a></p>
        </div>
    </div>

    <!-- Student Information Entry Form -->
    <div class="student-info-container" id="studentInfoEntry" style="display: none;">
        <h2>Enter Your Information</h2>
        <form id="studentInfoForm" onsubmit="return submitStudentInfo(event)">
            <input type="text" id="studentFirstName" class="input-field" placeholder="First Name" required><br>
            <input type="text" id="studentLastName" class="input-field" placeholder="Last Name" required><br>
            <input type="text" id="studentID" class="input-field" placeholder="Student ID" required><br>
            <label for="studentTimein">Time In:</label>
            <select id="studentTimein" class="input-field" required>
                <option value="" disabled selected>Select Time In</option>
                <option value="08:00">08:00 AM</option>
                <option value="08:15">08:15 AM</option>
                <option value="08:30">08:30 AM</option>
                <option value="08:45">08:45 AM</option>
                <option value="09:00">09:00 AM</option>
                <option value="09:15">09:15 AM</option>
                <option value="09:30">09:30 AM</option>
                <option value="09:45">09:45 AM</option>
                <option value="10:00">10:00 AM</option>
                <option value="10:15">10:15 AM</option>
                <option value="10:30">10:30 AM</option>
                <option value="10:45">10:45 AM</option>
                <option value="11:00">11:00 AM</option>
                <option value="11:15">11:15 AM</option>
                <option value="11:30">11:30 AM</option>
                <option value="11:45">11:45 AM</option>
                <option value="12:00">12:00 PM</option>
                <option value="12:15">12:15 PM</option>
                <option value="12:30">12:30 PM</option>
                <option value="12:45">12:45 PM</option>
                <option value="01:00">01:00 PM</option>
                <option value="01:15">01:15 PM</option>
                <option value="01:30">01:30 PM</option>
                <option value="01:45">01:45 PM</option>
                <option value="02:00">02:00 PM</option>
                <option value="02:15">02:15 PM</option>
                <option value="02:30">02:30 PM</option>
                <option value="02:45">02:45 PM</option>
                <option value="03:00">03:00 PM</option>
                <option value="03:15">03:15 PM</option>
                <option value="03:30">03:30 PM</option>
                <option value="03:45">03:45 PM</option>
                <option value="04:00">04:00 PM</option>
            </select><br>

            <label for="studentTimeout">Time Out:</label>
            <select id="studentTimeout" class="input-field" required>
                <option value="" disabled selected>Select Time Out</option>
                <option value="08:00">08:00 AM</option>
                <option value="08:15">08:15 AM</option>
                <option value="08:30">08:30 AM</option>
                <option value="08:45">08:45 AM</option>
                <option value="09:00">09:00 AM</option>
                <option value="09:15">09:15 AM</option>
                <option value="09:30">09:30 AM</option>
                <option value="09:45">09:45 AM</option>
                <option value="10:00">10:00 AM</option>
                <option value="10:15">10:15 AM</option>
                <option value="10:30">10:30 AM</option>
                <option value="10:45">10:45 AM</option>
                <option value="11:00">11:00 AM</option>
                <option value="11:15">11:15 AM</option>
                <option value="11:30">11:30 AM</option>
                <option value="11:45">11:45 AM</option>
                <option value="12:00">12:00 PM</option>
                <option value="12:15">12:15 PM</option>
                <option value="12:30">12:30 PM</option>
                <option value="12:45">12:45 PM</option>
                <option value="01:00">01:00 PM</option>
                <option value="01:15">01:15 PM</option>
                <option value="01:30">01:30 PM</option>
                <option value="01:45">01:45 PM</option>
                <option value="02:00">02:00 PM</option>
                <option value="02:15">02:15 PM</option>
                <option value="02:30">02:30 PM</option>
                <option value="02:45">02:45 PM</option>
                <option value="03:00">03:00 PM</option>
                <option value="03:15">03:15 PM</option>
                <option value="03:30">03:30 PM</option>
                <option value="03:45">03:45 PM</option>
                <option value="04:00">04:00 PM</option>
            </select><br>
            <input type="text" id="schoolName" class="input-field" placeholder="School Name" required><br>
            <input type="text" id="section" class="input-field" placeholder="Section" required><br>

            <!-- Year Level Selection -->
            <label for="yearLevel">Year Level:</label>
            <select id="yearLevel" class="input-field" required>
                <option value="" disabled selected>Select Year Level</option>
                <option value="1st Year">1st Year</option>
                <option value="2nd Year">2nd Year</option>
                <option value="3rd Year">3rd Year</option>
                <option value="4th Year">4th Year</option>
                <option value="5th Year">5th Year</option>
            </select><br>

            <input type="date" id="attendanceDate" class="input-field" required><br>
            <button type="submit" class="login-btn">Submit</button>
        </form>
    </div>

    <!-- Display Student Information After Submission -->
    <div class="student-info-container" id="studentInfoContainer" style="display: none;">
        <h2>Welcome to the Event</h2>
        <p>Student Name: <span id="displayStudentFullName"></span></p>
        <p>ID number: <span id="displayStudentID"></span></p>
        <p>Event Attendance Time in: <span id="displayStudentTimein"></span></p>
        <p>Event Attendance Time out: <span id="displayStudentTimeout"></span></p>
        <p>School Name: <span id="displaySchoolName"></span></p>
        <p>Section: <span id="displaySection"></span></p>
        <p>Year: <span id="displayYear"></span></p>
        <p>Date: <span id="displayAttendanceDate"></span></p>
        <button class="login-btn" onclick="logoutStudent()">Logout</button>
        <button class="view-history-btn" onclick="showStudentHistory()">View History</button>
    </div>

    <!-- Grouped Student List -->
    <div class="list-container" id="groupedStudentListContainer" style="display: none;">
        <h2>Attendance List of Students</h2>
        <div id="groupedStudentList"></div>
        <button class="clear-history-btn" onclick="clearGroupedList()">Clear</button>
        <button class="view-history-btn" onclick="showTeacherHistory()">View History</button>
    </div>

    <!-- History List for Teacher -->
    <div class="list-container" id="historyListContainer" style="display: none;">
        <h2>Attendance History</h2>
        <div id="historyList"></div>
        <button class="back-btn" onclick="logoutTeacher()">Logout</button>
        <button class="back-btn" onclick="showGroupedList()">Back to Attendance List</button>
    </div>

    <!-- History List for Student -->
    <div class="list-container" id="studentHistoryListContainer" style="display: none;">
        <h2>Your Attendance History</h2>
        <div id="studentHistoryList"></div>
        <button class="back-btn" onclick="showStudentInfo()">Back to Student Info</button>
    </div>

    <!-- Thank You Message -->
    <div class="thank-you-container" id="thankYouContainer" style="display: none;">
        <h2>THANK YOU FOR COMING!!!</h2>
    </div>

    <script>
        // Store submitted student info for teacher view
        function storeSubmittedStudentInfo(info) {
            let submittedList = JSON.parse(localStorage.getItem('submittedList')) || [];
            submittedList.push(info);
            localStorage.setItem('submittedList', JSON.stringify(submittedList));
        }

        // Store submitted student info for student view
        function storeStudentHistory(info) {
            let studentHistory = JSON.parse(localStorage.getItem('studentHistory')) || [];
            studentHistory.push(info);
            localStorage.setItem('studentHistory', JSON.stringify(studentHistory));
        }

        // Load attendance data from localStorage and group by school, section, and year
        function loadGroupedAttendanceData() {
            const submittedList = JSON.parse(localStorage.getItem('submittedList')) || [];
            const groupedData = {};

            submittedList.forEach(entry => {
                const key = `${entry.school}-${entry.section}-${entry.year}`;
                if (!groupedData[key]) {
                    groupedData[key] = [];
                }
                groupedData[key].push(entry);
            });

            const groupedStudentList = document.getElementById('groupedStudentList');
            groupedStudentList.innerHTML = '';

            for (const key in groupedData) {
                const students = groupedData[key];
                const groupDiv = document.createElement('div');
                groupDiv.innerHTML = `<h3>${students[0].school} - ${students[0].section} - ${students[0].year}</h3>`;
                const studentTable = document.createElement('table');
                studentTable.innerHTML = `
                    <thead>
                        <tr>
                            <th>Student Name</th>
                            <th>ID number</th>
                            <th>Time In</th>
                            <th>Time Out</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                `;
                students.forEach(student => {
                    const row = studentTable.insertRow();
                    row.insertCell(0).textContent = student.fullName;
                    row.insertCell(1).textContent = student.id;
                    row.insertCell(2).textContent = student.timein;
                    row.insertCell(3).textContent = student.timeout;
                    row.insertCell(4).textContent = student.date;
                });

                studentTable.innerHTML += `</tbody>`;
                groupDiv.appendChild(studentTable);
                groupedStudentList.appendChild(groupDiv);
            }
        }

        // Show Student History
        function showStudentHistory() {
            const studentHistory = JSON.parse(localStorage.getItem('studentHistory')) || [];
            const studentHistoryListDiv = document.getElementById('studentHistoryList');
            studentHistoryListDiv.innerHTML = '';

            if (studentHistory.length === 0) {
                studentHistoryListDiv.innerHTML = '<p>No history found.</p>';
            } else {
                const table = document.createElement('table');
                table.innerHTML = `
                    <thead>
                        <tr>
                            <th>Student Name</th>
                            <th>ID</th>
                            <th>Time In</th>
                            <th>Time Out</th>
                            <th>Date</th>
                            <th>School</th>
                            <th>Section</th>
                            <th>Year</th>
                        </tr>
                    </thead>
                    <tbody>
                `;

                studentHistory.forEach(entry => {
                    const row = table.insertRow();
                    row.insertCell(0).textContent = entry.fullName;
                    row.insertCell(1).textContent = entry.id;
                    row.insertCell(2).textContent = entry.timein;
                    row.insertCell(3).textContent = entry.timeout;
                    row.insertCell(4).textContent = entry.date;
                    row.insertCell(5).textContent = entry.school;
                    row.insertCell(6).textContent = entry.section;
                    row.insertCell(7).textContent = entry.year;
                });

                table.innerHTML += `</tbody>`;
                studentHistoryListDiv.appendChild(table);
            }

            document.getElementById('studentInfoContainer').style.display = 'none';
            document.getElementById('studentHistoryListContainer').style.display = 'block';
        }

        // Show Teacher History
        function showTeacherHistory() {
            const submittedList = JSON.parse(localStorage.getItem('submittedList')) || [];
            const historyListDiv = document.getElementById('historyList');
            historyListDiv.innerHTML = '';

            if (submittedList.length === 0) {
                historyListDiv.innerHTML = '<p>No history found.</p>';
            } else {
                const table = document.createElement('table');
                table.innerHTML = `
                    <thead>
                        <tr>
                            <th>Student Name</th>
                            <th>ID</th>
                            <th>Time In</th>
                            <th>Time Out</th>
                            <th>Date</th>
                            <th>School</th>
                            <th>Section</th>
                            <th>Year</th>
                        </tr>
                    </thead>
                    <tbody>
                `;

                submittedList.forEach(entry => {
                    const row = table.insertRow();
                    row.insertCell(0).textContent = entry.fullName;
                    row.insertCell(1).textContent = entry.id;
                    row.insertCell(2).textContent = entry.timein;
                    row.insertCell(3).textContent = entry.timeout;
                    row.insertCell(4).textContent = entry.date;
                    row.insertCell(5).textContent = entry.school;
                    row.insertCell(6).textContent = entry.section;
                    row.insertCell(7).textContent = entry.year;
                });

                table.innerHTML += `</tbody>`;
                historyListDiv.appendChild(table);
            }

            document.getElementById('groupedStudentListContainer').style.display = 'none';
            document.getElementById('historyListContainer').style.display = 'block';
        }

        // Clear Attendance History
        function clearGroupedList() {
            if (confirm('Are you sure you want to clear all attendance records?')) {
                localStorage.removeItem('submittedList'); // Clear teacher history
                alert('All attendance records have been cleared.');
                showTeacherHistory(); // Refresh the history view
            }
        }

        // Teacher Login Validation
        function validateTeacherLogin(event) {
            event.preventDefault();

            const username = document.getElementById('teacherUsername').value;
            const password = document.getElementById('teacherPassword').value;

            const defaultTeacherUsername = 'teacher';
            const defaultTeacherPassword = 'password';

            if (username === defaultTeacherUsername && password === defaultTeacherPassword) {
                alert('Teacher login successful!');
                document.getElementById('teacherLoginForm').style.display = 'none';
                document.getElementById('groupedStudentListContainer').style.display = 'block';
                loadGroupedAttendanceData();
            } else {
                alert('Invalid username or password');
            }
        }

        // Student Login Validation
        function validateStudentLogin(event) {
            event.preventDefault();

            const username = document.getElementById('studentUsername').value;
            const password = document.getElementById('studentPassword').value;

            // Retrieve stored username and password
            const storedUsername = localStorage.getItem('studentUsername');
            const storedPassword = localStorage.getItem('studentPassword');

            // Check if the entered credentials match the stored ones
            if (username === storedUsername && password === storedPassword) {
                alert('Student login successful!');
                document.getElementById('studentLoginForm').style.display = 'none';
                document.getElementById('studentInfoEntry').style.display = 'block';

                // Clear the username and password fields after login
                document.getElementById('studentUsername').value = '';
                document.getElementById('studentPassword').value = '';
            } else {
                alert('Invalid username or password');
            }
        }

        // Validate Signup Form
        function validateSignup(event) {
            event.preventDefault();

            const username = document.getElementById('signupUsername').value;
            const email = document.getElementById('signupEmail').value;
            const password = document.getElementById('signupPassword').value;

            if (!username || !email || !password) {
                alert('Please fill in all fields');
                return false;
            }

            // Store the username and password in localStorage
            localStorage.setItem('studentUsername', username);
            localStorage.setItem('studentPassword', password);

            alert('Signup successful!');

            // Clear the signup fields after successful signup
            document.getElementById('signupUsername').value = '';
            document.getElementById('signupEmail').value = '';
            document.getElementById('signupPassword').value = '';

            return true; // Stay on the signup page
        }

        // Submit Student Info and Display
        function submitStudentInfo(event) {
            event.preventDefault();

            const firstName = document.getElementById('studentFirstName').value;
            const lastName = document.getElementById('studentLastName').value;
            const id = document.getElementById('studentID').value;
            const timein = document.getElementById('studentTimein').value;
            const timeout = document.getElementById('studentTimeout').value;
            const school = document.getElementById('schoolName').value;
            const section = document.getElementById('section').value;
            const year = document.getElementById('yearLevel').value; // Get selected year level
            const date = document.getElementById('attendanceDate').value;

            const fullName = firstName + ' ' + lastName;

            const studentInfo = {
                fullName: fullName,
                id: id,
                timein: timein,
                timeout: timeout,
                school: school,
                section: section,
                year: year,
                date: date,
                firstName: firstName,
                lastName: lastName
            };

            storeSubmittedStudentInfo(studentInfo);
            storeStudentHistory(studentInfo); // Store in student history

            document.getElementById('displayStudentFullName').textContent = fullName;
            document.getElementById('displayStudentID').textContent = id;
            document.getElementById('displayStudentTimein').textContent = timein;
            document.getElementById('displayStudentTimeout').textContent = timeout;
            document.getElementById('displaySchoolName').textContent = school;
            document.getElementById('displaySection').textContent = section;
            document.getElementById('displayYear').textContent = year; // Display selected year level
            document.getElementById('displayAttendanceDate').textContent = date;

            document.getElementById('studentInfoEntry').style.display = 'none';
            document.getElementById('studentInfoContainer').style.display = 'block';

            return true;
        }

        // Logout Function for Student
        function logoutStudent() {
            // Clear student information fields
            document.getElementById('studentFirstName').value = '';
            document.getElementById('studentLastName').value = '';
            document.getElementById('studentID').value = '';
            document.getElementById('studentTimein').value = '';
            document.getElementById('studentTimeout').value = '';
            document.getElementById('schoolName').value = '';
            document.getElementById('section').value = '';
            document.getElementById('yearLevel').value = ''; // Clear year level selection
            document.getElementById('attendanceDate').value = '';

            // Clear login fields
            document.getElementById('studentUsername').value = '';
            document.getElementById('studentPassword').value = '';

            // Optionally clear local storage
            localStorage.removeItem('studentUsername');
            localStorage.removeItem('studentPassword');

            // Hide the student info container and show thank you message
            document.getElementById('studentInfoContainer').style.display = 'none';
            document.getElementById('thankYouContainer').style.display = 'block';
        }

        // Logout Function for Teacher
function logoutTeacher() {
    document.getElementById('groupedStudentListContainer').style.display = 'none';
    document.getElementById('historyListContainer').style.display = 'none'; // Hide teacher history
    document.getElementById('studentHistoryListContainer').style.display = 'none'; // Hide student history
    document.getElementById('studentInfoContainer').style.display = 'none'; // Hide student info
    document.getElementById('teacherLoginForm').style.display = 'block';
    document.getElementById('teacherUsername').value = '';
    document.getElementById('teacherPassword').value = '';
}

        // Functions to switch between forms
        function switchToStudentLogin() {
            document.getElementById('teacherLoginForm').style.display = 'none';
            document.getElementById('signupForm').style.display = 'none';
            document.getElementById('studentLoginForm').style.display = 'block';
        }

        function switchToTeacherLogin() {
            document.getElementById('studentLoginForm').style.display = 'none';
            document.getElementById('signupForm').style.display = 'none';
            document.getElementById('teacherLoginForm').style.display = 'block';
        }

        function switchToSignup() {
            document.getElementById('teacherLoginForm').style.display = 'none';
            document.getElementById('studentLoginForm').style.display = 'none';
            document.getElementById('signupForm').style.display = 'block';
        }

        function switchToLogin() {
            document.getElementById('signupForm').style.display = 'none';
            document.getElementById('studentLoginForm').style.display = 'block'; // Changed to show student login
        }

        // Show grouped list
        function showGroupedList() {
            document.getElementById('historyListContainer').style.display = 'none';
            document.getElementById('groupedStudentListContainer').style.display = 'block';
        }

        // Show student info
        function showStudentInfo() {
            document.getElementById('studentHistoryListContainer').style.display = 'none';
            document.getElementById('studentInfoContainer').style.display = 'block';
        }
    </script>

</body>

</html>