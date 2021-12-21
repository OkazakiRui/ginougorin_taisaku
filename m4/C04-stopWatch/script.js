let isStart = false;
let a = 0;
let b = 0;
const startBtn = document.getElementById('start');
const stopBtn = document.getElementById('stop');
const aEl = document.getElementById('a');
const bEl = document.getElementById('b');
startBtn.addEventListener('click', () => {
  isStart = true;
  a = 0;
  b = 0;
});
stopBtn.addEventListener('click', () => {
  isStart = false;
  a = 0;
  b = 0;
});

window.setInterval(() => {
  if (isStart) b++;
  if (b === 1000) {
    a++;
    b = 0;
  }
  if (a === 999 && b === 999) isStart = false;
  aEl.textContent = a;
  bEl.textContent = b;
}, 1);
