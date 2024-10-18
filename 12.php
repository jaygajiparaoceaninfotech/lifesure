<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <style>
        .error {
            color: red;
            font-size: 0.875em;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <h2>Employee Form</h2>
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

    <h2 class="mt-5">Employee Data</h2>
    <table id="employeeTable" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Username</th>
                <th>Email</th>
                <th>Password</th>
                <th>State</th>
            </tr>
        </thead>
        <tbody>
            <!-- Employee data will be populated here -->
        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function() {
    // Initialize DataTable
    const table = $('#employeeTable').DataTable();

    // Form validation
    const validateField = (id, errorId, validationFn) => {
        const value = $(id).val().trim();
        const errorMessage = validationFn(value);
        $(errorId).text(errorMessage);
        return !errorMessage; // Return true if no error
    };

    $('#employeeForm').on('submit', function(e) {
        e.preventDefault(); // Prevent the form from submitting normally

        // Validate fields
        const isNameValid = validateField('#name', '#nameError', (value) => {
            return value.length < 3 ? 'Name must be at least 3 characters long.' : '';
        });
        
        const isUsernameValid = validateField('#username', '#usernameError', (value) => {
            return value.length < 3 ? 'Username must be at least 3 characters long.' : '';
        });

        const isEmailValid = validateField('#email', '#emailError', (value) => {
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return !emailPattern.test(value) ? 'Enter a valid email address.' : '';
        });

        const isPasswordValid = validateField('#password', '#passwordError', (value) => {
            return value.length < 6 ? 'Password must be at least 6 characters long.' : '';
        });

        const isStateValid = validateField('#state', '#stateError', (value) => {
            return value === '' ? 'Please select a state.' : '';
        });

        // If all fields are valid, add the data to the DataTable
        if (isNameValid && isUsernameValid && isEmailValid && isPasswordValid && isStateValid) {
            const name = $('#name').val();
            const username = $('#username').val();
            const email = $('#email').val();
            const password = $('#password').val();
            const state = $('#state').val();

            // Add the data to the DataTable
            table.row.add([
                name,
                username,
                email,
                password,
                state
            ]).draw();

            // Clear the form fields
            this.reset();
            $('.error').text(''); // Clear all error messages
        }
    });

    // Dynamic validation on input change
    $('#employeeForm input, #employeeForm select').on('input change', function() {
        const id = `#${this.id}`;
        const errorId = `#${this.id}Error`;
        switch (this.id) {
            case 'name':
                validateField(id, errorId, (value) => {
                    return value.length < 3 ? 'Name must be at least 3 characters long.' : '';
                });
                break;
            case 'username':
                validateField(id, errorId, (value) => {
                    return value.length < 3 ? 'Username must be at least 3 characters long.' : '';
                });
                break;
            case 'email':
                validateField(id, errorId, (value) => {
                    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                    return !emailPattern.test(value) ? 'Enter a valid email address.' : '';
                });
                break;
            case 'password':
                validateField(id, errorId, (value) => {
                    return value.length < 6 ? 'Password must be at least 6 characters long.' : '';
                });
                break;
            case 'state':
                validateField(id, errorId, (value) => {
                    return value === '' ? 'Please select a state.' : '';
                });
                break;
        }
    });
});
</script>
</body>
</html>
