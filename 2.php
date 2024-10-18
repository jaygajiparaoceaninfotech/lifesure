<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Data</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
</head>
<body>

<div class="container mt-5">
    <h2>Employee Data</h2>
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

    // Load employee data from localStorage
    const employeeData = JSON.parse(localStorage.getItem('employeeData'));
    if (employeeData) {
        table.row.add([
            employeeData.name,
            employeeData.username,
            employeeData.email,
            employeeData.password,
            employeeData.state
        ]).draw();
    }
});
</script>
</body>
</html>
