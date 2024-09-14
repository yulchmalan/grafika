let text = document.getElementById("text")

let haku = document.getElementById("haku")
let cloud_right = document.getElementById("cloud-right")
let cloud_left = document.getElementById("cloud-left")
let birds = document.getElementById("birds")

window.addEventListener('scroll', () => {
    let value = window.scrollY;
    text.style.marginTop = value * 2.5 + 'px';
    cloud_left.style.left = value * 1.5 + 'px';
    cloud_right.style.left = value * -3 + 'px';
    birds.style.left = value * 0.5 +'px';
    haku.style.left = value * -2 + 'px';
})