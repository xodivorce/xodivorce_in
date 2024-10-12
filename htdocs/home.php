
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="Official Portfolio Website of Prasid Mandal - Full-Stack Web, iOS Developer and UI/UX Designer - (Also Reknowned as @xodivorce).">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Xodivorce - Personal Portfolio</title>

  <!--
    - favicon
  -->
    
  <link rel="shortcut icon" href="./assets/images/logo.ico" type="image/x-icon">

  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/home.css">
  <link rel="stylesheet" href="./assets/css/exeption.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  

  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <!--<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">-->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>

<body>


  <!--
    - #MAIN
  -->

  <div class="preloader">
    <div class="loader"></div>
  </div> 
  <main>
    

    <!--
      - #SIDEBAR
    -->


    <aside class="sidebar" data-sidebar>

      <div class="sidebar-info">

        <figure class="avatar-box">
          <img src="./assets/images/dp.png" alt="xodivorce" width="80">
        </figure>

        <div class="info-content">
          <h1 class="name" title="Prasid Mandal">Xodivorce</h1>
          <a href="./assets/pdf/Curriculum_Vitae.pdf" download class="view-cv-btn">View CV</a>
        </div>

        <button class="info_more-btn" data-sidebar-btn>
          <span>Show Contacts</span>

          <ion-icon name="chevron-down"></ion-icon>
        </button>

      </div>

      <div class="sidebar-info_more">

        <div class="separator"></div>

        <ul class="contacts-list">

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="mail-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Email</p>

              <a href="mailto:hey@xodivorce.in" class="contact-link">hey@xodivorce.in</a>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="phone-portrait-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Phone</p>

              <a href="tel:+91 8514860677" class="contact-link">+91 (8514) 860-677</a>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="calendar-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Birthday</p>

              <time datetime="2006-01-20">January 20, 2006</time>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="location-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Location</p>

              <address>Kolkata, INDIA</address>
            </div>

          </li>

        </ul>

        <div class="separator"></div>

        <ul class="social-list">

          <li class="social-item">
            <a href="https://www.facebook.com/xodivorce.1" class="social-link" target="_main">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li class="social-item">
            <a href="https://x.com/xodivorce1" class="social-link" target="_main">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li class="social-item">
            <a href="https://www.instagram.com/xodivorce" class="social-link" target="_main">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

        </ul>

      </div>

    </aside>



    <!--
      - #main-content
    -->

    <div class="main-content">
    
    <section class="about-text hoverAnimatedContainer">


      <!--
        - #NAVBAR
      -->

      <nav class="navbar">

        <ul class="navbar-list">

          <li class="navbar-item">
            <button class="navbar-link  active" data-nav-link>About</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Resume</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Portfolio</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Blog</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Contact</button>
          </li>

        </ul>

      </nav>


      <!--
        - #ABOUT
      -->

      <article class="about  active" data-page="about">
        

        <header>
          <h2 class="h2 article-title">About me</h2>
        </header>
        

        <section class="about-text">
          <p>
          Anyeonghaseyo, I'm Prasid, a Creative Director and UI/UX Designer from Kolkata, India, 
          specializing in Web & iOS App development. I excel at transforming complex problems into elegant, 
          beautiful, and intuitive designs.
          </p>

          <p id="message">
            </p>
        </section>


        <!--
          - service
        -->

        <section class="service">

          <h3 class="h3 service-title">What i'm doing</h3>

          <ul class="service-list">

            <li class="service-item">

              <div class="service-icon-box">
                <img src="./assets/images/icon-design.svg
                " alt="design icon" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">Web design</h4>

                <p class="service-item-text">
                  The most modern and high-quality design made at a professional level.
                </p>
              </div>

            </li>

            <li class="service-item">

              <div class="service-icon-box">
                <img src="./assets/images/icon-dev.svg" alt="Web development icon" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">Web development</h4>

                <p class="service-item-text">
                  High-quality development of sites at the professional level.
                </p>
              </div>

            </li>

            <li class="service-item">

              <div class="service-icon-box">
                <img src="./assets/images/icon-app.svg" alt="mobile app icon" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">iOS apps</h4>

                <p class="service-item-text">
                  Professional development of applications for iOS and Mac.
                </p>
              </div>

            </li>

            <li class="service-item">

              <div class="service-icon-box">
                <img src="./assets/images/icon-photo.svg" alt="camera icon" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">Photography</h4>

                <p class="service-item-text">
                  I make high-quality photos of any category at a professional level.
                </p>
              </div>

            </li>

          </ul>

        </section>


        <!--
          - testimonials
        -->

        <section class="testimonials">

          <h3 class="h3 testimonials-title">Testimonials</h3>

          <ul class="testimonials-list has-scrollbar">

            <li class="testimonials-item">
              <div class="content-card" data-testimonials-item>

                <figure class="testimonials-avatar-box">
                  <img src="./assets/images/avatar-1.png" alt="Daniel lewis" width="60" data-testimonials-avatar>
                </figure>

                <h4 class="h4 testimonials-item-title" data-testimonials-title>Sundar Pichai</h4>

                <div class="testimonials-text" data-testimonials-text>
                  <p>
                  Prasid's work in creating our corporate identity was outstanding. 
                  They demonstrated a deep understanding of our needs and delivered designs that exceeded our expectations. 
                  Prasid's experience and dedication were evident throughout the project, ensuring every detail was meticulously crafted to resonate with our clients.
                  </p>
                </div>

              </div>
            </li>

            <li class="testimonials-item">
              <div class="content-card" data-testimonials-item>

                <figure class="testimonials-avatar-box">
                  <img src="./assets/images/avatar-2.png" alt="Jessica miller" width="60" data-testimonials-avatar>
                </figure>

                <h4 class="h4 testimonials-item-title" data-testimonials-title>Mark Zuckerberg</h4>

                <div class="testimonials-text" data-testimonials-text>
                  <p>
                  Prasid was hired to create a corporate identity.
                   We were very pleased with the work done. 
                   They have a lot of experience and are very concerned about the needs of the client. 
                   Prasid's experience and dedication were evident throughout the project, 
                   ensuring every detail was meticulously crafted to resonate with our clients.
                  </p>
                </div>

              </div>
            </li>

            <li class="testimonials-item">
              <div class="content-card" data-testimonials-item>

                <figure class="testimonials-avatar-box">
                  <img src="./assets/images/avatar-3.png" alt="Emily evans" width="60" data-testimonials-avatar>
                </figure>

                <h4 class="h4 testimonials-item-title" data-testimonials-title>Kim Jisoo </h4>

                <div class="testimonials-text" data-testimonials-text>
                  <p>
                  Prasid's photography skills are exceptional. 
                  They have a unique ability to capture moments that tell compelling stories. 
                  Prasid's attention to detail and creative vision make them a standout photographer.
                  
                  </p>
                </div>

              </div>
            </li>

            <li class="testimonials-item">
              <div class="content-card" data-testimonials-item>

                <figure class="testimonials-avatar-box">
                  <img src="./assets/images/avatar-4.png" alt="Henry william" width="60" data-testimonials-avatar>
                </figure>

                <h4 class="h4 testimonials-item-title" data-testimonials-title>Tim Cook</h4>

                <div class="testimonials-text" data-testimonials-text>
                  <p>
                  Prasid was hired to create a corporate identity. We were very pleased with the work done.
                  He has lot of experience and is very concerned about the needs of client. 
                  Prasid's expertise and attention to detail were instrumental in shaping a cohesive and impactful brand identity for us.
                  </p>
                </div>

              </div>
            </li>

          </ul>

        </section>


        <!--
          - testimonials modal
        -->

        <div class="modal-container" data-modal-container>

          <div class="overlay" data-overlay></div>

          <section class="testimonials-modal">

            <button class="modal-close-btn" data-modal-close-btn>
              <ion-icon name="close-outline"></ion-icon>
            </button>

            <div class="modal-img-wrapper">
              <figure class="modal-avatar-box">
                <img src="./assets/images/avatar-1.png" alt="Daniel lewis" width="80" data-modal-img>
              </figure>

              <img src="./assets/images/icon-quote.svg" alt="quote icon">
            </div>

            <div class="modal-content">

              <h4 class="h3 modal-title" data-modal-title>Daniel lewis</h4>

              <time datetime="2023-10-13">13 October, 2023</time>

              <div data-modal-text>
                <p>
                  Prasid was hired to create a corporate identity. We were very pleased with the work done. She has a
                  lot of experience
                  and is very concerned about the needs of client. Lorem ipsum dolor sit amet, ullamcous cididt
                  consectetur adipiscing
                  elit, seds do et eiusmod tempor incididunt ut laborels dolore magnarels alia.
                </p>
              </div>

            </div>

          </section>

        </div>


        <!--
          - clients
        -->

        <section class="clients">

<h3 class="h3 clients-title">Clients</h3>


<ul class="clients-list has-scrollbar">

  <li class="clients-item">
    <a href="https://www.microsoft.com/software-download/windows11" target="_main">
      <img src="./assets/images/logo-1-color.png" alt="Windows logo">
    </a>
  </li>

  <li class="clients-item">
    <a href="https://www.visa.co.in/" target="_main">
      <img src="./assets/images/logo-2-color.png" alt="Visa logo">
    </a>
  </li>

  <li class="clients-item">
    <a href="https://about.meta.com/metaverse/" target="_main">
      <img src="./assets/images/logo-3-color.png" alt="Meta logo">
    </a>
  </li>

  <li class="clients-item">
    <a href="https://www.oreo.com/" target="_main">
      <img src="./assets/images/logo-4-color.png" alt="Oreo logo">
    </a>
  </li>

  <li class="clients-item">
    <a href="https://www.unilever.com/" target="_main">
      <img src="./assets/images/logo-5-color.png" alt="Unilever logo">
    </a>
  </li>

  <li class="clients-item">
    <a href="https://www.paypal.com/in/home" target="_main">
      <img src="./assets/images/logo-6-color.png" alt="Paypal logo">
    </a>
  </li>

</ul>


</section>

      </article>


      <!--
        - #RESUME
      -->

      <article class="resume" data-page="resume">

        <header>
          <h2 class="h2 article-title">Resume</h2>
        </header>

        <section class="timeline">

          <div class="title-wrapper">
            <div class="icon-box">
              <ion-icon name="book-outline"></ion-icon>
            </div>

            <h3 class="h3">Education</h3>
          </div>

          <ol class="timeline-list">

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">Kingston Polytechnic College </h4>

              <span>2023 — 2025</span>

              <p class="timeline-text">
              Diploma in Computer Science and Technology (CST); <br>
              Kingston Polytechnic College, affiliated with Kingston Educational Institute (KEI); <br>
              Barasat - Barrackpore Rd, Kajibari, Kolkata, West Bengal 700126.
            </p>

            </li>

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">Basirhat High School (HS)</h4>

              <span>2021 — 2023</span>

              <p class="timeline-text">
              Completed 11th and 12th grade with Science (Physics, Chemistry, Biology) and Computer Applications under the WB Board at Basirhat High School (HS).
               Acquired foundational knowledge in science and practical skills in computer applications.
              </p>

            </li>

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title"> Basirhat Town High School (HS)</h4>

              <span>2015 — 2021</span>

              <p class="timeline-text">
              Completed 5th to 10th grades under the WB Board at Basirhat Town High School (HS). Studied PT (Physical Training), Computer Studies, and Construction, gaining foundational knowledge and practical skills.
              </p>

            </li>

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title"> Bhawanipur Harimohan Primary School</h4>

              <span>2011 — 2015</span>

              <p class="timeline-text">
              Attended Bhawanipur Harimohan Primary School from class 1 to 4, starting with basic ABC and computer skills. 
              Introduced to MS Paint, Word, and other applications from class 3 onwards.
              </p>
              </p>

            </li>

          </ol>

        </section>

        <section class="timeline">

          <div class="title-wrapper">
            <div class="icon-box">
              <ion-icon name="book-outline"></ion-icon>
            </div>

            <h3 class="h3">Experience</h3>
          </div>

          <ol class="timeline-list">

          
          <li class="timeline-item">
    <h4 class="h4 timeline-item-title">Web Developer</h4>
    <span>2024 – Present</span>
    <p class="timeline-text">
        Self-employed in Basirhat, West Bengal. Developed and managed web projects, including xodivorce.in. Collaborated with clients to create and deploy customized web solutions using HTML5, CSS3, JavaScript, PHP, and MySQL. Ensured mobile-friendliness with responsive design principles.
    </p>
</li>


            <li class="timeline-item">
    <h4 class="h4 timeline-item-title">CITA - IT And ITAS</h4>
    <span>2023 - 2024</span>
    <p class="timeline-text">
        Completed Youth Computer Training at CITA in Basirhat, West Bengal. Acquired practical experience with a range of IT tools and technologies. Successfully finished the IT/ITAS training program, which lasted for 6 months.
    </p>
</li>

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">Designer</h4>

              <span>2021 — 2022</span>

              <p class="timeline-text">
              Acquired proficiency in video editing, photo editing, graphic design, and logo creation during 2021-2022.
               Developed a keen eye for aesthetics and effective visual communication strategies, which are essential skills in the field of Computer Science.
              </p>

            </li>

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">Scholar</h4>

              <span>2011 — 2020</span>

              <p class="timeline-text">
              Attained scholarships while completing classes 1 to 10, acquiring foundational skills from ABC to advanced computer applications like MS Paint and Word. 
              Recognized for academic achievements and dedication.
              </p>

            </li>

          </ol>

        </section>

        <section class="skill">

          <h3 class="h3 skills-title">My skills</h3>

          <ul class="skills-list content-card">

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">Web Development</h5>
                <data value="85">85%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 80%;"></div>
              </div>

            </li>

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">Java</h5>
                <data value="70">70%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 70%;"></div>
              </div>

            </li>

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">Python</h5>
                <data value="90">90%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 90%;"></div>
              </div>

            </li>

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">C</h5>
                <data value="50">50%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 50%;"></div>
              </div>

            </li>
            <li class="skills-item">
              <div class="title-wrapper">
                <h5 class="h5">PHP</h5>
                <data value="65">65%</data>
              </div>
              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 65%;"></div>
              </div>

            </li>

            <li class="skills-item">
              <div class="title-wrapper">
                <h5 class="h5">ASSEMPLY SCRIPT</h5>
                <data value="25">25%</data>
              </div>
              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 25%;"></div>
              </div>

            </li>

            <li class="skills-item">
              <div class="title-wrapper">
                <h5 class="h5">MYSQL</h5>
                <data value="75">75%</data>
              </div>
              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 75%;"></div>
              </div>

            </li>

            <li class="skills-item">
              <div class="title-wrapper">
                <h5 class="h5">GIT</h5>
                <data value="95">95%</data>
              </div>
              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 95%;"></div>
              </div>

            </li>


          </ul>

        </section>

      </article>





      <!--
        - #PORTFOLIO
      -->


      <article class="portfolio" data-page="portfolio">

        <header>
          <h2 class="h2 article-title">Portfolio</h2>
        </header>

        <section class="projects">

          <ul class="filter-list">

            <li class="filter-item">
              <button class="active" data-filter-btn>All</button>
            </li>

            <li class="filter-item">
              <button data-filter-btn>Web design</button>
            </li>

            <li class="filter-item">
              <button data-filter-btn>Applications</button>
            </li>

            <li class="filter-item">
              <button data-filter-btn>Web development</button>
            </li>

          </ul>

          <div class="filter-select-box">

            <button class="filter-select" data-select>

              <div class="select-value" data-selecct-value>Select category</div>

              <div class="select-icon">
                <ion-icon name="chevron-down"></ion-icon>
              </div>

            </button>

            <ul class="select-list">

              <li class="select-item">
                <button data-select-item>All</button>
              </li>

              <li class="select-item">
                <button data-select-item>Web design</button>
              </li>

              <li class="select-item">
                <button data-select-item>Applications</button>
              </li>

              <li class="select-item">
                <button data-select-item>Web development</button>
              </li>

            </ul>
            

          </div>
          
          <ul class="project-list">

          <!-- 
          //For Isuues, Deploy Comeing-soon

          <div class="container">
          <div class="title"><i class="fa-regular fa-clock icon-spin"></i>&nbsp; Coming Soon</div>
          <div class="subtitle">Please be patient, something interesting is cooking up...!!
          </div>
        </div>
        -->
        <?php
        $xodivorce_org_link = "https://github.com/xodivorce/xodivorce_org";
        $xodivorce_org_image = "./assets/images/xodivorce_org.png";
        $xodivorce_org_title = "Xodivorce.Org";
        $xodivorce_org_category= "Web development";
        ?>

        <li class="project-item active" data-filter-item data-category="web development">
          <a href="<?php echo $xodivorce_org_link; ?>">
            <figure class="project-img">
              <div class="project-item-icon-box">
                <ion-icon name="eye-outline"></ion-icon>
              </div>
              <img src="<?php echo $xodivorce_org_image; ?>" alt="<?php echo $xodivorce_org_title; ?>" loading="lazy">
            </figure>
             <h3 class="project-title"><?php echo $xodivorce_org_title; ?></h3>
              <p class="project-category"><?php echo $xodivorce_org_category; ?></p>
            </a>
          </li>



          <?php
          $xodivorce_in_link = "https://github.com/xodivorce/xodivorce_in";
          $xodivorce_in_image = "./assets/images/xodivorce_in.png";
          $xodivorce_in_title = "Xodivorce.In";
          $xodivorce_in_category = "Web development";
          ?>

            <li class="project-item  active" data-filter-item data-category="web development">
              <a href="<?php echo $xodivorce_in_link; ?>">
                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>
                  <img src= "<?php echo $xodivorce_in_image; ?>" alt="<?php echo $xodivorce_in_title; ?>" loading="lazy">
                </figure> 
                <h3 class="project-title"><?php echo $xodivorce_in_title; ?></h3>
                <p class="project-category"><?php echo $xodivorce_in_category; ?></p>
              </a>
            </li>
            <!--

            <li class="project-item  active" data-filter-item data-category="web design">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/project-3.jpg" alt="fundo" loading="lazy">
                </figure>

                <h3 class="project-title">Fundo</h3>

                <p class="project-category">Web design</p>

              </a>
            </li>
            
            -->
            
            <?php
            $face_recognise_attend_link = "https://github.com/xodivorce/face_recognise_attend";
            $face_recognise_attend_image = "./assets/images/face_recognation.png";
            $face_recognise_attend_title = "Face Recognise";
            $face_recognise_attend_category = "Applications";
            ?>

            <li class="project-item  active" data-filter-item data-category="applications">
              <a href="<?php echo $face_recognise_attend_link; ?>">
                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>
                  <img src="<?php echo $face_recognise_attend_image; ?>" alt="<?php echo $face_recognise_attend_title; ?>" loading="lazy">
                </figure>
                <h3 class="project-title"><?php echo $face_recognise_attend_title; ?></h3>
                <p class="project-category"><?php echo $face_recognise_attend_category; ?></p>
              </a>
            </li>

            <?php
$xeorl_buzz_link = "https://xeorl.buzz";
$xeorl_buzz_image = "./assets/images/xeorl_buzz.png";
$xeorl_buzz_title = "Xeorl - link shortener";
$xeorl_buzz_category = "Web development";
?>

<li class="project-item active" data-filter-item data-category="web development">
  <a href="<?php echo $xeorl_buzz_link; ?>">
    <figure class="project-img">
      <div class="project-item-icon-box">
        <ion-icon name="eye-outline"></ion-icon>
      </div>
      <img src="<?php echo $xeorl_buzz_image; ?>" alt="<?php echo $xeorl_buzz_title; ?>" loading="lazy">
    </figure>
    <h3 class="project-title"><?php echo $xeorl_buzz_title; ?></h3>
    <p class="project-category"><?php echo $xeorl_buzz_category; ?></p>
  </a>
</li>


            <?php
            $breakout_ball_link = "https://github.com/xodivorce/Breakout-Game";
            $breakout_ball_image = "./assets/images/breakout_game.png";
            $breakout_ball_title = "Breakout Ball Game";
            $breakout_ball_category = "Applications";
            ?>

            <li class="project-item  active" data-filter-item data-category="applications">
              <a href="<?php echo $breakout_ball_link; ?>">
                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>
                  <img src="<?php echo $breakout_ball_image; ?>" alt="<?php echo $breakout_ball_title; ?>" loading="lazy">
                </figure>
                <h3 class="project-title"><?php echo $breakout_ball_title; ?></h3>
                <p class="project-category"><?php echo $breakout_ball_category; ?></p>
              </a>
            </li>
            
            <!--

            <li class="project-item  active" data-filter-item data-category="web design">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/project-5.png" alt="dsm." loading="lazy">
                </figure>

                <h3 class="project-title">DSM.</h3>

                <p class="project-category">Web design</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web design">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/project-6.png" alt="metaspark" loading="lazy">
                </figure>

                <h3 class="project-title">MetaSpark</h3>

                <p class="project-category">Web design</p>

              </a>
            </li>
            
            -->

            <?php
            $kei_portfolio_link = "https://github.com/xodivorce/kei_portfolio";
            $kei_portfolio_image = "./assets/images/kei_portfolio.png";
            $kei_portfolio_title = "STUDENT INFORMATION SYSTEM";
            $kei_portfolio_category = "Web development";
            ?>
            
            <li class="project-item  active" data-filter-item data-category="web development">
              <a href="<?php echo $kei_portfoliolink; ?>">
                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>
                  <img src= "<?php echo $kei_portfolio_image; ?>" alt="<?php echo $kei_portfolio_title; ?>" loading="lazy">
                </figure> 
                <h3 class="project-title"><?php echo $kei_portfolio_title; ?></h3>
                <p class="project-category"><?php echo $kei_portfolio_category; ?></p>
              </a>
            </li>


            <?php
        $xeporn_link = "https://xeporn-beta-2.vercel.app";
        $xeporn_image = "./assets/images/xeporn.png";
        $xeporn_title = "XePORN.In ©2024 𝔟𝔢𝔱𝔞 𝔦𝔦<br> ‣ 𝘦𝘮𝘢𝘪𝘭 𝘧𝘰𝘳 𝘦𝘢𝘳𝘭𝘺 𝘢𝘤𝘤𝘦𝘴..";
        $xeporn_category= "Web development";
        ?>

        <li class="project-item active" data-filter-item data-category="web development">
          <a href="<?php echo $xeporn_link; ?>">
            <figure class="project-img">
              <div class="project-item-icon-box">
                <ion-icon name="eye-outline"></ion-icon>
              </div>
              <img src="<?php echo $xeporn_image; ?>" alt="<?php echo $xeporn_title; ?>" loading="lazy">
            </figure>
             <h3 class="project-title"><?php echo $xeporn_title; ?></h3>
              <p class="project-category"><?php echo $xeporn_category; ?></p>
            </a>
          </li>



            

            
            <?php
            $solar_system_design_link = "https://github.com/xodivorce/solar_syestem_design";
            $solar_system_design_image = "./assets/images/solar_system_design.png";
            $solar_system_design_title = "SOLAR SYATEM DESIGN";
            $solar_system_design_category = "Web design";
            ?>
            
            <li class="project-item active" data-filter-item data-category="web design">
              <a href="<?php echo $solar_system_design_link; ?>">
                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>
                  
                  <img src="<?php echo $solar_system_design_image; ?>" alt="<?php echo $solar_system_design_title; ?>" loading="lazy">
                </figure>
                <h3 class="project-title"><?php echo $solar_system_design_title; ?></h3>
                <p class="project-category"><?php echo $solar_system_design_category; ?></p>
              </a>
            
            </li>

            


            <?php
            $kei_portfolio_design_link = "https://github.com/xodivorce/kei-portfolio";
            $kei_portfolio_design_image = "./assets/images/kei_portfolio_design.png";
            $kei_portfolio_design_title = "STUDENT INFORMATION SYSTEM";
            $kei_portfolio_design_category = "Web design";
            ?>
            
            <li class="project-item active" data-filter-item data-category="web design">
              <a href="<?php echo $kei_portfolio_design_link; ?>">
                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>
                  <img src="<?php echo $kei_portfolio_design_image; ?>" alt="<?php echo $kei_portfolio_design_title; ?>" loading="lazy">
                </figure>
                <h3 class="project-title"><?php echo $kei_portfolio_design_title; ?></h3>
                <p class="project-category"><?php echo $kei_portfolio_design_category; ?></p>
              </a>
            </li>
            
            


            <!--

            <li class="project-item  active" data-filter-item data-category="applications">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/project-8.jpg" alt="task manager" loading="lazy">
                </figure>

                <h3 class="project-title">Task Manager</h3>

                <p class="project-category">Applications</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web development">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/project-9.png" alt="arrival" loading="lazy">
                </figure>

                <h3 class="project-title">Arrival</h3>

                <p class="project-category">Web development</p>

              </a>
            </li>
            

          </ul>
          
          -->

        </section>
        

      </article>


      <!--
        - #BLOG
      -->

      <article class="blog" data-page="blog">

        <header>
          <h2 class="h2 article-title">Blog</h2>
        </header>

        <!-- 
          //For Isuues, Deploy Comeing-soon
          
          <div class="container">
          <div class="title"><i class="fa-regular fa-clock icon-spin"></i>&nbsp; Coming Soon</div>
          <div class="subtitle">Please be patient, something interesting is cooking up...!!
          </div>
        </div>
        -->


        <section class="blog-posts">

          <ul class="blog-posts-list">
           
          <?php
          $blog_post_link = "https://youtu.be/omSz7gUnyG0?si=Q-vBdK7aT1PWik-i";
          $blog_post_image = "./assets/images/Gta_IV_TUTORIAL.jpg";
          $blog_post_image_alt = "GTA IV conferences in 2024";
          $blog_post_category = "Game";
          $blog_post_date = "2024-06-27";
          $blog_post_date_formatted = "Jun 27, 2024";
          $blog_post_title = "GTA IV conferences in 2024";
          $blog_post_text = "Hey there, awesome people! 🚀 In this video, I’ll show you how to effortlessly install CrossOver on your macOS.
           It's quick, it's easy, and it’s perfect for all you gamers and app lovers out there! 🎮🍏";
          ?>
          <li class="blog-post-item">
            <a href="<?php echo $blog_post_link; ?>">
              <figure class="blog-banner-box">
                <img src="<?php echo $blog_post_image; ?>" alt="<?php echo $blog_post_image_alt; ?>" loading="lazy">
              </figure>
              <div class="blog-content">
                 <div class="blog-meta">
                  <p class="blog-category"><?php echo $blog_post_category; ?></p>
                  <span class="dot"></span>
                  <time datetime="<?php echo $blog_post_date; ?>"><?php echo $blog_post_date_formatted; ?></time>
                </div>
                <h3 class="h3 blog-item-title"><?php echo $blog_post_title; ?></h3>
                <p class="blog-text">
                   <?php echo $blog_post_text; ?>
                   </p>
                  </div>
                </a>
              </li>

              <?php
          $blog_post_link = "https://youtu.be/ZHySccRced0?si=4FazfcAWsfvQ4vfn";
          $blog_post_image = "./assets/images/macos15.1.jpg";
          $blog_post_image_alt = "YOUR MAC WILL NEVER BE THE SAME";
          $blog_post_category = "OS";
          $blog_post_date = "2024-06-27";
          $blog_post_date_formatted = "AUG 17, 2024";
          $blog_post_title = "YOUR MAC WILL NEVER BE THE SAME";
          $blog_post_text = "Hey there, awesome people! 🚀 In this video, I’ll show you how to effortlessly install CrossOver on your macOS.
           It's quick, it's easy, and it’s perfect for all you gamers and app lovers out there! 🎮🍏";
          ?>
          <li class="blog-post-item">
            <a href="<?php echo $blog_post_link; ?>">
              <figure class="blog-banner-box">
                <img src="<?php echo $blog_post_image; ?>" alt="<?php echo $blog_post_image_alt; ?>" loading="lazy">
              </figure>
              <div class="blog-content">
                 <div class="blog-meta">
                  <p class="blog-category"><?php echo $blog_post_category; ?></p>
                  <span class="dot"></span>
                  <time datetime="<?php echo $blog_post_date; ?>"><?php echo $blog_post_date_formatted; ?></time>
                </div>
                <h3 class="h3 blog-item-title"><?php echo $blog_post_title; ?></h3>
                <p class="blog-text">
                   <?php echo $blog_post_text; ?>
                   </p>
                  </div>
                </a>
              </li>

              <?php
          $blog_post_link = "https://youtu.be/s36d99lSvSs?si=pHruQCenHIjUa2pu";
          $blog_post_image = "./assets/images/Homebrew.jpg";
          $blog_post_image_alt = "Programming Like A Pro | #Homebrew ⚡";
          $blog_post_category = "OS";
          $blog_post_date = "2024-09-14";
          $blog_post_date_formatted = "SEP 14, 2024";
          $blog_post_title = "Programming Like A Pro | #Homebrew ⚡";
          $blog_post_text = "Welcome to the Homebrew installation tutorial! Works on All Apple Silicons (M1-M4) 🚀
          Today, we’ll get Homebrew up and running on your Mac in no time! 🍏✨";
          ?>
          <li class="blog-post-item">
            <a href="<?php echo $blog_post_link; ?>">
              <figure class="blog-banner-box">
                <img src="<?php echo $blog_post_image; ?>" alt="<?php echo $blog_post_image_alt; ?>" loading="lazy">
              </figure>
              <div class="blog-content">
                 <div class="blog-meta">
                  <p class="blog-category"><?php echo $blog_post_category; ?></p>
                  <span class="dot"></span>
                  <time datetime="<?php echo $blog_post_date; ?>"><?php echo $blog_post_date_formatted; ?></time>
                </div>
                <h3 class="h3 blog-item-title"><?php echo $blog_post_title; ?></h3>
                <p class="blog-text">
                   <?php echo $blog_post_text; ?>
                   </p>
                  </div>
                </a>
              </li>

            <!--

            <li class="blog-post-item">
              <a href="#">

                <figure class="blog-banner-box">
                  <img src="./assets/images/blog-3.jpg" alt="Design digest #80" loading="lazy">
                </figure>

                <div class="blog-content">

                  <div class="blog-meta">
                    <p class="blog-category">Design</p>

                    <span class="dot"></span>

                    <time datetime="2022-02-23">Fab 23, 2022</time>
                  </div>

                  <h3 class="h3 blog-item-title">Design digest #80</h3>

                  <p class="blog-text">
                    Excepteur sint occaecat cupidatat no proident, quis nostrum exercitationem ullam corporis suscipit.
                  </p>

                </div>

              </a>
            </li>

            <li class="blog-post-item">
              <a href="#">

                <figure class="blog-banner-box">
                  <img src="./assets/images/blog-4.jpg" alt="UI interactions of the week" loading="lazy">
                </figure>

                <div class="blog-content">

                  <div class="blog-meta">
                    <p class="blog-category">Design</p>

                    <span class="dot"></span>

                    <time datetime="2022-02-23">Fab 23, 2022</time>
                  </div>

                  <h3 class="h3 blog-item-title">UI interactions of the week</h3>

                  <p class="blog-text">
                    Enim ad minim veniam, consectetur adipiscing elit, quis nostrud exercitation ullamco laboris nisi.
                  </p>

                </div>

              </a>
            </li>

            <li class="blog-post-item">
              <a href="#">

                <figure class="blog-banner-box">
                  <img src="./assets/images/blog-5.jpg" alt="The forgotten art of spacing" loading="lazy">
                </figure>

                <div class="blog-content">

                  <div class="blog-meta">
                    <p class="blog-category">Design</p>

                    <span class="dot"></span>

                    <time datetime="2022-02-23">Fab 23, 2022</time>
                  </div>

                  <h3 class="h3 blog-item-title">The forgotten art of spacing</h3>

                  <p class="blog-text">
                    Maxime placeat, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  </p>

                </div>

              </a>
            </li>

            <li class="blog-post-item">
              <a href="#">

                <figure class="blog-banner-box">
                  <img src="./assets/images/blog-6.jpg" alt="Design digest #79" loading="lazy">
                </figure>

                <div class="blog-content">

                  <div class="blog-meta">
                    <p class="blog-category">Design</p>

                    <span class="dot"></span>

                    <time datetime="2022-02-23">Fab 23, 2022</time>
                  </div>

                  <h3 class="h3 blog-item-title">Design digest #79</h3>

                  <p class="blog-text">
                    Optio cumque nihil impedit uo minus quod maxime placeat, velit esse cillum.
                  </p>

                </div>

              </a>
            </li>
            
            -->

          </ul>

        </section>

      </article>





      <!--
        - #CONTACT
      --><article class="contact" data-page="contact">
  <header>
    <h2 class="h2 article-title">Contact</h2>
  </header>

  <section class="mapbox" data-mapbox>
    <figure>
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d117925.21689758253!2d88.26495109688607!3d22.535564936243723!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f882db4908f667%3A0x43e330e68f6c2cbc!2sKolkata%2C%20West%20Bengal!5e0!3m2!1sen!2sin!4v1720215955684!5m2!1sen!2sin"
        width="400" height="300" loading="lazy"></iframe>
    </figure>
  </section>

  <section class="contact-form">
    <h3 class="h3 form-title">Contact Form</h3>

    <?php
require './core/vendor/autoload.php'; // Adjust path as necessary

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Dotenv\Dotenv;

// Load environment variables
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Check if POST request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = filter_var($_POST['fullname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $message = filter_var($_POST['message'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // Load restricted values from environment variables
    $name_restriction = explode(',', $_ENV['RESTRICTED_NAMES']);
    $email_restriction = explode(',', $_ENV['RESTRICTED_EMAILS']);
    $message_restriction = explode(',', $_ENV['RESTRICTED_MESSAGES']);

    // Validation
    if (!filter_var($email, FILTER_VALIDATE_EMAIL) || in_array($email, $email_restriction)) {
        echo "<script>alert('Whoopsie! 🐾 It seems there\'s a keyword restriction or the email address is playing hide-and-seek! 🕵️‍♂️ Please check the email address and try again ✨. Thanks a bunch!'); window.history.back();</script>";
        exit;
    }

    foreach ($name_restriction as $keyword) {
        if (stripos($fullname, $keyword) !== false) {
            echo "<script>alert('Whoopsie! 🐾 It seems your name contains restricted keywords.'); window.history.back();</script>";
            exit;
        }
    }

    foreach ($message_restriction as $keyword) {
        if (stripos($message, $keyword) !== false) {
            echo "<script>alert('Whoopsie! 🐾 It seems your message contains restricted keywords! 🕵️‍♂️ Please check and try again ✨'); window.history.back();</script>";
            exit;
        }
    }

    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host = $_ENV['SMTP_HOST'];
        $mail->SMTPAuth = true;
        $mail->Username = $_ENV['SMTP_USER'];
        $mail->Password = $_ENV['SMTP_PASS'];
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = $_ENV['SMTP_PORT'];

        // Recipients
        $mail->setFrom($_ENV['SMTP_USER'], 'Xodivorce Website');
        $mail->addAddress($_ENV['SMTP_SENDTO']);
        $mail->addReplyTo($email, $fullname);

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'New Contact Form Submission';
        $mail->Body    = "Ta-da! You've got a mail, from the contact form on your website.<br><br>" .
                         "Full Name: " . $fullname . "<br>" .
                         "Email: " . $email . "<br>" .
                         "Message: <br>" . nl2br($message);

        $mail->send();
        echo "<script>alert('Success! Your message has taken off like a rocket! 🚀 We\'ll get back to you soon. Thanks for reaching out! ✨');</script>";
    } catch (Exception $e) {
        echo "<script>alert('Whoopsie! 🐾 Our feedback feature seems to be chasing squirrels right now. Please reach out to us via email or try again later. 🌟 Mailer Error: {$mail->ErrorInfo}');</script>";
    }
}
?>



    <form action="" method="post" class="form" data-form onsubmit="return validateForm()">
      <div class="input-wrapper">
        <input type="text" name="fullname" class="form-input" placeholder="Full name" required data-form-input>
        <input type="email" name="email" class="form-input" placeholder="Email address" required data-form-input>
      </div>
      <textarea name="message" class="form-input" placeholder="Your Message" required data-form-input></textarea>
      <!--<button class="form-btn" type="submit" disabled data-form-btn onclick="alert('Whoopsie! 🐾 Our feedback feature seems to be chasing squirrels right now. Please reach out to us via email or try again later. 🌟')">-->
      <button class="form-btn" type="submit" data-form-btn>
        <ion-icon name="paper-plane"></ion-icon>
        <span>Send Message</span>
      </button>
    </form>
  </section>
</article>

    </div>

  </main>


  <!--
    - custom js link
  -->
  <script src="./assets/js/home.js"></script>
  <script src="./assets/js/developer_tools.js"></script>

  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>


