<template>
  <header class="shadow-lg">
    <h1 class="text-4xl">Tokyo Big Sizer</h1>
    <ul class="text-lg">
      <li><router-link to="/">トップページ</router-link></li>
      <li><router-link to="/artist">アーティスト一覧</router-link></li>
      <li><router-link to="/news">ニュース</router-link></li>
    </ul>
  </header>
</template>
<style scoped>
header {
  width: 100%;
  height: 100px;
  padding-inline: 32px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  /* box-shadow: ; */
}
ul {
  display: flex;
  gap: 24px;
}
</style>
