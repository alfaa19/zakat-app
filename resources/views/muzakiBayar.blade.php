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
            <div class="container">
            <form action="/dashboard/zakat" method="POST">
                @method('post')
                @csrf
{{--                <div class="modal-body">--}}
                    <div class="mb-3"><label for="exampleFormControlInput1">Nama Muzakki</label>
                        <input class="form-control" name="nama_kk" id="nama" type="text" placeholder="Nama Muzakki" readonly value="{{$muzakki->nama}}" required></div>
                    <div class="mb-3"><label for="exampleFormControlInput1">Jumlah Tanggungan</label>
                        <input class="form-control" name="jumlah_tanggungandibayar" id="tanggungan" type="number"  readonly value="{{$muzakki->jumlah_tanggungan}}" required></div>
                    <div class="mb-3"><label for="exampleFormControlInput1">Jenis Zakat</label>
                    <select id="jenis" name="jenis_bayar" class="form-select form-select-sm" onchange="update()" aria-label=".form-select-sm example">
                        <option selected>Pilih Salah Satu</option>
                        <option value="Beras">Beras</option>
                        <option value="Uang">Uang</option>
                    </select>
                    </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1">Jumlah Beras</label>
                    <input class="form-control" name="bayar_beras" id="pberas" type="text" readonly >

                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1">Jumlah Beras</label>
                    <input class="form-control" name="bayar_uang" id="puang" type="text" readonly >

                </div>
                    <script type="text/javascript">
                        function update() {
                            var select = document.getElementById('jenis');
                            var tanggungan = document.getElementById('tanggungan');
                            var option = select.options[select.selectedIndex];

                            if (option.value == 'Beras') {
                                document.getElementById('pberas').value = tanggungan.value * 2.5;
                                document.getElementById('puang').value = 0;
                            }else if(option.value == 'Uang'){
                                document.getElementById('puang').value = tanggungan.value * 12000;
                                document.getElementById('pberas').value = 0;
                            }
                            // document.getElementById('pilihan').value = option.value;
                            // document.getElementById('text').value = option.text;
                        }

                        update();
                    </script>


                <button class="btn btn-primary" type="Submit" value="Update">Bayar</button>
            </form>
            </div>
        </main>

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
