let isStart = false;
let time = 0;
const startBtn = document.getElementById('start');
const stopBtn = document.getElementById('stop');
const second = document.getElementById('second');
startBtn.addEventListener('click', () => {
  isStart = true;
  time = 0;
});
stopBtn.addEventListener('click', () => {
  isStart = false;
  time = 0;
});

window.setInterval(() => {
  console.log(time);
  if (isStart) time++;
  second.style.transform = `rotate(${time * 6}deg)`;
}, 1000);
