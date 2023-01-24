
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>PLP - Mahasiswa</title>
        <link href="{{asset('../html/css/styles.css')}}" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Tambah Data PLP</h3></div>
                                    <div class="card-body">
                                        <form action="/mahasiswa/create" method="post">
                                            @csrf
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" name="nama" />
                                                        <label for="inputFirstName">Nama</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="inputnim" type="text" placeholder="Enter your NIM" name="nim"/>
                                                        <label for="inputLastName">NIM</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-floating mb-3">
                                                {{-- <input class="form-control" id="inputEmail" type="text" placeholder="nama SMK" name="smk" /> --}}
                                                <label for="smk"></label>
                                                <select name="smk" id="smk" class="form-control js-example-basic-single form-sele">
                                                    @foreach ($datasmk as $item)
                                                    <option style="color: black" value="{{ $item->namasmk}}">{{ $item->namasmk}}</option>
                                                    @endforeach
                                                </select><label for="inputPassword">SMK</label>
                                                <script>
                                                    const smk = $('#smk').data('smk');
                                                    $('[name=smk]').val(smk);
                                                </script>
                                            
                                            </div>
                                                    <div class="form-floating mb-3">
                                                        <select id="keminatan" name="keminatan"
                                                        class="js-example-basic-single form-select">
                                                        <option data-keminatan="tkj">Teknik Komputer Jaringan</option>
                                                        <option data-keminatan="mm">Multimedia</option>
                                                        <option data-keminatan="rpl">Rekayasa Perangkat Lunak</option>
                                                    </select><label for="inputPassword">Keminatan</label>
                                                </div>
                                                <script>
                                                    const keminatan = $('#keminatan').data('keminatan');
                                                    $('[name=keminatan]').val(keminatan);
                                                </script>

                                            <div class="mt-4 mb-0">
                                                <div class="d-grid"><button class="btn btn-primary btn-block">Tambah Data PLP</button></div>
                                            </div>
                                        </form>
                                    </div>
                               
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Sistem Informasi Pengenalan Lingkungan Persekolahan</div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        @include('sweetalert::alert')
    </body>
</html>