<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="Module-4">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="column-5-about">
                    <div class="text-box-about">
                        <h5 class="h5-title-about">Get Many more Features</h5>
                        <div class="text-content-about">
                            <div class="sec-text-title text-left">
                                <h2 class="sec-h2-title">
                                    We Designed many Success Templates
                                </h2>
                                <div class="sec-line-title">&nbsp;</div>
                            </div>
                            <p class="p-about-5">
                                Praesent mattis commodo augue Aliquam ornare hendrerit
                                augue Cras tellus In pulvinar lectus a est Curabitur eget
                                orci Cras laoreet ligula. Etiam sit amet dolor. Vestibulum
                                ante ipsum primis in faucibus.
                            </p>
                            <p class="p-about-5">
                                Praesent mattis commodo augue Aliquam ornare hendrerit
                                augue Cras tellus In pulvinar lectus a est Curabitur sit
                                amet justo amet.
                            </p>
                        </div>
                        <div class="sec-button text-left">
                            <button class="btn btn-about-style btn-dark text-uppercase">
                                <i class="fa fa-play-circle" aria-hidden="true"></i> Read
                                More
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="column-7-about">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="column-76-about">
                                    <div class="box-icon-raw">
                                        <div class="box-feature text-left">
                                            <div class="iconbox-mall">
                                                <i class="fas fa-user"></i>
                                            </div>
                                            <br />
                                            <h5 class="h5-title-iconbox">
                                                Our Journey Start
                                            </h5>
                                            <p class="p-about-7">
                                                Vestibulum ante ipsum primis in faucibus orci
                                                luctus et ultrices posuere cubilia.
                                            </p>
                                        </div>
                                        <div class="empty-space-about"></div>
                                        <div class="box-feature text-left">
                                            <div class="iconbox-mall">
                                                <i class="fas fa-user"></i>
                                            </div>
                                            <br />
                                            <h5 class="h5-title-iconbox">
                                                Our Journey Start
                                            </h5>
                                            <p class="p-about-7">
                                                Vestibulum ante ipsum primis in faucibus orci
                                                luctus et ultrices posuere cubilia.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="column-76-about">
                                    <div class="box-icon-raw">
                                        <div class="box-feature text-left">
                                            <div class="iconbox-mall">
                                                <i class="far fa-chart-bar"></i>
                                            </div>
                                            <br />
                                            <h5 class="h5-title-iconbox">
                                                Company Founded
                                            </h5>
                                            <p class="p-about-7">
                                                Vestibulum ante ipsum primis in faucibus orci
                                                luctus et ultrices posuere cubilia.
                                            </p>
                                        </div>
                                        <div class="empty-space-about"></div>
                                        <div class="box-feature text-left">
                                            <div class="iconbox-mall">
                                                <i class="fas fa-trophy"></i>
                                            </div>
                                            <br />
                                            <h5 class="h5-title-iconbox">
                                                About Awards
                                            </h5>
                                            <p class="p-about-7">
                                                Vestibulum ante ipsum primis in faucibus orci
                                                luctus et ultrices posuere cubilia.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>