<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="Module-9">
    <div class="container">
        <div class="left-title">
            <h5 class="business-title">
                Perfect Template for Business
            </h5>
            <div class="beatifull-menu">
                <h2 class="less-menu">Beautiful Homepages &amp; Unlimited Features</h2>
                <h6 class="raleway-menu">Praesent mattis commodo augue Aliquam ornare hendrerit augue Cras tellus In
                    pulvinar lectus a est Curabitur eget orci Cras laoreet ligula Etiam .</h6>
            </div>
        </div>
    </div>
</div>