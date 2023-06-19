<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="/assets/css/home_maintance.css">
   <title>Layanan | Maintance</title>
</head>
<body>
{{-- NAVIGATION-START--}}
      <nav class="btn-navigation">
         <div class="container-fluid">
            <div class="pic-logo-handyhub">
               <div class="logo">
                  <a href="/">
                     <img src="/assets/img/start-renovation.png" alt="logo">
                  </a>
               </div>
               <h1 class="text-logo">HandyHub</h1>
            </div>
            <div class="btn-middle">
               <ul class="ul-nav">
                <li class="li-nav scroll-link"><a class="a-nav" href="/userMainMenu">Beranda</a></li>
                <li class="li-nav scroll-link"><a class="a-nav" href="/listpesanan">Pesanan</a></li>
                <li class="li-nav scroll-link"><a class="a-nav" href="/bantuan">Bantuan</a></li>
                <li class="li-nav scroll-link"><a class="a-nav" href="/Listriwayat">Riwayat</a></li>
               </ul>
            </div>
            <div class="btn-profile">
               <a href="/profil">
                  <img src="/assets/img/user.png" alt="" class="profil-image"> 
               </a>
            </div>
         </div>
      </nav>
      {{-- NAVIGATION-ENDS --}}
   
   {{-- CONTAINER-LAYOUT-START --}}
   
   <div class="content-layout-start">
      <div class="hero-image-layout">
         <img src="/{{$foto}}" alt="">
      </div>
      <div class="text-theme">
         <h2>Lengkapilah <span>informasi</span> berikut</h2>
      </div>
      <div class="container-form">
         <form action="/pesananbaru/{{$kategori}}" method="post" enctype="multipart/form-data">
            @csrf
            <div>
              <label for="notes">Catatan Tambahan:</label>
              <textarea id="notes" name="notes" placeholder="Isi catatan tambahan . . ." required></textarea>
            </div>
            
            <div>
              <label for="photo">Lampiran Foto:</label>
              <input type="file" id="photo" name="photo" required>
            </div>
            
            <div>
              <label for="visit-date">Waktu Kunjungan:</label>
              <input type="datetime-local" id="visit-date" name="visit-date" required>
            </div>   
            <button type="submit">Submit</button>
          </form>          
      </div>
   </div>
   {{-- CONTAINER-LAYOUT-ENDS --}}
</body>
</html>