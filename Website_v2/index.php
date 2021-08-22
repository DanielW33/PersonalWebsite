<?php

checkTouchScreen();

function checkTouchScreen(){
    if(!isMobile()){
        $link = '<script>window.open("HTML/Desktop/main.php", "_self");</script>';
        echo $link;

    }
    else{
        $link = '<script>window.open("HTML/Mobile/main.php", "_self");</script>';
        echo $link;
    }
}
function isMobile() {
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name = "description" content = "Daniel Williams, Personal portfolio: Homepage">
    <meta name = "viewpoint" content = "width = device-width, initial-scale = 1">
    <title>Daniel Williams, Personal project portfolio</title>
    <link href = "CSS/indexCSS.css" rel = "StyleSheet" type = "text/css">


</head>
<body>
<div class = main>
    <h1>Redirecting you to device appropriate version of the website. This page is intentionally blank.</h1>
</div>

</body>
</html>