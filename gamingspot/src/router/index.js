import { createRouter, createWebHistory } from 'vue-router';
import Home from '../views/SiteHome.vue';

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'siteHome',
      component: Home
    },
    // pridajte ďalšie cesty podľa potreby
  ],
});

export default router;
