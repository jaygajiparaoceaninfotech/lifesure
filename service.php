<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themewagon.github.io/LifeSure/service.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Oct 2024 04:28:49 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <title>LifeSure - Life Insurance Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&amp;family=Inter:slnt,wght@-10..0,100..900&amp;display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https:///use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons%401.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link rel="stylesheet" href="lib/animate/animate.min.css" />
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <!-- Spinner Start -->
    <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div> -->
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <?php
    include 'topbar.php';
    ?>
    <!-- Topbar End -->

    <!-- Navbar & Hero Start -->
    <?php
    include 'navbar.php';
    ?>
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
                        <span id="search-icon-1" class="btn bg-light border nput-group-text p-3"><i class="fa fa-search"></i></span>
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
                <!-- <li class="breadcrumb-item"><a href="#">Pages</a></li> -->
                <li class="breadcrumb-item active text-primary">Service</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->


    <!-- Service Start -->
    <div class="container-fluid service py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Our Services</h4>
                <h1 class="display-4 mb-4">We Provide Best Services</h1>
                <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis
                    cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt
                    sint dolorem autem obcaecati, ipsam mollitia hic.
                </p>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="img/blog-1.png" class="img-fluid rounded-top w-100" alt="">
                            <div class="service-icon p-3">
                                <i class="fa fa-users fa-2x"></i>
                            </div>
                        </div>
                        <!-- Service Content with Read More Button -->
                        <div class="service-content p-4">
                            <div class="service-content-inner">
                                <a href="#" class="d-inline-block h4 mb-4">Life Insurance</a>
                                <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis,
                                    eum!</p>
                                <a class="btn btn-primary rounded-pill py-2 px-4" href="#" data-bs-toggle="modal"
                                    data-bs-target="#readMoreModal">Read More</a>
                            </div>
                        </div>

                        <!-- Modal Structure -->
                        <div class="modal fade" id="readMoreModal" tabindex="-1" aria-labelledby="readMoreModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="readMoreModalLabel">What is Life Insurance?</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <section>
                                            <h2 class="mb-4">What is Life Insurance?</h2>
                                            <p>Life insurance is a contract between an insurer and a policyholder in
                                                which the insurer guarantees payment of a death benefit to named
                                                beneficiaries upon the death of the insured. The policyholder pays a
                                                premium, either regularly or as a lump sum.</p>

                                            <h3 class="mt-4 mb-3">Types of Life Insurance</h3>
                                            <ul>
                                                <li><strong>Term Life Insurance:</strong> Provides coverage for a
                                                    specific period.</li>
                                                <li><strong>Whole Life Insurance:</strong> A permanent policy with a
                                                    savings component.</li>
                                                <li><strong>Universal Life Insurance:</strong> Offers flexibility in
                                                    premium payments and death benefits.</li>
                                            </ul>

                                            <h3 class="mt-4 mb-3">Why You Need Life Insurance</h3>
                                            <p>Life insurance provides financial protection for your loved ones in case
                                                of your untimely death. It can cover funeral costs, replace lost income,
                                                and even pay off outstanding debts such as a mortgage.</p>

                                            <blockquote class="blockquote mt-4">
                                                <p class="mb-0">"Life insurance isn’t for you. It’s for those you leave
                                                    behind."</p>
                                            </blockquote>

                                            <h3 class="mt-4 mb-3">How to Choose the Right Policy</h3>
                                            <p>Choosing the right life insurance policy depends on several factors,
                                                including your financial goals, the needs of your family, and how much
                                                coverage you can afford. It’s recommended to consult with a financial
                                                advisor to ensure you get the right plan.</p>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="img/blog-2.png" class="img-fluid rounded-top w-100" alt="">
                            <div class="service-icon p-3">
                                <i class="fa fa-hospital fa-2x"></i>
                            </div>
                        </div>
                        <!-- Health Insurance Service Content with Read More Button -->
                        <div class="service-content p-4">
                            <div class="service-content-inner">
                                <a href="#" class="d-inline-block h4 mb-4">Health Insurance</a>
                                <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis,
                                    eum!</p>
                                <a class="btn btn-primary rounded-pill py-2 px-4" href="#" data-bs-toggle="modal"
                                    data-bs-target="#healthReadMoreModal">Read More</a>
                            </div>
                        </div>

                        <!-- Modal Structure for Health Insurance -->
                        <div class="modal fade" id="healthReadMoreModal" tabindex="-1"
                            aria-labelledby="healthReadMoreModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="healthReadMoreModalLabel">What is Health Insurance?
                                        </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <section>
                                            <h2 class="mb-4">What is Health Insurance?</h2>
                                            <p>Health insurance is a type of insurance coverage that pays for medical
                                                and surgical expenses incurred by the insured. It is designed to offer
                                                financial support for medical treatments, including doctor's visits,
                                                hospital stays, prescription medications, and surgeries.</p>

                                            <h3 class="mt-4 mb-3">Types of Health Insurance</h3>
                                            <ul>
                                                <li><strong>Individual Health Insurance:</strong> Coverage for a single
                                                    person.</li>
                                                <li><strong>Family Floater Insurance:</strong> Provides coverage for the
                                                    entire family under one plan.</li>
                                                <li><strong>Critical Illness Insurance:</strong> Covers severe illnesses
                                                    like cancer, heart attacks, and more.</li>
                                            </ul>

                                            <h3 class="mt-4 mb-3">Why You Need Health Insurance</h3>
                                            <p>Health insurance protects against high medical costs and ensures that you
                                                and your family receive the necessary treatments without financial
                                                burden. It is an essential part of a comprehensive financial plan.</p>

                                            <blockquote class="blockquote mt-4">
                                                <p class="mb-0">"Health is the greatest gift. Protect it with the right
                                                    coverage."</p>
                                            </blockquote>

                                            <h3 class="mt-4 mb-3">How to Choose the Right Policy</h3>
                                            <p>Choosing the right health insurance policy depends on your healthcare
                                                needs, age, and budget. Consider factors such as coverage limits,
                                                co-pays, and the network of hospitals included in the plan.</p>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="img/blog-3.png" class="img-fluid rounded-top w-100" alt="">
                            <div class="service-icon p-3">
                                <i class="fa fa-car fa-2x"></i>
                            </div>
                        </div>
                        <!-- Car Insurance Section with Read More Button and Modal -->
                        <div class="service-content p-4">
                            <div class="service-content-inner">
                                <a href="#" class="d-inline-block h4 mb-4">Car Insurance</a>
                                <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis,
                                    eum!</p>
                                <a class="btn btn-primary rounded-pill py-2 px-4" href="#" data-bs-toggle="modal"
                                    data-bs-target="#carInsuranceModal">Read More</a>
                            </div>
                        </div>

                        <!-- Car Insurance Modal Structure -->
                        <div class="modal fade" id="carInsuranceModal" tabindex="-1"
                            aria-labelledby="carInsuranceModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="carInsuranceModalLabel">What is Car Insurance?</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <section>
                                            <h2 class="mb-4">What is Car Insurance?</h2>
                                            <p>Car insurance is a contract between you and the insurer that provides
                                                financial protection against physical damage or bodily injury resulting
                                                from traffic collisions or other incidents involving your vehicle.</p>

                                            <h3 class="mt-4 mb-3">Types of Car Insurance</h3>
                                            <ul>
                                                <li><strong>Liability Coverage:</strong> Covers damages to others if
                                                    you're at fault in an accident.</li>
                                                <li><strong>Collision Coverage:</strong> Covers damages to your vehicle
                                                    in case of a collision.</li>
                                                <li><strong>Comprehensive Coverage:</strong> Covers damage caused by
                                                    events like theft, vandalism, or natural disasters.</li>
                                            </ul>

                                            <h3 class="mt-4 mb-3">Why You Need Car Insurance</h3>
                                            <p>Car insurance is required in most places by law and protects you from
                                                financial loss in the event of an accident, damage, or theft. It also
                                                provides liability protection for injuries or damages to others.</p>

                                            <blockquote class="blockquote mt-4">
                                                <p class="mb-0">"Driving without car insurance is like driving without
                                                    brakes."</p>
                                            </blockquote>

                                            <h3 class="mt-4 mb-3">How to Choose the Right Policy</h3>
                                            <p>When selecting car insurance, consider factors such as coverage options,
                                                premiums, deductibles, and your driving history. It's essential to find
                                                a balance between comprehensive coverage and affordable premiums.</p>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="img/blog-4.png" class="img-fluid rounded-top w-100" alt="">
                            <div class="service-icon p-3">
                                <i class="fa fa-home fa-2x"></i>
                            </div>
                        </div>
                        <!-- Home Insurance Section with Read More Button and Modal -->
                        <div class="service-content p-4">
                            <div class="service-content-inner">
                                <a href="#" class="d-inline-block h4 mb-4">Home Insurance</a>
                                <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis,
                                    eum!</p>
                                <a class="btn btn-primary rounded-pill py-2 px-4" href="#" data-bs-toggle="modal"
                                    data-bs-target="#homeInsuranceModal">Read More</a>
                            </div>
                        </div>

                        <!-- Home Insurance Modal Structure -->
                        <div class="modal fade" id="homeInsuranceModal" tabindex="-1"
                            aria-labelledby="homeInsuranceModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="homeInsuranceModalLabel">What is Home Insurance?
                                        </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <section>
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Testimonial Start -->
    <div class="container-fluid testimonial pb-5">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Testimonial</h4>
                <h1 class="display-4 mb-4">What Our Customers Are Saying</h1>
                <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.
                </p>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.2s">
                <div class="testimonial-item bg-light rounded">
                    <div class="row g-0">
                        <div class="col-4  col-lg-4 col-xl-3">
                            <div class="h-100">
                                <img src="img/testimonial-1.jpg" class="img-fluid h-100 rounded" style="object-fit: cover;" alt="">
                            </div>
                        </div>
                        <div class="col-8 col-lg-8 col-xl-9">
                            <div class="d-flex flex-column my-auto text-start p-4">
                                <h4 class="text-dark mb-0">Client Name</h4>
                                <p class="mb-3">Profession</p>
                                <div class="d-flex text-primary mb-3">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p class="mb-0">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim error molestiae aut modi corrupti fugit eaque rem nulla incidunt temporibus quisquam,
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item bg-light rounded">
                    <div class="row g-0">
                        <div class="col-4  col-lg-4 col-xl-3">
                            <div class="h-100">
                                <img src="img/testimonial-2.jpg" class="img-fluid h-100 rounded" style="object-fit: cover;" alt="">
                            </div>
                        </div>
                        <div class="col-8 col-lg-8 col-xl-9">
                            <div class="d-flex flex-column my-auto text-start p-4">
                                <h4 class="text-dark mb-0">Client Name</h4>
                                <p class="mb-3">Profession</p>
                                <div class="d-flex text-primary mb-3">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star text-body"></i>
                                </div>
                                <p class="mb-0">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim error molestiae aut modi corrupti fugit eaque rem nulla incidunt temporibus quisquam,
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item bg-light rounded">
                    <div class="row g-0">
                        <div class="col-4  col-lg-4 col-xl-3">
                            <div class="h-100">
                                <img src="img/testimonial-3.jpg" class="img-fluid h-100 rounded" style="object-fit: cover;" alt="">
                            </div>
                        </div>
                        <div class="col-8 col-lg-8 col-xl-9">
                            <div class="d-flex flex-column my-auto text-start p-4">
                                <h4 class="text-dark mb-0">Client Name</h4>
                                <p class="mb-3">Profession</p>
                                <div class="d-flex text-primary mb-3">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star text-body"></i>
                                    <i class="fas fa-star text-body"></i>
                                </div>
                                <p class="mb-0">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim error molestiae aut modi corrupti fugit eaque rem nulla incidunt temporibus quisquam,
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Footer Start -->
    <?php
    include 'footer.php';
    ?>
    <!-- Footer End -->

    <!-- Copyright Start -->
    <?php
    include 'copyrights.php';
    ?>
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


<!-- Mirrored from themewagon.github.io/LifeSure/service.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Oct 2024 04:28:49 GMT -->

</html>