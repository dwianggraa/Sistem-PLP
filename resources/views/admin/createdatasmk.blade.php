<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Tambah Data SMK </title>
    <link href="../html/css/styles.css" rel="stylesheet" />
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
                                    <h3 class="text-center font-weight-light my-4">Tambah Data SMK</h3>
                                </div>
                                <div class="card-body">
                                    <form action="/datasmk/create" method="post">
                                        @csrf
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="namasmk" type="text" name="namasmk"
                                                placeholder="name@example.com" />
                                            <label for="inputEmail">Nama SMK</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="alamat" type="text" name="alamat"
                                                placeholder="name@example.com" />
                                            <label for="inputEmail">Alamat</label>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="npsn" type="type"
                                                        name="npsn" placeholder="Create a password" />
                                                    <label for="inputPassword">NPSN</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="akreditasi" type="type"
                                                        name="akreditasi" type="password"
                                                        placeholder="Confirm password" />
                                                    <label for="inputPasswordConfirm">Akreditasi</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="jurusan" type="text" name="jurusan"
                                                placeholder="name@example.com" />
                                            <label for="inputEmail">Jurusan</label>
                                        </div>
                                        <div class="mt-4 mb-0">
                                            <div class="d-grid"><button class="btn btn-primary btn-block"
                                                    type="submit">Tambah Data SMK</button></div>
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
</body>

</html>
