document.addEventListener("DOMContentLoaded", function () {
    const video = document.getElementById("background-video");

    video.addEventListener("loadeddata", function () {
        video.style.opacity = 1;
    });
});
document.addEventListener('DOMContentLoaded', function() {
    const video = document.querySelector('.video-overlay');
    const logo = document.querySelector('.logo');
    const header=document.querySelector('#masthead');

    if (video && logo && header) {
        const videoHeight = video.clientHeight;
        const windowHeight = window.innerHeight;
        const logoHeight = logo.clientHeight;
        const scrollThreshold = windowHeight - logoHeight;
        const headerHeight=header.clientHeight;
        const totalHeight=headerHeight+videoHeight-logoHeight;

        window.addEventListener('scroll', () => {
            const scrollY = window.scrollY;
            if (scrollY < totalHeight) {
                logo.style.top = (totalHeight + scrollY -350) + 'px';
            } 
        });
    }
});



document.addEventListener('DOMContentLoaded', function() {
    const titles = document.querySelectorAll('.fadeInBackground');

    function fadeInElements() {
        titles.forEach(function(title) {
            const rect = title.getBoundingClientRect();
            const viewportHeight = window.innerHeight || document.documentElement.clientHeight;

            if (rect.top - viewportHeight < 0) {
                title.classList.add('fadeIn');
            }
        });
    }

    window.addEventListener('scroll', fadeInElements);

    fadeInElements();
});

//*animation fleurs//
const orchidAndFlowerElements = document.querySelectorAll('.orchid, .flower, .Sunflower, .petithibiscus, .random, .fleur, .hibiscus');
let animationSpeed = 10;
let previousAnimationSpeed = animationSpeed;
let isScrolling = false;

function updateAnimationSpeed() {
  orchidAndFlowerElements.forEach(element => {
    element.style.animationDuration = `${animationSpeed}s`;
  });
}

window.addEventListener('scroll', () => {
  animationSpeed = 10 - window.scrollY * 0.1; 

  if (animationSpeed < 1) {
    animationSpeed = 1;
  }

  updateAnimationSpeed();
  isScrolling = true;
});

window.addEventListener('scrollend', () => {
  if (isScrolling) {
    animationSpeed = previousAnimationSpeed;
    updateAnimationSpeed();
    isScrolling = false;
  }
  previousAnimationSpeed = animationSpeed;
});

updateAnimationSpeed(animationSpeed);


//*animation au scroll//
const perso = document.querySelector('.perso');
const titre = document.querySelector('.titre')
perso.classList.remove('perso-transition');
titre.classList.remove('titre-transition')

const observer = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      perso.classList.add('perso-transition');
      titre.classList.add('titre-transition')
      return;
    }

    perso.classList.remove('perso-transition');
    titre.classList.remove('titre-transition');

  });
});

observer.observe(document.querySelector('.main-character'));
observer.observe(document.querySelector('.titres'));




//*animation des chats//*

var swiper = new Swiper(".mySwiper", {
    effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: false,
        },
        pagination: {
            el: ".swiper-pagination",
        },
    });

//*deplacement nuages//*
const nuage = document.querySelector('.grosnuage');
console.log(nuage);

// ici je me suis planté d'approche car si on fait ca le nuage s'arrete en cas d'arret du scroll
//  window.addEventListener('scroll', () => {
//  const scrollPosition = window.scrollY;
    
//  const translationValue = (scrollPosition / window.innerWidth) * 300;
//  nuage.style.left = `${translationValue}px`;
  
// });
const grosNuage = document.getElementById("grosnuage");
const petitNuage = document.getElementById("petitnuage");
const sectionLieu = document.getElementById("lieu");

const observerLieu = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      window.addEventListener('scroll', () => {
        const scrollPosition = window.scrollY - sectionLieu.scrollTop;
        console.log(scrollPosition);
        const calcul = (sectionLieu.scrollHeight - sectionLieu.clientHeight);
        console.log(sectionLieu.scrollHeight);
        console.log(sectionLieu.clientHeight);
        const posx = grosNuage.offsetLeft - 300;
        console.log(calcul);
        console.log(posx);
        grosNuage.style.left = posx + 'px';
      });
    }
  });
});

observerLieu.observe(sectionLieu);






    // Menu

const icons = document.getElementById("icons");
const nav = document.querySelector("nav");
const links = document.querySelectorAll("nav li");

const imageOverlay = document.querySelector(".image-overlay");

icons.addEventListener("click", () => {
  nav.classList.toggle("active");
  imageOverlay.style.display = nav.classList.contains("active") ? "block" : "none";
});

links.forEach((link) => {
  link.addEventListener("click", () => {
    nav.classList.remove("active");
    imageOverlay.style.display = "none";
  });
});



console.log("Script loaded successfully."); // Ajout d'un message pour vérifier que le script a été chargé
