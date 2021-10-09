document.querySelector(".hamburger").addEventListener("click", function() {
  navbar = document.querySelector(".navbar");  
  if(navbar.classList.contains("navbar--active")){
      navbar.classList.remove("navbar--active")
  }else{
    navbar.classList.add("navbar--active")
  }
  });