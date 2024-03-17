import { createRouter, createWebHistory } from 'vue-router';
import Home from '../views/SiteHome.vue';
import Login from '../views/SiteLogin.vue';
import Register from '../views/SiteRegister.vue';
// import Account from '../views/SiteAccountView.vue'
import MyOrdersView from '../views/SiteMyOrdersView.vue'
import PersonalDataView from '../views/SitePersonalDataView.vue'
import PaymentInfoView from '../views/SitePaymentInfoView.vue'


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
    path: '/account=:x',
    name: 'LoggedAccount',
    component: MyOrdersView,
    props: route => ({ account_id: route.params.x })
  },
  {
    path: '/account=:y/my_orders',
    name: 'MyOrders',
    component: MyOrdersView,
    props: route => ({ account_id: route.params.y })
  },
  {
    path: '/account=:z/personal_data',
    name: 'PersonalData',
    component: PersonalDataView,
    props: route => ({ account_id: route.params.z })
  },
  {
    path: '/account=:u/payment_info',
    name: 'PaymentInfo',
    component: PaymentInfoView,
    props: route => ({ account_id: route.params.u })
  }
  ]
})

export default router;