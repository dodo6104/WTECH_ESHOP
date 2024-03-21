import { createRouter, createWebHistory } from 'vue-router';
import Home from '../views/SiteHome.vue';
import Login from '../views/SiteLogin.vue';
import Register from '../views/SiteRegister.vue';
import MyOrdersView from '../views/SiteMyOrdersView.vue';
import PersonalDataView from '../views/SitePersonalDataView.vue';
import PaymentInfoView from '../views/SitePaymentInfoView.vue';
import CartListView from '../views/SiteCartListView.vue';
import GameView from '../views/SiteGameView.vue';
import GameDetail from '../views/SiteGameDeatails.vue';
import ShippingDetailsView from '../views/SiteShippingDetails.vue';
import SummaryView from '../views/SiteSummary.vue';
import PaymentDetailsView from '@/views/SitePaymentDetailsView.vue';

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
    path: '/gameview',
    name: 'GameView',
    component: GameView
  },
  {
    path: '/gamedetail',
    name: 'GameDetail',
    component: GameDetail
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
  },
  {
    path: '/cart',
    name: 'ShoppingCart',
    component: CartListView
  },
  {
    path: '/shipping',
    name: 'ShippingDetails',
    component: ShippingDetailsView
  },
  {
    path: '/summary',
    name: 'SummaryView',
    component: SummaryView,
    props: { originalPrice: 15.55, discountedPrice: 13.25 }
  },
  {
    path: '/payment',
    name: 'PaymentDetails',
    component: PaymentDetailsView
  }
  ]
})

export default router;