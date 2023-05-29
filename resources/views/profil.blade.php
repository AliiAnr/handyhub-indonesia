<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link rel="icon" type="image/png" href="assets\img\start-renovation.png"/>
    <link rel="stylesheet" type="text/css" href="assets/css/profil.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <script src="/assets/js/profil.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    {{-- NAVIGATION-START--}}
      <nav class="btn-navigation">
         <div class="container-fluid">
            <div class="pic-logo-handyhub">
               <div class="logo">
                  <a href="#">
                     <img src="assets/img/start-renovation.png" alt="logo">
                  </a>
               </div>
               <h1 class="text-logo">HandyHub</h1>
            </div>
            <div class="btn-middle">
               <ul class="ul-nav">
               <li class="li-nav scroll-link"><a class="a-nav">Profil</a></li>
               </ul>
            </div>
            <div class="log-sign-up">
            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
               {{ auth()->user()->name }}
               </a>
               <ul class="dropdown-menu">
                  <li><a class="dropdown-item active">Profil</a></li>
                  <li><a class="dropdown-item" href="#">Notifikasi</a></li>
                  <li><hr class="dropdown-divider"></li>
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
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-0 py-0"><img class="rounded-circle mt-5" width="150px" src="assets\img\{{auth()->user()->ProfilPic}}"><span class="font-weight-bold">{{auth()->user()->name}}</span><span class="text-black-50">{{auth()->user()->email}}</span><span> </span></div>
            <p></p>
            <div id="awaldisplay" onclick="newFoto" class="d-grid gap-2 col-6 mx-auto">
                <button id="mauganti" type="button" class="btn btn-outline-secondary">Ganti Foto</button>
            </div>
            <div class="mb-3" id="UpPic" style="display: none;">
                <label for="formFile" class="form-label">New Profil Picture</label>
                <input class="form-control" type="file" id="formFile">
            </div>
        </div>
        <div class="col-md-5 border-right">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="text-right">Profile Settings</h4>
            </div>
            <div class="row mt-3">
                <div class="col-md-12">
                    <label class="labels">Nama</label>
                    <input type="text" class="form-control" placeholder="Nama" value="">
                    <p></p>
                    <span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>Ganti Nama</span>
                </div>
                <div class="col-md-12">
                    <label class="labels">Alamat</label>
                    <input type="text" class="form-control" placeholder="Nama" value="">
                    <p></p>
                    <span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>Ganti Alamat</span>
                </div>
                <div class="col-md-12">
                    <label class="labels">Password</label>
                    <input type="text" class="form-control" placeholder="Nama" value="">
                    <p></p>
                    <span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>Ganti Password</span>
                </div>
                
            </div>
            <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Save Profile</button></div>
        </div>
    </div>
</div>
</div>
</div>
</body>
</html>