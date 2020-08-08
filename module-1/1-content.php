<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="module-1">
  <div class="container">
    <!-- Swiper -->
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide"> 
          <!-- Slide 1 -->
          <div class="people-item">
            <div class="img-box">
              <img
                class="img-people"
                src="./images/pp-20.png"
                alt="img-reponsive"
              />
              <div class="overlay-parallax">
                <h4 class="h4-title">Matthew</h4>
                <p class="sub-text">Founder &amp; CEO</p>
                <p class="content">
                  Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                </p>
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
          </div>
        </div>
        <!-- Slide 2 -->
        <div class="swiper-slide">
          <div class="people-item">
            <div class="img-box">
              <img
                class="img-people"
                src="./images/pp-21.png"
                alt="img-reponsive"
              />
              <div class="overlay-parallax">
                <h4 class="h4-title">Matthew</h4>
                <p class="sub-text">Founder &amp; CEO</p>
                <p class="content">
                  Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                </p>
                <br />
                <ul class="icon-pp">
                  <li>
                    <a class="a a1" href="">
                      <i class="fab fa-twitter" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li>
                    <a class="a a2" href="">
                      <i class="fab fa-facebook" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li>
                    <a class="a a3" href="">
                      <i class="fab fa-google-plus" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li>
                    <a class="a a4" href="">
                      <i class="fab fa-linkedin" aria-hidden="true"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- Slide 3 -->
        <div class="swiper-slide">
          <div class="people-item">
            <div class="img-box">
              <img
                class="img-people"
                src="./images/pp-22.png"
                alt="img-reponsive"
              />
              <div class="overlay-parallax">
                <h4 class="h4-title">Matthew</h4>
                <p class="sub-text">Founder &amp; CEO</p>
                <p class="content">
                  Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                </p>
                <br />
                <ul class="icon-pp">
                  <li>
                    <a class="a a1" href="">
                      <i class="fab fa-twitter" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li>
                    <a class="a a2" href="">
                      <i class="fab fa-facebook" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li>
                    <a class="a a3" href="">
                      <i class="fab fa-google-plus" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li>
                    <a class="a a4" href="">
                      <i class="fab fa-linkedin" aria-hidden="true"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- Slide 4 -->
        <div class="swiper-slide">
          <div class="people-item">
            <div class="img-box">
              <img
                class="img-people"
                src="./images/pp-20.png"
                alt="img-reponsive"
              />
              <div class="overlay-parallax">
                <h4 class="h4-title">Matthew</h4>
                <p class="sub-text">Founder &amp; CEO</p>
                <p class="content">
                  Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                </p>
                <br />
                <ul class="icon-pp">
                  <li>
                    <a class="a a1" href="">
                      <i class="fab fa-twitter" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li>
                    <a class="a a2" href="">
                      <i class="fab fa-facebook" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li>
                    <a class="a a3" href="">
                      <i class="fab fa-google-plus" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li>
                    <a class="a a4" href="">
                      <i class="fab fa-linkedin" aria-hidden="true"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- Slide 5 -->
        <div class="swiper-slide">
          <div class="people-item">
            <div class="img-box">
              <img
                class="img-people"
                src="./images/pp-21.png"
                alt="img-reponsive"
              />
              <div class="overlay-parallax">
                <h4 class="h4-title">Matthew</h4>
                <p class="sub-text">Founder &amp; CEO</p>
                <p class="content">
                  Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                </p>
                <br />
                <ul class="icon-pp">
                  <li>
                    <a class="a a1" href="">
                      <i class="fab fa-twitter" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li>
                    <a class="a a2" href="">
                      <i class="fab fa-facebook" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li>
                    <a class="a a3" href="">
                      <i class="fab fa-google-plus" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li>
                    <a class="a a4" href="">
                      <i class="fab fa-linkedin" aria-hidden="true"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- Slide 6 -->
        <div class="swiper-slide">
          <div class="people-item">
            <div class="img-box">
              <img
                class="img-people"
                src="./images/pp-22.png"
                alt="img-reponsive"
              />
              <div class="overlay-parallax">
                <h4 class="h4-title">Matthew</h4>
                <p class="sub-text">Founder &amp; CEO</p>
                <p class="content">
                  Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                </p>
                <br />
                <ul class="icon-pp">
                  <li>
                    <a class="a a1" href="">
                      <i class="fab fa-twitter" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li>
                    <a class="a a2" href="">
                      <i class="fab fa-facebook" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li>
                    <a class="a a3" href="">
                      <i class="fab fa-google-plus" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li>
                    <a class="a a4" href="">
                      <i class="fab fa-linkedin" aria-hidden="true"></i>
                    </a>
                  </li>
                </ul>
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
</div>
