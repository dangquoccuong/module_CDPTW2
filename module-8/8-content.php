<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="Module-8">
    <div class="container">
        <div class="under-title">
            <h1 class="site-under">Site is Under Maintenance</h1>
            <div class="under-content">
                <h4 class="launch-title">Our website is under construction. We`ll be here soon with our new web
                    site,
                    get notified at <br /> launch.</h4>
            </div>
        </div>
        <div class="finally-here">
            <h3 class="finishedtext">Finally we are here</h3>
        </div>
    </div>
</div>