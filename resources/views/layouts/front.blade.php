<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>HNJM | Front</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('front/img/logo.png') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('front/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('front/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('front/css/style.css') }}" rel="stylesheet">


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>



    <!-- Topbar Start -->
    <div class="container-fluid bg-light p-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">

                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="far fa-calendar text-primary me-2"></small>
                    <small>
                        <script type="text/javascript">
                            var tab_mois=new Array("Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre");
                            var ladate=new Date()
                            document.write("Nous sommes le : ");
                            document.write(ladate.getDate()+" "+(tab_mois[ladate.getMonth()])+" "+ladate.getFullYear()+", "+ladate.getHours()+" : "+ladate.getMinutes());
                            </script>
                    </small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <a href="mailto:journal.hnjm@gmail.com" target="blank">  <small class="fa fa-envelope text-primary me-2"></small>
                    <small class="text-dark">journal.hnjm@gmail.com</small> </a>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="btn btn-sm-square rounded-circle bg-white text-primary me-1" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-sm-square rounded-circle bg-white text-primary me-1" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-sm-square rounded-circle bg-white text-primary me-1" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-sm-square rounded-circle bg-white text-primary me-0" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 wow fadeIn" data-wow-delay="0.1s">
        <a href="{{ route('acceuil') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h3 class="m-0 text-primary"><img src="{{ asset('front/img/logo.png') }}" class="me-2">HNJM</h3>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{ route('acceuil') }}" class="nav-item nav-link">Acceuil</a>
                <a href="{{ route('actualiteview') }}" class="nav-item nav-link">Actualite</a>
                <a href="{{ route('archive') }}" class="nav-item nav-link">Archive</a>
                <a href="{{ route('articleview') }}" class="nav-item nav-link">Article</a>
                <a href="{{ route('comite') }}" class="nav-item nav-link">Comite</a>
                <a href="{{ route('instr') }}" class="nav-item nav-link">Instruction</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Congres</a>
                    <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                        <a href="{{ route('programcongre') }}" class="dropdown-item">Programme Congres</a>
                        <a href="{{ route('resumecongre') }}" class="dropdown-item">Publication Resume</a>
                    </div>
                </div>
                <a href="{{ route('viewphoto') }}" class="nav-item nav-link">Photos du moi</a>
                <a href="{{ route('viewthese') }}" class="nav-item nav-link">These et Memoire</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    @yield('content')
<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top "><i class="bi bi-arrow-up"></i></a>
 <!-- Footer Start -->
 <div class="container-fluid bg-dark text-light footer  wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="#">HNJM</a>, All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Designed By <a class="border-bottom" href="">ErnestoRabutin</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->





<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('front/lib/wow/wow.min.js') }}"></script>
<script src="{{ asset('front/lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('front/lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('front/lib/counterup/counterup.min.js') }}"></script>
<script src="{{ asset('front/lib/owlcarousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('front/lib/tempusdominus/js/moment.min.js') }}"></script>
<script src="{{ asset('front/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
<script src="{{ asset('front/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

<!-- Template Javascript -->
<script src="{{ asset('front/js/main.js') }}"></script>
<script src="{{asset('back/vendor/tinymce/tinymce.min.js')}}"></script>
<script src="https://cdn.tiny.cloud/1/myapihere/tinymce/5/tinymce.min.js"></script>
<script>tinymce.init({selector:'textarea'});</script>
</body>

</html>
