let element = document.getElementById("blue-square");
let posX = 0;
let posY = 50;
let speedX = 10;
let speedY = 10;
let windowWidth = window.innerWidth;
let windowHeight = window.innerHeight;

function animate() {
  posX += speedX;
  posY += speedY;
  if (posX < 0 || posX + element.clientWidth > windowWidth) {
    speedX = -speedX;
  }
  if (posY < 0 || posY + element.clientHeight > windowHeight) {
    speedY = -speedY;
  }
  element.style.transform = "translate(" + posX + "px, " + posY + "px)";
  requestAnimationFrame(animate);
}

animate();
