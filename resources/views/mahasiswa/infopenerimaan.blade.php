<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Info Peneriman</title>
    <link href="{{ asset('../html/css/styles.css') }}" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <style type="text/css">
        tbody, th, td{
            border-collapse: collapse;
            border: 2px solid rgba(15, 81, 50, 1);
            padding: 5px 5px;
        }
    </style>
</head>

<body class="sb-nav-fixed">

    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">SI PLP</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                    class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..."
                        aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i
                            class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Profil</a></li>
                        <li><a class="dropdown-item" href="#!">Pengaturan</a></li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li><a class="dropdown-item" href="/logout">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Mahasiswa</div>
                            <a class="nav-link" href="/mahasiswa/create">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Form PLP
                            </a>
                            <a class="nav-link" href="/mahasiswa/info-penerimaan">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Hasil Penerimaan
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    {{ auth()->user()->email }}
                </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Informasi Penerimaan PLP</h1>
                        <br>
                        <div class="alert alert-success" role="alert">
                            <h4 class="alert-heading">Selamat Kamu Diterima PLP II</h4>
                            <p>Berikut informasi mengenai tempat PLP II, hubungi dosen pembimbing dan guru pamong untuk
                                konsultasi kegiatam PLP.
                                Selamat berproses dan belajar!
                            </p>
                            <!-- <div class="form-floating mb-3">
                                <input class="form-control" id="dospim" type="text" name="dospim"
                                    value="" />
                                <label for="inputEmail">Dosen Pembimbing</label>
                            </div> -->
                            <div class="card-body">
                                    <thead>
                                <table>
                                        <tr >
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>NIM</th>
                                            <th>SMK</th>
                                            <th>Keminatan</th>
                                            <th>Dosen Pembimbing</th>
                                            <th>Telepon Dosen Pembimbing</th>
                                            <th>Guru Pamong</th>
                                            <th>Telepon Guru Pamong</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                         $no=1;   
                                        @endphp
                                        @foreach ($datamhs as $key => $item)
                                            <tr>
                                                <td>
                                                    {{$no++}}     
                                                </td>
                                                <td>{{ $item['nama'] }}</td>
                                                <td>{{ $item['nim'] }}</td>
                                                <td>{{ $item['smk'] }}</td>
                                                <td>{{ $item['keminatan'] }}</td>
                                                <td>{{ $item['dospim'] }}</td>
                                                <td>{{ $item['telepon'] }}</td>
                                                <td>{{ $item['gurupamong'] }}</td>
                                                <td>{{ $item['telepongurupamong'] }}</td>
                                            </tr>
                                        @endforeach

                                        <h4></h4>
                                    </tbody>

                                </table>
                            </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Sistem Informasi Pengenalan Lingkungan
                            Persekolahan</div>
                        </div>
                    </div>
                </footer>
            </div>
            </main>
        </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
        </script>
        <script src="../html/js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="assets/demo/chart-pie-demo.js"></script>
        @include('sweetalert::alert', ['cdn' => 'https://cdn.jsdelivr.net/npm/sweetalert2@9']);

    </body>

</html>
