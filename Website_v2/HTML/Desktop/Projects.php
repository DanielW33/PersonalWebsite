<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name = "description" content = "Daniel Williams, Personal portfolio: Skills Page">
    <meta name = "viewpoint" content = "width = device-width, initial-scale = 1">
    <title>Daniel Williams, Personal project portfolio</title>
    <link href = "../../CSS/Desktop/ProjectsCSS.css" rel = "StyleSheet" type = "text/css">
    <link href = "../../CSS/Desktop/Navigation.css" rel = "StyleSheet" type = text/css>
    <script type="text/javascript" src = "../../JavaScript/Desktop/Projects.js"></script>
    <script src = "../../JavaScript/Desktop/SubFileJS.js"></script>
</head>



<div class = "SideBar">
    <div class = "SideBarImageContainer">
        <img src = "../../Images/Profile.jpg" class = "CornerImage" alt ="Corner Image">
        <p class = "SideBarImageUnderText">Daniel Williams</p>
    </div>
    <div class = "GeneralNavigation">
        <a href ="main.php" class = "Home">
            <img class = "HomeIcon" id = "HomeIcon" alt = "Home" src = "../../Images/Logos/HomeIcon.png" onmouseover="transitionHomeTo()" onmouseleave="transitionHomeBack()">
            <h6 class = "HomeText">Home</h6>
        </a>
        <a href ="About.php">
            <img class = "AboutIcon" id = "AboutIcon" alt = "About" src = "../../Images/Logos/person-IconBefore.png" onmouseover="transitionAboutTo()" onmouseleave="transitionAboutBack()">
            <h6 class = "AboutText">About</h6>
        </a>
        <a href="Skills.php">
            <img class = "SkillsIcon" id = "SkillsIcon" alt = "Skills" src = "../../Images/Logos/GearsIconBefore.png" onmouseover="transitionSkillsTo()" onmouseleave="transitionSkillsBack()">
            <h6 class = "SkillsText">Skills</h6>
        </a>
        <a href="Projects.php">
            <img class = "ProjectsIcon" id = "ProjectsIcon" alt = "Projects" src = "../../Images/Logos/CPUIconAfter.png">
            <h6 class = "ProjectsText">Projects</h6>
        </a>
        <a href="Contact.php">
            <img class = "ContactIcon" id = "ContactIcon" alt="Contact" src = "../../Images/Logos/EmailBefore.png" onmouseover="transitionContactTo()" onmouseleave="transitionContactBack()">
            <h6 class = "ContactText">Contact</h6>
        </a>

    </div>
    <div class = "SideBarBottomLogos">
        <ul class = "logosList">
            <li class = "logos"><img class = "Linkedin" id = "Linkedin" onclick = "openLinkedin()" src = "../../Images/Logos/linkedin-logo.png" alt = "Linkedin"></li>
            <li class = "logos"><img class = "GitHub" id = "GitHub" onclick = "openGitHub()" src = "../../Images/Logos/GitHub-Mark-Light-120px-plus.png" alt="Github"> </li>
            <li class = "logos"><img class = "Facebook" id = "Facebook" onclick = "openFacebook()" src = "../../Images/Logos/Facebook.png" alt="Facebook"></li>
            <li class = "logos"><img class = "Instagram" id ="Instagram" onclick = "openInstagram()" src = "../../Images/Logos/Instagram.png" alt="Instagram"></li>
        </ul>
    </div>
</div>
<body>
    <div class = Cover id="Cover" onclick="unCover()"></div>
    <div class = GridLayout id="GridLayout">
        <div id="Grid1Container" class="GridContainer">
            <div class = grid id = grid1">
                <div class = SideText id = SideText1>
                    <h1 id = "Title" class = "Title" style="margin: 0 0 0 0"></h1>
                    <p id="SubText" class = "SubText" style="margin: 0 0 0 0"></p>
                </div>
                <div class = ImageContainer id="ImageContainer0"></div>
            </div>
            <div class = grid2 id="grid2">
                <div class = Arrow style="display: inline-flex; border-radius: 0; height: 50px; width: 50px;"><h4>&#10094;</h4></div>
                <div style="color: white; padding-left: 30px; padding-right: 30px;"><h3>Previous - Next</h3></div>
                <div class="Arrow" style="display: inline-flex; border-radius: 0; height: 50px; width: 50px;"><h4>&#10095;</h4></div>
            </div>
            <h1>UNDER CONSTRUCTION</h1>
        </div>
    </div>

</body>
<div class = Square id = "Square1"></div>
<div class = Square id = "Square2"></div>
<div class = Square id = "Square3"></div>
<div class = Square id = "Square4"></div>
<div class = Square id = "Square5"></div>
<div class = Square id = "Square6"></div>
<div class = Square id = "Square7"></div>
<div class = Square id = "Square8"></div>
<div class = Square id = "Square9"></div>
<div class = Square id = "Square10"></div>

<div class = Arrow id="RArrow" onclick="rotateImagesRight()"><h1>&#10095;</h1></div>
<div class = Arrow id="LArrow" onclick="rotateImagesLeft()"><h1>&#10094;</h1></div>
<script>
    window.onload = __init__;

</script>

</html>