<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>HandHUB Home</title>
   <link rel="icon" type="image/png" href="assets\img\start-renovation.png"/>
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
   <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Oswald:wght@200;400&family=Wix+Madefor+Display&display=swap" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="assets/css/style.css">
   {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"> --}}
</head>
   <body>
      {{-- jangan pake ini, nanti ganti --}}
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
      {{-- Alert-START--}}
         @if(session()->has('yay'))
         <div class="alert alert-success alert-dismissible fade show position-fixed" role="alert">
            <strong>Selamat!</strong> {{session('yay')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>
         @endif
         @if(session()->has('nay_login'))
         <div class="alert alert-danger alert-dismissible fade show position-fixed" role="alert">
            <strong>Perhatian!</strong> {{session('nay_login')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>
         @endif
      {{-- Alert-END--}}
      
      {{-- sampe sini jangan pake --}}
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
               <li class="li-nav scroll-link"><a class="a-nav" href="#project">Project</a></li>
               <li class="li-nav scroll-link"><a class="a-nav" href="#blog">Blog</a></li>
               </ul>
            </div>
            <div class="log-sign-up">
            @if (Auth::guard('tukang')->check())
               <div class="btn-profile">
               @auth
               @if(auth()->user()->ProfilPic)
                  <a href="/profil">
                     <img src="/assets/img/user.png" alt="" class="profil-image"> 
                  </a>
               @else
                  <a href="/profil">
                     <img src="/storage/{{ auth()->user()->ProfilPic }}" alt="" class="profil-image"> 
                  </a>
               @endif
               @else
               <a href="/profil">
                     <img src="/assets/img/user.png" alt="" class="profil-image"> 
               </a>
               @endauth
               </div>
               <div class="user-name">
                  <p>{{ auth()->guard('tukang')->user()->name }}</p>
               </div>
            @else
               @auth
               <div class="btn-profile">
                  @if(auth()->user()->ProfilPic === NULL)
                  <a href="/profil">
                     <img src="/assets/img/user.png" alt="" class="profil-image"> 
                  </a>
                  @else
                  <a class= "btn-sus-2" href="/profil">
                     <img class = "profil-sus" src="/storage/{{auth()->user()->ProfilPic}}" alt="" class="profil-image"> 
                  </a>
                  @endif
               </div>
               <div class="user-name">
                  <p>{{ auth()->user()->name }}</p>

               </div>
               @else
                  <div class="btn-login-sign">
                        <button class="btn" id="form-open">
                           <span>Sign in</span>
                           <svg viewBox="0 0 13 10" height="10px" width="15px">
                              <path d="M1,5 L11,5"></path>
                              <polyline points="8 1 12 5 8 9"></polyline>
                           </svg>
                     </button>
                  </div>
               @endauth
            @endif
            </div>
         </div>
      </nav>
      {{-- NAVIGATION-ENDS --}}
      {{-- CONTENT-START --}}

      <div class="container-content">
         <div class="container-image-top">
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
               <button class="btn-content-started" onclick="window.open('/userMainMenu', '_blank')">
                  <span>Get Started</span>
                  <svg style="margin-top: 4px" width="19" height="17" viewBox="0 0 19 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M2 8.43542L15.7232 8.29857M10.6182 1.91138L17.1412 8.43436L10.4868 15.0887" stroke="#CDA274" stroke-width="2" stroke-linecap="square" stroke-linejoin="round"/>
                  </svg>
               </button>             
            </div>
         </div>
      </div>
      <div class="container-content-two">
         <div id="services" class="container-item-caption">
            <div class="text-container">Our Services</div>
            <div class="item-caption"></div>
         </div>
         <div class="service-item">
            <div class="service-list">
               <p class="title">Project Plan</p>
               <p class="content">
                  Many services are available for your building, house or apartment, from repairs, installations, maintenance, and more.
               </p>
            </div>
            <div class="service-list">
               <p class="title">Interior Work</p>
               <p class="content">
                  Find the idea, style inspiration, and bring it to your home. Make your home shine, just like you!
               </p>
            </div>
            <div class="service-list">
               <p class="title">Realization</p>
               <p class="content">
                  Tell us your plan. Chill, let us help you realize your dream renovation. Handled by project consultant.
               </p>
            </div>
         </div>
         <div class="container-content-three">
            <div class="container-content-text">
               <div class="text-content-first">
                  <p>We Create The Art Of Stylish Living Stylishly</p>
               </div>
               <div class="text-content-second">
                  <p>It is a long established fact that a reader will be distracted by the of readable content of a page when lookings at its layouts the points of using that it has a more-or-less normal.</p>
               </div>
               <div class="text-content-third">
                  <div class="icon-content">
                     <img src="/assets/img/call-icon.svg" alt="Logo">
                  </div>
                  <div class="icon-text">
                     <p class="number">+6285774657873</p>
                     <p class="text-number">Call Us Anytime</p>
                  </div>
               </div>
               <button class="btn-content-started" onclick="window.open('#', '_blank')">
                  <span>Get Free Estimate</span>
                  <svg style="margin-top: 4px" width="19" height="17" viewBox="0 0 19 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M2 8.43542L15.7232 8.29857M10.6182 1.91138L17.1412 8.43436L10.4868 15.0887" stroke="#CDA274" stroke-width="2" stroke-linecap="square" stroke-linejoin="round"/>
                  </svg>
               </button>  
            </div>
            <div class="container-content-image">
               <img src="/assets/img/hero-image-content-three.svg" alt="">
            </div>
         </div>
         <div class="container-content-four">
            <div class="text-content-two">
               <p>What the People Thinks About Us</p>
            </div>
            <div class="testimonial-list">
               <div class="testimonial-list-item">
                  <div class="testimonial-container">
                     <div class="image-item">
                        <img class="testimonial-image" src="/assets/img/testi-1.jpg" alt="Logo">
                     </div>
                     <div class="image-text-item">
                        <p class="image-name">Nattasha Mith</p>
                        <p class="image-address">Sydney, USA</p>
                     </div>
                  </div>
                  <div class="description-item">
                     <p>
                        WOw, Sangat Membantu Banget Dalam Memperbaiki my Roof.
                     </p>
                  </div>
               </div>
               <div class="testimonial-list-item">
                  <div class="testimonial-container">
                     <div class="image-item">
                        <img class="testimonial-image" src="/assets/img/testi-2.jpg" alt="Logo">
                     </div>
                     <div class="image-text-item">
                        <p class="image-name">Raymond Galario</p>
                        <p class="image-address">Sydney, Australia</p>
                     </div>
                  </div>
                  <div class="description-item">
                     <p>
                        TUkang is sangat ganteng, dan ramah. Jadi ingin melakukan order terus dech,,, !!!
                     </p>
                  </div>
               </div>
               <div class="testimonial-list-item">
                  <div class="testimonial-container">
                     <div class="image-item">
                        <img class="testimonial-image" src="/assets/img/testi-3.jpg" alt="Logo">
                     </div>
                     <div class="image-text-item">
                        <p class="image-name">Benny Roll</p>
                        <p class="image-address">Sydney, New York</p>
                     </div>
                  </div>
                  <div class="description-item">
                     <p>
                        Suka banget sama aplikasinya, sangat mudah dipahami dan diakses.
                     </p>
                  </div>
               </div>
            </div>
         </div>
         <div id="project" class="container-content-five">
            <div class="text-content-three">
               <p class="theme-content">Follow Our Projects</p>
               <p class="text-theme">It is a long established fact that a reader will be distracted by the of readable content of page  lookings at its layouts  points.</p>
            </div>
            <div class="content-five-list-item">
               <div class="content-list-item">
                  <img src="/assets/img/content-image-1.jpg" alt="Logo">
                  <div class="image-text-list">
                     <div class="note-img">
                        <p class="note-theme">Modern Kitchan</p>
                        <p class="text-note">Decor / Architectur</p>
                     </div>
                     <button class="btn-content-five-item" onclick="window.open('#', '_blank')">
                        <img src="/assets/img/button-img.jpg" alt="Button">
                     </button>  
                  </div>
               </div>
               <div class="content-list-item">
                  <img src="/assets/img/content-image-2.jpg" alt="Logo">
                  <div class="image-text-list">
                     <div class="note-img">
                        <p class="note-theme">Modern Kitchan</p>
                        <p class="text-note">Decor / Architectur</p>
                     </div>
                     <button class="btn-content-five-item" onclick="window.open('#', '_blank')">
                        <img src="/assets/img/button-img.jpg" alt="Button">
                     </button>  
                  </div>
               </div>
               <div class="content-list-item">
                  <img src="/assets/img/content-image-3.jpg" alt="Logo">
                  <div class="image-text-list">
                     <div class="note-img">
                        <p class="note-theme">Modern Kitchan</p>
                        <p class="text-note">Decor / Architectur</p>
                     </div>
                     <button class="btn-content-five-item" onclick="window.open('#', '_blank')">
                        <img src="/assets/img/button-img.jpg" alt="Button">
                     </button>  
                  </div>
               </div>
               <div class="content-list-item">
                  <img src="/assets/img/content-image-4.jpg" alt="Logo">
                  <div class="image-text-list">
                     <div class="note-img">
                        <p class="note-theme">Modern Kitchan</p>
                        <p class="text-note">Decor / Architectur</p>
                     </div>
                     <button class="btn-content-five-item" onclick="window.open('#', '_blank')">
                        <img src="/assets/img/button-img.jpg" alt="Button">
                     </button>  
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="container-information">
         <div class="information-item">
            <div class="information-text">
               <p class="information-text-1">22</p>
               <p class="information-text-2">Years Of Experience</p>
            </div>
         </div>
         <svg width="1" height="130" viewBox="0 0 1 130" fill="none" xmlns="http://www.w3.org/2000/svg">
            <line x1="0.5" y1="2.18557e-08" x2="0.499994" y2="130" stroke="#CDA274"/>
         </svg>
         <div class="information-item">
            <div class="information-text">
               <p class="information-text-1">0</p>
               <p class="information-text-2">Succes Project</p>
            </div>
         </div>
         <svg width="1" height="130" viewBox="0 0 1 130" fill="none" xmlns="http://www.w3.org/2000/svg">
            <line x1="0.5" y1="2.18557e-08" x2="0.499994" y2="130" stroke="#CDA274"/>
         </svg>
         <div class="information-item">
            <div class="information-text">
               <p class="information-text-1">28</p>
               <p class="information-text-2">Active Project</p>
            </div>
         </div>
         <svg width="1" height="130" viewBox="0 0 1 130" fill="none" xmlns="http://www.w3.org/2000/svg">
            <line x1="0.5" y1="2.18557e-08" x2="0.499994" y2="130" stroke="#CDA274"/>
         </svg>
         <div class="information-item">
            <div class="information-text">
               <p class="information-text-1">89</p>
               <p class="information-text-2">Happy Customers</p>
            </div>
         </div>
      </div>
      <div class="container-content-next">
         <div id="blog" class="container-content-six">
            <div class="content-six-item-1">
               <p class="text-content-six-1">Articles & News</p>
               <p class="text-content-six-2">It is a long established fact that a reader will be distracted by the of readable content of a page when lookings at its layouts the points of using.</p>
            </div>
            <div class="content-six-item-2">
               <div class="content-list-item">
                  <div class="background-image-1">
                     <p>Living Design</p>
                  </div>
                  <div class="text-background">
                     <p class="text-background">
                        Let’s Get Solution For Building Construction Work
                     </p>  
                  </div>
                  <div class="date-image">
                     <p class="date-text">22 December,2022 </p>
                     <button class="btn-content-five-item" onclick="window.open('https://ugreen.io/sustainable-architecture-a-guide-for-architects-interior-designers-and-construction-companies/', '_blank')">
                        <img src="/assets/img/button-img.jpg" alt="Button">
                     </button>
                  </div>
               </div>
               <div class="content-list-item">
                  <div class="background-image-2">
                     <p>Kitchen Design</p>
                  </div>
                  <div class="text-background">
                     <p class="text-background">
                        Low Cost Latest Invented Interior Designing Ideas.
                     </p>
                  </div>
                  <div class="date-image">
                     <p class="date-text">26 December,2022 </p>
                     <button class="btn-content-five-item" onclick="window.open('https://www.beautifulhomes.com/interior-design-services/design-ideas/modular-kitchen/low-budget-modular-kitchen.html', '_blank')">
                        <img src="/assets/img/button-img.jpg" alt="Button">
                     </button>
                  </div>
               </div>
               <div class="content-list-item">
                  <div class="background-image-3">
                     <p>Interior Design</p>
                  </div>
                  <div class="text-background">
                     <p class="text-background">
                        Best For Any Office & Business Interior Solution
                     </p>
                  </div>
                  <div class="date-image">
                     <p class="date-text">23 December,2022 </p>
                     <button class="btn-content-five-item" onclick="window.open('https://www.decorilla.com/online-decorating/10-best-office-interior-design-services/', '_blank')">
                        <img src="/assets/img/button-img.jpg" alt="Button">
                     </button>
                  </div>
               </div>
            </div>
         </div>
         <div class="container-join">
            <div class="text-join">
               <p class="join-text">
                  Wanna join the handyhub?
               </p>
               <p class="join-content">
                  It is a long established fact  will be distracted.
               </p>
            </div>
            <button class="btn-join-started" onclick="window.open('https://goo.gl/maps/x3LWE5ZMvfGpCVcBA', '_blank')">
               <span>Contact With Us</span>
               <svg style="margin-top: 4px" width="19" height="17" viewBox="0 0 19 17" fill="none" xmlns="http://www.w3.org/2000/svg">
               <path d="M2 8.43542L15.7232 8.29857M10.6182 1.91138L17.1412 8.43436L10.4868 15.0887" stroke="#292F36" stroke-width="2" stroke-linecap="square" stroke-linejoin="round"/>
               </svg>
            </button> 
         </div>
      </div>
      {{-- LOGIN-FORM-START --}}
      <section class="home">
         <div class="form_container">
         <i class="uil uil-times form_close"></i>
         <!-- Login From -->
         <div class="form login_form">
            <form class="box-log-sign" action="/loginAuth" method="post">
               @csrf
               <h2 class="form-title">Login</h2>
               <div class="input_box">
               <input type="email" placeholder="Enter your email" name="email" id="email"  class="@error('email') is-invalid @enderror"  required="required" />
               <i class="uil uil-envelope-alt email"></i>
               </div>
               @error('email')
                  <div class="invalid-feedback">Email Tidak Jelas</div>
               @enderror
               <div class="input_box">
               <input type="password" placeholder="Enter your password" name="password" id="password" required="required" />
               <i class="uil uil-lock password"></i>
               <i class="uil uil-eye-slash pw_hide"></i>
               </div>
               <div class="option_field">
               <span class="checkbox">
                  <input type="checkbox" id="check" />
                  <label for="check">Remember me</label>
               </span>
               <a href="#" class="forgot_pw">Forgot password?</a>
               </div>
               <button class="button">Login Now</button>
               <div class="login_signup">Don't have an account? <a href="#" id="signup">Signup</a></div>
            </form>
         </div>
         <!-- Signup From -->
         <div class="form signup_form">
            <form class="box-log-sign" action="/registerUser" method="post">
               @csrf
               <h2>SignUp</h2>
               <div class="input_box">
               <input type="email" placeholder="Enter your email" class="@error('email') is-invalid @enderror" name="email" required="required"/>
               <i class="uil uil-envelope-alt email"></i>
               </div>
               <div class="input_box">
               <input placeholder="Enter your name" name="name" required="required"/>
               <i class="uil uil-envelope-alt name"></i>
               </div>
               <div class="input_box">
               <input placeholder="Enter your phone number" name="No_Hp" required="required"/>
               <i class="uil uil-envelope-alt name"></i>
               </div>
               @error('email')
                  <div class="invalid-feedback"> Email Sudah Digunakan </div>
               @enderror
               <div class="input_box">
               <input type="password" placeholder="Create password" name="password" class="@error('password') is-invalid @enderror" required="required"/> />
               <i class="uil uil-lock password"></i>
               <i class="uil uil-eye-slash pw_hide"></i>
               </div>
               @error('password')
                  <div class="invalid-feedback">Password Minimal 6 character</div>
               @enderror
               <div class="input_box">
               <input type="password" placeholder="Confirm password" required="required" />
               <i class="uil uil-lock password"></i>
               <i class="uil uil-eye-slash pw_hide"></i>
               </div>
               <button class="button">SignUp Now</button>
               <div class="login_signup">Already have an account? <a href="#" id="login">Login</a></div>
            </form>
         </div>
         </div>
      </section>
      {{-- LOGIN-FORM-ENDS --}}
      <footer class="container-footer">
         <div class="section-container">
            <div class="container-logo">
               <div class="logo">
                  <a href="#">
                     <img src="assets/img/start-renovation.png" alt="logo">
                  </a>
               </div>
               <h1 class="text-logo">HandyHub</h1>
            </div>
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
      <script src="/assets/js/layout.js"></script>
   </body>
</html>