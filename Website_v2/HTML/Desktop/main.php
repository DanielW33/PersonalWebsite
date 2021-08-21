<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name = "description" content = "Daniel Williams, Personal portfolio: Homepage">
    <meta name = "viewpoint" content = "width = device-width, initial-scale = 1">
    <title>Daniel Williams, Personal project portfolio</title>
    <link href = "../../CSS/Desktop/Navigation.css" rel = "StyleSheet" type ="text/css">
    <link href = "../../CSS/Desktop/mainCSS.css" rel = "StyleSheet" type = "text/css">
</head>

<body id = frame>
<div class = homeContainer id="homeContainer">

    <div class = "SideBar">
    <div class = "SideBarImageContainer">
        <img src = "../../Images/Profile.jpg" class = "CornerImage" alt ="Corner Image">
        <p class = "SideBarImageUnderText">Daniel Williams</p>
    </div>
    <div class = "GeneralNavigation">
        <a href ="main.php" class = "Home">
            <img class = "HomeIcon" id = "HomeIcon" alt = "Home" src = "../../Images/Logos/HomeIconOrange.png">
            <h6 class = "HomeText">Home</h6>
        </a>
        <a href ="About.php">
            <img class = "AboutIcon" id = "AboutIcon" alt = "About" src = "../../Images/Logos/person-IconBefore.png" onmouseover="transitionAboutTo()" onmouseleave="transitionAboutBack()">
            <h6 class = "AboutText">About</h6>
        </a>
        <a href="Skills.php">
            <img class = "SkillsIcon" id = "SkillsIcon" alt = "Skills" src = "../../Images/Logos/GearsIconBefore.png" onmouseover = "transitionSkillsTo()" onmouseleave="transitionSkillsBack()">
            <h6 class = "SkillsText">Skills</h6>
        </a>
        <a href="Projects.php">
            <img class = "ProjectsIcon" id = "ProjectsIcon" alt = "Projects" src = "../../Images/Logos/CPUIconBefore.png" onmouseover="transitionProjectsTo()" onmouseleave="transitionProjectsBack()">
            <h6 class = "ProjectsText">Projects</h6>
        </a>
        <a href="Contact.php">
            <img class = "ContactIcon" id = "ContactIcon" alt="Contact" src = "../../Images/Logos/EmailBefore.png" onmouseover="transitionContactTo()" onmouseleave="transitionContactBack()">
            <h6 class = "ContactText">Contact</h6>
        </a>

    </div>
    <div class = "SideBarBottomLogos">
        <ul class = "logosList">
            <li class = "logos"><img class = "Linkedin" id = "Linkedin" onclick = "openLinkedin()" alt = "linkedin" src = "../../Images/Logos/linkedin-logo.png"></li>
            <li class = "logos"><img class = "GitHub" id = "GitHub" onclick = "openGitHub()" alt="github" src = "../../Images/Logos/GitHub-Mark-Light-120px-plus.png"> </li>
            <li class = "logos"><img class = "Facebook" id = "Facebook" onclick = "openFacebook()" alt="Facebook" src = "../../Images/Logos/Facebook.png"></li>
            <li class = "logos"><img class = "Instagram" id ="Instagram" onclick = "openInstagram()" alt="Instagram" src = "../../Images/Logos/Instagram.png"></li>
        </ul>
    </div>
</div>
    <img class="LandingImage"  src="../../Images/LandingPageImage.jpeg">
    <div class = "TextContainer">
        <div class="IntroLines" id="Intro1"></div>
        <div class="IntroLines" id="Intro2"></div>
        <div class="IntroLines" id="Intro3"></div>
        <div class="IntroLines" id="Intro4"></div>
    </div>
    <div class="player" id="Player"></div>
    <div class="Follower" id="Follower"></div>
    <div class = "ClickHere" id="ClickHere" onclick="onClickClickHere()"><h1>Click Here</h1></div>

</div>
<div class ="Footer">
    <h3>Contact Information:</h3>
    <h4>Email: danielevanwil@gmail.com</h4>
    <h4>Phone: (570) 406-0374</h4>
    <h4 onclick="openResume()" class="Resume">My Resume</h4>
</div>
</body>


<script src = "../../JavaScript/Desktop/mainjs.js"></script>
<script src="../../JavaScript/Desktop/SubFileJS.js"></script>
</html>