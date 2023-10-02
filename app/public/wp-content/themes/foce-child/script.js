document.addEventListener("DOMContentLoaded", function () {
    const video = document.getElementById("background-video");

    video.addEventListener("loadeddata", function () {
        video.style.opacity = 1;
    });
});
document.addEventListener('DOMContentLoaded', function() {
    const video = document.querySelector('.video-overlay');
    const logo = document.querySelector('.logo');

    if (video && logo) {
        //*const videoHeight = video.clientHeight;*//
        const windowHeight = window.innerHeight;
        const logoHeight = logo.clientHeight;
        const scrollThreshold = windowHeight - logoHeight;

        window.addEventListener('scroll', () => {
            const scrollY = window.scrollY;

            if (scrollY > scrollThreshold) {
                logo.style.top = (scrollThreshold - scrollY) + 'px';
            } else {
                logo.style.top = '0';
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
const orchidAndFlowerElements = document.querySelectorAll('.orchid, .flower');

document.addEventListener("scroll", () => {
  const scrollY = window.scrollY;
  const rotateInfinitely = 10 + scrollY * 0.2;

  });










