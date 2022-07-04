<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard Admin Zakat App</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="{{asset('startbootstrap/css/styles.css')}}" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>
<body class="sb-nav-fixed">
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-teal">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="index.html">Admin Dashboard</a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">

    </form>
    <!-- Navbar-->
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li>
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="dropdown-item" >Logout</button>
                    </form>
                </li>
            </ul>
        </li>
    </ul>
</nav>
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading"></div>
                    <a class="nav-link" href="/dashboard">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-table-columns"></i></div>
                        Dashboard
                    </a>

                    <div class="sb-sidenav-menu-heading">Data</div>
                    <a class="nav-link" href="/dashboard/muzaki">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-users"></i></div>
                        Muzakki
                    </a>
                    <a class="nav-link" href="/dashboard/mustahik">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-user-group"></i></div>
                        Mustahik
                    </a>
                    <div class="sb-sidenav-menu-heading">Pengumpulan</div>
                    <a class="nav-link" href="/dashboard/bayarzakat">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-users"></i></div>
                        Zakat Fitrah
                    </a>
                    <a class="nav-link" href="/dashboard/laporanZakat">
                        <div class="sb-nav-link-icon"><i class="fa fa-paperclip" ></i></div>
                        Laporan Pengumpulan Zakat Fitrah
                    </a>
                    <div class="sb-sidenav-menu-heading">Distribusi</div>
                    <a class="nav-link" href="/dashboard/warga">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-users"></i></div>
                        Warga
                    </a>
                    <a class="nav-link" href="/dashboard/lainnya">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-user-group"></i></div>
                        Mustahik Lainnya
                    </a>
                    <a class="nav-link" href="/dashboard/laporanWarga/">
                        <div class="sb-nav-link-icon"><i class="fa fa-paperclip" ></i></div>
                        Laporan Distribusi Zakat Fitrah Warga
                    </a>
                    <a class="nav-link" href="/dashboard/laporanMustahik/">
                        <div class="sb-nav-link-icon"><i class="fa fa-paperclip" ></i></div>
                        Laporan Distribusi Zakat Fitrah Mustahik
                    </a>
                </div>
            </div>

        </nav>
    </div>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Pengumpulan Zakat</h1>
                <a class="btn btn-primary" href="" > Export Word</a>
                <a class="btn btn-danger" href="laporanZakat/pdf" > Export PDF</a>
            </div>

            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                    <tr>
                        <th>Number</th>
                        <th>Total Muzzaki</th>
                        <th>Total Jiwa</th>
                        <th>Total Beras</th>
                        <th>Total Uang</th>

                    </tr>
                    </thead>
                    <tbody>


                    @for($x = 1; $x <= 1; $x++)

                        <tr>
                            <td>{{$x}}</td>
                            <td>{{$muzaki}}</td>
                            <td>{{$jiwa}} </td>
                            <td>{{$beras}}</td>
                            <td>{{$uang}} Kg</td>
                        </tr>
                    @endfor

                    </tbody>
                </table>
            </div>
        </main>

        </footer>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="{{asset('startbootstrap/js/script.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="assets/demo/chart-area-demo.js"></script>
<script src="assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="{{asset('startbootstrap/js/datatables-simple-demo.js')}}"></script>
</body>
</html>
