let websiteItems = document.getElementsByClassName("website-items-container");
let widthIsLargerThanHeight = false;
let websiteImageContainer = document.getElementsByClassName("website-image-container");
function test(){
    for(let i = 0; i < websiteItems.length; i++){
        let height = document.getElementsByClassName("website-items-text-description-container")[i].offsetHeight;
        console.log(height);
        let locationBottom = document.getElementsByClassName("website-name-and-info-column-container")[i];
        locationBottom.style.bottom = -height + "px";
    }

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


let websiteLocationContainer = document.getElementsByClassName("website-items-container")
for(let i = 0; i < websiteLocationContainer.length; i++){
            websiteLocationContainer[i].addEventListener("mouseout", RemoveHeight);
            websiteLocationContainer[i].addEventListener("mouseover", GetHeight);
}
function RemoveHeight(){
    let websiteTextDescription = this.getElementsByClassName("website-items-text-description-container")[0];
    height = websiteTextDescription.offsetHeight;
    let locationBottom = this.getElementsByClassName("website-name-and-info-column-container")[0];
    locationBottom.style.bottom = -height + "px";
}
function GetHeight(){
    this.getElementsByClassName("website-items-text-description-container")[0].style.height = "fit-content";
    let locationBottom = this.getElementsByClassName("website-name-and-info-column-container")[0];
    locationBottom.style.bottom = 0;
}