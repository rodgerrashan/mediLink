const curserTag = document.querySelector("div.cursers");
const ball = curserTag.querySelector("div");


let currentX = 0;
let currentY = 0;
let aimX = 0;
let aimY = 0;

const animate = function(){
    const distance = Math.sqrt((aimX - currentX) ** 2 + (aimY - currentY) ** 2);
    const speed = Math.pow(distance, 0.1) * 0.05;  // Adjust the exponent and multiplier to control speed scaling
    
    currentX += (aimX - currentX) * speed;
    currentY += (aimY - currentY) * speed;

    ball.style.left = currentX + "px";
    ball.style.top = currentY + "px";

    requestAnimationFrame(animate);
}

animate();

document.addEventListener("mousemove", function(event){
    aimX = event.pageX;
    aimY = event.pageY;
});
