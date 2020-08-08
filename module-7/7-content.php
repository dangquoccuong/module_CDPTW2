<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="Module-7">
<div class="container">
          <div class="row">
            <div class="col-md-8">
              <div class="ct-ajax-contact">
                <form class="ct-ajax-form">
                  <div class="row">
                    <!-- {/* Name */} -->
                    <div class="ct-form-group col-sm-12">
                      <input
                        type="text"
                        name="name"
                        class="ct-form-control"
                        placeholder="Name"
                        required="required"
                      />
                    </div>
                    <!-- {/* Email */} -->
                    <div class="ct-form-group col-sm-12">
                      <input
                        type="text"
                        name="email"
                        class="ct-form-control"
                        placeholder="Email"
                        required="required"
                      />
                    </div>
                    <!-- {/* Subject */} -->
                    <div class="ct-form-group col-sm-12">
                      <input
                        type="text"
                        name="subject"
                        class="ct-form-control"
                        placeholder="Subject"
                        required="required"
                      />
                    </div>
                    <!-- {/* Message */} -->
                    <div class="ct-form-group col-sm-12">
                      <textarea
                        name="message"
                        rows="5"
                        class="ct-form-control-textarea"
                        placeholder="Message"
                        required="required"
                      ></textarea>
                    </div>
                  </div>
                  <div class="button-ct text-left">
                    <button
                      class="btn btn-warning"
                      aria-label="Submit Message"
                      type="submit"
                    >
                      Submit Message
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-md-4">
              <div class="ct-column-col-4">
                <div class="ct-text-block-1">
                  <h3 class="ct-h3-texttitle-1">Get In Touch</h3>
                </div>
                <div class="ct-empty-space"></div>
                <div class="ct-text-block-2">
                  <h3 class="ct-h3-texttitle-2">
                    Address Info
                    <span class="ct-span-text">Company name</span>
                  </h3>
                  <div class="ct-text-address">
                    <p class="ct-p-text">
                      3096 Cemetery Hollow Street, Houston, TX 77099 Telephone:
                      +1 1234-567-89000 FAX: +1 0123-4567-8900
                    </p>
                    <br />
                    <p class="ct-p-text">E-mail: mail@companyname.com</p>
                    <p class="ct-p-text">Website: www.yoursitename.com</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>