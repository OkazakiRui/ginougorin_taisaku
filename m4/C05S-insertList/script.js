const ave = document.getElementById('ave');
const list = document.getElementById('list');
const insert = document.getElementById('insert');
const numbers = [0];

// 挿入するリストのテンプレ
const itemTemp = (value, index) =>
  `<div class="item">
    <input type="number" value="${value}" oninput="onInputChange()" />
    <button onclick="deleteItem(${index})">delete</button>
  </div>`;

// 平均の計算
const average = () => {
  let total = 0;
  numbers.map((number) => (total += number));
  ave.textContent = total / numbers.length;
};

// リストの更新
const listReload = () => {
  list.innerHTML = '';
  numbers.map((value, index) => (list.innerHTML += itemTemp(value, index)));
  average();
};

insert.addEventListener('click', () => {
  numbers.push(0);
  listReload();
});

// html で呼び出す関数
// deleteボタン
function deleteItem(index) {
  if (numbers.length === 1) return;
  numbers.splice(index, 1);
  listReload();
}
// inputタグが更新された時の処理
function onInputChange() {
  numbers.splice(0);
  document
    .querySelectorAll('input')
    .forEach((el) => numbers.push(Number(el.value)));
  average();
}

window.addEventListener('load', listReload);
