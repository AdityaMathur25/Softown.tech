<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SOFTOWN - Your Own Marketplace</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="../assets/images/12.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../css/main.css" rel="stylesheet">
</head>
<body>
    <div class="container-xxl bg-white p-0">


       <!-- Navbar & Hero Start -->
       <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="m-0"><i class="fa fa-lock me-3"></i>SOFTOWN</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="../" class="nav-item nav-link ">Home</a>
                        <a href="../about-us/" class="nav-item nav-link ">About</a>
                        <!-- <a href="domain.html" class="nav-item nav-link">Domain</a>
                         <a href="hosting.html" class="nav-item nav-link">Hosting</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="team.html" class="dropdown-item">Our Team</a>
                                <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                <a href="comparison.html" class="dropdown-item">Comparison</a>
                            </div>
                        </div> -->
                        <a href="./" class="nav-item nav-link active">Contact</a>
                    </div>
                    <!-- <butaton type="button" class="btn text-secondary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></butaton> -->
                    <a href="../Login/" class="btn btn-secondary py-2 px-4 ms-3">Login</a>
                </div>
            </nav>

            <div class="container-xxl py-5 bg-primary hero-header mb-5">
                <div class="container my-5 py-5 px-lg-5">
                    <div class="row g-5 pt-5">
                        <div class="col-12 text-center text-lg-start">
                            <h1 class="display-4 text-white animated slideInLeft">Contact Us</h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center justify-content-lg-start animated slideInLeft">
                                    <li class="breadcrumb-item"><a class="text-white" href="../">Home</a></li>
                                    <li class="breadcrumb-item text-white active" aria-current="page">Contact Us</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Full Screen Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content" style="background: rgba(29, 40, 51, 0.8);">
                    <div class="modal-header border-0">
                        <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center justify-content-center">
                        <div class="input-group" style="max-width: 600px;">
                            <input type="text" class="form-control bg-transparent border-light p-3" placeholder="Type search keyword">
                            <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Full Screen Search End -->


        <!-- Contact Start -->
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="section-title position-relative text-center mx-auto mb-5 pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Contact For Any Query</h1>
                    <p class="mb-1">For any queries related to our products or services, please feel free to contact us at Softown.tech. Our friendly and knowledgeable customer support team is available to assist you with any questions or concerns you may have.</p>
                </div>
                <div class="row g-5">
                    <div class="col-lg-7 col-md-6">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <form action="../send.php" method="POST">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                    <input type="hidden" name="loc" value="index">
                                        <div class="form-floating">
                                            <input name ="name" type="text" class="form-control" id="name" placeholder="Your Name">
                                            <label for="name">Your Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input name="email" type="email" class="form-control" id="email" placeholder="Your Email">
                                            <label for="email">Your Email</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject">
                                            <label for="subject">Subject</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea name="message" class="form-control" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>
                                            <label for="message">Message</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button name="message-send" class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="section-title position-relative mx-auto mb-4 pb-4">
                            <h3 class="fw-bold mb-0">Customer Support</h3>
                        </div>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>697 Mahaveer nagar , Jaipur</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+91 8104537999</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>Softown@gmail.com</p>
                        <div class="border rounded text-center p-4 mt-4">
                            <h3 class="fw-bold mb-4">Need Any Help?</h3>
                            <a class="btn btn-primary py-3 px-5" href="https://wa.me/918104537999/?text=Hi">Let's Chat</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->
        

        <!-- Footer Start -->
        <div class="container-fluid bg-primary text-white footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <div class="row gy-5 gx-4 pt-5">
                    <div class="col-12">
                        <h5 class="fw-bold text-white mb-4">Subscribe Our Newsletter</h5>
                        <div class="position-relative" style="max-width: 400px;">
                            <form action="../newsletter.php" method="post">
                                <input type="hidden" name="loc" value="about">
                                <input class="form-control bg-white border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Enter your email" name="mail">
                                <button type="submit" name="message-send" class="btn btn-primary py-2 px-3 position-absolute top-0 end-0 mt-2 me-2">Submit</button>
                            </form>

                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12">
                        <div class="row gy-5 g-4">
                            <div class="col-md-6">
                                <h5 class="fw-bold text-white mb-4">More From Us</h5>
                                <a class="btn btn-link" href="">About Us</a>
                                <a class="btn btn-link" href="">Contact Us</a>
                                <a class="btn btn-link" href="">Privacy Policy</a>
                                <a class="btn btn-link" href="">Terms & Condition</a>
                                <a class="btn btn-link" href="">Support</a>
                            </div>
                            <!-- <div class="col-md-6">
                                <h5 class="fw-bold text-white mb-4">Our Services</h5>
                                <a class="btn btn-link" href="">Domain Register</a>
                                <a class="btn btn-link" href="">Shared Hosting</a>
                                <a class="btn btn-link" href="">VPS Hosting</a>
                                <a class="btn btn-link" href="">Dedicated Hosting</a>
                                <a class="btn btn-link" href="">Reseller Hosting</a>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h5 class="fw-bold text-white mb-4">Get In Touch</h5>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>697 Mahaveer nagar , Jaipur</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+91 8104537999</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>Softown@gmail.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-lg-n5">
                        <div class="bg-light rounded" style="padding: 30px;">
                            <?php
                            include '../message_sender.php';
                            if (isset($_POST["message-send"])) {
                                # code...
                                $name = $_POST['name'];
                                $email = $_POST['email'];
                                $message_send = $_POST['message'];
                                $receiver = '697jpr@gmail.com';
                                $subject = "Response on Enquiry Form by " . $name;
                                $message = 'Name : ' . $name . '<br>Email Id : ' . $email . '<br> Message : ' . $message_send;
                                // $receiver,$subject,$message
                                sendm($receiver, $subject, $message);
                                header('location : ./');
                            }

                            ?>
                            <form method="post" action="../send.php">
                                <input type="hidden" name="loc" value="about">
                                <input type="text" class="form-control border-0 py-2 mb-2" name="name" placeholder="Name">
                                <input type="email" class="form-control border-0 py-2 mb-2" name="email" placeholder="Your Email">
                                <textarea class="form-control border-0 mb-2" rows="2" name="message" placeholder="Message"></textarea>
                                <button type="submit" name="message-send" class="btn btn-primary w-100 py-2">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container px-lg-5">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">Softown.tech</a>, All Right Reserved.

                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a class="border-bottom" href="https://adityamathur25.github.io/Portfolio/">Aditya</a> with ❤️
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-secondary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/wow/wow.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/waypoints/waypoints.min.js"></script>
    <script src="../lib/counterup/counterup.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>