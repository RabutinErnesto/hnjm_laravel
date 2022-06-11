<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>HNJM | Admin</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="shortcut icon" href="{{ asset('front/img/logo.png') }}" type="image/x-icon">
  <!-- Vendor CSS Files -->
  <link href="{{asset('back/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('back/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('back/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('back/vendor/quill/quill.snow.css')}}" rel="stylesheet">
  <link href="{{asset('back/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
  <link href="{{asset('back/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('back/vendor/simple-datatables/style.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('back/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">
 <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="" class="logo d-flex align-items-center">
        <img src="" alt="">
        <span class="d-none d-lg-block">Admin</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">3</span>
          </a><!-- End Messages Icon -->
        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="../../back/photo_user/{{ Auth::user()->images }}"  class="rounded-circle" >
            <span class="d-none d-md-block dropdown-toggle ps-2">{{ Auth::user()->nom }}</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
                <span>{{ implode(Auth::user()->titre()->get()->pluck('abr')->toArray()) }}</span>
              <h6>{{ Auth::user()->nom }} {{ Auth::user()->prenom }}</h6>

            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{route('users.index')}}">
                <i class="bi bi-person"></i>
                <span>Utilisateurs</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{route('auteur.index')}}">
                <i class="bi bi-people"></i>
                <span>Auteurs</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
             <a class="dropdown-item d-flex align-items-center" href="{{route('logout')}}"
             onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
            </a>
                <form id="logout-form" action="{{route('logout')}}" method="post">
                    @csrf
                </form>

            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('home')}}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('actualite.index')}}">
          <i class="bi bi-newspaper"></i>
          <span>Actualité</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('article.index')}}">
          <i class="bi bi-journal"></i>
          <span>Article</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('congre.index')}}">
          <i class="bi bi-receipt"></i>
          <span>Congre</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('discipline.index')}}">
          <i class="bi bi-slash-circle"></i>
          <span>Discipline</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('revue.index')}}">
          <i class="bi bi-journal-text"></i>
          <span>Revue</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('these.index')}}">
          <i class="bi bi-layers"></i>
          <span>These et memoire</span>
        </a>
      </li>
      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('titre.index')}}">
          <i class="bi bi-key"></i>
          <span>Titres</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('specialite.index')}}">
          <i class="bi bi-person-check"></i>
          <span>Specialites</span>
        </a>
      </li>
      <li class="nav-item">

          <a class="nav-link collapsed" href="{{route('users.index')}}">
            <i class="bi bi-person"></i>
            <span>Utilisateurs</span>
          </a>


      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('auteur.index')}}">
          <i class="bi bi-people"></i>
          <span>Auteurs</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('photo.index')}}">
          <i class="bi bi-camera"></i>
          <span>Photo</span>
        </a>
      </li>

    </ul>

  </aside><!-- End Sidebar-->

        <main class="py-4">
            @yield('content')
        </main>
    <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>ErnestoRabutin</span></strong>. All Rights Reserved
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->

  <script src="{{asset('back/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('back/vendor/quill/quill.min.js')}}"></script>
  <script src="{{asset('back/vendor/simple-datatables/simple-datatables.js')}}"></script>
  <script src="{{asset('back/vendor/tinymce/tinymce.min.js')}}"></script>
  <script src="{{asset('back/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('back/js/main.js')}}"></script>


</body>

</html>
