<?php
require_once __DIR__ . '/vendor/autoload.php'; // Load the Composer autoloader

// Create mPDF object with Bengali language support
$mpdf = new \Mpdf\Mpdf([
    'mode' => 'utf-8',
    'autoScriptToLang' => true,
    'autoLangToFont' => true,
]);

// HTML content with Bengali text
$html = '<p>আপনাকে ধন্যবাদ</p><p>你好吗</p><p>كيف حالك</p>';

// Add the HTML content to the PDF
$mpdf->WriteHTML($html);

// Output the PDF to the browser or save it to a file
$mpdf->Output(); 

// You can also use other output modes like 'I' for displaying directly in the browser, 'S' for returning the PDF as a string, etc.
