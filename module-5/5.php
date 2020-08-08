<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

    require_once 'libs/scss.inc.php';

    use ScssPhp\ScssPhp\Compiler;

    $scss = new Compiler();

    $scss->setImportPaths('scss/');

    $styles = $scss->compile('@import "5-styles.scss";');

    $css = fopen('css/5-styles.css','w');
    
    fwrite($css,$styles);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module-5</title>
    <link href="<?php echo $url_path ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url_path ?>/fontawesome-5/css/all.min.css" rel="stylesheet" />
    <link href="<?php echo $url_path ?>/swiper/package/css/swiper.min.css" rel="stylesheet" />
    <link href="<?php echo $url_path ?>/css/5-styles.css" rel="stylesheet">
    <script src="<?php echo $url_path ?>/swiper/package/js/swiper.min.js"></script>
    <script src="<?php echo $url_path ?>/js/jquery-3.5.1.min.js"></script>
    <script src="<?php echo $url_path ?>./js/scripts.js"></script>

</head>

<body>
    <?php include "./5-content.php";?>
</body>
    

</html>