<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from themewagon.github.io/kaiadmin-lite/components/gridsystem.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 Oct 2024 09:43:45 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Grid System - Kaiadmin Bootstrap 5 Admin Dashboard</title>
gridsystem    <meta
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
      name="viewport"
    />
    <link
      rel="icon"
      href="../assets/img/kaiadmin/favicon.ico"
      type="image/x-icon"
    />

 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-ZENpIfx3ZFl2BOk+R4DsGGS1LfaSpCnq8Pcp1O89NfwT1p8l+AL2D7dD5qn7cOJC" crossorigin="anonymous">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl5+5hb7B4b8FszMCQeKN3tmGb9/ywYXb2cl1M2trb"
    crossorigin="anonymous"></script>
    <!-- Fonts and icons -->
    <script src="../assets/js/plugin/webfont/webfont.min.js"></script>
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
          urls: ["../assets/css/fonts.min.css"],
        },
        active: function () {
          sessionStorage.fonts = true;
        },
      });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../assets/css/plugins.min.css" />
    <link rel="stylesheet" href="../assets/css/kaiadmin.min.css" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="../assets/css/demo.css" />
  </head>
  <body>
    <div class="wrapper">
      <!-- Sidebar -->
      <div class="sidebar" data-background-color="dark">
        <div class="sidebar-logo">
          <!-- Logo Header -->
          <div class="logo-header" data-background-color="dark">
            <a href="../index-2.php" class="logo">
              <img
                src="../assets/img/kaiadmin/logo_light.svg"
                alt="navbar brand"
                class="navbar-brand"
                height="20"
              />
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
        <div class="sidebar-wrapper scrollbar scrollbar-inner">
          <div class="sidebar-content">
            <ul class="nav nav-secondary">
              <li class="nav-item">
                <a
                  data-bs-toggle="collapse"
                  href="#dashboard"
                  class="collapsed"
                  aria-expanded="false"
                >
                  <i class="fas fa-home"></i>
                  <p>Dashboard</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="dashboard">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="https://themewagon.github.io/demo1/index.php">
                        <span class="sub-item">Dashboard 1</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-section">
                <span class="sidebar-mini-icon">
                  <i class="fa fa-ellipsis-h"></i>
                </span>
                <h4 class="text-section">Components</h4>
              </li>
              <li class="nav-item active submenu">
                <a data-bs-toggle="collapse" href="#base">
                  <i class="fas fa-layer-group"></i>
                  <p>Base</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse show" id="base">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="avatars.php">
                        <span class="sub-item">Avatars</span>
                      </a>
                    </li>
                    <li>
                      <a href="buttons.php">
                        <span class="sub-item">Buttons</span>
                      </a>
                    </li>
                    <li class="active">
                      <a href="gridsystem.php">
                        <span class="sub-item">Grid System</span>
                      </a>
                    </li>
                    <li>
                      <a href="panels.php">
                        <span class="sub-item">Panels</span>
                      </a>
                    </li>
                    <li>
                      <a href="notifications.php">
                        <span class="sub-item">Notifications</span>
                      </a>
                    </li>
                    <li>
                      <a href="sweetalert.php">
                        <span class="sub-item">Sweet Alert</span>
                      </a>
                    </li>
                    <li>
                      <a href="font-awesome-icons.php">
                        <span class="sub-item">Font Awesome Icons</span>
                      </a>
                    </li>
                    <li>
                      <a href="simple-line-icons.php">
                        <span class="sub-item">Simple Line Icons</span>
                      </a>
                    </li>
                    <li>
                      <a href="typography.php">
                        <span class="sub-item">Typography</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#sidebarLayouts">
                  <i class="fas fa-th-list"></i>
                  <p>Sidebar Layouts</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="sidebarLayouts">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="../sidebar-style-2.php">
                        <span class="sub-item">Sidebar Style 2</span>
                      </a>
                    </li>
                    <li>
                      <a href="../icon-menu.php">
                        <span class="sub-item">Icon Menu</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#forms">
                  <i class="fas fa-pen-square"></i>
                  <p>Forms</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="forms">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="../forms/forms.php">
                        <span class="sub-item">Basic Form</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#tables">
                  <i class="fas fa-table"></i>
                  <p>Tables</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="tables">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="../tables/tables.php">
                        <span class="sub-item">Basic Table</span>
                      </a>
                    </li>
                    <li>
                      <a href="../tables/datatables.php">
                        <span class="sub-item">Datatables</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
             
              <li class="nav-item">
                <a href="../widgets.php">
                  <i class="fas fa-desktop"></i>
                  <p>Widgets</p>
                  <span class="badge badge-success">4</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- End Sidebar -->

      <div class="main-panel">
        <div class="main-header">
          <div class="main-header-logo">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="dark">
              <a href="../index-2.php" class="logo">
                <img
                  src="../assets/img/kaiadmin/logo_light.svg"
                  alt="navbar brand"
                  class="navbar-brand"
                  height="20"
                />
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
              <h3 class="fw-bold mb-3">Grid System</h3>
              <ul class="breadcrumbs mb-3">
                <li class="nav-home">
                  <a href="#">
                    <i class="icon-home"></i>
                  </a>
                </li>
                <li class="separator">
                  <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                  <a href="#">Base</a>
                </li>
                <li class="separator">
                  <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                  <a href="#">Grid System</a>
                </li>
              </ul>
            </div>
            <div class="card">
              <div class="card-body">
                <h4 class="card-title mt-3">XL Grid</h4>
                <div class="row row-demo-grid">
                  <div class="col-xl-4">
                    <div class="card">
                      <div class="card-body"><code>.col-xl-4</code></div>
                    </div>
                  </div>
                  <div class="col-xl-4">
                    <div class="card">
                      <div class="card-body"><code>.col-xl-4</code></div>
                    </div>
                  </div>
                  <div class="col-xl-4">
                    <div class="card">
                      <div class="card-body"><code>.col-xl-4</code></div>
                    </div>
                  </div>
                </div>

                <h4 class="card-title">LG Grid (Collapsed at 992px)</h4>
                <div class="row row-demo-grid">
                  <div class="col-lg-4">
                    <div class="card">
                      <div class="card-body"><code>.col-lg-4</code></div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="card">
                      <div class="card-body"><code>.col-lg-4</code></div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="card">
                      <div class="card-body"><code>.col-lg-4</code></div>
                    </div>
                  </div>
                </div>

                <h4 class="card-title">MD Grid (Collapsed at 768px)</h4>
                <div class="row row-demo-grid">
                  <div class="col-md-4">
                    <div class="card">
                      <div class="card-body"><code>.col-md-4</code></div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card">
                      <div class="card-body"><code>.col-md-4</code></div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card">
                      <div class="card-body"><code>.col-md-4</code></div>
                    </div>
                  </div>
                </div>

                <h4 class="card-title">SM Grid (Collapsed at 576px)</h4>
                <div class="row row-demo-grid">
                  <div class="col-sm-4">
                    <div class="card">
                      <div class="card-body"><code>.col-sm-4</code></div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="card">
                      <div class="card-body"><code>.col-sm-4</code></div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="card">
                      <div class="card-body"><code>.col-sm-4</code></div>
                    </div>
                  </div>
                </div>

                <h4 class="card-title">XS Grid</h4>
                <div class="row row-demo-grid">
                  <div class="col-4">
                    <div class="card">
                      <div class="card-body"><code>.col-4</code></div>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="card">
                      <div class="card-body"><code>.col-4</code></div>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="card">
                      <div class="card-body"><code>.col-4</code></div>
                    </div>
                  </div>
                </div>

                <h4 class="card-title">Equality Width</h4>
                <div class="row row-demo-grid">
                  <div class="col">
                    <div class="card">
                      <div class="card-body"><code>col</code></div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card">
                      <div class="card-body"><code>col</code></div>
                    </div>
                  </div>
                </div>
                <div class="row row-demo-grid">
                  <div class="col">
                    <div class="card">
                      <div class="card-body"><code>col</code></div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card">
                      <div class="card-body"><code>col</code></div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card">
                      <div class="card-body"><code>col</code></div>
                    </div>
                  </div>
                </div>

                <h4 class="card-title">Setting one column width</h4>
                <div class="row row-demo-grid">
                  <div class="col">
                    <div class="card">
                      <div class="card-body"><code>col</code></div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="card">
                      <div class="card-body"><code>col-6</code></div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card">
                      <div class="card-body"><code>col</code></div>
                    </div>
                  </div>
                </div>

                <h4 class="card-title">
                  Mix and Match (Showing different sizes on different screens)
                </h4>
                <!-- Stack the columns on mobile by making one full-width and the other half-width -->
                <div class="row row-demo-grid">
                  <div class="col-12 col-md-8">
                    <div class="card">
                      <div class="card-body"><code>col-12 col-md-8</code></div>
                    </div>
                  </div>
                  <div class="col-6 col-md-4">
                    <div class="card">
                      <div class="card-body"><code>col-6 col-md-6</code></div>
                    </div>
                  </div>
                </div>

                <!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
                <div class="row row-demo-grid">
                  <div class="col-sm-6 col-md-3">
                    <div class="card">
                      <div class="card-body">
                        <code>col-sm-6 col-md-3</code>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-3">
                    <div class="card">
                      <div class="card-body">
                        <code>col-sm-6 col-md-3</code>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-3">
                    <div class="card">
                      <div class="card-body">
                        <code>col-sm-6 col-md-3</code>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-3">
                    <div class="card">
                      <div class="card-body">
                        <code>col-sm-6 col-md-3</code>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Columns are always 50% wide, on mobile and desktop -->
                <div class="row row-demo-grid">
                  <div class="col-6">
                    <div class="card">
                      <div class="card-body"><code>col-6</code></div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="card">
                      <div class="card-body"><code>col-6</code></div>
                    </div>
                  </div>
                </div>

                <h4 class="card-title">
                  Offset Grid (Adding some space when needed)
                </h4>
                <div class="row row-demo-grid">
                  <div class="col-md-4">
                    <div class="card">
                      <div class="card-body text-center">
                        <code>col-md-4</code>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 ms-auto">
                    <div class="card">
                      <div class="card-body text-center">
                        <code>col-md-4 ms-auto</code>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row row-demo-grid">
                  <div class="col-md-4 ms-auto me-auto">
                    <div class="card">
                      <div class="card-body text-center">
                        <code>col-md-4 ms-auto me-auto</code>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 ms-auto me-auto">
                    <div class="card">
                      <div class="card-body text-center">
                        <code>col-md-4 ms-auto me-auto</code>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row row-demo-grid">
                  <div class="col-md-6 ms-auto me-auto">
                    <div class="card">
                      <div class="card-body text-center">
                        <code>col-md-6 ms-auto me-auto</code>
                      </div>
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
                <button
                  type="button"
                  class="selected changeLogoHeaderColor"
                  data-color="dark"
                ></button>
                <button
                  type="button"
                  class="selected changeLogoHeaderColor"
                  data-color="blue"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="purple"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="light-blue"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="green"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="orange"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="red"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="white"
                ></button>
                <br />
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="dark2"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="blue2"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="purple2"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="light-blue2"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="green2"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="orange2"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="red2"
                ></button>
              </div>
            </div>
            <div class="switch-block">
              <h4>Navbar Header</h4>
              <div class="btnSwitch">
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="dark"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="blue"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="purple"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="light-blue"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="green"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="orange"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="red"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="white"
                ></button>
                <br />
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="dark2"
                ></button>
                <button
                  type="button"
                  class="selected changeTopBarColor"
                  data-color="blue2"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="purple2"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="light-blue2"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="green2"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="orange2"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="red2"
                ></button>
              </div>
            </div>
            <div class="switch-block">
              <h4>Sidebar</h4>
              <div class="btnSwitch">
                <button
                  type="button"
                  class="selected changeSideBarColor"
                  data-color="white"
                ></button>
                <button
                  type="button"
                  class="changeSideBarColor"
                  data-color="dark"
                ></button>
                <button
                  type="button"
                  class="changeSideBarColor"
                  data-color="dark2"
                ></button>
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
    <script src="../assets/js/core/jquery-3.7.1.min.js"></script>
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>

    <!-- jQuery Scrollbar -->
    <script src="../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
    <!-- Moment JS -->
    <script src="../assets/js/plugin/moment/moment.min.js"></script>

    <!-- Chart JS -->
    <script src="../assets/js/plugin/chart.js/chart.min.js"></script>

    <!-- jQuery Sparkline -->
    <script src="../assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

    <!-- Chart Circle -->
    <script src="../assets/js/plugin/chart-circle/circles.min.js"></script>

    <!-- Datatables -->
    <script src="../assets/js/plugin/datatables/datatables.min.js"></script>

    <!-- jQuery Vector Maps -->
    <script src="../assets/js/plugin/jsvectormap/jsvectormap.min.js"></script>
    <script src="../assets/js/plugin/jsvectormap/world.js"></script>

    <!-- Sweet Alert -->
    <script src="../assets/js/plugin/sweetalert/sweetalert.min.js"></script>

    <!-- Kaiadmin JS -->
    <script src="../assets/js/kaiadmin.min.js"></script>

    <!-- Kaiadmin DEMO methods, don't include it in your project! -->
    <script src="../assets/js/setting-demo2.js"></script>
  </body>

<!-- Mirrored from themewagon.github.io/kaiadmin-lite/components/gridsystem.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 Oct 2024 09:43:45 GMT -->
</html>
