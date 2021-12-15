import Vue from 'vue';
import VueRouter from 'vue-router';
import Home from '../views/Home.vue';
import News from '../views/News.vue';
import Artist from '../views/Artist.vue';

Vue.use(VueRouter);

const routes = [
  {
    path: '/',
    component: Home,
  },
  {
    path: '/news',
    component: News,
  },
  {
    path: '/artist',
    component: Artist,
  },
];

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes,
});

export default router;
