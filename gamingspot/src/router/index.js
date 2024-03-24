import { createRouter, createWebHistory } from 'vue-router';
import Home from '../views/game/SiteHome.vue';
import Login from '../views/account/SiteLoginView.vue';
import Register from '../views/account/SiteRegisterView.vue';
import MyOrdersView from '../views/account/SiteMyOrdersView.vue';
import PersonalDataView from '../views/account/SitePersonalDataView.vue';
import PaymentInfoView from '../views/account/SitePaymentInfoView.vue';
import CartListView from '../views/payment/SiteCartListView.vue';
import GameView from '../views/game/SiteGameView.vue';
import GameDetail from '../views/game/SiteGameDetails.vue';
import ShippingDetailsView from '../views/payment/SiteShippingDetailsView.vue';
import SummaryView from '../views/payment/SiteSummaryView.vue';
import PaymentDetailsView from '@/views/payment/SitePaymentDetailsView.vue';
import AdminPanel from '../views/SiteAdmin.vue';
import AddEdit from '../views/SiteAddEdit.vue';



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
    props: route => ({
      account_id: route.params.y,
      selected_button: route.query.selected_button // Assuming selected_button is passed as a query parameter
    })
  },
  {
    path: '/account=:z/personal_data',
    name: 'PersonalData',
    component: PersonalDataView,
    props: route => ({
      account_id: route.params.z,
      selected_button: route.query.selected_button // Assuming selected_button is passed as a query parameter
    })
  },
  {
    path: '/account=:u/payment_info',
    name: 'PaymentInfo',
    component: PaymentInfoView,
    props: route => ({
      account_id: route.params.u,
      selected_button: route.query.selected_button // Assuming selected_button is passed as a query parameter
    })
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
  },
  {
    path: '/adminpanel',
    name: 'AdminPanel',
    component: AdminPanel
  },
  {
    path: '/addedit',
    name: 'AddEdit',
    component: AddEdit
  },
  ]
})

export default router;