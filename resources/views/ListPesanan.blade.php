<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Oswald:wght@200;400&family=Wix+Madefor+Display&display=swap" rel="stylesheet">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link rel="stylesheet" href="/assets/css/bantuan.css">
   <title>Bantuan</title>
</head>
<body>
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
   
   <div class="container-main-content">
      <div class="container-content-1">
      @foreach($pesanan as $item)
         <div class="container-item">
            <a href="/pesanan/{{$item->id}}" class="">
               <div class="btn-item-service">
                  <div class="btn-logo">
                     <div class="back-logo">
                        <img src="storage\{{$item->Foto}}" alt="">
                     </div>
                     <h4>{{$item->waktu." ".$item->status}}</h4>
                  </div>
                  <img src="/assets/img/right-arrow.png" alt="">
               </div>  
            </a>
         </div>
         @endforeach
      </div>
   </div>
</body>
</html>