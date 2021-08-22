window.onload = ImageChangePerScroll;
function clickDropDown(){
    let dd = document.querySelector("#DropDown");
    let Cover = document.querySelector("#Cover");
    dd.style.display = "block";
    Cover.style.display = "block";
}
function clickCover(){
    let Cover = document.querySelector("#Cover");
    let dd = document.querySelector("#DropDown");
    dd.style.display = "none";
    Cover.style.display = "none";
}
function ImageChangePerScroll(){
    let LandingPage = document.querySelector("#LandingPage");
    let AboutPage = document.querySelector("#AboutPage");
    let ProjectsPage = document.querySelector("#ProjectsPage");
    let SkillsPage = document.querySelector("#SkillsPage");
    let ContactPage = document.querySelector("#ContactPage");

    let LandingPageHeight = LandingPage.getBoundingClientRect().height;
    let AboutPageHeight = AboutPage.getBoundingClientRect().height;
    let ProjectsPageHeight = ProjectsPage.getBoundingClientRect().height;
    let SkillsPageHeight = SkillsPage.getBoundingClientRect().height;

    let HomeIcon = document.querySelector("#HomeIcon");
    let AboutIcon = document.querySelector("#AboutIcon");
    let SkillsIcon = document.querySelector("#SkillsIcon");
    let ProjectsIcon = document.querySelector("#ProjectsIcon");
    let ContactIcon = document.querySelector("#ContactIcon");

    window.addEventListener('scroll', function(Event){
        let ScrollTop = document.documentElement.scrollTop;
        if(ScrollTop < LandingPageHeight){
            HomeIcon.src = "../../Images/Logos/HomeIconOrange.png";
            AboutIcon.src = "../../Images/Logos/person-IconBefore.png";
            SkillsIcon.src = "../../Images/Logos/GearsIconBefore.png";
            ProjectsIcon.src = "../../Images/Logos/CPUIconBefore.png";
            ContactIcon.src = "../../Images/Logos/EmailBefore.png";
        }
        else if(ScrollTop < (AboutPageHeight + LandingPageHeight) && ScrollTop > (LandingPageHeight)){
            HomeIcon.src = "../../Images/Logos/HomeIcon.png";
            AboutIcon.src = "../../Images/Logos/person-IconAfter.png";
            SkillsIcon.src = "../../Images/Logos/GearsIconBefore.png";
            ProjectsIcon.src = "../../Images/Logos/CPUIconBefore.png";
            ContactIcon.src = "../../Images/Logos/EmailBefore.png";
        }
        else if(ScrollTop < (AboutPageHeight + LandingPageHeight + SkillsPageHeight) && ScrollTop > (LandingPageHeight + AboutPageHeight)){
            HomeIcon.src = "../../Images/Logos/HomeIcon.png";
            AboutIcon.src = "../../Images/Logos/person-IconBefore.png";
            SkillsIcon.src = "../../Images/Logos/GearsIconAfter.png";
            ProjectsIcon.src = "../../Images/Logos/CPUIconBefore.png";
            ContactIcon.src = "../../Images/Logos/EmailBefore.png";
        }
        else if(ScrollTop < (LandingPageHeight + AboutPageHeight + SkillsPageHeight + ProjectsPageHeight) && ScrollTop > (LandingPageHeight + AboutPageHeight + SkillsPageHeight)){
            HomeIcon.src = "../../Images/Logos/HomeIcon.png";
            AboutIcon.src = "../../Images/Logos/person-IconBefore.png";
            SkillsIcon.src = "../../Images/Logos/GearsIconBefore.png";
            ProjectsIcon.src = "../../Images/Logos/CPUIconAfter.png";
            ContactIcon.src = "../../Images/Logos/EmailBefore.png";
        }
        else{
            HomeIcon.src = "../../Images/Logos/HomeIcon.png";
            AboutIcon.src = "../../Images/Logos/person-IconBefore.png";
            SkillsIcon.src = "../../Images/Logos/GearsIconBefore.png";
            ProjectsIcon.src = "../../Images/Logos/CPUIconBefore.png";
            ContactIcon.src = "../../Images/Logos/EmailAfter.png";
        }
    });
}
