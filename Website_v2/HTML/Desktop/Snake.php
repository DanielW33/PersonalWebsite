<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name = "description" content = "Daniel Williams, Personal portfolio: About Page">
    <meta name = "viewpoint" content = "width = device-width, initial-scale = 1">
    <title>Daniel Williams, Personal project portfolio</title>
    <link href = "../../CSS/Desktop/Snake.css" rel = "StyleSheet" type = "text/css">
</head>
<body id="SnakeMainBody">
<div class = "SnakeGridLayout" id="SnakeGrid">
    <h1 class = header>Snake: </h1>
    <h1 class = SnakeScore id="SnakeScore">0</h1>
    <div class = GameContainer id="GameContainer"></div>

    <div id="StartButton" class="StartButton" onclick="StartGame()"><h1>Click Here to Start</h1><h1>W-A-S-D to move</h1></div>
    <div id="SnakeLose" class="SnakeLose"><h1>You Lost.</h1></div>

</div>


</body>
<script type="text/javascript" src="../../JavaScript/Desktop/Snake.js"></script>
</html>