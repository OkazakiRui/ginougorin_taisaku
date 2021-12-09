const canvas = document.getElementById('canvas');
const ctx = canvas.getContext('2d');
ctx.fillStyle = 'red';
let xPosition = -80;
const loop = () => {
  xPosition += 1;
  ctx.clearRect(0, 0, canvas.width, canvas.height);
  ctx.beginPath();
  ctx.arc(xPosition, 100, 40, 0, Math.PI * 2, false);
  ctx.fill();
};
window.setInterval(loop, 5);
