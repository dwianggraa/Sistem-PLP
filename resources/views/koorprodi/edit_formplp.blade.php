<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Edit Data Mahasiswa </title>
    <link href="{{ asset('../html/css/styles.css') }}" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Edit Data Form PLP</h3>
                                </div>
                                <div class="card-body">
                                    <form action="{{ url('datamhs/update', $datamhs->id) }}" method="post">
                                        @csrf
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="nama" type="text" name="nama"
                                                placeholder="name@example.com" value="{{ $datamhs->nama }}" />
                                            <label for="inputEmail">Nama </label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="alamat" nim="text" name="nim"
                                                placeholder="name@example.com" value="{{ $datamhs->nim }}" />
                                            <label for="inputEmail">NIM</label>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="smk" type="type"
                                                        name="smk" placeholder="Create a password"
                                                        value="{{ $datamhs->smk }}" />
                                                    <label for="inputPassword">Nama SMK</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="keminatan" type="type"
                                                        name="keminatan" type="password" placeholder="Confirm password"
                                                        value="{{ $datamhs->keminatan }}" />
                                                    <label for="inputPasswordConfirm">Keminatan</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <label for="inputEmail"></label>
                                            <select name="dospim" id="dospim"
                                                class="form-control js-example-basic-single form-sele">
                                                @foreach ($datadosbing as $item)
                                                    <option style="color: black" value="{{ $item->nama }}">
                                                        {{ $item->nama }}</option>
                                                @endforeach
                                            </select>
                                            <script>
                                                const dospim = $('#dospim').data('dospim');
                                                $('[name=dospim]').val(dospim);
                                            </script><label for="inputPasswordConfirm">Dosen
                                                Pembimbing</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="telepon" type="number" name="telepon" />
                                            <label for="inputPasswordConfirm">Telepon</label>
                                        </div>

                                        <div class="mt-4 mb-0">
                                            <div class="d-grid"><button class="btn btn-primary btn-block"
                                                    type="submit">Edit Data PLP</button></div>
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
    <script src="{{ asset('../html/js/jquery-ui-1.13.2.custom') }}"></script>
    <script src="{{ asset('../html/js/single.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

</body>

</html>
