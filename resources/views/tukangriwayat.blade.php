<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Oswald:wght@200;400&family=Wix+Madefor+Display&display=swap" rel="stylesheet">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link rel="stylesheet" href="/assets/css/tukangriwayat.css">
   <title>Layanan</title>
</head>
<body>
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
             <li class="li-nav scroll-link"><a class="a-nav" href="#services">Pesanan</a></li>
             <li class="li-nav scroll-link">
               <button id="activationButton" class="unactive">Aktivasi</button>
             </li>
             <li class="li-nav scroll-link"><a class="a-nav" href="#blog">Riwayat</a></li>
            </ul>
         </div>
         <div class="btn-profile">
            <a href="#">
               <img src="/assets/img/user.png" alt="" class="profil-image">
            </a>
         </div>
      </div>
   </nav>
   {{-- NAVIGATION-ENDS --}}
   
   {{-- CONTAINER-UNKNOWN-CONTENT-START --}}
   {{-- <div class="container-unknown-content">
      <div class="btn-unknown-value">
         <h1><span>Belum terdapat pesanan</span></h1>
      </div>
      <button class="btn-content-unknown" onclick="window.location.href= '#'">
         <span>Terima Pesanan</span>
      </button> 
   </div> --}}
   {{-- CONTAINER-UNKNOWN-CONTENT-ENDS --}}
   
   <div class="container-main-content">
      <div class="user-page">
         <div class="content">
            <div class="note">
               <h2>Catatan Tambahan</h2>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis soluta blanditiis, sunt magni ut cum dolor, ducimus laboriosam odit deserunt corrupti facere aperiam ullam nobis minima nihil quas velit vitae nostrum! Alias molestias quasi aut vel sed explicabo, numquam nostrum soluta libero, harum mollitia quis dolores error natus assumenda, nam eos omnis facere cumque doloribus. Enim quae velit rem magni vitae quia est tempora necessitatibus! Incidunt sapiente architecto veritatis molestiae ab ipsum temporibus facere facilis fugit optio maxime tenetur alias inventore iste sunt reprehenderit, sint minus, ullam tempora! Iste aspernatur quisquam ad est explicabo maxime nam id voluptatem commodi ipsum.</p>
            </div>
            <div class="attachment" id="lampiran">
               <h2>Lampiran Foto</h2>
               <img src="/assets/img/background-image-3.jpg" alt="Lampiran Foto" onclick="showAttachment()">
            </div>
            <div class="visit-time">
               <h2>Waktu Kunjungan</h2>
               {{-- kalau pekerjaan belum selesai pake waktu yang di bawah ini --}}
               {{-- <p>2023-06-02 10:00 AM</p> --}}
               
               {{-- kalau pekerjaan telah selesai pake waktu yang di bawah ini --}}
               <p>2023-06-02 10:00 AM - 2023-06-03 09:00 AM</p>
            </div>
            <div class="address">
               <h2>Alamat</h2>
               <p>Alamat 1</p>
            </div>
            <div class="btn-confirmation">
               {{-- <div class="btn-confirmation-2">
                  <div class="confirmation-item-2">
                     <img src="/assets/img/check.png" alt="">
                     <h3>Konfirmasi Diterima</h3>
                  </div>
                  <div class="btn-confirmation-after-2">
                     <button class="btn-content-confirmation-3" onclick="#">
                        <span>Pekerjaan Selesai</span>
                     </button> 
                     <button class="btn-content-confirmation-2" onclick="openPopup()">
                        <span>Detail Pemesan</span>
                     </button> 
                     <button class="btn-content-confirmation-2" onclick="#">
                        <span>Hubungi Pemesan</span>
                     </button> 
                  </div>
               </div> --}}
               <div class="btn-confirmation-2">
                  <div class="confirmation-item-2">
                     <img src="/assets/img/check.png" alt="">
                     <h3>Pekerjaan Selesai</h3>
                  </div>
                  <div class="btn-confirmation-after-1"> 
                     <button class="btn-content-confirmation-2" onclick="openPopup()">
                        <span>Detail Pemesan</span>
                     </button> 
                     <button class="btn-content-confirmation-2" onclick="#">
                        <span>Hubungi Pemesan</span>
                     </button> 
                  </div>
               </div>
            </div>
            <div id="popup" class="popup">
               <div class="popup-content">
                  <div class="popup-overlay" onclick="closePopup()"></div>
                  <div class="popup-inner">
                     <span class="close" onclick="closePopup()">&times;</span>
                     <div class="tukang-info">
                        <img src="assets/img/tukang.jpg" alt="Foto TukanK">
                        <div class="tukang-detail">
                           <h4>Nama Tukang :</h4>
                           <div class="box-label">
                              <p>Raihan.ST</p>
                           </div>
                           <h4>Alamat Tukang :</h4>
                           <div class="box-label">
                              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore sequi aliquid laborum? Ut, veniam rerum quibusdam voluptatibus quis numquam id quos aut praesentium, ex aspernatur corporis minima voluptas saepe recusandae tempora, sequi enim voluptates iure qui neque porro non! Temporibus tenetur corrupti fugit recusandae aperiam consequatur deleniti. Corporis, laborum vero.</p>
                           </div>
                           <h4>Nomor HP Tukang :</h4>
                           <div class="box-label">
                              <p>109283746</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
<script src="assets/js/tukang.js"></script>
</body>
</html>