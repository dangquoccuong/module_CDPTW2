<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="Module-6">
    <div class="hm-3pp">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="hm-col-12">
                        <div class="text-title-hm text-center">
                            <h5 class="h5-hm-title">
                                Tell us about your business need
                            </h5>
                            <div class="text-hm-content">
                                <h2 class="hm-h2-title-content">
                                    Our Professional Team Create
                                    <br /> Your Business Solution
                                </h2>
                                <div class="hm-title-line">&nbsp;</div>
                            </div>
                        </div>
                        <div class="empty-space-pp-hm"></div>
                        <div class="person-hm-inner">
                            <div class="container">
                                <div class="row">
                                    <!-- {/* Person 3 */} -->
                                    <div class="col-md-4 col-sm-6">
                                        <div class="column-person-hm text-left">
                                            <div class="persoon-img-hm">
                                                <img class="img-hm-reponsive" src="./images/20.png" alt="Benjamin" />
                                            </div>
                                            <div class="person-information-content-hm">
                                                <div class="person-information-hm">
                                                    <span class="hm-person-name">Benjamin</span>
                                                    <span class="hm-person-designation">
                                                        Founder &amp; CEO
                                                    </span>
                                                    <div class="hm-person-introtext">
                                                        <br />
                                                        <div class="hm-line solid light-2"></div>
                                                        <br />
                                                        <p class="p-hm-small-text">
                                                            Lorem ipsum dolor sit amet, consectetuer
                                                            adipiscing elit. Suspendisse et justo.
                                                        </p>
                                                        <br />
                                                    </div>
                                                    <div class="hm-person-social-icon text-left">
                                                        <ul class="hm-icon-pp">
                                                            <li>
                                                                <a class="a a1" href="">
                                                                    <i class="fab fa-twitter"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="a a2" href="">
                                                                    <i class="fab fa-facebook"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="a a3" href="">
                                                                    <i class="fab fa-google-plus"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="a a4" href="">
                                                                    <i class="fab fa-linkedin"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- {/* Person 2 */} -->
                                    <div class="col-md-4 col-sm-6">
                                        <div class="column-person-hm text-left">
                                            <div class="persoon-img-hm">
                                                <img class="img-hm-reponsive" src="./images/21.png" alt="Charlotte" />
                                            </div>
                                            <div class="person-information-content-hm">
                                                <div class="person-information-hm">
                                                    <span class="hm-person-name">Charlotte</span>
                                                    <span class="hm-person-designation">
                                                        Marketing
                                                    </span>
                                                    <div class="hm-person-introtext">
                                                        <br />
                                                        <div class="hm-line solid light-2"></div>
                                                        <br />
                                                        <p class="p-hm-small-text">
                                                            Lorem ipsum dolor sit amet, consectetuer
                                                            adipiscing elit. Suspendisse et justo.
                                                        </p>
                                                        <br />
                                                    </div>
                                                    <div class="hm-person-social-icon">
                                                        <ul class="hm-icon-pp">
                                                            <li>
                                                                <a class="a a1" href="">
                                                                    <i class="fab fa-twitter"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="a a2" href="">
                                                                    <i class="fab fa-facebook"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="a a3" href="">
                                                                    <i class="fab fa-google-plus"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="a a4" href="">
                                                                    <i class="fab fa-linkedin"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- {/* Person 1 */} -->
                                    <div class="col-md-4 col-sm-6">
                                        <div class="column-person-hm text-left">
                                            <div class="persoon-img-hm">
                                                <img class="img-hm-reponsive" src="./images/22.png" alt="Jennifer" />
                                            </div>
                                            <div class="person-information-content-hm">
                                                <div class="person-information-hm">
                                                    <span class="hm-person-name">Jennifer</span>
                                                    <span class="hm-person-designation">
                                                        Support
                                                    </span>
                                                    <div class="hm-person-introtext">
                                                        <br />
                                                        <div class="hm-line solid light-2"></div>
                                                        <br />
                                                        <p class="p-hm-small-text">
                                                            Lorem ipsum dolor sit amet, consectetuer
                                                            adipiscing elit. Suspendisse et justo.
                                                        </p>
                                                        <br />
                                                    </div>
                                                    <div class="hm-person-social-icon">
                                                        <ul class="hm-icon-pp">
                                                            <li>
                                                                <a class="a a1" href="">
                                                                    <i class="fab fa-twitter"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="a a2" href="">
                                                                    <i class="fab fa-facebook"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="a a3" href="">
                                                                    <i class="fab fa-google-plus"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="a a4" href="">
                                                                    <i class="fab fa-linkedin"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
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
        </div>
    </div>
</div>