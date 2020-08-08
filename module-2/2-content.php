<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="Module-2">
    <!-- Swiper -->
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <!-- Slide 1 -->
            <div class="swiper-slide">
                <div class="container-fluid bg-headerlight-src1">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="text-bg-headerlight-title text-center">
                                    <p class="p-title-content-headerlight">
                                        Beautifully Crafted Layouts
                                    </p>
                                    <p class="p-title-headerlight-nav">
                                        Excellent Design <br /> Styles and Concepts
                                    </p>
                                    <p class="button-title-headerlight ">
                                        Get Started now!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide 2 -->
            <div class="swiper-slide">
                <div class="swiper-slide">
                    <div class="container-fluid bg-headerlight-src2">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="text-bg-headerlight-title text-center">
                                        <p class="p-title-content-headerlight">
                                            Beautifully Crafted Layouts
                                        </p>
                                        <p class="p-title-headerlight-nav">
                                            Excellent Design <br /> Styles and Concepts
                                        </p>
                                        <p class="button-title-headerlight ">
                                            Get Started now!
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>

</div>