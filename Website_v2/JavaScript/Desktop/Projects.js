
let LoadedImages = new Array();
let CurrentImageSet = 0;
let CurrentStartImage = 0;
let Images = Array(2);
const Colors = ["red", "teal", "green", "blue", "yellow", "orange", "pink"];
const ColorCount = 7;
function __init__(){
    GenerateSquares();

    loadImages(1, ".jpg");

    setTimeout(function(){
        ImageHandler("ImageContainer0");
    }, 300);
    setTimeout(function(){
        loadImages(2, ".jpg");
        loadImages(3, ".png");
    }, 400);
}
function rotateImagesRight(){
    let Images = LoadedImages[CurrentImageSet];
    let imgFrames = [document.querySelector("#imageFrame0"),document.querySelector("#imageFrame1"),document.querySelector("#imageFrame2")]

    imgFrames[2].removeChild(Images[((CurrentStartImage + 2) % Images.length)]);
    imgFrames[2].appendChild(Images[(CurrentStartImage + 1) % Images.length]);

    imgFrames[1].appendChild(Images[CurrentStartImage]);

    if(CurrentStartImage === 0){
        CurrentStartImage = Images.length - 1;
        imgFrames[0].appendChild(Images[CurrentStartImage]);
    }
    else{
        CurrentStartImage -= 1;
        imgFrames[0].appendChild(Images[CurrentStartImage]);
    }
}
function rotateImagesLeft(){
    let Images = LoadedImages[CurrentImageSet];
    let imgFrames = [document.querySelector("#imageFrame0"),document.querySelector("#imageFrame1"),document.querySelector("#imageFrame2")]
    console.log(CurrentStartImage);
    imgFrames[0].removeChild(Images[(CurrentStartImage)]);
    CurrentStartImage = (CurrentStartImage + 1) % Images.length;
    imgFrames[0].appendChild(Images[((CurrentStartImage) % Images.length)]);
    imgFrames[1].appendChild((Images[(CurrentStartImage + 1) % Images.length]));
    imgFrames[2].appendChild((Images[(CurrentStartImage + 2) % Images.length]));

}
function loadImages(Dir, Type){
    let FileCount = 1;
    let CheckFinished = false;
    let CheckContinue = true;
    let Directory = Dir;
    let TempArray = [];
    let img;

    let IntervalID = setInterval(function(){
        if(CheckFinished){
            clearInterval(IntervalID);
            console.log("Finished loading image set " + Directory);
            LoadedImages.push(TempArray);
            return;
        }
        if(CheckContinue) {
            CheckContinue = false;
            img = new Image();
            img.onload = function(){
                TempArray.push(img);
                FileCount++;
                CheckContinue = true;
            };
            img.onerror = function(){
                CheckFinished = true;
            };

            img.src = "../../Images/ProjectsImages/Container" + Directory + "/img" + FileCount + Type;
        }
    },1)

}

function ImageHandler(ContainerID){
    let imageSrcSet = LoadedImages[CurrentImageSet];
    let Container = document.querySelector("#" + ContainerID);
    let LeftArrow = document.querySelector("#LArrow");
    let RightArrow = document.querySelector("#RArrow");

    let imgFrame = new Array();

    for(let i = 0; i < imageSrcSet.length; i++){
        if(i < 3){
            imgFrame.push(document.createElement("div"));

            imgFrame[i].className = "imageFrame";
            imgFrame[i].id = "imageFrame" + i;
        }

        imageSrcSet[i].className = "images";

        imageSrcSet[i].addEventListener("click", function(){imageClicked(imageSrcSet[i],imgFrame[i % 3])});
        imageSrcSet[i].addEventListener("mouseenter", function(){HighLight(imageSrcSet[i])});
        imageSrcSet[i].addEventListener("mouseleave", function(){noHighlight(imageSrcSet[i])});
    }

    imgFrame[0].appendChild(imageSrcSet[0]);
    imgFrame[1].appendChild(imageSrcSet[1]);
    imgFrame[2].appendChild(imageSrcSet[2]);
    Container.appendChild(LeftArrow);
    Container.appendChild(imgFrame[0]);
    Container.appendChild(imgFrame[1]);
    Container.appendChild(imgFrame[2]);
    Container.appendChild(RightArrow);
    LeftArrow.style.display = "flex";
    RightArrow.style.display= "flex";

}

function imageClicked(img, frame){
    let Frame = frame;
    let IMG = img;
    Images[1] = IMG; Images[2] = Frame;

    let height = getComputedStyle(IMG).height, width = getComputedStyle(IMG).width;
    Frame.style.width = width;
    Frame.style.height = height;
    IMG.style.width = "auto";
    IMG.style.position = "fixed";
    IMG.style.zIndex = "10";
    let Top = Number(IMG.offsetTop - document.documentElement.scrollTop) + "px", left = Number(IMG.offsetLeft) + "px";
    IMG.style.top = Top;
    IMG.style.left = left;
    IMG.style.transition = "all 1.5s linear";
    document.getElementById("Cover").style.display= "block";
    setTimeout(function(){
        IMG.style.transform = "scale(1.2) translate(-30%, -50%)";
        IMG.style.top = "50%";
        IMG.style.left = "50%";
        document.getElementById("Cover").style.opacity = "1";
    }, 200);
}
function unCover(){
    let IMG = Images[1];


    let Interval = setInterval(function(){
        if(getComputedStyle(IMG).opacity !== "0"){
            IMG.style.opacity = "0";
        }
        else{
            document.getElementById("Cover").style.opacity = "0";
            document.getElementById("Cover").style.display = "none";
            IMG.style.transition = "none";
            IMG.style.width = "100%";
            IMG.style.transform = "none";
            IMG.style.top = "auto";
            IMG.style.left = "auto";
            IMG.style.zIndex = "1";
            clearInterval(Interval);
            IMG.style.opacity = "1";
            IMG.style.position = "relative";
        }

    }, 200);
}

function HighLight(img){
    let IMG = img;
    IMG.style.borderColor = "red";
}
function noHighlight(img){
    let IMG = img;
    IMG.style.borderColor = "blue";
}
function GenerateSquares(){
    fade('Square1'); fade('Square2'); fade('Square3'); fade('Square4');fade('Square5'); fade('Square6');fade('Square7');fade('Square8'); fade('Square9');
    fade('Square10');

}

function fade(ID){

    let element = document.querySelector("#" + ID);
    let top = Math.floor(Math.random() * window.screen.height);
    let left = Math.floor(Math.random() * window.screen.width);
    let tf = true, IntervalID = 0, opacity = 0;

    element.style.backgroundColor = Colors[getInteger()];
    left = left < 80 ? left + 80 : left;
    element.style.top = top + "px";
    element.style.left = left + "px";


    IntervalID = setInterval(function() {
        if (tf) {

            opacity = Number(getComputedStyle(element).opacity);

            if (opacity < 1) {
                opacity += Math.random() * 0.1;
                opacity = opacity > 1 ? 1 : opacity;
                document.getElementById(ID).style.opacity = opacity;
            } else {
                tf = false;
            }
        }
        else{
            opacity = Number(getComputedStyle(element).opacity);

            if(opacity !== 0){
                opacity -= Math.random() * .1;
                opacity = opacity < 0 ? 0 : opacity;
                document.getElementById(ID).style.opacity = opacity;
            }
            else{
                clearInterval(IntervalID);
                fade(ID);
            }
        }
    }, 125);
}
function getInteger(){
    return Math.floor(Math.random() * (ColorCount + 1));
}