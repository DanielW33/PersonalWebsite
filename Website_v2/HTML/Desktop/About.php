<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name = "description" content = "Daniel Williams, Personal portfolio: About Page">
  <meta name = "viewpoint" content = "width = device-width, initial-scale = 1">
  <title>Daniel Williams, Personal project portfolio</title>
  <link href = "../../CSS/Desktop/AboutCSS.css" rel = "StyleSheet" type = "text/css">
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
      <img class = "AboutIcon" id = "AboutIcon" alt = "About" src = "../../Images/Logos/person-IconAfter.png">
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
      <li class = "logos"><img class = "Linkedin" id = "Linkedin" onclick = "openLinkedin()" src = "../../Images/Logos/linkedin-logo.png"></li>
      <li class = "logos"><img class = "GitHub" id = "GitHub" onclick = "openGitHub()" src = "../../Images/Logos/GitHub-Mark-Light-120px-plus.png"> </li>
      <li class = "logos"><img class = "Facebook" id = "Facebook" onclick = "openFacebook()" src = "../../Images/Logos/Facebook.png"></li>
      <li class = "logos"><img class = "Instagram" id ="Instagram" onclick = "openInstagram()" src = "../../Images/Logos/Instagram.png"></li>
    </ul>
  </div>
</div>
<body class = "bodyMain">
<div class = Dotart>
  <img class = "DotArt1" src = "../../Images/DotClipart.png">
  <img class = "DotArt2" src = "../../Images/DotClipart.png">
  <img class = "DotArt3" src = "../../Images/DotClipart.png">
  <img class = "DotArt4" src = "../../Images/DotClipart.png">
  <img class = "DotArt5" src = "../../Images/DotClipart.png">
  <img class = "DotArt6" src = "../../Images/DotClipart.png">
  <img class = "DotArt7" src = "../../Images/DotClipart.png">
</div>
<div class = AboutContainer>
  <div class = "AboutBody">
    <h1 class = "AboutTitle"><br>About me:</h1>
      <p class = "AboutMainText">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I recently graduated Penn State University on August 14th, 2021.
        I am looking for a role as a Entry level Software Engineer, however my goal is to eventually be a Embedded Software Engineer.
      </p>
    <p class = "AboutMainText">
      To help reach my goals, I have always put emphasis on keeping Java and C/C++ my main programming languages. I am also studying C# because I have an interest in working on
      standalone desktop applications, and I recently started studying React framework because it seemed like a very popular and interesting technology.
      I enjoy working on front end design, but I have only done it at my own digression (this website for example).
    </p>
  </div>
</div>
</body>
<script src = "../../JavaScript/Desktop/SubFileJS.js"></script>
</html>