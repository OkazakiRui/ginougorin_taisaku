// forEach
{
  const ary = [7, 16, 3, 2, 20, 16, 19, 6, 5];
  const calcAry = [];
  ary.forEach((num) => {
    if (!(num % 2)) return calcAry.push(num);
    calcAry.push(num ** 2);
  });
  console.log(calcAry);
}
// map
{
  const ary = [7, 16, 3, 2, 20, 16, 19, 6, 5];
  const calcAry = ary.map((num) => {
    if (!(num % 2)) return num;
    return num ** 2;
  });
  console.log(calcAry);
}
// map 元の配列を削除
{
  let ary = [7, 16, 3, 2, 20, 16, 19, 6, 5];
  ary = ary.map((num) => {
    if (!(num % 2)) return num;
    return num ** 2;
  });
  console.log(ary);
}
