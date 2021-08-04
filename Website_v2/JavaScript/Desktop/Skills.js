window.onload = __init__;
let ImageFrames = [];

function __init__(){
    GenerateSkillsExamples();

}
function GenerateSkillsExamples(){
    let container = document.querySelector("#SkillsExamples");
    let Rarrow = document.querySelector("#RArrow");
    let Larrow = document.querySelector("#LArrow");

    let ImageFrame = cExample();

    container.appendChild(Larrow);
    container.appendChild(ImageFrame);
    container.appendChild(Rarrow);

}
function cExample(){
    let ImageFrame = document.createElement("div");
    ImageFrames.push(ImageFrame);
    ImageFrame.className = "ImageFrame";
    ImageFrame.id = "ImageFrame";

    let I1Title = document.createElement("h1");
    I1Title.class = "I1Title";
    I1Title.style.color = "white";
    I1Title.innerHTML = "Designed Malloc Implementation in C";

    let I1 = document.createElement("p1");
    I1.innerText = "Using system calls, I designed custom implementations of malloc, free, and realloc.\n" +
        "This was done using system call sbrk() to allocate memory to the heap, then placed and sorted the data chunks into two doubly linked lists, a free list and a used list.";
    I1.className = "I1";


    let ImgLink = document.createElement("div");
    ImgLink.addEventListener("click", img1);
    ImgLink.className = "ImgLink";
    ImgLink.id = "ImgLink";
    ImgLink.innerText = "Implementation Design";

    ImageFrame.appendChild(I1Title);
    ImageFrame.appendChild(I1);
    ImageFrame.appendChild(ImgLink);
    return ImageFrame;
}
function img1(){
    window.open("../../Images/SkillsImages/MallocImplementationDesign.jpg", 'Image')
}
function I1Github(){
    window.open("https://github.com/DanielW33/MallocLab/blob/main/mm.c");
}
