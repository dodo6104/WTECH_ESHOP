import { createRouter, createWebHistory } from 'vue-router';
import Home from '../views/SiteHome.vue';
import Login from '../views/SiteLogin.vue';


// const routes = [
//   // history: createWebHistory(process.env.BASE_URL),
//   // routes: [
//     {
//       path: '/',
//       name: 'siteHome',
//       component: Home
//     },
//     {
//         path: '/login',
//         name: 'siteLogin',
//         component: () => import('../views/SiteLogin.vue')
//     }
//   ]
// // });

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes: [{
    path: '/',
    name: 'siteHome',
    component: Home
  },
  {
      path: '/login',
      name: 'siteLogin',
      component: Login
  },
  ]
})

export default router;