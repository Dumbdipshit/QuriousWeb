let widthIsLargerThanHeight = false;
let websiteImageContainer = document.getElementsByClassName("website-image-container");

if(window.innerHeight > window.innerWidth){
    widthIsLargerThanHeight = true;
    for(let i = 0; i < websiteImageContainer.length; i++){
        websiteImageContainer[i].classList.add("website-image-mobile-display");
    }
}else{
    widthIsLargerThanHeight = false
    for(let i = 0; i < websiteImageContainer.length; i++){
        websiteImageContainer[i].classList.remove("website-image-mobile-display");
    }
}


let websiteItems = document.getElementsByClassName("website-items-container");
for(let i = 0; i < websiteItems.length; i++){
    document.getElementsByClassName("website-items-text-description-container")[i].style.height = 0;
}
