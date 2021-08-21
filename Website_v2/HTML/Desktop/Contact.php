<?php
    $Servername = "localhost";
    $Databasename = "dannywde_Contact";

    $port = 3306;
    $Protocol = "UDP";

$conn = mysqli_connect($Servername, $Username, $Password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST["submit"])) {
            $Email = $_POST["email"];
            $FirstName = $_POST["fname"];
            $LastName = $_POST["lname"];
            $About = $_POST["about"];
            echo $Email;
            echo $FirstName;
            echo $LastName;
            echo $About;
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name = "description" content = "Daniel Williams, Personal portfolio: Contact Page">
    <meta name = "viewpoint" content = "width = device-width, initial-scale = 1">
    <title>Daniel Williams, Personal project portfolio</title>
    <link href = "../../CSS/Desktop/ContactCSS.css" rel = "StyleSheet" type = "text/css">
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
            <img class = "SkillsIcon" id = "SkillsIcon" alt = "Skills" src = "../../Images/Logos/GearsIconBefore.png" onmouseover="transitionSkillsTo()" onmouseleave="transitionSkillsBack()">
            <h6 class = "SkillsText">Skills</h6>
        </a>
        <a href="Projects.php">
            <img class = "ProjectsIcon" id = "ProjectsIcon" alt = "Projects" src = "../../Images/Logos/CPUIconBefore.png" onmouseover="transitionProjectsTo()" onmouseleave="transitionProjectsBack()">
            <h6 class = "ProjectsText">Projects</h6>
        </a>
        <a href="Contact.php">
            <img class = "ContactIcon" id = "ContactIcon" alt="Contact" src = "../../Images/Logos/EmailAfter.png">
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
    <div class="ContactContainer">
        <form action="Contact.php" method="post">
        <h1>Contact Me:</h1>
        <div>
            <label for="email" style="font-size: 20px">Email Address:</label>
            <input type="email" id="email" name="email" placeholder="johndoe@example.com">
        </div>
        <div>
            <label for="fname" style="font-size: 20px">First Name:</label>
            <input type="text" id="fname" name="fname" placeholder="John">
        </div>
        <div>
            <label for="lname" style="font-size: 20px">Last Name:</label>
            <input type="text" id="lname" name="lname" placeholder="Doe">
        </div>
        <div>
            <h2>Reason for Contacting:</h2>
            <textarea id="about" name="about" cols="50" rows="15" placeholder="I am a recruiter from..."></textarea>
        </div>
        <input type="submit" name="submit" class="submit" placeholder="Submit" style="height: 20px;">
        </form>
    </div>
    <div class ="mainFooter">
        <h3>Contact Information:</h3>
        <h4>Email: danielevanwil@gmail.com</h4>
        <h4>Phone: (570) 406-0374</h4>
        <h4 onclick="openResume()" class="Resume">My Resume</h4>
    </div>
</body>
<script src = "../../JavaScript/Desktop/SubFileJS.js"></script>
<script src="../../JavaScript/Desktop/Contact.js"></script>
</html>