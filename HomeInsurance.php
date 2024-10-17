<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <title>Health Insurance</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&amp;family=Inter:slnt,wght@-10..0,100..900&amp;display=swap"
        rel="stylesheet">

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
        /* Add this CSS */
        body {
            background-color: #f8f9fa;
            /* Light gray background for the whole page */
        }

        section {
            background-color: white;
            /* White background for the section */
            border-radius: 15px;
            /* Rounded borders */
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            /* Subtle shadow for depth */
            padding: 30px;
            /* Spacing inside the section */
            margin: 20px;
            /* Spacing outside the section */
            animation: fadeInLeft 1s;
            /* Fade-in effect from the left */
        }

        @keyframes fadeInLeft {
            from {
                opacity: 0;
                transform: translateX(-50px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
    </style>
</head>

<body>

    <!-- Topbar Start -->
    <?php include 'topbar.php'; ?>
    <!-- Topbar End -->

    <!-- Navbar & Hero Start -->
    <?php include 'navbar.php'; ?>
    <!-- Navbar & Hero End -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s"
                style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInDown;">Home Insurance</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s"
                style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInDown;">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <!-- <li class="breadcrumb-item"><a href="#">Pages</a></li> -->
                <li class="breadcrumb-item active text-primary">Home Insurance</li>
            </ol>
        </div>
    </div>
    <!-- Life Insurance Content -->
    <section>
        <div class="service-img" style="text-align: center;"> <!-- Centering the image -->
            <img src="img/blog-4.png" alt="" style="max-width: 100%; height: auto; display: inline-block;">
            <!-- Responsive properties -->
            <div class="service-icon p-3" style="text-align: center;">
                <i class="fa fa-users fa-2x"></i>
            </div>
        </div>
        <hr>
        <h2 class="mb-4">What is Home Insurance?</h2>
        <p>Home insurance is a type of property insurance that provides coverage for
            a private residence. It protects homeowners from financial losses due to
            disasters, theft, and liability claims.</p>

        <h3 class="mt-4 mb-3">Types of Home Insurance</h3>
        <ul>
            <li><strong>Building Insurance:</strong> Covers the structure of your
                home, including walls, roof, and built-in fixtures.</li>
            <li><strong>Contents Insurance:</strong> Covers personal belongings
                inside your home, such as furniture, electronics, and clothing.</li>
            <li><strong>Liability Insurance:</strong> Protects you against legal
                claims for injury or damage to other people or property.</li>
        </ul>

        <h3 class="mt-4 mb-3">Why You Need Home Insurance</h3>
        <p>Home insurance provides financial protection and peace of mind in case of
            damage, theft, or liability claims. Most mortgage lenders require home
            insurance to protect their investment.</p>

        <blockquote class="blockquote mt-4">
            <p class="mb-0">"Home insurance is not just a policy; it’s a protection
                plan for your sanctuary."</p>
        </blockquote>

        <h3 class="mt-4 mb-3">How to Choose the Right Policy</h3>
        <p>When selecting home insurance, consider coverage options, deductibles,
            and premium costs. It’s important to assess the value of your home and
            belongings to determine the right level of coverage.</p>
    </section>


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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const dateElement = document.querySelector(".blog-categiry span");
            const currentDate = new Date().toLocaleDateString('en-GB'); // formats the date as dd-mm-yyyy
            dateElement.textContent = currentDate;
        });
    </script>

</body>

</html>