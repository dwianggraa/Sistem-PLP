<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Edit Data User</title>
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
                                    <h3 class="text-center font-weight-light my-4">Edit Data User</h3>
                                </div>
                                <div class="card-body">
                                    <form action="{{ url('datauser/update', $data_user->id) }}" method="post">
                                        @csrf
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="email" type="text" name="email"
                                                placeholder="name@example.com" value="{{ $data_user->email }}" />
                                            <label for="inputEmail">Email</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="password" type="text" name="password"
                                                placeholder="name@example.com" value="{{ $data_user->password }}" />
                                            <label for="inputEmail">Password</label>
                                        </div>
                                        <div class="row mb-3">
                                        </div>
                                        <div class="form-floating mb-3">
                                            <select id="level" name="level"
                                                class="js-example-basic-single form-select">
                                                <option data-level="1">1</option>
                                                <option data-level="2">2</option>
                                                <option data-level="3">3</option>
                                                <option data-level="4">4</option>
                                                <option data-level="5">5</option>
                                                <option data-level="6">6</option>
                                            </select><label for="inputPassword">Level User</label>
                                        </div>
                                        <script>
                                            const level = $('#level').data('level');
                                            $('[name=level]').val(level);
                                        </script>
                                        <h7>Keterengan Level</h7> <br>
                                        <h7>Level 1 : Mahasiswa</h7> <br>
                                        <h7>Level 2 : Admin</h7> <br>
                                        <h7>Level 3 : Koordinator Prodi</h7> <br>
                                        <h7>Level 4 : Kepala Prodi</h7> <br>
                                        <h7>Level 5 : Koordinator SMK</h7> <br>
                                        <h7>Level 6 : Kepala Sekolah</h7> <br>
                                        <div class="mt-4 mb-0">
                                            <div class="d-grid"><button class="btn btn-primary btn-block"
                                                    type="submit">Update Data User</button></div>
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
