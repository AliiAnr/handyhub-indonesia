<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link rel="icon" type="image/png" href="assets\img\start-renovation.png" />
    <link rel="stylesheet" type="text/css" href="assets/css/profil.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
        integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
        integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    {{-- NAVIGATION-START --}}
    <nav class="btn-navigation">
        <div class="container-fluid">
            <div class="pic-logo-handyhub">
                <div class="logo">
                    <a href="/">
                        <img src="assets/img/start-renovation.png" alt="logo">
                    </a>
                </div>
                <h1 class="text-logo">HandyHub</h1>
            </div>
            <div class="btn-middle">
                <ul class="ul-nav">
                    <li class="li-nav scroll-link"><a class="a-nav">Edit Profil</a></li>
                </ul>
            </div>
            <div class="log-sign-up">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        @if (Auth::guard('tukang')->check())
                            {{ auth()->guard('tukang')->user()->name }}
                        @else
                            {{ auth()->user()->name }}
                        @endif
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item active">Edit Profil</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class="dropdown-item">
                                    <i class="bi bi-box-arrow-in-right"></i>
                                    Log Out
                                </button>
                            </form>
                    </ul>
                </li>
            </div>
        </div>
    </nav>
    {{-- NAVIGATION-ENDS --}}
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="kelas">
            <div class="col-md-5 border-right">
                <div class="d-flex flex-column align-items-center text-center p-0 py-0">
                    @if (auth()->user()->ProfilPic)
                        <img class="rounded-circle mt-5" width="150px" src="storage\{{ auth()->user()->ProfilPic }}">
                    @else
                        <img class="rounded-circle mt-5" width="150px" src="assets\img\defaulprofilpic.jpg">
                    @endif
                    <span class="font-weight-bold">{{ auth()->user()->name }}</span><span
                        class="text-black-50">{{ auth()->user()->email }}</span><span> </span>
                </div>
                <p></p>
                <script>
                    function showone() {
                        var x = document.getElementById("UpPic");
                        var y = document.getElementById("onawal");
                        if (x.style.display === "none" || y.style.display === "block") {
                            x.style.display = "block";
                            y.style.display = "none";
                        } else {
                            x.style.display = "none";
                            y.style.display = "block";
                        }
                    }
                </script>
                <div id="onawal">
                    <div id="awaldisplay" class="d-grid gap-2 col-6 mx-auto">
                        <button id="mauganti" type="button" onclick="showone()"
                            class="btn btn-outline-secondary">Ganti Foto</button>
                    </div>
                </div>
                <div class="mb-3" id="UpPic" style="display: none;">
                    <form action="/profil/upfoto" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button id="mauganti" type="submit" onclick="showone()"
                                class="btn btn-outline-secondary">Okay Ganti Foto</button>
                        </div>
                        <label for="formFile" class="form-label">New Profil Picture</label>
                        <input class="form-control" type="file" id="image" name="image">
                    </form>
                </div>
                <script src="/assets/js/profil.js"></script>
            </div>
            <div class="col-md-5 border-right">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Any Change?</h4>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <div class="input-group2">
                            <form class="input-profile" action="/profil/update" method="post">
                                @csrf
                                <input type="text" class="form-control" name="nama" id="nama"
                                    placeholder="Nama" aria-label="Nama" aria-describedby="button-addon2">
                                <input type="text" class="form-control" placeholder="Password" name="password"
                                    aria-label="Password" aria-describedby="button-addon2">
                                    
                                <input type="text" class="form-control" id="province" name="alamat" placeholder="Provinsi"
                                    aria-label="Alamat" aria-describedby="button-addon2">
                                    
                                <input type="text" class="form-control" id="city" placeholder="Kota" name="password"
                                    aria-label="Password" aria-describedby="button-addon2">
                                    
                                <input type="text" class="form-control" id="district" placeholder="Kecamatan" name="password"
                                    aria-label="Password" aria-describedby="button-addon2">
                                    
                                <input type="text" class="form-control" id="postalCode" placeholder="Kode Pos" name="password"
                                    aria-label="Password" aria-describedby="button-addon2">
                                <input type="text" class="form-control" id="street" placeholder="Nama Jalan" name="password"
                                    aria-label="Password" aria-describedby="button-addon2">
                                    
                                <button class="btn btn-outline-secondary" type="submit"
                                    id="button-addon2">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>

</html>
