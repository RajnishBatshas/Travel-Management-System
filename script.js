let menu=document.querySelector('#menu-btn');
let navbar=document.querySelector('.header .navbar');
let searchBtn = document.querySelector('#search-btn');
let searchBar = document.querySelector('.search-bar-container');


searchBtn.addEventListener('click',() =>{
  searchBtn.classList.toggle('fa-times');
  searchBar.classList.toggle('active');
});

window.onscroll = () =>{
  searchBtn.classList.remove('fa-times');
  searchBar.classList.remove('active');
};





menu.onclick= () =>{
    menu.classList.toggle('fa-times'); 
    navbar.classList.toggle('active');
};

window.onscroll= () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
};

var swiper = new Swiper(".home-slider", {
  loop:true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
});

var swiper = new Swiper(".reviews-slider", {
  loop:true,
  autoHeight:true,
  grabCursor:true,
  spaceBetween: 20,
  breakpoints: {
    0: {
      slidesPerView: 1, 
    },
    700: {
      slidesPerView: 2,
    },
    1000: {
      slidesPerView: 3,
    },
  },
});

let loadMoreBtn = document.querySelector('.packages .load-more .btn');
let currentItem = 3;

loadMoreBtn.onclick = () =>{
  let boxes = [...document.querySelectorAll('.packages .box-container .box')];
  for(var i = currentItem; i < currentItem + 3; i++){
    boxes[i].style.display = 'inline-block';
  };
  currentItem += 3;
  if(currentItem >= boxes.length){
    loadMoreBtn.style.display = 'none';
  }
}

let images = document.querySelectorAll('.packages .box-container .box');

searchBar.oninput = () =>{
   images.forEach(hide => hide.style.display = 'none');
   let value = searchBar.value;
   images.forEach(filter =>{
    let title=filter.getElementsByTagName('h3');
    if(value == title){
      filter.style.display = 'block';
    }
    if(searchBar.value == ''){
      filter.style.display = 'block';
    }
   });
};


