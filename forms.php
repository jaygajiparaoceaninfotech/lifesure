<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themewagon.github.io/kaiadmin-lite/forms/forms.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 Oct 2024 09:43:46 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Forms - Kaiadmin Bootstrap 5 Admin Dashboard</title>
  <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
  <link rel="icon" href="assets/img/kaiadmin/favicon.ico" type="image/x-icon" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-ZENpIfx3ZFl2BOk+R4DsGGS1LfaSpCnq8Pcp1O89NfwT1p8l+AL2D7dD5qn7cOJC" crossorigin="anonymous">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl5+5hb7B4b8FszMCQeKN3tmGb9/ywYXb2cl1M2trb"
    crossorigin="anonymous"></script>

  <!-- Fonts and icons -->
  <script src="assets/js/plugin/webfont/webfont.min.js"></script>
  <script>
    WebFont.load({
      google: { families: ["Public Sans:300,400,500,600,700"] },
      custom: {
        families: [
          "Font Awesome 5 Solid",
          "Font Awesome 5 Regular",
          "Font Awesome 5 Brands",
          "simple-line-icons",
        ],
        urls: ["assets/css/fonts.min.css"],
      },
      active: function () {
        sessionStorage.fonts = true;
      },
    });
  </script>

  <!-- CSS Files -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/plugins.min.css" />
  <link rel="stylesheet" href="assets/css/kaiadmin.min.css" />

  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link rel="stylesheet" href="assets/css/demo.css" />
</head>

<body>
  <div class="wrapper">
    <!-- Sidebar -->
    <div class="sidebar" data-background-color="dark">
      <div class="sidebar-logo">
        <!-- Logo Header -->
        <?php include 'header.php'; ?>

        <!-- End Logo Header -->
      </div>
      <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
          <ul class="nav nav-secondary">
            <li class="nav-item">
              <a href="index.php">
                <i class="fas fa-home"></i>
                <p>Dashboard</p>
              </a>
            </li>
            <li class="nav-item active submenu">
              <a href="forms.php">
                <i class="fas fa-pen-square"></i>
                <p>Forms</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="datatables.php">
                <i class="fas fa-table"></i>
                <p>Tables</p>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="main-panel">
      <div class="main-header">
        <div class="main-header-logo">
          <!-- Logo Header -->
          <div class="logo-header" data-background-color="dark">
            <a href="index.php" class="logo">
              <img src="assets/img/kaiadmin/logo_light.svg" alt="navbar brand" class="navbar-brand" />
            </a>
            <div class="nav-toggle">
              <button class="btn btn-toggle toggle-sidebar">
                <i class="gg-menu-right"></i>
              </button>
              <button class="btn btn-toggle sidenav-toggler">
                <i class="gg-menu-left"></i>
              </button>
            </div>
            <button class="topbar-toggler more">
              <i class="gg-more-vertical-alt"></i>
            </button>
          </div>
          <!-- End Logo Header -->
        </div>
        <!-- Navbar Header -->
        <?php include 'navbar.php'; ?>

        <!-- End Navbar -->
      </div>

      <div class="container">
        <div class="page-inner">
          <div class="page-header">
            <h3 class="fw-bold mb-3">Forms</h3>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <div class="card-title">Form Elements</div>
                </div>
                <div class="card-body">
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
                      <input type="number" class="form-control" id="age" placeholder="Enter age (1-100)" required
                        min="1" max="100">
                      <div class="error" id="ageError"></div>
                    </div>
                    <div class="mb-3">
                      <label for="startDate" class="form-label">Start Date</label>
                      <input type="date" class="form-control" id="startDate" required>
                      <div class="error" id="startDateError"></div>
                    </div>
                    <div class="mb-3">
                      <label for="salary" class="form-label">Salary</label>
                      <input type="text" class="form-control" id="salary" placeholder="Enter salary (numbers only)"
                        required>
                      <div class="error" id="salaryError"></div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <?php include 'footer.php'; ?>

    </div>

    <!-- Custom template | don't include it in your project! -->
    <div class="custom-template">
      <div class="title">Settings</div>
      <div class="custom-content">
        <div class="switcher">
          <div class="switch-block">
            <h4>Logo Header</h4>
            <div class="btnSwitch">
              <button type="button" class="selected changeLogoHeaderColor" data-color="dark"></button>
              <button type="button" class="selected changeLogoHeaderColor" data-color="blue"></button>
              <button type="button" class="changeLogoHeaderColor" data-color="purple"></button>
              <button type="button" class="changeLogoHeaderColor" data-color="light-blue"></button>
              <button type="button" class="changeLogoHeaderColor" data-color="green"></button>
              <button type="button" class="changeLogoHeaderColor" data-color="orange"></button>
              <button type="button" class="changeLogoHeaderColor" data-color="red"></button>
              <button type="button" class="changeLogoHeaderColor" data-color="white"></button>
              <br />
              <button type="button" class="changeLogoHeaderColor" data-color="dark2"></button>
              <button type="button" class="changeLogoHeaderColor" data-color="blue2"></button>
              <button type="button" class="changeLogoHeaderColor" data-color="purple2"></button>
              <button type="button" class="changeLogoHeaderColor" data-color="light-blue2"></button>
              <button type="button" class="changeLogoHeaderColor" data-color="green2"></button>
              <button type="button" class="changeLogoHeaderColor" data-color="orange2"></button>
              <button type="button" class="changeLogoHeaderColor" data-color="red2"></button>
            </div>
          </div>
          <div class="switch-block">
            <h4>Navbar Header</h4>
            <div class="btnSwitch">
              <button type="button" class="changeTopBarColor" data-color="dark"></button>
              <button type="button" class="changeTopBarColor" data-color="blue"></button>
              <button type="button" class="changeTopBarColor" data-color="purple"></button>
              <button type="button" class="changeTopBarColor" data-color="light-blue"></button>
              <button type="button" class="changeTopBarColor" data-color="green"></button>
              <button type="button" class="changeTopBarColor" data-color="orange"></button>
              <button type="button" class="changeTopBarColor" data-color="red"></button>
              <button type="button" class="changeTopBarColor" data-color="white"></button>
              <br />
              <button type="button" class="changeTopBarColor" data-color="dark2"></button>
              <button type="button" class="selected changeTopBarColor" data-color="blue2"></button>
              <button type="button" class="changeTopBarColor" data-color="purple2"></button>
              <button type="button" class="changeTopBarColor" data-color="light-blue2"></button>
              <button type="button" class="changeTopBarColor" data-color="green2"></button>
              <button type="button" class="changeTopBarColor" data-color="orange2"></button>
              <button type="button" class="changeTopBarColor" data-color="red2"></button>
            </div>
          </div>
          <div class="switch-block">
            <h4>Sidebar</h4>
            <div class="btnSwitch">
              <button type="button" class="selected changeSideBarColor" data-color="white"></button>
              <button type="button" class="changeSideBarColor" data-color="dark"></button>
              <button type="button" class="changeSideBarColor" data-color="dark2"></button>
            </div>
          </div>
        </div>
      </div>
      <div class="custom-toggle">
        <i class="icon-settings"></i>
      </div>
    </div>
    <!-- End Custom template -->
  </div>
  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery-3.7.1.min.js"></script>
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>

  <!-- jQuery Scrollbar -->
  <script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

  <!-- Chart JS -->
  <script src="assets/js/plugin/chart.js/chart.min.js"></script>

  <!-- jQuery Sparkline -->
  <script src="assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

  <!-- Chart Circle -->
  <script src="assets/js/plugin/chart-circle/circles.min.js"></script>

  <!-- Datatables -->
  <script src="assets/js/plugin/datatables/datatables.min.js"></script>

  <!-- Bootstrap Notify -->
  <script src="assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

  <!-- jQuery Vector Maps -->
  <script src="assets/js/plugin/jsvectormap/jsvectormap.min.js"></script>
  <script src="assets/js/plugin/jsvectormap/world.js"></script>

  <!-- Google Maps Plugin -->
  <script src="assets/js/plugin/gmaps/gmaps.js"></script>

  <!-- Sweet Alert -->
  <script src="assets/js/plugin/sweetalert/sweetalert.min.js"></script>

  <!-- Kaiadmin JS -->
  <script src="assets/js/kaiadmin.min.js"></script>

  <!-- Kaiadmin DEMO methods, don't include it in your project! -->
  <script src="assets/js/setting-demo2.js"></script>

  <script>

$(document).ready(function() {
            // Handle form submission
            $('#employeeForm').on('submit', function(event) {
                event.preventDefault();
                let isValid = true;

                // Clear previous error messages
                const errorFields = ['nameError', 'positionError', 'officeError', 'ageError', 'startDateError', 'salaryError'];
                errorFields.forEach(field => {
                    document.getElementById(field).textContent = '';
                });

                // Validate form fields
                const name = $('#name').val();
                const position = $('#position').val();
                const office = $('#office').val();
                const age = $('#age').val();
                const startDate = $('#startDate').val();
                const salary = $('#salary').val();

                // Validations
                if (name.trim() === '') {
                    $('#nameError').text('Name is required.');
                    isValid = false;
                }
                if (position.trim() === '') {
                    $('#positionError').text('Position is required.');
                    isValid = false;
                }
                if (office.trim() === '') {
                    $('#officeError').text('Office is required.');
                    isValid = false;
                }
                if (age < 1 || age > 100) {
                    $('#ageError').text('Age must be between 1 and 100.');
                    isValid = false;
                }
                if (!startDate) {
                    $('#startDateError').text('Start date is required.');
                    isValid = false;
                }
                if (!salary || isNaN(salary) || salary < 0) {
                    $('#salaryError').text('Please enter a valid salary (numbers only).');
                    isValid = false;
                }

                // If valid, save data to local storage
                if (isValid) {
                    const employeeData = {
                        name,
                        position,
                        office,
                        age,
                        startDate,
                        salary
                    };
                    // Save employee data to local storage
                    let employees = JSON.parse(localStorage.getItem('employees')) || [];
                    employees.push(employeeData);
                    localStorage.setItem('employees', JSON.stringify(employees));

                    // Clear form after submission
                    $('#employeeForm')[0].reset();
                    alert('Form submitted successfully!');

                }
            });
        });
  </script>
</body>


</html>