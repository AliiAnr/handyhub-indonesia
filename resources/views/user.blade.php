<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main View</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Oswald:wght@200;400&family=Wix+Madefor+Display&display=swap" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="assets/css/styleuser.css">  

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
   <!-- {{-- NAVIGATION-START--}} -->
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
            <div class="Profil">
               <a href="#" target="_blank">
                  <span class="btn">
                     <span>
                     <img class="rounded-circle" width="24" height="24" src="assets\img\defaulprofilpic.jpg">
                     </span>
                     <span>Profil &nbsp&nbsp</span>
                  </span>
               </a>
            </div>
            <div class="btn-login-sign">
               <a href="#" target="_blank">
                  <button class="btn">
                     <span>Log Out</span>
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
   <!-- {{-- NAVIGATION-ENDS --}}
   {{-- Main Body --}} -->
   <div class="container-content">
      <div class="onimage">
         <div class="inside-content">
            <div id="home" class="getting-started-1">
               <p class="text-container-1">
                  Let Your Home Be Unique
               </p>
            </div>
            <div class="getting-started-2">
               <p class="text-container-2">
                  There are many variations of the passages of lorem Ipsum fromavailable,variations of the passages.
               </p>                
            </div>
            <button class="btn-content-started" onclick="window.open('#', '_blank')">
               <span>Get Started</span>
               <svg style="margin-top: 4px" width="19" height="17" viewBox="0 0 19 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                 <path d="M2 8.43542L15.7232 8.29857M10.6182 1.91138L17.1412 8.43436L10.4868 15.0887" stroke="#CDA274" stroke-width="2" stroke-linecap="square" stroke-linejoin="round"/>
               </svg>
            </button>             
         </div>
      </div>
   </div>
   <!-- {{-- Main Body --}}
   {{-- Footer --}} -->
   <footer class="container-footer">
      <div class="section-container">
         <div class="container-info">
            <div class="footer-left-side">
               <strong>PT HandyHub Indonesia</strong>
               <p class="address-name">
                  Jl. Majapahit No.62, Gomong, Kec. Selaparang, Kota Mataram, Nusa Tenggara Bar. 83115
               </p> 
            </div>
            <div class="footer-right-side">
               <div class="contact-button">
                  <a href="#">cs@HandyHub.com</a>
               </div>
               <div class="link-info">
                  <div class="link">
                     <a target="_blank" href="#">Facebook</a>
                  </div>
                  <div class="link-dot"></div>
                  <div class="link">
                     <a target="_blank" href="#">Instagram</a>
                  </div>
                  <div class="link-dot"></div>
                  <div class="link">
                     <a target="_blank" href="#">Twitter</a>
                  </div>
               </div>
               <div class="link-info">
                  <div class="link">
                     <a target="_blank" href="#">© HandyHub.com 2023</a>
                  </div>
                  <div class="link-dot"></div>
                  <div class="link">
                     <a target="_blank" href="#">FAQ</a>
                  </div>
                  <div class="link-dot"></div>
                  <div class="link">
                     <a target="_blank" href="#">Terms of Service</a>
                  </div>
               </div>
            </div> 
         </div>
      </div>
   </footer>
   <!-- {{-- Footer --}} -->
</body>
</html>