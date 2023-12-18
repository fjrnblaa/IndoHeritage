
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Indo Heritage</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <!-- <link href="img/favicon.ico" rel="icon"> -->

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/reviewStyle.css">
</head>
<body>
<!-- Spinner Start -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>Cikampek,Malang, Indonesia</small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+62 857 6656 0671</small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>indoheritage@gmail.com</small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i class="fab fa-youtube fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0">
                <h1 class="text-primary m-0">Indo Heritage</h1>
                <div class="nama-website" color="red">
                    <!-- <img src="img/soto.jpg" alt="Logo" width="100%" height="100%"> -->
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="/" class="nav-item nav-link">Home</a>
                    <a href="/about" class="nav-item nav-link">About</a>
                    <a href="/cultures" class="nav-item nav-link active">Cultures</a>
                    <a href="/purpose" class="nav-item nav-link">Purpose</a>
                    <a href="/review" class="nav-link">Review</a>
                    <a href="/contact" class="nav-item nav-link">Contact</a>
                </div>
                @guest
                    <a href="/index" class="btn btn-primary rounded-pill py-2 px-4">Register</a>
                @else
                    <a href="/logout" class="btn btn-primary rounded-pill py-2 px-4">Logout</a>
                @endguest
            </div>
        </nav>

        <div class="container-fluid bg-primary py-5 mb-5 hero-header">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white mb-3 animated slideInDown">Cultures</h1>
                    </div>
                </div>
            </div>
            <div class="position-relative w-75 mx-auto animated slideInDown">
                <form action="{{ url('/cultures') }}">
                    <input class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5" type="text" name="search" placeholder="Eg: Batik">
                    <input type="submit" value="Search" class="btn btn-primary rounded-pill py-2 px-4 position-absolute top-0 end-0 me-2" style="margin-top: 7px;">
                </form>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->

    <!-- Package Start -->
    <div class="container-xxl py-4">
        <div class="container">
            @if ($contents->isEmpty())
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h3 class="mb-5">No Result Found</h3>
                </div>
            @else
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="mb-5">Budaya Indonesia</h1>
                </div>
                <div class="row g-4 justify-content-center">
                    @foreach ($contents as $content)
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="package-item">
                                <div style="width: 100%;" class="overflow-hidden">
                                    <div style="position: relative; width: 100%; padding-top: 100%;">
                                    <img class="img-fluid image-wrap" src="{{ asset('storage/' . $content->image) }}" alt="" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
                                    </div>
                                </div>
                                <div class="text-right p-4">
                                    <h5 style="word-wrap: break-word;">{{$content->title}}</h5>
                                    <p style="word-wrap: break-word; display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 5; overflow: hidden; text-overflow: ellipsis;">{!! nl2br($content->description) !!}</p>                        
                                    <div class="position-relative w-75 mx-auto animated slideInDown">
                                        <div class="d-flex justify-content-center">
                                            <a href="/cultures/{{$content->code}}" class="btn btn-primary rounded-pill py-2 px-4" style="margin-top: 7px;">Read</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <br>
                <div class="d-flex justify-content-center">
                    {{ $contents->links() }}
                </div>
            @endif
        </div>
    </div>
    <!-- Package End -->

    <!-- Footer Start -->
 <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Company</h4>
                    <a class="btn btn-link" href="/about">About Us</a>
                    <a class="btn btn-link" href="/contact">Contact Us</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Cikampek,Malang, Indonesia</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+62 857 6656 0671</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>indoheritage@gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Newsletter</h4>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Indo Heritage</a>, All Right Reserved.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>













