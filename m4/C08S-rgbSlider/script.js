const colors = document.querySelectorAll('input');
const box = document.getElementById('box');
const value = document.getElementById('box');
const colorHandle = () => {
  const r = colors[0].value;
  const g = colors[1].value;
  const b = colors[2].value;
  box.style.background = `rgb(${r}, ${g}, ${b})`;
  value.textContent = `rgb(${r}, ${g}, ${b})`;
};
colorHandle();

colors.forEach((el) => el.addEventListener('input', colorHandle));
