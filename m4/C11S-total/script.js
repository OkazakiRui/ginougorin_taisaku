const list = document.querySelectorAll('li');
const result = document.getElementById('calc');
let total = 0;
list.forEach((el) => {
  total += Number(el.textContent);
});
result.textContent = total;
