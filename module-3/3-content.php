<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="Module-3">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="creative-share">
                    <div class="img-box-creative">
                        <img class="img-creative" src="./images/21.png" alt="img-responsive" />
                        <div class="overlay-creative">
                            <p>Praesent mattis commodo augue Aliquam ornare hendrerit . </p>
                            <br />
                            <ul class="icon-pp">
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
                    <div class="skarner-1">
                        <img src="./images/136.png" alt="img-responsive" />
                    </div>
                    <div class="skarner-2">
                        <img src="./images/137.png" alt="img-responsive" />
                    </div>
                    <div class="skarner-3">
                        <img src="./images/138.png" alt="img-responsive" />
                    </div>
                    <div class="text-box-cr">
                        <h5 class="h5-title-cr">Matthew</h5>
                        <p class="subtext-cr">Founder and CEO</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="creative-share">
                    <div class="img-box-creative">
                        <img class="img-creative" src="./images/22.png" alt="img-responsive" />
                        <div class="overlay-creative">
                            <p>Praesent mattis commodo augue Aliquam ornare hendrerit . </p>
                            <br />
                            <ul class="icon-pp">
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
                    <div class="skarner-1">
                        <img src="./images/136.png" alt="img-responsive" />
                    </div>
                    <div class="skarner-2">
                        <img src="./images/137.png" alt="img-responsive" />
                    </div>
                    <div class="skarner-3">
                        <img src="./images/138.png" alt="img-responsive" />
                    </div>
                    <div class="text-box-cr">
                        <h5 class="h5-title-cr">Jennifer</h5>
                        <p class="subtext-cr">Designer</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="creative-share">
                    <div class="img-box-creative">
                        <img class="img-creative" src="./images/23.png" alt="img-responsive" />

                        <div class="overlay-creative">
                            <p>Praesent mattis commodo augue Aliquam ornare hendrerit . </p>
                            <br />
                            <ul class="icon-pp">
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
                    <div class="skarner-1">
                        <img src="./images/136.png" alt="img-responsive" />
                    </div>
                    <div class="skarner-2">
                        <img src="./images/137.png" alt="img-responsive" />
                    </div>
                    <div class="skarner-3">
                        <img src="./images/138.png" alt="img-responsive" />
                    </div>
                    <div class="text-box-cr">
                        <h5 class="h5-title-cr">William</h5>
                        <p class="subtext-cr">Marketing</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="creative-share">
                    <div class="img-box-creative">
                        <img class="img-creative" src="./images/24.png" alt="img-responsive" />
                        <div class="overlay-creative">
                            <p>Praesent mattis commodo augue Aliquam ornare hendrerit . </p>
                            <br />
                            <ul class="icon-pp">
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
                    <div class="skarner-1">
                        <img src="./images/136.png" alt="img-responsive" />
                    </div>
                    <div class="skarner-2">
                        <img src="./images/137.png" alt="img-responsive" />
                    </div>
                    <div class="skarner-3">
                        <img src="./images/138.png" alt="img-responsive" />
                    </div>
                    <div class="text-box-cr">
                        <h5 class="h5-title-cr">Charlotte</h5>
                        <p class="subtext-cr">Developer</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>