let widthIsLargerThanHeight = false;
let websiteImageContainer = document.getElementsByClassName("website-image-container");

function CheckWebsiteSize(){
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
}