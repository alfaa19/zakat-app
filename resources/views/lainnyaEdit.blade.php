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
                    <a class="nav-link" href="#">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-table-columns"></i></div>
                        Dashboard
                    </a>

                    <div class="sb-sidenav-menu-heading">Peserta</div>
                    <a class="nav-link" href="/dashboard/muzaki">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-users"></i></div>
                        Muzakki
                    </a>
                    <a class="nav-link" href="/dashboard/mustahik">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-user-group"></i></div>
                        Mustahik
                    </a>
                </div>
            </div>

        </nav>
    </div>
    <div id="layoutSidenav_content">
        <main>
            <div class="container">
            <form action="/dashboard/lainnya/{{$lainnya->id}}" method="POST">
                @method('put')
                @csrf
{{--                <div class="modal-body">--}}
                    <div class="mb-3"><label for="exampleFormControlInput1">Nama Mustahik</label>
                        <input class="form-control" name="nama" id="nama" type="text" placeholder="Nama Muzakki" readonly value="{{$lainnya->nama}}" required></div>
                    <div class="mb-3"><label for="exampleFormControlInput1" hidden>Jumlah Tanggungan</label>
                        <input class="form-control" name="hak" id="tanggungan" type="number" id="tanggungan" readonly hidden value="{{$lainnya->hak}}" required></div>
                    <div class="mb-3"><label for="exampleFormControlInput1">Kategori</label>
                        <select id="kategori" name="kategori" class="form-select form-select-sm" onchange="update()" aria-label=".form-select-sm example">
                            <option selected>Pilih Salah Satu</option>
                            <option value="Mualaf">Mualaf - 4(Kg)</option>
                            <option value="Ibnu Sabil">Ibnu Sabil - 4(Kg)</option>
                            <option value="Fisabilillah (Ustad)">Fisabilillah (Ustad) - 3(Kg)</option>
                            <option value="Fisabilillah (Santri)">Fisabilillah (Santri) - 3(Kg)</option>
                            <option value="Lainnya">Lainnya - 4(Kg)</option>
                        </select>
                        <script type="text/javascript">
                            function update() {
                                var select = document.getElementById('kategori');
                                var hak = document.getElementById('jumlah_hak');
                                var option = select.options[select.selectedIndex];

                                if (option.value == 'Mualaf') {
                                    hak.value = 4;

                                }else if(option.value == 'Ibnu Sabil'){
                                    hak.value = 4;
                                }else if(option.value == 'Fisabilillah (Ustad)'){
                                    hak.value = 3;
                                }else if(option.value == 'MFisabilillah (Santri)'){
                                    hak.value = 3;
                                }else if(option.value == 'Lainnya'){
                                    hak.value = 4;
                                }

                            }

                            update();
                        </script>
                    </div>
                <button class="btn btn-primary" type="Submit" value="Update">Save</button>
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
