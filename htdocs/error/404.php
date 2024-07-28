<?php
include 'core/route.php'; // Include route.php from the core directory
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php includeCss('404.css'); ?> <!-- Test with absolute path -->
    <title>404 Page Not Found</title>
    <link href="https://fonts.googleapis.com/css2?family=Arvo:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <section class="page_404">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="col-sm-10 col-sm-offset-1 text-center">
                        <div class="four_zero_four_bg">
                            <h1 class="text-center">404</h1>
                        </div>
                        <div class="contant_box_404">
                            <h3 class="h2">
                            Whoopse! 🐾 
                            </h3>
                            <p>Looks like we hit a roadblock! 🚧✨</p>
                            <a href="mailto:hey@xodivorce.in" class="link_404">🍳 Cooked up a mail! 🥄</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
<script>
    document.addEventListener('contextmenu', event => event.preventDefault());
</script>
</html>
