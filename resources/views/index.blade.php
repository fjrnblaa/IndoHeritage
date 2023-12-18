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
    <link rel="stylesheet" href="css/reviewedStyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
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
                    <a href="/" class="nav-item nav-link active">Home</a>
                    <a href="/about" class="nav-item nav-link">About</a>
                    <a href="/cultures" class="nav-item nav-link">Cultures</a>
                    <a href="/purpose" class="nav-item nav-link">Purpose</a>
                    <a href="/review" class="nav-item nav-link">Review</a>
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
                        <h1 class="display-3 text-white mb-3 animated slideInDown">Explore Indonesia With Us</h1>
                        <p class="fs-4 text-white mb-4 animated slideInDown">Indonesia's culture is a vibrant tapestry of traditions, arts, religions, and culinary delights.</p>
                    </div>
                </div>
            </div>
            <div class="position-relative w-75 mx-auto animated slideInDown">
                <form action="{{ url('/cultures') }}">
                    <input class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5" type="text" name="search" placeholder="Eg: Batik" required>
                    <input type="submit" value="Seach" class="btn btn-primary rounded-pill py-2 px-4 position-absolute top-0 end-0 me-2" style="margin-top: 7px;">
                </form>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/komodo.jpg" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">About Us</h6>
                    <h1 class="mb-4">Welcome to <span class="text-primary">Indo Heritage</span></h1>
                    <p class="mb-4">Selamat datang di situs web kami, tempat yang dipenuhi kekayaan budaya Indonesia! Kami dengan bangga menyajikan informasi tentang keberagaman budaya Indonesia yang hidup dan bersemangat. 
                        Dari Sabang hingga Merauke, dari Sumatra hingga Papua, negara kami memiliki warisan budaya yang menakjubkan. </p>
                    <p class="mb-4"> Kami mengundang Anda untuk menjelajahi harta karun tersembunyi dan memahami kekayaan budaya yang menyatukan kita sebagai bangsa. 
                    Mari kita merayakan dan menyelami keajaiban tak ternilai dari budaya Indonesia bersama-sama. Nikmati perjalanan budaya yang tak terlupakan di situs web kami! </p>                   
                    <a class="btn btn-primary py-3 px-5 mt-2" href="/about">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Destination Start -->
    <div class="container-xxl py-5 destination">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Cultures</h6>
                <h1 class="mb-5">Explore Indonesia</h1>
            </div>
            <div class="row g-3">
                <div class="col-lg-7 col-md-6">
                    <div class="row g-3">
                        <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="img/wae.jpg" alt="">
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="img/soto.jpg" alt="">
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="img/ode.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 200px;">
                    <a class="position-relative d-block h-100 overflow-hidden" href="">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/bali.jpg" alt="" style="object-fit: cover;" width="200px">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Destination Start -->


    <!-- Package Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4 justify-content-center">
                @php $counter = 0 @endphp
                @foreach ($contents as $content)
                    @if ($counter == 3)
                        @break
                    @endif
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
                    @php $counter++ @endphp
                @endforeach
            </div>
            <br><br>
            <div class="text-center">
                <a href="/cultures" class="btn btn-primary rounded-pill py-3 px-5" style="font-size: 20px;"><strong>See More Cultures</strong></a>
            </div>
        </div>
    </div>
    <!-- Package End -->

    <!-- Purpose Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center pb-4 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Purpose</h6>
                <h1 class="mb-5">What'll you get</h1>
            </div>
            <div class="row gy-5 gx-4 justify-content-center">
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative border border-primary pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                            <i class="fa fa-flag fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4">Pelestarian Budaya</h5>
                        <hr class="w-25 mx-auto bg-primary mb-1">
                        <hr class="w-50 mx-auto bg-primary mt-0">
                        <p class="mb-0">Website Indo Heritage dapat menjadi wadah untuk mengabadikan pengetahuan, kisah, dan praktik budaya yang dapat terancam punah. 
                            Dengan membagikan informasi budaya, upaya pelestarian budaya dapat dilakukan dengan cara yang lebih luas dan dapat diakses oleh banyak orang.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="position-relative border border-primary pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                            <i class="fa fa-book fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4">Pendidikan</h5>
                        <hr class="w-25 mx-auto bg-primary mb-1">
                        <hr class="w-50 mx-auto bg-primary mt-0">
                        <p class="mb-0">Website Indo Heritage dapat menjadi sumber pengetahuan yang berharga bagi masyarakat lokal dan internasional. 
                            Tujuan utamanya adalah untuk memberikan informasi yang akurat dan mendalam tentang budaya Indonesia, termasuk seni, tradisi, adat istiadat, dan kekayaan budaya lainnya</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="position-relative border border-primary pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                            <i class="fa fa-plane fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4">Pendukung Pariwisata</h5>
                        <hr class="w-25 mx-auto bg-primary mb-1">
                        <hr class="w-50 mx-auto bg-primary mt-0">
                        <p class="mb-0">Website Indo Heritage juga dapat berperan dalam mempromosikan kekayaan budaya Indonesia sebagai daya tarik wisata.
                            Website ini dapat membantu memperluas pemahaman dan minat wisatawan dalam mengunjungi tempat-tempat budaya di Indonesia.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Process Start -->

    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Review</h6>
                <h1 class="mb-5">Our Clients Say!!!</h1>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <div class="wrapper">
        @php $counter = 0 @endphp
        @foreach ($review as $review)
            @if ($counter == 3)
                @break
            @endif
            <div class="box">
            <i class="fas fa-quote-left quote"></i>
            <p>{{$review->review}}</p>
            <div class="content">
                <div class="info">
                <div class="name">{{$review->name}}</div>
                </div>
            </div>
            </div>
            @php $counter++ @endphp
        @endforeach
        <br><br>
        <a href="/review" class="btn btn-primary rounded-pill py-3 px-5" style="font-size: 20px;"><strong>See More</strong></a>
    </div>

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
                        &copy; <a class="border-bottom" href="/">Indo Heritage</a>, All Right Reserved.
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