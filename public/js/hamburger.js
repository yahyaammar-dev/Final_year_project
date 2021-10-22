document.querySelector(".hamburger").addEventListener("click", function() {
  navbar = document.querySelector(".navbar"); 
  navbar.style.display="block" 
  if(navbar.classList.contains("navbar--active")){
      navbar.classList.remove("navbar--active")
      navbar.style.display="none" 
  }else{
    navbar.classList.add("navbar--active")
  }
});