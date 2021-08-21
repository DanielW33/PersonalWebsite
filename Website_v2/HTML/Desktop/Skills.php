<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name = "description" content = "Daniel Williams, Personal portfolio: Skills Page">
    <meta name = "viewpoint" content = "width = device-width, initial-scale = 1">
    <title>Daniel Williams, Personal project portfolio</title>
    <link href = "../../CSS/Desktop/SkillsCSS.css" rel = "StyleSheet" type = "text/css">
    <link href = "../../CSS/Desktop/Navigation.css" rel = "StyleSheet" type = text/css>
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
            <img class = "SkillsIcon" id = "SkillsIcon" alt = "Skills" src = "../../Images/Logos/GearsIconAfter.png">
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
            <li class = "logos"><img class = "Linkedin" id = "Linkedin" onclick = "openLinkedin()" src = "../../Images/Logos/linkedin-logo.png"></li>
            <li class = "logos"><img class = "GitHub" id = "GitHub" onclick = "openGitHub()" src = "../../Images/Logos/GitHub-Mark-Light-120px-plus.png"> </li>
            <li class = "logos"><img class = "Facebook" id = "Facebook" onclick = "openFacebook()" src = "../../Images/Logos/Facebook.png"></li>
            <li class = "logos"><img class = "Instagram" id ="Instagram" onclick = "openInstagram()" src = "../../Images/Logos/Instagram.png"></li>
        </ul>
    </div>
</div>

<body>
<div class = cover id = cover></div>
    <div class = BackgroundContainer>
        <div class = "BackgroundMiddle" id="BackgroundMiddle">
            <h1>Skills:</h1>
            <p class = "SkillText">Languages: I am proficient in Java, C/C++, and I have done some projects with python, mySQL, HTML, JavaScript, Scheme and PHP.</p>
            <p class = "SkillText">Abstract Data Types: I have implemented and used many ADT in my projects, such as Stacks, Queues in an polymorphic and modular manner for code usability throughout.</p>
            <p class = "SkillText">Linux: I am experienced in using linux/Unix operating systems. My main computer runs Pop-OS, because it helps me increase my productivity as a developer.</p>
            <p class = "SkillText">Multitasking: I like to keep organized in order to prioritize tasks properly and meet my deadlines everytime.</p>
            <p class = "SkillText">Analytical Skills: Besides having a Math Minor, I have always been a critical and out of the box thinker.</p>
        </div>
        <div class="SkillLinks">
            <div class="SL"><h1 onclick="openJava()">Java</h1></div>
            <div class="SL"><h1 onclick="openC()">C/C++</h1></div>
            <div class="SL"><h1 onclick="openPython()">Python</h1></div>
            <div class="SL"><h1 onclick="openMySQL()">mySQL</h1></div>
            <div class="SL"><h1 onclick="openHTML()">HTML</h1></div>
            <div class="SL"><h1 onclick="openJavaScript()">JavaScript</h1></div>
            <div class="SL"><h1 onclick="openScheme()">Scheme</h1></div>
            <div class="SL"><h1 onclick="openPHP()">PHP</h1></div>
            <div class="SL"><h1 onclick="openStack()">Stack Implementation</h1></div>
            <div class="SL"><h1 onclick="openQueue()">Queue Implementation</h1></div>
            <div class="SL"><h1 onclick="openList()">List Implementation</h1></div>
            <div class="SL"><h1 onclick="openVerilog()">Verilog</h1></div>

        </div>
    </div>

</body>


<script src = "../../JavaScript/Desktop/Skills.js"></script>
<script src = "../../JavaScript/Desktop/SubFileJS.js"></script>
</html>