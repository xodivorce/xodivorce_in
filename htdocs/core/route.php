<?php
function includeCss($filename) {
    // Generate an absolute URL for the CSS file
    $url = '/assets/css/' . $filename;
    echo '<link rel="stylesheet" href="' . htmlspecialchars($url) . '">';
}

function includeJs($filename) {
    // Generate an absolute URL for the JS file
    $url = '/assets/js/' . $filename;
    echo '<script src="' . htmlspecialchars($url) . '"></script>';
}
?>
