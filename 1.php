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
                <option value="" disabled selected>Select State</option>
                <option value="Gujarat">Gujarat</option>
                    <option value="Assam">Assam</option>
                    <option value="Kerala">Kerala</option>
                </select>
                <div class="error" id="stateError"></div>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Submit</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function () {
            // Form validation
            const validateField = (id, errorId, validationFn) => {
                const value = $(id).val().trim();
                const errorMessage = validationFn(value);
                $(errorId).text(errorMessage);
                return !errorMessage; // Return true if no error
            };

            $('#employeeForm').on('submit', function (e) {
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

                // If all fields are valid, proceed to submit
                if (isNameValid && isUsernameValid && isEmailValid && isPasswordValid && isStateValid) {
                    // Store form data in localStorage
                    const employeeData = {
                        name: $('#name').val(),
                        username: $('#username').val(),
                        email: $('#email').val(),
                        password: $('#password').val(),
                        state: $('#state').val(),
                    };
                    localStorage.setItem('employeeData', JSON.stringify(employeeData));
                    // Redirect to 2.php to view employee data
                    window.location.href = '2.php';
                }
            });

            // Dynamic validation on input change
            $('#employeeForm input, #employeeForm select').on('input change', function () {
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