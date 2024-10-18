<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <title>Entries Table</title>
</head>

<body>

    <div class="container mt-5">
        <h2>Entries Table</h2>
        <table id="entriesTable" class="display">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Username</th>
                    <th>Mobile Number</th>
                    <th>Gender</th>
                    <th>City</th>
                    <th>State</th>
                    <th>Zip</th>
                    <th>Newsletter</th>
                </tr>
            </thead>
            <tbody>
                <!-- Entries will be dynamically added here -->
            </tbody>
        </table>
        <div class="mb-3">
            <a href="form.html" class="btn btn-secondary">Back to Form</a>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
            // Initialize DataTable
            const table = $('#entriesTable').DataTable();

            // Load entries from localStorage
            const entries = JSON.parse(localStorage.getItem('entries')) || [];
            entries.forEach(entry => {
                table.row.add([
                    entry.firstName,
                    entry.lastName,
                    entry.username,
                    entry.mobileNumber,
                    entry.gender,
                    entry.city,
                    entry.state,
                    entry.zip,
                    entry.newsletter
                ]).draw();
            });
        });
    </script>

</body>

</html>