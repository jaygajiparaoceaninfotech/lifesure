<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>LifeSure - Life Insurance Website Template</title>

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Inter:wght@100;300;500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link rel="stylesheet" href="lib/animate/animate.min.css">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <!-- Topbar Start -->
    <?php include 'topbar.php'; ?>
    <!-- Topbar End -->

    <!-- Navbar & Hero Start -->
    <?php include 'navbar.php'; ?>
    <!-- Navbar & Hero End -->

    <!-- Modal Search Start -->
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
    <!-- Modal Search End -->

    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Services</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active text-primary">Service</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Service Start -->
    <div class="container-fluid service py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-8">
                    <h2 class="mb-4">What is Life Insurance?</h2>
                    <p>Life insurance is a contract between an insurer and a policyholder in which the insurer guarantees payment of a death benefit to named beneficiaries upon the death of the insured. The policyholder pays a premium, either regularly or as a lump sum.</p>

                    <h3 class="mt-4 mb-3">Types of Life Insurance</h3>
                    <ul>
                        <li><strong>Term Life Insurance:</strong> Provides coverage for a specific period.</li>
                        <li><strong>Whole Life Insurance:</strong> A permanent policy with a savings component.</li>
                        <li><strong>Universal Life Insurance:</strong> Offers flexibility in premium payments and death benefits.</li>
                    </ul>

                    <h3 class="mt-4 mb-3">Why You Need Life Insurance</h3>
                    <p>Life insurance provides financial protection for your loved ones in case of your untimely death. It can cover funeral costs, replace lost income, and even pay off outstanding debts such as a mortgage.</p>

                    <blockquote class="blockquote mt-4">
                        <p class="mb-0">"Life insurance isn’t for you. It’s for those you leave behind."</p>
                    </blockquote>

                    <h3 class="mt-4 mb-3">How to Choose the Right Policy</h3>
                    <p>Choosing the right life insurance policy depends on several factors, including your financial goals, the needs of your family, and how much coverage you can afford. It’s recommended to consult with a financial advisor to ensure you get the right plan.</p>
                </div>

                <!-- Sidebar -->
                <div class="col-md-4">
                    <div class="p-4 mb-4 bg-light rounded">
                        <h4 class="font-italic">About</h4>
                        <p>We are dedicated to providing the best information about life insurance to help you make informed decisions for your future.</p>
                    </div>

                    <div class="p-4">
                        <h4 class="font-italic">Recent Posts</h4>
                        <ul class="list-unstyled">
                            <li><a href="#">How Much Life Insurance Do You Need?</a></li>
                            <li><a href="#">The Benefits of Term vs Whole Life Insurance</a></li>
                            <li><a href="#">Top 5 Myths About Life Insurance</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Footer Start -->
    <?php include 'footer.php'; ?>
    <!-- Footer End -->

    <!-- Copyright Start -->
    <?php include 'copyrights.php'; ?>
    <!-- Copyright End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>

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
