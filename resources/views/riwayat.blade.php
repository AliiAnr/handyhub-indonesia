<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Oswald:wght@200;400&family=Wix+Madefor+Display&display=swap" rel="stylesheet">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link rel="stylesheet" href="/assets/css/riwayat.css">
   <title>Layanan</title>
</head>
<body>
{{-- NAVIGATION-START--}}
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
               <p>2023-06-02 10:00 AM - 2023-06-04 09:00 AM</p>
            </div>
            <div class="address">
               <h2>Alamat</h2>
               <p>Alamat 1</p>
            </div>
            <div class="btn-confirmation">
               <div class="btn-confirmation-2">
                  <div class="confirmation-item-2">
                     <img src="/assets/img/check.png" alt="">
                     <h3>Pekerjaan Selesai</h3>
                  </div>
                  <button class="btn-content-confirmation-2" onclick="openPopup()">
                     <span>Detail Tukang</span>
                  </button> 
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
<script src="assets/js/layout.js"></script>
</body>
</html>