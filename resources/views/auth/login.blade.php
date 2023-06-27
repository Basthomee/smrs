<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <style>
        body {
            background: #efefef;
        }

        .row {
            display: flex;
            justify-content: center;
        }
    </style>

    <title>Sistem Managemen Rumah Sakit</title>
</head>

<body>

    <!-- navbar -->
    <nav class="navbar navbar-dark bg-success mb-4">
        <div class="container-fluid">
            <span class="navbar-brand mx-auto">Rumah Sakit Semen Gresik</span>
        </div>
    </nav>
    <!-- akhir navbar -->


    <!-- content -->
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div style="text-align: center;">
                    <img width="100px" height="100px" style="border-radius:200px; margin: 0 auto;"
                        src="data:image/jpeg;base64,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"
                        alt="">
                </div>
                <div style="box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3); margin-top:30px"
                    class="wrapper bg-white text-center p-3">
                    <form method="post" action="/store_login">
                        @csrf
                        <h2 class="mb-4">Login</h2>

                        @if (session('register'))
                            <div class="alert alert-success my-4">
                                {{ session('register') }}
                            </div>
                        @endif

                        @if (session('username'))
                            <div class="alert alert-danger my-4">
                                {{ session('username') }}
                            </div>
                        @endif

                        @if (session('password'))
                            <div class="alert alert-danger my-4">
                                {{ session('password') }}
                            </div>
                        @endif

                        <div class="mb-3">
                            <label for="username">Username</label>
                            <input type="text" name="username" id="username" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" id="password" required>
                        </div>
                        <div class="d-block mb-3">
                            <button type="submit" class="btn btn-success -block">Login</button>
                        </div>
                    </form>
                    <a href="/register" class="nav-link">Belum punya akun? daftar sekarang</a>
                </div>
            </div>
        </div>
    </div>
    <!-- akhir content -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>

</body>

</html>
