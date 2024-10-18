<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <style>
        .error {
            color: red;
            font-size: 0.875em;
        }
        body {
            background-color: #f8f9fa;
        }
        .container {
            background-color: white;
            padding: 20px;
            border-radius: 0.5rem;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Employee Form</h2>
        <form id="employeeForm">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" placeholder="Enter employee name" required>
            <div class="error" id="nameError"></div>
        </div>
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" placeholder="Enter username" required>
            <div class="error" id="usernameError"></div>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" required>
            <div class="error" id="emailError"></div>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Enter password" required>
            <div class="error" id="passwordError"></div>
        </div>
        <div class="mb-3">
            <label for="state" class="form-label">State</label>
            <select class="form-control" id="state" required>
                <option value="">Select State</option>
                <option value="Gujarat">Gujarat</option>
                <option value="Assam">Assam</option>
                <option value="Kerala">Kerala</option>
            </select>
            <div class="error" id="stateError"></div>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Submit</button>
    </form>

        <h2 class="text-center mt-5">Employee Data</h2>
        <table id="employeeTable" class="display table table-bordered mt-3">
            <thead class="table-dark">
                <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Start Date</th>
                    <th>Salary</th>
                </tr>
            </thead>
            <tbody id="employeeTableBody">
                <!-- Dynamic rows will be added here -->
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready(function() {
    $('#employeeForm').on('submit', function(e) {
        e.preventDefault(); // Prevent the form from submitting normally

        // Validate fields
        const name = $('#name').val().trim();
        const username = $('#username').val().trim();
        const email = $('#email').val().trim();
        const password = $('#password').val().trim();
        const state = $('#state').val();

        // Simple validations
        let isValid = true;

        if (name.length < 3) {
            $('#nameError').text('Name must be at least 3 characters long.');
            isValid = false;
        } else {
            $('#nameError').text('');
        }

        if (username.length < 3) {
            $('#usernameError').text('Username must be at least 3 characters long.');
            isValid = false;
        } else {
            $('#usernameError').text('');
        }

        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(email)) {
            $('#emailError').text('Enter a valid email address.');
            isValid = false;
        } else {
            $('#emailError').text('');
        }

        if (password.length < 6) {
            $('#passwordError').text('Password must be at least 6 characters long.');
            isValid = false;
        } else {
            $('#passwordError').text('');
        }

        if (state === '') {
            $('#stateError').text('Please select a state.');
            isValid = false;
        } else {
            $('#stateError').text('');
        }

        // If all fields are valid, redirect to the data table page
        if (isValid) {
            const employeeData = {
                name: name,
                username: username,
                email: email,
                password: password,
                state: state
            };

            // Store employee data in localStorage
            let employees = JSON.parse(localStorage.getItem('employees')) || [];
            employees.push(employeeData);
            localStorage.setItem('employees', JSON.stringify(employees));

            // Redirect to data table page
            window.location.href = 'employee_data.html';
        }
    });
});
</script>
</body>
</html>
