const square = document.getElementById('square');
const move = (x, y) => {
  square.style.left = x - 8 + 'px';
  square.style.top = y - 8 + 'px';
};
window.addEventListener('mousemove', ({ clientX, clientY }) =>
  move(clientX, clientY)
);
