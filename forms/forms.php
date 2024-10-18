<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from themewagon.github.io/kaiadmin-lite/forms/forms.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 Oct 2024 09:43:46 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Forms - Kaiadmin Bootstrap 5 Admin Dashboard</title>
    <meta
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
            <a href="../index.php" class="logo">
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
              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#base">
                  <i class="fas fa-layer-group"></i>
                  <p>Base</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="base">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="../components/avatars.php">
                        <span class="sub-item">Avatars</span>
                      </a>
                    </li>
                    <li>
                      <a href="../components/buttons.php">
                        <span class="sub-item">Buttons</span>
                      </a>
                    </li>
                    <li>
                      <a href="../components/gridsystem.php">
                        <span class="sub-item">Grid System</span>
                      </a>
                    </li>
                    <li>
                      <a href="../components/panels.php">
                        <span class="sub-item">Panels</span>
                      </a>
                    </li>
                    <li>
                      <a href="../components/notifications.php">
                        <span class="sub-item">Notifications</span>
                      </a>
                    </li>
                    <li>
                      <a href="../components/sweetalert.php">
                        <span class="sub-item">Sweet Alert</span>
                      </a>
                    </li>
                    <li>
                      <a href="../components/font-awesome-icons.php">
                        <span class="sub-item">Font Awesome Icons</span>
                      </a>
                    </li>
                    <li>
                      <a href="../components/simple-line-icons.php">
                        <span class="sub-item">Simple Line Icons</span>
                      </a>
                    </li>
                    <li>
                      <a href="../components/typography.php">
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
              <li class="nav-item active submenu">
                <a data-bs-toggle="collapse" href="#forms">
                  <i class="fas fa-pen-square"></i>
                  <p>Forms</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse show" id="forms">
                  <ul class="nav nav-collapse">
                    <li class="active">
                      <a href="forms.php">
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
              <a href="../index.php" class="logo">
                <img
                  src="../assets/img/kaiadmin/logo_light.svg"
                  alt="navbar brand"
                  class="navbar-brand"
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
              <h3 class="fw-bold mb-3">Forms</h3>
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
                  <a href="#">Forms</a>
                </li>
                <li class="separator">
                  <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                  <a href="#">Basic Form</a>
                </li>
              </ul>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <div class="card-title">Form Elements</div>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-6 col-lg-4">
                        <div class="form-group">
                          <label for="email2">Email Address</label>
                          <input
                            type="email"
                            class="form-control"
                            id="email2"
                            placeholder="Enter Email"
                          />
                          <small id="emailHelp2" class="form-text text-muted"
                            >We'll never share your email with anyone
                            else.</small
                          >
                        </div>
                        <div class="form-group">
                          <label for="password">Password</label>
                          <input
                            type="password"
                            class="form-control"
                            id="password"
                            placeholder="Password"
                          />
                        </div>
                        <div class="form-group form-inline">
                          <label
                            for="inlineinput"
                            class="col-md-3 col-form-label"
                            >Inline Input</label
                          >
                          <div class="col-md-9 p-0">
                            <input
                              type="text"
                              class="form-control input-full"
                              id="inlineinput"
                              placeholder="Enter Input"
                            />
                          </div>
                        </div>
                        <div class="form-group has-success">
                          <label for="successInput">Success Input</label>
                          <input
                            type="text"
                            id="successInput"
                            value="Success"
                            class="form-control"
                          />
                        </div>
                        <div class="form-group has-error has-feedback">
                          <label for="errorInput">Error Input</label>
                          <input
                            type="text"
                            id="errorInput"
                            value="Error"
                            class="form-control"
                          />
                          <small id="emailHelp" class="form-text text-muted"
                            >Please provide a valid informations.</small
                          >
                        </div>
                        <div class="form-group">
                          <label for="disableinput">Disable Input</label>
                          <input
                            type="text"
                            class="form-control"
                            id="disableinput"
                            placeholder="Enter Input"
                            disabled
                          />
                        </div>
                        <div class="form-group">
                          <label>Gender</label><br />
                          <div class="d-flex">
                            <div class="form-check">
                              <input
                                class="form-check-input"
                                type="radio"
                                name="flexRadioDefault"
                                id="flexRadioDefault1"
                              />
                              <label
                                class="form-check-label"
                                for="flexRadioDefault1"
                              >
                                Male
                              </label>
                            </div>
                            <div class="form-check">
                              <input
                                class="form-check-input"
                                type="radio"
                                name="flexRadioDefault"
                                id="flexRadioDefault2"
                                checked
                              />
                              <label
                                class="form-check-label"
                                for="flexRadioDefault2"
                              >
                                Female
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label"> Static </label>
                          <p class="form-control-static">hello@example.com</p>
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlSelect1"
                            >Example select</label
                          >
                          <select
                            class="form-select"
                            id="exampleFormControlSelect1"
                          >
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlSelect2"
                            >Example multiple select</label
                          >
                          <select
                            multiple
                            class="form-control"
                            id="exampleFormControlSelect2"
                          >
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlFile1"
                            >Example file input</label
                          >
                          <input
                            type="file"
                            class="form-control-file"
                            id="exampleFormControlFile1"
                          />
                        </div>
                        <div class="form-group">
                          <label for="comment">Comment</label>
                          <textarea class="form-control" id="comment" rows="5">
                          </textarea>
                        </div>
                        <div class="form-check">
                          <input
                            class="form-check-input"
                            type="checkbox"
                            value=""
                            id="flexCheckDefault"
                          />
                          <label
                            class="form-check-label"
                            for="flexCheckDefault"
                          >
                            Agree with terms and conditions
                          </label>
                        </div>
                      </div>
                      <div class="col-md-6 col-lg-4">
                        <div class="form-group">
                          <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"
                              >@</span
                            >
                            <input
                              type="text"
                              class="form-control"
                              placeholder="Username"
                              aria-label="Username"
                              aria-describedby="basic-addon1"
                            />
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="input-group mb-3">
                            <input
                              type="text"
                              class="form-control"
                              placeholder="Recipient's username"
                              aria-label="Recipient's username"
                              aria-describedby="basic-addon2"
                            />
                            <span class="input-group-text" id="basic-addon2"
                              >@example.com</span
                            >
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="basic-url">Your vanity URL</label>
                          <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3"
                              >https://example.com/users/</span
                            >
                            <input
                              type="text"
                              class="form-control"
                              id="basic-url"
                              aria-describedby="basic-addon3"
                            />
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="input-group mb-3">
                            <span class="input-group-text">$</span>
                            <input
                              type="text"
                              class="form-control"
                              aria-label="Amount (to the nearest dollar)"
                            />
                            <span class="input-group-text">.00</span>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="input-group">
                            <span class="input-group-text">With textarea</span>
                            <textarea
                              class="form-control"
                              aria-label="With textarea"
                            ></textarea>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="input-group">
                            <button
                              class="btn btn-black btn-border"
                              type="button"
                            >
                              Button
                            </button>
                            <input
                              type="text"
                              class="form-control"
                              placeholder=""
                              aria-label=""
                              aria-describedby="basic-addon1"
                            />
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="input-group">
                            <input
                              type="text"
                              class="form-control"
                              aria-label="Text input with dropdown button"
                            />
                            <div class="input-group-append">
                              <button
                                class="btn btn-primary btn-border dropdown-toggle"
                                type="button"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                Dropdown
                              </button>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#"
                                  >Another action</a
                                >
                                <a class="dropdown-item" href="#"
                                  >Something else here</a
                                >
                                <div
                                  role="separator"
                                  class="dropdown-divider"
                                ></div>
                                <a class="dropdown-item" href="#"
                                  >Separated link</a
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="input-icon">
                            <input
                              type="text"
                              class="form-control"
                              placeholder="Search for..."
                            />
                            <span class="input-icon-addon">
                              <i class="fa fa-search"></i>
                            </span>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="input-icon">
                            <span class="input-icon-addon">
                              <i class="fa fa-user"></i>
                            </span>
                            <input
                              type="text"
                              class="form-control"
                              placeholder="Username"
                            />
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="form-label">Image Check</label>
                          <div class="row">
                            <div class="col-6 col-sm-4">
                              <label class="imagecheck mb-4">
                                <input
                                  name="imagecheck"
                                  type="checkbox"
                                  value="1"
                                  class="imagecheck-input"
                                />
                                <figure class="imagecheck-figure">
                                  <img
                                    src="../assets/img/examples/product1.jpg"
                                    alt="title"
                                    class="imagecheck-image"
                                  />
                                </figure>
                              </label>
                            </div>
                            <div class="col-6 col-sm-4">
                              <label class="imagecheck mb-4">
                                <input
                                  name="imagecheck"
                                  type="checkbox"
                                  value="2"
                                  class="imagecheck-input"
                                  checked=""
                                />
                                <figure class="imagecheck-figure">
                                  <img
                                    src="../assets/img/examples/product4.jpg"
                                    alt="title"
                                    class="imagecheck-image"
                                  />
                                </figure>
                              </label>
                            </div>
                            <div class="col-6 col-sm-4">
                              <label class="imagecheck mb-4">
                                <input
                                  name="imagecheck"
                                  type="checkbox"
                                  value="3"
                                  class="imagecheck-input"
                                />
                                <figure class="imagecheck-figure">
                                  <img
                                    src="../assets/img/examples/product3.jpg"
                                    alt="title"
                                    class="imagecheck-image"
                                  />
                                </figure>
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="form-label">Color Input</label>
                          <div class="row gutters-xs">
                            <div class="col-auto">
                              <label class="colorinput">
                                <input
                                  name="color"
                                  type="checkbox"
                                  value="dark"
                                  class="colorinput-input"
                                />
                                <span class="colorinput-color bg-black"></span>
                              </label>
                            </div>
                            <div class="col-auto">
                              <label class="colorinput">
                                <input
                                  name="color"
                                  type="checkbox"
                                  value="primary"
                                  class="colorinput-input"
                                />
                                <span
                                  class="colorinput-color bg-primary"
                                ></span>
                              </label>
                            </div>
                            <div class="col-auto">
                              <label class="colorinput">
                                <input
                                  name="color"
                                  type="checkbox"
                                  value="secondary"
                                  class="colorinput-input"
                                />
                                <span
                                  class="colorinput-color bg-secondary"
                                ></span>
                              </label>
                            </div>
                            <div class="col-auto">
                              <label class="colorinput">
                                <input
                                  name="color"
                                  type="checkbox"
                                  value="info"
                                  class="colorinput-input"
                                />
                                <span class="colorinput-color bg-info"></span>
                              </label>
                            </div>
                            <div class="col-auto">
                              <label class="colorinput">
                                <input
                                  name="color"
                                  type="checkbox"
                                  value="success"
                                  class="colorinput-input"
                                />
                                <span
                                  class="colorinput-color bg-success"
                                ></span>
                              </label>
                            </div>
                            <div class="col-auto">
                              <label class="colorinput">
                                <input
                                  name="color"
                                  type="checkbox"
                                  value="danger"
                                  class="colorinput-input"
                                />
                                <span class="colorinput-color bg-danger"></span>
                              </label>
                            </div>
                            <div class="col-auto">
                              <label class="colorinput">
                                <input
                                  name="color"
                                  type="checkbox"
                                  value="warning"
                                  class="colorinput-input"
                                />
                                <span
                                  class="colorinput-color bg-warning"
                                ></span>
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="form-label">Size</label>
                          <div class="selectgroup w-100">
                            <label class="selectgroup-item">
                              <input
                                type="radio"
                                name="value"
                                value="50"
                                class="selectgroup-input"
                                checked=""
                              />
                              <span class="selectgroup-button">S</span>
                            </label>
                            <label class="selectgroup-item">
                              <input
                                type="radio"
                                name="value"
                                value="100"
                                class="selectgroup-input"
                              />
                              <span class="selectgroup-button">M</span>
                            </label>
                            <label class="selectgroup-item">
                              <input
                                type="radio"
                                name="value"
                                value="150"
                                class="selectgroup-input"
                              />
                              <span class="selectgroup-button">L</span>
                            </label>
                            <label class="selectgroup-item">
                              <input
                                type="radio"
                                name="value"
                                value="200"
                                class="selectgroup-input"
                              />
                              <span class="selectgroup-button">XL</span>
                            </label>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="form-label">Icons input</label>
                          <div class="selectgroup w-100">
                            <label class="selectgroup-item">
                              <input
                                type="radio"
                                name="transportation"
                                value="2"
                                class="selectgroup-input"
                              />
                              <span
                                class="selectgroup-button selectgroup-button-icon"
                                ><i class="icon-screen-smartphone"></i
                              ></span>
                            </label>
                            <label class="selectgroup-item">
                              <input
                                type="radio"
                                name="transportation"
                                value="1"
                                class="selectgroup-input"
                                checked=""
                              />
                              <span
                                class="selectgroup-button selectgroup-button-icon"
                                ><i class="icon-screen-tablet"></i
                              ></span>
                            </label>
                            <label class="selectgroup-item">
                              <input
                                type="radio"
                                name="transportation"
                                value="6"
                                class="selectgroup-input"
                              />
                              <span
                                class="selectgroup-button selectgroup-button-icon"
                                ><i class="icon-screen-desktop"></i
                              ></span>
                            </label>
                            <label class="selectgroup-item">
                              <input
                                type="radio"
                                name="transportation"
                                value="6"
                                class="selectgroup-input"
                              />
                              <span
                                class="selectgroup-button selectgroup-button-icon"
                                ><i class="fa fa-times"></i
                              ></span>
                            </label>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="form-label d-block">Icon input</label>
                          <div
                            class="selectgroup selectgroup-secondary selectgroup-pills"
                          >
                            <label class="selectgroup-item">
                              <input
                                type="radio"
                                name="icon-input"
                                value="1"
                                class="selectgroup-input"
                                checked=""
                              />
                              <span
                                class="selectgroup-button selectgroup-button-icon"
                                ><i class="fa fa-sun"></i
                              ></span>
                            </label>
                            <label class="selectgroup-item">
                              <input
                                type="radio"
                                name="icon-input"
                                value="2"
                                class="selectgroup-input"
                              />
                              <span
                                class="selectgroup-button selectgroup-button-icon"
                                ><i class="fa fa-moon"></i
                              ></span>
                            </label>
                            <label class="selectgroup-item">
                              <input
                                type="radio"
                                name="icon-input"
                                value="3"
                                class="selectgroup-input"
                              />
                              <span
                                class="selectgroup-button selectgroup-button-icon"
                                ><i class="fa fa-tint"></i
                              ></span>
                            </label>
                            <label class="selectgroup-item">
                              <input
                                type="radio"
                                name="icon-input"
                                value="4"
                                class="selectgroup-input"
                              />
                              <span
                                class="selectgroup-button selectgroup-button-icon"
                                ><i class="fa fa-cloud"></i
                              ></span>
                            </label>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="form-label">Your skills</label>
                          <div class="selectgroup selectgroup-pills">
                            <label class="selectgroup-item">
                              <input
                                type="checkbox"
                                name="value"
                                value="HTML"
                                class="selectgroup-input"
                                checked=""
                              />
                              <span class="selectgroup-button">HTML</span>
                            </label>
                            <label class="selectgroup-item">
                              <input
                                type="checkbox"
                                name="value"
                                value="CSS"
                                class="selectgroup-input"
                              />
                              <span class="selectgroup-button">CSS</span>
                            </label>
                            <label class="selectgroup-item">
                              <input
                                type="checkbox"
                                name="value"
                                value="PHP"
                                class="selectgroup-input"
                              />
                              <span class="selectgroup-button">PHP</span>
                            </label>
                            <label class="selectgroup-item">
                              <input
                                type="checkbox"
                                name="value"
                                value="JavaScript"
                                class="selectgroup-input"
                              />
                              <span class="selectgroup-button">JavaScript</span>
                            </label>
                            <label class="selectgroup-item">
                              <input
                                type="checkbox"
                                name="value"
                                value="Ruby"
                                class="selectgroup-input"
                              />
                              <span class="selectgroup-button">Ruby</span>
                            </label>
                            <label class="selectgroup-item">
                              <input
                                type="checkbox"
                                name="value"
                                value="Ruby"
                                class="selectgroup-input"
                              />
                              <span class="selectgroup-button">Ruby</span>
                            </label>
                            <label class="selectgroup-item">
                              <input
                                type="checkbox"
                                name="value"
                                value="C++"
                                class="selectgroup-input"
                              />
                              <span class="selectgroup-button">C++</span>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 col-lg-4">
                        <label class="mb-3"><b>Form Group Default</b></label>
                        <div class="form-group form-group-default">
                          <label>Input</label>
                          <input
                            id="Name"
                            type="text"
                            class="form-control"
                            placeholder="Fill Name"
                          />
                        </div>
                        <div class="form-group form-group-default">
                          <label>Select</label>
                          <select
                            class="form-select"
                            id="formGroupDefaultSelect"
                          >
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                          </select>
                        </div>
                        <label class="mt-3 mb-3"
                          ><b>Form Floating Label</b></label
                        >
                        <div class="form-floating form-floating-custom mb-3">
                          <input
                            type="email"
                            class="form-control"
                            id="floatingInput"
                            placeholder="name@example.com"
                          />
                          <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating form-floating-custom mb-3">
                          <select
                            class="form-select"
                            id="selectFloatingLabel"
                            required
                          >
                            <option selected>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                          </select>
                          <label for="selectFloatingLabel">Select</label>
                        </div>

                        <div class="form-group">
                          <label for="largeInput">Large Input</label>
                          <input
                            type="text"
                            class="form-control form-control-lg"
                            id="largeInput"
                            placeholder="Large Input"
                          />
                        </div>
                        <div class="form-group">
                          <label for="largeInput">Default Input</label>
                          <input
                            type="text"
                            class="form-control form-control"
                            id="defaultInput"
                            placeholder="Default Input"
                          />
                        </div>
                        <div class="form-group">
                          <label for="smallInput">Small Input</label>
                          <input
                            type="text"
                            class="form-control form-control-sm"
                            id="smallInput"
                            placeholder="Small Input"
                          />
                        </div>
                        <div class="form-group">
                          <label for="largeSelect">Large Select</label>
                          <select
                            class="form-select form-control-lg"
                            id="largeSelect"
                          >
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="defaultSelect">Default Select</label>
                          <select
                            class="form-select form-control"
                            id="defaultSelect"
                          >
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="smallSelect">Small Select</label>
                          <select
                            class="form-select form-control-sm"
                            id="smallSelect"
                          >
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-action">
                    <button class="btn btn-success">Submit</button>
                    <button class="btn btn-danger">Cancel</button>
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
                <button
                  type="button"
                  class="changeSideBarColor"
                  data-color="red"
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

    <!-- Google Maps Plugin -->
    <script src="../assets/js/plugin/gmaps/gmaps.js"></script>

    <!-- Sweet Alert -->
    <script src="../assets/js/plugin/sweetalert/sweetalert.min.js"></script>

    <!-- Kaiadmin JS -->
    <script src="../assets/js/kaiadmin.min.js"></script>

    <!-- Kaiadmin DEMO methods, don't include it in your project! -->
    <script src="../assets/js/setting-demo2.js"></script>
  </body>

<!-- Mirrored from themewagon.github.io/kaiadmin-lite/forms/forms.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 Oct 2024 09:43:47 GMT -->
</html>
