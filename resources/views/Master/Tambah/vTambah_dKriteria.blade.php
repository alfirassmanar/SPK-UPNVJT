<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Title -->
    <title>Create User | Graindashboard UI Kit</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('/temp/img/favicon.ico') }}">

    <!-- Template -->
    <link rel="stylesheet" href="{{ asset('/temp/graindashboard/css/graindashboard.css') }}">
</head>

<body class="has-sidebar has-fixed-sidebar-and-header">
<!-- Header -->
<header class="header bg-body">
    <nav class="navbar flex-nowrap p-0">
        <div class="navbar-brand-wrapper d-flex align-items-center col-auto">
            <!-- Logo For Mobile View -->
            <a class="navbar-brand navbar-brand-mobile" href="/">
                <img class="img-fluid w-100" src="{{ asset('/temp/img/logo-mini.png') }}" alt="Graindashboard">
            </a>
            <!-- End Logo For Mobile View -->

            <!-- Logo For Desktop View -->
            <a class="navbar-brand navbar-brand-desktop" href="/">
                <h4><strong>Kelompok 4</strong></h4>
            </a>
            <!-- End Logo For Desktop View -->
        </div>

        <div class="header-content col px-md-3">
            <div class="d-flex align-items-center">
                <!-- Side Nav Toggle -->
                <a class="js-side-nav header-invoker d-flex mr-md-2" href="#"
                    data-close-invoker="#sidebarClose" data-target="#sidebar" data-target-wrapper="body">
                    <i class="gd-align-left"></i>
                </a>
                <!-- End Side Nav Toggle -->

                <!-- User Notifications -->
                <div class="dropdown ml-auto">
                    <a id="notificationsInvoker" class="header-invoker" href="#" aria-controls="notifications"
                        aria-haspopup="true" aria-expanded="false" data-unfold-event="click"
                        data-unfold-target="#notifications" data-unfold-type="css-animation"
                        data-unfold-duration="300" data-unfold-animation-in="fadeIn"
                        data-unfold-animation-out="fadeOut">
                    </a>
                </div>
                <!-- End User Notifications -->
                <!-- User Avatar -->
                <div class="dropdown mx-3 dropdown ml-2">
                    <a id="profileMenuInvoker" class="header-complex-invoker" href="#"
                        aria-controls="profileMenu" aria-haspopup="true" aria-expanded="false"
                        data-unfold-event="click" data-unfold-target="#profileMenu" data-unfold-type="css-animation"
                        data-unfold-duration="300" data-unfold-animation-in="fadeIn"
                        data-unfold-animation-out="fadeOut">
                        <!--img class="avatar rounded-circle mr-md-2" src="#" alt="John Doe"-->
                        <span class="mr-md-2 avatar-placeholder">F</span>
                        <span class="d-none d-md-block">Firas</span>
                        <i class="gd-angle-down d-none d-md-block ml-2"></i>
                    </a>

                    <ul id="profileMenu"
                        class="unfold unfold-user unfold-light unfold-top unfold-centered position-absolute pt-2 pb-1 mt-4 unfold-css-animation unfold-hidden fadeOut"
                        aria-labelledby="profileMenuInvoker" style="animation-duration: 300ms;">
                        <li class="unfold-item">
                            <a class="unfold-link d-flex align-items-center text-nowrap" href="#">
                                <span class="unfold-item-icon mr-3">
                                    <i class="gd-user"></i>
                                </span>
                                My Profile
                            </a>
                        </li>
                        <li class="unfold-item unfold-item-has-divider">
                            <a class="unfold-link d-flex align-items-center text-nowrap" href="#">
                                <span class="unfold-item-icon mr-3">
                                    <i class="gd-power-off"></i>
                                </span>
                                Logout
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- End User Avatar -->
            </div>
        </div>
    </nav>
</header>
<!-- End Header -->

<main class="main">
    <!-- Sidebar Nav -->
    <aside id="sidebar" class="js-custom-scroll side-nav">
        <ul id="sideNav" class="side-nav-menu side-nav-menu-top-level mb-0">
            <!-- Title -->
            <li class="sidebar-heading h6">Dashboard</li>
            <!-- End Title -->

            <!-- Dashboard -->
            <li class="side-nav-menu-item active">
                <a class="side-nav-menu-link media align-items-center" href="/">
                    <span class="side-nav-menu-icon d-flex mr-3">
                        <i class="gd-dashboard"></i>
                    </span>
                    <span class="side-nav-fadeout-on-closed media-body">Dashboard</span>
                </a>
            </li>
            <!-- End Dashboard -->

            <!-- Documentation -->
            <li class="side-nav-menu-item">
                <a class="side-nav-menu-link media align-items-center" href="#">
                    <span class="side-nav-menu-icon d-flex mr-3">
                        <i class="gd-file"></i>
                    </span>
                    <span class="side-nav-fadeout-on-closed media-body">Dokumentasi</span>
                </a>
            </li>
            <!-- End Documentation -->

            <!-- Title -->
            <li class="sidebar-heading h6">Examples</li>
            <!-- End Title -->

            <!-- Users -->
            <li class="side-nav-menu-item side-nav-has-menu">
                <a class="side-nav-menu-link media align-items-center" href="#" data-target="#subUsers">
                    <span class="side-nav-menu-icon d-flex mr-3">
                        <i class="gd-user"></i>
                    </span>
                    <span class="side-nav-fadeout-on-closed media-body">Menu Master</span>
                    <span class="side-nav-control-icon d-flex">
                        <i class="gd-angle-right side-nav-fadeout-on-closed"></i>
                    </span>
                    <span class="side-nav__indicator side-nav-fadeout-on-closed"></span>
                </a>

                <!-- Users: subUsers -->
                <ul id="subUsers" class="side-nav-menu side-nav-menu-second-level mb-0">
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="{{ route('dataGuru') }}">Data Guru</a>
                    </li>
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="{{ route('dataKriteria') }}">Data Kriteria</a>
                    </li>
                    {{-- <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="{{ route('dataPeriode') }}">Data Periode</a>
                    </li> --}}
                </ul>
                <!-- End Users: subUsers -->
            </li>
            <!-- End Users -->

            <!-- Authentication -->
            <li class="side-nav-menu-item side-nav-has-menu">
                <a class="side-nav-menu-link media align-items-center" href="#" data-target="#subPages">
                    <span class="side-nav-menu-icon d-flex mr-3">
                        <i class="gd-lock"></i>
                    </span>
                    <span class="side-nav-fadeout-on-closed media-body">Menu Perhitungan</span>
                    <span class="side-nav-control-icon d-flex">
                        <i class="gd-angle-right side-nav-fadeout-on-closed"></i>
                    </span>
                    <span class="side-nav__indicator side-nav-fadeout-on-closed"></span>
                </a>

                <!-- Pages: subPages -->
                <ul id="subPages" class="side-nav-menu side-nav-menu-second-level mb-0">
                    {{-- <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="{{ route('pKriteria') }}">Penilaian Kriteria</a>
                    </li> --}}
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="{{ route('bKriteria') }}">Bobot Kriteria</a>
                    </li>
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="{{ route('aPenilaian') }}">Perangkingan Guru</a>
                    </li>
                </ul>
                <!-- End Pages: subPages -->
            </li>
            <!-- End Authentication -->

            <li class="side-nav-menu-item side-nav-has-menu">
                <a class="side-nav-menu-link media align-items-center" href="#" data-target="#hasil-laporan">
                    <span class="side-nav-menu-icon d-flex mr-3">
                        <i class="gd-lock"></i>
                    </span>
                    <span class="side-nav-fadeout-on-closed media-body">Hasil & Laporan</span>
                    <span class="side-nav-control-icon d-flex">
                        <i class="gd-angle-right side-nav-fadeout-on-closed"></i>
                    </span>
                    <span class="side-nav__indicator side-nav-fadeout-on-closed"></span>
                </a>

                <!-- Pages: hasil-laporan -->
                <ul id="hasil-laporan" class="side-nav-menu side-nav-menu-second-level mb-0">
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="login.html">Hasil Keputusan</a>
                    </li>
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="register.html">Penilaian Kinerja</a>
                    </li>
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="password-reset.html">Perangkingan Guru</a>
                    </li>
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="password-reset.html">Keputusan Akhir</a>
                    </li>
                </ul>
                <!-- End Pages: hasil-laporan -->
            </li>

            <!-- Settings -->
            {{-- <li class="side-nav-menu-item">
                <a class="side-nav-menu-link media align-items-center" href="settings.html">
                    <span class="side-nav-menu-icon d-flex mr-3">
                        <i class="gd-settings"></i>
                    </span>
                    <span class="side-nav-fadeout-on-closed media-body">Settings</span>
                </a>
            </li> --}}
            <!-- End Settings -->

            <!-- Static -->
            {{-- <li class="side-nav-menu-item">
                <a class="side-nav-menu-link media align-items-center" href="static-non-auth.html">
                    <span class="side-nav-menu-icon d-flex mr-3">
                        <i class="gd-file"></i>
                    </span>
                    <span class="side-nav-fadeout-on-closed media-body">Static page</span>
                </a>
            </li> --}}
            <!-- End Static -->

        </ul>
    </aside>
    <!-- End Sidebar Nav -->

    <div class="content">
        <div class="py-4 px-3 px-md-4">
            <div class="card mb-3 mb-md-4">

                <div class="card-body">
                    <!-- Breadcrumb -->
                    <nav class="d-none d-md-block" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('dataKriteria') }}">Data Kriteria</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Tambah Data Kriteria</li>
                        </ol>
                    </nav>
                    <!-- End Breadcrumb -->

                    <div class="mb-3 mb-md-4 d-flex justify-content-between">
                        <div class="h3 mb-0">Lembar Penambahan</div>
                    </div>


                    <!-- Form -->
                    <div>
                        <form>
                            <div class="form-row">
                                <div class="form-group col-12 col-md-6">
                                    <label for="namaKriteria">Kriteria</label>
                                    <input type="text" class="form-control" value="" id="namaKriteria" name="namaKriteria" placeholder="...">
                                </div>
                                <div class="form-group col-12 col-md-6">
                                    <label for="jenis">Jenis</label>
                                    <input type="text" class="form-control" value="" id="jenis" name="jenis" placeholder="...">
                                </div>
                            </div>

                            <div class="custom-control custom-switch mb-2">
                                <input type="checkbox" class="custom-control-input" id="yakin" required>
                                <label class="custom-control-label" for="yakin">Anda sudah yakin?</label>
                            </div>

                            <button type="submit" class="btn btn-primary float-right">Simpan</button>
                        </form>
                    </div>
                    <!-- End Form -->
                </div>
            </div>


        </div>

        <!-- Footer -->
        <footer class="small p-3 px-md-4 mt-auto">
            <div class="row justify-content-between">
                <div class="col-lg text-center text-lg-left mb-3 mb-lg-0">
                    {{-- <ul class="list-dot list-inline mb-0">
                        <li class="list-dot-item list-dot-item-not list-inline-item mr-lg-2"><a class="link-dark"
                                href="#">FAQ</a></li>
                        <li class="list-dot-item list-inline-item mr-lg-2"><a class="link-dark"
                                href="#">Support</a></li>
                        <li class="list-dot-item list-inline-item mr-lg-2"><a class="link-dark"
                                href="#">Contact us</a></li>
                    </ul> --}}
                </div>

                <div class="col-lg text-center mb-3 mb-lg-0">
                    {{-- <ul class="list-inline mb-0">
                        <li class="list-inline-item mx-2"><a class="link-muted" href="#"><i
                                    class="gd-twitter-alt"></i></a></li>
                        <li class="list-inline-item mx-2"><a class="link-muted" href="#"><i
                                    class="gd-facebook"></i></a></li>
                        <li class="list-inline-item mx-2"><a class="link-muted" href="#"><i
                                    class="gd-github"></i></a></li>
                    </ul> --}}
                </div>

                <div class="col-lg text-center text-lg-right">
                    &copy; 2024 Sistem Informasi - SPK. Kelompok 4.
                </div>
            </div>
        </footer>
        <!-- End Footer -->
    </div>
</main>


<script src="{{ asset('/temp/graindashboard/js/graindashboard.js') }}"></script>
<script src="{{ asset('/temp/graindashboard/js/graindashboard.vendor.js') }}"></script>

</body>
</html>