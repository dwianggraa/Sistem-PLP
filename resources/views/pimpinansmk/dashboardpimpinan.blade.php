<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - SI PLP</title>
    <link href="{{ asset('https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('../html/css/styles.css') }}" rel="stylesheet" />
    <script src="{{ asset('https://use.fontawesome.com/releases/v6.1.0/js/all.js') }}" crossorigin="anonymous"></script>
</head>J

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.html">SI PLP</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">

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
                        <div class="sb-sidenav-menu-heading">Pimpinan SMK</div>
                        <a class="nav-link" href="/dashboard">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Verifikasi Data
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

                {{-- HALAMAN KAPRODI --}}
                @if (auth()->user()->level == 4)

                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Data Pilihan Mahasiswa</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Data Pilihan Mahasiswa yang didapat dari form
                                Pendataan PLP</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data Siswa
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>NIM</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($datamhs as $key => $item)
                                            <tr>
                                                <td>{{ $datamhs->firstItem() + $key }}</td>
                                                <td>{{ $item->nama }}</td>
                                                <td>{{ $item['nim'] }}</td>
                                                <td>{{ $item['verifikasi'] }}</td>


                                                <td>
                                                    <a href="{{ url('/verifikasidata-mhs-plp', $item->id) }}"><button
                                                            type="button" class="btn btn-success">Detail</button></a>

                                                    {{-- <select name="verifikasi" id="verifikasi" class="form-control js-example-basic-single form-sele">
                                                        <option>--Pilih--</option>
                                                        <option data="verifikasi">Verifikasi</option>
                                                        <option data="pending">Pending</option>

                                                    </select>
                                                    <script>
                                                        const verifikasi = $('#verifikasi').data('verifikasi');
                                                        $('[name=verifikasi]').val(verifikasi);
                                                    </script> --}}
                                                </td>
                                            </tr>
                                        @endforeach

                                        <h4></h4>
                                    </tbody>

                                </table>
                            </div>
                        </div>

                    </div>
                @endif

                {{-- HALAMAN KEPALA SEKOLAH SMK --}}
                @if (auth()->user()->level == 6)

                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Data Mahasiswa PLP</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Data Pilihan Mahasiswa yang didapat dari form
                                Pendataan PLP</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data Mahasiswa
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>NIM</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($datamhs as $key => $item)
                                            <tr>
                                                <td>{{ $datamhs->firstItem() + $key }}</td>
                                                <td>{{ $item->nama }}</td>
                                                <td>{{ $item['nim'] }}</td>
                                                <td>{{ $item['verifikasi'] }}</td>


                                                <td>
                                                    <a href="{{ url('/verifikasidata-mhs-plp', $item->id) }}"><button
                                                            type="button" class="btn btn-success">Detail</button></a>

                                                    {{-- <select name="verifikasi" id="verifikasi" class="form-control js-example-basic-single form-sele">
                                                     <option>--Pilih--</option>
                                                     <option data="verifikasi">Verifikasi</option>
                                                     <option data="pending">Pending</option>

                                                 </select>
                                                 <script>
                                                     const verifikasi = $('#verifikasi').data('verifikasi');
                                                     $('[name=verifikasi]').val(verifikasi);
                                                 </script> --}}
                                                </td>
                                            </tr>
                                        @endforeach

                                        <h4></h4>
                                    </tbody>

                                </table>
                            </div>
                        </div>

                    </div>
                @endif

            </main>

            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Sistem Informasi Pengenalan Lingkungan Persekolahan
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="../html/js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="../html/assets/demo/chart-area-demo.js"></script>
    <script src="../html/assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="../html/js/datatables-simple-demo.js"></script>
</body>

</html>
