document.addEventListener("DOMContentLoaded", function () {
    const video = document.getElementById("background-video");

    video.addEventListener("loadeddata", function () {
        // La vidéo est chargée, commencez à afficher progressivement
        video.style.opacity = 1;
    });
});
console.log("Hello, World!")