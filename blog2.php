<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <title>Top Website, Mobile App Development &amp; Graphics Design Company USA, India, UK, Australia, Dubai &amp; Canada – Ocean Infotech</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&amp;family=Inter:slnt,wght@-10..0,100..900&amp;display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons%401.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link rel="stylesheet" href="lib/animate/animate.min.css" />
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
        /* Custom styles for blog layout */
        .blog-item {
            margin-bottom: 20px;
            padding: 10px;
            background: #f8f8f8;
            border-radius: 5px;
        }

        .blog-item a {
            text-decoration: none;
            color: #333;
        }

        .blog-item a:hover {
            text-decoration: underline;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .blog-sidebar {
                margin-top: 20px;
            }
        }
    </style>
</head>

<body>

    <?php include 'topbar.php'; ?>
    <?php include 'navbar.php'; ?>
    <?php $current_blog = 'blog2'; ?>

    <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center bg-primary">
                    <div class="input-group w-75 mx-auto d-flex">
                        <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                        <span id="search-icon-1" class="btn bg-light border input-group-text p-3"><i class="fa fa-search"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Blog Detail</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active text-primary">Blog Detail</li>
            </ol>
        </div>
    </div>

    <!-- Blog Start -->
    <div class="container-fluid blog py-5 bg-light">
        <div class="container my-5 wow fadeInDown bg-white rounded" data-wow-delay="0.1s" style="padding: 20px;">

            <div class="row">

                <!-- Main Blog Content -->
                <div class="col-lg-8 blog-main">
                    <h1 class="mb-4 wow fadeInUp" data-wow-delay="0.2s">Leverage agile frameworks to provide</h1>

                    <div class="blog-comment d-flex fadeInUp gap-3 justify-content-center mb-3 wow" data-wow-delay="0.3s">
                        <div class="small"><span class="fa fa-user text-primary"></span> Martin.C</div>
                        <div class="small"><span class="fa fa-calendar text-primary"></span> 30 Dec 2025</div>
                        <div class="small"><span class="fa fa-comment-alt text-primary"></span> 6 Comments</div>
                    </div>
                    <hr>
                    <div class="container">
                        <!-- First row for the image -->
                        <div class="row mb-4 justify-content-center">
                            <div class="col-12 text-center">
                                <img src="img/blog-2.png" class="img-fluid wow fadeInLeft" data-wow-delay="0.4s">
                            </div>
                        </div>

                        <!-- Second row for blog content -->
                        <div class="row mb-4">
                            <div class="col-12">
                                <p class="wow fadeInUp" data-wow-delay="0.5s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus, veniam? Velit, optio. Quisquam, debitis.</p>
                                <p class="wow fadeInUp" data-wow-delay="0.6s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, libero! Alias ad eveniet distinctio labore.</p>
                                <h3 class="wow fadeInUp" data-wow-delay="0.7s">How to Pay Down Insurance Bills</h3>
                                <p class="wow fadeInUp" data-wow-delay="0.8s">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, officiis! Similique, nihil expedita! At, aperiam!</p>

                                <blockquote class="blockquote mt-4 wow fadeInUp" data-wow-delay="0.9s">
                                    <p class="mb-0">"The best way to predict the future is to create it."</p>
                                </blockquote>

                                <h4 class="wow fadeInUp" data-wow-delay="1.0s">Conclusion</h4>
                                <p class="wow fadeInUp" data-wow-delay="1.1s">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, rem.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4 blog-sidebar border-left">
                    <h3>Related Posts</h3>

                    <div class="recent-post-bx" <?php if ($current_blog === 'blog1') echo 'style="display: none;"'; ?>>
                        <img src="https://www.oceaninfotech.co.in/blogs_image/1698727718_b-1.jpg" alt="Blog 1: Which Allows You to Pay Down Insurance Bills" class="img-fluid recent-img" />
                        <span class="date-span">3-10-2021</span>
                    </div>
                    <p>
                        <a href="blog1.php" title="Blog 1: Which Allows You to Pay Down Insurance Bills">
                            Blog 1: Which Allows You to Pay Down Insurance Bills
                        </a>
                    </p>

                    <div class="recent-post-bx" <?php if ($current_blog === 'blog3') echo 'style="display: none;"'; ?>>
                        <img src="https://www.oceaninfotech.co.in/blogs_image/1698727820_b3.jpg" alt="Blog 3: Lorem ipsum dolor sit." class="img-fluid recent-img" />
                        <span class="date-span">30 Dec 2025</span>
                    </div>
                    <p>
                        <a href="blog3.php" title="Blog 3: Lorem ipsum dolor sit.">
                            Blog 3: Lorem ipsum dolor sit.
                        </a>
                    </p>
                </div>

            </div>
        </div>
    </div>
    <!-- Blog End -->

    <!-- Footer Start -->
    <?php include 'footer.php'; ?>
    <!-- Footer End -->

    <!-- Copyright Start -->
    <?php include 'copyrights.php'; ?>
    <!-- Copyright End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-warning btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
