<?php
// Define website URL
$site_url = "https://journeynco.com/";

// List of pages to include in the sitemap
$pages = [
    ["loc" => "/", "priority" => "1.0"],
    ["loc" => "/about", "priority" => "0.8"],
    ["loc" => "/services", "priority" => "0.8"],
    ["loc" => "/contact", "priority" => "0.5"],
    ["loc" => "/blog", "priority" => "0.7"]
];

// Get current date
$date = date('Y-m-d');

// Start XML structure
$sitemap = '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
$sitemap .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . PHP_EOL;

foreach ($pages as $page) {
    $sitemap .= '    <url>' . PHP_EOL;
    $sitemap .= '        <loc>' . htmlspecialchars($site_url . $page["loc"]) . '</loc>' . PHP_EOL;
    $sitemap .= '        <lastmod>' . $date . '</lastmod>' . PHP_EOL;
    $sitemap .= '        <priority>' . $page["priority"] . '</priority>' . PHP_EOL;
    $sitemap .= '    </url>' . PHP_EOL;
}

$sitemap .= '</urlset>';

// Save sitemap to file
file_put_contents('sitemap.xml', $sitemap);

// Output success message
echo "Sitemap generated successfully!";
?>
