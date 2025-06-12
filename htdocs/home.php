<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description"
        content="Official Portfolio Website of Prasid Mandal - Full-Stack Web, Android App Developer - (Also Reknowned as @xodivorce).">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--
    - #Pinterest Domain Varification
    -->

    <?php
     $domainVerifyContent = $_ENV['PINTEREST_CONTENT_SECRET'] ?? 'default_verification_code';
    ?>
    <meta name="p:domain_verify" content="<?= htmlspecialchars($domainVerifyContent) ?>" />

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
                    <button onclick="window.location.href='./assets/pdf/CV_PRASID.pdf'" class="view-cv-btn">View
                        CV</button>
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

                            <button class="contact-link"
                                onclick="window.location.href='mailto:<?= $_ENV['SMTP_USER'] ?>'">
                                <?= $_ENV['SMTP_USER'] ?>
                            </button>

                        </div>

                    </li>

                    <li class="contact-item">

                        <div class="icon-box">
                            <ion-icon name="call-outline"></ion-icon>
                        </div>

                        <div class="contact-info">
                            <p class="contact-title">Phone</p>

                            <?php
                             $rawPhone = $_ENV['USER_PHONE'];
                             $formattedPhone = '';
                             $telHref = '';

                            if (preg_match('/^\+(\d+)\s*(\d{10,12})$/', $rawPhone, $matches)) {
                                $countryCode = '+' . $matches[1];
                                $nationalNumber = $matches[2];

                                $part1 = substr($nationalNumber, 0, 4);
                                $part2 = substr($nationalNumber, 4, 3);
                                $part3 = substr($nationalNumber, 7);

                             $formattedPhone = "$countryCode ($part1) $part2-$part3";
                             $telHref = 'tel:' . preg_replace('/\s+/', '', $rawPhone);
                            }
                            ?>

                            <?php if ($formattedPhone && $telHref): ?>
                            <button class="contact-link"
                                onclick="window.location.href='<?= $telHref ?>'"><?= $formattedPhone ?></button>
                            <?php else: ?>
                            <button class="contact-link">Invalid PH Format!</button>
                            <?php endif; ?>

                        </div>

                    </li>

                    <li class="contact-item">

                        <div class="icon-box">
                            <ion-icon name="calendar-outline"></ion-icon>
                        </div>

                        <div class="contact-info">
                            <p class="contact-title">Birthday</p>

                            <?php
                             $userBday = DateTime::createFromFormat('d-m-Y', $_ENV['USER_BDAY']);
                            ?>

                            <time datetime="<?= $userBday->format('Y-m-d') ?>">
                                <?= $userBday->format('F j, Y') ?>
                            </time>

                        </div>

                    </li>

                    <li class="contact-item">

                        <div class="icon-box">
                            <ion-icon name="location-outline"></ion-icon>
                        </div>

                        <?php
                         $gmapUrl = $_ENV['USER_GMAP'];
                         $locationName = 'Unknown Location';

                        if (preg_match('/!2s([^!]+)!/', $gmapUrl, $matches)) {
                            $rawLocation = urldecode($matches[1]);

                            $sql = "SELECT town_name, main_city FROM town_map";
                            $result = $conn->query($sql);

                            if ($result && $result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    if (stripos($rawLocation, $row['town_name']) !== false) {
                                        $locationName = $row['main_city'];
                                        break;
                                    }
                                }
                            }

                            if ($locationName === 'Unknown Location') {
                                $locationName = 'Unknown Location!'; #Set Your Location In Db(Town_Map) as "INSERT INTO `town_map` (`town_name`, `main_city`) VALUES ('Your Location', 'Your Nearby Khown Main City, Country');"
                            }
                        }
                        ?>

                        <div class="contact-info">
                            <p class="contact-title">Based On</p>
                            <address><?= htmlspecialchars($locationName) ?></address>
                        </div>


                    </li>

                </ul>

                <div class="separator"></div>

                <?php
                 $socials = [];
                 $sql = "SELECT * FROM social_links ORDER BY display_order ASC";
                 $result = $conn->query($sql);
                
                if ($result && $result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $socials[] = $row;
                    }
                }
                ?>

                <ul class="social-list">
                    <?php foreach ($socials as $social): ?>
                    <li class="social-item">

                        <button class="social-link"
                            onclick="window.open('<?= htmlspecialchars($social['url']) ?>', '_blank')">

                            <span class="icon-wrapper">
                                <ion-icon name="<?= htmlspecialchars($social['icon_name']) ?>"></ion-icon>
                            </span>

                        </button>

                    </li>
                    <?php endforeach; ?>
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

                    $birthDateString = $_ENV['USER_BDAY'] ?? $_SERVER['USER_BDAY'] ?? null;
                    $experienceStartYear = $_ENV['USER_EXPY'] ?? $_SERVER['USER_EXPY'] ?? null;

                    $birthDate = DateTime::createFromFormat('d-m-Y', $birthDateString);
                    if (!$birthDate) {
                      die("Invalid date format: Expected 'd-m-Y'.");
                    }

                    $today = new DateTime('today');
                    $age = $birthDate->diff($today)->y;

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
                                    <img src="./assets/images/autosquare.png" alt="Autosquare logo">
                            </li>

                            <li class="clients-item">
                                    <img src="./assets/images/steamstube.png" alt="Steamstube logo">
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
        - #For Isuues, Deploy Comeing-soon
          
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
                         ORDER BY FIELD(platform, 'Other', 'YouTube', 'Instagram', 'Facebook', 'Pinterest'), post_date DESC";                 
                         $result = $conn->query($sql);
                        ?>

                        <ul class="blog-posts-list">

                            <?php while ($row = $result->fetch_assoc()): ?>

                            <li class="blog-post-item">

                                <a href="<?= htmlspecialchars($row['post_link']) ?>">

                                    <figure class="blog-banner-box">

                                                        <!-- 
                                            - #Instagram Embed
                                        -->

                                        <?php if ($row['platform'] == 'Instagram'): ?>

                                        <blockquote class="instagram-media"
                                            data-instgrm-permalink="<?= htmlspecialchars($row['post_link']) ?>"
                                            data-instgrm-version="14" style="width:100%;">
                                        </blockquote>
                                        <script async src="//www.instagram.com/embed.js"></script>

                                                        <!-- 
                                            - #Facebook Embed 
                                        -->

                                        <?php elseif ($row['platform'] == 'Facebook' && !empty($row['post_iframe'])): ?>

                                        <iframe src="<?= htmlspecialchars($row['post_iframe']) ?>" width="100%"
                                            height="365" style="border:none;overflow:hidden;" scrolling="no"
                                            frameborder="0" allowfullscreen="true">
                                        </iframe>

                                                        <!-- 
                                            - #Pinterest Embed 
                                        -->

                                        <?php elseif ($row['platform'] == 'Pinterest' && !empty($row['post_iframe'])): ?>

                                        <iframe src="<?= htmlspecialchars($row['post_iframe']) ?>" height="365"
                                            width="100%" frameborder="0" scrolling="no"></iframe>

                                                                    <!-- 
                                            Default Image (YouTube, Other) 
                                        -->

                                        <?php else: ?>

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
                            <iframe src="<?= $_ENV['USER_GMAP']; ?>" width="400" height="300" loading="lazy">
                            </iframe>
                        </figure>
                    </section>

                    <section class="contact-form">

                        <h3 class="h3 form-title">Contact Form</h3>
                        <form id="contact-form" class="form" data-form>

                            <div class="input-wrapper">
                                <input type="text" name="fullname" class="form-input" placeholder="Your Full Name"
                                    required data-form-input>
                                <input type="email" name="email" class="form-input" placeholder="Your Email address"
                                    required data-form-input>
                            </div>

                            <textarea name="message" class="form-input" placeholder="Your Message" required
                                data-form-input></textarea>

                                        <!-- 
                            - #Status Message 
                        -->

                            <div class="status-message">
                                <p id="form-status" style="display: none;"></p>
                            </div>

                            <button id="form-btn" class="form-btn" type="submit">
                                <ion-icon name="paper-plane"></ion-icon>
                                <span>Send Message</span>
                            </button>

                        </form>

                    </section>
                </article>

        </div>

    </main>


                <!--
    - #Custom js link
  -->
    <script src="./assets/js/home.js"></script>
    <script src="./assets/js/preloader_config.js"></script>
    <script src="./assets/js/meta_config.js"></script>
    <script src="./assets/js/mail_config.js"></script>
    <script src="./assets/js/developer_config.js"></script>

                <!--
    - #Ionicon link
  -->
    <script type="module" src="https://cdn.jsdelivr.net/npm/ionicons@latest/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>