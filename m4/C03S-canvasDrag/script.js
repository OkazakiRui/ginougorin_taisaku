const canvas = document.getElementById('canvas'),
  colorBtn = document.querySelectorAll('button');
let selectColor = 'red';
colorBtn.forEach((el) =>
  el.addEventListener('click', ({ target }) => (selectColor = target.id))
);
const ctx = canvas.getContext('2d');
ctx.beginPath();
canvas.addEventListener('mousemove', ({ offsetX, offsetY }) => {
  ctx.strokeStyle = selectColor;
  ctx.lineTo(offsetX, offsetY);
  ctx.stroke();
});
