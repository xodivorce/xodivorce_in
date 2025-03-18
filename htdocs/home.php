<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description"
        content="Official Portfolio Website of Prasid Mandal - Full-Stack Web, iOS Developer and UI/UX Designer - (Also Reknowned as @xodivorce).">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xodivorce - Portfolio</title>

    <!--
    - #Favicon
  -->
    <link rel="icon" type="image/png" href="./assets/favicon/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="./assets/favicon/favicon.svg" />
    <link rel="shortcut icon" href="./assets/favicon/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="./assets/favicon/apple-touch-icon.png" />
    <link rel="manifest" href="./assets/favicon/site.webmanifest" />

    <!--
    - #Custom Css Link
  -->
    <link rel="stylesheet" href="./assets/css/home.css">
    <link rel="stylesheet" href="./assets/css/exeption.css">
    <link rel="stylesheet" href="./assets/css/meta_config.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!--
    - #Google Font link
  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100..900&display=swap" rel="stylesheet">
</head>


<body>
    <?php include 'assets/_preloader.php'; ?>
    <!--
    - #Main
  -->

    <main>

        <!--
      - #Sidebar
    -->

        <aside class="sidebar" data-sidebar>

            <div class="sidebar-info">

                <figure class="avatar-box">
                    <img src="./assets/images/dp.png" alt="xodivorce" width="80">
                </figure>

                <div class="info-content">
                    <h1 class="name" title="Prasid Mandal">Xodivorce</h1>
                    <a href="./assets/pdf/CV_PRASID.pdf" download class="view-cv-btn">View CV</a>
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
                        <a href="https://www.linkedin.com/in/prasid-mandal-85aa05268/" class="social-link"
                            target="_main">
                            <ion-icon name="logo-linkedin"></ion-icon>
                        </a>
                    </li>

                </ul>

            </div>

        </aside>

        <!--
      - #Main-Content
    -->

        <div class="main-content">

            <section class="about-text hoverAnimatedContainer">


                <!--
        - #Navbar
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
        - #About
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
                        Hey there! I'm Prasid, a <?php echo $age; ?>-year-old tech enthusiast, self-taught Full Stack
                        Web and Android Developer.
                        Delivering modern websites and Android apps with AI & modern Frameworks for more than
                        <?php echo $experienceYears; ?>+ years.
                    </p>

                    <p>
                        Crafting my passion into delivering industry-grade experience websites that are functional and
                        user-friendly, also attractive at the same time.
                        Moreover, I add a handcrafted touch to every line of code, No! Every pixel I've placed. However,
                        I'm On A Mission To Make The Web More Interesting...
                    </p>


                    <!--
          - #Service
        -->

                    <section class="service">

                        <h3 class="h3 service-title">What i'm doing</h3>

                        <ul class="service-list">

                            <li class="service-item">

                                <div class="service-icon-box">
                                    <img src="./assets/images/icon-design.svg" alt="design icon" width="40">
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
        - #Testimonials 
        -->

                    <section class="testimonials">
                        <h3 class="h3 testimonials-title">Testimonials</h3>

                        <?php
                        $sql = "SELECT * FROM testimonials ORDER BY date_added DESC";
                        $result = $conn->query($sql);
                      ?>
                        <ul class="testimonials-list has-scrollbar">
                            <?php while ($row = $result->fetch_assoc()) { ?>
                            <li class="testimonials-item" data-testimonials-item
                                data-name="<?php echo htmlspecialchars($row['name']); ?>"
                                data-avatar="<?php echo htmlspecialchars($row['avatar']); ?>"
                                data-message="<?php echo htmlspecialchars($row['message']); ?>"
                                data-date="<?php echo !empty($row['date_added']) ? htmlspecialchars($row['date_added']) : 'N/A'; ?>">

                                <div class="content-card" data-modal-trigger>
                                    <figure class="testimonials-avatar-box">
                                        <img src="<?php echo htmlspecialchars($row['avatar']); ?>"
                                            alt="<?php echo htmlspecialchars($row['name']); ?>" width="60"
                                            data-testimonials-avatar>
                                    </figure>

                                    <h4 class="h4 testimonials-item-title" data-testimonials-title>
                                        <?php echo htmlspecialchars($row['name']); ?></h4>
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
        - #Testimonials Modal 
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

                    <!--
          - #Clients
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
        - #Resume
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
                        <?php
                          $sql = "SELECT * FROM resume_education ORDER BY start_year DESC";
                          $result = $conn->query($sql);
                        ?>

                        <ol class="timeline-list">
                            <?php while ($row = $result->fetch_assoc()): ?>
                            <li class="timeline-item">
                                <h4 class="h4 timeline-item-title">
                                    <?= htmlspecialchars($row['institution']) ?>
                                </h4>
                                <span><?= $row['start_year'] . ' — ' . $row['end_year'] ?></span>
                                <p class="timeline-text">
                                    <?= htmlspecialchars($row['degree']) ?>; <br>
                                    <?= htmlspecialchars($row['description']) ?>
                                </p>
                            </li>
                            <?php endwhile; ?>
                        </ol>
                    </section>

                    <section class="timeline">
                        <div class="title-wrapper">
                            <div class="icon-box">
                                <ion-icon name="book-outline"></ion-icon>
                            </div>
                            <h3 class="h3">Experience</h3>
                        </div>
                        <?php
                          $sql = "SELECT * FROM resume_experience ORDER BY start_year DESC";
                          $result = $conn->query($sql);
                        ?>

                        <ol class="timeline-list">
                            <?php while ($row = $result->fetch_assoc()): ?>
                            <li class="timeline-item">
                                <h4 class="h4 timeline-item-title">
                                    <?= htmlspecialchars($row['job_title']) ?>
                                </h4>
                                <span><?= $row['start_year'] . ' – ' . htmlspecialchars($row['end_year']) ?></span>
                                <p class="timeline-text">
                                    <?= htmlspecialchars_decode($row['description']) ?>
                                </p>
                            </li>
                            <?php endwhile; ?>
                        </ol>
                    </section>

                    <!--
        - #Skills
        -->
                    <section class="skill">
                        <section class="skill">
                            <h3 class="h3 skills-title">My Skills</h3>
                            <?php
                              $sql = "SELECT * FROM resume_skills ORDER BY skill_level DESC";
                              $result = $conn->query($sql);
                            ?>
                            <ul class="skills-list content-card">
                                <?php while ($row = $result->fetch_assoc()): ?>
                                <li class="skills-item">
                                    <div class="title-wrapper">
                                        <h5 class="h5"><?= htmlspecialchars($row['skill_name']) ?></h5>
                                        <data value="<?= $row['skill_level'] ?>"><?= $row['skill_level'] ?>%</data>
                                    </div>
                                    <div class="skill-progress-bg">
                                        <div class="skill-progress-fill" style="width: <?= $row['skill_level'] ?>%;">
                                        </div>
                                    </div>
                                </li>
                                <?php endwhile; ?>
                            </ul>
                        </section>
                </article>

                <!--
        - #Portfolio
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

                                                <!-- 
                    - #For Isuues, Deploy Comeing-soon

                        <div class="container">
                         <div class="title"><i class="fa-regular fa-clock icon-spin"></i>&nbsp; Coming Soon</div>
                          <div class="subtitle">Please be patient, something interesting is cooking up...!!
                          </div>
                        </div>
                -->

                        <?php
                         $sql = "SELECT * FROM portfolio_projects ORDER BY id ASC";
                         $result = $conn->query($sql);
                        ?>

                        <ul class="project-list">
                            <?php while ($row = $result->fetch_assoc()): ?>
                            <li class="project-item active" data-filter-item
                                data-category="<?= strtolower($row['project_category']) ?>">
                                <a href="<?= htmlspecialchars($row['project_link']) ?>">
                                    <figure class="project-img">
                                        <div class="project-item-icon-box">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </div>
                                        <img src="<?= htmlspecialchars($row['project_image']) ?>"
                                            alt="<?= htmlspecialchars($row['project_name']) ?>" loading="lazy">
                                    </figure>
                                    <h3 class="project-title"><?= htmlspecialchars($row['project_name']) ?></h3>
                                    <p class="project-category"><?= htmlspecialchars($row['project_category']) ?></p>
                                </a>
                            </li>
                            <?php endwhile; ?>

                        </ul>

                    </section>

                </article>


                <!--
        - #Blog
      -->
                
                                    <!-- 
          //For Isuues, Deploy Comeing-soon
          
          <div class="container">
          <div class="title"><i class="fa-regular fa-clock icon-spin"></i>&nbsp; Coming Soon</div>
          <div class="subtitle">Please be patient, something interesting is cooking up...!!
          </div>
        </div>
        -->

                <article class="blog" data-page="blog">

                    <header>
                        <h2 class="h2 article-title">Blog</h2>
                    </header>

                    <section class="blog-posts">

                        <?php
                         $sql = "SELECT * FROM blog_posts 
                         ORDER BY FIELD(platform, 'Other', 'YouTube', 'Instagram', 'Facebook'), post_date DESC";                 
                         $result = $conn->query($sql);
                        ?>

                        <ul class="blog-posts-list">
                            <?php while ($row = $result->fetch_assoc()): ?>
                            <li class="blog-post-item">
                                <a href="<?= htmlspecialchars($row['post_link']) ?>">
                                    <figure class="blog-banner-box">
                                        <?php if ($row['platform'] == 'Instagram'): ?>
                                               
                                                <!-- 
                                    - #Instagram Embed 
                                -->

                                        <blockquote class="instagram-media"
                                            data-instgrm-permalink="<?= htmlspecialchars($row['post_link']) ?>"
                                            data-instgrm-version="14" style="width:100%;">
                                        </blockquote>
                                        <script async src="//www.instagram.com/embed.js"></script>

                                        <?php elseif ($row['platform'] == 'Facebook' && !empty($row['post_iframe'])): ?>
                                                
                                                <!--
                                    - #Facebook Embed 
                                -->

                                        <iframe src="<?= htmlspecialchars($row['post_iframe']) ?>" width="100%"
                                            height="650" style="border:none;overflow:hidden;" scrolling="no"
                                            frameborder="0" allowfullscreen="true">
                                        </iframe>

                                        <?php else: ?>
                                                
                                                <!-- 
                    - #Default Image (Other & YouTube) 
                -->

                                        <img src="<?= htmlspecialchars($row['post_image']) ?>"
                                            alt="<?= htmlspecialchars($row['post_image_alt']) ?>" loading="lazy">
                                        <?php endif; ?>
                                    </figure>
                                    <div class="blog-content">
                                        <div class="blog-meta">
                                            <p class="blog-category"><?= htmlspecialchars($row['post_category']) ?></p>
                                            <span class="dot"></span>
                                            <time datetime="<?= $row['post_date'] ?>">
                                                <?= date("M d, Y", strtotime($row['post_date'])) ?>
                                            </time>
                                        </div>
                                        <h3 class="h3 blog-item-title"><?= htmlspecialchars($row['post_title']) ?></h3>
                                        <p class="blog-text"><?= htmlspecialchars_decode($row['post_text']) ?></p>
                                    </div>
                                </a>
                            </li>
                            <?php endwhile; ?>
                        </ul>

                                                <!--
                - #Temp For META Not Resolved Iframe
            -->
                
                    <!-- 
                        <div id="mobile-notification" class="notification">
                            <span class="close-btn" onclick="closeNotification()">&#10005;</span>

                            <p><span class="highlight-text">Apologies</span>, some blogs are unreachable due to
                                <span class="highlight-text">x-iframe</span><br> not being resolved by <span
                                    class="highlight-text">meta</span>. For the best experience,<br> switch to the
                                <span class="highlight-text">desktop mode</span>. Thanks for your understanding.
                            </p>
                        </div> 
                    -->

                        </ul>

                    </section>

                </article>

                <!--
        - #Contact
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
                                <input type="text" name="fullname" class="form-input" placeholder="Full name" required
                                    data-form-input>
                                <input type="email" name="email" class="form-input" placeholder="Email address" required
                                    data-form-input>
                            </div>
                            <textarea name="message" class="form-input" placeholder="Your Message" required
                                data-form-input></textarea>
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
    <script src="./assets/js/preloader_config.js"></script>
    <script src="./assets/js/meta_config.js"></script>
    <script src="./assets/js/developer_config.js"></script>

    <!--
    - ionicon link
  -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>