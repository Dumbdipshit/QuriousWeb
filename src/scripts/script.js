function LoadScript(){
    let websiteItems = document.getElementsByClassName("website-items-container");
    for(let i = 0; i < websiteItems.length; i++){
        let height = document.getElementsByClassName("website-items-text-description-container")[i].offsetHeight;
        let locationBottom = document.getElementsByClassName("website-name-and-info-column-container")[i];
        locationBottom.style.bottom = -height + "px";
    }
    
    let websiteEyeCatcher = document.getElementsByClassName("website-overflow-container");
    for(let i = 0; i < websiteEyeCatcher.length; i++){
        let height = document.getElementsByClassName("website-text-content-container")[i].offsetHeight;
        let locationBottom = document.getElementsByClassName("website-header-eye-catcher-name-and-info")[i];
        locationBottom.style.bottom = -height + "px";
    }
}


let websiteLocationContainer = document.getElementsByClassName("website-items-container")
for(let i = 0; i < websiteLocationContainer.length; i++){
            websiteLocationContainer[i].addEventListener("mouseout", RemoveLocationHeight);
            websiteLocationContainer[i].addEventListener("mouseover", GetLocationHeight);
}
function RemoveLocationHeight(){
    let websiteTextDescription = this.getElementsByClassName("website-items-text-description-container")[0];
    height = websiteTextDescription.offsetHeight;
    let locationBottom = this.getElementsByClassName("website-name-and-info-column-container")[0];
    locationBottom.style.bottom = -height + "px";
}
function GetLocationHeight(){
    let locationBottom = this.getElementsByClassName("website-name-and-info-column-container")[0];
    locationBottom.style.bottom = 0;
}


let websiteEyeCatcher = document.getElementsByClassName("website-overflow-container")
for(let i = 0; i < websiteEyeCatcher.length; i++){
            websiteEyeCatcher[i].addEventListener("mouseout", RemoveEyeCatcherHeight);
            websiteEyeCatcher[i].addEventListener("mouseover", GetEyeCactherHeight);
}
function RemoveEyeCatcherHeight(){
    let websiteTextDescription = this.getElementsByClassName("website-text-content-container")[0];
    height = websiteTextDescription.offsetHeight;
    let locationBottom = this.getElementsByClassName("website-header-eye-catcher-name-and-info")[0];
    locationBottom.style.bottom = -height + "px";
}
function GetEyeCactherHeight(){
    this.getElementsByClassName("website-header-eye-catcher-name-and-info")[0].style.height = "fit-content";
    let locationBottom = this.getElementsByClassName("website-header-eye-catcher-name-and-info")[0];
    locationBottom.style.bottom = 0;
}

let sideBarActive = false;

function ActivateSideBar(){
    let sideBar = document.getElementsByClassName("menu-side-bar-options")[0];

    if(sideBarActive == false){
        sideBar.classList.add("hide-menu-side-bar");
        sideBarActive = true;
    }else{
        sideBar.classList.remove("hide-menu-side-bar");
        sideBarActive = false;
    }
}