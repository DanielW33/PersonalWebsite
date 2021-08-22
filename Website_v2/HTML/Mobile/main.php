<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST["submit"])) {
        $Email = $_POST["email"];
        $FirstName = $_POST["fname"];
        $LastName = $_POST["lname"];
        $About = $_POST["about"];


        $Servername = "localhost";
        $Databasename = "dannywde_Contact";


        $conn = mysqli_connect($Servername, $Username, $Password, $Databasename);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $Sql = "CREATE TABLE IF NOT EXISTS Contacted(Email varchar(32) PRIMARY KEY,
                                                 FirstName varchar(32),                                                     
                                                 LastName varchar(32),
                                                 Reason varchar(300))";
        $conn->query($Sql);
        $Sql2 = "INSERT INTO 'Contacted'('Email', 'FirstName', 'LastName', 'Reason') VALUES ( '$Email', '$FirstName', '$LastName', '$About')";
        $conn->query($Sql2);
        $conn->close();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name = "description" content = "Daniel Williams, Personal portfolio: Homepage | Mobile Version">
    <meta name = "viewpoint" content = "width = device-width, initial-scale = 1">
    <title>Daniel Williams, Personal project portfolio</title>
    <link href="../../CSS/Mobile/main.css" type="text/css" rel="stylesheet">
    <link href="../../CSS/Mobile/Navigation.css" type="text/css" rel="stylesheet">
    <script src="../../JavaScript/Mobile/main.js"></script>
    <script src="../../JavaScript/Desktop/Skills.js"></script>
    <script src="../../JavaScript/Desktop/SubFileJS.js"></script>
</head>
<body>
<div class="MobileNavigation">
    <a href="#LandingPage" class="Home">
        <img src="../../Images/Logos/HomeIcon.png" alt="Home" class="HomeIcon" id="HomeIcon">
    </a>
    <a href="#AboutPage" class="About">
        <img src="../../Images/Logos/person-IconBefore.png" alt="About" class="AboutIcon" id="AboutIcon">
    </a>
    <a href="#SkillsPage" class="Skills">
        <img src="../../Images/Logos/GearsIconBefore.png" alt="Skills" class="SkillsIcon" id="SkillsIcon">
    </a>
    <a href="#ProjectsPage" class="Projects">
        <img src="../../Images/Logos/CPUIconBefore.png" alt="Projects" class="ProjectsIcon" id="ProjectsIcon">
    </a>
    <a href="#ContactPage" class="Contact">
        <img src="../../Images/Logos/EmailBefore.png" alt="Contact" class="ContactIcon" id="ContactIcon">
    </a>

    <div>
        <img src="../../Images/Logos/MenuClipart.png" alt="Menu" class="MenuIcon"  onclick="clickDropDown()">
    </div>
    <div class="Cover" id="Cover" onclick="clickCover()"></div>

    <div class="DropDown" id="DropDown">
        <div class="GitHubDD" onclick="openGitHub()">
            <img src="../../Images/Logos/GitHub-Mark-Light-120px-plus.png" alt="Github" class="GithubIcon">
            <h2>Github</h2>
        </div>

        <div class="InstagramDD" onclick="openInstagram()">
            <img src="../../Images/Logos/Instagram.png" alt="Instagram" class="InstagramIcon">
            <h2>Instagram</h2>
        </div>

        <div class="FacebookDD" onclick="openFacebook()">
            <img src="../../Images/Logos/Facebook.png" alt="Facebook" class="FacebookIcon">
            <h2>Facebook</h2>
        </div>


        <div class="LinkedinDD" onclick="openLinkedin()">
            <img src="../../Images/Logos/linkedin-logo.png" alt="Linkedin" class="LinkedinIcon">
            <h2>Linkedin</h2>
        </div>

        <div class="ContactTextContainer">
            <h2>Contact Information:</h2>
            <h2>Email: DanielEvanWil@Gmail.com</h2>
            <h2>Phone: (570) 406-0374</h2>
            <h2 onclick="openResume()">Click for my resume</h2>

        </div>
    </div>
</div>
<div class="LandingPage" id="LandingPage">
    <img class="LandingImage" src="../../Images/LandingPageImage.jpeg" alt="">
    <h1>Hi, I'm Daniel Williams. Computer Science Major and Graduate from Penn State University</h1>


</div>
<div class="PageBreak"></div>
<div class="AboutPage" id="AboutPage">
    <h1>About Me:</h1>
    <p>
        I recently graduated from Penn State University on August 14th, 2021. I am looking for a role as a Entry Level Software Engineer, however my long term goal is to eventually be a Embedded Software Engineer.<br><br>
        To help reach my goals, I have always put an emphasis on keeping Java and C/C++ my main programming languages. I am also studying C# because I have an interesting in working with standalone desktop applications,
        and I recently started studying react framework because it seemed like a very popular technology and I believe app development will continue moving in the direction of web applications. I enjoy working on front end design,
        but I have only done it at my own digression (this website for example)
    </p>
</div>
<div class="PageBreak"></div>
<div class="SkillsPage" id="SkillsPage">
    <div class="SkillsPageTop">
        <h1>Skills:</h1>
        <h2>Languages:<br> I am proficient in Java, C/C++, and I am partially experienced with python, mySQL, HTML, JavaScript, Scheme, and PHP.</h2>
        <h2>Abstract Data Types:<br> I have implemented and used ADTs in my projects. ADTs such as Stacks, Queues, and lists.
            Each implemented in a polymorphic and modular manor for code re-usability throughout</h2>
        <h2>Linux:<br> I am experienced in using Linux/Unix operating systems. My main computer runs Pop-OS,
            because it helps me increase my productivity as a developer.</h2>
        <h2>Multitasking:<br> I like to keep organized in order to prioritize tasks properly and to meet my deadlines everytime.</h2>
        <h2>Analytical Skills:<br> Besides having a Math Minor, I have always been a critical and out of the box thinker.</h2>
    </div>
    <div class="SkillsPageBottom">
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
<div class="PageBreak"></div>
<div class="ProjectsPage" id="ProjectsPage">
    <h1>Favorite Projects:</h1>
    <h2>Personal Projects:<br> Any of the Minecraft related projects as they were my initial inspiration to become a Software Developer. I also enjoyed developing this website.</h2>
    <h2>School Projects:<br>My favorite school projects are Malloc lab which was implementing Mallc from scratch, and my senior engineering design project</h2>
    <h2>
        <h2><a href="https://github.com/DanielW33">Click Here to visit github</a></h2>
</div>
<div class="PageBreak"></div>
<div class="ContactPage" id="ContactPage">
    <div class="ContactContainer">
        <form action="main.php" method="post">
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
                <textarea id="about" name="about" cols="50" rows="15" placeholder="I am a recruiter from... (256 characters or less)"></textarea>
            </div>
            <input type="submit" name="submit" class="submit" placeholder="Submit" style="height: 20px;">
        </form>
    </div>
</div>
<div class="PageBreak"></div>

<div class="ContactInfoPage">
    <h3>Contact Information:</h3>
    <h4>Email: danielevanwil@gmail.com</h4>
    <h4>Phone: (570) 406-0374</h4>
    <h4 onclick="openResume()" class="Resume">Click for my resume</h4>
</div>
</body>
</html>