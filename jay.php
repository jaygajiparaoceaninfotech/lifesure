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
                <label for="position" class="form-label">Position</label>
                <input type="text" class="form-control" id="position" placeholder="Enter job position" required>
                <div class="error" id="positionError"></div>
            </div>
            <div class="mb-3">
                <label for="office" class="form-label">Office</label>
                <input type="text" class="form-control" id="office" placeholder="Enter office location" required>
                <div class="error" id="officeError"></div>
            </div>
            <div class="mb-3">
                <label for="age" class="form-label">Age</label>
                <input type="number" class="form-control" id="age" placeholder="Enter age (1-100)" required min="1" max="100">
                <div class="error" id="ageError"></div>
            </div>
            <div class="mb-3">
                <label for="startDate" class="form-label">Start Date</label>
                <input type="date" class="form-control" id="startDate" required>
                <div class="error" id="startDateError"></div>
            </div>
            <div class="mb-3">
                <label for="salary" class="form-label">Salary</label>
                <input type="text" class="form-control" id="salary" placeholder="Enter salary (numbers only)" required>
                <div class="error" id="salaryError"></div>
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
            // Initialize DataTable
            const employeeTable = $('#employeeTable').DataTable();

            // Handle form submission
            $('#employeeForm').on('submit', function(event) {
                event.preventDefault();
                let isValid = true;

                // Clear previous error messages
                const errorFields = ['nameError', 'positionError', 'officeError', 'ageError', 'startDateError', 'salaryError'];
                errorFields.forEach(field => {
                    document.getElementById(field).textContent = '';
                });

                // Name validation
                const name = $('#name').val();
                if (name.trim() === '') {
                    $('#nameError').text('Name is required.');
                    isValid = false;
                }

                // Position validation
                const position = $('#position').val();
                if (position.trim() === '') {
                    $('#positionError').text('Position is required.');
                    isValid = false;
                }

                // Office validation
                const office = $('#office').val();
                if (office.trim() === '') {
                    $('#officeError').text('Office is required.');
                    isValid = false;
                }

                // Age validation
                const age = $('#age').val();
                if (age < 1 || age > 100) {
                    $('#ageError').text('Age must be between 1 and 100.');
                    isValid = false;
                }

                // Start date validation
                const startDate = $('#startDate').val();
                if (!startDate) {
                    $('#startDateError').text('Start date is required.');
                    isValid = false;
                }

                // Salary validation
                const salary = $('#salary').val();
                if (!salary || isNaN(salary) || salary < 0) {
                    $('#salaryError').text('Please enter a valid salary (numbers only).');
                    isValid = false;
                }

                // If all validations pass
                if (isValid) {
                    // Add new row to DataTable
                    employeeTable.row.add([
                        name,
                        position,
                        office,
                        age,
                        startDate,
                        salary
                    ]).draw();

                    // Clear form after submission
                    $('#employeeForm')[0].reset();
                    alert('Form submitted successfully!');
                }
            });
        });
    </script>
</body>
</html>
