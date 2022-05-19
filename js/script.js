let menuBar = document.querySelector(`#menu-btn`);
let navbar = document.querySelector(`.header .navbar`);

menuBar.onclick =  () => {
    menuBar.classList.toggle('fa-times');
    navbar.classList.toggle("active");
}


window.onscroll =  () => {
    menuBar.classList.remove('fa-times');
    navbar.classList.remove("active");
}


var swiper = new Swiper(".home-slider", {
    loop:true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
});

var swiper = new Swiper(".reviews-slider", {
  loop:true,
  spaceBetween: 20,
  autoHeight:true,
  grabCursor:true,
  breakpoints: {
    "@0.00": {
      slidesPerView: 1,
    },
    "@0.75": {
      slidesPerView: 2,
    },
    "@1.00": {
      slidesPerView: 3,
    },
    "@1.50": {
      slidesPerView: 4,
    },
  },
});


// load more content 

let loadMoreBtn = document.querySelector(".packeges .load-more .btn"); 
let currentItem = 3;

loadMoreBtn.onclick = () => {
  let boxes = [...document.querySelectorAll(`.packeges .box-container .box`)];
  for(var i = currentItem; i < currentItem + 3 ; i++){
    boxes[i].style.display = "inline-block";
  };
  currentItem += 3;
  if(currentItem >= boxes.length){
    loadMoreBtn.style.display= "none";
  }
};