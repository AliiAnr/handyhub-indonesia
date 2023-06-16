<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Oswald:wght@200;400&family=Wix+Madefor+Display&display=swap" rel="stylesheet">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link rel="stylesheet" href="/assets/css/pesanan.css">
   <title>Layanan</title>
</head>
<body>
<script src="/assets/js/pesanan.js"></script>
@if (Auth::guard('tukang')->check())
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
             <li class="li-nav scroll-link"><a class="a-nav" href="/tukang">Pesanan</a></li>
             <li class="li-nav scroll-link"><a class="a-nav" href="/riwayatukang">Riwayat</a></li>
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
@else
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
   @endif
   
   {{-- CONTAINER-UNKNOWN-CONTENT-START --}}
   {{-- <div class="container-unknown-content">
      <div class="btn-unknown-value">
         <h1>Anda belum <span>memiliki pesanan</span></h1>
      </div>
      <button class="btn-content-unknown" onclick="window.location.href= '/user'">
         <span>Buat Pesanan</span>
      </button> 
   </div> --}}
   {{-- CONTAINER-UNKNOWN-CONTENT-ENDS --}}
   <div class="container-main-content">
      <div class="user-page">
         <div class="content">
            <div class="note">
               <h2>Catatan Tambahan</h2>
               <p>{{$pesanan->pesan}}</p>
            </div>
            <div class="attachment" id="lampiran">
               <h2>Lampiran Foto</h2>
               <img src="/storage/{{$pesanan->Foto}}" alt="Lampiran Foto" onclick="showAttachment()">
            </div>
            <div class="visit-time">
               <h2>Waktu Kunjungan</h2>
               <p>{{$pesanan->waktu}} - {{$pesanan->waktu_end}} </p>
            </div>
            <div class="address">
               <h2>Alamat</h2>
               <p>{{$alamat}}</p>
            </div>
            <div class="btn-confirmation">
               
            @if ($pesanan->id_tukang !== null)
               <div class="btn-confirmation-2">
                  <div class="confirmation-item-2">
                     <img src="/assets/img/check.png" alt="">
                     <h3>{{$pesanan->status}}</h3>
                  </div>
                  <div class="btn-confirmation-after-1">
                     @if ($pesanan->status !== $is)
                     <form action="/pesananselese/{{$pesanan->id}}" method="post">
                      @csrf
                     <button class="btn-content-confirmation-2">
                        <span>Check Selesai</span>
                     </button>
                     </form>
                     @endif 
                     @if (Auth::guard('tukang')->check())
                     <button class="btn-content-confirmation-2" onclick="openPopup4tukang()">
                        <span>Detail Pemesan</span>
                     </button> 
                     @else
                     <button class="btn-content-confirmation-2" onclick="openPopup()">
                        <span>Detail Tukang</span>
                     </button> 
                     @endif
                  </div>
               </div>
            @else
            <div class="btn-confirmation-1">
                  <div class="confirmation-item">
                     <img src="/assets/img/check-circle.png" alt="">
                     <h3>Menunggu Konfirmasi</h3>
                  </div>
                  @if (Auth::guard('tukang')->check())
                  <form action="/accpesanan/{{$pesanan->id}}" method="post">
                  @csrf
                  <button class="btn-content-confirmation-2">
                     <span>Terima</span>
                  </button> 
                  </form>
                  @else
                  <form action="/pesananselese/{{$pesanan->id}}" method="post">
                  @csrf
                  <button class="btn-content-confirmation-1">
                     <span>Check Selesai</span>
                  </button> 
                  </form>
                  @endif
               </div>
            @endif   
            </div>
            <div id="pemesan" class="popup">
               <div class="popup-content">
                  <div class="popup-overlay" onclick="closePopup4tukang()"></div>
                  <div class="popup-inner">
                     <span class="close" onclick="closePopup4tukang()">&times;</span>
                     <div class="tukang-info">
                        <img src="\storage\{{$pemesan->ProfilPic}}" alt="Foto TukanK">
                        <div class="Pemesan-detail">
                           <h4>Nama Pemesan :</h4>
                           <div class="box-label">
                              <p>{{$pemesan->name}}</p>
                           </div>
                           <h4>Alamat Pemesan :</h4>
                           <div class="box-label">
                              <p>{{$pemesan->Alamat}}</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            @if($tukang)
            <div id="popup" class="popup">
               <div class="popup-content">
                  <div class="popup-overlay" onclick="closePopup()"></div>
                  <div class="popup-inner">
                     <span class="close" onclick="closePopup()">&times;</span>
                     <div class="tukang-info">
                        <img src="\storage\{{$tukang->ProfilPic}}" alt="Foto TukanK">
                        <div class="tukang-detail">
                           <h4>Nama Tukang :</h4>
                           <div class="box-label">
                              <p>{{$tukang->name}}</p>
                           </div>
                           <h4>Alamat Tukang :</h4>
                           <div class="box-label">
                              <p>{{$tukang->Alamat}}</p>
                           </div>
                           <h4>Nomor HP Tukang :</h4>
                           <div class="box-label">
                              <p>{{$tukang->No_Hp}}</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            @endif
         </div>
      </div>
   </div>
</body>
</html>