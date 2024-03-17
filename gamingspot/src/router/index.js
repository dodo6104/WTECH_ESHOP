import { createRouter, createWebHistory } from 'vue-router';
import Home from '../views/SiteHome.vue';
import Login from '../views/SiteLogin.vue';
import Register from '../views/SiteRegister.vue';
import Account from '../views/SiteAccountView.vue'

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes: [{
    path: '/',
    name: 'SiteHome',
    component: Home
  },
  {
      path: '/login',
      name: 'SiteLogin',
      component: Login
  },
  {
    path: '/register',
    name: 'SiteRegister',
    component: Register
  },
  {
    path: '/account=0',
    name: 'LoggedAccount',
    component: Account
  }
  ]
})

export default router;