<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="Module-5">
    <div class="container-fluid header-light-first">
        <div class="row row-none-margin">
            <div class="col-md-6 col-none-pad">
                <div class="column-6-bg-img">
                    <div class="header-text-block">
                        <div class="h3-title-headerL">
                            We develop user interface Applications animations &amp; icons.
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-none-pad">
                <div class="column-6-text-headerL">
                    <div class="text-block-6">
                        <h5 class="h5-text-title-column-6">
                            Multipage Clean Template
                        </h5>
                        <div class="text-content-headerL">
                            <div class="sec-titleleft-content text-left">
                                <h2 class="h2-text-column6-headerL">
                                    Many more Features and Consepts included
                                </h2>
                                <div class="sec-title-line-headerL">&nbsp;</div>
                            </div>
                            <!-- {/* Icon 1 */} -->
                            <div class="iconlist-headerL-2">
                                <div class="icon-headerL">
                                    <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                </div>
                                <div class="text-span-headerL">
                                    &nbsp; Pellentesque sit amet augue eu orci cursus
                                    fermentum.
                                </div>
                            </div>
                            <!-- {/* Icon 2 */} -->
                            <div class="iconlist-headerL-2">
                                <div class="icon-headerL">
                                    <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                </div>
                                <div class="text-span-headerL">
                                    &nbsp; Maecenas fringilla orci ultrices nulla consectetur
                                    id.
                                </div>
                            </div>
                            <!-- {/* Icon 3 */} -->
                            <div class="iconlist-headerL-2">
                                <div class="icon-headerL">
                                    <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                </div>
                                <div class="text-span-headerL">
                                    &nbsp; Fringilla orci ultrices nulla consectetur id
                                    suscipit .
                                </div>
                            </div>
                            <!-- {/* Icon 4 */} -->
                            <div class="iconlist-headerL-2">
                                <div class="icon-headerL">
                                    <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                </div>
                                <div class="text-span-headerL">
                                    &nbsp; Maecenas fringilla orci ultrices nulla consectetur
                                    id.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="empty-space-hearlight"></div>
                    <div class="sec-button-headerlight text-left">
                        <button class="btn btn-header-light btn-dark text-uppercase">
                            <i class="fa fa-play-circle" aria-hidden="true"></i> Read
                            More
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>