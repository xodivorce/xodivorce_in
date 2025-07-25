<?php
$file = __DIR__ . '/../assets/pdf/prasid-resume.pdf';

if (!file_exists($file)) {
    http_response_code(404);
    echo 'File not found.';
    exit;
}

// Set headers
header('Content-Type: application/pdf');
header('Content-Disposition: inline; filename="prasid-resume.pdf"');
header('Content-Length: ' . filesize($file));
header('Accept-Ranges: bytes');
header('Cache-Control: public, must-revalidate, max-age=0');
header('Pragma: public');
header('Access-Control-Allow-Origin: *');

// Serve the file
readfile($file);
exit;
?>
