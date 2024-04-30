<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casmir N</title>
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bai+Jamjuree:wght@400;500;600;700&display=swap');

:root{
    --color-body:#b6cbce;
    --color-heading:#eef3db;
    --color-base:#033f47;
    --color-base2:#022a30;
    --color-brand:#e0f780;
    --color-brand2:#deff58;
    --sidebar-width:240px;
    --font-base:"Bai jamjuree";
}

body{
    background-color: var(--color-base2);
    color: var(--color-body);
    font-family: var(--font-base), sans-serif;
}

h1,h2,h3,h4,h5,h6{
    color: var(--color-heading);
    font-weight: 700;
}

a{
    text-decoration: none;
    color: var(--color-body);
    transition: all 0.4s ease;
}

a:hover{
    color: var(--color-brand);
  
}

img{
    width: 100%;
}

.text-brand{
    color: var(--color-brand);
}

.bg-base{
    background-color: var(--color-base);
}

.full-height{
    min-height: 100vh;
    height: 100%;
    display: flex;
    align-items: center;
    flex-direction: column;
    justify-content: center;
    padding-top: 80px;
    padding-bottom: 80px;
    border-bottom: 5px solid rgba(255, 255, 255, 0.1);
}

.shadow-effect{
     border-radius: 20px;
    transition: all 0.7s;
}

.shadow-effect:hover{
    box-shadow:-6px 6px 0 5px var(--color-brand) ;
}

.iconbox{
    border-radius: 20px;
    width: 60px;
    height: 60px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 32px;
    background-color: var(--color-brand);
    color: var(--color-base);
}

/* NAVBAR */

.navbar{
    background-color: var(--color-base);
}

.navbar .nav-link{
    font-weight: 700;
    color: var(--color-brand);
}

.navbar .nav-link:hover{
    color: var(--color-brand2);
    
}

.navbar .nav-link.active{
    color: var(--color-brand);
}

/* .Explore{
    background-color: var(--color-brand2);
    border: 1px solid yellow;
    color: var(--color-base2);
    font-weight: bolder;
} */

@media (min-width: 992px) {
            .navbar{
                min-height: 100vh;
                width: var(--sidebar-width);
                background: linear-gradient(rgb(3, 63, 71,0.7),rgb(3, 63, 71,0.7)),url(forest.jpg);
                background-size: cover;
                background-position: center;
            }

            .nav-brand img{
                border: 10px solid var(--color-brand);
            }

            /* CONTENT WRAPPER */
            #content-wrapper{
                padding-left: var(--sidebar-width);
            }
}

/* BTN */

.btn{
    padding: 12px 28px;
    font-weight: 700;
}

.btn-brand{
    background-color: var(--color-brand);
    border-color: var(--color-brand);
}

.btn-brand:hover,btn-brand:focus{
    background-color: var(--color-brand2);
    color: var(--color-base);
    border-color: var(--color-body);
}

.link-custom{
    font-weight: 700;
    position: relative;
}

.link-custom::after{
    content: "";
    width: 0%;
    height: 5px;
    background-color: var(--color-brand);
    position: absolute;
    left: 0;
    top: 100%;
    transition: all 1.5s;
}

.link-custom:hover::after{
    width: 100%;
}

/* CARD */

.card-custom .card-custom-image{
        overflow: hidden;
}

.card-custom .card-custom-image img{
    transition: all 1.2s ease;
}

.card-custom:hover .card-custom-image img{
    transform: scale(1.03);
}

/*CONTACT*/
#contact .form-control{
    background-color: var(--color-base);
    border-color: var(--color-base);
    color: var(--color-body);
}

#contact .form-control:focus{
    border-color: var(--color-brand);
    box-shadow: none;
}

#contact .form-control::placeholder{
    color: var(--color-body);
}

#contact input .form-control{
    height: 45px;
}

/* SOCIAL-LINKS */



.social-links a{
    width: 40px;
    height: 40px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    background-color: var(--color-base);
    border-radius: 100px;
    font-size: 35px;
}

    </style>
</head>
<body data-bs-spy="scroll" data-bs-target="navbar">

    <!--NAVBAR-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
      <div class="container flex-lg-column">
        <a class="navbar-brand mx-lg-auto mb-lg4" href="#"><span class="h4 fw-bold d-block d-lg-none">Casmir Nnamani</span>
        <img src="img/IMG-20231108-WA0006.jpg" class="d-none d-lg-block rounded-circle" alt="" style="border: 10px solid #deff58;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto flex-lg-column text-lg-center">
            <li class="nav-item">
              <a class="nav-link " href="#home">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#services">SERVICES</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#work">WORK</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">ABOUT</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">CONTACT</a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>
    <!--//NAVBAR-->
  
    <!--CONTENT WRAPPER-->
    <div id="content-wrapper">
  
      <!--HOME-->
      <section id="home" class="full-height  px-lg-5 ">
        <div class="container">
          <div class="row">
            <div class="col-lg-8">
              <h1 class="fw-bold h1"  data-aos="fade-up">I'M A FRONT-END <span class="text-brand">WEB DESIGNER </span>FROM LAGOS,NIGERIA</h1>
              <p class="fw-bold h5 lead mt-4 mb-4" data-aos="fade-up" data-aos-delay="500">
                I am Camir Nnamani, I sculpt immersive digital realms, curating high-impact experiences that speak in the
                language of innovation and engagement.
              </p><br><br>
            <div data-aos="fade-up" data-aos-delay="800">
              <a href="#work" class="btn btn-brand ">Explore My work</a>
              <a href="#" class="link-custom mx-4">Call: (+234) 907 323 5631</a>
            </div>
            </div>
          </div>
        </div>
        
      </section>
      <!--//HOME-->
      <!-- SERVICES -->
  
      <section id="services" class="full-height px-lg-5">
        <div class="container">
  
          <div class="row pb-4" data-aos="fade-up">
            <div class="col-lg-8">
              <h6 class="text-brand">SERVICES</h6>
              <h1>Services That I Provide</h1>
            </div>
          </div>
  
          <div class="row gy-4 h5">
            <div class="col-md-4" data-aos="fade-up">
              <div class="service p-4 bg-base rounded-5 shadow-effect">
                  <div class="iconbox rounded-circle">
                    <i class="las la-feather"></i>
                  </div>  
                  <h5 class="mt-4 mb-2">MS Word Designs</h5>
                  <p>I weave words and transform documents into polished masterpieces with finesse and precision. Making every detail Beautiful, elegant and pleasing to the beholder</p>
                  <a href="#" class="link-custom">Read More</a>
              </div>
            </div>
  
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="500">
              <div class="service p-4 bg-base rounded-5 shadow-effect">
                  <div class="iconbox rounded-circle">
                    <i class="las la-file-excel"></i>
                  </div>  
                  <h5 class="mt-4 mb-2 ">MS Excel Expert</h5>
                  <p>Unlocking the power of data with precision and finesse, I transform spreadsheets into masterpieces, sculpting raw information into narratives as an Excel virtuoso. With over 3yrs experience</p>
                  <a href="#" class="link-custom">Read More</a>
              </div>
            </div>
  
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="800">
              <div class="service p-4 bg-base rounded-5 shadow-effect">
                  <div class="iconbox rounded-circle">
                    <i class="las la-laptop-code"></i>
                  </div>  
                  <h5 class="mt-4 mb-2">Web Designing</h5>
                  <p>"As a front-end maestro, I craft digital experiences that captivate, seamlessly blending aesthetics and functionality to bring visions to life with pixel-perfect precision. withexperience"</p>
                  <a href="#" class="link-custom">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </section>
  
      <!--//SERVICES -->
  
      <!-- WORK -->
  
      <section id="work" class="full-height px-lg-5">
        <div class="container">
  
          <div class="row pb-4" data-aos="fade-up">
            <div class="col-lg-8">
              <h6 class="text-brand">WORK</h6>
              <h1>My Recent Projects[NOTE:these sites are already existing websites which i recreated]</h1>
            </div>
          </div>
  
          <div class="row gy-4 h5">
  
            <div class="col-md-6 " data-aos="fade-up" >
              <div class="card-custom rounded-4 bg-base shadow-effect">
                <div class="card-custom-image">
                  <img class="rounded-4" src="./img/proj1.jpg" alt="" style="border-radius: 30px;">
                </div>
                <div class="card-custom-content p-4 ">
                  <h4>AliExpress</h4>
                  <p>Discover a world of style and savings at our online shopping haven where fashion meets convenience, and every click brings you closer to the perfect find,@AliExpress.com</p>
                  <a href="#" class="link-custom">Read More</a>
                </div>
              </div>
            </div>
  
            <div class="col-md-6"data-aos="fade-up" data-aos-delay="500">
              <div class="card-custom rounded-4 bg-base shadow-effect">
                <div class="card-custom-image">
                  <img class="rounded-4" src="./img/proj2.jpeg" alt="" style="border-radius: 30px;">
                </div>
                <div class="card-custom-content p-4 ">
                  <h4>Booking.Com</h4>
                  <p>Elevate your style effortlessly  where sophistication meets simplicity. Explore the perfect suit for every occasion on our exclusive booking platform,@Booking.com</p>
                  <a href="#" class="link-custom">Read More</a>
                </div>
              </div>
            </div>
  
            <div class="col-md-6"data-aos="fade-up" data-aos-delay="600">
              <div class="card-custom rounded-4 bg-base shadow-effect">
                <div class="card-custom-image">
                  <img class="rounded-4" src="./img/proj4.jpg" alt="" style="border-radius: 30px;">
                </div>
                <div class="card-custom-content p-4 ">
                  <h4>Zillow Real E-stateHousing</h4>
                  <p>Discover your dream home with ease. Uncover a world of possibilities in real estate, tailored to your unique aspirations. Give us a chance </p>
                  <a href="#" class="link-custom">Read More</a>
                </div>
              </div>
            </div>
  
            <div class="col-md-6"data-aos="fade-up" data-aos-delay="700">
              <div class="card-custom rounded-4 bg-base shadow-effect">
                <div class="card-custom-image">
                  <img class="rounded-4" src="./img/proj3.jpg"  alt="" style="border-radius: 30px;">
                </div>
                <div class="card-custom-content p-4 ">
                  <h4>ChiTheoautomobile</h4>
                  <p>Rev up your journey to the perfect ride. Explore excellence at our car dealership  where your dream car awaits (Lambo,Jeep,Maybach and  more),@ChiTheoautomobile.com</p>
                  <a href="#" class="link-custom">Read More</a>
                </div>
              </div>
            </div>
          </div>
  
        </div>
      </section>
  
      <!--//WORK -->
  
      <!-- ABOUT -->
  
      <section id="about" class="full-height px-lg-5">
  
        <div class="container">
  
          <div class="row pb-4" data-aos="fade-up">
            <div class="col-lg-8">
              <h6 class="text-brand">ABOUT</h6>
              <h1>My Education & Experience</h1>
            </div>
          </div>
  
          <div class="row gy-5">
            <div class="col-lg-6">
              
              <h3 class="mb-4" data-aos="fade-up" data-aos-delay="500">Education</h3>
              <div class="row gy-4">
  
                <div class="col-12" data-aos="fade-up" data-aos-delay="500">
                  <div class="bg-base p-4 rounded-4 shadow-effect">
                    <h4>MS Excel Expert</h4>
                    <p class="text-brand mb3 h6">@Globaltech Computer institute</p>
                    <p class="h5 mb-0">Learnt and became an excel expert @Globaltech Computer institute</p>
                  </div>
                </div>
  
                <div class="col-12" data-aos="fade-up" data-aos-delay="500">
                  <div class="bg-base p-4 rounded-4 shadow-effect">
                    <h4>Web Design(html,css & Javascript)</h4>
                    <p class="text-brand mb3 h6">@Globaltech Computer institute</p>
                    <p class="h5 mb-0">I recently finished my front-end course @globaltech computer instute</p>
                  </div>
                </div>
              
              </div>
  
            </div>
  
            <div class="col-lg-6">
              <h3 class="mb-4" data-aos="fade-up" data-aos-delay="800">Experience</h3>
              <div class="row gy-4">
  
                <div class="col-12" data-aos="fade-up" data-aos-delay="500">
                    <div class="bg-base p-4 rounded-4 shadow-effect">
                      <h4>MS Excel Expert</h4>
                      <p class="text-brand mb3 h6">(Non-profit Project)</p>
                      <p class="h5 mb-0">Ive worked extensively with spreadsheets, using them manually and also mathematically for operations</p>
                    </div>
                  </div>
  
                  <div class="col-12" data-aos="fade-up" data-aos-delay="500">
                    <div class="bg-base p-4 rounded-4 shadow-effect">
                      <h4>MS Excel Expert</h4>
                      <p class="text-brand mb3 h6">(Non-profit Project)</p>
                      <p class="h5 mb-0">I recreate already existing websites such as the ones you see in the work section of this portfolio</p>
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </section>
  
      <!--//ABOUT --> 
  
      
      <!--CONTACT -->
      <section id="contact" class="full-height px-lg-5">
        <div class="container">
  
          <div class="row justify-content-center text-center ">
            <div class="col-lg-8 pb-4">
              <h6 class="text-brand">CONTACT</h6>
              <h1> Interested in Working Together?Let's talk</h1>
            </div>
  
            <div class="col-lg-8">
              
    
  
      <form action="email.php" method="post" class="row g-lg-3 gy-3" data-aos="fade-up" data-aos-delay="400">
    <div class="form-group col-md-6">
        <input type="text" class="form-control" name="name" placeholder="Enter your name">
    </div>

    <div class="form-group col-md-6">
        <input type="email" class="form-control" name="email" placeholder="Enter your email address">
    </div>

    <div class="form-group col-12">
        <input type="text" class="form-control" name="subject" placeholder="Enter Subject">
    </div>

    <div class="form-group col-12">
        <textarea name="message" rows="5" class="form-control" placeholder="Enter your Message"></textarea>
    </div>

    <div class="form-group col-12 d-grid">
        <button type="submit" class="btn btn-brand">Contact Me</button>
    </div>
</form>
  
            </div>
          </div>
  
  
        </div> 
      </section>
      <!--//CONTACT -->
  
      <!--FOOTER -->
      <footer class="py-5 px-lg-5">
        <div class="container">
          <div class="row gy-4 justify-content-between">
            <div class="col-auto">
              <p class="mb-0"><i class="las la-copyright"></i>Copyright text goes here</p>
            </div>
    
            <div class="col-auto">
              <div class="social-links">
                <a href="#"><i class="lab la-twitter"></i></a>
                <a href="#"><i class="lab la-instagram"></i></a>
                <a href="#"><i class="lab la-facebook"></i></a>
                <a href="#"><i class="lab la-youtube"></i></a>
              </div>
            </div>
          </div>
        </div>
      </footer>
      <!--//FOOTER -->
    </div>
    <!--//CONTENT WRAPPER-->

    <script src="bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>