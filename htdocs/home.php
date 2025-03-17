<?php
  require 'core/connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="Official Portfolio Website of Prasid Mandal - Full-Stack Web, iOS Developer and UI/UX Designer - (Also Reknowned as @xodivorce).">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Xodivorce - Portfolio</title>

  <!--
    - favicon
  -->
  <link rel="icon" type="image/png" href="./assets/favicon/favicon-96x96.png" sizes="96x96" />
  <link rel="icon" type="image/svg+xml" href="./assets/favicon/favicon.svg" />
  <link rel="shortcut icon" href="./assets/favicon/favicon.ico" />
  <link rel="apple-touch-icon" sizes="180x180" href="./assets/favicon/apple-touch-icon.png" />
  <link rel="manifest" href="./assets/favicon/site.webmanifest" />

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
  <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100..900&display=swap" rel="stylesheet">
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
              <p class="contact-title">Based On</p>

              <address>Kolkata, India</address>
            </div>

          </li>

        </ul>

        <div class="separator"></div>

        <ul class="social-list">

          <li class="social-item">
            <a href="https://www.facebook.com/xodivorce" class="social-link" target="_main">
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

          <li class="social-item">
            <a href="https://in.pinterest.com/xodivorcee" class="social-link" target="_main">
              <ion-icon name="logo-pinterest"></ion-icon>
            </a>
          </li>

          <li class="social-item">
            <a href="https://www.linkedin.com/in/prasid-mandal-85aa05268/" class="social-link" target="_main">
              <ion-icon name="logo-linkedin"></ion-icon>
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
        
        <?php
        // Get birth date from environment variables
        $birthDateString = $_ENV['USER_BDAY'] ?? $_SERVER['USER_BDAY'] ?? null;
        $experienceStartYear = $_ENV['USER_EXPY'] ?? $_SERVER['USER_EXPY'] ?? null;

        // Calculate age
        $birthDate = DateTime::createFromFormat('d-m-Y', $birthDateString);
        if (!$birthDate) {
          die("Invalid date format: Expected 'd-m-Y'.");
        }

        $today = new DateTime('today');
        $age = $birthDate->diff($today)->y;

        // Calculate experience years
        $experienceYears = $today->format('Y') - (int)$experienceStartYear;
        ?>
          <p>
              Hey there! I'm Prasid, a <?php echo $age; ?>-year-old tech enthusiast, self-taught Full Stack Web and Android Developer.
              Delivering modern websites and Android apps with AI & modern Frameworks for more than <?php echo $experienceYears; ?>+ years.
          </p>
          
          <p>
          Crafting my passion into delivering industry-grade experience websites that are functional and user-friendly, also attractive at the same time. 
          Moreover, I add a handcrafted touch to every line of code, No! Every pixel I've placed. However, I'm On A Mission To Make The Web More Interesting...
          </p>


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
                  Crafting modern design concepts into high quality web designs.
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
                  Transforming modern design concepts into industry-ready, high-quality code.
                </p>
              </div>

            </li>

            <li class="service-item">

              <div class="service-icon-box">
                <img src="./assets/images/icon-app.svg" alt="mobile app icon" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">Android apps</h4>
                <p class="service-item-text">
                  Transforming visionary concepts into cutting-edge Android applications.
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
                  Capturing high-quality, professional-grade photographs across the world.
                </p>
              </div>

            </li>

          </ul>

        </section>

        <!-- 
        - Testimonials 
        -->

        <?php
        $sql = "SELECT * FROM testimonials ORDER BY date_added DESC";
        $result = $conn->query($sql);
        ?>

        <section class="testimonials">
          <h3 class="h3 testimonials-title">Testimonials</h3>
          <ul class="testimonials-list has-scrollbar">
            <?php while ($row = $result->fetch_assoc()) { ?>
              <li class="testimonials-item" data-testimonials-item
                  data-name="<?php echo htmlspecialchars($row['name']); ?>"
                  data-avatar="<?php echo htmlspecialchars($row['avatar']); ?>"
                  data-message="<?php echo htmlspecialchars($row['message']); ?>"
                  data-date="<?php echo !empty($row['date_added']) ? htmlspecialchars($row['date_added']) : 'N/A'; ?>">

                <div class="content-card" data-modal-trigger>
                  <figure class="testimonials-avatar-box">
                    <img src="<?php echo htmlspecialchars($row['avatar']); ?>" alt="<?php echo htmlspecialchars($row['name']); ?>" width="60" data-testimonials-avatar>
                  </figure>

                  <h4 class="h4 testimonials-item-title" data-testimonials-title><?php echo htmlspecialchars($row['name']); ?></h4>
                  <time datetime="<?php echo htmlspecialchars($row['date_added']); ?>">
                    <?php echo !empty($row['date_added']) ? date("d F, Y", strtotime($row['date_added'])) : "Date not available"; ?>
                  </time>

                  <div class="testimonials-text" data-testimonials-text>
                    <p><?php echo htmlspecialchars($row['message']); ?></p>
                  </div>
                </div>
              </li>
            <?php } ?>
          </ul>
        </section>

        <!-- 
        - Testimonials Modal 
        -->
        
        <div class="modal-container" data-modal-container>
          <div class="overlay" data-overlay></div>

          <section class="testimonials-modal">
            <button class="modal-close-btn" data-modal-close-btn>
              <ion-icon name="close-outline"></ion-icon>
            </button>

            <div class="modal-img-wrapper">
              <figure class="modal-avatar-box">
                <img src="" alt="" width="80" data-modal-img>
              </figure>
              <img src="./assets/images/icon-quote.svg" alt="quote icon">
            </div>

            <div class="modal-content">
              <h4 class="h3 modal-title" data-modal-title></h4>
              <time datetime="" data-modal-date></time>
              <div data-modal-text></div>
            </div>
          </section>
        </div>

        <?php $conn->close(); ?>

        <!--
          - clients
        -->

        <section class="clients">

          <h3 class="h3 clients-title">Clients</h3>

          <ul class="clients-list has-scrollbar">

            <li class="clients-item">
              <a href="https://autosquare.store" target="_main">
          <img src="./assets/images/autosquare.png" alt="Autosquare logo">
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
    Currently expanding my skills with the MERN stack (MongoDB, Express, React, Node.js). Working on new and exciting projects using modern web technologies. More MERN stack-based projects are coming soon!
    </p>
    </p>
</li>

          
          <li class="timeline-item">
    <h4 class="h4 timeline-item-title">Web Developer</h4>
    <span>2023 – Present</span>
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
                <h5 class="h5">HTML</h5>
                <data value="95">95%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 95%;"></div>
              </div>

            </li>
            <li class="skills-item">

              <div class="title-wrapper">
              <h5 class="h5">CSS</h5>
              <data value="90">90%</data>
            </div>
            <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 90%;"></div>
              </div>

            </li>
            <li class="skills-item">

              <div class="title-wrapper">
              <h5 class="h5">Java Script</h5>
              <data value="70">70%</data>
            </div>

            <div class="skill-progress-bg">
               <div class="skill-progress-fill" style="width: 85%;"></div>
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


              <li class="skills-item">
                

              <div class="title-wrapper">
    <h5 class="h5">Tailwindcss</h5>
    <data value="65">65%</data>
</div>

<div class="skill-progress-bg">
<div class="skill-progress-fill" style="width: 65%;"></div>
</div>
</li>
<li class="skills-item">

                <div class="title-wrapper">
                    <h5 class="h5">MongoDB</h5>
                    <data value="70">70%</data>
              </div>

            <div class="skill-progress-bg">
              <div class="skill-progress-fill" style="width: 70%;"></div>
            </div>
          </li>


<li class="skills-item">

<div class="title-wrapper">
    <h5 class="h5">Express.js</h5>
    <data value="40">40%</data>
</div>

<div class="skill-progress-bg">
<div class="skill-progress-fill" style="width: 40%;"></div>
</div>
</li>
<li class="skills-item">

<div class="title-wrapper">
    <h5 class="h5">React.js</h5>
    <data value="80">80%</data>
</div>

<div class="skill-progress-bg">
<div class="skill-progress-fill" style="width: 80%;"></div>
</div>
</li>
<li class="skills-item">

<div class="title-wrapper">
    <h5 class="h5">Node.js</h5>
    <data value="85">85%</data>
</div>

<div class="skill-progress-bg">
<div class="skill-progress-fill" style="width: 85%;"></div>
</div>
</li>
            </li>
            <li class="skills-item">
              <div class="title-wrapper">
                <h5 class="h5">Assembly Script</h5>
                <data value="25">25%</data>
              </div>
              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 25%;"></div>
              </div>

            </li>
            </li>

<li class="skills-item">

  <div class="title-wrapper">
    <h5 class="h5">Java</h5>
    <data value="50">50%</data>
  </div>

  <div class="skill-progress-bg">
    <div class="skill-progress-fill" style="width: 50%;"></div>
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
            $Anyencypter_link = "https://telegram.me/anyencrypter_bot";
            $Anyencypter_image = "./assets/images/telegram.png";
            $Anyencypter_title = "Encrypter";
            $Anyencypter_category = "Applications";
            ?>

            <li class="project-item  active" data-filter-item data-category="applications">
              <a href="<?php echo $Anyencypter_link; ?>">
                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>
                  <img src="<?php echo $Anyencypter_image; ?>" alt="<?php echo $Anyencypter_title; ?>" loading="lazy">
                </figure>
                <h3 class="project-title"><?php echo $Anyencypter_title; ?></h3>
                <p class="project-category"><?php echo $Anyencypter_category; ?></p>
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
            $DDOS_link = "https://telegram.me/ddos_xodivorcebot";
            $DDOS_image = "./assets/images/ddos.jpg";
            $DDOS_title = "Propoganda DDOS";
            $DDOS_category = "Applications";
            ?>

            <li class="project-item  active" data-filter-item data-category="applications">
              <a href="<?php echo $DDOS_link; ?>">
                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>
                  <img src="<?php echo $DDOS_image; ?>" alt="<?php echo $DDOS_title; ?>" loading="lazy">
                </figure>
                <h3 class="project-title"><?php echo $DDOS_title; ?></h3>
                <p class="project-category"><?php echo $DDOS_category; ?></p>
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
/*
$xeporn_link = "https://xeporn-beta-2.vercel.app";
$xeporn_image = "./assets/images/xeporn.png";
$xeporn_title = "XePORN.In ©2024 𝔟𝔢𝔱𝔞 𝔦𝔦<br> ‣ 𝘦𝘮𝘢𝘪𝘭 𝘧𝘰𝘳 𝘦𝘢𝘳𝘭𝘺 𝘢𝘤𝘤𝘦𝘴..";
$xeporn_category = "Web development";
*/
?>
<!--
<li class="project-item active" data-filter-item data-category="web development">
  <a href="<?php /* echo $xeporn_link; */ ?>">
    <figure class="project-img">
      <div class="project-item-icon-box">
        <ion-icon name="eye-outline"></ion-icon>
      </div>
      <img src="<?php /* echo $xeporn_image; */ ?>" alt="<?php /* echo $xeporn_title; */ ?>" loading="lazy">
    </figure>
    <h3 class="project-title"><?php /* echo $xeporn_title; */ ?></h3>
    <p class="project-category"><?php /* echo $xeporn_category; */ ?></p>
  </a>
</li>

-->


            

            
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
         
<!--
 - #YOUTUBE
-->                 
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



              <?php
          $blog_post_link = "https://youtu.be/s36d99lSvSs?si=pHruQCenHIjUa2pu";
          $blog_post_image = "./assets/images/git.jpg";
          $blog_post_image_alt = "Programming Like A Pro | #GIT ⚡";
          $blog_post_category = "OS";
          $blog_post_date = "2024-09-14";
          $blog_post_date_formatted = "Upcoming on Nov";
          $blog_post_title = "Programming Like A Pro | #GIT ⚡";
          $blog_post_text = "Welcome to the Git installation tutorial! Works on All Apple Silicons (M1-M4) 🚀
          Today, we’ll get Git up and running on your Mac in no time! 🍏✨";
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
 - #INSTAGRAM
-->
              
<?php
$blog_post_link = "https://www.instagram.com/p/DABUXD9S-NH/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==";
$blog_post_image = ""; // Leave blank as we are embedding the Instagram post
$blog_post_image_alt = "Memories in 2k24";
$blog_post_category = "Instagram";
$blog_post_date = "2024-06-27";
$blog_post_date_formatted = "Sep 17, 2024";
$blog_post_title = "LANA <";
$blog_post_text = "Memories in 2k24, the fan meet up on Sep was unexpected. Although he clicks few of the sorts, click to view on Instagram.";
?>

<li class="blog-post-item">
  <a href="<?php echo $blog_post_link; ?>">
    <figure class="blog-banner-box">
      <!-- Embed the Instagram post directly instead of using an img tag -->
      <blockquote 
      class="instagram-media" data-instgrm-permalink="<?php echo $blog_post_link; ?>" data-instgrm-version="14" style="width:100%;">
      </blockquote>
      <script async src="//www.instagram.com/embed.js"></script>
    </figure>
    <div class="blog-content">
      <div class="blog-meta">
        <p class="blog-category"><?php echo $blog_post_category; ?></p>
        <span class="dot"></span>
        <time datetime="<?php echo $blog_post_date; ?>"><?php echo $blog_post_date_formatted; ?></time>
      </div>
      <h3 class="h3 blog-item-title"><?php echo $blog_post_title; ?></h3>
      <p class="blog-text"><?php echo $blog_post_text; ?></p>
    </div>
  </a>
</li>



              
<?php
$blog_post_link = "https://www.instagram.com/p/C64SDX1yI2B/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==";
$blog_post_image = ""; // Leave blank as we are embedding the Instagram post
$blog_post_image_alt = "Memories in 2k24";
$blog_post_category = "Instagram";
$blog_post_date = "2024-06-27";
$blog_post_date_formatted = "Oct 5, 2024";
$blog_post_title = "Prequelapp";
$blog_post_text = "Try this app @prequelapp with my sorts, in love 😭♥️. The filter named Air, Click to view on Instagram.";
?>

<li class="blog-post-item">
  <a href="<?php echo $blog_post_link; ?>">
    <figure class="blog-banner-box">
      <!-- Embed the Instagram post directly instead of using an img tag -->
      <blockquote class="instagram-media" data-instgrm-permalink="<?php echo $blog_post_link; ?>" data-instgrm-version="14" style="width:100%;">
      </blockquote>
      <script async src="//www.instagram.com/embed.js"></script>
    </figure>
    <div class="blog-content">
      <div class="blog-meta">
        <p class="blog-category"><?php echo $blog_post_category; ?></p>
        <span class="dot"></span>
        <time datetime="<?php echo $blog_post_date; ?>"><?php echo $blog_post_date_formatted; ?></time>
      </div>
      <h3 class="h3 blog-item-title"><?php echo $blog_post_title; ?></h3>
      <p class="blog-text"><?php echo $blog_post_text; ?></p>
    </div>
  </a>
</li>



              
<?php
$blog_post_link = "https://www.instagram.com/reel/DAuptyny9dz/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==";
$blog_post_image = ""; // Leave blank as we are embedding the Instagram post
$blog_post_image_alt = "Memories in 2k24";
$blog_post_category = "Instagram";
$blog_post_date = "2024-06-27";
$blog_post_date_formatted = "Oct 5, 2024";
$blog_post_title = "Happy endings✨";
$blog_post_text = "Tried this trend '' 💀, better luck next time <3. ''; Everyone does deserve happpy endings 🗿, for me not everyone. Click to view on Instagram.";
?>

<li class="blog-post-item">
  <a href="<?php echo $blog_post_link; ?>">
    <figure class="blog-banner-box">
      <!-- Embed the Instagram post directly instead of using an img tag -->
      <blockquote class="instagram-media" data-instgrm-permalink="<?php echo $blog_post_link; ?>" data-instgrm-version="14" style="width:100%;">
      </blockquote>
      <script async src="//www.instagram.com/embed.js"></script>
    </figure>
    <div class="blog-content">
      <div class="blog-meta">
        <p class="blog-category"><?php echo $blog_post_category; ?></p>
        <span class="dot"></span>
        <time datetime="<?php echo $blog_post_date; ?>"><?php echo $blog_post_date_formatted; ?></time>
      </div>
      <h3 class="h3 blog-item-title"><?php echo $blog_post_title; ?></h3>
      <p class="blog-text"><?php echo $blog_post_text; ?></p>
    </div>
  </a>
</li>



<?php
$blog_post_link = "https://www.instagram.com/p/C_yaQx7TEa7/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==";
$blog_post_image = ""; // Leave blank as we are embedding the Instagram post
$blog_post_image_alt = "Memories in 2k23";
$blog_post_category = "Instagram";
$blog_post_date = "2024-06-27";
$blog_post_date_formatted = "Sep 12, 2023";
$blog_post_title = "Maya Pur, Nadia 2k22 ✨";
$blog_post_text = "Bhaichara..!! @_the_swagatam also some sorts clicked by him. Just in case if you're interested, click to view on Instagram.";
?>

<li class="blog-post-item">
  <a href="<?php echo $blog_post_link; ?>">
    <figure class="blog-banner-box">
      <!-- Embed the Instagram post directly instead of using an img tag -->
      <blockquote class="instagram-media" data-instgrm-permalink="<?php echo $blog_post_link; ?>" data-instgrm-version="14" style="width:100%;">
      </blockquote>
      <script async src="//www.instagram.com/embed.js"></script>
    </figure>
    <div class="blog-content">
      <div class="blog-meta">
        <p class="blog-category"><?php echo $blog_post_category; ?></p>
        <span class="dot"></span>
        <time datetime="<?php echo $blog_post_date; ?>"><?php echo $blog_post_date_formatted; ?></time>
      </div>
      <h3 class="h3 blog-item-title"><?php echo $blog_post_title; ?></h3>
      <p class="blog-text"><?php echo $blog_post_text; ?></p>
    </div>
  </a>
</li>


<?php
$blog_post_link = "https://www.instagram.com/p/C-80l0gyDkx/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==";
$blog_post_image = ""; // Leave blank as we are embedding the Instagram post
$blog_post_image_alt = "Memories in 2k24";
$blog_post_category = "Instagram";
$blog_post_date = "2024-06-27";
$blog_post_date_formatted = "Aug 22, 2023";
$blog_post_title = "Santiniketan 2k23 🍀";
$blog_post_text = "Bhaichara..!! @_the_swagatam also some sorts clicked by him. Just in case if you're interested, click to view on Instagram.";
?>

<li class="blog-post-item">
  <a href="<?php echo $blog_post_link; ?>">
    <figure class="blog-banner-box">
      <!-- Embed the Instagram post directly instead of using an img tag -->
      <blockquote class="instagram-media" data-instgrm-permalink="<?php echo $blog_post_link; ?>" data-instgrm-version="14" style="width:100%;">
      </blockquote>
      <script async src="//www.instagram.com/embed.js"></script>
    </figure>
    <div class="blog-content">
      <div class="blog-meta">
        <p class="blog-category"><?php echo $blog_post_category; ?></p>
        <span class="dot"></span>
        <time datetime="<?php echo $blog_post_date; ?>"><?php echo $blog_post_date_formatted; ?></time>
      </div>
      <h3 class="h3 blog-item-title"><?php echo $blog_post_title; ?></h3>
      <p class="blog-text"><?php echo $blog_post_text; ?></p>
    </div>
  </a>
</li>



<?php
$blog_post_link = "https://www.instagram.com/p/C-3EmVtSQ73/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==";
$blog_post_image = ""; // Leave blank as we are embedding the Instagram post
$blog_post_image_alt = "Memories in 2k24";
$blog_post_category = "Instagram";
$blog_post_date = "2024-06-27";
$blog_post_date_formatted = "May 14, 2024";
$blog_post_title = "Best of 2k23 🗿";
$blog_post_text = "Don't compare me with other, if they're better, go with them; idgaf...!!; click to view on Instagram.";
?>

<li class="blog-post-item">
  <a href="<?php echo $blog_post_link; ?>">
    <figure class="blog-banner-box">
      <!-- Embed the Instagram post directly instead of using an img tag -->
      <blockquote class="instagram-media" data-instgrm-permalink="<?php echo $blog_post_link; ?>" data-instgrm-version="14" style="width:100%;">
      </blockquote>
      <script async src="//www.instagram.com/embed.js"></script>
    </figure>
    <div class="blog-content">
      <div class="blog-meta">
        <p class="blog-category"><?php echo $blog_post_category; ?></p>
        <span class="dot"></span>
        <time datetime="<?php echo $blog_post_date; ?>"><?php echo $blog_post_date_formatted; ?></time>
      </div>
      <h3 class="h3 blog-item-title"><?php echo $blog_post_title; ?></h3>
      <p class="blog-text"><?php echo $blog_post_text; ?></p>
    </div>
  </a>
</li>




<?php
$blog_post_link = "https://www.instagram.com/reel/C78eHXlS3jf/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==";
$blog_post_image = ""; // Leave blank as we are embedding the Instagram post
$blog_post_image_alt = "Memories in 2k24";
$blog_post_category = "Instagram";
$blog_post_date = "2024-06-27";
$blog_post_date_formatted = "Jun 8 , 2024";
$blog_post_title = "나비 🦋";
$blog_post_text = "Nymphalis polychloros & micro generative video.The butterfly(나비) is so pretty 😭🦋♥️ and fully upscaled through AI, click to view on Instagram.";
?>

<li class="blog-post-item">
  <a href="<?php echo $blog_post_link; ?>">
    <figure class="blog-banner-box">
      <!-- Embed the Instagram post directly instead of using an img tag -->
      <blockquote class="instagram-media" data-instgrm-permalink="<?php echo $blog_post_link; ?>" data-instgrm-version="14" style="width:100%;">
      </blockquote>
      <script async src="//www.instagram.com/embed.js"></script>
    </figure>
    <div class="blog-content">
      <div class="blog-meta">
        <p class="blog-category"><?php echo $blog_post_category; ?></p>
        <span class="dot"></span>
        <time datetime="<?php echo $blog_post_date; ?>"><?php echo $blog_post_date_formatted; ?></time>
      </div>
      <h3 class="h3 blog-item-title"><?php echo $blog_post_title; ?></h3>
      <p class="blog-text"><?php echo $blog_post_text; ?></p>
    </div>
  </a>
</li>



<?php
$blog_post_link = "https://www.instagram.com/p/C68ujtkSvvF/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==";
$blog_post_image = ""; // Leave blank as we are embedding the Instagram post
$blog_post_image_alt = "Memories in 2k24";
$blog_post_category = "Instagram";
$blog_post_date = "2024-06-27";
$blog_post_date_formatted = "May 14, 2024";
$blog_post_title = "Spotify 🎧";
$blog_post_text = "Her~ @this.is.gini , in dream 🌬️✨ !!, I've tried this song and in love with it - spend all days 😭♥️; click to view on Instagram.";
?>

<li class="blog-post-item">
  <a href="<?php echo $blog_post_link; ?>">
    <figure class="blog-banner-box">
      <!-- Embed the Instagram post directly instead of using an img tag -->
      <blockquote class="instagram-media" data-instgrm-permalink="<?php echo $blog_post_link; ?>" data-instgrm-version="14" style="width:100%;">
      </blockquote>
      <script async src="//www.instagram.com/embed.js"></script>
    </figure>
    <div class="blog-content">
      <div class="blog-meta">
        <p class="blog-category"><?php echo $blog_post_category; ?></p>
        <span class="dot"></span>
        <time datetime="<?php echo $blog_post_date; ?>"><?php echo $blog_post_date_formatted; ?></time>
      </div>
      <h3 class="h3 blog-item-title"><?php echo $blog_post_title; ?></h3>
      <p class="blog-text"><?php echo $blog_post_text; ?></p>
    </div>
  </a>
</li>



<?php
$blog_post_link = "https://www.instagram.com/p/C5LnyqLS5HR/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==";
$blog_post_image = ""; // Leave blank as we are embedding the Instagram post
$blog_post_image_alt = "Memories in 2k24";
$blog_post_category = "Instagram";
$blog_post_date = "2024-06-27";
$blog_post_date_formatted = "Mar 31, 2024";
$blog_post_title = "Apple Mac M1 💻";
$blog_post_text = "Sometimes it's you, all you need to find yourself..☺️, I've tried to spend all days through my Mac Air M1; click to view on Instagram.";
?>

<li class="blog-post-item">
  <a href="<?php echo $blog_post_link; ?>">
    <figure class="blog-banner-box">
      <!-- Embed the Instagram post directly instead of using an img tag -->
      <blockquote class="instagram-media" data-instgrm-permalink="<?php echo $blog_post_link; ?>" data-instgrm-version="14" style="width:100%;">
      </blockquote>
      <script async src="//www.instagram.com/embed.js"></script>
    </figure>
    <div class="blog-content">
      <div class="blog-meta">
        <p class="blog-category"><?php echo $blog_post_category; ?></p>
        <span class="dot"></span>
        <time datetime="<?php echo $blog_post_date; ?>"><?php echo $blog_post_date_formatted; ?></time>
      </div>
      <h3 class="h3 blog-item-title"><?php echo $blog_post_title; ?></h3>
      <p class="blog-text"><?php echo $blog_post_text; ?></p>
    </div>
  </a>
</li>
           


<?php
$blog_post_link = "https://www.instagram.com/p/CtG2gzyrGEQ/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==";
$blog_post_image = ""; // Leave blank as we are embedding the Instagram post
$blog_post_image_alt = "Memories in 2k24";
$blog_post_category = "Instagram";
$blog_post_date = "2024-06-27";
$blog_post_date_formatted = "Jun 5 , 2024";
$blog_post_title = "It Ends With Us 🥀";
$blog_post_text = "There is no such thing as bad people. We're all just people who sometimes do bad things...🥀 #IT ENDS WITH US, click to view on Instagram.";
?>

<li class="blog-post-item">
  <a href="<?php echo $blog_post_link; ?>">
    <figure class="blog-banner-box">
      <!-- Embed the Instagram post directly instead of using an img tag -->
      <blockquote class="instagram-media" data-instgrm-permalink="<?php echo $blog_post_link; ?>" data-instgrm-version="14" style="width:100%;">
      </blockquote>
      <script async src="//www.instagram.com/embed.js"></script>
    </figure>
    <div class="blog-content">
      <div class="blog-meta">
        <p class="blog-category"><?php echo $blog_post_category; ?></p>
        <span class="dot"></span>
        <time datetime="<?php echo $blog_post_date; ?>"><?php echo $blog_post_date_formatted; ?></time>
      </div>
      <h3 class="h3 blog-item-title"><?php echo $blog_post_title; ?></h3>
      <p class="blog-text"><?php echo $blog_post_text; ?></p>
    </div>
  </a>
</li>




<!--
 - #FACEBOOK
-->

<?php
$blog_posts = [
    [
        'link' => "https://www.facebook.com/photo.php?fbid=1105122847587361&set=pb.100042689670857.-2207520000&type=3",
        'iframe' => "https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fphoto%2F%3Ffbid%3D1105122847587361%26set%3Da.100419004724422&show_text=true&width=500" ,
        'image_alt' => "Memories in 2k24",
        'category' => "Facebook",
        'date' => "2024-06-27",
        'date_formatted' => "Jan 10, 2024",
        'title' => "Developer",
        'text' => "⚡ An 18-Year-old Self-Taught Full-Stack Web, Android Developer & UI/UX Designer ✨is hustlin' to spice things up and make them more interesting...!! 🚀; click to view on Facebook."
    ],
    [
        'link' => "https://www.facebook.com/share/17P8aRqnWR/",
        'iframe' => "https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fphoto.php%3Ffbid%3D1168922104540768%26set%3Da.100942014672121%26type%3D3&show_text=false&width=500",
        'image_alt' => "Be One",
        'category' => "Facebook",
        'date' => "2024-07-15",
        'date_formatted' => "Apr 30, 2024",
        'title' => "Be One",
        'text' => "The world is filled with ' Good ' and ' Kind ' people. If you can't fine one, be One; click to view on Facebook."
    ],
    [
          'link' => "https://www.facebook.com/share/p/1CrDQA1gkB/",
          'iframe' => "https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fphoto.php%3Ffbid%3D1004317811001199%26set%3Da.290981085668212%26type%3D3&show_text=true&width=500",
          'image_alt' => "Be Black",
          'category' => "Facebook",
          'date' => "2024-07-15",
          'date_formatted' => "Jul 8, 2023",
          'title' => "Be Black",
          'text' => "The world is filled with ' Color ' and ' Rainbows '. If you are't the one, be the Balck; click to view on Facebook."
    ],
    [
      'link' => "https://www.facebook.com/photo.php?fbid=1064175378348775&set=a.100419004724422&type=3&ref=embed_post",
      'iframe' => "https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fphoto%2F%3Ffbid%3D1064175378348775%26set%3Da.100419004724422&show_text=false&width=500" ,
      'image_alt' => "Did't give a shit",
      'category' => "Facebook",
      'date' => "2024-07-15",
      'date_formatted' => "Jul 8, 2023",
      'title' => "Did't give a shit",
      'text' => "And the moral of the story is '' Don't give a lecture to someone, who just needs a hug ''. They dont give a Fuck about your lecture; click to view on Facebook."
    ],
    [
      'link' => "https://www.facebook.com/share/p/15YDwD9kiY/",
      'iframe' => "https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fphoto.php%3Ffbid%3D994762201956760%26set%3Da.191979372235051%26type%3D3&show_text=false&width=500",
      'image_alt' => "Tarapith - 1, 2k23 ✨",
      'category' => "Facebook",
      'date' => "2024-07-15",
      'date_formatted' => "Jul 8, 2023",
      'title' => "Tarapith - 1, 2k23 ✨",
      'text' => "Bhaichara..!! @_the_swagatam also some sorts clicked by him. Just in case if you're interested, click to view on Facebook."
    ],
    [
      'link' => "https://www.facebook.com/share/p/19g563kDKT/",
      'iframe' => "https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fphoto.php%3Ffbid%3D994757075290606%26set%3Da.191979372235051%26type%3D3&show_text=false&width=500",
      'image_alt' => "Tarapith - 2, 2k23 ✨",
      'category' => "Facebook",
      'date' => "2024-07-15",
      'date_formatted' => "Jul 8, 2023",
      'title' => "Tarapith - 2, 2k23 ✨",
      'text' => "Bhaichara..!! @_the_swagatam also some sorts clicked by him. Just in case if you're interested, click to view on Facebook."
    ],
    [
      'link' => "https://www.facebook.com/photo.php?fbid=1231288908304087&set=a.100419004724422&type=3&ref=embed_post",
      'iframe' => "https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fphoto%2F%3Ffbid%3D1231288908304087%26set%3Da.100419004724422&show_text=false&width=500",
      'image_alt' => "Fest - KEI, 2k24 ✨",
      'category' => "Facebook",
      'date' => "2024-07-15",
      'date_formatted' => "Nov 9, 2023",
      'title' => "Fest - KEI, 2k24 ✨",
      'text' => "The first feshers Fest of Kingston Educational Institute '23. Thats an extream day, click to view on Facebook."
    ],
    [
      'link' => "https://www.facebook.com/share/p/15NQqY1EoF/",
      'iframe' => "https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fphoto.php%3Ffbid%3D967628648003449%26set%3Da.191979372235051%26type%3D3&show_text=false&width=500",
      'image_alt' => "Did't give a shit",
      'category' => "Facebook",
      'date' => "2024-07-15",
      'date_formatted' => "May 9, 2023",
      'title' => "Blood Moon 🌒",
      'text' => "Randomly at 📍 Basirhat Picnic Spot, spotted a Blood Moon. Here's some potoshots as I'm a selenophile 🌓 , click to view photoshots on Facebook."
    ],
    [
      'link' => "https://www.facebook.com/photo.php?fbid=968598017906512&set=pb.100042689670857.-2207520000&type=3",
      'iframe' => "https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fphoto%2F%3Ffbid%3D968598017906512%26set%3Da.100419004724422&show_text=false&width=500",
      'image_alt' => "Did't give a shit",
      'category' => "Facebook",
      'date' => "2024-07-15",
      'date_formatted' => "May 7, 2023",
      'title' => "Selenophile 🌒",
      'text' => "Hi, I'm selenophile 🌓 , thats enough about me !! So what is your type ? click to view on Facebook."
    ],
    [
      'link' => "https://www.facebook.com/share/1CvRJpYgr8/",
      'iframe' => "https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fphoto.php%3Ffbid%3D959398318826482%26set%3Da.290981085668212%26type%3D3&show_text=false&width=500",
      'image_alt' => "Did't give a shit",
      'category' => "Facebook",
      'date' => "2024-07-15",
      'date_formatted' => "Apr 20, 2022",
      'title' => "Childish <",
      'text' => "This is kinda Doraemon - era, So if we go back to time; But if we can 🫥.! click to view on Facebook."
    ],
    [
      'link' => "https://www.facebook.com/share/12E7Gz9Dn5q/",
      'iframe' => "https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fphoto.php%3Ffbid%3D967019374731043%26set%3Da.191979372235051%26type%3D3&show_text=false&width=500" ,
      'image_alt' => "Did't give a shit",
      'category' => "Facebook",
      'date' => "2024-07-15",
      'date_formatted' => "May 4, 2022",
      'title' => "Railway Station ",
      'text' => "I'm wondered that a raiway station can be fells like Angel 🦋, Here's some shots! click to view on Facebook."
    ],
    [
      'link' => "https://www.facebook.com/share/19VToboxEU/",
      'iframe' => "https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fphoto.php%3Ffbid%3D927474668685514%26set%3Da.191979372235051%26type%3D3&show_text=false&width=500",
      'image_alt' => "Did't give a shit",
      'category' => "Facebook",
      'date' => "2024-07-15",
      'date_formatted' => "Feb 22, 2023",
      'title' => "Getting Over You 📙",
      'text' => "'' What do you do<br> when your problem<br> and your solution<br> is the same person 🦋 ? ''<br>- One of my fav book! click to view on Facebook."
    ],
    [
      'link' => "https://www.facebook.com/share/14gwR67wAQq/",
      'iframe' => "https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fphoto.php%3Ffbid%3D917376926361955%26set%3Da.290981085668212%26type%3D3&show_text=false&width=500",
      'image_alt' => "Did't give a shit",
      'category' => "Facebook",
      'date' => "2024-07-15",
      'date_formatted' => "Fav 6, 2022",
      'title' => "Nostagia 🎐",
      'text' => "'' Hold her while you can<br>
      &nbsp;'Cause someday you won't get the chance !! ''<br>- Some of my fav lyrics, click to view on Facebook."
    ],
    [
      'link' => "https://www.facebook.com/share/14gwR67wAQq/",
      'iframe' => "https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fphoto.php%3Ffbid%3D935622664537381%26set%3Da.191979372235051%26type%3D3&show_text=false&width=500",
      'image_alt' => "Did't give a shit",
      'category' => "Facebook",
      'date' => "2024-07-15",
      'date_formatted' => "Mar 8, 2023",
      'title' => "Talks 🌒",
      'text' => "'' Like if you hold me without hurting me<br>
      &nbsp;You'll be the one who ever did. ''<br>- And the Sun replies, click to view on Facebook."
    ],
];
?>


<!--
TEMP FOR META NOT RELOVED IFRAME
-->

<!-- Notification -->
<div id="mobile-notification" class="notification">
    <span class="close-btn" onclick="closeNotification()">&#10005;</span> <!-- Sharper Close Button -->
    <p><span class="highlight-text">Apologies</span>, some blogs are unreachable due to <span class="highlight-text">x-iframe</span><br> not being resolved by <span class="highlight-text">meta</span>. For the best experience,<br> switch to the <span class="highlight-text">desktop mode</span>. Thanks for your understanding.</p>
</div>

<!-- CSS Styling -->
<style>
.notification {
    background-color: #0e182c;
    color: hsl(0, 0%, 100%);
    padding: 30px;
    text-align: center;
    font-size: 12.5px;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 999;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Slight shadow for better visibility */
    display: block; /* Show by default */
    opacity: 0; /* Initially hidden */
    visibility: hidden; /* Initially hidden */
    transition: opacity 2s ease, visibility 1s 3s; /* Add fade-in and delay for fade-out */
}

.notification.show {
    opacity: 1; /* Fade in */
    visibility: visible; /* Make the notification visible */
    transition: opacity 2s ease, visibility 1s 3s; /* Fade in immediately */
}

.highlight-text {
    color: #37BDF9; /* Highlight color */
    font-weight: bold;
    display: inline-block; /* Prevent line breaks within the span */
}

.notification p {
    white-space: nowrap; /* Prevent breaking or wrapping of text */
    overflow: hidden; /* Prevent overflow */
    text-overflow: ellipsis; /* Optional: Add ellipsis if text is too long */
}

/* Sharper Close Button Styling */
.close-btn {
    position: absolute;
    top: 5px;
    right: 10px;
    font-size: 15px; /* Increased font size for sharper look */
    font-weight: bold; /* Make the X thicker */
    color: white;
    cursor: pointer;
    background: transparent;
    border: none;
    padding: 5px;
    z-index: 1000;
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5); /* Add shadow for better sharpness */
}

.close-btn:hover {
    color: #ff4747; /* Change color on hover */
    text-shadow: 2px 2px 3px rgba(0, 0, 0, 0.7); /* Sharper shadow on hover */
}

</style>

<!-- JavaScript -->
<script>
// Function to show the notification with a fade-in effect
window.addEventListener('load', function() {
    if (window.innerWidth < 768) {
        const notification = document.getElementById('mobile-notification');
        notification.classList.add('show'); // Add class to trigger the fade-in effect
    }
});

// Function to close the notification with a fade-out effect
function closeNotification() {
    const notification = document.getElementById('mobile-notification');
    notification.classList.remove('show'); // Remove the class to trigger fade-out
    setTimeout(function() {
        notification.style.display = 'none'; // Hide the notification completely after fade-out
    }, 3000); // Match the fade-out time (3 second)
}

</script>





<?php foreach ($blog_posts as $post): ?>
<li class="blog-post-item">
  <a href="<?php echo $post['link']; ?>">
    <figure class="blog-banner-box">
      <!-- Responsive container for the Facebook embed -->
      <div class="responsive-iframe-container">
        <iframe src="<?php echo $post['iframe']; ?>" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
      </div>
    </figure>
    <div class="blog-content">
      <div class="blog-meta">
        <p class="blog-category"><?php echo $post['category']; ?></p>
        <span class="dot"></span>
        <time datetime="<?php echo $post['date']; ?>"><?php echo $post['date_formatted']; ?></time>
      </div>
      <h3 class="h3 blog-item-title"><?php echo $post['title']; ?></h3>
      <p class="blog-text"><?php echo $post['text']; ?></p>
    </div>
  </a>
</li>
<?php endforeach; ?>



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
      -->
        
      
      <article class="contact" data-page="contact">
  <header>
    <h2 class="h2 article-title">Contact</h2>
  </header>

  <section class="mapbox" data-mapbox>
    <figure>
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58908.79709660985!2d88.82763828272911!3d22.66125108349142!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff567854e8190f%3A0xf12dc8b635ba902f!2sBasirhat%2C%20West%20Bengal!5e0!3m2!1sen!2sin!4v1742137535998!5m2!1sen!2sin"
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


