<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="Module-10">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="col-inner">
                    <h3 class="title">Contact Form</h3>
                    <div class="content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et
                        justo. Praesent mattis commodo augue.
                        Aliquam ornare hendrerit consectetuer adipiscing elit. Suspendisse et justo. augue.</div>
                    <div class="form">
                        <div class="form-inner">
                            <input type="text" class="sppb-form-control" placeholder="Name" />
                            <input type="text" class="sppb-form-control" placeholder="Email" />
                            <input type="text" class="sppb-form-control" placeholder="Subject" />
                            <textarea class="sppb-form-control" placeholder="Message"></textarea>
                            <button class="submit">Submit Message</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="col-inner">
                    <h3 class="sppb-addon-title">Address Info
                        <span>Company name</span></h3>
                    <div class="sppb-addon-content">
                        <p class="address">3096 Cemetery Hollow Street, Houston, TX 77099 Telephone: +1 1234-567-89000
                            FAX: +1 0123-4567-8900</p>
                        <p>E-mail: mail@companyname.com</p>
                        <p class="web">Website: www.yoursitename.com</p>
                    </div>
                </div>
                <div class="find-address">
                    <h3 class="tutle">Find Address</h3>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.4647830431386!2d106.75635931462314!3d10.852210192270093!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752797e321f8e9%3A0xb3ff69197b10ec4f!2zVHLGsOG7nW5nIENhbyDEkOG6s25nIEPDtG5nIG5naOG7hyBUaOG7pyDEkOG7qWM!5e0!3m2!1svi!2s!4v1596900391010!5m2!1svi!2s"
                        width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen=""
                        aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>