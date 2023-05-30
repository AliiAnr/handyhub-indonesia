<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>HandHUB Dashboard</title>
   <link rel="icon" type="image/png" href="assets\img\start-renovation.png"/>
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Oswald:wght@200;400&family=Wix+Madefor+Display&display=swap" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="assets/css/userstyle.css">
   <title>User | HandyHub</title>
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
                <li class="li-nav scroll-link"><a class="a-nav" href="#home">Home</a></li>
                <li class="li-nav scroll-link"><a class="a-nav" href="#services">Services</a></li>
                <li class="li-nav scroll-link1"><a class="a-nav" href="#project">Project</a></li>
                <li class="li-nav scroll-link"><a class="a-nav" href="#blog">Blog</a></li>
               </ul>
            </div>
            <div class="log-sign-up">
               <div class="btn-login-sign">
                  <a href="#" target="_blank">
                     <button class="btn">
                        <span>Sign up</span>
                        <svg viewBox="0 0 13 10" height="10px" width="15px">
                            <path d="M1,5 L11,5"></path>
                            <polyline points="8 1 12 5 8 9"></polyline>
                        </svg>
                    </button>
                  </a>
               </div>
               <div class="btn-login-sign">
                  <a href="#" target="_blank">
                     <button class="btn">
                        <span>Sign in</span>
                        <svg viewBox="0 0 13 10" height="10px" width="15px">
                            <path d="M1,5 L11,5"></path>
                            <polyline points="8 1 12 5 8 9"></polyline>
                        </svg>
                    </button>
                  </a>
               </div>
            </div>
         </div>
      </nav>
      {{-- NAVIGATION-ENDS --}}
      
      {{-- CONTAINER-CONTENT-START --}}
      <div class="container-main-content">
            <div class="container-content-1">
               <div class="content-image">
                  <div class="image-border">
                     <a href="#">
                        <img src="/assets/img/mechanic.png" alt="Description of the image">
                     </a>
                  </div>
                  <p>Home Maintenance</p>
               </div>
               <div class="content-image">
                  <div class="image-border">
                     <a href="#">
                        <img src="/assets/img/maintenance.png" alt="Description of the image">
                     </a>
                  </div>
                  <p>Build and Renovate</p>
               </div>
               <div class="content-image">
                  <div class="image-border">
                     <a href="#">
                        <img src="/assets/img/prototype.png" alt="Description of the image">
                     </a>
                  </div>
                  <p>Design Inspiration</p>
               </div>
            </div>
      </div>
      {{-- CONTAINER-CONTENT-ENDS --}}
      
      {{-- BACK-COLOR-START --}}
      <div class="back-color">
         <div class="gradient-color">
            <h2 class="username-user">Hi, name</h2>
            <p class="back-text">
               Pilih layanan yang sesuai dengan kebutuhan
            </p>
         </div>
      </div>
      {{-- BACK-COLOR-ENDS --}}
      
      <script src="/assets/js/test.js"></script>
   </body>
</html>