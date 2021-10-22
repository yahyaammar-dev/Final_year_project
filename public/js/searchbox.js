var icon = document.querySelector(".header__serachicon");
var field = document.querySelector(".header__searchfield");
var searchres = document.querySelector(".header__seachresult");

icon.addEventListener('click', function(){
    if(field.classList.contains("header__searchfieldy")){
        field.classList.remove("header__searchfieldy")
        field.classList.add("header__searchfieldn")
        icon.classList.add("fa-search")
        icon.classList.remove("fa-times")
    }else{
        field.classList.remove("header__searchfieldn")
        field.classList.add("header__searchfieldy")    
        icon.classList.add("fa-times")
        icon.classList.remove("fa-search")
    }
    if(searchres.classList.contains("header__searchfieldn")){
        searchres.classList.remove("header__searchfieldn")   
        searchres.classList.add("header__searchfieldy") 
    }else{
        searchres.classList.remove("header__searchfieldy")
        searchres.classList.add("header__searchfieldn")  
    }
});